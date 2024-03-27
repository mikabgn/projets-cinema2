<?php
require_once '../../base.php';
require_once BASE_PROJET . '/src/config/config.php';

function inscriptionUtilisateur($pseudo,$email,$passwordHach): array
{
    $pdo = getConnexion();
    $requete = $pdo->query("INSERT INTO `utilisateur` (`id_utilisateur`, `pseudo_utilisateur`, `email_utilisateur`, `mdp_utilisateur`) VALUES (NULL, '$pseudo', '$email', '$passwordHach')");
    return $requete->fetchAll(PDO::FETCH_ASSOC);
}

function mailUtiliser(): array
{
    $pdo = getConnexion();
    $requete = $pdo->query("SELECT email_utilisateur FROM `utilisateur`");
    return $requete->fetchAll(PDO::FETCH_ASSOC);
}