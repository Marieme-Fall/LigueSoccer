<html>
<div id="vue1">
	<h2>Classement des Equipes dans le Tournois</h2>
<?php
require_once('./modele/classes/Classement.class.php');
require_once('./modele/classes/ListeClassement.class.php');
require_once('./modele/ClassementDAO.class.php');


$dao = new ClassementDAO();

$liste = $dao->findAll();

echo "<table id='ListeClassement'>";
while ($liste->next())
{
	$p = $liste->getCurrent();
	if ($p!=null)
	{
		
		echo "<tr><td>".$p."</td><td><a href='?action==".$p->getID_Classement()."'></a></td></tr>";
	}
}
echo "</table>";

?>	
</div>
</html>