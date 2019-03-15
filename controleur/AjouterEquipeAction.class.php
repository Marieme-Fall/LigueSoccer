<?php
require_once('./controleur/Action.interface.php');
//require_once('./modele/Equipe.class.php');
require_once('./modele/EquipeDAO.class.php');

			

class AjouterEquipeAction implements Action {
	
	public function execute(){
		if (!ISSET($_SESSION)) session_start();
		if (!ISSET($_SESSION["connected"]))
		{
			return "login";
		}
		if (!ISSET($_REQUEST["id"]))
			return "ajouterLesEquipes";
		
			//if (ISSET($_REQUEST["action"])){

			$dao = new EquipeDAO();
			$eq = new Equipe();
			
			$eq->setID_Equipe($_REQUEST["id"]);
			$eq->setNom_Equipe($_REQUEST["nomequipe"]);

			$dao->create($eq);
			return "ajouterLesEquipes";
						
		//}
		
			//return "login";
		//return "ajouterLesTournois";
	
	}
}
?>