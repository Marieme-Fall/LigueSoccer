<?php

class User {
	private $username = "AAA111";
	private $password = "";

	public function __construct($n="XXX000")	//Constructeur
	{
		$this->username = $n;
	}	
	
	public function getUsername()
	{
			return $this->username;
	}
	
	public function setUsername($value)
	{
			$this->username = $value;
	}
        
	public function getPassword()
	{
			return $this->password;
	}
	
	public function setPassword($value)
	{
			$this->password = $value;
	}

	public function __toString()
	{
		return "classement[".$this->ID_Classement.",".$this->Points_Classement.",".$this->ID_Equipe.",".$this->ID_Tournois."]";
		
		return "equipe[".$this->ID_Equipe.",".$this->Nom_Equipe."]";
		
		return "match[".$this->ID_Match.",".$this->Date_Match.",".$this->ID_Equipe.",".$this->ID_Terrain.",".$this->ID_Tournois.",".$this->NbutEq1.",".$this->ID_Terrain.",".$this->NbutEq2.",".$this->Type_Match."]";
		
		return "terrain[".$this->ID_Terrain.",".$this->Nom_Terrain.",".$this->Ville_Terrain.",".$this->Type_Terrain."]";
		
		return "tournois[".$this->ID_Tournois.",".$this->Nom_Tournois.",".$this->DateDebut_Tournois.",".$this->DateFin_Tournois."]";
	}
	public function affiche()
	{
		echo $this->__toString();
	}
	public function loadFromRecord($ligne)
	{
		$this->username = $ligne["Username_Admin"];
		$this->password = $ligne["Password_Admin"];
	}	
}
?>