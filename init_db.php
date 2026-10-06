<?php
// Crée la base SQLite et y insère les données de test.
// À lancer une fois. Attention : efface les données existantes.

$dossier = __DIR__ . '/database';
$chemin = $dossier . '/foot_jeunes.sqlite';

$pdo = new PDO('sqlite:' . $chemin, null, null, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
]);
$pdo->exec('PRAGMA foreign_keys = ON');

$pdo->exec(file_get_contents($dossier . '/schema-sqlite.sql'));
$pdo->exec(file_get_contents($dossier . '/donnees-test.sql'));

echo "Base créée : $chemin\n";