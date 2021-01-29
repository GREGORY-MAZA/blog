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


/*function commentsByBlogPost(PDO $commentPost, $id){
    $resultat = $commentPost->query("SELECT posts.title, comments.text
    FROM posts
    INNER JOIN comments ON comments.authors_pseudo=authors.pseudo
    WHERE authors.id=$id";

        $posts= $resultat->fetchAll(PDO::FETCH_COLUMN);
        return $posts;
*/



