<?php
class KorisnikController extends Core\Controller {
    
    function korisnik(){
	$korisnik = $this->_model->korisnik();	
	$this->set("korisnik", $korisnik); 
    }
    
}
