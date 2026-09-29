MISSION VII: 

```mermaid
classDiagram
    class Club {
        id
        nom
        ville
    }
    class Equipe {
        id
        nom
    }
    class Categorie {
        id
        libelle
    }
    class Ligue {
        id
        nom
    }
    class Rencontre {
        id
        date
        scoreDomicile
        scoreExterieur
        statut
        annuler()
    }