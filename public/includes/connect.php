<?php 
$host = "localhost";
$user = "alex";
$password = "HeavenOnEarth";
$database = "fb_ads";

try {
	$connection = new PDO("mysql:host=$host;dbname=$database", $user, $password);
} catch(PDOException $e) {
	die("Connection failed: ". $e->getMessage());
}

?>