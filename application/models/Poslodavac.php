<?php

class Poslodavac extends Core\Model{
	
public function selectFromPoslodavac(){
	$this->_table="poslodavac";
	$registracija = $this->selectAll();
	return $registracija;
	var_dump($registracija);
}

	
public function insert($ime_kontakt_osobe,$prezime_kontakt_osobe,$naziv_tvrtke){
  	$registracija = mysql_query("INSERT poslodavac(ime_kontakt_osobe,prezime_kontakt_osobe,naziv_tvrtke) VALUES('$ime_kontakt_osobe','$prezime_kontakt_osobe','$naziv_tvrtke')");
  	return $registracija;
 	}





}