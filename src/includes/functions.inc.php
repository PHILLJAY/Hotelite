<?php

function emptyInputSignup($username,$email, $password_1, $password_2){
    $result;
    if(empty($username)||empty($email)||empty($password_1)){
       $result= true; 
    } else {
        $result= false;
    }
    debug_print_backtrace();
    return $result;
}

function invalidUsername($username){
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
       $result= true; 
    } else {
        $result= false;
    }
    debug_print_backtrace();
    return $result;
}
function invalidEmail($email){
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
       $result= true; 
    } else {
        $result= false;
    }
    debug_print_backtrace();
    return $result;
}

function pwdMatch($password_1,$password_2){
    $result;
    if ($password_1 !==$password_2){
       $result= true; 
    } else {
        $result= false;
    }
    debug_print_backtrace();
    return $result;
}

function userExists($db,$username,$email){
    $sql = "SELECT * FROM users WHERE Username = ? OR EmailAddress = ?;";
    $stmt = mysqli_stmt_init($db);
    if (!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../../registration.php?error=stmtfailed");
        exit();
    }
    
    mysqli_stmt_bind_param($stmt, "ss", $username,$email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}
function createUser($db,$username, $email, $password_1){
    $sql = "INSERT INTO users (Username, Password, EmailAddress) VALUES (?,?,?);";
    $stmt = mysqli_stmt_init($db);
    if (!mysqli_stmt_prepare($stmt, $sql)){
       header("location: ../../registration.php?error=stmtfailed");
        exit();
    }

    $hashedPass = md5($password_1);
    
    mysqli_stmt_bind_param($stmt, "sss",$username,$hashedPass,$email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../../registration.php?error=none");
    exit();
}

function emptyInputLogin($username, $pass){
    $result;
    if(empty($username)||empty($pass)){
       $result= true; 
    } else {
        $result= false;
    }
    debug_print_backtrace();
    return $result;
}
function loginUser($db, $username, $pass){
    $userExists = userExists($db,$username,$username);

    if($userExists === false){
        header("location: ../../login.php?error=wronglogin");
        exit(); 
    }

    $hashedPass = $userExists["Password"];
    if(!(md5($pass)===$hashedPass)){
        header("location: ../../login.php?error=wronglogin");
        exit(); 
    }else if((md5($pass)===$hashedPass)){
        session_start();
        $_SESSION["userid"] =  $userExists["Id"];
        $_SESSION["userName"] =  $userExists["Username"];
        header("location: ../../main.php");
        exit();
    }
}