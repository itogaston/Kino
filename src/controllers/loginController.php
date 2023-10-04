<?php

include __DIR__."/../views/loginView.php";
include __DIR__."/../models/loginModel.php";

if($action == "logIn"){
    logIn();
}
else if($action == "viewLogIn") {
    viewLogIn();
}  
else if($action == "logOut") {
    logOut();
} 
else {
    echo "nada";
}
?>