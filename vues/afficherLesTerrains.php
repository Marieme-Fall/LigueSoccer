<html>
<div id="vue1">
	<h2>Liste des Terrains</h2>
<?php
require_once('./modele/classes/Terrain.class.php');
require_once('./modele/classes/ListeTerrain.class.php');
require_once('./modele/TerrainDAO.class.php');


$dao = new TerrainDAO();

$liste = $dao->findAll();

echo "<table id='ListeTerrain'>";
while ($liste->next())
{
	$p = $liste->getCurrent();
	if ($p!=null)
	{
		
		echo "<tr><td>".$p."</td><td><a href='?action=supprimer&numTerrainASupprimer=".$p->getID_Terrain()."'>supprimer</a></td></tr>";
	}
}
echo "</table>";

?>	
</div>
</html>