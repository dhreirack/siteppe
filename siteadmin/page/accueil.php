<?php
require_once "pdo/MyPdo.php";
require_once "pdo/NewsPdo.php";
require_once "class/News.php";


$connection = new NewsPdo();

echo 'l accueil';
?>

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
          //  News \\ 
        </h1>


        <table class="table table-striped">
            <thead>
                <tr>
                    <td>titre</td>
                    <td>description</td>
                    <td>date</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $lesNews=$connection->getAll();
                foreach ($lesNews as $uneNews) {
                   echo "<tr><td>".$uneNews->titre."</td><td>".$uneNews->description."</td><td>".$uneNews->dte."</td></tr>";
                }

                ?>
            </tbody>
        </table>
    </div>
    
</div>
