<?php
require_once('./controleur/Action.interface.php');
//require_once('./modele/Tournois.class.php');
require_once('./modele/TerrainDAO.class.php');

			

class AjouterTerrainAction implements Action {
	
	public function execute(){
		if (!ISSET($_SESSION)) session_start();
		if (!ISSET($_SESSION["connected"]))
		{
			return "login";
		}
		if (!ISSET($_REQUEST["id"]))
			return "ajouterLesTerrains";
		
			if (ISSET($_REQUEST["action"])){
			

			$dao = new TerrainDAO();
			$tr = new Terrain();
			
			
			$tr->setID_Terrain($_REQUEST["id"]);
			$tr->setNom_Terrain($_REQUEST["nomterrain"]);
			$tr->setType_Terrain($_REQUEST["typeterrain"]);
			$tr->setVille_Terrain($_REQUEST["villeterrain"]);

			$dao->create($tr);
			return "ajouterLesTerrains";
		
		}
		
			return "login";
	
	}
}
?>