SELECT nom, prenom
FROM fiche_personne WHERE nom OR prenom
LIKE "%-%"
ORDER BY nom, prenom;
