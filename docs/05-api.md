MISSION IX:

# Contrat de l'API

## Équipes

| Méthode | Route | Fonction |
|---|---|---|
| GET | `/api/equipes` | Récupérer toutes les équipes |
| POST | `/api/equipes` | Ajouter une équipe |
| PUT | `/api/equipes/{id}` | Modifier une équipe (dont sa ligue) |

## Clubs

| Méthode | Route | Fonction |
|---|---|---|
| GET | `/api/clubs` | Récupérer tous les clubs |
| POST | `/api/clubs` | Ajouter un club |

## Rencontres

| Méthode | Route | Fonction |
|---|---|---|
| GET | `/api/rencontres` | Récupérer tous les résultats |
| POST | `/api/rencontres` | Ajouter un résultat |
| PUT | `/api/rencontres/{id}` | Modifier le score ou annuler un match |

## Recherche et filtre

| Méthode | Route | Fonction |
|---|---|---|
| GET | `/api/equipes?nom=xxx` | Rechercher une équipe par son nom |
| GET | `/api/rencontres?categorie=U13` | Filtrer les résultats par catégorie |