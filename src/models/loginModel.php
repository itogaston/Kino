<?php

include "singletonDB.php";

function logIn() {    
    $singleton = SingletonDB::getInstance();
    $con = $singleton->getConnection();
    $user = $_POST['user'];
    $passwd = md5($_POST['password']);

    $selectQuery = "select * from users where userName = '$user'";

    if ($queryReturn = $con->query($selectQuery)) {
        if ($data = $queryReturn->fetch_assoc()) {
            if($data["passwd"] == $passwd) {
                session_start();
                $_SESSION['user'] = $user;
                $_SESSION['passwd'] = $passwd;
                $_SESSION['id'] = $data["id"];  
                echo "<script>alert('User logged correctly');</script>";
                header("Refresh:0; url=http://eim-alu-69044.lab.unavarra.es/grupo-ocelote/src/index.php?page=home&action=home");
            }
            else {
                //header("Location: index.php?page=logIn&action=viewLogIn");
                echo "<script>alert('Incorrect password');</script>";
            }
        }
        else {
            //header("Location: index.php?page=logIn&action=viewLogIn");
            echo "<script>alert('Incorrect user');</script>";
        }
    } 
    else {
        echo "<script>alert('DB Select ERROR');</script>";
    }
}
?>