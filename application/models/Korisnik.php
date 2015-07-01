<?php

class Korisnik extends Core\Model {

    public function dohvatiKorisnika(){
	$this->_table="korisnik";
	$korisnik = $this->selectAll();
	return $korisnik;
	}
    
}
