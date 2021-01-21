<?php
// Calls for the config file
include( "config.php" );



// Insert the information
$req = $bdd->prepare('INSERT INTO manhunt (name, crime, sanction, id) VALUES(?, ?, ?, ?)');
$rand = rand(10000, 100000);
$req->execute(array($_POST['nom'], $_POST['crime'], $_POST['sanction'], $rand));

// Redirect user back to the add criminal page
header('Location: manhunt.php');

?>