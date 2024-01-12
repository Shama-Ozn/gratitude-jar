<?php
require_once("backend/isConnected.php");
require_once("backend/logout.php");


?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets\styles.css">
    <link rel="stylesheet" href="assets/jar-style.css">
    <link rel="stylesheet" href="assets/sweetalert2.min.css">
    

    <script src="main.js" ></script>
    <title>My jar</title>
</head>
<body>
    <header>
        <div class="navbar">
            <a  href="index.php"><i class="fa fa-fw fa-home"></i> Home</a> 
            <a class="active" href="jar.php"><img id="jar" src="\assets\jar-icon.png" /> My jar </a> 
            <!-- <a href="#" id="search-button" onclick="showSearchForm()" ><i class="fa fa-fw fa-search"></i> Search</a> -->
            <div class="loggedInName">
                <a id="userName">Welcome! <strong> <?php echo $_SESSION['auth'] ?> </strong></a> 
            <form method="post">
                <button type="submit" name="logout" id="logout"><i class="fa fa-sign-out"></i> Logout</button> 
            </form>
            </div> 
            
        </div>

    </header>

    <div class="container">

        <div class="cover">
            <h1 class="note-title">What is your note of today?</h1>
            <form onsubmit="return false" class="flex-form">
                <textarea id="note" placeholder="Write your note here" name="note" cols="3" rows="3"></textarea>
                <input type="submit" id="btnSave" value="Save Note">
            </form>
            <div id="random-note" class="random-note" style="font-size: 40px; color: #fff; margin-top: 5%; cursor: pointer">
                <i class="fa fa-random" aria-hidden="true"></i> Pick One For Me
            </div>
        </div>


        <div class="content"> 
            <div class="close-btn"> 
                × 
            </div> 
            <h2>This is your note for today!</h2>
            <p id="picked-note-text">
            
            </p> 
        </div> 

    </div>

    <script src="scripts/jquery/jquery.min.js"></script>
    <script src="scripts/sweetalert2.min.js"></script>
    <script type="text/javascript" src="scripts/save-note.js"></script>
</body>
</html>