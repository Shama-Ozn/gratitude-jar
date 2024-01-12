<?php
require_once("cnx.php");

// check if we have received the login data from the front end
if(!empty($_POST["login"]) && !empty($_POST["password"]) && isset($_POST["loginBtn"])) {
    // extract the login and password values as a plain text 
    $login = trim(htmlspecialchars(strip_tags($_POST['login'])));
    $pwd = trim(htmlspecialchars(strip_tags($_POST['password'])));
    // get the user by login and check the password match
    $verify = 0;
    $res = 0;
    $sql = "SELECT login,password,name FROM users WHERE login = '$login'";
    $req = $cnx->query($sql);
    $user = mysqli_fetch_assoc($req);
    $verify = password_verify($pwd,$user['password'] );
    $res = mysqli_num_rows($req);

    if($res != 0 && $verify != 0){
        session_start();
        $_SESSION['auth'] = $user['name'];

        header("Location: index.php");
        exit();
    } else {
        $errorAuth = 'Login or Password incorrect!';
        $log = $login;
        header('Location: login.php?login='.$log.'&error='.$errorAuth);
    }

}