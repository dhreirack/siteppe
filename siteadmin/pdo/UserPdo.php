<?php
class UserPdo extends MyPdo
{
 	public function __construct(){
		try
		{
			parent::__construct();
		}
		catch (PDOException $e) {
		    echo 'Échec lors de la connexion : ' . $e->getMessage();
		}
 	} 

	public function getAll(){
		$reponse = $this->connection->query('SELECT * FROM user');
		$resultat = array();
		// On affiche chaque entrée une à une
		while ($donnees = $reponse->fetch())
		{
			$unUser=new User();
			$unUser->iduser=$donnees["iduser"];
			$unUser->statut=$donnees["statut"];
			$unUser->admin=$donnees["admin"];
			$unUser->login=$donnees["login"];
			$unUser->pwd=$donnees["pwd"];
		  	$unUser->dteinscription=$donnees["dteinscription"];
		  	$resultat[]=$unUser;
		}
		$reponse->closeCursor(); 
		return $resultat;
 	}

 	public function create($unUser){
 		try
		{
			$requete =$this->connection->prepare('INSERT INTO user(login,pwd,dteinscription) VALUES(:login,:pwd,:dteinscription)');
			$requete->bindValue(':login', $unUser->login, PDO::PARAM_STR);
			$requete->bindValue(':pwd', $unUser->pwd, PDO::PARAM_STR);
			$requete->bindValue(':dteinscription', $unUser->dteinscription->format('Y-m-d'), PDO::PARAM_STR);
			$requete->execute();
			/* ou mais moins pratique
			$req= "INSERT INTO news(titre, description, dte) VALUES('".$uneNews->titre."','".$uneNews->description."','".$uneNews->dte->format('Y-m-d')."')";
			$this->connection->exec($req);
			*/
		}
		catch (PDOException $e) {
		    echo 'Échec requete : ' . $e->getMessage();
		}
 	}
 	 	public function delete($id){
 	 		
		 	 		$requete =$this->connection->query('DELETE FROM user WHERE iduser = ' .$id);
		 	 		$requete->execute();
	}
	public function rechercherutilisateur($unUser){
 	 		
		 	 		$requete =$this->connection->query('SELECT login,pwd FROM user WHERE login = :login and pwd = :pwd');
		 	 		$requete->bindValue(':login', $unUser->login, PDO::PARAM_STR);
					$requete->bindValue(':pwd', $unUser->pwd, PDO::PARAM_STR);
		 	 		$requete->execute();
	}
	public function checkconnection($unUser){
 		try
		{
			$requete =$this->connection->prepare('SELECT count(*) as nb FROM user WHERE login=:login AND pwd=:pwd');
			$requete->bindValue(':login', $unUser->login, PDO::PARAM_STR);
			$requete->bindValue(':pwd', $unUser->pwd, PDO::PARAM_STR);
			$requete->execute();
			$ligne = $requete->fetch();
			return $ligne["nb"];
		}
		catch (PDOException $e) {
		    echo 'Échec requete : ' . $e->getMessage();
		}

	}
} 