<?php
require_once('./modele/classes/Navigable.interface.php');

class ListeClassement implements Navigable {
	private $classements;
	private $current = -1;

	public function __construct()	//Constructeur
	{
		$this->classements = array();
	}	
	
	public function add($classement)
	{
			array_push($this->classements,$classement);
	}
	
	public function previous()
	{
		if ($this->current>0)
		{
			$this->current--;
			return true;
		}
		return false;
	}
	public function next()
	{
		if ($this->current<count($this->classements)) 
		{
			$this->current++;
			return true;
		}
		return false;
	}
        
	public function printCurrent()
	{
			if (isset($this->classements[$this->current]))
				echo $this->classements[$this->current];
	}
	public function getCurrent()
	{
		if (isset($this->classements[$this->current]))
			return $this->classements[$this->current];
		return null;	
	}	
}
?>