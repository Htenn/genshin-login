<?php

    if (isset($_GET['page'])){

        $page = $_GET['page'];

        switch ($page){
            case 'Home':
                include "includes/sessionstart.php";
                include "includes/indexheader.php";
                include "includes/section.php";
                break;
            case 'Contact':
                include "includes/altheader.php";
                include "includes/contactform.php";
                break;
            case 'About Us':
                include "includes/sessionstart.php";
                include "includes/altheader.php";
                include "includes/mainabout.php";
                break;
            case 'Inazuma':
                include "includes/sessionstart.php";
                include "includes/contentheader.php";
                include "includes/inazuma.php";
                break;
            case 'Mondstadt':
                include "includes/sessionstart.php";
                include "includes/contentheader.php";
                include "includes/mondstadt.php";
                break;
            case 'Liyue':
                include "includes/sessionstart.php";
                include "includes/contentheader.php";
                include "includes/liyue.php";
                break;
            case 'Confirmed':
                include "includes/altheader.php";
                include "includes/confirmed.php";
                break;
            case 'Register':
                include "config_login.php";
                include "includes/indexheader.php";
                include "includes/webreg.php";
                break;
            case 'Login':
                include "config_login.php";
                include "includes/indexheader.php";
                include "includes/login.php";
                break;
            case 'Hues of the Violet Garden':
                include "includes/sessionstart.php";
                include "includes/altheader.php";
                include "includes/article1.php";
                break;
            case 'Frostflake Heron':
                include "includes/sessionstart.php";
                include "includes/altheader.php";
                include "includes/article2.php";
                break;
            case 'Visions':
                include "includes/sessionstart.php";
                include "includes/altheader.php";
                include "includes/visions.php";
                break;
            case 'Mondstadt Region':
                include "includes/sessionstart.php";
                include "includes/altheader.php";
                include "includes/regionmondstadt.php";
                break;
            case 'Liyue Region':
                include "includes/sessionstart.php";
                include "includes/altheader.php";
                include "includes/regionliyue.php";
                break;
            case 'Inazuma Region':
                include "includes/sessionstart.php";
                include "includes/altheader.php";
                include "includes/regioninazuma.php";
                break;
        }
    }
    else {
        include "includes/sessionstart.php";
        include "config_login.php";
        include "includes/indexheader.php";
        include "includes/login.php";
    }

    include "includes/footer.php";
?>