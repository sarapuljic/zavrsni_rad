<?php

class Zupanije extends Core\Model{

	public function dohvatiZupaniju(){
	$this->_table="zupanije";
	$zupanije = $this->selectAll();
	return $zupanije ;
	}

	
}
