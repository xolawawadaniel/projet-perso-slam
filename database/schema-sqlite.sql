DROP TABLE IF EXISTS rencontre;
DROP TABLE IF EXISTS equipe;
DROP TABLE IF EXISTS club;
DROP TABLE IF EXISTS categorie;
DROP TABLE IF EXISTS ligue;

CREATE TABLE ligue (
    id_ligue INTEGER PRIMARY KEY AUTOINCREMENT,
    nom TEXT NOT NULL
);

CREATE TABLE categorie (
    id_categorie INTEGER PRIMARY KEY AUTOINCREMENT,
    libelle TEXT NOT NULL
);

CREATE TABLE club (
    id_club INTEGER PRIMARY KEY AUTOINCREMENT,
    nom TEXT NOT NULL,
    ville TEXT
);

CREATE TABLE equipe (
    id_equipe INTEGER PRIMARY KEY AUTOINCREMENT,
    nom TEXT NOT NULL,
    id_club INTEGER NOT NULL REFERENCES club(id_club),
    id_categorie INTEGER NOT NULL REFERENCES categorie(id_categorie),
    id_ligue INTEGER NOT NULL REFERENCES ligue(id_ligue)
);

CREATE TABLE rencontre (
    id_rencontre INTEGER PRIMARY KEY AUTOINCREMENT,
    date_rencontre TEXT NOT NULL,
    score_domicile INTEGER CHECK (score_domicile >= 0),
    score_exterieur INTEGER CHECK (score_exterieur >= 0),
    statut TEXT NOT NULL DEFAULT 'programme'
        CHECK (statut IN ('programme', 'joue', 'annule')),
    id_equipe_domicile INTEGER NOT NULL REFERENCES equipe(id_equipe),
    id_equipe_exterieur INTEGER NOT NULL REFERENCES equipe(id_equipe),
    CHECK (id_equipe_domicile <> id_equipe_exterieur)
);