<?php
include_once('./modele/classes/bdchampionnat.class.php'); 
include_once('./modele/classes/Terrain.class.php'); 
include_once('./modele/classes/ListeTerrain.class.php'); 


class TerrainDAO
{	
	public function create($x) {
				$request = "INSERT INTO `terrain` (`ID_Terrain` ,`Nom_Terrain`,`Type_Terrain`,`Ville_Terrain`)".
				" VALUES ('".$x->getID_Terrain()."','".$x->getNom_Terrain()."', '".$x->getType_Terrain()."', '".$x->getVille_Terrain()."')";
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
			$liste = new ListeTerrain();
		
			$requete = 'SELECT * FROM terrain';
			$cnx = bdchampionnat::getInstance();
			
			$res = $cnx->query($requete);
		    foreach($res as $row) {
				$p = new Terrain();
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

		$pstmt = $db->prepare("SELECT * FROM terrain WHERE ID_Terrain = :x");//requête paramétrée par un paramètre x.
		$pstmt->execute(array(':x' => $id));
		
		$result = $pstmt->fetch(PDO::FETCH_OBJ);
		$p = new Terrain();

		if ($result)
		{
			$p->setID_Terrain($result->ID_Terrain);
			$p->setNom_Terrain($result->Nom_Terrain);
			$p->setType_Terrain($result->Type_Terrain);
			$p->setVille_Terrain($result->Ville_Terrain);
			$pstmt->closeCursor();
			return $p;
		}
		$pstmt->closeCursor();
		return null;
	}
	
	public static function update($x) {
		$request = "UPDATE terrain SET Nom_Terrain = '".$x->getNom_Terrain()."'".
				" WHERE ID_Terrain = '".$x->getID_Terrain()."'";
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
		$request = "DELETE FROM terrain WHERE ID_Terrain = '".$x->getID_Terrain()."'";
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