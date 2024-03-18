<?php

if(isset($_POST['submit'])){
    $chequeowners = $_POST["chequeowners"];
    $accountnumber = $_POST["accountnumber"];
    $ac = $_POST["ac"];
    $billtype = $_POST["billtype"];
    $billnumber = $_POST["billnumber"];

    require_once 'dbh.inc.php';
    require_once 'function.inc.php';

    $emptyInput = emptyInputsOrderCheque($chequeowners, $accountnumber, $ac, $billtype, $billnumber);
    
    if($emptyInput !== false){
        header("Location:../signup.php?error=emptyinput12");
        exit();
    }

    else{
        createUser($chequeowners, $accountnumber, $ac, $billtype, $billnumber);
        header('Location:../ChePopup.php');
        exit();
    }

    

}
else{
    header('Location:../login.php');
}