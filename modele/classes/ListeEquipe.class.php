<?php
require_once('./modele/classes/Navigable.interface.php');

class ListeEquipe implements Navigable {
	private $equipes;
	private $current = -1;

	public function __construct()	//Constructeur
	{
		$this->equipes = array();
	}	
	
	public function add($equipe)
	{
			array_push($this->equipes,$equipe);
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
		if ($this->current<count($this->equipes)) 
		{
			$this->current++;
			return true;
		}
		return false;
	}
        
	public function printCurrent()
	{
			if (isset($this->equipes[$this->current]))
				echo $this->equipes[$this->current];
	}
	public function getCurrent()
	{
		if (isset($this->equipes[$this->current]))
			return $this->equipes[$this->current];
		return null;	
	}	
}
?>