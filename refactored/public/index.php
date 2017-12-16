<?php



require("../vendor/autoload.php");

require_once('../common/header.php');

// Other pages go to views
// if($_SERVER['REQUEST_URI'] === '/') => Apply some routing mechanisms here 
require_once('../views/home.php');

require_once('../common/footer.php');
?>

