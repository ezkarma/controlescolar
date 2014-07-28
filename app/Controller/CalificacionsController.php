<?php 

class CalificacionsController extends AppController {

var $uses = array('Grupo','Alumno','Tutor','Materia','Calificacion');
	
	public function alumno($curp) {
	$alumno = $this->Alumno->find('first',array('conditions'=>array('curp'=>$curp)));
	$this->set('alumno',$alumno);
	$grado = $alumno['Alumno']['grado'];
	
	$materias = $this->Materia->find('all',array('conditions'=>array('grado'=>$grado)));
	$this->set('materias',$materias);	
	
	$calif_1 = $this->Calificacion->find('all',array('conditions'=>array('alumno_id'=>$alumno['Alumno']['id'],'bimestre'=>1)));
	$this->set('calif_1',$calif_1);
	
	$calif_2 = $this->Calificacion->find('all',array('conditions'=>array('alumno_id'=>$alumno['Alumno']['id'],'bimestre'=>2)));
	$this->set('calif_2',$calif_2);
	
	$calif_3 = $this->Calificacion->find('all',array('conditions'=>array('alumno_id'=>$alumno['Alumno']['id'],'bimestre'=>3)));
	$this->set('calif_3',$calif_3);
	
	$calif_4 = $this->Calificacion->find('all',array('conditions'=>array('alumno_id'=>$alumno['Alumno']['id'],'bimestre'=>4)));
	$this->set('calif_4',$calif_4);
	
	$calif_5 = $this->Calificacion->find('all',array('conditions'=>array('alumno_id'=>$alumno['Alumno']['id'],'bimestre'=>5)));
	$this->set('calif_5',$calif_5);
	
	 if ($this->request->is('post')) {
            $this->Calificacion->create();
            if ($this->Calificacion->saveMany($this->request->data['Calificacion'])) {
                $this->Session->setFlash(__('Las calificaciones han sido almacenadas'));
                return $this->redirect(array('action' => 'alumno/'.$curp));
            }
            $this->Session->setFlash(__('Las calificaciones no pudieron ser almacenadas'));
        }
	}
	
	public function modificar ($curp,$bimestre) {
	
	$alumno = $this->Alumno->find('first',array('conditions'=>array('curp'=>$curp)));
	$this->set('alumno',$alumno);
	$grado = $alumno['Alumno']['grado'];
	
	$materias = $this->Materia->find('all',array('conditions'=>array('grado'=>$grado)));
	$this->set('materias',$materias);

	$this->set('bimestre',$bimestre);
	
	 if ($this->request->is('post')) {
            $this->Calificacion->create();
			
			$this->Calificacion->deleteAll(array('alumno_id ='=>$alumno['Alumno']['id'],'bimestre ='=>$bimestre));
			
            if ($this->Calificacion->saveMany($this->request->data['Calificacion'])) {
                $this->Session->setFlash(__('Las calificaciones han sido almacenadas'));
                return $this->redirect(array('action' => 'alumno/'.$curp));
            }
            $this->Session->setFlash(__('Las calificaciones no pudieron ser almacenadas'));
        }
	
	}
	
	public function tutor($curp) {
	$alumno = $this->Alumno->find('first',array('conditions'=>array('curp'=>$curp)));
	$this->set('alumno',$alumno);
	$grado = $alumno['Alumno']['grado'];
	
	$materias = $this->Materia->find('all',array('conditions'=>array('grado'=>$grado)));
	$this->set('materias',$materias);	
	
	$calif_1 = $this->Calificacion->find('all',array('conditions'=>array('alumno_id'=>$alumno['Alumno']['id'],'bimestre'=>1)));
	$this->set('calif_1',$calif_1);
	
	$calif_2 = $this->Calificacion->find('all',array('conditions'=>array('alumno_id'=>$alumno['Alumno']['id'],'bimestre'=>2)));
	$this->set('calif_2',$calif_2);
	
	$calif_3 = $this->Calificacion->find('all',array('conditions'=>array('alumno_id'=>$alumno['Alumno']['id'],'bimestre'=>3)));
	$this->set('calif_3',$calif_3);
	
	$calif_4 = $this->Calificacion->find('all',array('conditions'=>array('alumno_id'=>$alumno['Alumno']['id'],'bimestre'=>4)));
	$this->set('calif_4',$calif_4);
	
	$calif_5 = $this->Calificacion->find('all',array('conditions'=>array('alumno_id'=>$alumno['Alumno']['id'],'bimestre'=>5)));
	$this->set('calif_5',$calif_5);
	
	 }
	
}
?>