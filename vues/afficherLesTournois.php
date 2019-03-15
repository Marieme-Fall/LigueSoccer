<html>
<div id="vue1">
	<h2>Liste des Tournois</h2>
<?php
require_once('./modele/classes/Tournois.class.php');
require_once('./modele/classes/ListeTournois.class.php');
require_once('./modele/TournoisDAO.class.php');


$dao = new TournoisDAO();

$liste = $dao->findAll();

echo "<table id='ListeTournois'>";
while ($liste->next())
{
	$p = $liste->getCurrent();
	if ($p!=null)
	{
		
		echo "<tr><td>".$p."</td><td><a href='?action=supprimer&numASupprimer=".$p->getID_Tournois()."'>supprimer</a></td></tr>";
	}
}
echo "</table>";

?>	
</div>
</html>