<?php
echo 'HELLO WORLD ! YES';

require  'app/persistences/blogPostData.php';
$tenLastPosts = lastBlogPosts($pdo);
var_dump($tenLastPosts);