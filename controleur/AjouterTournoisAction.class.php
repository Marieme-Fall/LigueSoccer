<?php
require_once('./controleur/Action.interface.php');
//require_once('./modele/Tournois.class.php');
require_once('./modele/TournoisDAO.class.php');

			

class AjouterTournoisAction implements Action {
	
	public function execute(){
		if (!ISSET($_SESSION)) session_start();
		if (!ISSET($_SESSION["connected"]))
		{
			return "login";
		}
		if (!ISSET($_REQUEST["id"]))
			return "ajouterLesTournois";
		
			if (ISSET($_REQUEST["action"])){
			

			$dao = new TournoisDAO();
			$tr = new Tournois();
			
			
			$tr->setID_Tournois($_REQUEST["id"]);
			$tr->setNom_Tournois($_REQUEST["nomtournois"]);
			$tr->setDateDebut($_REQUEST["datedebuttournois"]);
			$tr->setDateFin($_REQUEST["datefintournois"]);

			$dao->create($tr);
			return "ajouterLesTournois";
		
		}
		
			//return "login";
		//return "ajouterLesTournois";
	
	}
}
?>