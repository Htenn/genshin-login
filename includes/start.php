<!-- Banner -->
<section id="banner">

    <h2>Genshin Impact</h2>
    <p>Step into Teyvat<br>a vast world teeming with life and flowing with elemental energy</p>

</section>

<!-- Main -->
<section id="main" class="container">

    <section class="box special">
        <!-- notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="error success">
                <h3>
                    <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        <!-- logged in user information -->
        <?php if (isset($_SESSION['username'])) : ?>
            <p>Welcome <strong><?php echo $_SESSION['user']; ?></strong></p>
            <p> <a href="index.php?logout='1'" style="color: red;">Logout</a> </p>
        <?php endif ?>

    </section>
</section>