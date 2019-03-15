<?php
require_once('./controleur/DefaultAction.class.php');
require_once('./controleur/AfficherTournoisAction.class.php');
require_once('./controleur/AjouterTournoisAction.class.php');
require_once('./controleur/AfficherEquipeAction.class.php');
require_once('./controleur/AjouterEquipeAction.class.php');
require_once('./controleur/AfficherTerrainAction.class.php');
require_once('./controleur/AjouterTerrainAction.class.php');
require_once('./controleur/AjouterMatchAction.class.php');
require_once('./controleur/AfficherMatchAction.class.php');
require_once('./controleur/SupprimerAction.class.php');
require_once('./controleur/LoginAction.class.php');
require_once('./controleur/LogoutAction.class.php');
require_once('./controleur/AfficherresultatsMatchAction.class.php');
require_once('./controleur/ClasserEquipesAction.class.php');
require_once('./controleur/AffichertournoisuserAction.class.php');
require_once('./controleur/AfficherEquipeuserAction.class.php');
require_once('./controleur/AfficherterrainuserAction.class.php');
require_once('./controleur/AfficherMatchuserAction.class.php');
require_once('./controleur/AfficherresultatsMatchuserAction.class.php');
require_once('./controleur/ClasserEquipesuserAction.class.php');








class ActionBuilder{
	public static function getAction($nom){
		switch ($nom)
		
		
		{
			case "connecter" :
				return new LoginAction();
			break; 
			case "deconnecter" :
				return new LogoutAction();
			break; 
			case "affichertournois" :
				return new AfficherTournoisAction();
			break; 
			case "ajoutertournois" :
				return new AjouterTournoisAction();
			break; 
			
			case "afficherEquipe" :
				return new AfficherEquipeAction();
			break;
			
			case "ajouterEquipe" :
				return new AjouterEquipeAction();
			break;
				
			case "afficherterrain" :
				return new AfficherTerrainAction();
			break;
			
			case "ajouterterrain" :
				return new AjouterTerrainAction();
			break;
			
			case "ajouterMatch" :
				return new AjouterMatchAction();
			break;
			
			case "afficherMatch" :
				return new AfficherMatchAction();
			break;
			
			
			
			case "supprimer" :
				return new SupprimerAction();
			break;

			case "afficherresultatsMatch" :
				return new AfficherresultatsMatchAction();
			break;	

			case "classerEquipes" :
				return new ClasserEquipesAction();
			break;
			
			case "affichertournoisuser" :
				return new AffichertournoisuserAction();
			break;
			
			case "afficherEquipeuser" :
				return new AfficherEquipeuserAction();
			break;
			
			case "afficherterrainuser" :
				return new AfficherterrainuserAction();
			break;
			
			case "afficherMatchuser" :
				return new AfficherMatchuserAction();
			break;
			
			case "afficherresultatsMatchuser" :
				return new AfficherresultatsMatchuserAction();
			break;
			
				case "classerEquipesuser" :
				return new ClasserEquipesuserAction();
			break;
			
			default :
				return new DefaultAction();
		}
	}
}

