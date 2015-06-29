<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php


?>

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
	
	<form method="post" action="/posloprimac/logiranje" class="form-signin">
	
	
	<label>E-mail*</label> 
		<?php if(!empty($errors['e_mail'])): ?>
			<?php echo $errors['e_mail'];?>
		<?php endif; ?>
	<br>
	<input type="text" name="e_mail" class="form-control"/><br>
	
	
	<label>Lozinka*</label> 
		<?php if(!empty($errors['lozinka'])): ?>
			<?php echo $errors['lozinka'];?>
		<?php endif; ?>
	<br>
	<input type="password" name="lozinka" class="form-control"/><br>
	
	
	<input type="submit" name="submit" class="btn btn-lg btn-primary btn-block"/>
	
	
	
	</form>
	
	</div>
	

</body>

</html>
