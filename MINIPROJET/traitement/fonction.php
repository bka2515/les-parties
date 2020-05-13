<?php
    function getUser($login, $password, $tabjson){
        foreach ($tabjson as $user ) {
            if ($user['login']=='login' && $user['password']=='password') {
               return $user;
            }
        }return null;
    }
    function login_Exist($login, $tabjson){
        foreach ($tabjson as $user) {
            foreach ($user as $key => $value) {
                if ($key=='login' && $value=='login') {
                    return true;
                }
            }
        }return false;

    }
    function prametres(){
        $data=file_get_contents('../data/question.json');
        $data=json_decode($data, true);
        return $data;
    }



    
    
    
    
    function connexion($login, $pwd, $tabjson){

        foreach ($tabjson as $key => $user) { 
           
            if ($user["login"]===$login && $user["password"]===$pwd) {
                $_SESSION['user']=$user;
                $_SESSION['statut']='login';
                if ($user["profil"]==="admin") {
                    return "accuil";
                }else {
                    return "jeux";
                }
            }
        }return "error";
    }
    function is_connect(){
        if (!isset($_SESSION['statut'])) {
            header("location:index.php");
        }
    }
    function deconnexion(){
        unset($_SESSION['user']);
        unset($_SESSION['statut']);
        session_destroy();
    }


    function getData($file="users"){
        $data=file_get_contents("../data/users.json");
        $data= json_decode($data, true);
        return $data;
    }
    function valid_data($login){

        $js_data=file_get_contents('../utilisateur.json');
        $decode_flux=json_decode($js_data, true);
        foreach ($decode_flux as  $value) {
            if ($login==$value=['login']) {
                echo '<span id="message" style="color: red"> Ce login est deja utilisé </span>';       
                 }else {
                     $prenom=$_POST['prenom'];
                     $prenom=$_POST['nom'];
                     $prenom=$_POST['login'];
                     $prenom=$_POST['password'];
                 }
        }
    }
   

function champ(){
require_once ("../traitement/fonction.php");
 require_once("../traitement/index.php"); ?>
<div class="contenue">

<form  method="POST" action="" enctype="multipart/form-data" >
<?php
 $prenom=$_POST['prenom'];
 $nom=$_POST['nom'];
 $login=$_POST['login'];
 $password=$_POST['password'];
 $repassword=$_POST['repassword'];
 if (empty($_POST['prenom']))
 { 
      return $erreur;
 }
 elseif (empty($_POST['nom'])) {
    return $erreur;
 }
 elseif (empty($_POST['login'])) {
    return $erreur;
 }
 elseif (empty($_POST['password'])) {
    return $erreur;
 }
 elseif ($password!=$repassword) {
    return $erreur;
 }else {
     return true;
     var_dump(champ());
 }
}
function pagination ($tab){
    $num_page=0;
    $nb_articles_total = count( $tab);
    $nb_per_page = 2;
    $nb_pages = ceil($nb_articles_total / $nb_per_page);
    if (isset($_GET['page'])) {
        $num_page = $_GET['page'];
    }else{
        $num_page=1;
    }
    echo 'Nombre de pages: ' . $nb_pages . '<br>';
    echo 'Page '.$num_page.'/'.$nb_pages;

    echo '<br>';

    echo' <table >';
    echo'<tr>';
    echo' <th>Prenom</th>';
    echo '<th>Nom</th>';
    echo '<th>Score</th>';
    echo '</tr>';

    $debut = ($num_page - 1) * $nb_per_page;
    $fin = $debut + $nb_per_page - 1;
    for ($i=$debut; $i<=$fin; $i++){
        if (array_key_exists($i, $tab)) {
            echo '<tr>';
            echo '<td>' . $tab[$i]['prenom'] . '</td>';
            echo '<td>' . $tab[$i]['nom'] . '</td>';
            echo '<td>' . $tab[$i]['score'] . ' pts</td>';
            echo '</tr>';
        }

    }
    echo '</table>';
    echo '<div class="div">';
    if (isset($_GET[''])) {
   
    if ($num_page > 1){
        $precedent= $num_page - 1;
        echo '<a class="pre"  href="http://localhost/MINIPROJET/page/Liste_joueur.php?page='.$precedent.'">PREVIOUS</a>';
    }

    if ($num_page != $nb_pages){
        $suivant= $num_page + 1;
        echo '<a class="sui" href="http://localhost/MINIPROJET/page/Liste_joueur.php?page='.$suivant.'">NEXT</a>';
    }
}

    echo '</div>';
}

?>
