<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
          //  News \\ <small> Gérer les news</small>
        </h1>

<a class="navbar-brand" href="index.php?controller=news&action=create">Créer une news</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <td>TITRE</td>
                    <td>DESCRIPTION</td>
                    <td>DATE</td>
                    <td>SUPPRIMER</td>
                    <td>MODIFIER</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($lesNews as $uneNews) {
                   echo "<tr><td>".$uneNews->titre."</td><td>".$uneNews->description."</td><td>".$uneNews->dte."</td><td><a href=\"index.php?controller=news&action=delete&id=".$uneNews->id."\">Supprimer</a>
</td></tr>";
                }

                ?>
            </tbody>
        </table>
    </div>
    
</div>