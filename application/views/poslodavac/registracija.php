
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link rel="stylesheet" type="text/css" href="/public/css/bootstrap/css/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="/public/css/bootstrap/css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="/public/css/bootstrap/css/bootstrap-theme.css"/>
<link rel="stylesheet" type="text/css" href="/public/css/bootstrap/css/bootstrap-theme.min.css"/>
<link rel="stylesheet" type="text/css" href="/public/css/bootstrap/css/signin.css"/>


<title>Untitled 1</title>
</head>

<body>
	
	
	<div class="container">
	
	<form method="post" action="/poslodavac/registracija" class="form-signin">
	
	<h2 class="form-signin-heading">Registracija posloprimca</h2>
	
	
	<label>E-mail*</label> 
		<?php if(!empty($errors['e_mail'])): ?>
			<?php echo $errors['e_mail'];?>
		<?php endif; ?>
	<br>
	<input type="text" name="e_mail" class="form-control"/>
	
	<label>Lozinka*</label> 
		<?php if(!empty($errors['lozinka'])): ?>
			<?php echo $errors['lozinka'];?>
		<?php endif; ?>
	<br>
	<input type="password" name="lozinka" class="form-control"/>
	
	
	<label>Ponovite lozinku*</label> 
		<?php if(!empty($errors['ponovite_lozinku'])): ?>
			<?php echo $errors['ponovite_lozinku'];?>
		<?php endif; ?>
	<br>
	<input type="password" name="ponovite_lozinku" class="form-control"/>		
	
	<label>Ime kontakt osobe*</label>
		<?php if(!empty($errors['ime_kontakt_osobe'])): ?>
			<?php echo $errors['ime_kontakt_osobe'];?>
		<?php endif; ?>
	<br>
	<input type="text" name="ime_kontakt_osobe" class="form-control"/>
	
	
	<label>Prezime kontakt osobe*</label>
		<?php if(!empty($errors['prezime_kontakt_osobe'])): ?>
			<?php echo $errors['prezime_kontakt_osobe'];?>
		<?php endif; ?>
	<br>
	<input type="text" name="prezime_kontakt_osobe" class="form-control"/>


	<label>Vrsta pravnog subjekta*</label>	
	<select name="vrsta_pravnog_subjekta">
		<option value="1" selected="selected">Odaberi</option>
		<?php foreach($vrsta_pravnog_subjekta as $vps){ ?>
     		<option value="<?php echo $vps['id']; ?>"><?php echo $vps['naziv_vps']; ?></option> 
   		<?php } ?>	
   	</select>		
   	
   		<?php if(!empty($errors['vrsta_pravnog_subjekta'])): ?>
			<?php echo $errors['vrsta_pravnog_subjekta'];?>
		<?php endif; ?><br>
	

	<label>Djelatnost*</label>
		<?php if(!empty($errors['djelatnost'])): ?>
			<?php echo $errors['djelatnost'];?>
		<?php endif; ?>
	<br>
	<input type="text" name="djelatnost" class="form-control"/>

	
	<label>Naziv tvrtke*</label>
		<?php if(!empty($errors['naziv_tvrtke'])): ?>
			<?php echo $errors['naziv_tvrtke'];?>
		<?php endif; ?>
	<br>
	<input type="text" name="naziv_tvrtke" class="form-control"/>

	
	<label>OIB tvtke*</label>
		<?php if(!empty($errors['oib_tvrtke'])): ?>
			<?php echo $errors['oib_tvrtke'];?>
		<?php endif; ?>
	<br>
	<input type="text" name="oib_tvrtke" class="form-control"/>

	
	<label>Adresa*</label>
		<?php if(!empty($errors['adresa'])): ?>
			<?php echo $errors['adresa'];?>
		<?php endif; ?>
	<br>
	<input type="text" name="adresa" class="form-control"/>

	
	<label>Poštanski broj*</label>
		<?php if(!empty($errors['postanski_broj'])): ?>
			<?php echo $errors['postanski_broj'];?>
		<?php endif; ?>

	<input type="text" name="postanski_broj" class="form-control" style="width:150px"/>

	
	<label>Mjesto*</label>	
	<select name="gradovi">
			<option value="1" selected="selected">Odaberi</option>
		<?php foreach($gradovi as $grad){ ?>
     		<option value="<?php echo $grad['id']; ?>"><?php echo $grad['naziv']; ?></option> 
   		<?php } ?>	
   	</select>		
		<?php if(!empty($errors['mjesto'])): ?>
			<?php echo $errors['mjesto'];?>
		<?php endif; ?>
	 <br>


	
	<label>Država*</label> 
	<select name="drzave">
		<option value="1" selected="selected">Odaberi</option>
		<?php var_dump($drzave); ?>
		<?php foreach($drzave as $d){ ?>
     		<option value="<?php echo $d['id']; ?>"><?php echo $d['naziv_drzave']; ?></option> 
   		<?php } ?>	
   	</select>
		<?php if(!empty($errors['drzave'])): ?>
			<?php echo $errors['drzave'];?>
		<?php endif; ?>
	<br>

	
	
	<label>Kategorija*</label>
	<select name="kategorije_poslova">
		<option value="1" selected="selected">Odaberi</option>
		<?php foreach($kategorije_poslova as $kategorija){ ?>
     		<option value="<?php echo $kategorija['id']; ?>"><?php echo $kategorija['naziv_kategorije']; ?></option> 
   		<?php } ?>	
   	</select>		
		<?php if(!empty($errors['kategorije_posla'])): ?>
			<?php echo $errors['kategorije_posla'];?>
		<?php endif; ?>
	<br>


	<label>Kontakt telefon*</label>
		<?php if(!empty($errors['kontakt_broj'])): ?>
			<?php echo $errors['kontakt_broj'];?>
		<?php endif; ?>
	<br>
	<input type="text" name="kontakt_broj" class="form-control"/><br>

	
	<input type="submit" name="submit" class="btn btn-lg btn-primary btn-block"/>
	
	
	
	</form>
	</div>
</body>

</html>
