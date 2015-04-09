<?php
require_once "pdo/MyPdo.php";
require_once "pdo/NewsPdo.php";
require_once "class/News.php";


$connection = new NewsPdo();

//Si la variable $_GET["action"] existe
if(isset($_GET["action"]))
{
        //Récupération de l'action passée dans l'url
        $action=$_GET["action"];

        switch ($action) {
                case 'create':
                        include("page/news/create.php");
                        break;
                case 'store'://récup des infos du formulaire
                        $uneNews=new News();
                        $uneNews->titre=$_POST["titre"];
                        $uneNews->description=$_POST["description"];
                        $connection->create($uneNews);
                        break;
                case 'delete':

                        $lewNews=$connection->delete($_GET["id"]);
                        break;
                case 'modify':
                        $lewNews=$connection->modify($_GET["id"]);
                        include("page/news/modify.php");
                        break;
                case 'login':
                        $unUser=new User();
                        $unUser->login="";
                        $unUser->password="";
                        $_SESSION["user"]=$unUser;
                         header('Location: index.php');  
                        break;  			
                default:
                        include("page/acceuil.php");
                        break;
        }

}
//si pas d'action dans l'url
else
{       $lesNews=$connection->getAll();
        include("page/news/index.php");
}
?>