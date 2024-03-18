<?php
if(isset($_POST['submit'])){
    $AccNumber = $_POST["AccNumber"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $Password = $_POST["Password"];
    $rePassword = $_POST["rePassword"];

    require_once 'dbh.inc.php';
    require_once 'function.inc.php';

    $emptyInput = emptyInputsSignup($AccNumber, $name, $email, $Password, $rePassword);
    $invalidAccNumber = invalidAccNumber($AccNumber);
    $invalidname = invalidname($name);
    $invalidemail = invalidemail($email);
    $invalidpwd = invalidpwd($Password, $rePassword);
    $nameExists = nameExists($conn, $name, $email);

    if($emptyInput !== false){
        header("Location:../signup.php?error=emptyinput12");
        exit();
    }

    if($invalidAccNumber !== false){
        header("Location:../signup.php?error=invalidAccNumber");
        exit();
    }

    if($invalidname !== false){
        header("Location:../signup.php?error=invalidname");
        exit();
    }

    if($invalidemail !== false){
        header("Location:../signup.php?error=invalidemail");
        exit();
    }

    if($invalidpwd !== false){
        header("Location:../signup.php?error=invalidepassword");
        exit();
    }

    if($nameExists !== false){
        header("Location:../signup.php?error=nameExists");
        exit();
    }
    else{
        createUser($conn, $AccNumber, $name, $email, $Password, $rePassword);
        
    }

    

}
else{
    header('Location:../login.php');
}