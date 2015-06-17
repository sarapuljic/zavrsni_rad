<?php

class PoslodavacController extends Core\Controller{

	public function registriraj(){
		
		//$this->_model->insert('korisnik', array('e_mail', 'lozinka', 'tip'), array('sara.puljic92@gmail.com', '12345', '0'));
		
		
		
		//$this->_model->insert('poslodavac', array('id_korisnika', 'ime_kontakt_osobe', 'prezime_kontakt_osobe', 'id_vps', 
		//'naziv_tvrtke', 'oib_tvrtke', 'adresa', 'postanski_broj', 'kontakt_broj', 'id_grada', 'id_drzave', 'id_kategorije'), array('1', 'kasd', 'asdasd', 'sadasd'));
	
		
	if(isset($_POST['submit'])){
		$ime_kontakt_osobe = $_POST['ime_kontakt_osobe'];
 		$prezime_kontakt_osobe = $_POST['prezime_kontakt_osobe'];
 		$naziv_tvrtke = $_POST['naziv_tvrtke'];
 
 	$this->_model->insert('poslodavac', array('ime_kontakt_osobe','prezime_kontakt_osobe', 'naziv_tvrtke'), array('ime_kontakt_osobe','prezime_kontakt_osobe', 'naziv_tvrtke'));
		
	}else{
		echo "";
	}
	
	var_dump($_POST);
	die();
	
}
}