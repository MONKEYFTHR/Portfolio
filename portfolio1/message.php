<?php
$ini = parse_ini_file('db.ini');
$bdd = new PDO($ini['bdd'], $ini['username'], $ini['password']) or die ('Cannot connect to db');
$envoyeur = $_POST['Nom'];
$sujet = $_POST['sujet'];
$insert = $bdd->prepare("INSERT INTO message(expediteur, date, message) VALUES(:nom, NOW(), :sujet);");
$insert -> bindParam(':nom', $envoyeur);
$insert -> bindParam(':sujet', $sujet);
$insert -> execute();
header('location: contact.php');
 ?>
