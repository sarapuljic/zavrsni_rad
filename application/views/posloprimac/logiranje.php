<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php


?>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link rel="stylesheet" type="text/css" href="../login/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="../login/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="../login/bootstrap-theme.css"/>
<link rel="stylesheet" type="text/css" href="../login/bootstrap-theme.min.css"/>

<title>Untitled 1</title>
</head>

<body>
	
	<form method="post" action="/posloprimac/logiranje">
	
	
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
	
	
	<input type="submit" name="submit"/>
	
	
	
	</form>
	

</body>

</html>
