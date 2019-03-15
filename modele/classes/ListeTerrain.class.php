<?php
require_once('./modele/classes/Navigable.interface.php');

class ListeTerrain implements Navigable {
	private $terrains;
	private $current = -1;

	public function __construct()	//Constructeur
	{
		$this->terrains = array();
	}	
	
	public function add($terrain)
	{
			array_push($this->terrains,$terrain);
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
		if ($this->current<count($this->terrains)) 
		{
			$this->current++;
			return true;
		}
		return false;
	}
        
	public function printCurrent()
	{
			if (isset($this->terrains[$this->current]))
				echo $this->terrains[$this->current];
	}
	public function getCurrent()
	{
		if (isset($this->terrains[$this->current]))
		   return $this->terrains[$this->current];
		return null;	
	}	
}
?>