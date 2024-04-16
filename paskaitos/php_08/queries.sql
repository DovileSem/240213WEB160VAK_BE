-- Ne visi stulpeliai
SELECT `vardas`, `pavarde` FROM `autoriai`;

--Tik didziosios mažosios raidės
SELECT UPPER (`vardas`), LOWER (`pavarde`) FROM `autoriai`;

-- Reikšmių iš skirtingų stulpelių apjungimas į vieną
SELECT CONCAT(UPPER(`vardas`), '', LOWER(`pavarde`)) FROM `autoriai`;

--Su AS galime pervadinti stulpelių pavadinimus
SELECT CONCAT(UPPER(`vardas`), ' ', LOWER(`pavarde`)) AS 'vardas_pavarde' FROM `autoriai`



SELECT `pavadinimas`, `kaina` FROM `knygos`;


--Suapvalinta kaina
SELECT `pavadinimas`, ROUND(`kaina`, 1) AS suapvalinta_kaina FROM `knygos`;


SELECT `pavadinimas`, ROUND(`kaina`, 1) AS suapvalinta_kaina FROM `knygos`;

SELECT `pavadinimas`, ROUND(`kaina`) AS 'suapvalinta_kaina' FROM `knygos`



SELECT `pavadinimas`, ROUND(`kaina`) AS `suapvalinta_kaina`, ROUND (5.548) FROM `knygos`;

SELECT `pavadinimas`, ROUND(`kaina`) AS `suapvalinta_kaina`, ROUND (5.548,2) FROM `knygos`;

SELECT `pavadinimas`, ROUND(`kaina`, -1) AS suapvalinta_kaina FROM `knygos`;


SELECT * FROM `knygos` WHERE `kaina` > 15;

SELECT * FROM `knygos` WHERE `kaina` < 15;

SELECT * FROM `knygos` WHERE `kaina` <= 15;

SELECT * FROM `knygos` WHERE `id` <= 4;


-- Išfiltruoja autorius Kurių vardas Jonas
SELECT * FROM `autoriai` WHERE `vardas` = 'Jonas'

--- Kelios salygos (Loginis operatorius AND). Išfiltruoja norimą knyga pagal kaina ir puslapius
SELECT * FROM `knygos` WHERE `kaina` < 15 AND `puslapiu_skaicius` > 400;

-- Filtravimas pagal norimas kainas
SELECT * FROM `knygos` WHERE `kaina` > 13 OR `kaina` < 10;

--Knyga gali neatitikti pagal kainą, bet atitikti pagal puslapių skaičius (OR- arba)

SELECT * FROM `knygos` WHERE `kaina` > 19 OR `kaina` < 10 OR `puslapiu_skaicius` > 700;


SELECT * FROM `knygos` WHERE `kaina` > 15 AND `kaina` < 20 OR `puslapiu_skaicius` > 300 AND `puslapiu_skaicius` < 600;

--Galima užrašyti gražiau grupuojant, kad aiškiau matytume užklausą

SELECT * FROM `knygos` WHERE (`kaina` > 15 AND `kaina` < 20) OR (`puslapiu_skaicius` > 300 AND `puslapiu_skaicius` < 600);


-- Neiginys

SELECT * FROM `knygos` WHERE `kaina`!= 7.80;
SELECT * FROM `knygos` WHERE NOT `kaina`!= 7.80;

SELECT * FROM `knygos` WHERE `kaina` IS NULL;
SELECT * FROM `knygos` WHERE `kaina` IS NOT NULL;

-- Su konkreciom kainom
SELECT * FROM `knygos` WHERE `kaina` IN (7.80, 12.50, 50.99);



SELECT * FROM `knygos` WHERE `id` IN ( SELECT `id` FROM `autoriai` WHERE `pavarde` = 'tolkien' OR `pavarde` = 'martin' )

-- Randa pagal raide

SELECT * FROM `autoriai` WHERE `pavarde` LIKE '%B%';

--  Iesko zodzio dviejuose stulpeliuose

SELECT * FROM `autoriai` WHERE `pavarde` LIKE '%jon%' OR `vardas`'%jon%';