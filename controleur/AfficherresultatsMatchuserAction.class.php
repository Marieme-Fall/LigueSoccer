<?php
require_once('./controleur/Action.interface.php');
require_once('./modele/classes/Match.class.php');
require_once('./modele/MatchDAO.class.php');

class AfficherresultatsMatchuserAction implements Action {
	public function execute(){
		if (!ISSET($_SESSION)) session_start();
	
		if (ISSET($_REQUEST["setNbParPage"]))
		{
			$_REQUEST['numPage'] = 1;
			$taillePage = $_REQUEST["nbParPage"];
			$dao = new MatchDAO();
			$liste = $dao->findAll();
			$nbResultats = $liste->size();
			
			$_SESSION["navig"] = array();
			$_SESSION["navig"]["nbResultats"] = $nbResultats;
			$_SESSION["navig"]["taillePage"] = $taillePage;
            $_SESSION["navig"]["nbPages"] = (int)(($_SESSION["navig"]["nbResultats"]-1)/$taillePage)+1;
		}
		return "afficherResultMatchsuser";
	}
	
}
?>