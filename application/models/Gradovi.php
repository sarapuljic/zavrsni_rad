<?php

class Gradovi extends Core\Model{

	public function dohvatiGrad(){
	$this->_table="gradovi";
	$gradovi = $this->selectAll();
	return $gradovi;
	}
}

