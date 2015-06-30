<?php

class PoslodavacController extends Core\Controller{

    public function registracija(){
        
        session_start();    
            //pročitat session i izbrisat 
        $subjekti = $this->dohvatiVps();
            $this->set("vrsta_pravnog_subjekta", $subjekti); 
	//var_dump($subjekti);
			
	$gradovi = $this->dohvatiGrad();
            $this->set("gradovi", $gradovi);
			
	$kategorije = $this->dohvatiKategorijuPosla();
            $this->set("kategorije_poslova", $kategorije);
			
	$drzave = $this->dohvatiDrzavu();
            $this->set("drzave", $drzave);
                                
        //$check = $this->korisnikPostoji();
	//$this->set("korisnik", $check);
        //var_dump($check);
        
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
        
    //public function korisnikPostoji(){
    //	$check = new Poslodavac();
    //	$check = $check->korisnikPostoji();
    //	return $check; 
    //}
    
    public function spremanje(){
        $this->renderPage=false;
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
	
            //$errors = $_SESSION['errors'];
            $errors = array();
            $_SESSION['errors'] = $errors;
            $podaciKorisnik = array();
            $podaciPoslodavac = array();
           
            
		
		if(empty($_POST['e_mail'])){
                    $_SESSION['errors']['ime_kontakt_osobe'] = "Unesi e-mail!";
                    //$this->_model->korisnikPostoji();
                }else{
                    $podaciKorisnik[] = $_POST['e_mail'];
		}
               
		if(empty($_POST['lozinka'])){
                    $_SESSION['errors']['lozinka'] = "Unesi lozinku!";		
		}else{
                    $podaciKorisnik[] = hash('sha256', $_POST['lozinka']);
		}

		if(empty($_POST['ponovite_lozinku'])){
                    $_SESSION['errors']['ponovite_lozinku'] = "Unesi ponovljenu lozinku!";
		}else{
		}
		
		if($_POST['lozinka'] != $_POST['ponovite_lozinku']) {
                    $_SESSION['errors']['ponovite_lozinku'] = "Lozinke nisu iste";
                }

		if(empty($_POST['ime_kontakt_osobe'])){
                    $_SESSION['errors']['ime_kontakt_osobe'] = "Unesi ime kontakt osobe!";
		}else{	
                    if(!preg_match("/^[a-zA-Z ]*$/", $_POST['ime_kontakt_osobe'])){
 			$_SESSION['errors']['ime_kontakt_osobe'] = "Dozvoljen unos slova i razmaka!"; 
                    }
                            $podaciPoslodavac[] = $_POST['ime_kontakt_osobe'];
		}
		
		if(empty($_POST['prezime_kontakt_osobe'])){
                    $_SESSION['errors']['prezime_kontakt_osobe'] = "Unesi prezime kontakt osobe!";
                }else{
                    if(!preg_match("/^[a-zA-Z ]*$/", $_POST['prezime_kontakt_osobe'])){
 			$_SESSION['errors']['prezime_kontakt_osobe'] = "Dozvoljen unos slova i razmaka!"; 
                    }
                            $podaciPoslodavac[] = $_POST['prezime_kontakt_osobe'];
		}
		
		if(empty($_POST['vrsta_pravnog_subjekta'])){
                    $_SESSION['errors']['vrsta_pravnog_subjekta'] = "Unesi vrstu pravnog subjekta tvrtke!";
		}else{
                    $podaciPoslodavac[] = $_POST['vrsta_pravnog_subjekta'];
		}
		
		if(empty($_POST['naziv_tvrtke'])){
                    $_SESSION['errors']['naziv_tvrtke']="Unesi naziv tvrtke!";
		}else{
                    if (!preg_match("/^[a-zA-Z ]*$/", $_POST['naziv_tvrtke'])){
 			$_SESSION['errors']['naziv_tvrtke'] = "Dozvoljen unos slova i razmaka!"; 
                    }
                            $podaciPoslodavac[] = $_POST['naziv_tvrtke'];
		}
		
		if(empty($_POST['oib_tvrtke'])){
                    $_SESSION['errors']['oib_tvrtke'] = "Unesi OIB tvrtke!";
		}else{
                    //if(strlen($_POST['oib_tvrtke'] <= strlen($_POST['oib_tvrtke']))){
		//	$errors['oib_tvrtke'] = "OIB mora sadržavati 11 znakova!";
		//}			
                    if(!preg_match("/^[0-9]+$/", $_POST['oib_tvrtke'])){
   			$_SESSION['errors']['oib_tvrtke'] = "Dozvoljen unos brojeva!";
                    } 
                            $podaciPoslodavac[] = $_POST['oib_tvrtke'];		
		}

		if(empty($_POST['adresa'])){
                    $_SESSION['errors']['adresa'] = "Unesi adresu tvrtke!";
		}else{
                    if(!preg_match("/^[a-zA-Z ]*$/", $_POST['adresa'])){
 			$_SESSION['errors']['adresa'] = "Dozvoljen unos slova i razmaka!"; 
                    }
                            $podaciPoslodavac[] = $_POST['adresa'];
		}
		
		if(empty($_POST['postanski_broj'])){
			$_SESSION['errors']['postanski_broj'] = "Unesi poštanski broj!";
		}else{
			//if (strlen($_POST['postanski_broj'])){
			//	$errors['postanski_broj'] = "Poštanski broj sadrži 5 znakova!";
			//}
                    if(!preg_match("/^[0-9]+$/", $_POST['postanski_broj'])){
   			$_SESSION['errors']['postanski_broj'] = "Dozvoljen unos brojeva!";
                    } 
                            $podaciPoslodavac[] = $_POST['postanski_broj'];
		}
		
		if(empty($_POST['kontakt_broj'])){
                    $_SESSION['errors']['kontakt_broj'] = "Unesi kontakt broj tvrtke!";
		}else{
                    if(!preg_match("/^[0-9]+$/", $_POST['kontakt_broj'])){
   			$_SESSION['errors']['kontakt_broj'] = "Dozvoljen unos brojeva!";
                    } 
                            $podaciPoslodavac[] = $_POST['kontakt_broj'];
		}

		if(empty($_POST['gradovi'])){
                    $_SESSION['errors']['gradovi'] = "Unesi mjesto!";
		}else{
                    $podaciPoslodavac[] = $_POST['gradovi'];
                    //if (!preg_match("/^[a-zA-Z ]*$/", $podaciPoslodavac)) {
 			//$errors['gradovi'] = "Only letters and white space allowed"; 
                    //}
		}
		
		if(empty($_POST['drzave'])){
                    $_SESSION['errors']['drzave'] = "Unesi državu!";
		}else{
                    $podaciPoslodavac[] = $_POST['drzave'];
                    //if (!preg_match("/^[a-zA-Z ]*$/", $podaciPoslodavac)) {
                        //$errors['drzava'] = "Only letters and white space allowed"; 
                    //}
		}

		if(empty($_POST['kategorije_poslova'])){
                    $_SESSION['errors']['kategorije_poslova'] = "Unesi kategoriju posla!";
		}else{
                    $podaciPoslodavac[] = $_POST['kategorije_poslova'];
		}

		if(empty($_POST['djelatnost'])){
                    $_SESSION['errors']['djelatnost'] = "Unesi djelatnost tvrtke!";
		}else{
                    $podaciPoslodavac[] = $_POST['djelatnost'];
		}
                
               //var_dump($_SESSION['errors']);
               //die();
        
        if(empty($errors)){	
            $this->_model->registrirajKorisnika($podaciKorisnik, $podaciPoslodavac);
	}else{
            $this->set($_SESSION['errors'], $errors);    
            //$this->set('errors', $errors); //preko session-a		
            $this->redirect("registracija");
        }
        
       // var_dump($_SESSION);
       // die();
        //session_destroy(); 
    }

	
}

}
