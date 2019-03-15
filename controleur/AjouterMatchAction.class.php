<?php
require_once('./controleur/Action.interface.php');
//require_once('./modele/Match.class.php');
require_once('./modele/MatchDAO.class.php');

			

class AjouterMatchAction implements Action {
	
	public function execute(){
		if (!ISSET($_SESSION)) session_start();
		if (!ISSET($_SESSION["connected"]))
		{
			return "login";
		}
		/*if (!ISSET($_REQUEST["id"]))
		{
			return "ajouterLesMatchs";
		}*/
		
		if (ISSET($_REQUEST["bOK"])){
			$dao = new MatchDAO();
			$eq = new Match();

			$eq->setID_Match($_REQUEST["id"]);
			$eq->setType_Match($_REQUEST["typematch"]);
			$eq->setDate_Match($_REQUEST["datematch"]);
			//$eq->setID_Tournois($_REQUEST["idtournois"]);
			$eq->setID_Tournois($_REQUEST["nomtournois"]);
			//$eq->setID_Terrain($_REQUEST["idterrain"]);
			$eq->setID_Terrain($_REQUEST["nomterrain"]);
			//$eq->setID_Equipe($_REQUEST["idequipe"]);
			//$eq->setID_Equipe2($_REQUEST["idequipe2"]);
			$eq->setID_Equipe($_REQUEST["nomequipe1"]);
			$eq->setID_Equipe2($_REQUEST["nomequipe2"]);

			$eq->setNbutEq1($_REQUEST["nbbutsequipe1"]);
			$eq->setNbutEq2($_REQUEST["nbbutsequipe2"]);
			$pt1=$_REQUEST["nbbutsequipe1"];
			$pt2=$_REQUEST["nbbutsequipe2"];
			if($pt1>$pt2)
			{	
			$eq->setNbPointsEq1($eq->getNbPointsEq1()+3);
			$eq->setNbPointsEq2($eq->getNbPointsEq2()+0);
			}
			if($pt1<$pt2)
			{	
			$eq->setNbPointsEq1($eq->getNbPointsEq1()+0);
			$eq->setNbPointsEq2($eq->getNbPointsEq2()+3);
			}
			if($pt1==$pt2)
			{	
			$eq->setNbPointsEq1($eq->getNbPointsEq1()+1);
			$eq->setNbPointsEq2($eq->getNbPointsEq2()+1);
			}
	
			$dao->create($eq);
			//return "ajouterLesMatchs";
		}
		return "ajouterLesMatchs";
		
		//code pour verifier que les deux equipes sont differentes, cad des noms differents
					/*$nom1=$_POST["nomequipe1"];
			$nom2=$_POST["nomequipe2"];
		
			if($nom1==$nom2)
			{	
			echo "veuillez introduire des equipes differentes";
			
			}
			else
		{	
			$eq->setNom_Equipe1($_REQUEST["nomequipe1"]);
			$eq->setNom_Equipe2($_REQUEST["nomequipe2"]);
			
		}  */
		
		
		
	
	
	}
}
?>