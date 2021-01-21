<?php
// Calls for the config file
include( "config.php" );



// Insert the information
$req = $bdd->prepare('INSERT INTO records (id, datetime, name, crime, sanction) VALUES(?, ?, ?, ?, ?)');
$rand = rand(10000, 100000);
$req->execute(array($rand, $_POST['datetime'], $_POST['name'], $_POST['crime'], $_POST['sanction']));

// Redirect user back to the add criminal page
header('Location: records.php');

?>