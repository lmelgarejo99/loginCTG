<?php
if (isset($_POST['signup-submit'])){

    require 'dbh.inc.php';   
    
    $username = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $password = $_POST['pass'];
    $passwordRepeat = $_POST['pass-repeat'];
       
    if (empty($username) || empty($gender) || empty($age) ||empty($email) || empty($password) || empty($passwordRepeat)){
        header("Location: ../signup.php?error==emptyfields&name=".$username."&email=".$email);
        exit();
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username)){
        header("Location: ../signup.php?error==invalidEmailUser");
        exit();
    }
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../signup.php?error==invalidemail&name=".$username);
        exit();
    }
    else if (!preg_match("/^[a-zA-Z0-9]*$/",$username)){
        header("Location: ../signup.php?error==invalidUser&email=".$email);
        exit();
    }
    else if ($password !== $passwordRepeat){
        header("Location: ../signup.php?error==passwordcheckname=".$username."&email=".$email);
        exit();
    }
    else{
        $sql = "SELECT emailUsers FROM users WHERE emailUsers=?";
        $stmt = mysqli_stmt_init($conexion);
        if (!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ../signup.php?error==sqlerror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "s", $email);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if ($resultCheck > 0){
                header("Location: ../signup.php?error==usertaken&email=".$email);
                exit();
            }
            else{
                $sql = "INSERT INTO users(nameUsers, genUsers, ageUsers, emailUsers, pwdUsers) VALUES (?,?,?,?,?)";
                $stmt = mysqli_stmt_init($conexion);
                if (!mysqli_stmt_prepare($stmt,$sql)){
                    header("Location: ../signup.php?error==sqlerror");
                    exit();
                }
                else{
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt,"sssss",$username,$gender,$age,$email,$hashedPwd);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../signup.php?signup=success");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conexion);
}
else{
    header("Location: ../signup.php");
    exit();
}
?>