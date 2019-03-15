<?php
include_once('./modele/classes/bdchampionnat.class.php'); 
include_once('./modele/classes/Equipe.class.php'); 
include_once('./modele/classes/ListeEquipe.class.php'); 


class EquipeDAO
{	
	public function create($x) {
				$request = "INSERT INTO `equipe` (`ID_Equipe` ,`Nom_Equipe`)".
				" VALUES ('".$x->getID_Equipe()."','".$x->getNom_Equipe()."')";
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
			$liste = new ListeEquipe();
		
			$requete = 'SELECT * FROM equipe';
			$cnx = bdchampionnat::getInstance();
			
			$res = $cnx->query($requete);
		    foreach($res as $row) {
				$p = new Equipe();
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

		$pstmt = $db->prepare("SELECT * FROM equipe WHERE ID_Equipe = :x");//requête paramétrée par un paramètre x.
		$pstmt->execute(array(':x' => $id));
		
		$result = $pstmt->fetch(PDO::FETCH_OBJ);
		$p = new Equipe();

		if ($result)
		{
			$p->setID_Equipe($result->ID_Equipe);
			$p->setNom_Equipe($result->Nom_Equipe);
			$pstmt->closeCursor();
			return $p;
		}
		$pstmt->closeCursor();
		return null;
	}
	
	public static function update($x) {
		$request = "UPDATE equipe SET Nom_Equipe = '".$x->getNom_Equipe()."'".
				" WHERE ID_Equipe = '".$x->getID_Equipe()."'";
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
		$request = "DELETE FROM equipe WHERE ID_Equipe = '".$x->getID_Equipe()."'";
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