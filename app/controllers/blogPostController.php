<?php
    require  'app/persistences/blogPostData.php';
    $onePost = blogPostById($pdo, 2);

   // include 'ressources/views/blogPost.tpl.php';
    echo $onePost['id'] . $onePost['title'] . $onePost['pseudo'];
    ?>