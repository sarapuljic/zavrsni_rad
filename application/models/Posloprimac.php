<?php


class Posloprimac extends Core\Model{

    private $_koloneKorisnik = array('e_mail', 'lozinka', 'tip');
    
    private $_kolonePosloprimac = array(
        'id_korisnika', 'ime', 'prezime', 'datum_rodjenja', 'adresa',
        'postanski_broj', 'kontakt_broj', 'id_grada', 'id_drzave',
        'id_kategorije', 'id_strucne_spreme', 'id_zupanije',
        'id_radnog_iskustva', 'id_obrazovanja');
    
    private $_koloneObrazovanje = array(
        'vrsta_obrazovanja', 'naziv_obrazovne_ustanove',
        'pocetak_skolovanja', 'zavrsetak_skolovanja');
    
    private $_koloneRadnoIskustvo = array(
        'naziv_poduzeca', 'titula', 'pocetak_rada', 'zavrsetak_rada');
  
    public function registrirajKorisnika($podaciKorisnik, $podaciObrazovanje, 
            $podaciRadnoIskustvo, $podaciPosloprimac) {
                		
	$podaciKorisnik[] = 1;
        
        // Kreiranje korisnika
	$this->insert('korisnik', $this->_koloneKorisnik, $podaciKorisnik);
        
        $id = $this->query('SELECT LAST_INSERT_ID() AS id FROM korisnik '
                . 'LIMIT 1;');
	$id = (int) $id[0]['id'];	
	array_unshift($podaciPosloprimac, $id);
        
        //Kreiranje radnog iskustva    
        $this->insert('radno_iskustvo', $this->_koloneRadnoIskustvo, 
                $podaciRadnoIskustvo);
        
        $idRadnoIskustvo = $this->query('SELECT LAST_INSERT_ID() as id '
                . 'FROM radno_iskustvo LIMIT 1;');		
	$idRadnoIskustvo = (int) $idRadnoIskustvo[0]['id'];
        array_push($podaciPosloprimac, $idRadnoIskustvo);
             
       //Kreiranje obrazovanja
        $this->insert('obrazovanje', $this->_koloneObrazovanje, 
                $podaciObrazovanje);
        
        $idObrazovanje = $this->query('SELECT LAST_INSERT_ID() as id '
                . 'FROM obrazovanje LIMIT 1;');
        $idObrazovanje = (int) $idObrazovanje[0]['id'];
        array_push($podaciPosloprimac, $idObrazovanje);
                      
        //Ubacivanje posloprimca
        $this->insert('posloprimac', $this->_kolonePosloprimac, 
                $podaciPosloprimac);  
    }
    
    public function korisnikPostoji($e_mail){
        $postojiLiKorisnikUBazi = $this->query('SELECT * FROM korisnik WHERE e_mail = :e_mail',
                    array(
                        "e_mail" => $e_mail
                    ));
    }

    public function logirajKorisnika(){
        
    }
}
