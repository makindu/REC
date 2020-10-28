<?php
session_start();
require('controller/frontend.php');
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
	elseif(isset($_GET['action']))
	{
		if($_GET['action']=="UserInformations")
		{
			getUserInformations($_POST['membername'],$_POST['memberPassword']);
		}
		if($_GET['action']=="logout")
			{
				logout();
			}
	} 
	else
	{
		userConnection();
	}
}
catch(Exception $e)
{
	echo 'Erreur : '. $e->getMessage();
}