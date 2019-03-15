<?php
require_once('./controleur/Action.interface.php');
//require_once('./modele/Equipe.class.php');
//require_once('./modele/Match.class.php');
require_once('./modele/EquipeDAO.class.php');
require_once('./modele/MatchDAO.class.php');
require_once('./modele/ClassementDAO.class.php');

			

class ClasserEquipesuserAction implements Action {
	
	public function execute(){
		if (!ISSET($_SESSION)) session_start();
		/*if (!ISSET($_SESSION["connected"]))
		{
			return "login";
		}
		if (!ISSET($_REQUEST["id"]))
		{
			return "classerLesEquipesTournois";
		}  */
		
		//	if (ISSET($_REQUEST["action"])){
			
			
			$som=0;//initialiser le compteur du nombre de points des equipes a 0
			$dao = new EquipeDAO();
			$classDao= new ClassementDAO();
			$classeq = new Classement();
			$liste = $dao->findAll(); //on recupere toutes les equipes dans $liste
			$matchdaoeq= new MatchDAO();
			$liste2 = $matchdaoeq->findAll(); // on recupere  tous les matchs dans $liste2
			while($liste->next())
			{
				$eq=$liste->getCurrent();
					if($eq!=null)
					{
						$numeq = $eq->getID_Equipe(); //on recupere ID equipe de la table Equipe
					
						while($liste2->next())
						{      
								$matchcourant = $liste2->getCurrent();
								if($matchcourant!=null)
								{
								     $numeq1Match = $matchcourant->getID_Equipe();  //on recupere ID equipe1 de la table Match
								     $numeq2Match = $matchcourant->getID_Equipe2();  //on recupere ID equipe2 de la table Match
									if($numeq==$numeq1Match)
									{ 
								      
									  $som= $som + $matchcourant->getNbPointsEq1();
									  $classeq->setPoints_Classement($som);
									  $matchcourant->setNbPointsEq1($som);
									  $classeq->setID_Tournois($matchcourant->getID_Tournois());
									  $classeq->setID_Equipe($numeq);
									  $classeq->setID_Match($matchcourant->getID_Match());
									  $liste2->next();
									}
									
									else if($numeq==$numeq2Match)
									{
									  $som= $som + $matchcourant->getNbPointsEq2();
									  $classeq->setPoints_Classement($som);
									  $matchcourant->setNbPointsEq2($som);
									  $classeq->setID_Tournois($matchcourant->getID_Tournois());
									  $classeq->setID_Equipe($numeq);
									  $classeq->setID_Match($matchcourant->getID_Match());
									  $liste2->next();
									}
										
								}
								
							}
			
							$classDao->create($classeq);
						    $som=0;
					}
						
			}

	return "classerLesEquipesTournoisuser";
	
	}
	
}
?>