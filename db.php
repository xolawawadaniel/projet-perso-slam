<?php
// Connexion à SQLite avec PDO.
// La base est un simple fichier : database/foot_jeunes.sqlite

function getConnexion(): PDO
{
    $chemin = __DIR__ . '/database/foot_jeunes.sqlite';

    if (!file_exists($chemin)) {
        throw new RuntimeException("Base introuvable. Lance d'abord : php init_db.php");
    }

    $pdo = new PDO('sqlite:' . $chemin, null, null, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);

    // SQLite n'active pas les clés étrangères par défaut
    $pdo->exec('PRAGMA foreign_keys = ON');

    return $pdo;
}