<?php

class PosloprimacController extends Core\Controller{

    public function registracija(){
        
        $this->set('errors', $_SESSION['errors']);
        
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
    
    public function korisnikPostoji($e_mail){
        $postojiLiKorisnikUBazi = new Posloprimac();
        $postojiLiKorisnikUBazi = $postojiLiKorisnikUBazi ->korisnikPostoji($e_mail);
        return $postojiLiKorisnikUBazi;     
    }


    public function spremanje(){
        
        $this->renderPage=false;
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            	
            $errors = array();
            $_SESSION['errors'] = $errors;
            $podaciKorisnik = array();
            $podaciPosloprimac = array();
            $podaciRadnoIskustvo = array();
            $podaciObrazovanje = array();
                     		
		if(empty($_POST['e_mail'])){
                    $_SESSION['errors']['e_mail'] = "Unesi e-mail!";
		}else{
                    
                    if($this->korisnikPostoji($e_mail)){
                        echo "E-mail već postoji u bazi.";
                    }else{
                        $podaciKorisnik[] = $_POST['e_mail'];
                    }  
		}
                         		
		if(empty($_POST['lozinka'])){
                    $_SESSION['errors']['lozinka'] = "Unesi lozinku!";		
		}else{
                    $podaciKorisnik[] = hash('sha256', $_POST['lozinka']);
		}

		if(empty($_POST['ponovite_lozinku'])){
                    $_SESSION['errors']['ponovite_lozinku'] = "Unesi ponovljenu "
                            . "lozinku!";
		}else{
		}
		
		if($_POST['lozinka'] != $_POST['ponovite_lozinku']) {
                    $_SESSION['errors']['ponovite_lozinku'] = "Lozinke nisu "
                            . "iste";
                }

		if(empty($_POST['ime'])){
                    $_SESSION['errors']['ime'] = "Unesi ime!";
		}else{	
                    if(!preg_match("/^[a-zA-Z ]*$/", $_POST['ime'])){
 			$_SESSION['errors']['ime'] = "Dozvoljen unos slova i "
                                . "razmaka!"; 
                    }
                            $podaciPosloprimac[] = $_POST['ime'];
		}
		
		if(empty($_POST['prezime'])){
                    $_SESSION['errors']['prezime'] = "Unesi prezime!";
		}else{
                    if(!preg_match("/^[a-zA-Z ]*$/", $_POST['prezime'])){
 			$_SESSION['errors']['prezime'] = "Dozvoljen unos slova "
                                . "i razmaka!"; 
                    }
                            $podaciPosloprimac[] = $_POST['prezime'];
		}
		
		/*if(empty($_POST['spol'])){
                    $_SESSION['errors']['spol'] = "Unesi spol!";
		}else{
                    $podaciPosloprimac[] = $_POST['spol'];
		}*/

		if(empty($_POST['datum_rodjenja'])){
                    $_SESSION['errors']['datum_rodjenja']="Unesi datum rođenja!";
		}else{
                    //if (!preg_match("/^[a-zA-Z ]*$/", $_POST['naziv_tvrtke'])){
                        //$errors['datum_rodjenja'] = "Dozvoljen unos slova i razmaka!"; 
                    //}
                            $podaciPosloprimac[] = $_POST['datum_rodjenja'];
		}
		
		if(empty($_POST['adresa'])){
                    $_SESSION['errors']['adresa'] = "Unesi adresu!";
		}else{
                    //if(strlen($_POST['oib_tvrtke'] <= strlen($_POST['oib_tvrtke']))){
                        //$errors['oib_tvrtke'] = "OIB mora sadržavati 11 znakova!";
                    //}
                        if(!preg_match("/^[a-zA-Z ]*$/", $_POST['adresa'])){
                            $_SESSION['errors']['adresa'] = "Dozvoljen unos "
                                    . "slova i razmaka!"; 
			}
                            $podaciPosloprimac[] = $_POST['adresa'];		
		}
		
		if(empty($_POST['postanski_broj'])){
                    $_SESSION['errors']['postanski_broj'] = "Unesi poštanski "
                            . "broj!";
		}else{
                    //if (strlen($_POST['postanski_broj'] <= 5)){
                        //$errors['postanski_broj'] = "Poštanski broj sadrži 5 znakova!";
                    //}
                        if(!preg_match("/^[0-9]+$/", $_POST['postanski_broj'])){
                            $_SESSION['errors']['postanski_broj'] = "Dozvoljen "
                                    . "unos brojeva!";
			} 
                                $podaciPosloprimac[] = $_POST['postanski_broj'];
		}
				
		if(empty($_POST['kontakt_broj'])){
                    $_SESSION['errors']['kontakt_broj'] = "Unesi kontakt broj!";
		}else{
                    if(!preg_match("/^[0-9]+$/", $_POST['kontakt_broj'])){
   			$_SESSION['errors']['kontakt_broj'] = "Dozvoljen unos "
                                . "brojeva!";
                    } 
                            $podaciPosloprimac[] = $_POST['kontakt_broj'];
		}

		if(empty($_POST['gradovi'])){
                    $_SESSION['errors']['gradovi'] = "Unesi mjesto!";
		}else{
                    $podaciPosloprimac[] = $_POST['gradovi'];
                    //if (!preg_match("/^[a-zA-Z ]*$/", $podaciPoslodavac)) {
                        //$errors['gradovi'] = "Only letters and white space allowed"; 
                    //}
		}
		
		if(empty($_POST['drzave'])){
                    $_SESSION['errors']['drzave'] = "Unesi državu!";
		}else{
                    $podaciPosloprimac[] = $_POST['drzave'];
                    //if (!preg_match("/^[a-zA-Z ]*$/", $podaciPoslodavac)) {
                        //$errors['drzava'] = "Only letters and white space allowed"; 
                    //}
		}

		if(empty($_POST['kategorije_poslova'])){
                    $_SESSION['errors']['kategorije_poslova'] = "Unesi "
                            . "kategoriju posla!";
		}else{
                    $podaciPosloprimac[] = $_POST['kategorije_poslova'];
		}

		if(empty($_POST['strucna_sprema'])){
                    $_SESSION['errors']['strucna_sprema'] = "Unesi stručnu "
                            . "spremu!";
		}else{
                    $podaciPosloprimac[] = $_POST['strucna_sprema'];
		}
	
		if(empty($_POST['zupanije'])){
                    $_SESSION['errors']['zupanije'] = "Unesi županiju!";
		}else{
                    $podaciPosloprimac[] = $_POST['zupanije'];
		}
		
		//if(empty($_POST['radno_iskustvo'])){
                //    $_SESSION['errors']['radno_iskustvo'] = "Unesi radno iskustvo!";
		//}else{
                //    $podaciPosloprimac[] = $_POST['radno_iskustvo'];
		//}
		
		//if(empty($_POST['obrazovanje'])){
                //    $_SESSION['errors']['obrazovanje'] = "Unesi obrazovanje!";
		//}else{
                //    $podaciPosloprimac[] = $_POST['obrazovanje'];
		//}


		//radno iskustvo
				
		if(empty($_POST['naziv_poduzeca'])){
                    $_SESSION['errors']['naziv_poduzeca'] = "Unesi naziv "
                            . "poduzeća!";
		}else{
                    if(!preg_match("/^[a-zA-Z ]*$/", $_POST['adresa'])){
                        $_SESSION['errors']['adresa'] = "Dozvoljen unos slova "
                                . "i razmaka!"; 
                    }
                    $podaciRadnoIskustvo[] = $_POST['naziv_poduzeca'];
		}
		
		if(empty($_POST['titula'])){
                    $_SESSION['errors']['titula'] = "Unesi titulu!";
		}else{
                    if(!preg_match("/^[a-zA-Z ]*$/", $_POST['adresa'])){
                        $_SESSION['errors']['adresa'] = "Dozvoljen unos slova "
                                . "i razmaka!"; 
                    }
                    $podaciRadnoIskustvo[] = $_POST['titula'];
		}

		if(empty($_POST['pocetak_rada'])){
                    $_SESSION['errors']['pocetak_rada'] = "Unesi početak rada!";
		}else{
                    $podaciRadnoIskustvo[] = $_POST['pocetak_rada'];
		}
		
		if(empty($_POST['zavrsetak_rada'])){
                    $_SESSION['errors']['zavrsetak_rada'] = "Unesi završetak "
                            . "rada!";
		}else{
                    $podaciRadnoIskustvo[] = $_POST['zavrsetak_rada'];
		}

		//obrazovanje
		
		if(empty($_POST['vrsta_obrazovanja'])){
                    $_SESSION['errors']['vrsta_obrazovanja'] = "Unesi  vrstu "
                            . "obrazovanje!";
		}else{
                    if(!preg_match("/^[a-zA-Z ]*$/", $_POST['adresa'])){
                        $_SESSION['errors']['adresa'] = "Dozvoljen unos slova "
                                . "i razmaka!"; 
                    }
                    $podaciObrazovanje[] = $_POST['vrsta_obrazovanja'];
		}

		if(empty($_POST['naziv_obrazovne_ustanove'])){
                    $_SESSION['errors']['naziv_obrazovne_ustanove'] = "Unesi  "
                            . "naziv obrazovne ustanove!";
		}else{
                    if(!preg_match("/^[a-zA-Z ]*$/", $_POST['adresa'])){
                        $_SESSION['errors']['adresa'] = "Dozvoljen unos slova "
                                . "i razmaka!"; 
                    }
                    $podaciObrazovanje[] = $_POST['naziv_obrazovne_ustanove'];
		}

		if(empty($_POST['pocetak_skolovanja'])){
                    $_SESSION['errors']['pocetak_skolovanja'] = "Unesi početak "
                            . "školovanje!";
		}else{
                    $podaciObrazovanje[] = $_POST['pocetak_skolovanja'];
		}
		
		if(empty($_POST['zavrsetak_skolovanja'])){
                    $_SESSION['errors']['zavrsetak_skolovanja'] = "Unesi "
                            . "završetak školovanje!";
		}else{
                    $podaciObrazovanje[] = $_POST['zavrsetak_skolovanja'];
		}
            
            if(empty($_SESSION['errors'])){
                
                $this->_model->registrirajKorisnika($podaciKorisnik, 
                        $podaciObrazovanje, $podaciRadnoIskustvo, 
                        $podaciPosloprimac);
                echo 'Uspješno ste se registrirali!';               
            } else{
                $this->redirect("registracija");
            }
            
        }   
    }
		
    public function logiranje(){
		
		
    }
}
