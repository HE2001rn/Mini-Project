<?php

if(isset($_POST['submit'])){
    $username = $_POST["username"];
    $pwd = $_POST["pwd"];

    require_once 'dbh.inc.php';
    require_once 'function.inc.php';

    if(emptyInputsLogin($username, $pwd) !== false){
        header('Location:../signup.php?error=emptyinput');
        exit();
    }

    loginUser($conn, $username, $pwd);

}
else{
    header('Location:../login.php');
}