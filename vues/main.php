
<html>

<head>
<meta http-equiv="Content-Language" content="en-ca">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<link rel="stylesheet" href="./css/style.css" type="text/css" />
<title>Page d'accueil</title>
</head>

<body>
<div>
	<div id="banner">
		<h2>Banniere</h2>
	</div>
	<div id="menu">
		<ul>
			<!--<li><a href="">accueil</a></li>-->
<?php
	//if (!ISSET($_SESSION)) session_start();
	if (ISSET($_SESSION["connected"]))
	{
?>
			<li><a href="?action=affichertournois">Liste des Tournois</a></li>
			<li><a href="?action=ajoutertournois">Ajouter des Tournois</a></li>
			<li><a href="?action=afficherEquipe">Liste des Equipes</a></li>
			<li><a href="?action=ajouterEquipe">Ajouter des Equipes</a></li>
			<li><a href="?action=afficherterrain">Liste des Terrains</a></li>
			<li><a href="?action=ajouterterrain">Ajouter des Terrains</a></li>
			<li><a href="?action=ajouterMatch">Ajouter des Matchs</a></li>
			<li><a href="?action=afficherMatch">Afficher les Matchs</a></li>
			<li><a href="?action=afficherresultatsMatch">Afficher les Resultats des matchs</a></li>
			<li><a href="?action=classerEquipes">Classement des equipes</a></li>
			<li><a href="?action=deconnecter">Deconnecter <?php echo $_SESSION["connected"]; ?></a></li>
<?php	
	}
	else
	{
?>
			
			
			<li><a href="?action=affichertournoisuser">Liste des Tournois</a></li>
			<li><a href="?action=afficherEquipeuser">Liste des Equipes</a></li>
			<li><a href="?action=afficherterrainuser">Liste des Terrains</a></li>
			<li><a href="?action=afficherMatchuser">Afficher les Matchs</a></li>
			<li><a href="?action=afficherresultatsMatchuser">Afficher les Resultats des matchs</a></li>
			<li><a href="?action=classerEquipesuser">Classement des equipes</a></li>
			
			<li><a href="?action=connecter">Se connecter</a></li>
<?php	
	}
?>			
		</ul>
	</div>
	<div id="content">
	<?php
	include $vue.".php";
	?>
	</div>
	<div id="footer">
		&copy; 2019 Auteur. Tous droits reserves.
	</div>
</div>
</body>
</html>
