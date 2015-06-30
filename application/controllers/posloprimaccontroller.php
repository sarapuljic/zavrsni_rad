<?php

class PosloprimacController extends Core\Controller{

    public function registracija(){
        
        $gradovi = $this->dohvatiGrad();
            $this->set("gradovi", $gradovi);
			
	$kategorije = $this->dohvatiKategorijuPosla();
            $this->set("kategorije_poslova", $kategorije);
			
	$drzave = $this->dohvatiDrzavu();
            $this->set("drzave", $drzave);
			
	$strucnaSprema = $this->dohvatiStrucnuSpremu();
            $this->set("strucna_sprema", $strucnaSprema);

	$zupanija = $this->dohvatiZupaniju();
            $this->set("zupanije", $zupanija );			
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
		
    public function dohvatiStrucnuSpremu(){
	$strucnaSprema = new StrucnaSprema();
	$strucnaSprema = $strucnaSprema->dohvatiStrucnuSpremu();
	return $strucnaSprema;
    }
		
    public function dohvatiZupaniju(){
	$zupanija = new Zupanije();
	$zupanija = $zupanija ->dohvatiZupaniju();
	return $zupanija ;
    }
    
    public function spremanje(){
        
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
	
            $errors = array();
            $podaciKorisnik = array();
            $podaciPosloprimac = array();
		
		if(empty($_POST['e_mail'])){
                    $errors['e_mail'] = "Unesi e-mail!";
		}else{
                    //$korisnikPostoji = $this->_model->korisnikPostoji();
		//	if ($korisnikPostoji) {
                            //$row = mysql_num_rows($korisnik) > 0;			
		//	} else {
                            $podaciKorisnik[] = $_POST['e_mail'];
		// 	}
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

		if(empty($_POST['ime'])){
                    $errors['ime'] = "Unesi ime!";
		}else{	
                    if(!preg_match("/^[a-zA-Z ]*$/", $_POST['ime'])){
 			$errors['ime'] = "Dozvoljen unos slova i razmaka!"; 
                    }
                            $podaciPosloprimac[] = $_POST['ime'];
		}
		
		if(empty($_POST['prezime'])){
                    $errors['prezime'] = "Unesi prezime!";
		}else{
                    if(!preg_match("/^[a-zA-Z ]*$/", $_POST['prezime'])){
 			$errors['prezime'] = "Dozvoljen unos slova i razmaka!"; 
                    }
                            $podaciPosloprimac[] = $_POST['prezime'];
		}
		
		if(empty($_POST['spol'])){
                    $errors['spol'] = "Unesi spol!";
		}else{
                    $podaciPosloprimac[] = $_POST['spol'];
		}
		
		if(empty($_POST['datum_rodjenja'])){
                    $errors['datum_rodjenja']="Unesi datum rođenja!";
		}else{
                    //if (!preg_match("/^[a-zA-Z ]*$/", $_POST['naziv_tvrtke'])){
                        //$errors['datum_rodjenja'] = "Dozvoljen unos slova i razmaka!"; 
                    //}
                            $podaciPosloprimac[] = $_POST['datum_rodjenja'];
		}
		
		if(empty($_POST['adresa'])){
                    $errors['adresa'] = "Unesi adresu!";
		}else{
                    //if(strlen($_POST['oib_tvrtke'] <= strlen($_POST['oib_tvrtke']))){
                        //$errors['oib_tvrtke'] = "OIB mora sadržavati 11 znakova!";
                    //}
                        if(!preg_match("/^[a-zA-Z ]*$/", $_POST['adresa'])){
                            $errors['adresa'] = "Dozvoljen unos slova i razmaka!"; 
			}
                            $podaciPosloprimac[] = $_POST['adresa'];		
		}
		
		if(empty($_POST['postanski_broj'])){
                    $errors['postanski_broj'] = "Unesi poštanski broj!";
		}else{
                    //if (strlen($_POST['postanski_broj'] <= 5)){
                        //$errors['postanski_broj'] = "Poštanski broj sadrži 5 znakova!";
                    //}
                        if(!preg_match("/^[0-9]+$/", $_POST['postanski_broj'])){
                            $errors['postanski_broj'] = "Dozvoljen unos brojeva!";
			} 
                                $podaciPosloprimac[] = $_POST['postanski_broj'];
		}
				
		if(empty($_POST['kontakt_broj'])){
                    $errors['kontakt_broj'] = "Unesi kontakt broj!";
		}else{
                    if(!preg_match("/^[0-9]+$/", $_POST['kontakt_broj'])){
   			$errors['kontakt_broj'] = "Dozvoljen unos brojeva!";
                    } 
                            $podaciPosloprimac[] = $_POST['kontakt_broj'];
		}

		if(empty($_POST['gradovi'])){
                    $errors['gradovi'] = "Unesi mjesto!";
		}else{
                    $podaciPosloprimac[] = $_POST['gradovi'];
                    //if (!preg_match("/^[a-zA-Z ]*$/", $podaciPoslodavac)) {
                        //$errors['gradovi'] = "Only letters and white space allowed"; 
                    //}
		}
		
		if(empty($_POST['drzave'])){
                    $errors['drzave'] = "Unesi državu!";
		}else{
                    $podaciPosloprimac[] = $_POST['drzave'];
                    //if (!preg_match("/^[a-zA-Z ]*$/", $podaciPoslodavac)) {
                        //$errors['drzava'] = "Only letters and white space allowed"; 
                    //}
		}

		if(empty($_POST['kategorije_poslova'])){
                    $errors['kategorije_poslova'] = "Unesi kategoriju posla!";
		}else{
                    $podaciPosloprimac[] = $_POST['kategorije_poslova'];
		}

		if(empty($_POST['strucna_sprema'])){
                    $errors['strucna_sprema'] = "Unesi stručnu spremu!";
		}else{
                    $podaciPosloprimac[] = $_POST['strucna_sprema'];
		}
				
		if(empty($_POST['zupanije'])){
                    $errors['zupanije'] = "Unesi županiju!";
		}else{
                    $podaciPosloprimac[] = $_POST['zupanije'];
		}
		
		if(empty($_POST['radno_iskustvo'])){
                    $errors['radno_iskustvo'] = "Unesi radno iskustvo!";
		}else{
                    $podaciPosloprimac[] = $_POST['radno_iskustvo'];
		}
		
		if(empty($_POST['obrazovanje'])){
                    $errors['obrazovanje'] = "Unesi obrazovanje!";
		}else{
                    $podaciPosloprimac[] = $_POST['obrazovanje'];
		}

		if(empty($_POST['kontakt_broj'])){
                    $errors['kontakt_broj'] = "Unesi kontakt broj!";
		}else{
                    $podaciPosloprimac[] = $_POST['kontakt_broj'];
		}
		
		//radno iskustvo
				
		if(empty($_POST['naziv_poduzeca'])){
                    $errors['naziv_poduzeca'] = "Unesi naziv poduzeća!";
		}else{
                    $podaciPosloprimac[] = $_POST['naziv_poduzeca'];
		}
		
		if(empty($_POST['titula'])){
                    $errors['titula'] = "Unesi titulu!";
		}else{
                    $podaciPosloprimac[] = $_POST['titula'];
		}

		if(empty($_POST['pocetak_rada'])){
                    $errors['pocetak_rada'] = "Unesi početak rada!";
		}else{
                    $podaciPosloprimac[] = $_POST['pocetak_rada'];
		}
		
		if(empty($_POST['zavrsetak_rada'])){
                    $errors['zavrsetak_rada'] = "Unesi završetak rada!";
		}else{
                    $podaciPosloprimac[] = $_POST['zavrsetak_rada'];
		}

		//obrazovanje
		
		if(empty($_POST['vrsta_obrazovanja'])){
                    $errors['vrsta_obrazovanja'] = "Unesi  vrstu obrazovanje!";
		}else{
                    $podaciPosloprimac[] = $_POST['vrsta_obrazovanja'];
		}

		if(empty($_POST['naziv_obrazovne_ustanove'])){
                    $errors['naziv_obrazovne_ustanove'] = "Unesi  naziv obrazovne ustanove!";
		}else{
                    $podaciPosloprimac[] = $_POST['naziv_obrazovne_ustanove'];
		}

		if(empty($_POST['pocetak_skolovanja'])){
                    $errors['pocetak_skolovanja'] = "Unesi početak školovanje!";
		}else{
                    $podaciPosloprimac[] = $_POST['pocetak_skolovanja'];
		}
		
		if(empty($_POST['zavrsetak_skolovanja'])){
                    $errors['zavrsetak_skolovanja'] = "Unesi završetak školovanje!";
		}else{
                    $podaciPosloprimac[] = $_POST['zavrsetak_skolovanja'];
		}
                        var_dump($podaciPosloprimac);
                        die();
            
            if(empty($errors)){
                $this->_model->registrirajKorisnika($podaciKorisnik, $podaciPosloprimac);
            } else{
                $this->set('errors', $errors);
                $this->redirect("registracija");
		//header("Location: registracija");
            }
        }   
    }
		
    public function logiranje(){
		
		
    }
}
