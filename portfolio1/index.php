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
     <a href="#">Présentation</a>
     <a href="#talents">Talents</a>
     <a style="float: right;" href="contact.php">Me contacter</a>
     <a style="float: right;" href="activités.html">Activités</a>
   </div>
   <div class="fire">
     <div class="fire-left">
       <div class="main-fire"></div>
       <div class="particle-fire"></div>
     </div>
     <div class="fire-main">
       <div class="main-fire"></div>
       <div class="particle-fire"></div>
     </div>
     <div class="fire-right">
       <div class="main-fire"></div>
       <div class="particle-fire"></div>
     </div>
     <div class="fire-bottom">
       <div class="main-fire"></div>
     </div>
   </div>
   <br/>
   <div id="whoiam">
     <div class="desc">
       <h1>Nom: GRANIER</h1>
       <br/>
       <h1>Prénom:  Victor</h1>
     </div>
     <div class="desc">
       <h2>Présentation rapide</h2>
       <p>
         <?php
         $rqt1 = $bdd->query("SELECT id, content FROM article WHERE id = 1;");
         $ligne1 = $rqt1->fetch();
         echo $ligne1['content'];
         ?>
       </p>
     </div>
     <div class="desc">
       <h2>Scolarité</h2>
       <p>
         <?php
         $rqt2 = $bdd->query("SELECT id, content FROM article WHERE id = 2;");
         $ligne2 = $rqt2->fetch();
         echo $ligne2['content'];
         ?>
       </p>
     </div>
     <div class="desc">
       <h2>Expériences Profesionnelles</h2>
       <p>
         <?php
         $rqt3 = $bdd->query("SELECT id, content FROM article WHERE id = 3;");
         $ligne3 = $rqt3->fetch();
         echo $ligne3['content'];
         ?>
       </p>
     </div>
     <div class="desc">
       <h2>Projets</h2>
       <a href="projet.php"><p>Projets UF B1</p></a>
     </div>
     <br/>
   </div>
   <br>
   <div id="talents">
     <p style="color: white;">HTML</p>
     <div class="conteniendre">
       <div class="skills html">70%</div>
     </div>
     <p style="color: white;">CSS</p>
     <div class="conteniendre">
       <div class="skills css">70%</div>
     </div>
     <p style="color: white;">JavaScript</p>
     <div class="conteniendre">
       <div class="skills js">50%</div>
     </div>
     <p style="color: white;">PHP</p>
     <div class="conteniendre">
       <div class="skills php">50%</div>
     </div>
     <p style="color: white;">Langage C</p>
     <div class="conteniendre">
       <div class="skills c">60%</div>
     </div>
     <p style="color: white;">SQL</p>
     <div class="conteniendre">
       <div class="skills sql">55%</div>
     </div>
     <p style="color: white;">Suite Microsoft Office</p>
     <div class="conteniendre">
       <div class="skills mc">70%</div>
     </div>
   </div>
   <br/>
  </body>
  <form class="conect" action="connexion.php" method="post">
    <h1>Connexion Aministrateur</h1>
    <input type="password" name="mdpadmin" value="">
    <input type="submit" value="Connexion">
  </form>
</html>
