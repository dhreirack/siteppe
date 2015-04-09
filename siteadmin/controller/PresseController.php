<?php
require_once "pdo/MyPdo.php";
require_once "pdo/PressePdo.php";
require_once "class/Presse.php";


$connection = new PressePdo();

//Si la variable $_GET["action"] existe
if(isset($_GET["action"]))
{
        //Récupération de l'action passée dans l'url
        $action=$_GET["action"];

        switch ($action) {
                case 'create':
                        include("page/presse/create.php");
                        break;
                case 'store'://récup des infos du formulaire
                        $unArticle=new Presse();
                        $unArticle->nomarticle=$_POST["nomarticle"];
                        $unArticle->descriptionarticle=$_POST["descriptionarticle"];
                        $unArticle->corpsarticle=$_POST["corpsarticle"];

                        $connection->create($unArticle);
                        break;
                case 'index':
                        $lesArticles=$connection->getAll();
                        include("page/presse/index.php");
                        break;
                case 'delete':

                        $lesArticles=$connection->delete($_GET["id"]);
                        break;
                case 'modify':
                        $lesArticles=$connection->id=["id"];
                        include("page/presse/modify.php");
                        break;			
                default:
                        include("page/acceuil.php");
                        break;
        }

}
//si pas d'action dans l'url
else
{       $lesArticles=$connection->getAll();
        include("page/presse/index.php");
}
?>