<?php
  
  include('../traitement/index_.php');
?>
<div class="container">
<div class="container-header">
<div class="title">Login Form</div>
</div>
<div class="container-body">
<form  method="POST" action="" >
<?php
if (empty($_POST['login']) || empty($_POST['password'])) {
     echo '<span class="error_form" style="red " >tous les champ sont obligatoirs</span>';
}else {
 echo '<span class="error_form" style="red " >Login ou mot de pass incorrect!</span>';

}
?>        <div  ></div>
       <div class="form_input">
       <div class="incon_form"></div>
       <input class="form_controle"  type="text" name="login" placeholder="Login" autocomplete="off">
       
       </div>
       <div class="form_input">
       <div class="incon_form_pwd"></div>
       <input class="form_controle" type="password" name="password" placeholder="PassWord" autocomplete="off">
       
       </div>
       <div class="form_input">
       <button type="submit" name="connexion" class="btn_form" value="" id="submit">Connexion</button>
       <a href="inscription.php" class="link_form">S'inscrire pour jouer</a>
       </div>
   </form>
</div>
</div> 
<?php
              
              $error='';
              $login='';
              $password='';
              if (isset($_POST['connexion'])) {
                  //var_dump($_POST['connexion']);
                    $_SESSION['login']=$_POST['login'];
                    $_SESSION['password']=$_POST['password'];
                    $json=file_get_contents('../data/users.json');
                    $_SESSION['data']=json_decode($json, true);
                    //var_dump($_SESSION['data']);
                    foreach ($_SESSION['data'] as $users) {
                       if ($_SESSION['login']===$users['login']) {
                          if ($users['profil']==='admin') {
                              $_SESSION['connexion']='oui';
                              header('Location:page_d_acueil.php');
                          }else {
                             $_SESSION['connexion']='oui';
                             header('Location:interface_joueurs.php');

                          }
                          $_SESSION['nom']=$users['nom'];
                          $_SESSION['prenom']=$users['prenom'];
                          $_SESSION['image']=$users['image'];
                          $_SESSION['score']=$users['score'];
                       }
                        
                   
                    }
                 } 
                   
          ?>