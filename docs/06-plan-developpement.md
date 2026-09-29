Plan de développement
Étape 1 : la base de données

    Créer la base PostgreSQL
    Créer les 5 tables (ligue, categorie, club, equipe, rencontre)
    Insérer quelques données de test

Étape 2 : le backend (API PHP)

    Créer la connexion à la base de données
    Créer les entités (Club, Equipe, Categorie, Ligue, Rencontre)
    Afficher les résultats (GET /api/rencontres)
    Ajouter un club (POST /api/clubs)
    Ajouter une équipe (POST /api/equipes)
    Saisir un résultat (POST /api/rencontres)
    Modifier un score (PUT /api/rencontres/{id})
    Marquer un match comme annulé (PUT /api/rencontres/{id})
    Modifier la ligue d'une équipe (PUT /api/equipes/{id})
    Ajouter la recherche d'équipe (GET /api/equipes?nom=)
    Ajouter le filtre par catégorie (GET /api/rencontres?categorie=)

Étape 3 : le frontend

    Page qui affiche la liste des résultats
    Formulaire pour ajouter un club et une équipe
    Formulaire pour saisir et modifier un résultat
    Bouton pour annuler un match
    Champ de recherche d'équipe
    Filtre par catégorie

Étape 4 : finitions

    Tester le MVP
    Améliorer l'interface
    Mettre à jour le README

Bonus (seulement si le MVP fonctionne)

    Authentification
    Classement
    Statistiques
    Logos des clubs
    Mode sombre
    Export PDF

Répartition conseillée

    Séance 2 : étapes 1 et 2 (base de données et API).
    Séance 3 : étapes 3 et 4 (interface, tests, finitions).
