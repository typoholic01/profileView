<?php 
//init
session_start();

if (isset($_SESSION["login"])) {
    include 'topnav-login.php';
} else {
    include 'topnav-logout.php';
}
?>