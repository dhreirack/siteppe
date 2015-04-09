<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
          //  Presse \\ <small> Gérer la presse</small>
        </h1>

<a class="navbar-brand" href="index.php?controller=presse&action=create">Créer un article de presse

        <table class="table table-striped">
            <thead>
                <tr>
                    <td>titre</td>
                    <td>description</td>
                    <td>date</td>
                    <td>modifications</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($lesArticles as $unArticle) {
                   echo "<tr><td>".$unArticle->nomarticle."</td><td>".$unArticle->descriptionarticle."</td><td>".$unArticle->dtearticle."</td><td><a href=\"index.php?controller=presse&action=delete&id=".$unArticle->idarticle."\">Supprimer</a>
</td></tr>";
                }

                ?>
            </tbody>
        </table>
    </div>
    
</div>