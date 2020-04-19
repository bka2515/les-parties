<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUIZZ</title>
    <link rel="stylesheet" href="../public/CSS/QUIZZ.css">
</head>
<body>

 <div class="header">
      <div class="logo"></div>
      <div class="header-text">Le plaisir de jouer</div>
   </div>
   <div class="content"></div>
   <?php
   require_once "fonction.php";
       session_start();
      require_once("../traitement/fonction.php");
      if (isset($_GET['lien'])) {
         switch ($_GET['lien']) {
            case 'acueil':
               require_once("../page/admin.php");
               break;
               case 'jeux':
                  require_once("../page/jeux.php");
               break;
         }
      }else {
         if (isset($_GET['statut']) && $_GET['statut']==="logout") {
            deconnexion ();
         }
         
      }
      
   ?>
</body>
</html>
