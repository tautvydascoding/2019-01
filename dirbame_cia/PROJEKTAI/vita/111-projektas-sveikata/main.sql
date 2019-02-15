-- komentaras--
-- MYSQL serveris saugo duomenu bazas ir jame jos veikia--
-- duomenu bazes valdomos SQL kalba--
-- tratata - spaltazodis
-- username - pas kai kuriuos negali tureti skaiciu!!!
--CREATE USER 'vitasido'@'localhost' IDENTIFIED BY 'mokausisql';
--ALTER USER 'vitasido'@'localhost' PASSWORD EXPIRE NEVER;
--GRANT ALL PRIVILEGES ON * . * TO 'vitasido'@'localhost' WITH GRANT OPTION;

--REATE DATABASE blogas7;

--CREATE TABLE straipsniai(
        --id  INT(6)   AUTO_INCREMENT    PRIMARY KEY,
        --antraste  TEXT(30),
        --data  VARCHAR(30)
--);

INSERT INTO prenumeratoriai VALUES (NULL, 'Ausra', 'ausra@lab.lt');
INSERT INTO prenumeratoriai VALUES (NULL, 'Greta', 'greta@lab.lt');
INSERT INTO prenumeratoriai VALUES (NULL, 'Karolina', 'karolina@lab.lt');
INSERT INTO prenumeratoriai VALUES (NULL, 'Migle', 'migle@lab.lt');
INSERT INTO prenumeratoriai VALUES (NULL, 'Vika', 'vika@lab.lt');
SELECT * FROM  prenumeratoriai;

CREATE TABLE prenumeratoriai (

);

CREATE TABLE straipsniai (

);

INSERT INTO straipsniai VALUES (NULL, 'Imbiero, citrinos ir medaus gėrimas nuo peršalimo', DATE '2019-02-01', 'Imbiero, citrinos ir medaus masės paruošimas:
Nuskutame imbiero šaknį ir nusiplauname citriną. Susimalame citriną ir imbiero šaknį mėsmale arba susitarkuojame (kaip kam skaniau ir patogiau).
Į gautą masę įmaišome medų.
Šis imbiero, citrinos ir medaus mišinys puikiai gydo peršalimą ir stiprina imunitetą. Kai kam gali pasirodyti neskanu, tačiau sveika.
Galima gerti kaip gėrimą, į šiltą virintą vandenį įsidėjus šaukštelį ar du šios masės, arba ragauti šį mišinį gukršnojant arbatą.');

INSERT INTO straipsniai VALUES (NULL, 'Važiavimas dviračiu: kokia nauda sveikatai?', DATE '2019-02-02',  'Ramaus pasivažinėjimo dviračiu valanda leidžia sudeginti apie 500 kalorijų. Ir tai be jokių didelių pastangų! Reguliarus dviračio pedalų minimas leis pagerinti savijautą, numesti porą kilogramų ir pailsėti. Tai taip pat gali būti patraukli laisvalaikio leidimo su šeima ir draugais forma.
Važinėjimas dviračiu – tai ne tik vertingas indėlis į ekologiją, bet ir neginčijamos naudingumo sveikatai tiesos. Žinoma, pirmiausia pagalvojote apie sveiką širdies ritmą, puikią plaučių veiklą ir nuostabią sportišką figūrą. Tačiau specialistai tvirtai tiki, kad tai tik kalno, kuriame jūsų laukia laimės hormonai, puiki savijauta, geresnė atmintis ir dar daugiau, papėdė.
');
INSERT INTO straipsniai VALUES (NULL, 'Vaikų sveikata priklauso nuo tėvų gyvenimo būdo', DATE '2019-02-03', 'Per pirmuosius kelerius vaiko gyvenimo metus susiformuoja pagrindiniai pastovūs mitybos, higienos ir fizinio aktyvumo įgūdžiai, nuo kurių didžiąja dalimi priklauso tolimesnė jo sveikata. Pastebima, kad sveikesnių tėvų vaikai rečiau serga ir turi mažiau sveikatos problemų suaugę, todėl sveikatos priežiūros specialistai neabejoja, kad teisingas pavyzdys – labai svarbus. Visgi, pasak specialistų, tėvai dažnai stokoja valios – pasiduoda vaikų meilikavimams ir leidžia jiems valgyti bulvių traškučius, saldumynus, gerti saldžius gazuotus gėrimus. Blogiausia, kad toks maistas neretai tampa ne tik užkandžiu, bet ir pakeičia pietus ar vakarienę.');
INSERT INTO straipsniai VALUES (NULL, 'Apie mėgstamiausių vasaros uogų naudą', DATE '2019-02-04','Specialistai teigia, kad braškėse yra ne tik daug vitamino C, bet ir kalio, mangano bei skaidulinių medžiagų. Mitybos poveikio sveikatai tyrėjų teigimu, braškės suteikia gyvybingumo ir žvalumo, o suvalgius daugiau nei 150 g šių uogų, organizmas gauna visos dienos vitamino C normą. Vis tik, anot jų, braškė taip pat neretai yra laikoma ir alergijų karaliene. Mitybos poveikio sveikatai tyrėjai sako, kad gana sunku išskirti, kurios uogos savo naudingumu yra sveikesnės, nes vienose cukraus yra mažiau, kitose daugiau.');
INSERT INTO straipsniai VALUES (NULL, '5 moterų sveikatai ir grožiui svarbūs prieskoniai', DATE '2019-02-05', 'Cinamonas – šildantis prieskonis. Teigiama, kad kasdienis jo vartojimas gali sumažinti cholesterolio ir reguliuoti cukraus kiekį kraujyje. Todėl cinamonas labai tinka tiems, kurie serga diabetu ir nori atsikratyti nepageidaujamų kilogramų. Moterims cinamonas dar naudingas tuo, kad gali malšinti skausmus menstruacijų metu.
Gvazdikėliai gerina virškinimą, stiprina atmintį, slopina uždegimą, valo kepenis. Dar žiloje senovėje jie buvo pasitelkiami danties skausmui malšinti. Iš šių kvapių prieskonių gaminami eteriniai aliejai naikina bakterijas, užkerta kelią virusų dauginimuisi, atpalaiduoja kvėpavimo takus.');
INSERT INTO straipsniai VALUES (NULL, 'Kraujo tyrimai: ką reiškia pakitę rodikliai?',  DATE '2019-02-07', 'Kiekybinio kraujo ląstelių tyrimo metu nustatomas absoliutus ir santykinis ląstelių kiekis kraujo tūryje. Vertinamas rodiklių nuokrypis nuo normalių verčių, jų tarpusavio santykio pokyčiai. BKT suteikia informaciją apie visus tris kraujodaros kamienus: raudonąsias kraujo ląsteles (eritrocitus), baltąsias kraujo ląsteles (leukocitus) ir krešėjimo plokšteles (trombocitus). Sumažėję raudonųjų kraujo ląstelių rodiklių pokyčiai byloja apie mažakraujystę, o jų padidėjimas gali rodyti skysčių trūkumą arba pernelyg didelį kaulų čiulpų aktyvumą, sukeliantį eritrocitozę. Maži baltųjų kraujo ląstelių rodikliai rodo organizmo atsparumo sutrikimus, kuriuos dažnai sukelia kaulų čiulpų nepakankamumas, o padidėję rodikliai būdingi įvairiems reakciniams pokyčiams (fizinis sužeidimas, infekcija) arba kraujo vėžiui.');

SELECT * FROM  straipsniai;

CREATE TABLE komentarai (

        );

INSERT INTO komentarai VALUES (NULL, 'Laura', DATE '2019-02-08', 'Idomus straipsnis', 1);
INSERT INTO komentarai VALUES (NULL, 'Vilija', DATE '2019-02-09', 'Pritariu', 2);
INSERT INTO komentarai VALUES (NULL, 'Gitana', DATE '2019-02-08', 'Reikes pasidometi daugiau', 3);
INSERT INTO komentarai VALUES (NULL, 'Eva', DATE '2019-02-10', 'Man tai patinka', 2);
INSERT INTO komentarai VALUES (NULL, 'Inga', DATE '2019-02-11', 'Geras tinklaraastis', 3);
INSERT INTO komentarai VALUES (NULL, 'Gintare', DATE '2019-02-12', 'Butinai uzsiprenumeruosiu bloga', 2);
SELECT * FROM  komentarai;

        INSERT INTO foto VALUES (NULL, '14.jpg', 1);
        INSERT INTO foto VALUES (NULL, '15.jpg', 2);
        INSERT INTO foto VALUES (NULL, '16.jpg', 3);
        INSERT INTO foto VALUES (NULL, '17.jpg', 4);
        INSERT INTO foto VALUES (NULL, '18.jpg', 5);
        INSERT INTO foto VALUES (NULL, '19.jpg', 6);
        SELECT * FROM  foto;



        UPDATE doctors
        SET lname = "Litaite"
        WHERE id = 4
        LIMIT 1;

        UPDATE patients
        SET lname = "Karlito"
        WHERE id = 4   AND  name = "Tom"
        LIMIT 1;

        SELECT *
        FROM doctors
        ORDER BY lname;

        SELECT *
        FROM doctors
        WHERE id < 3;

        SELECT *
        FROM doctors
        WHERE lname Like "L%";

        -- UZDUOTIS  1.1  (SELECT) : ISVESTI 4 IR 5 gydytoja
        SELECT *
        FROM doctors
        WHERE id > 3;

        -- UZDUOTIS  1.2  (SELECT) : ISVESTI visus gydytojus, kuriu vardas: 'Tim' ARBA pavarde 'Leo'

        SELECT *
        FROM doctors
        WHERE name = 'Tim'   OR  lname = "Leo";


        -- UZDUOTIS  1.3  (SELECT): isvesti visus gydytojus, kuriu 'id' mazesnis uz 4
        SELECT *
        FROM doctors
        WHERE id < 4;


        -- UZDUOTIS  1.4  (SELECT): isvesti visus gydytojus, bet ne 'Ona'

        SELECT *
        FROM doctors
        WHERE NOT name = "Ona";
        -- arba WHERE name != "Ona";


        -- UZDUOTIS  1.5  (SELECT): isvesti visus paciantus, surikiuotus pagal varda
        SELECT *
        FROM patients
        ORDER BY name;


        -- // UZDUOTIS 2: pervadinti gydytoja 'Lita' i 'Litas'

        UPDATE doctors
        SET name = "Litas"
        WHERE id = 4
        LIMIT 1;

        -- UZDUOTIS UPDATE- pakeisti Koris pavarde i Makalas (suradus pagal id)

        UPDATE doctors
        SET lname = "Makalas"
        WHERE id = 5
        LIMIT 1;

        -- UZDUOTIS UPDATE- pakeisti Koris pavarde i Paulaitis (suradus pagal id ir pavarde)

        UPDATE doctors
        SET lname = "Paulaitis"
        WHERE id = 5 AND lname = "Makalas";
        LIMIT 1;

        -- UZDUOTIS (select LIKE)- paimti visus gydytojus, kuriu pavarde parsideda is "L" raides

        SELECT *
        FROM doctors
        WHERE lname Like "L%";
