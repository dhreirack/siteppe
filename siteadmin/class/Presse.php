<?php
class Presse
{
	public $idarticle;
	public $nomarticle;
	public $descriptionartcle;
	public $dtearticle;
	public $corpsarticle;
	
	public function __construct(){
		
		$this->dtearticle=new DateTime ('NOW');
		
	}

}