<?php
require 'ressources/views/header.tpl.php';
require 'ressources/views/footer.tpl.php';
if (!empty($tenLastPosts)) {
    var_dump($tenLastPosts);

}
else {
    echo 'NADA ! ! ! !';
}