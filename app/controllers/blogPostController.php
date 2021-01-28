<?php
    require  'app/persistences/blogPostData.php';
    $onePost = blogPostById($pdo);

    include 'ressources/views/blogPost.tpl.php';
    ?>