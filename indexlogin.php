<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: indexlogin.php');
    }
    elseif (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['user']);
        setcookie('user', "", time() - 60*60);
        unset($_COOKIE['user']);
        header("location: indexlogin.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body>
    <div class="header">
        <h2>Home Page</h2>
    </div>
    <div class="content">
        <!-- notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success" >
            <h3>
                <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                ?>
            </h3>
        </div>
        <?php endif ?>
        <!-- logged in user information -->
        <?php if (isset($_SESSION['user'])) : ?>
            <p>Welcome <strong><?php echo $_SESSION['user']; ?></strong></p>
            <p> <a href="indexlogin.php?logout='1'" style="color: red;">logout</a> </p>
        <?php endif ?>
    </div>
</body>
</html>