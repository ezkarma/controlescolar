<?php

class AlumnosController extends AppController {

var $uses = array('Alumno','User','Beca','Carrera');

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
	
	public function seleccion(){
		if ($this->request->is('post')) {
				$curp = $this->data['UserBusqueda']['username'];
				$this->redirect(array('controller' => 'alumnos','action'=>'vinculacion/'.$curp));
		}
	}
	
	public function vinculacion($curp){
		$this->set('usuario', $this->Alumno->find('first', array('conditions' => array('Alumno.curp ' => $curp))));
	}
	
	public function vincular($curp){
		
		$tutor = $this->Auth->user();
		echo $tutor['username'];
		echo $curp;
		$this->Alumno->updateAll(array('Alumno.tutor_id' => '"'.$tutor['username'].'"'),array('Alumno.curp' => $curp));
		$this->redirect(array('controller' => 'tutores','action'=>'index'));
	}
	
	public function listado() {
		if ($this->Session->read('Auth.User.rol') === 'admin'){
			$this->set('usuario_registrado', $this->Auth->user());
			$this->set('usuarios', $this->Alumno->find('all'));
			
			if ($this->request->is('post')) {
				$curp = $this->data['UserBusqueda']['curp'];
				$this->set('usuarios', $this->Alumno->find('all', array('conditions' => array('Alumno.curp LIKE' => '%'.$curp.'%'))));
			}
		}
		else $this->redirect(array('action' => 'index'));
	}
}

?>