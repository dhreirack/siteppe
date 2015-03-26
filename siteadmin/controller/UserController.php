<?php
require_once "pdo/MyPdo.php";
require_once "pdo/UserPdo.php";
require_once "class/Users.php";


$connection = new UserPdo();

//Si la variable $_GET["action"] existe
if(isset($_GET["action"]))
{
        //Récupartion de l'action passée dans l'url
        $action=$_GET["action"];

        switch ($action) {
                case 'create':
                        include("page/users/createuser.php");
                        break;
                case 'store':
                        $unUser=new User();
                        $unUser->login=$_POST["login"];
                        $unUser->pwd=$_POST["pwd"];
                        $connection->create($unUser);
                        break;
                case 'index':
                        $lesUsers=$connection->getAll();
                        include("page/users/index.php");
                        break;	
                case 'delete':

                        $lesUsers=$connection->delete($_GET["id"]);
                        break;
                case 'connection':
                        $unUser=new User();
                        $unUser->login=$_POST["login"];
                        $unUser->pwd=$_POST["pwd"];
                        $pdo=new UserPdo ();
                        $connection=$pdo->rechercherutilisateur($unUser);

                default:
                        include("page/users/index.php");
                        break;
        }

}
//si pas d'action dans l'url
else
{       $lesUsers=$connection->getAll();
        include("page/users/index.php");
}
?>