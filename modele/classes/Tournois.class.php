<?php

class Tournois {
	private $ID_Tournois = "";
	private $Nom_Tournois = "";
	private $DateDebut = "";
	private $DateFin = "";

	public function __construct($n="XXX000")	//Constructeur
	{
		$this->ID_Tournois = $n;
		
	}	
	
	public function getID_Tournois()
	{
		return $this->ID_Tournois;
	}
	
	public function setID_Tournois($value)
	{
			$this->ID_Tournois = $value;
	}
	
	public function getNom_Tournois()
	{
			return $this->Nom_Tournois;
	}
	
	public function setNom_Tournois($value)
	{
			$this->Nom_Tournois = $value;
	}
        
	public function getDateDebut()
	{
			return $this->DateDebut;
	}
	
	public function setDateDebut($value)
	{
		$this->DateDebut = $value;
	}

	public function getDateFin()
	{
		return $this->DateFin;
	}
	
	public function setDateFin($value)
	{
			$this->DateFin = $value;
	}
	
	public function __toString()
	{
		return "tournois[".$this->ID_Tournois.",".$this->Nom_Tournois.",".$this->DateDebut.",".$this->DateFin."]";
	}
	public function affiche()
	{
		echo $this->__toString();
	}
	public function loadFromRecord($ligne)
	{
		$this->ID_Tournois = $ligne["ID_Tournois"];
		$this->Nom_Tournois = $ligne["Nom_Tournois"];
		$this->DateDebut = $ligne["DateDebut_Tournois"];
		$this->DateFin = $ligne["DateFin_Tournois"];
	}	
}
?>