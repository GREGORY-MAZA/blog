<?php
// création des fonctions avec des parametres requete SQL
//blogPostData est appelé par blogPostcontroller homeController
function lastBlogPosts(PDO $connexion){
    $resultat = $connexion->query('SELECT title, pseudo, text
    FROM posts
    INNER JOIN authors ON posts.authors_id=authors.id
    LIMIT 10');

    $posts = $resultat ->fetchAll();
    return $posts;

}

function blogPostById(PDO $postByID, $id){
    $resultat2 = $postByID->query("SELECT posts.text, posts.title, authors.pseudo 
FROM posts 
INNER JOIN authors ON posts.authors_id=authors.id
WHERE posts.id=$id");

    $posts= $resultat2->fetch(PDO::FETCH_ASSOC);
    return $posts;
}


function commentsByBlogPost(PDO $commentPost, $id){
    $resultat = $commentPost->query("SELECT comments.text, authors.pseudo
FROM comments
INNER JOIN authors ON comments.authors_id=authors.id
WHERE comments.posts_id=$id");

        $posts= $resultat->fetchAll(PDO::FETCH_ASSOC);
        return $posts;
}

/*SELECT comments.text, authors.pseudo
FROM comments
INNER JOIN authors ON comments.authors_id=authors.id
WHERE comments.authors_id=1*/


