<?php 
 require_once ("../traitement/fonction.php");
 require_once("../traitement/index.php"); ?>
<div class="contenue">

<form  method="POST" action="" enctype="multipart/form-data" >
 

         <h5>S'inscrire</h5></br>
         <p>Pour tester votre niveau de culture general</p> <hr>
    <div class="form_input">
             <h6 class="prenom">Prenom</h6>
             <input class="form_prenon" $error="error" type="text" name="prenom"
              placeholder="Prenom" autocomplete="off"><br>
                 <h6 class="nom">Nom</h6>
                    <input class="form_nom" type="text" $error="error" name="nom" 
                    placeholder="Nom" autocomplete="off"><br>
                    <h6 class="login">Login</h6>
                    <input class="form_login" $error  type="text" name="login" 
                    placeholder="Login" autocomplete="off"><br>
                    <h6 class="role">profil</h6>
                    <input class="form_role" $error  type="text" name="role" 
                    placeholder="profil" autocomplete="off"><br>
                    <h6 class="mot_pass">Password</h6>
                    <input class="form_passwd" type="password" $error="error" name="password"
                    placeholder="PassWord" autocomplete="off"><br> 
                <h6 class="mo_repass">ConfirmerPassword</h6>
                   <input class="form_repass" type="password"  name="repassword"
                    placeholder="PassWord" autocomplete="off"><br> 
             </div>
                        <a href="" class="link_av">Avatar</a>
                   <input type="hidden" name="MAX_FILE_SIZE" >
                   <input type="file" name="file" class="btn_file" value=""></input>
                   <button type="submit" name="btn_submit" class="form_bt" value="Envoyer le fichier" >
                  Creer un compte</button>
</form>
<div class="logo3"></div>
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
                               'profil' => 'joueur',
                               'score'=> 367
                           ];
                           if (!empty($tabUsers) && empty($erreur)) {
                               $data[]=$tabUsers;
                               $data=json_encode($data);
                               file_put_contents('../data/users.json', $data);
                               header('location:connexion.php');
                           }  
                         
                         }
                         
                    }
                   
               }
                   
               
          }
     }
?>

