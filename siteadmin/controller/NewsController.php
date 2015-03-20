<?php
require_once "pdo/MyPdo.php";
require_once "pdo/NewsPdo.php";
require_once "class/News.php";


$connection = new NewsPdo();

//Si la variable $_GET["action"] existe
if(isset($_GET["action"]))
{
        //Récupartion de l'action passée dans l'url
        $action=$_GET["action"];

        switch ($action) {
                case 'create':
                        include("page/news/create.php");
                        break;
                case 'store':
                        $uneNews=new News();
                        $uneNews->titre=$_POST["titre"];
                        $uneNews->description=$_POST["description"];
                        $connection->create($uneNews);
                        break;
                case 'index':
                        $lesNews=$connection->getAll();
                        include("page/news/index.php");
                        break;
                case 'delete':

                        $lewNews=$connection->delete($_GET["id"]);
                        break;
                case 'modify':
                        $lewNews=$connection->id=["id"];
                        include("page/news/modify.php");
                        break;			
                default:
                        include("page/news/index.php");
                        break;
        }

}
//si pas d'action dans l'url
else
{       $lesNews=$connection->getAll();
        include("page/news/index.php");
}
?>