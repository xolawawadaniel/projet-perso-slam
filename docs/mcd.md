MISSION 5:

 CLUB                      CATEGORIE                 LIGUE
 ────                      ─────────                 ─────
 # id_club                 # id_categorie            # id_ligue
 nom                       libelle                   nom
   │                            │                       │
   │ 0,N                        │ 0,N                   │ 0,N
   │                            │                       │
POSSEDER                  APPARTENIR                 EVOLUER
   │                            │                       │
   │ 1,1                        │ 1,1                   │ 1,1
   └────────────────┬───────────┴───────────────────────┘
                    │
                 EQUIPE
                 ──────
                 # id_equipe
                 nom
                    │
          ┌─────────┴─────────┐
          │ 0,N               │ 0,N
       RECEVOIR           SE DEPLACER
          │ 1,1               │ 1,1
          └─────────┬─────────┘
                    │
               RENCONTRE
               ─────────
               # id_rencontre
               date_rencontre
               score_domicile
               score_exterieur
               statut
