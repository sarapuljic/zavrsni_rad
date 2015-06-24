<?php


class Posloprimac extends Core\Model{

	private $_kolonePosloprimac = array('id_korisnika', 'ime', 'prezime', 'spol', 'datum_rodjenja', 'adresa', 'postanski_broj', 'kontakt_broj', 'id_grada', 'id_drzave', 'id_kategorije', 'id_strucne_spreme', 'id_zupanije', 'id_radnog_iskustva', 'id_obrazovanja');


	function registrirajKorisnika($podaciKorisnik, $podaciPosloprimac) {
				
		$koloneKorisnik = array('e_mail', 'lozinka', 'tip');
		
		$podaciKorisnik[] = 1;

		$this->insert('korisnik', $koloneKorisnik, $podaciKorisnik);
		
		$id = $this->query('SELECT LAST_INSERT_ID();');
			
		$id = (int) $id[0]['LAST_INSERT_ID()'];
			
		array_unshift($podaciPosloprimac, $id);		
		$this->insert('poslodavac', $this->_kolonePosloprimac, $podaciPosloprimac);
		//var_dump($podaciPosloprimac);
		//die();
		
	}


}
