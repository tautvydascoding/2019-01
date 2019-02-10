-- komentaras--
-- MYSQL serveris saugo duomenu bazas ir jame jos veikia--
-- duomenu bazes valdomos SQL kalba--
-- tratata - spaltazodis
-- username - pas kai kuriuos negali tureti skaiciu!!!
CREATE USER 'vitasido'@'localhost' IDENTIFIED BY 'mokausisql';
ALTER USER 'vitasido'@'localhost' PASSWORD EXPIRE NEVER;
GRANT ALL PRIVILEGES ON * . * TO 'vitasido'@'localhost' WITH GRANT OPTION;
