<?php
// -- Controleur frontal --
require_once('/controleur/ActionBuilder.class.php');
if (ISSET($_REQUEST["action"]))
	{
		$vue = ActionBuilder::getAction($_REQUEST["action"])->execute();
		/*
		Ou :
		$action = ActionBuilder::getAction($_REQUEST["action"]);
		$vue = $action->execute();
		*/
	}
else	
	{
		$action = ActionBuilder::getAction("");
		$vue = $action->execute();
	}
// On affiche la page (vue)
include_once('vues/main.php');


