<?php

class LoginController extends Core\Controller{

	public function logiranje(){
        
         if ($_SERVER["REQUEST_METHOD"] == "POST"){
             
            $errors = array();
            $_SESSION['errors'] = $errors;
            $podaciKorisnik = array();

        if(empty($_POST['e_mail'] && filter_var($_POST['e_mail'], FILTER_VALIDATE_EMAIL))){
                    $_SESSION['errors']['e_mail'] = "Unesi e-mail!";   
                    
                }else{   
                    //inicijalizirati da pročita e_mail iz $podaciKorisnik = array();
                    $e_mail = $_POST['e_mail'];
                        
                    if($this->korisnikPostoji($e_mail) == $e_mail){
                        $_SESSION['errors']['e_mail'] = "E-mail već postoji";
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
             
         }
        
    }
}


