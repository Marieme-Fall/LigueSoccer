<?php

class Classement {
	private $ID_Classement = "";
	private $ID_Tournois = "";
	private $ID_Equipe = "";
	private $ID_Match = "";
	private $Points_Classement = 0;


	public function __construct($n="XXX000")	//Constructeur
	{
		$this->ID_Classement = $n;
	}	
	
        
	public function getID_Classement()
	{
			return $this->ID_Classement;
	}
	
	public function setID_Classement($value)
	{
			$this->ID_Classement = $value;
	}

	public function getID_Tournois()
	{
			return $this->ID_Tournois;
	}
	
	public function setID_Tournois($value)
	{
			$this->ID_Tournois = $value;
	}
	
		public function getID_Equipe()
	{
			return $this->ID_Equipe;
	}
	
	public function setID_Equipe($value)
	{
			$this->ID_Equipe = $value;
	}
	
	public function getPoints_Classement()
	{
			return $this->Points_Classement;
	}
	
	public function setPoints_Classement($value)
	{
			$this->Points_Classement = $value;
	}
		
		public function getID_Match()
	{
			return $this->ID_Match;
	}
	
	public function setID_Match($value)
	{
			$this->ID_Match = $value;
	}
	
	
	
	
	
	
	public function __toString()
	{
		return "Classement des Equipes[".$this->ID_Classement.",".$this->ID_Tournois.",".$this->ID_Match.",".$this->ID_Equipe.",".$this->Points_Classement."]";
	}
	
	public function affiche()
	{
		echo $this->__toString();
	}
	public function loadFromRecord($ligne)
	{   
		$this->ID_Classement= $ligne["ID_Classement"];
	    $this->ID_Tournois= $ligne["ID_Tournois"];
		$this->ID_Match= $ligne["ID_Match"];
		$this->ID_Equipe = $ligne["ID_Equipe"];
		$this->Points_Classement = $ligne["Points_Classement"];
	}	
}
?>