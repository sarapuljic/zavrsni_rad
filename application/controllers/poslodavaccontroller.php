<?php

class PoslodavacController extends Core\Controller{

	public function registracija(){
	
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
	
	$errors = array();
	$podaciKorisnik = array();
	$podaciPoslodavac = array();
		
		if(empty($_POST['e_mail'])){
			$errors['e_mail'] = "Unesi e-mail!";
		}else{
		//	$korisnikPostoji = $this->_model->korisnikPostoji();
		//	if ($korisnikPostoji) {
			
		//		$row = mysql_fetch_array($korisnik);
			
		//	} else {
		//		$podaciKorisnik[] = $_POST['e_mail'];
		//	}
		}
		
		if(empty($_POST['lozinka'])){
			$errors['lozinka'] = "Unesi lozinku!";		
		}else{
			$podaciKorisnik[] = hash('sha256', $_POST['lozinka']);
		}

		if(empty($_POST['ponovite_lozinku'])){
			$errors['ponovite_lozinku'] = "Unesi ponovljenu lozinku!";
		}else{
		}
		
		if($_POST['lozinka'] != $_POST['ponovite_lozinku']) {
		    $errors['ponovite_lozinku'] = "Lozinke nisu iste";
     	}

		if(empty($_POST['ime_kontakt_osobe'])){
			$errors['ime_kontakt_osobe'] = "Unesi ime kontakt osobe!";
		}else{	
			if(!preg_match("/^[a-zA-Z ]*$/", $_POST['ime_kontakt_osobe'])){
 			$errors['ime_kontakt_osobe'] = "Only letters and white space allowed"; 
			}
			$podaciPoslodavac[] = $_POST['ime_kontakt_osobe'];
			
		}
		
		if(empty($_POST['prezime_kontakt_osobe'])){
			$errors['prezime_kontakt_osobe'] = "Unesi prezime kontakt osobe!";
		}else{
			if(!preg_match("/^[a-zA-Z ]*$/", $_POST['prezime_kontakt_osobe'])){
 			$errors['prezime_kontakt_osobe'] = "Only letters and white space allowed"; 
			}
			$podaciPoslodavac[] = $_POST['prezime_kontakt_osobe'];
		}
		
		if(empty($_POST['vrsta_pravnog_subjekta'])){
			$errors['vrsta_pravnog_subjekta'] = "Unesi vrstu pravnog subjekta tvrtke!";
		}else{
			$podaciPoslodavac[] = $_POST['vrsta_pravnog_subjekta'];
		}
		
		if(empty($_POST['naziv_tvrtke'])){
			$errors['naziv_tvrtke']="Unesi naziv tvrtke!";
		}else{
			if (!preg_match("/^[a-zA-Z ]*$/", $_POST['naziv_tvrtke'])){
 			$errors['naziv_tvrtke'] = "Only letters and white space allowed"; 
			}
			$podaciPoslodavac[] = $_POST['naziv_tvrtke'];
		}
		
				if(empty($_POST['oib_tvrtke'])){
			$errors['oib_tvrtke'] = "Unesi OIB tvrtke!";
		}else{
			if(!preg_match("/^[0-9]+$/", $_POST['oib_tvrtke'])){
   			$errors['oib_tvrtke'] = "This string contains only digits";
			} 
			$podaciPoslodavac[] = $_POST['oib_tvrtke'];		
		}


		if(empty($_POST['adresa'])){
			$errors['adresa'] = "Unesi adresu tvrtke!";
		}else{
			if (!preg_match("/^[a-zA-Z ]*$/", $_POST['adresa'])){
 			$errors['adresa'] = "Only letters and white space allowed"; 
			}
			$podaciPoslodavac[] = $_POST['adresa'];
		}
		
				if(empty($_POST['postanski_broj'])){
			$errors['postanski_broj'] = "Unesi poštanski broj!";
		}else{
			if(!preg_match("/^[0-9]+$/", $_POST['postanski_broj'])){
   			$errors['postanski_broj'] = "This string contains only digits";
			} 
			$podaciPoslodavac[] = $_POST['postanski_broj'];
		}
		
				if(empty($_POST['kontakt_broj'])){
			$errors['kontakt_broj'] = "Unesi kontakt broj tvrtke!";
		}else{
			if(!preg_match("/^[0-9]+$/", $_POST['kontakt_broj'])){
   			$errors['kontakt_broj'] = "This string contains only digits";
			} 
			$podaciPoslodavac[] = $_POST['kontakt_broj'];
		}


		if(empty($_POST['gradovi'])){
			$errors['gradovi'] = "Unesi mjesto!";
		}else{
			$podaciPoslodavac[] = $_POST['gradovi'];
			
			//if (!preg_match("/^[a-zA-Z ]*$/", $podaciPoslodavac)) {
 			//$errors['gradovi'] = "Only letters and white space allowed"; 
			//}

		}
		
				if(empty($_POST['drzave'])){
			$errors['drzave'] = "Unesi državu!";
		}else{
			$podaciPoslodavac[] = $_POST['drzave'];
			
			//if (!preg_match("/^[a-zA-Z ]*$/", $podaciPoslodavac)) {
 			//$errors['drzava'] = "Only letters and white space allowed"; 
			//}
		}


		if(empty($_POST['kategorije_poslova'])){
			$errors['kategorije_poslova'] = "Unesi kategoriju posla!";
		}else{
			$podaciPoslodavac[] = $_POST['kategorije_poslova'];
		}



		
		if(empty($_POST['djelatnost'])){
			$errors['djelatnost'] = "Unesi djelatnost tvrtke!";
		}else{
			$podaciPoslodavac[] = $_POST['djelatnost'];
		}
		
		
		if(empty($errors)){
			//var_dump('nema grešaka');
			
			$this->_model->registrirajKorisnika($podaciKorisnik, $podaciPoslodavac);
		} else{
			$this->set('errors', $errors);		
			
			//header("Location: registracija");
		}
	}
			$subjekti = $this->dohvatiVps();
			$this->set("vrsta_pravnog_subjekta", $subjekti); 
			//var_dump($subjekti);
			
			$gradovi = $this->dohvatiGrad();
			$this->set("gradovi", $gradovi);
			
			$kategorije = $this->dohvatiKategorijuPosla();
			$this->set("kategorije_poslova", $kategorije);
			
			$drzave = $this->dohvatiDrzavu();
			$this->set("drzave", $drzave);

}

	public function dohvatiVps(){
		$vps = new /*Core\*/VrstaPravnogSubjekta(); 
		$subjekti = $vps->dohvatiVps();	
		return $subjekti;
	}
	
	public function dohvatiGrad(){
		$grad = new Gradovi();
		$gradovi = $grad->dohvatiGrad();
		return $gradovi;
	}
	
	public function dohvatiKategorijuPosla(){
		$kategorijePosla = new Kategorije();
		$kategorije = $kategorijePosla->dohvatiKategorijuPosla();
		return $kategorije; 
	}
	
	public function dohvatiDrzavu(){
	$drzave = new Drzave();
	$drzave = $drzave->dohvatiDrzavu();
	return $drzave; 
	}

	
	
	public function logiranje(){

	}
	
}