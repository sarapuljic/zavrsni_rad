<?php

class PoslodavacController extends Core\Controller{

	public function registracija(){
	
	
	
	$errors = array('ime_kontakt_osobe', 'prezime_kontakt_osobe', 'vrsta_pravnog_subjekta', 'djelatnost',
		'naziv_tvrtke', 'oib_tvrtke', 'adresa', 'postanski_broj', 'mjesto', 'drzava', 'kontakt_broj');
		
		if(empty('ime_kontakt_osobe')){
			$errors['ime_kontakt_osobe'] = "Unesi ime kontakt osobe!";
		}
		
		if(empty('prezime_kontakt_osobe')){
			$errors['prezime_kontakt_osobe'] = "Unesi prezime kontakt osobe!";
		}
		
		if(empty('vrsta_pravnog_subjetka')){
			$errors['vrsta_pravnog_subjekta'] = "Unesi vrstu pravnog subjekta tvrtke!";
		}
		
		if(empty('djelatnost')){
			$errors['djelatnost'] = "Unesi djelatnost tvrtke!";
		}
		
		if(empty('naziv_tvrtke')){
			$errors['prezime_kontakt_osobe']="Unesi naziv tvrtke!";
		}
		
		if(empty('oib_tvrtke')){
			$errors['oib_tvrtke'] = "Unesi OIB tvrtke!";
		}
		
		if(empty('adresa')){
			$errors['adresa'] = "Unesi adresu tvrtke!";
		}
		
		if(empty('postanski_broj')){
			$errors['postanski_broj'] = "Unesi poštanski broj!";
		}
		
		if(empty('mjesto')){
			$errors['mjesto'] = "Unesi mjesto!";
		}
		
		if(empty('drzava')){
			$errors['drzava'] = "Unesi državu!";
		}
		
		if(empty('kontakt_broj')){
			$errors['kontakt_broj'] = "Unesi kontakt broj tvrtke!";
		}

		if(empty($errors)){
			$this->_model->insert('poslodavac', array('id_korisnika', 'ime_kontakt_osobe', 'prezime_kontakt_osobe', 'id_vps', 'naziv_tvrtke', 'oib_tvrtke', 'adresa', 'postanski_broj', 'kontakt_broj', 'id_grada', 'id_drzave', 'id_kategorije'), array('1', $ime_kontakt_osobe, $prezime_kontakt_osobe, '1', $naziv_tvrtke, $oib_tvrtke, $adresa, $postanski_broj, $kontakt_broj, '1', '1', '1'));
		} else{
			//header("Location: registracija");
		}
	
}
}