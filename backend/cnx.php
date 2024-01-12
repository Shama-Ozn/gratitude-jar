<?php

try{
    $cnx = new mysqli("localhost","root","","jar_mini_site_db");
    $cnx->set_charset("utf8");
}catch(Exception $e){
    echo($e->message());
    exit("An error has ocurred while connecting to DB");
}