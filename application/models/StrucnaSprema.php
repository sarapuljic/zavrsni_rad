<?php

class StrucnaSprema extends Core\Model{

	public function dohvatiStrucnuSpremu(){
	$this->_table="strucna_sprema";
	$strucnaSprema = $this->selectAll();
	return $strucnaSprema ;
	}


}
