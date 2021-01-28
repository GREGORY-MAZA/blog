<?php
    require  'app/persistences/blogPostData.php';
    $tenLastPosts = lastBlogPosts($pdo);

    include 'ressources/views/home.tpl.php';
    ?>