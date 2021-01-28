<?php
// création de la fonction avec des parametres requete SQL
function lastBlogPosts(PDO $connexion){
    $resultat = $connexion->query('SELECT title, pseudo, text
    FROM posts
    INNER JOIN authors ON posts.authors_id=authors.id
    LIMIT 10');

    $posts = $resultat ->fetchAll();
    return $posts;

}

function blogPostById(PDO $postByID){
    $resultat2 = $postByID->query('SELECT posts.id, pseudo 
FROM posts 
INNER JOIN authors ON posts.authors_id=authors.id
WHERE authors.id=2
LIMIT 1');

    $posts= $resultat2->fetchAll();
    return $posts;
}