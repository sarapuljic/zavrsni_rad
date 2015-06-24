<?php

class DrzaveController extends Core\Controller{

	function drzave(){
		$drzave=$this->_model->drzave();	
		$this->set("drzave", $drzave); 
	}


}
