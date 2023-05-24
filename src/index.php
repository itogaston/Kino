<?php
//Get url variables
if (isset($_GET['page'])) {
    $page = $_GET['page'];	
} else {
    if (isset($_POST["page"])) {
        $page = $_POST['page'];
    } else {
        $page = "home";
    }
}

if (isset($_GET['action'])) {
    $action = $_GET['action'];	
} else {
    if (isset($_POST["action"])) {
        $action = $_POST['action'];
    } else {
        $action = "home";
    }
}

if($page == "logIn") {
    include(__DIR__."/controllers/loginController.php");
}
else if($page == "signUp") {
    include(__DIR__."/controllers/signupController.php");
}
else if($page == "advSearch") {
    include(__DIR__."/controllers/advancedSearchController.php");
}
else if($page == "home") {
    include(__DIR__."/controllers/homeController.php");
}
else if($page == "list") {
    include(__DIR__."/controllers/listController.php");
}
else if($page == "reviews") {
    include(__DIR__."/controllers/reviewController.php");
} 
?>