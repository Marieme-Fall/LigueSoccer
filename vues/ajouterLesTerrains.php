<html>

<head>
<meta http-equiv="Content-Language" content="en-ca">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta name="GENERATOR" content="Microsoft FrontPage 4.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<title>Gestion des Terrains</title>
<link rel="stylesheet" type="text/css" href="bootstrap-3.3.6/css/bootstrap.min.css" />
</head>
<body>


<div class="container">
<div class="row">
<?php

require_once('./modele/classes/Terrain.class.php');
require_once('./modele/classes/ListeTerrain.class.php');
require_once('./modele/TerrainDAO.class.php');

//if (!ISSET($_SESSION)) session_start();

$textBouton = "Ins&eacute;rer";

?>
	<div class="col-sm-2"></div>
	<div class="panel panel-info col-sm-8">
	<div class="panel-heading"><H1>Ajout des Terrains</H1></div>
	<div class="panel-body">
	
	<form class="form-horizontal" role="form" method="post" action="">
			<div class="form-group"><label class="control-label col-sm-2">Nom du Terrain : </label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="nomterrain"  />
					<input type="hidden" name="action"  />
					<input type="hidden" name="id"  />
				</div>
			</div>
			
			<div class="form-group"><label class="control-label col-sm-2">Type de Terrain : </label>
				<div class="col-sm-10">
					<input class="form-control" type="texte" name="typeterrain" />
				</div>
			</div>	
			
			<div class="form-group"><label class="control-label col-sm-2">Ville du Terrain : </label>
				<div class="col-sm-10">
					<input class="form-control" type="texte" name="villeterrain" />
				</div>
			</div>
			
			
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">	
             <input name="action" value="ajouterterrain" type="hidden">				
					<input class="btn btn-default" type="submit" name="bOK" value="<?=$textBouton?>" />
					<input class="btn btn-default" type="submit" name="bAnnuler" value="Annuler" />
				</div>
			</div>	
		</form>
		
	</div>
	</div>
</div>

</div>
</body>
</html>
