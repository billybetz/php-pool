SELECT etage_salle AS "etage", SUM(nbr_siege) AS "nb_sieges" 
FROM salle 
GROUP BY etage_salle
ORDER BY SUM(nbr_siege);
