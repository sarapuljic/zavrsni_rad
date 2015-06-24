<?php


class Drzave extends Core\Model{
	
	public function dohvatiDrzavu(){
	$this->_table="drzave";
	$drzave = $this->selectAll();
	return $drzave;
	}


}
