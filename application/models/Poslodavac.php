<?php

class Poslodavac extends Core\Model{

    private $_kolonePoslodavac = array('id_korisnika', 'ime_kontakt_osobe', 'prezime_kontakt_osobe', 'id_vps', 'naziv_tvrtke', 'oib_tvrtke', 'adresa', 'postanski_broj', 'kontakt_broj', 'id_grada', 'id_drzave', 'id_kategorije', 'djelatnost');
		
    public function registrirajKorisnika($podaciKorisnik, $podaciPoslodavac) {
		
                //var_dump($podaciPoslodavac);
		//die();
            
        $koloneKorisnik = array('e_mail', 'lozinka', 'tip');
		
	$podaciKorisnik[] = 2;

	$this->insert('korisnik', $koloneKorisnik, $podaciKorisnik);
		
	$id = $this->query('SELECT LAST_INSERT_ID();');
			
	$id = (int) $id[0]['LAST_INSERT_ID()'];
			
	array_unshift($podaciPoslodavac, $id);		
	
        $this->insert('poslodavac', $this->_kolonePoslodavac, $podaciPoslodavac);
		//var_dump($podaciPoslodavac);
		//die();	
	}
	
    public function korisnikPostoji(){            
            //$this->_table="korisnik";
            //$check = $this->selectAll();      
    }
			
    public function logirajKorisnika($podaciKorisnik){
		
    }
}