<?php
$pdo = new PDO("mysql:host=localhost;dbname=sakila;charset=utf8", "root", "", [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);
$stmt = $pdo->prepare("SELECT * FROM actor");
$stmt->execute();
$resultats = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Liste d'acteur</title>
    </head>
    <body>
        <h1>Tous les résultats</h1>
        <table border=1>
            <tr>
                <th>Acteur id</th>
                <th>Prénom</th>
                <th>Nom</th>
            </tr>
            <?php foreach($resultats as $resultat): ?>
            <tr>
                <td><?= $resultat["actor_id"] ?></td>
                <td><?= $resultat["first_name"] ?></td>
                <td><?= $resultat["last_name"] ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>