<?php

class TutoresController extends AppController {

var $uses = array('Tutor','User','Beca','Carrera');

    public function index() {
		$usuario_registrado = $this->Auth->user();
		$tutor = $this->Tutor->find('first',array('conditions'=>array('correo'=>$usuario_registrado['username'])));
		$this->set('tutor',$tutor);
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
	
	public function passwords(){
		$tutores = $this->User->find('all',array('conditions'=>array('User.rol'=>'tutor')));
		$this->set('tutores',$tutores);
	}
	
	public function generar_usuarios(){
	
		$this->User->deleteAll(array('User.rol' => 'tutor'));
		
		$tutores = $this->Tutor->find('all');
		
		$passwords = array();
		$con = 0;
		
		foreach($tutores as $tutor){
					
		echo $con;
		
			$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$randomString = '';
			for ($i = 0; $i < 6; $i++) {
				$randomString .= $characters[rand(0, strlen($characters) - 1)];
			}
			
			$con++;
			
			$this->request->data['User']['id'] = $con +2;
			$this->request->data['User']['username'] = $tutor['Tutor']['correo'];
			$this->request->data['User']['password'] = $randomString;
			$this->request->data['User']['primer_password'] = $randomString;
			$this->request->data['User']['rol'] = 'tutor';
			
            $this->User->save($this->request->data); 
		}
		
		$this->redirect(array('controller'=>'tutores','action' => 'passwords'));
		
	}
}

?>