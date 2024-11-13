<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Narut\Projectphp\DBAL\Connector;
use Narut\Projectphp\Entity\Cast;

$connection = new Connector();
$castEntity = new Cast($connection->dbh);

// Vérifie et récupère `id_film` et `id_cast` depuis $_GET, en les validant
$idFilm = isset($_GET['id_film']) && ctype_digit($_GET['id_film']) ? (int)$_GET['id_film'] : null;
$idCast = isset($_GET['id_cast']) && ctype_digit($_GET['id_cast']) ? (int)$_GET['id_cast'] : null;

// Récupère le cast filtré si les IDs sont fournis, sinon récupère tout le cast
$cast = $castEntity->getCastByFilmAndCastId($idFilm, $idCast);

require_once __DIR__ . '/../templates/base.html.php';
?>  

<ul>
    <?php foreach ($cast as $filmCast) { ?>
        <li>First Name: <?= $filmCast['firstName'] ?></li>
        <li>Last Name: <?= $filmCast['lastName'] ?></li>

        <!-- Affiche l'ID Film et l'ID Cast si présents dans la base de données -->
        <?php if (isset($filmCast['idFilm'])) { ?>
            <li>ID Film: <?= $filmCast['idFilm'] ?></li>
        <?php } ?>

        <?php if (isset($filmCast['idCast'])) { ?>
            <li>ID Cast: <?= $filmCast['idCast'] ?></li>
        <?php } ?>
    <?php } ?>
</ul>
