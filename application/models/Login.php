<?php

class Login extends Core\Model{

	public function a(){
	$this->_table="cities";
	$gradovi = $this->selectAll();
	
	return $gradovi;
	}

}
