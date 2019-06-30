<?php
$ini = parse_ini_file('db.ini');
$bdd = new PDO($ini['bdd'], $ini['username'], $ini['password']) or die ('Cannot connect to db');
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Portfolio GRANIER Victor</title>
  </head>
  <body>
    <div class="topnav">
     <a href="index.php#">Présentation</a>
     <a href="index.php#talents">Talents</a>
     <a style="float: right;" href="contact.php">Me contacter</a>
     <a style="float: right;" href="activités.php">Activités</a>
   </div>
    <div class="desc">
      <h1>PROJETS DE 1ère ANNÉE D'INFORMATIQUE</h1>
      <p>
      <?php
      $rqt4 = $bdd->query("SELECT id, content FROM projets WHERE id = 1;");
      $ligne4 = $rqt4->fetch();
      echo $ligne4['content'];
      ?>
      </p>
    </div>
  </body>
</html>
