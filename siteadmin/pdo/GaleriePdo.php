<?php
//Pas terminé
class GaleriePdo extends MyPdo
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

 	public function add($uneGalerie){
 		try
		{
			$requete =$this->connection->prepare('INSERT INTO galerie(titre, description, chemin, vp) VALUES(:titre, :description, :chemin, :vp)');
			$requete->bindValue(':nomarticle', $uneGalerie->nomarticle, PDO::PARAM_STR);
			$requete->bindValue(':description', $uneGalerie->description, PDO::PARAM_STR);
			$requete->bindValue(':chemin', $uneGalerie->chemin->format('Y-m-d'), PDO::PARAM_STR);
			$requete->bindValue(':vp', $uneGalerie->vp, PDO::PARAM_STR);
			$requete->execute();
		}
		catch (PDOException $e) {
		    echo 'Échec requete : ' . $e->getMessage();
		}
 	}
 	 	public function delete($id){
 	 		
		 	 		$requete =$this->connection->query('DELETE FROM galerie WHERE id = ' .$id);
		 	 		$requete->execute();
	}

} 