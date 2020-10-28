<?php
// Connection to database
function dbConnect(){
	$db=new PDO('mysql:host=localhost;dbname=isb;charset=utf8','root',''); 
	return $db;
}