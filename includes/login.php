<section id="banner">

    <h2>Genshin Impact</h2>
    <p>Login<br>Participate in the awesome community!</p>

</section>

<!-- Main -->
<section id="main" class="container medium">
    <div class="box">
        <form method="post" action="login.php">
            <?php include "errors.php" ?>
            <div class="row gtr-50 gtr-uniform">
                <div class="col-12">
                    <input type="text" name="username" id="username" value="" placeholder="Username" />
                </div>
                <div class="col-12">
                    <input type="password" name="password" id="password" value="" placeholder="Password" />
                </div>
                <div class="col-12">
                    <ul class="actions special">
                        <li><input type="submit" name="login_user" value="Login" /></li>
                    </ul>
                </div>
            </div>
            <br>
            <p style="text-align: center;"> Not yet a member? <a href="index.php?page=Register">Sign Up</a> </p>
        </form>
    </div>
</section>