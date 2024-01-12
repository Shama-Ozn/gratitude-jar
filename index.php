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
    <title>Gratitude Jar</title>

    <script src="main.js" ></script>
    
</head>
<body>
    <header>
      <div class="navbar">
        <a class="active" href="#"><i class="fa fa-fw fa-home"></i> Home</a> 
        <a href="jar.php">My jar </a> 
        <!-- <a href="#" id="search-button" onclick="showSearchForm()" ><i class="fa fa-fw fa-search"></i> Search</a> -->
        <div class="loggedInName">
          <a id="userName">Welcome! <strong> <?php echo $_SESSION['auth'] ?> </strong></a> 
          <form method="post">
            <button type="submit" name="logout" id="logout"><i class="fa fa-sign-out"></i> Logout</button> 
          </form>
        </div> 
      </div>
          
          
    </header>

    <nav>
      
      <form id="search-form" style="display: none;">
        <input type="text" id="search-input" placeholder="Search here">
      </form>
    </nav>
    
    <!--__________________________bg_____________________________________________-->
    <div>
      <img src="assets\gratitude jar-bg.jpg" class="lil-jar "/>
    </div>
<!--_________________________________concept intro______________________________-->
  <div class="intro">
    <table id="main-table" >
      <tr>
        <td>
    <h2>What is the Gratitude Jar?</h2>
    <p><h3>Ever feel life rushing by? </h3>The Gratitude Jar is your pause button, 
      a sunshine bottle for little joys. Scribble a "thank you," toss it in, 
      and watch your happiness grow. Not just a container, 
      it's a whisper: "Savor this.</p>
        </td>
    <td>
      <img src="assets\What is the Gratitude Jar.png" alt="a lil jar questioning" class="img-fluid" />
    </td>
      </tr>
      <tr>

        <td>
          <img src="assets\Why Gratitude Jar.png" alt="a lil jar questioning" class="img-fluid" />
        </td>

        <td>
    <h2>Why Gratitude Jar?</h2>
    <p><h3>Because the universe smiles when we say "thank you." </h3>The Gratitude Jar isn't just a container,
       it's a bridge of gratitude. Each note is a whispered echo, 
       acknowledging the good that surrounds us, inviting more magic to unfold.
        Join us, be part of the "thank you" revolution,
         and let's paint the world with shared joy.
<!-- Because you deserve a world painted with sunshine, not just to-do lists. The Gratitude Jar is your reminder to pause, savor the tiny sparks of joy, and weave them into a tapestry of your own happiness. It's not about achievements, it's about celebrating the beauty that blooms amidst the everyday.

 Because life's magic whispers, not shouts. The Gratitude Jar amplifies those whispers, turning fleeting moments into golden memories. It's a sanctuary for stolen laughter, sun-kissed skin, and quiet triumphs, a testament to a life richly lived, one grateful scribble at a time.

 Because happiness isn't found, it's nurtured. The Gratitude Jar is your garden of joy, where appreciation is the seed and sunshine rains every day. Watch your heart bloom, petal by grateful petal, and discover a richer, brighter world blooming from within.-->
    </p>
        </td>
    
      </tr>
  </table>
  </div>


  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</body>
</html>