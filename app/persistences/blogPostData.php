<?php
function lastBlogPosts(PDO $connect){
    return [];
}
//REQUETE SQL !

// SELECT `title`, `text`, `pseudo`, DATE_FORMAT(`date_begin`,"%d/%m/%Y"), DATE_FORMAT(`date_end`,"%d/%m/%Y")
//FROM `posts`
//INNER JOIN `authors` ON `posts`.`authors_id` = `authors`.`id`
//LIMIT 2