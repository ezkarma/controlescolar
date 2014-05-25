<?php 

class GruposController extends AppController {

var $uses = array('Grupo','Alumno','Tutor');

    public function agregar() {
		
		if ($this->Session->read('Auth.User.rol') === 'admin'){
	
        if ($this->request->is('post')) {
            $this->Grupo->create();
            if ($this->Grupo->save($this->request->data)) {
                $this->Session->setFlash(__('El Grupo ha sido guardado'));
                return $this->redirect(array('controller' =>'grupos','action' => 'index'));
            }
            $this->Session->setFlash(__('El grupo no pudo ser guardado. Por favor intente nuevamente'));
        }
		}
	 else $this->redirect(array('action' => 'logout'));
    }
	
	public function index() {
		if ($this->Session->read('Auth.User.rol') === 'admin'){
			
			$this->set('grupos', $this->Grupo->find('all'));
			/*
			if ($this->request->is('post')) {
				$matricula = $this->data['UserBusqueda']['username'];
				$this->set('usuarios', $this->User->find('all', array('conditions' => array('User.role =' => 'alumno','User.username LIKE' => '%'.$matricula.'%'))));
			}
			*/
		}
		else $this->redirect(array('action' => 'index'));
	}
		
}
?>