<?php
    function connexion($login, $pwd){
        $users=getData();
        foreach ($users as $key => $user) { 
           
            if ($users["login"]===$login && $users["password"]===$pwd) {
                $_SESSION['user']=$user;
                $_SESSION['statut']='login';
                if ($users["profil"]==="admin") {
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


    function getData($file="utilisateur"){
        $data=file_get_contents("./data/".$file.".json");
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
?>