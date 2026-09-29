Résultats Foot Jeunes
Présentation

Application web qui regroupe les résultats des matchs de football des différentes catégories d'âge (U11, U13, U15…).

Elle permet aux clubs et aux supporters de saisir et consulter les résultats au même endroit.

Objectif

Les résultats de matchs de jeunes sont dispersés sur plusieurs sites. L'application centralise ces résultats pour ne plus avoir à aller sur différents sites pour voir un score.

Utilisateurs
Gestionnaire de club : saisit les clubs, les équipes et les résultats.
Visiteur : consulte les résultats et recherche une équipe ou une catégorie.
Fonctionnalités principales
Consulter les résultats des matchs
Ajouter un club
Ajouter une équipe
Saisir le résultat d'un match
Modifier le score d'un match
Modifier la ligue d'une équipe
Marquer un match comme annulé
Rechercher une équipe par son nom
Filtrer les résultats par catégorie
MVP et bonus

MVP : toutes les fonctionnalités ci-dessus.

Bonus (après le MVP) : authentification, classement, statistiques, logos des clubs, mode sombre, export PDF.

Modèle de données

Base de données de 5 tables :

ligue (id_ligue, nom)
categorie (id_categorie, libelle)
club (id_club, nom, ville)
equipe (id_equipe, nom, id_club, id_categorie, id_ligue)
rencontre (id_rencontre, date_rencontre, score_domicile, score_exterieur, statut, id_equipe_domicile, id_equipe_exterieur)

Un club possède plusieurs équipes. Une équipe a une catégorie et une ligue. Une rencontre oppose deux équipes (domicile et extérieur).

Technologies envisagées
Frontend : HTML / CSS / JavaScript
Backend : PHP (API REST)
Base de données : PostgreSQL
Communication : HTTP / JSON
API (routes principales)
Méthode	Route	Fonction
GET	/api/rencontres	Récupérer les résultats
POST	/api/rencontres	Ajouter un résultat
PUT	/api/rencontres/{id}	Modifier un score ou annuler un match
GET	/api/equipes	Récupérer / rechercher les équipes
POST	/api/equipes	Ajouter une équipe
PUT	/api/equipes/{id}	Modifier une équipe (dont sa ligue)
GET	/api/clubs	Récupérer les clubs
POST	/api/clubs	Ajouter un club
Structure du projet
resultats-foot-jeunes/
├── docs/
├── .gitignore
└── README.md

Les dossiers frontend/ et backend/ seront ajoutés au début du développement.

Documentation

Le dossier docs/ contient toute la conception :

01-expression-besoin.md : besoin, utilisateurs, fonctionnalités
02-mvp.md : MVP et bonus
mcd.png : modèle conceptuel de données
03-mld.md : modèle logique de données
diagramme-classes.png : diagramme de classes
04-architecture.md : architecture technique
05-api.md : contrat de l'API
06-plan-developpement.md : plan de développement
État du projet

Analyse et conception en cours.