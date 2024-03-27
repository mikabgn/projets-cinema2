<?php
require_once BASE_PROJET . '/src/config/config.php';

function getFilms(): array
{
    $pdo = getConnexion();
    $requete = $pdo->query("SELECT * FROM film");
    return $requete->fetchAll(PDO::FETCH_ASSOC);
}

function getDetails(): array
{
    $film_id = $_GET['id'];
    $pdo = getConnexion();
    $requete = $pdo->query("SELECT * FROM film WHERE id = $film_id");
    return $requete->fetchAll(PDO::FETCH_ASSOC);
}

function UploadFilm($titre,$duree,$resume,$date_de_sortie,$pays,$image): array
{
    $pdo = getConnexion();
    $requete = $pdo->query("INSERT INTO `film` (`id`, `titre`, `duree`, `resume`, `date_de_sortie`, `pays`, `image`) VALUES (NULL, '$titre', '$duree', '$resume', '$date_de_sortie', '$pays', '$image')");
    return $requete->fetchAll(PDO::FETCH_ASSOC);
}