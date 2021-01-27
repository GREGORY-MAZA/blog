<?php
// création de la fonction avec des parametres requete SQL
function lastBlogPosts(PDO $connexion){
    $resultat = $connexion->query('SELECT title, pseudo
    FROM posts
    INNER JOIN authors ON posts.authors_id=authors.id
    LIMIT 10');

    $posts = $resultat ->fetchAll();
    return $posts;

}
