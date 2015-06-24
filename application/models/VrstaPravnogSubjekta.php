<?php

class VrstaPravnogSubjekta extends Core\Model{

	public function dohvatiVps(){
		$this->_table="vrsta_pravnog_subjekta";
		$vps = $this->selectAll();
		return $vps;
	}

}
