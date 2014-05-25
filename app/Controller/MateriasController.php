<?php 

class MateriasController extends AppController {

var $uses = array('Materia','Alumno','Tutor');

    public function agregar() {
		
		if ($this->Session->read('Auth.User.rol') === 'admin'){
	
        if ($this->request->is('post')) {
            $this->Materia->create();
            if ($this->Materia->save($this->request->data)) {
                $this->Session->setFlash(__('La Materia ha sido guardada'));
                return $this->redirect(array('controller' =>'materias','action' => 'index'));
            }
            $this->Session->setFlash(__('La materia no pudo ser guardada. Por favor intente nuevamente'));
        }
		}
	 else $this->redirect(array('action' => 'logout'));
    }
	
	public function index() {
		if ($this->Session->read('Auth.User.rol') === 'admin'){
			
			$this->set('materias', $this->Materia->find('all'));
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