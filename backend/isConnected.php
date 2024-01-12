<?php
require_once('cnx.php');
session_start();
if(!isset($_SESSION['auth'])){
    header('Location:login.php');
    exit;
}