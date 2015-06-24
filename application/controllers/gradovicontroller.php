<?php

class GradoviController extends Core\Controller{

	function gradovi(){
		$gradovi=$this->_model->gradovi();	
		$this->set("gradovi", $gradovi); 
	}


}