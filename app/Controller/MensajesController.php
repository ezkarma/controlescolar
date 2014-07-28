<?php 

class MensajesController extends AppController {

var $uses = array('Mensaje','Tutor','Alumno','Grupo');

    public function index() {
		$usuario = $this->Auth->user();
		$this->set('mensajes', $this->Mensaje->find('all',array('order'=>'id DESC','conditions'=>array('recipiente'=>$usuario['username']))));
	}
	
	public function enviados() {
		$usuario = $this->Auth->user();
		$this->set('mensajes', $this->Mensaje->find('all',array('order'=>'id DESC','conditions'=>array('remitente'=>$usuario['username']))));
	}
	
	 public function ver($id) {
		$usuario = $this->Auth->user();
		if($usuario['rol'] == 'admin'){
			$this->set('usuario',$usuario);
			$mensaje = $this->Mensaje->find('first',array('conditions'=>array('id'=>$id)));
			$mensajes = $this->Mensaje->find('all',array('order'=>'id DESC','conditions'=>array('remitente'=>$mensaje['Mensaje']['remitente'])));
			$this->set('mensajes',$mensajes);
			$this-> set('alumnos', $this->Grupo->Alumno->find('first',array('conditions'=>array('tutor_id'=>$mensaje['Mensaje']['remitente']))));
			$this->Mensaje->updateAll(array('Mensaje.visto' => true),array('Mensaje.id' => $id));
		}
		else {
		$this->set('usuario',$usuario);
		$this->set('mensaje', $this->Mensaje->find('first',array('conditions'=>array('id'=>$id))));
		$this->Mensaje->updateAll(array('Mensaje.visto' => true),array('Mensaje.id' => $id));
		}
	}
	
	public function nuevo() {
		$usuario = $this->Auth->user();
		$this->set('usuario',$usuario);
		
		if ($this->request->is('post')) {
            $this->Mensaje->create();
			if ($this->Mensaje->save($this->request->data)) {
                $this->Session->setFlash(__('El Mensaje ha sido enviado'));
                return $this->redirect(array('controller' =>'mensajes','action' => 'index'));
            }
            $this->Session->setFlash(__('El mensaje no pudo ser enviado. Por favor intente nuevamente'));
        }
		
	}
	
	public function aviso() {
		$usuario = $this->Auth->user();
		$this->set('usuario',$usuario);
		
		$tutores = $this->Tutor->find('all');
		
		if ($this->request->is('post')) {
				foreach($tutores as $tutor){
						 $this->Mensaje->create();
						 $this->request->data['Mensaje']['recipiente'] = $tutor['Tutor']['correo'];
						 $this->Mensaje->save($this->request->data);
						}
						$this->Mensaje->create();
						$this->request->data['Mensaje']['recipiente'] = 'Toda la escuela';
						$this->request->data['Mensaje']['tipo'] = 1;
					
					if ($this->Mensaje->save($this->request->data)) {
					$this->Session->setFlash(__('El Mensaje ha sido enviado'));
					return $this->redirect(array('controller' =>'mensajes','action' => 'index'));
				}
			$this->Session->setFlash(__('El mensaje no pudo ser enviado. Por favor intente nuevamente'));
         }
	}
	
	public function citatorio($grupo_nombre) {
		$this->set('grupo',$grupo_nombre);
		$grupo = $this->Grupo->find('first',array('conditions'=>array('nombre'=>$grupo_nombre)));
		
		$usuario = $this->Auth->user();
		$this->set('usuario',$usuario);
		
		$alumnos = $this->Alumno->find('all',array('conditions'=>array('grupo_id'=>$grupo['Grupo']['id'])));
		
		if ($this->request->is('post')) {
				foreach($alumnos as $alumno){
						 $this->Mensaje->create();
						 $this->request->data['Mensaje']['recipiente'] = $alumno['Alumno']['tutor_id'];
						 $this->Mensaje->save($this->request->data);
						}
						$this->Mensaje->create();
						$this->request->data['Mensaje']['recipiente'] = 'Tutores del Grupo '.$grupo_nombre;
						$this->request->data['Mensaje']['tipo'] = 1;
					
					if ($this->Mensaje->save($this->request->data)) {
					$this->Session->setFlash(__('El Mensaje ha sido enviado'));
					return $this->redirect(array('controller' =>'mensajes','action' => 'index'));
				}
			$this->Session->setFlash(__('El mensaje no pudo ser enviado. Por favor intente nuevamente'));
         }
	}
		
	public function mensaje($recipiente) {
		$usuario = $this->Auth->user();
		$this->set('usuario',$usuario);
		$this->set('recipiente',$recipiente);
		
		if ($this->request->is('post')) {
            $this->Mensaje->create();
			if ($this->Mensaje->save($this->request->data)) {
                $this->Session->setFlash(__('El Mensaje ha sido enviado'));
                return $this->redirect(array('controller' =>'mensajes','action' => 'index'));
            }
            $this->Session->setFlash(__('El mensaje no pudo ser enviado. Por favor intente nuevamente'));
        }
		
	}
		
}
?>