
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link rel="stylesheet" type="text/css" href="bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap-theme.css"/>
<link rel="stylesheet" type="text/css" href="bootstrap-theme.min.css"/>

<title>Untitled 1</title>
</head>

<body>
	
	<form method="post" action="registracija">
	
	<label>E-mail</label> <br>
	<input type="text" name="e_mail"/><br>
	
	<label>Lozinka</label> <br>
	<input type="text" name="lozinka"/><br>
	
	<label>Ponovite lozinku</label> <br>
	<input type="text" name="ponovite_lozinku"/><br>
	
	<label>Ime kontakt osobe</label><span>* <?php echo $ime_kontakt_osobe_Err;?></span> <br>
	<input type="text" name="ime_kontakt_osobe"/><br>
	
	<label>Prezime kontakt osobe</label><span>* <?php echo $prezime_kontakt_osobe_Err;?></span><br>
	<input type="text" name="prezime_kontakt_osobe"/><br>

	<label>Vrsta pravnog subjekta</label><span>* <?php echo $vrsta_pravnog_subjekta_Err;?></span><br>
	<input type="text" name="vrsta_pravnog_subjekta"/><br>

	
	<label>Djelatnost</label><span>* <?php echo $djelatnost_Err;?></span> <br>
	<input type="text" name="djelatnost"/><br>

	
	<label>Naziv tvrtke</label><span>* <?php echo $naziv_tvrtke_Err;?></span><br>
	<input type="text" name="naziv_tvrtke"/><br>

	
	<label>OIB tvtke</label><span>* <?php echo $oib_tvrtke_Err;?></span><br>
	<input type="text" name="oib_tvrtke"/><br>

	
	<label>Adresa</label><span>* <?php echo $adresa_Err;?></span><br>
	<input type="text" name="adresa"/><br>

	
	<label>Poštanski broj</label><span>* <?php echo $postanski_broj_Err;?></span><br>
	<input type="text" name="postanski_broj"/><br>

	
	<label>Mjesto</label><span>* <?php echo $mjesto_Err;?></span> <br>
	<input type="text" name="mjesto"/><br>

	
	<label>Država</label><span>* <?php echo $drzava_Err;?></span><br>
	<input type="text" name="drzava"/><br>

	
	<label>Kontakt telefon</label><span>* <?php echo $kontakt_telefon_osobe_Err;?></span><br>
	<input type="text" name="kontakt_telefon"/><br><br>

	
	<input type="submit" name="submit"/>
	
	
	
	</form>
	

</body>

</html>
