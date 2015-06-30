	<div class="container">
	
	<form method="post" action="/poslodavac/spremanje" class="form-signin">
	
	<h2 class="form-signin-heading">Registracija poslodavca</h2>
	
	
	<label>E-mail*</label> 
		<?php if(!empty($_SESSION['errors']['e_mail'])): ?>
			<?php echo $_SESSION['errors']['e_mail'];?>
		<?php endif; ?>
	<br>
	<input type="text" name="e_mail" class="form-control"/>
	
	<label>Lozinka*</label> 
		<?php if(!empty($_SESSION['errors']['lozinka'])): ?>
			<?php echo $_SESSION['errors']['lozinka'];?>
		<?php endif; ?>
	<br>
	<input type="password" name="lozinka" class="form-control"/>
	
	
	<label>Ponovite lozinku*</label> 
		<?php if(!empty($_SESSION['errors']['ponovite_lozinku'])): ?>
			<?php echo $_SESSION['errors']['ponovite_lozinku'];?>
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
	   	<?php if(!empty($errors['vrsta_pravnog_subjekta'])): ?>
			<?php echo $errors['vrsta_pravnog_subjekta'];?>
		<?php endif; ?><br>
	<select name="vrsta_pravnog_subjekta">
		<option value="1" selected="selected">Odaberi</option>
		<?php foreach($vrsta_pravnog_subjekta as $vps){ ?>
     		<option value="<?php echo $vps['id']; ?>"><?php echo $vps['naziv_vps']; ?></option> 
   		<?php } ?>	
   	</select>
   	<br>
	

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
	<input type="text" name="oib_tvrtke" class="form-control" maxlength="11"/>

	
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

	<input type="text" name="postanski_broj" class="form-control" style="width:150px" maxlength="5"/>

	
	<label>Mjesto*</label>	
		<?php if(!empty($errors['mjesto'])): ?>
			<?php echo $errors['mjesto'];?>
		<?php endif; ?>
	<select name="gradovi">
		<option value="1" selected="selected">Odaberi</option>
		<?php foreach($gradovi as $grad){ ?>
     		<option value="<?php echo $grad['id']; ?>"><?php echo $grad['naziv']; ?></option> 
   		<?php } ?>	
   	</select>		
	<br>


	
	<label>Država*</label> 
		<?php if(!empty($errors['drzave'])): ?>
			<?php echo $errors['drzave'];?>
		<?php endif; ?>
	<select name="drzave">
		<option value="1" selected="selected">Odaberi</option>
		<?php foreach($drzave as $d){ ?>
     		<option value="<?php echo $d['id']; ?>"><?php echo $d['naziv_drzave']; ?></option> 
   		<?php } ?>	
   	</select>
	<br>

	
	
	<label>Kategorija*</label>
		<?php if(!empty($errors['kategorije_posla'])): ?>
			<?php echo $errors['kategorije_posla'];?>
		<?php endif; ?>
	<select name="kategorije_poslova">
		<option value="1" selected="selected">Odaberi</option>
		<?php foreach($kategorije_poslova as $kategorija){ ?>
     		<option value="<?php echo $kategorija['id']; ?>"><?php echo $kategorija['naziv_kategorije']; ?></option> 
   		<?php } ?>	
   	</select>		
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
