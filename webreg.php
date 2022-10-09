<?php include('config_login.php') ?>

<!DOCTYPE html>
<html>

<head>

</head>

<body>
    <form method="post" action="webreg.php">
        <?php include('errors.php') ?>
        <label>Username</label>
        <input type="text" name="username" value="<?php echo $username; ?>">

        <label>Email</label>
        <input type="email" name="email" value="<?php echo $email; ?>">

        <label>Password</label>
        <input type="password" name="password_1">

        <label>Confirm password</label>
        <input type="password" name="password_2">

        <button type="submit" class="btn" name="reg_user">Register</button>

        <p>
            Already a member? <a href="indexlogin.php">Sign in</a>
        </p>
    </form>
</body>

</html>