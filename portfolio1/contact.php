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
   <div class="formulaire">
    <form action="message.php" method="post">
      <label for="fname">First Name</label>
      <input type="text" id="fname" name="Nom" placeholder="/*Votre nom*\">
      <label for="subject">Subject</label>
      <textarea id="subject" name="sujet" placeholder="/*Votre demande*\" style="height:200px"></textarea>
      <input type="submit" value="Envoyer (j'attrape)">
    </form>
   </div>
   <footer>
     <br/>
     <a href="https://fr.linkedin.com/">LinkedIn</a>
     <a href="#">|</a>
     <a href="https://fr.youtube.com">Youtube</a>
     <a href="#">|</a>
     <a href="https://twitter.com/?lang=fr">Twitter</a>
     <a href="#">|</a>
     <a href="https://www.facebook.com/">Facebook</a>
     <a href="#">|</a>
     <a href="https://www.skyrock.com/blog/">Skyblog</a>
     <a href="#">|</a>
     <a href="https://myspace.com/">MySpace</a>
    <br/>
    <br/>
    <br/>
    <div>
      <button type="button" name="RGP" onClick="Message()">RGPD</button>
    </div>
  </footer>
  <script type="text/javascript">
     function Message() {
         var msg="Bon, j'utilise pas vos données donc pas besoin (pour le moment)";
         console.log(msg)
         alert(msg);
     }
  </script>
  </body>
</html>
