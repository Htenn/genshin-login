<section id="banner">

    <h2>Genshin Impact</h2>
    <p>Register<br>Become a member of our awesome community!</p>

</section>

<!-- Main -->
<section id="main" class="container medium">
    <div class="box">
        <form method="post" action="webreg.php">
            <?php include('errors.php'); ?>
            <div class="row gtr-50 gtr-uniform">
                <div class="col-12">
                    <input type="text" name="username" id="username" value="" placeholder="Username" />
                </div>
                <div class="col-12">
                    <input type="email" name="email" id="email" value="" placeholder="Email" />
                </div>
                <div class="col-12">
                    <input type="password" name="password_1" id="password_1" value="" placeholder="Password" />
                </div>
                <div class="col-12">
                    <input type="password" name="password_2" id="password_2" value="" placeholder="Re-enter Password" />
                </div>
                <div class="col-12">
                    <ul class="actions special">
                        <li><input type="submit" name="reg_user" value="Register" /></li>
                    </ul>
                </div>
            </div>
            <br>
            <p style="text-align: center;">Are you a member?<a href="index.php?page=Login">Login</a> </p>
        </form>
    </div>
</section>