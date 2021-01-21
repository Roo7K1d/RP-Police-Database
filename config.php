<?php
$username = "police"; // username
$password = "<your password>"; // password of the database
$hostname = "localhost"; // host of the database
$namebase = "police"; // name of the database

// Attempt to connect to the database
try
 {
  $bdd = new PDO('mysql:host='.$hostname.';dbname='.$namebase.'', $username, $password);
 }
  catch (Exception $e)
 {
  // If an error is thrown, display the message
  die('Error : ' . $e->getMessage());
 }
 ?>