<?php require_once("../traitement/index_.php"); ?>
<div class="interphase">
    <div class="tete">
        <div class="tete_text">CRÉEZ ET PARAMÉTREZ VOS QUIZZ</div>
        <form  method="post" action="" id="form-connexion">
        <div class="form_input">
         <button type="submit" name="" class="butt" value=""><a href="connexion.php">Déonnexion</a></button>
         </div>
         </form>
         </div>
    <div class="partie">
    <div class="partie1">  </div>
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
    <h4>PRAMETRER VOTRE QUESTIONS</h4>
    <div class="liste2"> 
    <style>
    .zone1{
        padding: 10px;
       
    }
  
    .zone2{
        padding: 10px;
    }
    .zone3{
        padding: 10px;
    }
    .champ{
        position: relative;
        font-size: 10px;
        top: 1%;
        border-radius: 2px;
       
        
    }
    .btn_red{
        font-size: 12px;
        padding: 0 10px;
        border-radius: 6px;
        border: 3px solid rgb(241, 8, 97);
        background-color: red;
    }
    .QUES1{
        width: 80%;
        height: 40px;
        border-radius: 4px;
    }
    .QUES2{
        width: 30%;
        height: 30px;
        border-radius: 4px;
    }
    h3{
        position: absolute;
        color: red;
        top: 78%;
        left: 60%;
    }
    .btn{
        font-size: 12px;
        padding: 0 10px;
        border-radius: 6px;
        border: 3px solid rgb(146, 146, 224);
        background-color: cornflowerblue;
    }
    .QUES3{
        width: 30%;
        height: 40px;
        border-radius: 4px;
    }
    .btn_Enrigistre{
        top: 290px;
        height: 10%;
        border-radius: 4px;
        background-color: darkturquoise;
        margin-left: 290px;
        width: 25%;
        position: absolute;
    }
</style>
<body>
    <form method="POST" action="">
        <div class="CREE_QUEST">
            <div class="zone1">
             <label  class="CREER1" for="question">Questions</label>
                   <input name="question" class="QUES1" type="text" id="Question" value="" required>
                   </div>
             <div class="zone2">
                 <label class="CREER2" for="">Nbre de points</label>
                 <input class="QUES2" type="number" name="nbr_point" min="1" value="1">
             </div>
        
             <div id="inputs" >
             <div class="zone3" id="row_0">
             <label  for="type_d_reponse">Type de reponse</label>
                   <select  id="choix" class="QUES3" name="type_d_reponse" onchange="supprime()">
                   <option value="CHOIX_SIMPLE" selected>Choisir votre type de reponse</option>
                   <option value="CHOIX_SIMPLE">CHOIX SIMPLE</option>
                   <option value="CHOIX_MULTIPLE">CHOIX MULTIPLE</option>
                   <option value="TEXT_A_SAISIR">TEXT A SAISIR</option>
        </select>
        <button type="button" class="btn" onclick="onAddInput()">+</button>
        
        <div id="inputs2"></div>
      </div>
      <button class="btn_Enrigistre" type="submit" name="enrigistre" placeholder="Enrigistre">Enrigistre</button>
  </div>
   </form>
   
   <script>
      var nbrRow=0;
      function onAddInput(){
          nbrRow++;
          var divInputs=document.getElementById('inputs2');
          var newInput=document.createElement('div');
          var selectOptions=document.getElementById('choix');
          newInput.setAttribute('class','champ');
          newInput.setAttribute('id','row_'+nbrRow);
          if (selectOptions.value==='TEXT_A_SAISIR') {
              newInput.innerHTML=`
                                  
                                  <label for="reponse" class=''>Réponse</label>
                                  <input type="text" id='esp' name="reponse" class="champ">
                                  <button type="button" class="btn_red" onclick="onDeleteInput(${nbrRow})">X</button>
                                  `;
                                  divInputs.appendChild(newInput);
          }
           else if (selectOptions.value==='CHOIX_MULTIPLE') {
              newInput.innerHTML=`
                                  <label for="reponse" class=''>Réponse</label>
                                  <input type="text" id='esp'  name="reponse[]" class="champ">
                                  <input type="checkbox" class="checkbox" name="checked[]">
                                  <button type="button" class="btn_red" onclick="onDeleteInput(${nbrRow})">X</button>
                                  `;
                                  divInputs.appendChild(newInput);
              
          }else  {
            newInput.innerHTML= `
                                  <label for="reponse" class=''>Réponse</label>
                                  <input type="text"  name="reponse[${nbrRow}]" class="champ">
                                  <input type="radio" class='radio' name="radio_select[]" value="${nbrRow}">
                                  <button type="button" class="btn_red" onclick="onDeleteInput(${nbrRow})">X</button>
                                  `;
                                  divInputs.appendChild(newInput);
          }
          
      }
      function onDeleteInput(n){
          var target=document.getElementById('row_'+n);
          setTimeout(function(){
              target.remove();
          },200)
          fadOut('row_'+n);
          
      }
      function fadOut(idtarget){
          var target=document.getElementById(idTarget);
          var effect=setInterval(function(){
              if (!target.style.opacity) {
                  target.style.opacity=1;
              }
              if (target.style.opacity>0) {
                  target.style.opacity-=0.1;  
              }else{
                  clearInterval(effect);
              }
          },200)
      }
      function supprime(){
          var divinputs2=document.getElementById('inputs2');
          divinputs2.innerHTML='';
      }
  </script>

               
                </div>
           
          
</div>
    </div>
    
    </div>
 
    <?php
      if (isset($_POST['enrigistre'])) {
        if (empty($_POST['question']) || empty($_POST['reponse'])) {
            echo "<h3> Tous les champ est obligatoir<h3>";
         }else {
              $data=array();
              $data['question']=$_POST['question'];
              $data['nbr_point']=$_POST['nbr_point'];
              $data['type_reponse']=$_POST['type_d_reponse'];
             // $data[]=array("reponse");
             if ($_POST['type_d_reponse']=="CHOIX_MULTIPLE") {
                 foreach ($_POST['reponse'] as $key => $value) {
                    if (in_array($key,$_POST['checked'])) {
                        $reponses[$value]=true;
                    }else{
                        $reponses[$value]=false;
                    }
                 }
             }elseif ($_POST['type_d_reponse']=="CHOIX_SIMPLE") {
                foreach ($_POST['reponse'] as $key => $value) {
                    if (in_array($key,$_POST['radio_select'])) {
                        $reponses[$value]=true;
                    }else{
                        $reponses[$value]=false;
                    }
                 }
             }else {
                $reponses=$_POST['reponse'];
             }
             $data['reponses']=$reponses;
              $json=file_get_contents('../data/question.json');
              $json=json_decode($json,true);
              $json[]=$data;
              $json=json_encode($json);
              file_put_contents('../data/question.json',$json);
         }
      }
    
    
    ?>
               

    </div>
    </div>