<?php
require_once "pdo/MyPdo.php";
require_once "pdo/HistoirePdo.php";
require_once "class/Histoire.php";


$connection = new HistoirePdo();

//Si la variable $_GET["action"] existe
if(isset($_GET["action"]))
{
        //Récupération de l'action passée dans l'url
        $action=$_GET["action"];

        switch ($action) {
                case 'create':
                        include("page/histoire/create.php");
                        break;
                case 'store'://récup des infos du formulaire
                        $unArticle=new Histoire();
                        $unArticle->nomhistoire=$_POST["nomhistoire"];
                        $unArticle->contenuhistoire=$_POST["contenuhistoire"];

                        $connection->create($unArticle);
                        break;
                case 'index':
                        $lesArticles=$connection->getAll();
                        include("page/histoire/index.php");
                        break;
                case 'delete':

                        $lesArticles=$connection->delete($_GET["id"]);
                        break;
                case 'modify':
                        $lesArticles=$connection->id=["id"];
                        include("page/histoire/modify.php");
                        break;			
                default:
                        include("page/acceuil.php");
                        break;
        }

}
//si pas d'action dans l'url
else
{       $lesArticles=$connection->getAll();
        include("page/histoire/index.php");
}
?>