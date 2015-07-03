<?php

class Poslodavac extends Core\Model{

    private $_kolonePoslodavac = array(
        'id_korisnika', 'ime_kontakt_osobe', 'prezime_kontakt_osobe', 'id_vps', 
        'naziv_tvrtke', 'oib_tvrtke', 'adresa', 'postanski_broj', 'kontakt_broj', 
        'id_grada', 'id_drzave', 'id_kategorije', 'djelatnost');
    
    private $_koloneKorisnik = array(
        'e_mail', 'lozinka', 'tip');
		
    public function registrirajKorisnika($podaciKorisnik, $podaciPoslodavac) {
	
	$podaciKorisnik[] = 2;

        //Unos korisnika
	$this->insert('korisnik', $this->_koloneKorisnik, $podaciKorisnik);
		
	$id = $this->query('SELECT LAST_INSERT_ID();');	
        //var_dump($id);
        //die();
	$id = (int) $id[0]['LAST_INSERT_ID()'];			
	array_unshift($podaciPoslodavac, $id);		
	      
        //Unos poslodavca
        $this->insert('poslodavac', $this->_kolonePoslodavac, $podaciPoslodavac);

	}
	
    public function korisnikPostoji($e_mail){
        $postojiLiKorisnikUBazi = $this->query('SELECT * FROM korisnik WHERE e_mail = :e_mail', 
                array(
                    ":e_mail" => $e_mail
                ));
        
        return $postojiLiKorisnikUBazi;
    }   
			
    public function logirajKorisnika($e_mail, $lozinka){
        session_start();
	$logiranjeKorisnika = $this->query('SELECT * FROM korisnik WHERE '
                . 'e_mail = :e_mail, lozinka = :lozinka',
                array(
                    ":e_mail" => $e_mail,
                    ":lozinka" => $lozinka
                ));
                return logiranjeKorisnika;
    }
    
}