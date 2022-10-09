<?php include('config_login.php') ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <div class="header">
            <h2>Login</h2>
        </div>

        <form method="post" action="login.php">
            <?php include('errors.php'); ?>
            <label>Username</label>
            <input type="text" name="username" >

            <label>Password</label>
            <input type="password" name="password">

            <button type="submit" class="btn" name="login_user">Login</button>

            <p>
                Not yet a member? <a href="webreg.php">Sign up</a>
            </p>
        </form>
    </body>
</html>