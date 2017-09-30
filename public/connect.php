<?php
session_start() ;

$dbname = "dfboq07qccs5o8";
$host ="ec2-23-23-248-247.compute-1.amazonaws.com"  ;
$dbuser= "mjclzozohbcaxz";
$dbpass = "49cf7a5eff65c04e6e9cbd8ae21027211994dbdb60d9717f8ba1140806075673"; 
$conn = new PDO("pgsql: dbname=$dbname;host=$host", $dbuser, $dbpass); 
$query = "INSERT INTO dfboq07qccs5o8 VALUES ('$_POST[name]','$_POST[password]',
'$_POST[confirm]','$_POST[email]')";



?>