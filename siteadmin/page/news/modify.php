Bienvenue sur modifier une nouvelle
<form action="index.php?controller=news&action=modify=<?php echo $lanews->id ; ?>" enctype="multipart/form-data" method="post">
	Titre : <input type="text" name="titre" value="<?php echo $lanews->titre ; ?>">
	Description : <input type="text" name="description"  value="<?php echo $lanews->description ; ?>">
	<!-- MAX_FILE_SIZE doit précéder le champ input de type file -->
  <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
  <!-- Le nom de l'élément input détermine le nom dans le tableau $_FILES -->
  Envoyez ce fichier : <input name="userfile" type="file" />
  	<input type="submit">
</form>