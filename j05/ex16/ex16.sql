SELECT COUNT(*)
FROM historique_membre
WHERE DATE(date) BETWEEN "2006-10-29" AND "2007-07-28"
OR DATE(date) = "%12-24%";
