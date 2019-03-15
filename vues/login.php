<div id="accueil">
	
<?php
	if (ISSET($_REQUEST["global_message"]))
	   $msg="<span class=\"warningMessage\">".$_REQUEST["global_message"]."</span>";
	$u = "";
	if (ISSET($_REQUEST["username"]))
		$u = $_REQUEST["username"];
?>	
	<div id="loginForm">
	<h2>Connexion</h2>
	<form action="" method="post">

		<label for="username">Nom utilisateur :</label><br /> <input name="username" type="text" value="<?php echo $u?>" />
		<?php if (ISSET($_REQUEST["field_messages"]["username"])) 
				echo "<span class=\"warningMessage\">".$_REQUEST["field_messages"]["username"]."</span>";
		?>
		<br />
		<label for="password">Mot de passe    :</label><br /> <input name="password" type="password" />
		<?php if (ISSET($_REQUEST["field_messages"]["password"])) 
				echo "<span class=\"warningMessage\">".$_REQUEST["field_messages"]["password"]."</span>";
		?>
		<br />
		<input name="action" value="connecter" type="hidden" />
		<input value=" OK " type="submit" />
	</form>
	</div>
</div>