<?php
$ini = parse_ini_file('../db.ini');
$bdd = new PDO($ini['bdd'], $ini['username'], $ini['password']) or die ('Cannot connect to db');
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../index.css">
    <title></title>
  </head>
  <body>
    <br>
    <h1>BIENVENU EN PAGE ADMIN, FAITES BON USAGE DE VOTRES POUVOIR</h1>
    <h1>Modification de la Présentation:</h1>
    <?php
    $rqt1 = $bdd->query("SELECT id, content FROM article WHERE id = 1;");
    $ligne1 = $rqt1->fetch();
    ?>
    <br>
    <form class="update" action="../update.php" method="post">
      <h2>Modifier "Présentation rapide":</h2>
      <textarea name="txt" rows="8" cols="80"><?php echo $ligne1['content'];?></textarea>
      <input type="hidden" name="table" value="article">
      <input type="hidden" name="id" value="<?php echo $ligne1['id'];?>">
      <input type="submit" value="Modifier">
    </form>
    <br>
    <?php
    $rqt2 = $bdd->query("SELECT id, content FROM article WHERE id = 2;");
    $ligne2 = $rqt2->fetch();
     ?>
     <h2>Modifier "Scolarité":</h2>
     <form class="update" action="../update.php" method="post">
     <textarea name="txt" rows="8" cols="80"><?php echo $ligne2['content'];?></textarea>
     <input type="hidden" name="table" value="article">
     <input type="hidden" name="id" value="<?php echo $ligne2['id'];?>">
     <input type="submit" value="Modifier">
   </form>
     <br>
     <?php
     $rqt3 = $bdd->query("SELECT id, content FROM article WHERE id = 3;");
     $ligne3 = $rqt3->fetch();
      ?>
      <h2>Modifier "Expériences Profesionnelles":</h2>
      <form class="update" action="../update.php" method="post">
      <textarea name="txt" rows="8" cols="80"><?php echo $ligne3['content'];?></textarea>
      <input type="hidden" name="table" value="article">
      <input type="hidden" name="id" value="<?php echo $ligne3['id'];?>">
      <input type="submit" value="Modifier">
    </form>
    <br>
    <h1>Modification des Projets:</h1>
    <?php
    $rqt4 = $bdd->query("SELECT id, content FROM projets WHERE id = 1;");
    $ligne4 = $rqt4->fetch();
     ?>
     <h2>Modifier "PROJETS DE 1ère ANNÉE D'INFORMATIQUE":</h2>
    <form class="update" action="../update.php" method="post">
      <textarea name="txt" rows="8" cols="80"><?php echo $ligne4['content'];?></textarea>
      <input type="hidden" name="table" value="projets">
      <input type="hidden" name="id" value="<?php echo $ligne4['id'];?>">
      <input type="submit" value="Modifier">
    </form>
    <h2>Messagerie</h2>
    <div class="messagerie">
      <?php
        $requete = $bdd->query("SELECT * FROM message");
        $result = $requete->fetchAll();
        foreach ($result as $msg) {
          echo '<strong>De: </strong>' . $msg['expediteur'] . ', <strong>le</strong> ' . $msg['date'] . '<br>';
          echo '<strong>Message:</strong> ' . $msg['message'];
          echo '<br><br>';
        }
       ?>
    </div>
     <a href="../index.php"><h1>Retour</h1></a
  </body>
</html>
