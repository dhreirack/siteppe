<?php
require_once "pdo/MyPdo.php";
require_once "pdo/UserPdo.php";
require_once "class/Users.php";


$connection = new UserPdo();

//Si la variable $_GET["action"] existe
if(isset($_GET["action"]))
{
        //Récupération de l'action passée dans l'url
        $action=$_GET["action"];

        switch ($action) {
                case 'create':
                        include("page/users/createuser.php");
                        break;
                case 'store'://récup des infos du formulaire
                        $unUser=new User();
                        $unUser->login=$_POST["login"];
                        $unUser->pwd=md5($_POST["pwd"]);
                        $connection->create($unUser);
                        break;	
                case 'delete':

                        $lesUsers=$connection->delete($_GET["id"]);
                        break;
                case 'modify':
                    include("page/users/modifyco.php");
                    break;


                case 'connection':
                include("page/user/connection.php");
                break;

                case 'checkconnection':
                        $unUser=new User();
                        $unUser->login=$_POST["login"];
                        $unUser->password=md5($_POST["pwd"]);
                        $pdo=new UserPdo ();
                        $connection=$pdo->rechercherutilisateur($unUser);
                        if($connection==1)
                        {
                                $_SESSION["user"]=$unUser;
                            header('Location: index.php');  
                        }
                        else
                        {
                            header('Location: index.php?controller=user&action=connection');  
                        }
                        break;

                case 'deconnection':
                        session_destroy();
                        header('page/users/connection.php');  
                        break;

                default:
                        include("page/users/connection.php");
                        break;
        }

}
//si pas d'action dans l'url
else
{       $lesUsers=$connection->getAll();
        include("page/users/index.php");
}
?>