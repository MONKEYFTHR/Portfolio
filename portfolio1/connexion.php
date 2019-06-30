<?php
$ini = parse_ini_file('db.ini');
$bdd = new PDO($ini['bdd'], $ini['username'], $ini['password']) or die ('Cannot connect to db');
$pas = $_POST['mdpadmin'];
if (isset($pas) AND $pas == 'Q22pj6rbC42gX2nP8LQg') {
  header('location: admin/admin.php');
}
else {
  echo '<link rel="stylesheet" href="index.css"><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><h1 style="color: crimson; font-size: 200px;">accès refusé :(((</h1>';
}
?>
