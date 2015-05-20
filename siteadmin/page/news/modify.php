
Modification de nouvelle :
<form action="index.php?controller=news&action=modify&id=<?php echo $lanews->id ; ?>" enctype="multipart/form-data" method="post">

	Titre : <input type="text" name="titre" value="<?php echo $lanews->titre ; ?>">
	Description :
	<textarea rows="10" cols="50" id="descriptionmodif" name="description" ><?php echo htmlentities($lanews->description); ?></textarea>
	<!-- MAX_FILE_SIZE doit précéder le champ input de type file -->
  <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
  <!-- Le nom de l'élément input détermine le nom dans le tableau $_FILES -->
  Envoyez ce fichier : <input name="userfile" type="file" />
  	<input type="submit">
</form>