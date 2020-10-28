
<?php 
$title="MY DESK TOP";
//Configuration du MENU PRINCIPAL
	ob_start();  
	require('view/frontend/menugeneral.php');
	$menu=ob_get_clean(); 
//RENVOI DE LA PAGE D'ACCUEIL 
	ob_start(); $db=dbConnect();
	//$data_member=$InfosMember->fetch();
	?>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
				<H1>BIENVENUE</H1>
		</div>
	</div>
 <?php
	$content = ob_get_clean();
	require('view/frontend/template.php'); ?>