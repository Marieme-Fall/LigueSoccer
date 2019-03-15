<?php
require_once('./modele/classes/Navigable.interface.php');
require_once('./modele/classes/Tournois.class.php');

class ListeTournois implements Navigable {
	private $tournois;
	private $current = -1;

	public function __construct()	//Constructeur
	{
		$this->tournois = array();
	}	
	
	public  function add($tournoi)
	{
			array_push($this->tournois,$tournoi);
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
		if ($this->current<count($this->tournois)) 
		{
			$this->current++;
			return true;
		}
		return false;
	}
        
	public function printCurrent()
	{
			if (isset($this->tournois[$this->current]))
				echo $this->tournois[$this->current];
	}
	public function getCurrent()
	{
		if (isset($this->tournois[$this->current]))
			return $this->tournois[$this->current];
		return null;	
	}	
}
?>