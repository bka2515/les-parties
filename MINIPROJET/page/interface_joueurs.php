<style>
     .q1{
          width: 60%;
          height: 20%;
          margin-top: 12
     }
     .cle{
          font-size: 8px;
          text-align: center;
          left: 40%;
          position: relative;
     }
     .Quest{
          font-size: 12px;
          text-align: center;
          left: 40%;
          position: relative;
     }
     .Quest1{
          font-size: 12px;
          text-align: center;
          left: 33%;
          position: relative;
     }
     .Quest3{
          font-size: 12px;
          text-align: center;
          left: 40%;
          width: 40%;
          position: relative;
     }
</style>

<?php
  
    require_once("../traitement/index_.php");
 ?>
 <div  class="bande">
 <div  class="bande1">
 <div class="bande_text">BIENVENUE SUR LA PLATEFORME DE JEU DE QUIZZ<br>
      JOUER ET TESTER VOTRE NIVEAU DE CULTURE GÉNÉRALE</div>
 <button type="submit"  class="bande_sub"  placeholder=""><a href="connexion.php">Déonnexion</a></button>
 <div  class="logo2"></div>
</div>
<div class="tab3">
<?php
   
  
   
   /*  for($i=1; $i<count($tabUsers); $i++){
          if($tabUsers[$i]['type_reponse']=="TEXT_A_SAISIR"){
               $i.".".$tabUsers[$i]['question']."<br/>";
               "<textarea name='matexte' >".$tabUsers[$i]['reponses']."</textarea><br/>";
              
          }elseif
           ($tabUsers[$i]['type_reponse']=="CHOIX_SIMPLE") {
                
                $i.".".$tabUsers[$i]['question']."<br/>";
               
                    foreach($tabUsers[$i]['reponses'] as $key=>$value){
                        
                           //var_dump($key);  
                    
                    if ($value===true) {
                       '<input type="radio" name="checked">'.'<span class="cle">'.$key.'</span>'."<br/>";
                    
                         
                    }else {
                         '<input type="radio">'.'<span class="cle">'.$key.'</span>'."<br/>";
                         
                    }
                
          }
     }else {
           $i.".".$tabUsers[$i]['question']."<br/>";
               
          foreach($tabUsers[$i]['reponses'] as $key=>$value){
              
                 //var_dump($key);  
          
          if ($value===true) {
             '<input type="checkbox">'.'<span class="cle">'.$key.'</span>'."<br/>";
               
          }else {
               '<input type="checkbox">'.'<span class="cle">'.$key.'</span>'."<br/>";
               
          }
      
}
     }
}*/

    
?>
   
    <?php
    $Users=file_get_contents('../data/question.json') ;
    $tabUsers=json_decode($Users, true) ;
    define('ELT_par_PAGE',5);
    $nbrvaleur=count($tabUsers);
    $nbr_page=ceil($nbrvaleur/ELT_par_PAGE);
    for ($page=1; $page <= $nbr_page; $page++) { 
        echo '<a href="interface_joueurs.php?page='.$page.'">['.$page.']</a>';
    }
    if (isset($_GET['$page'])) {
         $page_Actu=$_GET['$page'];
       
    }else {
         $page_Actu=1;
    }
    echo  '<table>';
    $debut=($page_Actu-1)*ELT_par_PAGE;
    $fin=$page_Actu+ELT_par_PAGE-1;
    for ($i=$debut; $i <$fin; $i++) {
     for ($i=1; $i <count($tabUsers) ; $i++) { 
          
      if (isset($tabUsers[$i]['question']) && isset($tabUsers[$i]['reponses'])) {
          
           if($tabUsers[$i]['type_reponse']=="TEXT_A_SAISIR"){
              echo  '<span class="Quest1">'.$i.".".$tabUsers[$i]['question'].'</span>'."<br/>".
              "<textarea class='Quest3' name='matexte' ></textarea>"."<br/>";
          }elseif
          ($tabUsers[$i]['type_reponse']=="CHOIX_SIMPLE") {
               
              echo '<span class="Quest">'.$i.".".$tabUsers[$i]['question'].'</span>'."<br/>";
              
                   foreach($tabUsers[$i]['reponses'] as $key=>$value){
                       
                          //var_dump($key);  
                   
                   if ($value===true) {
                   echo '<input class="Quest" type="radio" name="checked">'.'<span class="cle">'.$key.'</span>'."<br/>";
                   } else {
                   echo '<input class="Quest" type="radio" name="checked">'.'<span class="cle">'.$key.'</span>'."<br/>";
                   }
               }
              
          }else {
            echo   '<span class="Quest">'.$i.".".$tabUsers[$i]['question'].'</span>'."<br/>";
                   
              foreach($tabUsers[$i]['reponses'] as $key=>$value){
                  
                     //var_dump($key);  
              
              if ($value===true) {
              echo '<input class="Quest" type="checkbox">'.'<span class="cle">'.$key.'</span>'."<br/>";
                   
              }else {
               echo'<input class="Quest" type="checkbox">'.'<span class="cle">'.$key.'</span>'."<br/>";
                   
              }      
    }
         }  
       
      }
     }
    
    }
    echo '</table>';
    ?>
   
    <!--
</div> 
 <table class="tab2">
           <tr>
                <th class="N2">Top scores</th>
                <th class="N2">Mon meilleur score</th>
           </tr>
      </table>   
     
 </div>-->