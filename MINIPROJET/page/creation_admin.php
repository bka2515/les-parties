<style>
    
    .form_prenon_{
    width: 60%;
    height: 30px;
    border-radius: 5px;
    border: 1px solid silver;
    padding-bottom: 2px;
    padding-top: 4px;
    font-size: 12px;
    font-weight: bold;
    color: silver;
    margin-top: 12%;
    
}

.form_nom_{
    width: 60%;
    height: 30px;
    border-radius: 5px;
    border: 1px solid silver;
    padding-bottom: 2px;
    padding-top: 4px;
    font-size: 12px;
    font-weight: bold;
    color: silver;
    margin-top: 4%;
    
}
    

.form_login_{
    width: 60%;
    height: 30px;
    border-radius: 5px;
    border: 1px solid silver;
    padding-bottom: 2px;
    padding-top: 4px;
    font-size: 12px;
    font-weight: bold;
    color: silver;
    margin-top: 4%;
    
}
.form_role_{
    width: 60%;
    height: 30px;
    border-radius: 5px;
    border: 1px solid silver;
    padding-bottom: 2px;
    padding-top: 4px;
    font-size: 12px;
    font-weight: bold;
    color: silver;
    margin-top: 4%;
    
}
.form_passwd_{
    width: 60%;;
    height: 30px;
    border-radius: 5px;
    border: 1px solid silver;
    padding-bottom: 2px;
    padding-top: 4px;
    font-size: 12px;
    font-weight: bold;
    color: silver;
    margin-top: 4%;
    
}

.form_repass_{
    width: 60%;
    height: 30px;
    border-radius: 5px;
    border: 1px solid silver;
    padding-bottom: 2px;
    padding-top: 4px;
    font-size: 12px;
    font-weight: bold;
    color: silver;
    margin-top: 4%;
}

.link_av_{
    top: 82%;
    position: absolute;
    left: 6%;
    text-decoration: none;
    
}
h5{
    position: absolute;
    top: -4%;
    left: 2%;
}
.prenom_{
    position: absolute;
    margin-top: 6%;
}
.nom_{
    position: absolute;
    margin-top: 0%;
}
.mot_pass_{
    position: absolute;
    margin-top: 1%;
}
.role_{
    position: absolute;
    margin-top: 1%;
}
.mo_repass_{
    position: absolute;
    margin-top: 1%;
}
.login_{
    position: absolute;
    margin-top: 1%;
}
.form_bt_{
    position: absolute;
    top: 90%;
    left: 16%;
    width: 18%;
    height: 6%;
    background-color: darkturquoise;
    border-radius: 5px;
}
.btn_file_{
    width: 28%;
    height: 30px;
    border-radius: 5px;
    border: 1px solid silver;
    background-color: blue;
    padding-top: 4px;
    font-size: 12px;
    font-weight: bold;
    color: silver;
    margin-top: 54%;
    left: 30%;
    position: absolute;
    
}
.form_bt_{
    position: absolute;
    left: 36%;
    top: 90%;
    height: 8%;
    width: 20%;
    background-color: blue;
}
hr{
    position: absolute;
    width: 60%;
    top: 10%;
}
</style>
<?php require_once("../traitement/index_.php"); ?>
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
                     id="LQ"><a href="interface_liste_question.php">Liste Questions </a></br></br>
      </li>
                     <i class="FORM2" ><img src="../public/images/ic-ajout.png" alt=""></i>
                     <li id="LQ1"><a href="creation_admin.php">Créer Admin  </a></br></br>
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

<form  method="POST" action="" enctype="multipart/form-data" >
 

         <h5>S'inscrire</h5></br>
         <p>Pour tester votre niveau de culture general</p> <hr>
    <div class="form_input">
             <h6 class="prenom_">Prenom</h6>
             <input class="form_prenon_" $error="error" type="text" name="prenom"
              placeholder="Prenom" autocomplete="off"><br>
                 <h6 class="nom_">Nom</h6>
                    <input class="form_nom_" type="text" $error="error" name="nom" 
                    placeholder="Nom" autocomplete="off"><br>
                    <h6 class="login_">Login</h6>
                    <input class="form_login_" $error  type="text" name="login" 
                    placeholder="Login" autocomplete="off"><br>
                    <h6 class="mot_pass_">Password</h6>
                    <input class="form_passwd_" type="password" $error="error" name="password"
                    placeholder="PassWord" autocomplete="off"><br> 
                <h6 class="mo_repass_">ConfirmerPassword</h6>
                   <input class="form_repass_" type="password"  name="repassword"
                    placeholder="PassWord" autocomplete="off"><br> 
             </div>
                        <a href="" class="link_av_">Avatar</a>
                   <input type="hidden" name="MAX_FILE_SIZE" >
                   <input type="file" name="file" class="btn_file_" value=""></input>
                   <button type="submit" name="btn_submit" class="form_bt_" value="Envoyer le fichier" >Creer un compte</button>
</form>
<div class=""></div>
</div>
    </div>
    
    </div>
    <?php
               
                if (isset($_POST['btn_submit'])) {
                    //var_dump($_POST['btn_submit']);
                    if (empty($_POST['prenom']) && empty($_POST['nom']) && empty($_POST['login'])
                      && empty($_POST['password'])&& empty($_POST['repassword'])
                      && empty($_FILES['file']['name']))
                    { 
                        echo $erreur="<label 'error_form'>tous les champ sont obligatoires</label>";
                    }else {
                         $data=getData();
                         foreach ($data as $key => $value) {
                             if ($_POST['login']==$value['login']) {
                              $erreur="<label 'error_form'>Ce login existe deja</label>";
                             break;
                             }
                             else {
                                  if ($_POST['password']!=$_POST['repassword']) {
                                  echo $erreur="<label 'error_form'>Les mots de pass doivent etre identiques!</label>";
                              break;
                              }else {
                                   $fileName=$_FILES['file']['name'];
                                   $fileTmpName=$_FILES['file']['tmp_name'];
                                   $fileSize=$_FILES['file']['size'];
                                   $fileError=$_FILES['file']['error'];
                                   $fileType=$_FILES['file']['type'];
                                   if (isset($fileName)) {
                                       if ($fileError===0) {
                                           if ($fileSize< 1000000) {
                                               $fileDestination="c:wamp/www/MINIPROJET/public/images".$fileName;
                                               move_uploaded_file($fileTmpName, $fileDestination);
                                    }else {
                                       echo $erreur='Ce fichier est trop grand!';
                                    }
                                }else{
                                    $erreur='Erreur de telechargement!';
                            }
                           }
                           $tabUsers=[
                               'nom'=> $_POST['nom'],
                               'prenom'=> $_POST['prenom'],
                               'login'=> $_POST['login'],
                               'password'=> $_POST['password'],
                               'repassword'=> $_POST['repassword'],
                               'file' => $fileName,
                               
                           ];
                           if (!empty($tabUsers) && empty($erreur)) {
                               $data=$tabUsers;
                               $data=json_encode($data);
                               file_put_contents('../data/admin.json', $data);
                               
                              
                           }  
                         
                         }
                         
                    }
                   
               }
                   
               
          }
     }
?>

