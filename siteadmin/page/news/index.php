<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
          //  News \\ <small> Gérer les news</small>
        </h1>

<a class="navbar-brand" href="index.php?controller=news&action=create">Créer une news</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <td><strong>Titre</strong></td>
                    <td><strong>Description</strong></td>
                    <td><strong>Date</strong></td>
                    <td><strong>Modifications</strong></td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($lesNews as $uneNews) {
                   echo "<tr><td>".$uneNews->titre."</td><td>".$uneNews->description."</td><td>".$uneNews->dte."</td><td><a href=\"index.php?controller=news&action=delete&id=".$uneNews->id."\">Supprimer</a>
                   <td><a href=\"index.php?controller=news&action=modify&id=".$uneNews->id."\">Modifier</a>
</td></tr>";
                }

                ?>
            </tbody>
        </table>
    </div>
    
</div>