<?php
function emptyInputsSignup($AccNumber, $name, $email, $Password, $rePassword){
    $result=false;
    if (empty($AccNumber) || empty($name) || empty($email) || empty($Password) || empty($rePassword))
    {
        $result = true;
    }

    return $result;
}

function invalidAccNumber($AccNumber){
    $result;
    if (!preg_match("/^[0-9]*$/", $AccNumber)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidname($name){
    $result;
    if (!preg_match("/^[a-zA-Z]*$/", $name)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidemail($email){
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidpwd($Password, $rePassword){
    
    if ($Password !== $rePassword){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}


function nameExists($conn, $name, $email){
    $sql = "SELECT * FROM signup WHERE usersName = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header('Location:../signup.php?error=stmtfailed');
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $name, $email);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        return false;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $AccNumber, $name, $email, $Password){
    $sql = "INSERT INTO signup (account_number, usersName, usersEmail, pwd) VALUES (?, ?, ?, ?);"; 
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location:../signup.php?error=stmtfailed");
        exit();
    }
    $hashedpwd = password_hash($Password, PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssss", $AccNumber, $name, $email, $hashedpwd);
    mysqli_stmt_execute($stmt);
    
    echo"<script> alert ('Registration Successfully'); </script>";
    echo'<script> window.location.href="/Mini Project/login.php"; </script>';
    exit();

}





////////////////////////////           Login        /////////////////////////////////////




function emptyInputsLogin($username, $pwd){
    $result;
    if (empty($username) || empty($pwd))
    {
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function loginUser($conn, $username, $pwd){
    $userExists = nameExists($conn, $username, $username);
    
    if($userExists === false){
        header('Location:../signup.php?error=usernotfound');
        exit();
    }
    
    $pwdHashed = $userExists['pwd'];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if($checkPwd === false){
        header('Location:../signup.php?error=wrongpassword');
        exit();
    }
    else if($checkPwd === true){
        session_start();
        $_SESSION["name"] = $userExists["usersName"];
        $_SESSION["Password"] = $userExists["pwd"];
        
        header('Location:../RegisterCustomerHomepage.php');
        exit();
    }
}





//////////////////////////////         About us                 /////////////////





function emptyInputsContactUs($name, $email, $massage){
    $result=false;
    if (empty($name) || empty($email) || empty($massage))
    {
        $result = true;
    }

    return $result;
}

function invalidName1($name){
    $result;
    if (!preg_match("/^[a-zA-Z]*$/", $name)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function invalidEmail1($email){
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function createContact($conn, $name, $email, $massage){
    $sql = "INSERT INTO contactus (Users_Name, Users_Email, Massage) VALUES (?, ?, ?);"; 
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location:../Contact Us.php?error=stmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $massage);
    mysqli_stmt_execute($stmt);
    
    echo"<script> alert ('Successfully'); </script>";
    echo'<script> window.location.href="/Mini Project/RegisterCustomerHomepage.php"; </script>';
    exit();

}








