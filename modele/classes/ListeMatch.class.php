<?php
require_once('./modele/classes/Navigable.interface.php');

class ListeMatch implements Navigable {
	private $matchs;// $matchs est un tableau de matchs 
	private $current = -1;

	public function __construct()	//Constructeur
	{
		$this->matchs = array();
	}	
	
	public function add($match)
	{
			array_push($this->matchs,$match);
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
		if ($this->current<count($this->matchs)) 
		{
			$this->current++;
			return true;
		}
		return false;
	}
        
	public function printCurrent()
	{
			if (isset($this->matchs[$this->current]))
				echo $this->matchs[$this->current];
	}
	public function getCurrent()
	{
		if (isset($this->matchs[$this->current]))
			return $this->matchs[$this->current];
		return null;	
	}	
}
?>