<?php
class HistoirePdo extends MyPdo
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
		$reponse = $this->connection->query('SELECT * FROM histoire');
		$resultat = array();
		// On affiche chaque entrée une à une
		while ($donnees = $reponse->fetch())
		{
			$unArticle=new Histoire();
			$unArticle->idhistoire=$donnees["idhistoire"];
			$unArticle->nomhistoire=$donnees["nomhistoire"];
			$unArticle->contenuhistoirehistoire=$donnees["contenuhistoirehistoire"];
		  	$resultat[]=$unArticle;
		}
		$reponse->closeCursor(); 
		return $resultat;
 	}

 	public function create($unArticle){
 		try
		{
			$requete =$this->connection->prepare('INSERT INTO histoire(nomhistoire, contenuhistoire) VALUES(:nomhistoire, :contenuhistoirehistoire)');
			$requete->bindValue(':nomhistoire', $unArticle->nomhistoire, PDO::PARAM_STR);
			$requete->bindValue(':contenuhistoire', $unArticle->contenuhistoire, PDO::PARAM_STR);
			$requete->execute();
		}
		catch (PDOException $e) {
		    echo 'Échec requete : ' . $e->getMessage();
		}
 	}
 	 	public function delete($id){
 	 		
		 	 		$requete =$this->connection->query('DELETE FROM histoire WHERE idhistoire = ' .$id);
		 	 		$requete->execute();
	}

} 