<?php
try {
$pdo = new PDO('mysql:host=localhost;dbname=blog', 'rdk', 'rdk');
} catch (PDOException $e) {
echo 'Échec lors de la connexion : ' . $e->getMessage();
}