<?php
// session_start();
    require_once("backend/config.php");

    // if(isset($_SESSION["auth"])) {
    //     header("Location:index.php");
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/login-style.css">
</head>
<body>
    <div class="login-form">
            <form method="post">
                <h1>Login</h1>
                <div class="loginErrorDiv">
                    <strong>
                        <span style="color:red">
                            <?php if(isset($_GET['error']) && $_GET['error'] != "") { echo $_GET['error']; } ?>
                        </span>
                    </strong>
                </div>
                <div class="content">
                    <div class="input-field">
                        <input type="text" placeholder="Login" name="login" value="<?php if(isset($_GET['login']) && $_GET['login'] != "") echo $_GET['login'] ?>" autocomplete="nope">
                    </div>
                    <div class="input-field">
                        <input type="password" placeholder="Password" name="password" autocomplete="new-password">
                    </div>
                </div>
                <div class="action">
                    <button type="submit" name="loginBtn" ><strong>Sign in</strong></button>
                </div>
            </form>
    </div>
    <!-- <form action="action_page.php" method="post">
    <div class="imgcontainer">
        <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <button type="submit">Login</button>
        <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
        </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
        <button type="button" class="cancelbtn">Cancel</button>
        <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
    </form> -->
</body>
</html>