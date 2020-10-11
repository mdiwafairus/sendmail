<?php
$host       =  "localhost";
$dbuser     =  "root";
$dbpass     =  "";
$dbname    	=  "sendmail";

try {    
	$connect = new PDO("mysql:dbname=$dbname;host=$host", $dbuser, $dbpass); 
} catch(PDOException $e) {
    die("Terjadi masalah: " . $e->getMessage());
} 

?>