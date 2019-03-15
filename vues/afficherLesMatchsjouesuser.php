<html>
<div id="vue1">
	<h2>Liste des Matchs</h2>
<?php
require_once('./modele/classes/Match.class.php');
require_once('./modele/classes/ListeMatch.class.php');
require_once('./modele/MatchDAO.class.php');


$dao = new MatchDAO();

$liste = $dao->findAll();

echo "<table id='ListeMatch'>";
while ($liste->next())
{
	$p = $liste->getCurrent();
	if ($p!=null)
	{
		
		echo "<tr><td>".$p."</td><td><a href='?action==".$p->getID_Match()."'></a></td></tr>";
	}
}
echo "</table>";

?>	
</div>
</html>