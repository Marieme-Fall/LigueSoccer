<html>
<div id="vue1">
	<h2>Liste des Equipes</h2>
<?php
require_once('./modele/classes/Equipe.class.php');
require_once('./modele/classes/ListeEquipe.class.php');
require_once('./modele/EquipeDAO.class.php');


$dao = new EquipeDAO();

$liste = $dao->findAll();

echo "<table id='ListeTournois'>";
while ($liste->next())
{
	$p = $liste->getCurrent();
	if ($p!=null)
	{
		
		echo "<tr><td>".$p."</td><td><a href='?action==".$p->getID_Equipe()."'></a></td></tr>";
	}
}
echo "</table>";

?>	
</div>
</html>