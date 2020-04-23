<?php require_once("../traitement/index.php"); ?>
<div class="interphase">
    <div class="tete">
        <div class="tete_text"></div>
        <form  method="post" action="" id="form-connexion">
        <div class="form_input">
         <button type="submit" name="" class="butt" value=""><a href="connexion.php">Déonnexion</a></button>
         </div>
         </form>
         </div>
    <div class="partie">
    <div class="partie1">  
    <div  class="logo1"></div>
    </div>
    <div class="partie2">
    <nav class="NAV">
            <ul id="navigation">
                  <i class="FORM1" ><img src="../public/images/ic-liste.png" alt=""></i>
             <li 
                     id="LQ"><a href="interface_joueurs.php">Liste Questions </a></br></br>
      </li>
                     <i class="FORM2" ><img src="../public/images/ic-ajout.png" alt=""></i>
                     <li id="LQ1"><a href="inscription.php">Créer Admin  </a></br></br>
     </li>
                     <i class="FORM3" ><img src="../public/images/ic-liste-active.png" alt=""></i>
                     <li id="LQ2"><a href="Liste_joueur.php">Liste Joueurs</a></br></br>
            </li>
                     <i class="FORM4" ><img src="../public/images/ic-ajout.png" alt=""></i>
                     <li id="LQ3"><a href="creation_question.php">Créer Questions</a>
          </li>
         </ul>
    </nav>
         
         </div>
    </div>
    <div class="liste">
    <div class="liste_text">LISTE DES JOUEURS PAR SCOR</div>
    <div class="liste2"> 
         
          <?php
          $users=file_get_contents('../data/users.json');
          $tabuser=json_decode($users, true);
          echo  "<table>";
          define('ELT_par_PAGE', 5);
          $nbrvaleur=count($tabuser);
          $nbr_page=ceil($nbrvaleur/ELT_par_PAGE);
          for ($i=1; $i < $nbr_page; $i++) { 
               echo '<a href="index.php?lien=accueil&contenu=liste-joueurs&liste='.$i.'">['.$i.']</a>&nbsp&nbsp';
          }
          if (isset($_GET['liste'])) {
               $page_Actu=$_GET['liste'];
          }else {
               $page_Actu=1;
          }
          $debut=($page_Actu*ELT_par_PAGE);
          $fin=$page_Actu*ELT_par_PAGE;
          for ($i=$debut; $i <$fin; $i++) { 
               echo '<tr>';
               if (isset($tabuser['$i'])) {
                    echo '<td>'.$tabuser['$i']['Prenom']."</td><td>".$tabuser['$i']['Nom']."</td><td>".$tabuser['$i']['Score']."</td>";   
               }else {
                    echo " ";
               }
               echo "</td>";
          }
          echo "</table>";
         
         
          ?>
         
      
</div>
    </div>
    
    </div>
