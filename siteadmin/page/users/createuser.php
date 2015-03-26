<php>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>jQuery Form Validation</title>
		<link rel="stylesheet" href="public/css/validationEngine.jquery.css" type="text/css" media="screen" title="no title" charset="utf-8" />
		<link rel="stylesheet" href="public/css/template.css" type="text/css" media="screen" title="no title" charset="utf-8" />
		<script src="public/js/jquery.js" type="text/javascript"></script>	
		<script src="public/js/jquery.validationEngine-fr.js" type="text/javascript"></script>  
		<script src="public/js/jquery.validationEngine.js" type="text/javascript"></script>

	</head>
	<body>
		<form id="forminscription" class="formular" method="post" action="index.php?controller=user&action=store">
			<fieldset>
				<legend>Utilisateur</legend>
				<label>
					<span>Login : </span>
					<input class="validate[optional,custom[noSpecialCaracters],length[0,20]]" type="text" name="login" id="login" />
				</label>
			</fieldset>
			<legend>Mot de passe</legend>
				<label>
					<span>Mot de passe : </span>
					<input class="validate[required,length[6,11]] text-input" type="password" name="pwd"  id="pwd" />
				</label>
				<label>
					<span>Confirmation : </span>
					<input class="validate[required,confirm[password]] text-input" type="password" name="cpwd"  id="cpwd" />
				</label>
			<p><input class="submit" type="submit" value="Valider" /></p>
<hr/>
</form>
		
	</body>
</php>