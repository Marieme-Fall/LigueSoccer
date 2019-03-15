<html>
<div id="vue1">
	<h2>Resultats des matchs</h2>
<?php
//require_once('./modele/classes/Match.class.php');
//require_once('./modele/classes/ListeMatch.class.php');
//require_once('./modele/MatchDAO.class.php');

//require_once('./modele/classes/Equipe.class.php');
//require_once('./modele/classes/ListeEquipe.class.php'); 
//require_once('./modele/EquipeDAO.class.php');


$dao = new MatchDAO();
$dao2 = new EquipeDAO();
//$p= new Match();
$liste = $dao->findAll();

echo "<table id='ListeMatch'>";
while ($liste->next())
{   
    
	$p = $liste->getCurrent();
	//$nomeq = new Equipe();
	//$nomeq2 = new Equipe();
	if($p!=null){
	$idequipe1 = $p->getID_Equipe();
	$idequipe2 = $p->getID_Equipe2();
	$nomeq = $dao2->find($idequipe1);//	$nomeq est un objet equipe
	$nomeq2 = $dao2->find($idequipe1);

	if (($p!=null)&&($nomeq!=null)&&($nomeq2!=null)) 
	{
	
		echo "<tr><td>"  ."  ID premiere Equipe :   ".$p->getID_Equipe()."  ,Nom premiere Equipe :   ".$nomeq->getNom_Equipe()."   ,Nombre buts :   ".$p->getNbutEq1(). "</td></tr>";
		echo "<tr><td>"  ."  ID deuxieme Equipe :   ".$p->getID_Equipe2()."  ,Nom deuxieme Equipe :   ".$nomeq2->getNom_Equipe()."   ,Nombre buts :   ".$p->getNbutEq2(). "</td></tr>";
		
		echo "<td>---------------------------------------------------------------------------------------------</td>";

	}
	}
}
echo "</table>";

?>	
</div>
</html>