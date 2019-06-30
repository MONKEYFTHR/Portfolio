<?php
$ini = parse_ini_file('db.ini');
$bdd = new PDO($ini['bdd'], $ini['username'], $ini['password']) or die ('Cannot connect to db');
$txt = $_POST['txt'];
$table = $_POST['table'];
htmlspecialchars($table);
$id = $_POST['id'];
$up1 = $bdd->prepare("UPDATE ".$table." SET content = :txt WHERE id = :id;");
$up1 -> bindParam(':txt', $txt);
$up1 -> bindParam(':id', $id);
$up1 -> execute();
header('location: index.php');
 ?>
