﻿<!DOCTYPE html>
<html>
<head>
	<meta charset=UTF-8" />
	<title>Site AP2.2 Gestion des arbitres</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
<!-- ENTETE --> 
<div id="entete">
	<?php include "include/entete.php"; ?>
</div> 
<!-- CONTENEUR CENTRAL  --> 
<div id="centre"> 
 	<!-- COLONNE GAUCHE  --> 
	<div id="menu"> 
		<?php include "include/menu.php"; ?>
	</div> 
 
	<!-- CONTENU  --> 
	<div id="navigation"> 
		<?php
		if(!isset($_GET["action"])){
			include "include/accueil.php"; // page d'accueil
		}
		else{
			if(file_exists("pages/$_GET[action].php")){
				include "pages/$_GET[action].php";
			}
			else{
				include "include/erreur.php";
			}
		}
		?>
	</div> 
</div> 
<!-- PIED DE PAGE --> 
<div id="pied">
	<?php include "include/pied.php"; ?>
</div>
</body>
</html>