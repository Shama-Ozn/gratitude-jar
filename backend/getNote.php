<?php
require_once("cnx.php");

$output = "";
$sql = "SELECT text FROM notes ORDER BY RAND ( ) LIMIT 1";
$res = $cnx->query($sql);
$note = mysqli_fetch_assoc($res);
$output = $note["text"];
echo $output; 
