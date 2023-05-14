<?php

include __DIR__."/../views/signupView.php";
include __DIR__."/../models/signupModel.php";

if($action == "signUp"){
    echo "<script>console.log('entra' );</script>";
    signUp();
}
else if($action == "viewSignUp") {
    viewSignUp();
}  
else {
    echo "nada";
}
?>