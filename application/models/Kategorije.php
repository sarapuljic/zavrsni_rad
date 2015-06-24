<?php

class Kategorije extends Core\Model{
	
	public function dohvatiKategorijuPosla(){
		$this->_table="kategorije_poslova";
		$kategorijePosla = $this->selectAll();
		return $kategorijePosla;
	}

	
}
