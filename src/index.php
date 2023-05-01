<?php
// TODO: if page is in available pages
if (isset($_GET['page'])) {
    $requested_page = $_GET['page'];
} else {
    $requested_page = 'home';
}

switch ($requested_page) {
    case "blog":
        include(__DIR__ . "/controllers/blog.php");
        break;
    case "home":
        include(__DIR__ . "/controllers/homeController.php");
        break;
    case "signin":
        include(__DIR__ . "/controllers/signController.php");
        break;
    default:
        include(__DIR__ . "/404.php");
}
?>