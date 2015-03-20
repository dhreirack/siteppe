<?php
class User
{
	public $iduser;
	public $login;
	public $pwd;
	public $dteinscription;
	public $statut;
	public $admin;
	
	public function __construct(){
		
		$this->dteinscription=new DateTime ('NOW');
		
	}

}