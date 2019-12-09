<?php

if(isset($_POST['registruotis'])){
    $firstname = $_POST['vardas'];
    $lastname = $_POST['pavarde'];
    $username = $_POST['slapyvardis'];
    $email = $_POST['email'];
    $pass = $_POST['password'];

require 'db.php';



    if(empty($firstname) || empty($lastname) ||empty($username) ||empty($email)||empty($pass) ){

        header("Location: ../register.php?error=emptyfield&uid=".$username."$mail=".$email);
        exit();
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$username) ){
        header("Location: ../register.php?error=invalidmailuid");
        exit();
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        header("Location: ../register.php?error=invalidmail&uid=".$username);
        exit();
    }
    else if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
        header("Location: ../register.php?error=invaliduid&mail=".$email);
        exit();

    }
      
    else{
        $sql = "SELECT * FROM vartotojai WHERE username=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){

            header("Location: ../register.php?error=sqlerror1");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck = mysqli_stmt_num_rows($stmt);
            if($resultCheck = 0){
              
            header("Location: ../register.php?error=sqlerror2");
            exit();
            }
            else{
                $sql = "INSERT INTO vartotojai (vardas, pavarde, username, email, passW) VALUES(?, ?, ?, ?, ?)";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt, $sql)){       
            header("Location: ../register.php?error=sqlerror3");
            exit();
                }
                else{
                    $hashPass = password_hash($pass, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "sssss", $firstname, $lastname, $username, $email, $hashPass);
                    mysqli_stmt_execute($stmt);
                 
                    header("Location: login.php");
                    exit();
                }
            }
        }
    }

mysqli_stmt_close($stmt);
mysqli_close($conn);

}
else{
     header("Location: ../register.php");
    exit();
    }










?>