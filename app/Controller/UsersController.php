<?php 

class UsersController extends AppController {

var $uses = array('User','Alumno','Tutor','Grupos');

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
		
		if ($usuario['rol']==='tutor') {
			return $this->redirect(array('controller' => 'tutores', 'action' => 'index'));
		}
		
		else if ($usuario['rol']=='admin') {
		$this->set('admin', $this->Auth->user());
			return $this->redirect(array('controller' => 'admins', 'action' => 'index'));
		}
    }
	
	public function agregar_alumno() {
		
		if ($this->Session->read('Auth.User.rol') === 'admin'){
		
		$this->set('grupos', $this->Alumno->Grupo->find('list',array('order'=>array('nombre'=>'asc'))));
		
        if ($this->request->is('post')) {
		echo 'Entro';
            $this->Alumno->create();
			$this->request->data['Alumno']['nombre_completo'] = $this->request->data['Alumno']['nombre'].' '.$this->request->data['Alumno']['apellidopat'].' '.$this->request->data['Alumno']['apellidomat'];
			if ($this->Alumno->save($this->request->data)) {
                $this->Session->setFlash(__('El alumno ha sido guardado'));
                return $this->redirect(array('controller' =>'alumnos','action' => 'listado'));
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
				
				$tutor = $this->Tutor->find('first',array('order'=>'id DESC'));				
				///
				$ultimo_usuario = $this->User->find('first',array('order'=>'id DESC'));
				$con_usuarios = $ultimo_usuario['User']['id'];
		
				$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
				$randomString = '';
				for ($i = 0; $i < 6; $i++) {
					$randomString .= $characters[rand(0, strlen($characters) - 1)];
				}
				
				$this->request->data['User']['id'] = $con_usuarios+ 1;
				$this->request->data['User']['username'] = $tutor['Tutor']['correo'];
				$this->request->data['User']['password'] = $randomString;
				$this->request->data['User']['primer_password'] = $randomString;
				$this->request->data['User']['rol'] = 'tutor';
				
				$this->User->save($this->request->data); 
				///
				
                return $this->redirect(array('controller' =>'tutores','action' => 'listado'));
            }
            $this->Session->setFlash(__('El tutor no pudo ser guardado. Por favor intente nuevamente'));
        }
		}
	 else $this->redirect(array('action' => 'logout'));
    }
	
	
	public function perfil() {
		$user = $this->Auth->user();
		$this->set('user',$this->Auth->user());
		
		if($user['rol'] != 'admin'){
			$usuario = $this->Tutor->find('first',array('conditions' => array('correo' => $user['username'])));	
			$this->set('usuario_registrado', $usuario);
		}
		
		else $this->set('usuario_registrado', $user);
	}
	
	public function password() {
	
		$this->set('usuario', $this->Auth->user());
		$usuario = $this->Auth->user();
					
		$user=$this->User->find('first',array('conditions' => array('username' => $usuario['username'])));
        
		if ($this->request->is('post') || $this->request->is('put')) {
            $this->request->data;
			
			//Checa contraseña actual
			if ($user['User']['password'] ==AuthComponent::password($this->request->data['User']['password_vieja'])){
						
				//Checa si las contraseñas coinciden
				if ($this->request->data['User']['password_nueva'] == $this->request->data['User']['password']){
					if ($this->User->save($this->request->data)) {
						//$this->Alumno->updateAll(array('Alumno.contrasena' => 1), array('Alumno.matricula' => $user['User']['username']));
						$this->Session->setFlash('La contraseña ha sido modificada');
						return $this->redirect(array('controller' => 'users', 'action' => 'logout'));
						
					}
					
				}
				else $this->Session->setFlash(__('Las contraseñas no coinciden'));
			}
			else $this->Session->setFlash(__('Contraseña incorrecta'));
		}
				
	}
		
}
?>