<?php

class LoginController extends Core\Controller{

	function hello(){
	$a=$this->_model->a();
	
	$this->set("ime", $a);
	}
}


