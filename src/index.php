<?php
//Get url variables
if (isset($_GET['page'])) {
    $page = $_GET['page'];	
} else {
    if (isset($_POST["page"])) {
        $page = $_POST['page'];
    } else {
        $page = "logIn";
    }
}

if (isset($_GET['action'])) {
    $action = $_GET['action'];	
} else {
    if (isset($_POST["action"])) {
        $action = $_POST['action'];
    } else {
        $action = "viewLogIn";
    }
}

if($page == "logIn") {
    include(__DIR__."/controllers/loginController.php");
}
else if($page == "signUp") {
    include(__DIR__."/controllers/signupController.php");
}
?>