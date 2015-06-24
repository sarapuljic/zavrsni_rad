<?php

class VrstaPravnogSubjektaController extends Core\Controller{

	function vps(){
		$vps=$this->_model->vps();	
		$this->set("vrsta_pravnog_subjekta", $vps); 
	}


}
