<?php
include "singletonDB.php";
function signUp() {
    $singleton = SingletonDB::getInstance();
    $con = $singleton->getConnection();
    $user = $_POST['user'];
    $passwd = md5($_POST['password']);

    $insertQuery = "insert into users (userName, passwd) values ('$user', '$passwd')";
    $selectQuery = "select * from users where userName = '$user'";

    if ($queryReturn = $con->query($selectQuery)) {
        if ($data = $queryReturn->fetch_assoc()) {
            echo "<script>alert('User already exists');</script>";
        } else {
            if ($con->query($insertQuery)) {
                echo "<script>alert('Sign Up OK');</script>";
                header("Location: index.php?page=logIn&action=viewLogIn");
            } 
            else {
                echo "<script>alert('DB Insert ERROR');</script>";
            }
        }
    } else {
        echo "<script>alert('DB Select ERROR');</script>";
    }
}
?>