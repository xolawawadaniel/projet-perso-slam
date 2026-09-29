MISSION VI MLD:

LIGUE
-----
id_ligue PK
nom

CATEGORIE
---------
id_categorie PK
libelle

CLUB
----
id_club PK
nom
ville

EQUIPE
------
id_equipe PK
nom
id_club FK
id_categorie FK
id_ligue FK

RENCONTRE
---------
id_rencontre PK
date_rencontre
score_domicile
score_exterieur
statut
id_equipe_domicile FK
id_equipe_exterieur FK