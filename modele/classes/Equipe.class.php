<?php

class Equipe {
	private $ID_Equipe = "";
	private $Nom_Equipe = "";


	public function __construct($n="XXX000")	//Constructeur
	{
		$this->ID_Equipe = $n;
	}	
	
        
	public function getID_Equipe()
	{
			return $this->ID_Equipe;
	}
	
	public function setID_Equipe($value)
	{
			$this->ID_Equipe = $value;
	}

	public function getNom_Equipe()
	{
			return $this->Nom_Equipe;
	}
	
	public function setNom_Equipe($value)
	{
			$this->Nom_Equipe = $value;
	}
	
	public function __toString()
	{
		return "Equipe[".$this->ID_Equipe.",".$this->Nom_Equipe."]";
	}
	public function affiche()
	{
		echo $this->__toString();
	}
	public function loadFromRecord($ligne)
	{
		$this->ID_Equipe = $ligne["ID_Equipe"];
		$this->Nom_Equipe = $ligne["Nom_Equipe"];

	}	
}
?>