<?php
class MyPdo
{
	protected $connection;
        
	public function __construct(){
		try
		{
			$this->connection=new PDO('mysql:host=localhost;dbname=site admin;charset=utf8','root','');
			//permet de récup les erreurs
			$this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                       
		}
		catch(PDOException $e){
			//affiche le message d'erreur
			echo 'Echec lors de la connetion:'.$e->getMessage();
		}
	}
}