 <?php require_once("../traitement/index.php"); ?>
<div class="contenue">

<form  method="post" action="" >
<?php
if (isset($erreur)) {
     echo $erreur;
}
 ?>
         <h5>S'inscrire</h5></br>
         <p>Pour tester votre niveau de culture general</p> <hr>
    <div class="form_input">
             <h6 class="prenom">Prenom</h6>
             <input class="form_prenon" $error="error" type="text" name="prenom" placeholder="Prenom" value=""><br>
                 <h6 class="nom">Nom</h6>
                    <input class="form_nom" type="text" $error="error" name="nom" 
                    placeholder="Nom" value=""><br>
                    <h6 class="login">Login</h6>
                    <input class="form_login" $error  type="text" name="login" 
                    placeholder="Login" value=""><br>
                       <?php  $error ?>
                    <h6 class="mot_pass">Password</h6>
                    <input class="form_passwd" type="password" $error="error" name="password"
                    placeholder="PassWord" value=""><br> 
                <h6 class="mo_repass">ConfirmerPassword</h6>
                   <input class="form_repass" type="password"  name="repassword" placeholder="PassWord" value=""><br> 
             </div>
                        <a href="" class="link_av">Avatar</a>
                   <input type="hidden" name="MAX_FILE_SIZE" >
                   <input type="file" name="file" class="btn_file" value=""></input>
                   <button type="submit" name="btn_submit" class="form_bt" value="Envoyer le fichier" >
                  Creer un compte</button>
          <?php
if (isset($message)) {
     echo $message;
}
?>
    
</form>
</div>
<?php
                $message='';
                $erreur='';
                $login='';
                if (isset($_POST['btn_submit'])) {
                    //var_dump($_POST['btn_submit']);
                  if (empty($_POST['prenom']))
                  {  
                        $erreur="<label 'error_form'>Entrer votre prenom</label>";
                  }
                  elseif (empty($_POST['nom'])) {
                        $erreur="<label 'error_form'>Entrer votre prenom</label>";
                  }
                  elseif (empty($_POST['login'])) {
                    $erreur="<label 'error_form'>Entrer votre login</label>";
                  }
                  elseif (empty($_POST['password'])) {
                    $erreur="<label 'error_form'>Entrer votre password</label>";
                  }
                  elseif (empty($_POST['login'])) {
                    $erreur="<label 'error_form'>Entrer votre confirmer votre password</label>";
                  }
                  else {
                       if (file_exists('../data/utilisateur.json')) {
                         $js=file_get_contents('../data/utilisateur.json');
                         $js=json_decode($js, true);
                         $extrait=array(
                              'prenom'=> $_POST['prenom'],
                               'nom'=> $_POST['nom'],
                              'login'=> $_POST['login'],
                              'password'=> $_POST['password'],
                              'repassword'=> $_POST['repassword']
                         );
                         $data[]=$extrait;
                         $final_data=json_encode($data);
                         if (file_put_contents('../data/utilisateur.json', $final_data)) {
                            $message=$erreur="<label 'text-succes'>Enrigistrement reussit</label>";
                         }
                       }else {
                         $erreur="Ce dossier n'existe pas";
                       }
                  }
                  
                 }    
            ?>
<?php
/*$error='';
if (isset($_POST['btn_submit'])) {
     if (empty($_POST['prenom']) || empty($_POST['nom']) || empty($_POST['login'])
     || empty($_POST['password']) || empty($_POST['prenom']) || empty($_POST['repassword'])) {
          $error='ce champs est obligatoir';
     }else {
                $data=array();
                $data['prenom']=$_POST['prenom'];
                $data['nom']=$_POST['nom'];
                $data['login']=$_POST['login'];
                $data['password']=$_POST['password'];
                $data['repassword']=$_POST['password'];
                $js=file_get_contents('../data/utilisateur.json');
                $js=json_decode($js, true);
                $js[]=$data;
                $js=json_encode($js);
                file_put_contents('../data/utilisateur.json', $js);
                   
          }
     }
     
?>

<?php
$dossier = 'upload/';
$fichier = basename($_FILES['file']['name']);
$extensions = array('.png', '.jpg');
$extension = strrchr($_FILES['file']['name'], '.'); 
//Début des vérifications de sécurité...
if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
{
     $data['file']=$_POST['file'];
     $erreur = 'Vous devez uploader un fichier de type png ou jpg';
}elseif (!isset($erreur)) //S'il n'y a pas d'erreur, on upload

{
     //On formate le nom du fichier ici...
     $fichier = strtr($fichier, 
     $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
     if(move_uploaded_file($_FILES['file']['tmp_name'], $dossier . $fichier)) 
     //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
     {
          echo 'Upload effectué avec succès !';
     }
     else //Sinon (la fonction renvoie FALSE).
     {
          echo 'Echec de l\'upload !';
     }
else
{
     echo $erreur;
}*/
?>