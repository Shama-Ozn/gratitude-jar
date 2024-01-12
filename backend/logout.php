<?php
require_once('cnx.php');
if(isset($_POST['logout'])){
    unset($_SESSION['auth']);
    session_unset();
    session_destroy();
    header('location: login.php');
    exit;

}  