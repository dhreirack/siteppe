<?php
require_once "pdo/MyPdo.php";
require_once "pdo/GaleriePdo.php";
require_once "class/Galerie.php";


$connection = new GaleriePdo();

//Si la variable $_GET["action"] existe
if(isset($_GET["action"]))
{
        //Récupération de l'action passée dans l'url
        $action=$_GET["action"];

        switch ($action) {
                case 'stocker':
                        include("page/galerie/stocker.php");
                        break;
                case 'uplaud':
						//On vérifie si un fichier à bien été choisis et qu'il n'y a pas d'erreur
                        
						if (isset($_FILES['fichier']) AND $_FILES['fichier']['error'] == 0)
						{
							//on regarde si la taille est en dessous ou égale à 10240000000 Octets(=10Ko)
							if ($_FILES['fichier']['size'] <= 10240000000)
							{
								$info = pathinfo($_FILES['fichier']['name']);
								$extension = $info['extension'];

								$extension_autoriser = array('bmp', 'png', 'gif' , 'jpg' , 'jpeg');
								if(in_array($extension, $extension_autoriser))
								{
								//on stock le fichier
								move_uploaded_file($_FILES['fichier']['tmp_name'], 'public/photos/'.basename("fichier".time().".".$extension));

                                $uneGalerie = new galerie();
                                $uneGalerie->titre=$_POST['titre'];
                                $uneGalerie->description=$_POST['description'];
                                $uneGalerie->chemin='public/photos/'.basename("fichier".time().".".$extension); 
                                $uneGalerie->vp="p";
                                $connection->add($uneGalerie);
								$message = "le fichier à été stocker à cette adresse: http://monsite.truc/upload/".$_FILES['fichier']['name'].".";
								}
							else
							{
								$message = "Le fichier n'a pas l'extension autoriser.";
							}
							}
							else // si le fichier est trop gros
							{
								$message = "Le fichier est trop gros.";
							}
							}
							else // si il y a eu une erreur
						{
                            var_dump($_FILES['erreur']);
                var_dump($_FILES['fichier']);
						$message = "Le formulaire n'est pas rempli ou une erreur est survenu.";
						}

						echo $message;
						break;

                        /*
                case 'store'://récup des infos du formulaire
                        $uneGalerie=new galerie();
                        $uneGalerie->titre=$_POST["titre"];
                        $uneGalerie->description=$_POST["description"];
                        $connection->create($uneGalerie);
                        break;
                case 'delete':

                        $lesGalerie=$connection->delete($_GET["id"]);
                        break;
                case 'modify':
                        $lesgalerie= new galeriePdo();
                                $lesgalerie=$modifygalerie->modify($_GET["id"]);
                                include("page/galerie/modify.php");
                                break;
                case 'login':
                        $unUser=new User();
                        $unUser->login="";
                        $unUser->password="";
                        $_SESSION["user"]=$unUser;
                         header('Location: index.php');  
                        break;  			
                default:
                        include("page/accueil.php");
                        break;
                        */
        }

}
//si pas d'action dans l'url
else
{       //$lesgalerie=$connection->getAll();
        include("page/galerie/index.php");
}
?>