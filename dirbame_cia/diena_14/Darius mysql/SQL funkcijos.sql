-- komentaras, duomenu bazes valdomos SQL kalba
select * from Customers; --visi customers stulpeliai su *

SELECT ContactName, Country 
FROM Customers; -- ContactName, Country eilutes, kuriu norim pamatyti is customer lenteles

SELECT Customers.City, Categories.Description 
FROM Customers, Categories -- is dvieju lenteliu paimti info

SELECT DISTINCT --grazina skirtingas reiksmes

SELECT column1, column2, ...
FROM table_name
WHERE condition; -- su salyga where ka konkreciai nori atrinkkti

SELECT column1, column2, ...
FROM table_name
WHERE condition1 AND condition2 AND condition3 ...;

SELECT column1, column2, ...
FROM table_name
WHERE condition1 OR condition2 OR condition3 ...;

SELECT column1, column2, ...
FROM table_name
WHERE NOT condition;

-- nelygu <> arba !=
--BETWEEN pvz nuo 100 iki 200
-----------------------------------------------
SELECT column_name(s)
FROM table_name
WHERE column_name IN (value1, value2, ...); -- IN stulpelyje isvardinti ko ieskom 


----ARBA---

SELECT column_name(s)
FROM table_name
WHERE column_name IN (SELECT STATEMENT);
----------------------------------------------
SELECT column1, column2, ...
FROM table_name
ORDER BY column1, column2, ... ASC|DESC; -- surikiuoja nuo a aba nuo z

INSERT INTO table_name
VALUES (value1, value2, value3, ...); -- duomenu ivedimas

INSERT INTO table_name (column1, column2, column3, ...)
VALUES (value1, value2, value3, ...); -- ne pilnu duomenu ivedimas

UPDATE table_name
SET column1 = value1, column2 = value2, ...
WHERE condition; -- duomenu atnaujinimas, jeigu nenurodo where pakeicia viska

DELETE FROM Customers WHERE CustomerName='Alfreds Futterkiste'; -- istrinimas

SELECT * FROM Customers
LIMIT 3; -- parodys tik 3

SELECT * FROM Customers
WHERE CustomerName LIKE 'a%'; -- surasti visus zodzius is a raides

SELECT * FROM Customers
WHERE CustomerName LIKE '_r%'; -- pradzioje simbolis bet koks (_), o sekanti bus r
