<?php

class KategorijePoslovaController extends Core\Controller{

	public function kategorijePoslova(){
		$kategorijePosla=$this->_model->kategorijePoslova();	
		$this->set("kategorije_poslova", $kategorijePosla); 
	}

