<?php
class NewsPdo extends MyPdo
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
		$reponse = $this->connection->query('SELECT * FROM news');
		$resultat = array();
		// On affiche chaque entrée une à une
		while ($donnees = $reponse->fetch())
		{
			$uneNews=new News();
			$uneNews->id=$donnees["id"];
			$uneNews->titre=$donnees["titre"];
			$uneNews->description=$donnees["description"];
		  	$uneNews->dte=$donnees["dte"];
		  	$resultat[]=$uneNews;
		}
		$reponse->closeCursor(); 
		return $resultat;
 	}

 	public function create($uneNews){
 		try
		{
			$requete =$this->connection->prepare('INSERT INTO news(titre, description, dte) VALUES(:titre,:description,:dte)');
			$requete->bindValue(':titre', $uneNews->titre, PDO::PARAM_STR);
			$requete->bindValue(':description', $uneNews->description, PDO::PARAM_STR);
			$requete->bindValue(':dte', $uneNews->dte->format('Y-m-d'), PDO::PARAM_STR);
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
 	 		
						$requete =$this->connection->query('DELETE FROM news WHERE id = ' .$id);
						$requete->execute();
						echo "La News à bien été intégralement supprimée (irréversible)";

	}
		public function modify($id){
 	 		
		 	$reponse = $this->connection->query('SELECT * FROM news where id='.$id);
			$donnees = $reponse->fetch();
			// On affiche chaque entrée une à une
			
				$uneNews=new News();
				$uneNews->id=$donnees["id"];
				$uneNews->titre=$donnees["titre"];
				$uneNews->description=$donnees["description"];
				$uneNews->chemin=$donnees["chemin"];
				$uneNews->date=$donnees["dte"];
			
				$reponse->closeCursor();
			
				return $uneNews;
	}

} 