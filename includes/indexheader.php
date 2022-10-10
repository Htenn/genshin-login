<!DOCTYPE HTML>

<html>

<head>
    <title>Genshin Impact</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body class="landing is-preload">
    <div id="page-wrapper">

        <!-- Header -->
        <header id="header" class="alt">
            <h1><a href="index.php?page=Home">Genshin Impact</a></h1>
            <nav id="nav">
                <ul>
                    <li><a href="index.php?page=Home">Home</a></li>
                    <li>
                        <a href="#" class="icon solid fa-angle-down">Regions</a>
                        <ul>
                            <li><a href="index.php?page=Mondstadt Region">Mondstadt</a></li>
                            <li><a href="index.php?page=Liyue Region">Liyue</a></li>
                            <li><a href="index.php?page=Inazuma Region">Inazuma</a></li>

                            <!--
									<li>
										<a href="#">Submenu</a>
										<ul>
											<li><a href="#">Option One</a></li>
											<li><a href="#">Option Two</a></li>
											<li><a href="#">Option Three</a></li>
											<li><a href="#">Option Four</a></li>
										</ul>
									</li>
									-->
                        </ul>
                    </li>
                    <li><a href="#" class="icon solid fa-angle-down">Characters</a>
                        <ul>
                            <li><a href="index.php?page=Mondstadt">Mondstadt</a></li>
                            <li><a href="index.php?page=Liyue">Liyue</a></li>
                            <li><a href="index.php?page=Inazuma">Inazuma</a></li>
                        </ul>
                    </li>
                    <li><a href="index.php?page=Visions">Visions</a>
                    </li>
                    <li><a href="index.php?page=Contact">Contact</a></li>
                    <li><a href="index.php?page=About Us">About Us</a></li>
                    <li>
                        <?php if (isset($_SESSION['username'])) : ?>
                            <a href="index.php?logout='1'" class="button">Logout</a>
                        <?php endif ?>
                    </li>
                </ul>
            </nav>
        </header>