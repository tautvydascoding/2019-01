-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 17, 2019 at 09:43 PM
-- Server version: 5.7.24-log
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogaslinai`
--

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id` tinyint(4) NOT NULL,
  `fotopav` tinytext NOT NULL,
  `idstraipsnio` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `foto`
--

INSERT INTO `foto` (`id`, `fotopav`, `idstraipsnio`) VALUES
(1, '14.jpg', 1),
(2, '15.jpg', 2),
(3, '16.jpg', 3),
(4, '17.jpg', 4),
(5, '18.jpg', 5),
(6, '19.jpg', 6),
(7, '20.jpg', 7);

-- --------------------------------------------------------

--
-- Table structure for table `komentarai`
--

CREATE TABLE `komentarai` (
  `id` mediumint(9) NOT NULL,
  `autorius` varchar(30) NOT NULL,
  `email` tinytext NOT NULL,
  `komentaras` text NOT NULL,
  `straipsnioid` smallint(6) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `prenumeratoriai`
--

CREATE TABLE `prenumeratoriai` (
  `id` mediumint(9) NOT NULL,
  `vardas` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `prenumeratoriai`
--

INSERT INTO `prenumeratoriai` (`id`, `vardas`, `email`, `data`) VALUES
(1, 'Ausra', 'ausra@lab.lt', '2019-02-01'),
(2, 'Greta', 'greta@lab.lt', '2019-02-02'),
(3, 'Karolina', 'karolina@lab.lt', '2019-02-03'),
(4, 'Migle', 'migle@lab.lt', '2019-02-04'),
(5, 'Vika', 'vika@lab.lt', '2019-02-05'),
(6, 'VARDAS', 'SDVC@SD.LT', '2019-02-15'),
(7, 'labas', 'labutis@labadiena.lt', '2019-02-15'),
(8, 'labas22', 'labutis@labadiena.lt', '2019-02-15'),
(9, 'labas224', 'labutis@labadiena.lt', '2019-02-15'),
(10, 'labas224', 'labutis@labadiena.lt', '2019-02-15'),
(11, 'labas224', 'labutis@labadiena.lt', '2019-02-15'),
(12, 'toma', 'toma@toma.lt', '2019-02-15');

-- --------------------------------------------------------

--
-- Table structure for table `straipsniai`
--

CREATE TABLE `straipsniai` (
  `id` smallint(6) NOT NULL,
  `antraste` text NOT NULL,
  `data` datetime NOT NULL,
  `straipsnis` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `straipsniai`
--

INSERT INTO `straipsniai` (`id`, `antraste`, `data`, `straipsnis`) VALUES
(1, 'Imbiero, citrinos ir medaus gėrimas nuo peršalimo', '2019-02-01 14:34:04', 'Imbiero, citrinos ir medaus masės paruošimas:\nNuskutame imbiero šaknį ir nusiplauname citriną. Susimalame citriną ir imbiero šaknį mėsmale arba susitarkuojame (kaip kam skaniau ir patogiau).\nĮ gautą masę įmaišome medų.\nŠis imbiero, citrinos ir medaus mišinys puikiai gydo peršalimą ir stiprina imunitetą. Kai kam gali pasirodyti neskanu, tačiau sveika.\nGalima gerti kaip gėrimą, į šiltą virintą vandenį įsidėjus šaukštelį ar du šios masės, arba ragauti šį mišinį gukršnojant arbatą.'),
(2, 'Važiavimas dviračiu: kokia nauda sveikatai?', '2019-02-02 18:15:47', 'Ramaus pasivažinėjimo dviračiu valanda leidžia sudeginti apie 500 kalorijų. Ir tai be jokių didelių pastangų! Reguliarus dviračio pedalų minimas leis pagerinti savijautą, numesti porą kilogramų ir pailsėti. Tai taip pat gali būti patraukli laisvalaikio leidimo su šeima ir draugais forma.\nVažinėjimas dviračiu - tai ne tik vertingas indėlis į ekologiją, bet ir neginčijamos naudingumo sveikatai tiesos. Žinoma, pirmiausia pagalvojote apie sveiką širdies ritmą, puikią plaučių veiklą ir nuostabią sportišką figūrą. Tačiau specialistai tvirtai tiki, kad tai tik kalno, kuriame jūsų laukia laimės hormonai, puiki savijauta, geresnė atmintis ir dar daugiau, papėdė.\n'),
(3, 'Vaikų sveikata priklauso nuo tėvų gyvenimo būdo', '2019-02-03 09:18:24', 'Per pirmuosius kelerius vaiko gyvenimo metus susiformuoja pagrindiniai pastovūs mitybos, higienos ir fizinio aktyvumo įgūdžiai, nuo kurių didžiąja dalimi priklauso tolimesnė jo sveikata. Pastebima, kad sveikesnių tėvų vaikai rečiau serga ir turi mažiau sveikatos problemų suaugę, todėl sveikatos priežiūros specialistai neabejoja, kad teisingas pavyzdys - labai svarbus. Visgi, pasak specialistų, tėvai dažnai stokoja valios - pasiduoda vaikų meilikavimams ir leidžia jiems valgyti bulvių traškučius, saldumynus, gerti saldžius gazuotus gėrimus. Blogiausia, kad toks maistas neretai tampa ne tik užkandžiu, bet ir pakeičia pietus ar vakarienę.'),
(4, 'Apie mėgstamiausių vasaros uogų naudą', '2019-02-04 10:12:39', 'Specialistai teigia, kad braškėse yra ne tik daug vitamino C, bet ir kalio, mangano bei skaidulinių medžiagų. Mitybos poveikio sveikatai tyrėjų teigimu, braškės suteikia gyvybingumo ir žvalumo, o suvalgius daugiau nei 150 g šių uogų, organizmas gauna visos dienos vitamino C normą. Vis tik, anot jų, braškė taip pat neretai yra laikoma ir alergijų karaliene. Mitybos poveikio sveikatai tyrėjai sako, kad gana sunku išskirti, kurios uogos savo naudingumu yra sveikesnės, nes vienose cukraus yra mažiau, kitose daugiau.'),
(5, '5 moterų sveikatai ir grožiui svarbūs prieskoniai', '2019-02-05 16:10:27', 'Cinamonas - šildantis prieskonis. Teigiama, kad kasdienis jo vartojimas gali sumažinti cholesterolio ir reguliuoti cukraus kiekį kraujyje. Todėl cinamonas labai tinka tiems, kurie serga diabetu ir nori atsikratyti nepageidaujamų kilogramų. Moterims cinamonas dar naudingas tuo, kad gali malšinti skausmus menstruacijų metu.\nGvazdikėliai gerina virškinimą, stiprina atmintį, slopina uždegimą, valo kepenis. Dar žiloje senovėje jie buvo pasitelkiami danties skausmui malšinti. Iš šių kvapių prieskonių gaminami eteriniai aliejai naikina bakterijas, užkerta kelią virusų dauginimuisi, atpalaiduoja kvėpavimo takus.'),
(6, 'Kraujo tyrimai: ką reiškia pakitę rodikliai?', '2019-02-07 11:53:13', 'Kiekybinio kraujo ląstelių tyrimo metu nustatomas absoliutus ir santykinis ląstelių kiekis kraujo tūryje. Vertinamas rodiklių nuokrypis nuo normalių verčių, jų tarpusavio santykio pokyčiai. BKT suteikia informaciją apie visus tris kraujodaros kamienus: raudonąsias kraujo ląsteles (eritrocitus), baltąsias kraujo ląsteles (leukocitus) ir krešėjimo plokšteles (trombocitus). Sumažėję raudonųjų kraujo ląstelių rodiklių pokyčiai byloja apie mažakraujystę, o jų padidėjimas gali rodyti skysčių trūkumą arba pernelyg didelį kaulų čiulpų aktyvumą, sukeliantį eritrocitozę. Maži baltųjų kraujo ląstelių rodikliai rodo organizmo atsparumo sutrikimus, kuriuos dažnai sukelia kaulų čiulpų nepakankamumas, o padidėję rodikliai būdingi įvairiems reakciniams pokyčiams (fizinis sužeidimas, infekcija) arba kraujo vėžiui.'),
(7, 'Vandens nauda žmogaus organizmui', '2019-02-16 11:28:07', 'Žmogui yra būtinas tam tikras mineralinių medžiagų kiekis, kurį jis privalo gauti su maistu ir gerdamas vandenį. Su geriamuoju vandeniu į žmogaus organizmą patenka nuo 1 iki 10 proc. reikalingo per parą mikroelementų kiekio. Nepakankamas mikroelementų kiekis arba jų perteklius vandenyje gali turėti įtakos įvairiems organizmo funkcijų pakitimams ir ligoms.\nLietuvoje nėra požeminio vandens, kuris mineralinių medžiagų turėtų mažiau kaip 50 mg/l, o geriamąjį vandenį tiekiančiose vandenvietėse nėra vandens, kuriame tų medžiagų būtų daugiau kaip 1500 mg/l. Todėl galima teigti, jog iš čiaupo bėgančio vandens žmogus gauna daug jam reikalingų mineralų. Pavyzdžiui, Panevėžio miesto vandenvietėje išgaunamame vandenyje yra apie 450 mg/l mineralinių medžiagų.\nVisi mikroelementai pasižymi dideliu biologiniu aktyvumu: jie užtikrina normalią fiziologinių reakcijų ir apykaitos procesų eigą, dalyvauja mineralinių medžiagų apykaitoje ir, kaip įvairių biocheminių reakcijų katalizatoriai, turi įtakos bendrai organizmo medžiagų apykaitai. Mikroelementai įeina į aktyvių biologinių junginių sudėtį: fermentų (Zn, Cu, Mo, Mn ir kt. ), vitaminų (Co), hormonų (J, Co), kvėpavimo fermentų (Fe, Cu). Remiantis šiuolaikiniais duomenimis, užtikrinti normalią organizmo gyvybinę veiklą reikia apie 30 mikroelementų, kurių dauguma yra metalai (Fe, Cu, Mg, Zn, Mn, Co, Mo ir kt.) ir tik keli metaloidai (J, Br, As, F, Se).\nNuo kalcio ir magnio druskų kiekio priklauso vandens kietumas. Bendras druskų kiekis geriamajame vandenyje neturi viršyti 1000 mg/l. Druskų koncentracija yra didesnė tik mineraliniame vandenyje.\nKietas vanduo sveikatai nekenksmingas. Gerdami kietesnį vandenį, žmonės mažiau serga širdies ligomis ir hipertonija, o vartodami minkštą vandenį - dažniau, taip pat neįrodyta, kad kietas vanduo sukelia akmenligę. Jungtinės Karalystės mokslininkai, atlikę vandens tyrimus 253 miestuose, nustatė, kad minkšto geriamojo vandens paplitimo regionuose mirties atvejų nuo širdies ligų yra 10-15 proc. daugiau nei kietą vandenį vartojančiuose regionuose. Atlikti tyrimai 100 didžiausių Amerikos miestų leidžia daryti prielaidą, kad gyventojai, vartojantys vidutiniškai mineralinių medžiagų turintį kietą vandenį (apytiksliai 300 mg/l), nuo vėžinių susirgimų miršta 10-25 proc. rečiau.');

-- --------------------------------------------------------

--
-- Table structure for table `uzklausimai`
--

CREATE TABLE `uzklausimai` (
  `id` mediumint(9) NOT NULL,
  `vardas` tinytext NOT NULL,
  `pavarde` tinytext NOT NULL,
  `email` tinytext NOT NULL,
  `uzklausimas` text NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentarai`
--
ALTER TABLE `komentarai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prenumeratoriai`
--
ALTER TABLE `prenumeratoriai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `straipsniai`
--
ALTER TABLE `straipsniai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uzklausimai`
--
ALTER TABLE `uzklausimai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `komentarai`
--
ALTER TABLE `komentarai`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prenumeratoriai`
--
ALTER TABLE `prenumeratoriai`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `straipsniai`
--
ALTER TABLE `straipsniai`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `uzklausimai`
--
ALTER TABLE `uzklausimai`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
