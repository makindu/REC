<?php
session_start();
require('sampleAjax/sampleController/sampleAjax.php');
try{
	if(isset($_SESSION['userId']) && isset($_SESSION['userName']))
	{
		if(isset($_GET['action']))
		{
			
		}
		else
		{
			welcome();
		}
		
	}
	elseif(isset($_GET['action'])){
		
	}
}
catch(Exception $e)
{
	echo 'Erreur : '. $e->getMessage();
}