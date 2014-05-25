<?php 

class UsersController extends AppController {

var $uses = array('User','Alumno','Tutor');

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index');
    }
	
	public function login() {
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				return $this->redirect(array('controller' => 'users', 'action' => 'index'));
			}
			$this->Session->setFlash(__('Usuario o contraseña incorrecta, intente de nuevo'));
		}
	}

	public function logout() {
		return $this->redirect($this->Auth->logout());
	}

	  public function registrar() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('El usuario ha sido almacenado'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('El usuario no pudo ser almacenado. Por favor intente de nuevo.'));
        }
    }	
	
	public function index() {
			
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
			
		$this->set('usuarios', $this->User->find('all'));
		
		$this->set('usuario_registrado', $this->Auth->user());
		
		$usuario= $this->Auth->user();
		
		if ($usuario['rol']=='tutor') {
			return $this->redirect(array('controller' => 'tutores', 'action' => 'index'));
		}
		
		else if ($usuario['rol']=='admin') {
		$this->set('admin', $this->Auth->user());
			return $this->redirect(array('controller' => 'admins', 'action' => 'index'));
		}
    }
	
	public function agregar_alumno() {
		
		if ($this->Session->read('Auth.User.rol') === 'admin'){
	
        if ($this->request->is('post')) {
            $this->Alumno->create();
            if ($this->Alumno->save($this->request->data)) {
                $this->Session->setFlash(__('El alumno ha sido guardado'));
                return $this->redirect(array('controller' =>'admins','action' => 'index'));
            }
            $this->Session->setFlash(__('El alumno no pudo ser guardado. Por favor intente nuevamente'));
        }
		}
	 else $this->redirect(array('action' => 'logout'));
    }
	
	public function agregar_tutor() {
		
		if ($this->Session->read('Auth.User.rol') === 'admin'){
	
        if ($this->request->is('post')) {
            $this->Tutor->create();
            if ($this->Tutor->save($this->request->data)) {
                $this->Session->setFlash(__('El tutor ha sido guardado'));
                return $this->redirect(array('controller' =>'tutores','action' => 'listado'));
            }
            $this->Session->setFlash(__('El tutor no pudo ser guardado. Por favor intente nuevamente'));
        }
		}
	 else $this->redirect(array('action' => 'logout'));
    }
		
}
?>