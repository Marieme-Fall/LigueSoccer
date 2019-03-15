<?php

class Terrain {
	private $ID_Equipe = "";
	private $Nom_Terrain = "";
	private $Type_Terrain = "";
	private $Ville_Terrain = "";


	public function __construct($n="XXX000")	//Constructeur
	{
		$this->ID_Terrain = $n;
	}	
	
        
	public function getID_Terrain()
	{
			return $this->ID_Terrain;
	}
	
	public function setID_Terrain($value)
	{
			$this->ID_Terrain = $value;
	}

	public function getNom_Terrain()
	{
			return $this->Nom_Terrain;
	}
	
	public function setNom_Terrain($value)
	{
			$this->Nom_Terrain = $value;
	}
	
		public function getType_Terrain()
	{
			return $this->Type_Terrain;
	}
	
	public function setType_Terrain($value)
	{
			$this->Type_Terrain = $value;
	}
	
		public function getVille_Terrain()
	{
			return $this->Ville_Terrain;
	}
	
	public function setVille_Terrain($value)
	{
			$this->Ville_Terrain = $value;
	}
	
	
	public function __toString()
	{
		return "Terrain[".$this->ID_Terrain.",".$this->Nom_Terrain.",".$this->Type_Terrain.",".$this->Ville_Terrain."]";
	}
	public function affiche()
	{
		echo $this->__toString();
	}
	public function loadFromRecord($ligne)
	{
		$this->ID_Terrain = $ligne["ID_Terrain"];
		$this->Nom_Terrain = $ligne["Nom_Terrain"];
		$this->Type_Terrain = $ligne["Type_Terrain"];
		$this->Ville_Terrain = $ligne["Ville_Terrain"];

	}	
}
?>