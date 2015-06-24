<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>

	<form method="post" action="/posloprimac/registracija">
	
	<label>E-mail</label> 
	<span>* 
		<?php if(!empty($errors['e_mail'])): ?>
			<?php echo $errors['e_mail'];?>
		<?php endif; ?>
	</span><br>
	<input type="text" name="e_mail"/><br>
	
	
	<label>Lozinka</label> 
	<span>* 
		<?php if(!empty($errors['lozinka'])): ?>
			<?php echo $errors['lozinka'];?>
		<?php endif; ?>
	</span><br>
	<input type="password" name="lozinka"/><br>
	
	
	<label>Ponovite lozinku</label> 
	<span>* 
		<?php if(!empty($errors['ponovite_lozinku'])): ?>
			<?php echo $errors['ponovite_lozinku'];?>
		<?php endif; ?>
	</span><br>
	<input type="password" name="ponovite_lozinku"/><br>
	
	
	<label>Ime</label>
	<span>* 
		<?php if(!empty($errors['ime'])): ?>
			<?php echo $errors['ime'];?>
		<?php endif; ?>
	</span><br>
	<input type="text" name="ime"/><br>
	
	
	<label>Prezime</label>
	<span>* 
		<?php if(!empty($errors['prezime'])): ?>
			<?php echo $errors['prezime'];?>
		<?php endif; ?>
	</span><br>
	<input type="text" name="prezime"/><br>


	<label>Spol</label>
	<span>*
		<input type="radio" name="sex" value="male">Muško</input>
			<input type="radio" name="sex" value="female">žensko</input><br>	
   	</span>
	
	
	<label>Datum rođenja</label><span>* 
		<?php if(!empty($errors['datum_rodjenja'])): ?>
			<?php echo $errors['datum_rodjenja'];?>
		<?php endif; ?>
	</span> <br>
	<input type="date" name="datum_rodjenja"/><br>

	
	<label>Adresa</label><span>*
		<?php if(!empty($errors['adresa'])): ?>
			<?php echo $errors['adresa'];?>
		<?php endif; ?>
	
 	</span><br>
	<input type="text" name="adresa"/><br>
	
	
	<label>Poštanski broj</label><span>* 
		<?php if(!empty($errors['postanski_broj'])): ?>
			<?php echo $errors['postanski_broj'];?>
		<?php endif; ?>
	</span><br>
	<input type="text" name="postanski_broj"/><br>


	<label>Mjesto</label><span>* 
	<select name="gradovi">
			<option value="1" selected="selected">Odaberi</option>
		<?php foreach($gradovi as $grad){ ?>
     		<option value="<?php echo $grad['id']; ?>"><?php echo $grad['naziv']; ?></option> 
   		<?php } ?>	
   	</select>		

		<?php if(!empty($errors['mjesto'])): ?>
			<?php echo $errors['mjesto'];?>
		<?php endif; ?>
	</span> <br>
	
	<label>Država</label><span>* 
	<select name="drzave">
		<option value="1" selected="selected">Odaberi</option>
		<?php foreach($drzave as $d){ ?>
     		<option value="<?php echo $d['id']; ?>"><?php echo $d['naziv_drzave']; ?></option> 
   		<?php } ?>	
   	</select>
		<?php if(!empty($errors['drzave'])): ?>
			<?php echo $errors['drzave'];?>
		<?php endif; ?>
	</span><br>
	
	
	<label>Kategorija</label><span>* 
	<select name="kategorije_poslova">
		<option value="1" selected="selected">Odaberi</option>
		<?php foreach($kategorije_poslova as $kategorija){ ?>
     		<option value="<?php echo $kategorija['id']; ?>"><?php echo $kategorija['naziv_kategorije']; ?></option> 
   		<?php } ?>	
   	</select>		
		<?php if(!empty($errors['kategorije_posla'])): ?>
			<?php echo $errors['kategorije_posla'];?>
		<?php endif; ?>
	</span><br>
	
	<label>Stručna sprema</label><span>* 
	<select name="naziv_strucne_spreme">
		<option value="1" selected="selected">Odaberi</option>
		<?php foreach($strucna_sprema as $sprema){ ?>
     		<option value="<?php echo $sprema['id']; ?>"><?php echo $sprema['naziv_kategorije']; ?></option> 
   		<?php } ?>	
   	</select>		
		<?php if(!empty($errors['naziv_strucne_spreme'])): ?>
			<?php echo $errors['naziv_strucne_spreme'];?>
		<?php endif; ?>
	</span><br>
	
	
	<label>Županije</label><span>* 
	<select name="zupanije">
		<option value="1" selected="selected">Odaberi</option>
		<?php foreach($zupanije as $z){ ?>
     		<option value="<?php echo $z['id']; ?>"><?php echo $z['naziv_zupanije']; ?></option> 
   		<?php } ?>	
   	</select>		
		<?php if(!empty($errors['naziv_zupanije'])): ?>
			<?php echo $errors['naziv_zupanije'];?>
		<?php endif; ?>
	</span><br>

	
	<label>Kontakt telefon</label><span>* 
		<?php if(!empty($errors['kontakt_broj'])): ?>
			<?php echo $errors['kontakt_broj'];?>
		<?php endif; ?>
	</span><br>
	<input type="text" name="kontakt_broj"/><br><br>
	
	
	<label>Radno iskustvo</label><br><br>
	
	<label>Naziv poduzeća</label><br>
	<input type="text" name="naziv_poduzeca"/><br>
	
	<label>Titula</label><br>
	<input type="text" name="titula"/><br>
	
	<label>Datum početka rada</label><br>
	<input type="date" name="pocetak_rada"/><br>
	
	<label>Datum završetka rada</label><br>
	<input type="date" name="zavrsetak_rada"/><br><br>
	
	
	<label>Obrazovanje</label><br><br>
	
	<label>Vrsta obrazovanja (tečaj/srednja škola/fakultet...)</label><br>
	<input type="text" name="vrsta_obrazovanja"/><br>
	
	<label>Naziv obrazovne ustanove</label><br>
	<input type="text" name="naziv_obrazovne_ustanove"/><br>
	
	<label>Datum početka obrazovanja</label><br>
	<input type="date" name="pocetak_skolovanja"/><br>
	
	<label>Datum završetka obrazovanja</label><br>
	<input type="date" name="zavrsetak_skolovanja"/><br><br>
	
	
	<input type="submit" name="submit"/>
	
	
	
	</form>



</body>

</html>
