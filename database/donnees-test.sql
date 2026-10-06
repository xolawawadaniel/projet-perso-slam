INSERT INTO ligue (nom) VALUES
    ('Ligue A'),
    ('Ligue B');

INSERT INTO categorie (libelle) VALUES
    ('U11'),
    ('U13'),
    ('U15');

INSERT INTO club (nom, ville) VALUES
    ('AS Dumbéa', 'Dumbéa'),
    ('FC Païta', 'Païta'),
    ('US Nouméa', 'Nouméa');

INSERT INTO equipe (nom, id_club, id_categorie, id_ligue) VALUES
    ('AS Dumbéa U13', 1, 2, 1),
    ('FC Païta U13',  2, 2, 1),
    ('US Nouméa U13', 3, 2, 1),
    ('AS Dumbéa U15', 1, 3, 2),
    ('FC Païta U15',  2, 3, 2);

INSERT INTO rencontre
    (date_rencontre, score_domicile, score_exterieur, statut, id_equipe_domicile, id_equipe_exterieur)
VALUES
    ('2026-10-03', 3, 1, 'joue', 1, 2),
    ('2026-10-03', 0, 0, 'joue', 3, 1),
    ('2026-10-10', NULL, NULL, 'programme', 2, 3),
    ('2026-10-10', NULL, NULL, 'annule', 4, 5);