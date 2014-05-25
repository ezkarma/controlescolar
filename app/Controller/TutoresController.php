<?php

class TutoresController extends AppController {

var $uses = array('Tutor','User','Beca','Carrera');

    public function index() {
		
		if ($this->Session->read('Auth.User.role') === 'alumno'){
		$usuario = $this->Auth->user();
				
			if($usuario['contrasena']==0){
				$this->redirect(array('controller' => 'users','action'=>'password'));
				}
			else {
			
				$usuario = $this->Auth->user();
				$this->set('usuario_registrado', $this->Auth->user());
				$this->set('becas', $this->Beca->find('all', array('conditions' => array('Beca.user_id =' => $usuario['id']))));
				}
		}
		
		else $this->redirect(array('action' => 'logout'));
	}
	
    
	
	public function logout() {
    return $this->redirect($this->Auth->logout());
	}
	
	public function listado() {
	if ($this->Session->read('Auth.User.rol') === 'admin'){
		$this->set('usuario_registrado', $this->Auth->user());
		$this->set('usuarios', $this->Tutor->find('all'));
		
		if ($this->request->is('post')) {
			$matricula = $this->data['UserBusqueda']['username'];
			$this->set('usuarios', $this->User->find('all', array('conditions' => array('User.role =' => 'alumno','User.username LIKE' => '%'.$matricula.'%'))));
		}
	}
	else $this->redirect(array('action' => 'index'));
	}
}

?>