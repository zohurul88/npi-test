<?php
$server = 'localhost';
$username = 'root';
$password = 'Pass@1234';
$database = 'auth';

try{
	$conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch(PDOException $e){
	die( "Connection failed: " . $e->getMessage());
}