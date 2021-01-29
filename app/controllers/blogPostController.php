
<?php
//blogPostController est appelé par index.php(front controller) et il require les fonctions se situant dans blogPostData.php
//filter_has_var — Vérifie si une variable d'un type spécifique existe
//Filtre l'url du parametre 'id'  ( FILTER_SANITIZE_NUMBER_INT ( Supprime tous les caractères sauf les chiffres, et les signes plus et moins.)
//echo — Affiche une chaîne de caractères

if (filter_has_var(INPUT_GET,'id')) {
    $id = filter_input(INPUT_GET,'id',FILTER_SANITIZE_NUMBER_INT);

}
//Require  : inclut et exécute le fichier spécifié en argument.(stop le script si une erreur survient , include lui n'émetra qu'une alerte)
    require  'app/persistences/blogPostData.php';
    $onePost = blogPostById($pdo, $id);
    require 'ressources/views/blogPost.tpl.php';
    ?>


