<?php

$user = "root";
$pass="";
$db = "sparks_bank";


$db = mysqli_connect('localhost',$user,$pass,$db);

if(!$db){
	die("could not connect to the database due to the following error-->".mysqli_connect_error());
}



?>