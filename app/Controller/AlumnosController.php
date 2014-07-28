<?php

class AlumnosController extends AppController {

var $uses = array('Alumno','User','Beca','Grupo','AlumnoTemporal');

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
	
	public function importar(){
	$this->AlumnoTemporal->query('TRUNCATE alumno_temporals;');
			if ($this->request->is('post') || $this->request->is('put')) {
					$file = $this->request->data['Document']['submittedfile'];
					move_uploaded_file($this->data['Document']['submittedfile']['tmp_name'],     $_SERVER['DOCUMENT_ROOT'] . '/app/webroot/files/archivo.csv');
					
					$this->AlumnoTemporal->import('archivo.csv');
					$this->redirect(array('action' => 'alumnostemporales'));					
			}
	}
    
	
	public function alumnostemporales(){
		$alumnos = $this->AlumnoTemporal->find('all');	
		$this->set('alumnos',$alumnos);
	}
	
	public function actualizar(){
		$alumnos = $this->AlumnoTemporal->find('all');
		
		foreach ($alumnos as $alumno){
			$this->Alumno->create();
			$this->request->data['Alumno']['curp'] = $alumno['AlumnoTemporal']['curp'];
			$this->request->data['Alumno']['nombre'] = $alumno['AlumnoTemporal']['nombre'];
			$this->request->data['Alumno']['sexo'] = $alumno['AlumnoTemporal']['sexo'];
			
			$this->Alumno->save($this->request->data);		
			
			}
		$this->Session->setFlash('La lista de alumnos ha sido actualizada');
		$this->redirect(array('action' => 'listado'));
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
	
	public function modificar($curp){
		$alumno = $this->Grupo->Alumno->find('first',array('conditions' => array('Alumno.curp' => $curp)));
		$this->set('alumno',$alumno);
		
		 if ($this->request->is('post')) {
            $this->Alumno->create();
            if ($this->Alumno->save($this->request->data)) {
                $this->Session->setFlash(__('Los datos del alumno han sido actualizados'));
                return $this->redirect(array('controller'=>'alumnos','action' => 'listado'));
            }
            $this->Session->setFlash(__('El usuario no pudo ser almacenado. Por favor intente de nuevo.'));
        }
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
			$this->set('usuarios', $this->Grupo->Alumno->find('all'));
			
			if ($this->request->is('post')) {
				$nombre = $this->data['UserBusqueda']['curp'];
				$usuarios = $this->Alumno->find('all', array('conditions' => array('Alumno.nombre_completo LIKE' => '%'.$nombre.'%')));
				$this->set('usuarios', $usuarios);
			}
		}
		else $this->redirect(array('action' => 'index'));
	}
	
	public function eliminar($curp){
		$this->Alumno->delete($curp);
		$this->redirect(array('action' => 'listado'));
	}
}

?>