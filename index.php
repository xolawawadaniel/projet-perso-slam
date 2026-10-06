<?php
// Point d'entrée de l'API : toutes les requêtes passent par ce fichier.
// Lancer avec : php -S localhost:8000 index.php   (depuis le dossier backend)

require __DIR__ . '/db.php';

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

function repondre($donnees, int $code = 200): void
{
    http_response_code($code);
    echo json_encode($donnees, JSON_UNESCAPED_UNICODE);
    exit;
}

$methode = $_SERVER['REQUEST_METHOD'];
$route = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

if ($methode === 'OPTIONS') {
    repondre(null, 204);
}

try {
    $pdo = getConnexion();

    // GET /api/rencontres  (filtre facultatif : ?categorie=U13)
    if ($route === 'api/rencontres' && $methode === 'GET') {
        $sql = "SELECT r.id_rencontre, r.date_rencontre,
                       d.nom AS equipe_domicile, r.score_domicile,
                       r.score_exterieur, e.nom AS equipe_exterieur,
                       r.statut, c.libelle AS categorie
                FROM rencontre r
                JOIN equipe d ON d.id_equipe = r.id_equipe_domicile
                JOIN equipe e ON e.id_equipe = r.id_equipe_exterieur
                JOIN categorie c ON c.id_categorie = d.id_categorie";
        $parametres = [];

        if (!empty($_GET['categorie'])) {
            $sql .= " WHERE c.libelle = :categorie";
            $parametres['categorie'] = $_GET['categorie'];
        }

        $sql .= " ORDER BY r.date_rencontre DESC";
        $requete = $pdo->prepare($sql);
        $requete->execute($parametres);
        repondre($requete->fetchAll());
    }

    // GET /api/equipes  (recherche facultative : ?nom=dumbéa)
    if ($route === 'api/equipes' && $methode === 'GET') {
        $sql = "SELECT eq.id_equipe, eq.nom, c.libelle AS categorie, l.nom AS ligue
                FROM equipe eq
                JOIN categorie c ON c.id_categorie = eq.id_categorie
                JOIN ligue l ON l.id_ligue = eq.id_ligue";
        $parametres = [];

        if (!empty($_GET['nom'])) {
            $sql .= " WHERE eq.nom ILIKE :nom";
            $parametres['nom'] = '%' . $_GET['nom'] . '%';
        }

        $sql .= " ORDER BY eq.nom";
        $requete = $pdo->prepare($sql);
        $requete->execute($parametres);
        repondre($requete->fetchAll());
    }

    // GET /api/clubs
    if ($route === 'api/clubs' && $methode === 'GET') {
        $requete = $pdo->query("SELECT id_club, nom, ville FROM club ORDER BY nom");
        repondre($requete->fetchAll());
    }

    repondre(['erreur' => 'Route introuvable'], 404);

} catch (PDOException $e) {
    repondre(['erreur' => 'Erreur de base de données'], 500);
}