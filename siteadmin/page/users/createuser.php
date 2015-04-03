<php>
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<title>jQuery Form Validation</title>
		<link rel="stylesheet" href="public/css/validationEngine.jquery.css" type="text/css" media="screen" title="no title" charset="utf-8" />
		<link rel="stylesheet" href="public/css/template.css" type="text/css" media="screen" title="no title" charset="utf-8" />
		<script src="public/js/jquery.js" type="text/javascript"></script>	
		<script src="public/js/jquery.validationEngine-fr.js" type="text/javascript"></script>  

	</head>
	<body>
		<form id="forminscription" class="formular" method="post" action="index.php?controller=user&action=store">
			<fieldset>
				<legend>Utilisateur</legend>
				<label>
					<span>Nom d'utilisateur : </span>
					<input class="validate[required,custom[noSpecialCaracters],length[0,15]]" type="text" name="login" id="login" />
				</label>
			</fieldset>
			<legend>Mot de passe</legend>
				<label>
					<span>Mot de passe : </span>
					<input class="validate[required,length[6,11]] text-input" type="password" name="pwd"  id="pwd" />
				</label>
				<label>
					<span>Confirmation : </span>
					<input class="validate[required,confirm[pwd]] text-input" type="password" name="cpwd"  id="cpwd" />
				</label>
			<fieldset>
				<legend>Conditions</legend>
				<div class="infos">Accepter les conditions d'utilisation, ci-dessous : en cochant la case j'accepte les <a href="index.php"> conditions d'utilisation</a> de ce site</div>
				<label>
					<span class="checkbox">J'accepte les conditions : </span>
					<input class="validate[required] checkbox" type="checkbox"  id="agree"  name="agree"/>
				</label>
			</fieldset>
			<p><input class="submit" type="submit" value="Valider" /></p>
<hr/>
</form>

		
	</body>
</php>