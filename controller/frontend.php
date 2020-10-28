<?php
require('model/frontend.php');

//Logout
function logout(){
	last_sign_on($_SESSION['member_code']);
	session_destroy();
	header('Location:../index.html');
}
//Home page
function welcome(){
	require('view/frontend/home.php');
}
//user Connection
function userConnection(){
	require('view/backend/userConnection.php');
}