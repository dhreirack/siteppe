<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
          //  Histoire \\ <small> Gérer l'histoire</small>
        </h1>

<a class="navbar-brand" href="index.php?controller=histoire&action=create">Créer une nouvelle histoire</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <td><strong>Titre</strong></td>
                    <td><strong>Contenu</strong></td>
					<td><strong>Modifications</strong></td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($lesArticles as $unArticle) {
                   echo "<tr><td>".$unArticle->nomhistoire."</td><td>"
				   .$unArticle->contenuarticle."</td>
				   <td><a href=\"index.php?controller=histoire&action=delete&id=".$unArticle->idhistoire."\">Supprimer</a></td></tr>";
                }

                ?>
            </tbody>
        </table>
    </div>
    
</div>