<?php

if(isset($_POST['submit'])){
    $accnumber = $_POST["accnumber"];
    $name = $_POST["name"];
    $amount = $_POST["amount"];

    require_once 'dbh.inc.php';
    require_once 'function.inc.php';

    if(emptyInputs($accnumber, $name, $amount) !== false){
        header('Location:../Transaction.php?error=emptyinput');
        exit();
    }

    Transfer($conn, $accnumber, $name, $amount);

}
else{
    header('Location:../PopUpMsg/TransPopUp.php');
}