<?php
require_once('./controleur/Action.interface.php');
require_once('./modele/classes/Equipe.class.php');
require_once('./modele/EquipeDAO.class.php');

class AfficherEquipeAction implements Action {
	public function execute(){
		if (!ISSET($_SESSION)) session_start();
		if (!ISSET($_SESSION["connected"]))
			return "login";
		if (ISSET($_REQUEST["setNbParPage"]))
		{
			$_REQUEST['numPage'] = 1;
			$taillePage = $_REQUEST["nbParPage"];
			$dao = new EquipeDAO();
			$liste = $dao->findAll();
			$nbResultats = $liste->size();
			
			$_SESSION["navig"] = array();
			$_SESSION["navig"]["nbResultats"] = $nbResultats;
			$_SESSION["navig"]["taillePage"] = $taillePage;
            $_SESSION["navig"]["nbPages"] = (int)(($_SESSION["navig"]["nbResultats"]-1)/$taillePage)+1;
		}
		return "afficherLesEquipes";
	}
}
?>