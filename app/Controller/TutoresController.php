<?php

class TutoresController extends AppController {

var $uses = array('Tutor','User','Beca','Carrera','Alumno');

    public function index() {
		$usuario_registrado = $this->Auth->user();
		$tutor = $this->Tutor->find('first',array('conditions'=>array('correo'=>$usuario_registrado['username'])));
		$this->set('tutor',$tutor);
		
		$usuarios = $this->Alumno->find('all',array('conditions'=>array('tutor_id'=>$usuario_registrado['username'])));
		$this->set('usuarios',$usuarios);
	} 
	
	public function alumnos($correo) {
		$tutor = $this->Tutor->find('first',array('conditions'=>array('correo'=>$correo)));
		$this->set('tutor',$tutor);
		
		$usuarios = $this->Alumno->find('all',array('conditions'=>array('tutor_id'=>$correo)));
		$this->set('usuarios',$usuarios);
	}  
	
	public function logout() {
    return $this->redirect($this->Auth->logout());
	}
	
	public function listado() {
	if ($this->Session->read('Auth.User.rol') === 'admin'){
		$this->set('usuario_registrado', $this->Auth->user());
		$this->set('usuarios', $this->Tutor->find('all'));
		
		}
	else $this->redirect(array('action' => 'index'));
	}
	
	public function passwords(){
		$tutores = $this->User->find('all',array('conditions'=>array('User.rol'=>'tutor')));
		$this->set('tutores',$tutores);
		
		if ($this->request->is('post')) {
			$matricula = $this->data['UserBusqueda']['username'];
			$this->set('tutores', $this->User->find('all', array('conditions' => array('User.rol =' => 'tutor','User.username LIKE' => '%'.$matricula.'%'))));
		}
	}
	
	public function generar_usuarios(){
		
		$ultimo_usuario = $this->User->find('first',array('order'=>'id DESC'));
		$con_usuarios = $ultimo_usuario['User']['id'];
		
		$tutores = $this->Tutor->find('all',array('conditions'=>array('contrasena_generada'=>0)));
		$this->Tutor->updateAll(array('contrasena_generada' => true));
		
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
			
			$this->request->data['User']['id'] = $con_usuarios+ $con;
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