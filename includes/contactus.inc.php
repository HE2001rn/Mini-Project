<?php
if(isset($_POST['submit'])){
    $name = $_POST["username"];
    $email = $_POST["Email"];
    $massage = $_POST["msg"];

    require_once 'dbh.inc.php';
    require_once 'function.inc.php';

    $emptyInput = emptyInputsContactUs($name, $email, $massage);
    $invalidName1 = invalidName1($name);
    $invalidEmail1 = invalidEmail1($email);

    if($emptyInput !== false){
        header("Location:../Contact Us.php?error=emptyinput12");
        exit();
    }

    if($invalidName1 !== false){
        header("Location:../Contact us.php?error=invalidname");
        exit();
    }

    if($invalidEmail1 !== false){
        header("Location:../Contact Us.php?error=invalidemail");
        exit();
    }

    else{
        // Check if username and email match registered user
        $sql = "SELECT * FROM signup WHERE usersName = ? AND usersEmail = ?";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location:../Contact Us.php?error=stmtfailed");
        exit();
        }

        mysqli_stmt_bind_param($stmt, "ss", $name, $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) == 1) {
        createContact($conn, $name, $email, $massage);
        } 

        else {
            header("Location:../Contact Us.php?error=useremailnotmatch");
            exit();
        }
    }
        
}


else{
    header('Location:../RegisterCustomerHomepage.php');
}