<?php
date_default_timezone_set('UTC');
$page = filter_input(INPUT_GET,'action',FILTER_SANITIZE_STRING);
if ($page) {
    if ($page == 'accueil') {
        include 'action/accueil.php';
    }
    elseif ($page == 'hobby') {
        include 'action/hobby.php';
    }
    elseif ($page == 'contact') {
        include 'action/contact.php';
    }else{
        echo '404';
    }

}
else {

    include 'action/accueil.php';
}
