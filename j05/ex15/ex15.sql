SELECT REVERSE(SUBSTRING(telephone, 2)) as "enohpelet" 
FROM distrib 
WHERE REVERSE(telephone) LIKE "%50";
