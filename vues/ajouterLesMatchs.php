<html>

<head>
<meta http-equiv="Content-Language" content="en-ca">
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta name="GENERATOR" content="Microsoft FrontPage 4.0">
<meta name="ProgId" content="FrontPage.Editor.Document">
<title>Gestion des Matchs</title>
<link rel="stylesheet" type="text/css" href="bootstrap-3.3.6/css/bootstrap.min.css" />
</head>
<body>


<div class="container">
<div class="row">
<?php
//require_once('./modele/classes/Tournois.class.php');
//require_once('./modele/classes/Match.class.php');
//require_once('./modele/classes/ListeMatch.class.php');
//require_once('./modele/TournoisDAO.class.php');
//require_once('./modele/TerrainDAO.class.php');
//require_once('./modele/MatchDAO.class.php');

if (!ISSET($_SESSION)) session_start();

$textBouton = "Ins&eacute;rer";

?>
	<div class="col-sm-2"></div>
	<div class="panel panel-info col-sm-8">
	<div class="panel-heading"><H1>Ajout des Matchs</H1></div>
	<div class="panel-body">
	
	<form class="form-horizontal" role="form" method="POST" action="" >
		
	<!--	<div class="form-group"><label class="control-label col-sm-2">Type du Match : combo statique </label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="typematch"  />
					<input type="hidden" name="action"  />
					<input type="hidden" name="id"  />
				</div>
			</div>  -->
			
		<div class="form-group">	
	<select id="cmbtypematch" name="typematch" >
   <option value="0">Select Type Match</option>
   <option value="Championnat">Championnat</option>
   <option value="Coupe Algerie">Coupe Algerie</option>
   <option value="Match Amical">Match Amical</option>
   
	</select>
	<input type="hidden" name="action"  />
	<input type="hidden" name="id"  />

</div>  
			
				<div class="form-group"><label class="control-label col-sm-2">Date du Match : </label>
				<div class="col-sm-10">
					<input class="form-control" type="date" name="datematch" />
				</div>
			</div>
			
			

	<div class="form-group" > <label class="control-label col-sm-2">Nom du Tournois : </label>
				<div class="col-sm-10">
				<select  id="nomtournois" name="nomtournois" >
				<?php
				$nomt="";
				$dao=new TournoisDAO();
				$liste = $dao->findAll();
				while ($liste->next())
				{
					$p = $liste->getCurrent();
						if ($p!=null)
							{
				?>
									<option value="<?=$p->getID_Tournois()?>" ><?=$p->getNom_Tournois()?></option>
						
						<?php	
				
						}
				}
				?>
				</select>
		
				 		</div>
				</div>


				<div class="form-group"><label class="control-label col-sm-2">Nom du Terrain : </label>
				<div class="col-sm-10">
				<select id="cmbterrain" name="nomterrain">
				<?php
				$dao=new TerrainDAO();
				$liste = $dao->findAll();
				while ($liste->next())
				{
					$p = $liste->getCurrent();
						if ($p!=null)
							{
				?>
								<option value="<?=$p->getID_Terrain()?>"><?=$p->getNom_Terrain()?></option>
								
						<?php	}
				}
				?>
				</select>
				</div>
			</div>
		
		
			<div class="form-group"><label class="control-label col-sm-2">Nom de la premiere Equipe : </label>
				<div class="col-sm-10">
				<select id="cmbequipe1" name="nomequipe1" >
				<?php
				$dao=new EquipeDAO();
				$liste = $dao->findAll();
				while ($liste->next())
				{
					$p = $liste->getCurrent();
						if ($p!=null)
							{
		?>
								<option value="<?=$p->getID_Equipe()?>"><?=$p->getNom_Equipe()?></option>
				
								
							<?php	
							}
				}
				?>
	
				</select>

				</div>
			
			</div>
			
					<div class="form-group"><label class="control-label col-sm-2">Nom de la deuxieme Equipe : </label>
				<div class="col-sm-10">
				<select id="cmbequipe2" name="nomequipe2">
				<?php
				$dao=new EquipeDAO();
				$liste = $dao->findAll();
				while ($liste->next())
				{
					$p = $liste->getCurrent();
						if ($p!=null)
							{
		?>
								<option value="<?=$p->getID_Equipe()?>"><?=$p->getNom_Equipe()?></option>
						<?php	}
				}
				?>
				</select>
				</div>
			</div>
					
					<div class="form-group"><label class="control-label col-sm-2">Nombre de buts de la premiere Equipe : </label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="nbbutsequipe1" />
				</div>
			</div>
			
						<div class="form-group"><label class="control-label col-sm-2">Nombre de buts de la deuxieme Equipe : </label>
				<div class="col-sm-10">
					<input class="form-control" type="text" name="nbbutsequipe2" />
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">	
             <input name="action" value="ajouterMatch" type="hidden">				
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
