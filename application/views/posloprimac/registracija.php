
<div class="container">

    <form method="post" action="/posloprimac/spremanje" class="form-signin">
	
	<label>E-mail*</label> 
            <?php if(!empty($errors['e_mail'])): ?>
		<?php echo $errors['e_mail'];?>
            <?php endif; ?><br>
	<input type="text" name="e_mail" class="form-control"/><br>
	
	<label>Lozinka*</label> 
            <?php if(!empty($errors['lozinka'])): ?>
		<?php echo $errors['lozinka'];?>
            <?php endif; ?><br>
	<input type="password" name="lozinka" class="form-control"/><br>
	
	<label>Ponovite lozinku*</label> 
            <?php if(!empty($errors['ponovite_lozinku'])): ?>
		<?php echo $errors['ponovite_lozinku'];?>
            <?php endif; ?><br>
	<input type="password" name="ponovite_lozinku" class="form-control"/><br>
	
	<label>Ime*</label>
            <?php if(!empty($errors['ime'])): ?>
		<?php echo $errors['ime'];?>
            <?php endif; ?><br>
	<input type="text" name="ime" class="form-control"/><br>
	
	<label>Prezime*</label>
            <?php if(!empty($errors['prezime'])): ?>
		<?php echo $errors['prezime'];?>
            <?php endif; ?><br>
	<input type="text" name="prezime" class="form-control"/><br>
<!--
	<label>Spol*</label>
             <?php/* if(!empty($errors['spol'])): */?>
		<?php/* echo $errors['spol'];*/?>
            <?php/* endif; */?><br>
            <input type="radio" name="sex" value="male" class="optradio">Muško</input>
            <input type="radio" name="sex" value="female" class="optradio">žensko</input><br>
-->
            
	
	<label>Datum rođenja*</label>
            <?php if(!empty($errors['datum_rodjenja'])): ?>
                <?php echo $errors['datum_rodjenja'];?>
            <?php endif; ?><br>
	<input type="date" name="datum_rodjenja" class="form-control"/><br>

	<label>Adresa*</label>
            <?php if(!empty($errors['adresa'])): ?>
                <?php echo $errors['adresa'];?>
            <?php endif; ?><br>
	<input type="text" name="adresa" class="form-control"/><br>
	
	<label>Poštanski broj*</label>
            <?php if(!empty($errors['postanski_broj'])): ?>
                <?php echo $errors['postanski_broj'];?>
            <?php endif; ?><br>
	<input type="text" name="postanski_broj" class="form-control"/><br>

	<label>Mjesto*</label>
            <select name="gradovi">
		<option value="" disabled selected class="form-control">Odaberi</option>
                    <?php foreach($gradovi as $grad){ ?>
                        <option value="<?php echo $grad['id']; ?>"><?php echo $grad['naziv']; ?></option> 
                    <?php } ?>	
            </select>	
        
            <?php if(!empty($errors['gradovi'])): ?>
		<?php echo $errors['gradovi'];?>
            <?php endif; ?><br>
	
	<label>Država*</label>
            <select name="drzave">
		<option value="" disabled selected class="form-control">Odaberi</option>
                    <?php foreach($drzave as $d){ ?>
                        <option value="<?php echo $d['id']; ?>"><?php echo $d['naziv_drzave']; ?></option> 
                    <?php } ?>	
            </select>
        
            <?php if(!empty($errors['drzave'])): ?>
		<?php echo $errors['drzave'];?>
            <?php endif; ?><br>
	
	<label>Kategorija*</label> 
            <select name="kategorije_poslova">
		<option value="" disabled selected class="form-control">Odaberi</option>
                    <?php foreach($kategorije_poslova as $kategorija){ ?>
                        <option value="<?php echo $kategorija['id']; ?>"><?php echo $kategorija['naziv_kategorije']; ?></option> 
                    <?php } ?>	
            </select>
        
            <?php if(!empty($errors['kategorije_poslova'])): ?>
		<?php echo $errors['kategorije_poslova'];?>
            <?php endif; ?><br>
	
	<label>Stručna sprema*</label>
            <select name="strucna_sprema">
		<option value="" disabled selected class="form-control">Odaberi</option>
                    <?php foreach($strucna_sprema as $sprema){ ?>
                        <option value="<?php echo $sprema['id']; ?>"><?php echo $sprema['naziv_strucne_spreme']; ?></option> 
                    <?php } ?>	
            </select>		
            <?php if(!empty($errors['strucna_sprema'])): ?>
		<?php echo $errors['strucna_sprema'];?>
            <?php endif; ?><br>
	
	<label>Županije*</label>
            <select name="zupanije">
		<option value="" disabled selected class="form-control">Odaberi</option>
                    <?php foreach($zupanije as $z){ ?>
                        <option value="<?php echo $z['id']; ?>"><?php echo $z['naziv_zupanije']; ?></option> 
                    <?php } ?>	
            </select>		
            <?php if(!empty($errors['zupanije'])): ?>
		<?php echo $errors['zupanije'];?>
            <?php endif; ?><br>
	
	<label>Kontakt telefon*</label>
            <?php if(!empty($errors['kontakt_broj'])): ?>
                <?php echo $errors['kontakt_broj'];?>
            <?php endif; ?><br>
	<input type="text" name="kontakt_broj" class="form-control"/><br><br>
	
	<label>Radno iskustvo</label><br><br>
	
	<label>Naziv poduzeća*</label>
            <?php if(!empty($errors['naziv_poduzeca'])): ?>
		<?php echo $errors['naziv_poduzeca'];?>
            <?php endif; ?>
        <input type="text" name="naziv_poduzeca" class="form-control"/><br>
	
	<label>Titula*</label>
            <?php if(!empty($errors['titula'])): ?>
		<?php echo $errors['titula'];?>
            <?php endif; ?>
        <input type="text" name="titula" class="form-control"/><br>
	
	<label>Datum početka rada*</label>
            <?php if(!empty($errors['pocetak_rada'])): ?>
		<?php echo $errors['pocetak_rada'];?>
            <?php endif; ?>
        <input type="date" name="pocetak_rada" class="form-control"/><br>
	
	<label>Datum završetka rada*</label>
            <?php if(!empty($errors['zavrsetak_rada'])): ?>
		<?php echo $errors['zavrsetak_rada'];?>
            <?php endif; ?>
        <input type="date" name="zavrsetak_rada" class="form-control"/><br><br>
	
	<label>Obrazovanje</label><br><br>
	
	<label>Vrsta obrazovanja* (tečaj/srednja škola/fakultet...)</label>
            <?php if(!empty($errors['vrsta_obrazovanja'])): ?>
		<?php echo $errors['vrsta_obrazovanja'];?>
            <?php endif; ?>
        <input type="text" name="vrsta_obrazovanja" class="form-control"/><br>
	
	<label>Naziv obrazovne ustanove*</label>
            <?php if(!empty($errors['naziv_obrazovne_ustanove'])): ?>
		<?php echo $errors['naziv_obrazovne_ustanove'];?>
            <?php endif; ?>
        <input type="text" name="naziv_obrazovne_ustanove" class="form-control"/><br>
	
	<label>Datum početka obrazovanja*</label>
            <?php if(!empty($errors['pocetak_skolovanja'])): ?>
		<?php echo $errors['pocetak_skolovanja'];?>
            <?php endif; ?>
        <input type="date" name="pocetak_skolovanja" class="form-control"/><br>
	
	<label>Datum završetka obrazovanja*</label>
            <?php if(!empty($errors['zavrsetak_skolovanja'])): ?>
		<?php echo $errors['zavrsetak_skolovanja'];?>
            <?php endif; ?>
        <input type="date" name="zavrsetak_skolovanja" class="form-control"/><br><br>
	
        <input type="submit" name="submit" class="btn btn-lg btn-primary btn-block"/>
	
    </form>
    
</div>


