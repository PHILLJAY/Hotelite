<?php
if (isset($_POST["submit"])){
    $username = $_POST['username'];
    $pass = $_POST['password'];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';
    if(emptyInputLogin($username, $pass) !== false){
        //header("location: ../../login.php?error=emptyinput");
        //exit();
        var_dump($_POST);
    }


    loginUser($db, $username, $pass);

}else{
    header("location: ../../login.php");
    exit();
}


?>