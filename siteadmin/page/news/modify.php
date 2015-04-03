<?php
// on se connecte à notre base
$base = mysql_connect ('localhost', 'root', '');
mysql_select_db ('si6', $base) ;
?>
<html>
<head>
<title>modif test 1</title>
</head>
<body>
<?php
// lancement de la requête
$sql ='UPDATE news WHERE id = ".$id' ;

// on exécute la requête (mysql_query) et on affiche un message au cas où la requête ne se passait pas bien (or die)
mysql_query($sql) or die('Erreur SQL !'.$sql.'<br />'.mysql_error());

// on ferme la connexion à la base
mysql_close();
?>
un echo ici
</body>
</html>