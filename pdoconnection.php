<?php

$servername="localhost";
$username="root";
$password="";
$database="mayur";

try{
	$connect=new PDO("mysql:host=$servername;dbname=$database",$username,$password);
	$connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	echo "Database Connected Successfully";

}
catch(PDOException $error){
	echo "Connection Failed".$error->getMessage();
}