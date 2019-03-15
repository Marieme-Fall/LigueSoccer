<?php

class Match {
	private $ID_Match = "";
	private $Type_Match = "";
	private $Date_Match = "";
	private $ID_Tournois = "";
	private $ID_Terrain = "";
    private $ID_Equipe = ""; 
    private $ID_Equipe2 = ""; 
	private $NbutEq1 = ""; 
	private $NbutEq2 = ""; 
	private $NbPointsEq1 = 0; 
	private $NbPointsEq2 = 0; 
	
	public function __construct($n="XXX000")	//Constructeur
	{
		$this->ID_Match = $n;
	}	
	
	      
	public function getID_Match()
	{
			return $this->ID_Match;
	}
	
	public function setID_Match($value)
	{
			$this->ID_Match = $value;
	}
	
	public function getType_Match()
	{
			return $this->Type_Match;
	}
	
	public function setType_Match($value)
	{
			$this->Type_Match = $value;
	}
	public function getDate_Match()
	{
			return $this->Date_Match;
	}
	
	public function setDate_Match($value)
	{
			$this->Date_Match = $value;
	}
	public function getID_Tournois()
	{
			return $this->ID_Tournois; 
	}
	
	public function setID_Tournois($value)
	{
			$this->ID_Tournois = $value;
	}


	public function getID_Terrain()
	{
			return $this->ID_Terrain;
	}
	
	public function setID_Terrain($value)
	{
			$this->ID_Terrain = $value;
	}

	
	public function getID_Equipe()
	{
			return $this->ID_Equipe;
	}
	
	public function setID_Equipe($value)
	{
			$this->ID_Equipe = $value;
	}	
	
	public function getID_Equipe2()
	{
			return $this->ID_Equipe2;
	}
	
	public function setID_Equipe2($value)
	{
			$this->ID_Equipe2 = $value;
	}	
	
	
	public function getNbutEq1()
	{
			return $this->NbutEq1;
	}
	
	public function setNbutEq1($value)
	{
			$this->NbutEq1 = $value;
	}
	
		public function getNbutEq2()
	{
			return $this->NbutEq2;
	}
	
	public function setNbutEq2($value)
	{
			$this->NbutEq2 = $value;
	}
	
	public function getNbPointsEq1()
	{
			return $this->NbPointsEq1;
	}
	
	public function setNbPointsEq1($value)
	{
			$this->NbPointsEq1 = $value;
	}
	
		public function getNbPointsEq2()
	{
			return $this->NbPointsEq2;
	}
	
	public function setNbPointsEq2($value)
	{
			$this->NbPointsEq2 = $value;
	}
	
	public function __toString()
	{
		return "match[".$this->ID_Match.",".$this->Type_Match.",".$this->Date_Match.",".$this->ID_Tournois.",".$this->ID_Terrain.",".$this->ID_Equipe.",".$this->ID_Equipe2.",".$this->NbutEq1.",".$this->NbutEq2."]";
	}
	public function affiche()
	{
		echo $this->__toString();
	}
	public function loadFromRecord($ligne)
	{
		$this->ID_Match = $ligne["ID_Match"];
		$this->Type_Match = $ligne["Type_Match"];
		$this->Date_Match = $ligne["Date_Match"];
		$this->ID_Tournois = $ligne["ID_Tournois"];
		$this->ID_Terrain = $ligne["ID_Terrain"];
		$this->ID_Equipe = $ligne["ID_Equipe"];
		$this->ID_Equipe2 = $ligne["ID_Equipe2"];
		$this->NbutEq1 = $ligne["NbutEq1"];
		$this->NbutEq2 = $ligne["NbutEq2"];
		$this->NbPointsEq1 = $ligne["NbPointsEq1"];
		$this->NbPointsEq1 = $ligne["NbPointsEq2"];
	}	
}
?>