<?php
include_once('./modele/classes/bdchampionnat.class.php'); 
include_once('./modele/classes/Classement.class.php'); 
include_once('./modele/classes/ListeClassement.class.php'); 


class ClassementDAO
{	
	public function create($x) {
				$request = "INSERT INTO `classement` (`ID_Classement` ,`ID_Tournois`,`ID_Match`,`ID_Equipe`,`Points_Classement`)".
				" VALUES ('".$x->getID_Classement()."','".$x->getID_Tournois()."','".$x->getID_Match()."','".$x->getID_Equipe()."','".$x->getPoints_Classement()."')";
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
			$liste = new ListeClassement();
		
			$requete = 'SELECT * FROM classement';
			$cnx = bdchampionnat::getInstance();
			
			$res = $cnx->query($requete);
		    foreach($res as $row) {
				$p = new Classement();
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

		$pstmt = $db->prepare("SELECT * FROM classement WHERE ID_Classement = :x");//requête paramétrée par un paramètre x.
		$pstmt->execute(array(':x' => $id));
		
		$result = $pstmt->fetch(PDO::FETCH_OBJ);
		$p = new Classement();

		if ($result)
		{
			$p->setID_Classement($result->ID_Classement);
			$p->setID_Tournois($result->ID_Tournois);
			$p->setID_Match($result->ID_Match);
			$p->setID_Equipe($result->ID_Equipe);
			$p->setPoints_Classement($result->Points_Classement);
			$pstmt->closeCursor();
			return $p;
		}
		$pstmt->closeCursor();
		return null;
	}
	
	public static function update($x) {
		$request = "UPDATE classement SET Points_Classement = '".$x->getPoints_Classement()."'".
				" WHERE ID_Classement = '".$x->getID_Classement()."'";
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
		$request = "DELETE FROM classement WHERE ID_Classement = '".$x->getID_Classement()."'";
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