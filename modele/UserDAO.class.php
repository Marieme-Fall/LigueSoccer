<?php
include_once('./modele/classes/bdchampionnat.class.php'); 
include_once('./modele/classes/User.class.php'); 

class UserDAO
{	
	public static function find($id)
	{
		$db = bdchampionnat::getInstance();

		$pstmt = $db->prepare("SELECT * FROM administrateur WHERE Username_Admin = :x");
		$pstmt->execute(array(':x' => $id));
		
		$result = $pstmt->fetch(PDO::FETCH_OBJ);
		$p = new User();

		if ($result)
		{
			$p->setUsername($result->Username_Admin);
			$p->setPassword($result->Password_Admin);
			$pstmt->closeCursor();
			return $p;
		}
		$pstmt->closeCursor();
		return null;
	}	
}
?>