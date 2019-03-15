<?php
require_once('./controleur/Action.interface.php');
require_once('./modele/classes/Tournois.class.php');
require_once('./modele/TournoisDAO.class.php');
require_once('./modele/classes/Equipe.class.php');
require_once('./modele/EquipeDAO.class.php');
require_once('./modele/classes/Terrain.class.php');
require_once('./modele/TerrainDAO.class.php');


class SupprimerAction implements Action {
	
	public function execute(){
		
		if (!ISSET($_SESSION)) session_start();
		if (!ISSET($_SESSION["connected"]))
			return "login";
         
		 //suppression des tournois
		if (ISSET($_REQUEST["numASupprimer"]))
		{
			//$dao = new TournoisDAO();
			$x = new Tournois();
			$x->setID_Tournois($_REQUEST["numASupprimer"]);
			TournoisDAO::delete($x);
			return "afficherLesTournois";
		}
		
		
		//suppression des equipes
		if (ISSET($_REQUEST["numEquipeASupprimer"]))
		{
			//$dao = new EquipeDAO();
			$x = new Equipe();
			$x->setID_Equipe($_REQUEST["numEquipeASupprimer"]);
			EquipeDAO::delete($x);
			return "afficherLesEquipes";
		}
		
		//suppression des terrains
			if (ISSET($_REQUEST["numTerrainASupprimer"]))
		{
			//$dao = new TerrainDAO();
			$x = new Terrain();
			$x->setID_Terrain($_REQUEST["numTerrainASupprimer"]);
			TerrainDAO::delete($x);
			return "afficherLesTerrains";
		}
		
		//suppression des matchs
		if (ISSET($_REQUEST["numMatchASupprimer"]))
		{
			$x = new Match();
			$x->setID_Match($_REQUEST["numMatchASupprimer"]);
			MatchDAO::delete($x);
			return "afficherLesMatchsjoues";
			
		}
			//suppression des classements des equipes
		if (ISSET($_REQUEST["supprimerClassement"]))
		{
			$x = new Classement();
			$x->setID_Classement($_REQUEST["supprimerClassement"]);
			ClassementDAO::delete($x);
			return "classerLesEquipesTournois";
			
		}
		
		
		
		
	}
}
