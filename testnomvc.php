------------------------ HEADER --------------------------- <br>

Mes articles <br>

<ul>
    <li> 	SPORT ! MotoGP <br> <p> Chute dans le classement pour Fabio quartararo ! il arrête sa carrière pour partir faire du biathlon… </p> </li>
    <li>	Accident au campus <br> <p>Un formateur se casse une jambe à cause d'un élève !</p></li>
    <li>	Concert gratuit au campus ! <br> <p>L'étudiant Dimitri en concert live solo accompagné de sa guitare le 1 Février ! venez nombreux !</p></li>
    <li>	Game over pour NETFLIX <br> <p>augmentation du prix mensuel qui passe à 79€99 ! une HONTE !</p></li>
    <li>	Valence sous les bombes ! <br> <p>Une bombe nucléaire trouvé dans le centre ville ! </p></li>
    <li>	Le groupe BERNARD en colère ! <br> <p>Les étudiants Térence, Steve et Greg veulent un round 2 ! </p></li>
    <li>	Achat de clé USB sur AMAZON ! <br> <p>profitez de la promotion amazon ! Kingston 32go pour seulement 5€99 ! une affaire à faire ! désolé l…</p></li>
    <li>	Campus numérique - Marlène en PLS <br> <p>Depuis le mercredi 27 janvier Marlène est en PLS et baisse les bras ! je cite "y'en a marre de GIT !…</p></li>
    <li>	INTEL vs AMD <br> <p>INTEL surclasse amd grâce avec sa technoloigie "INT-HELL"</p></li>
    <li>	MR BOTELLA Steve en garde à vue !	<br> <p>Après avoir Tagué son commit, il perd son versionnage et s'en prend à l'étudiant Karl ! Aïe !</p></li>
    <li>	A star is born <br> <p>Mr MARTINET en avant premiere du prochain blockbuster de chez MARVEL ! je cite "On ne lit pas et on …</p></li>

</ul>

------------------------ FOOTER ---------------------------

<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=blog', 'rdk', 'rdk');
} catch (PDOException $e) {
    echo 'Échec lors de la connexion : ' . $e->getMessage();
}
?>

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

$tenLastPosts = lastBlogPosts($pdo);
var_dump($tenLastPosts);
?>
<?php
$i =1;
while($i <= 10):

?>
    <li> <?= $tenLastPosts[$i]['title']?>	 <br> <p> <?= $tenLastPosts[$i]['text']?> </p> </li>
<?php

$i++;
endwhile;
?>

