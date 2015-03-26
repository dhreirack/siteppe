<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
          //  Utilisateur \\ <small> Gestion utilisateur</small>
        </h1>

<a class="navbar-brand" href="index.php?controller=user&action=create">Créer un compte</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <td>statut</td>
                    <td>login</td>
                    <td>dteinscription</td>
                    <td>iduser</td>
                    <td>admin</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($lesUsers as $unUser) {
                   echo "<tr><td>".$unUser->statut."</td><td>".$unUser->login."</td><td>".$unUser->dteinscription."</td><td><a href=\"index.php?controller=user&action=delete&id=".$unUser->iduser."\">Supprimer</a>
</td><td>".$unUser->admin."</td></tr>";
                }

                ?>
            </tbody>
        </table>
    </div>
    
</div>