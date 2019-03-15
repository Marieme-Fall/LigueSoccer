<?php
include_once('./modele/classes/bdchampionnat.class.php'); 
include_once('./modele/classes/Match.class.php'); 
include_once('./modele/classes/ListeMatch.class.php'); 


class MatchDAO
{	
	
	
	public function create($x) {
				$request = "INSERT INTO `match3` (`ID_Match`,`Type_Match`,`Date_Match`,`ID_Tournois`,`ID_Terrain`,`ID_Equipe`,`ID_Equipe2`,`NbutEq1`,`NbutEq2`, `NbPointsEq1`, `NbPointsEq2` )".
				" VALUES ('".$x->getID_Match()."','".$x->getType_Match()."','".$x->getDate_Match()."','".$x->getID_Tournois()."','".$x->getID_Terrain()."','".$x->getID_Equipe()."','".$x->getID_Equipe2()."','".$x->getNbutEq1()."','".$x->getNbutEq2()."','".$x->getNbPointsEq1()."','".$x->getNbPointsEq2()."')";
		
		try
		{   
			$db = bdchampionnat::getInstance();
			return $db->exec($request);
			
		}
		catch(PDOException $e)
		{
			throw $e;
		}
	}

	public static function findAll()
	{
		try {
			$liste = new ListeMatch();
		
			$requete = 'SELECT * FROM match3';
			$cnx = bdchampionnat::getInstance();
			
			$res = $cnx->query($requete);
		    foreach($res as $row) {
				$p = new Match();
				$p->loadFromRecord($row);
				$liste->add($p);
		    }
			$res->closeCursor();
		    $cnx = null;
			return $liste;
		} catch (PDOException $e) {
		    print "Error!: " . $e->getMessage() . "<br/>";
		    return $liste;
		}	
	}	

	public static function find($id)
	{
		$db = bdchampionnat::getInstance();

		$pstmt = $db->prepare("SELECT * FROM match3 WHERE ID_Match = :x");//requête paramétrée par un paramètre x.
		$pstmt->execute(array(':x' => $id));
		
		$result = $pstmt->fetch(PDO::FETCH_OBJ);
		$p = new Match();

		if ($result)
		{
			$p->setID_Match($result->ID_Match);
			$p->setType_Match($result->Type_Match);
			$p->setDate_Match($result->Date_Match);
			$p->setID_Tournois($result->ID_Tournois);
			$p->setID_Terrain($result->ID_Terrain);
			$p->setID_Equipe($result->ID_Equipe);
			$p->setID_Equipe2($result->ID_Equipe2);
			$p->setNbutEq1($result->NbutEq1);
			$p->setNbutEq2($result->NbutEq2);
			$p->setNbPointsEq1($result->NbPointsEq1);
			$p->setNbPointsEq2($result->NbPointsEq2);			
			
			$pstmt->closeCursor();
			return $p;
		}
		$pstmt->closeCursor();
		return null;
	}
	
	
	
	public static function update($x) {
		$request = "UPDATE match2 SET Type_match3 = '".$x->getType_Match()."'".
				" WHERE ID_Match = '".$x->getID_Match()."'";
		try
		{
			$db = bdchampionnat::getInstance();
			return $db->exec($request);
		}
		catch(PDOException $e)
		{
			throw $e;
		}
	}
	public static function delete($x) {
		$request = "DELETE FROM match3 WHERE ID_Match = '".$x->getID_Match()."'";
		try
		{
			$db = bdchampionnat::getInstance();
			return $db->exec($request);
		}
		catch(PDOException $e)
		{
			throw $e;
		}
	}
	
}

?>