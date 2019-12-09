<?php


if(isset($_POST['jungtis'])){
require 'db.php';


$vartotojoVardas = $_POST['vartotojas'];
$slaptazodis = $_POST['pass'];

    if(empty($vartotojoVardas) || empty($slaptazodis)){
        header("Location: ..login.php?tustiLaukai");
        exit();
    }
    else{
        $sql = "SELECT * FROM vartotojai WHERE username=? OR email=?";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ..login.php?sqlklaida");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "ss", $vartotojoVardas, $vartotojoVardas);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
                if($row = mysqli_fetch_assoc($result)){
                    $pwdCheck = password_verify($slaptazodis,$row['passW']);
                    if($pwdCheck == false){
                        header("Location: ..login.php?blogasslaptazodis");
                        exit();
                    }
                    else if($pwdCheck == true){
                        session_start();
                        $_SESSION['vartotojoID']=$row['id'];
                        $_SESSION['vartotojas']=$row['username'];
                        header("Location: ../bakalaurinis_portfis/pagrindinis.php");
                        exit();
                    }
                    else{
                        header("Location: ..login.php?blogasslapt");
                        exit();
                    }
                }
                else{
                    header("Location: ..login.php?klaida=nerastasvartotojas");
                    exit();
                }
        }
    }
}
else{

    header("Location: ../login.php");
    exit();
}