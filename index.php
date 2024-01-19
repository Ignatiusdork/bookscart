<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// starting a session
$session_start();
include 'functions.php';
$pdo = pdo_connect_mysql();

//page is set to home
$page = isset($_GET['page']) && file_exists($_GET['page'] .'php') ? $_GET['page'] : 'home';
// Include and show the requested page
include $page . '.php';