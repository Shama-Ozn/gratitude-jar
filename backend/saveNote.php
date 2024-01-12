<?php
require_once("cnx.php");

$output = 0 ;
if(isset($_POST["note"])) {    
    if ($_POST["note"] != '') {
        $note = trim($_POST["note"]);
        $sql = "INSERT INTO notes(text) VALUE ('$note')";
        $res = $cnx->query($sql);
		$output = 1 ;
    }

}
echo $output; 
