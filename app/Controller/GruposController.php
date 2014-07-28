<?php 

class GruposController extends AppController {

var $uses = array('Grupo','Alumno','Tutor','Materia');

    public function agregar() {
		
		if ($this->Session->read('Auth.User.rol') === 'admin'){
	
        if ($this->request->is('post')) {
            $this->Grupo->create();
			$this->request->data['Grupo']['nombre'] = $this->request->data['Grupo']['grado'].$this->request->data['Grupo']['grupo'];
            $existe_grupo = $this->Grupo->find('first',array('conditions'=>array('nombre'=>$this->request->data['Grupo']['nombre'])));
			
			if($existe_grupo != null){
				$this->Session->setFlash(__('Ya existe un grupo registrado con ese nombre'));
			}
			
			else {
				if ($this->Grupo->save($this->request->data)) {
					$this->Session->setFlash(__('El Grupo ha sido guardado'));
					return $this->redirect(array('controller' =>'grupos','action' => 'index'));
				}
				$this->Session->setFlash(__('El grupo no pudo ser guardado. Por favor intente nuevamente'));
			}
			
			}
		}
	 else $this->redirect(array('action' => 'logout'));
    }
	
	public function index() {
		if ($this->Session->read('Auth.User.rol') === 'admin'){
			
			$this->set('grupos', $this->Grupo->find('all',array('order'=>'nombre ASC')));
			/*
			if ($this->request->is('post')) {
				$matricula = $this->data['UserBusqueda']['username'];
				$this->set('usuarios', $this->User->find('all', array('conditions' => array('User.role =' => 'alumno','User.username LIKE' => '%'.$matricula.'%'))));
			}
			*/
		}
		else $this->redirect(array('action' => 'index'));
	}
	
	public function alumnos($id){
		$grupo = $this->Grupo->find('first', array('conditions'=>array('id'=>$id)));
		$this->set('grupo',$grupo);
		
		$alumnos = $this->Alumno->find('all',array('conditions'=>array('grupo_id'=>$id)));
		$this->set('alumnos',$alumnos);
	}
	
	public function materias($id){
		$grupo = $this->Grupo->find('first', array('conditions'=>array('id'=>$id)));
		$this->set('grupo',$grupo);
		
		$materias = $this->Materia->find('all', array('conditions'=>array('grado'=>$grupo['Grupo']['grado'])));
		$this->set('materias',$materias);
	}
	
	public function horario($grupo_nombre){
	
		$this->set('grupo_nombre',$grupo_nombre);
			if ($this->request->is('post') || $this->request->is('put')) {
			
			$file = $this->request->data['Document']['submittedfile'];
			
			echo $this->data['Document']['submittedfile']['tmp_name'];
			 move_uploaded_file($this->data['Document']['submittedfile']['tmp_name'],     $_SERVER['DOCUMENT_ROOT'] . '/app/webroot/files/horarios/' . $grupo_nombre.'.jpg');
			
			//$this->redirect(array('controller' => 'grupos','action' => 'horario/'.$grupo_nombre));
			/*
			if ($this->User->save($this->request->data)) {

					$this->Session->setFlash(__('Thanks for the submission'));

					return $this->redirect(array('controller' => 'users','action' => 'index'));
			}
			*/
		 }	
	}
	
	public function ver_horario($id){
	$grupo = $this->Grupo->find('first', array('conditions'=>array('id'=>$id)));
	$this->set('grupo_nombre',$grupo['Grupo']['nombre']);
		
	
	}
		
}
?>