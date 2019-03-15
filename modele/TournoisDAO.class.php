<?php
include_once('./modele/classes/bdchampionnat.class.php'); 
include_once('./modele/classes/Tournois.class.php'); 
include_once('./modele/classes/ListeTournois.class.php'); 


class TournoisDAO
{	
	public function create($x) {
				$request = "INSERT INTO `tournois` (`ID_Tournois` ,`Nom_Tournois` ,`DateDebut_Tournois`,`DateFin_Tournois`)".
				" VALUES ('".$x->getID_Tournois()."','".$x->getNom_Tournois()."','".$x->getDateDebut()."','".$x->getDateFin()."')";
	
				/*$request = "INSERT INTO tournois (ID_Tournois,Nom_Tournois ,DateDebut_Tournois,DateFin_Tournois)".
				" VALUES ('".$x->getID_Tournois()."','".$x->getNom_Tournois()."','".$x->getDateDebut().",'".$x->getDateFin()."')";*/
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
			$liste = new ListeTournois();
		
			$requete = 'SELECT * FROM tournois';
			$cnx = bdchampionnat::getInstance();
			
			$res = $cnx->query($requete);
		    foreach($res as $row) {
				$p = new Tournois();
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

		$pstmt = $db->prepare("SELECT * FROM tournois WHERE ID_Tournois = :x");//requête paramétrée par un paramètre x.
		$pstmt->execute(array(':x' => $id));
		
		$result = $pstmt->fetch(PDO::FETCH_OBJ);
		$p = new Tournois();

		if ($result)
		{
			$p->setID_Tournois($result->ID_Tournois);
			$p->setNom_Tournois($result->Nom_Tournois);
			$p->setDateDebut($result->DateDebut);
			$p->setDateFin($result->DateFin);
			$pstmt->closeCursor();
			return $p;
		}
		$pstmt->closeCursor();
		return null;
	}
	
	public static function update($x) {
		$request = "UPDATE tournois SET Nom_Tournois = '".$x->getNom_Tournois()."', DateDebut_Tournois = '".$x->getDateDebut().",DateFin_Tournois ='".$x->getDateFin()."'".
				" WHERE ID_Tournois = '".$x->getID_Tournois()."'";
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
		$request = "DELETE FROM tournois WHERE ID_Tournois = '".$x->getID_Tournois()."'";
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