<?php
class News
{
	public $id;
	public $titre;
	public $description;
	public $dte;
	public $chemin;

	public function __construct(){
		//initialisation de la date avec la date du jours
		$this->dte=new DateTime('NOW');
	}
	public function afficher()
	{
		return $this->id . "!" . $this->titre . "! Le" . $this->dte->format('d-m-Y');
	}
		public function dteFr()
	{
		return "Le ".$this->dte->format('d-m-Y');
	}
}
?>