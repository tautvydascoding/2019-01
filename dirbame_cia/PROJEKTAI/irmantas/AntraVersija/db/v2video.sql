-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 17, 2019 at 08:38 PM
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
-- Database: `v2video`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `vardas` varchar(30) NOT NULL,
  `pavarde` varchar(30) NOT NULL,
  `foto` tinytext NOT NULL,
  `aprasymas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `vardas`, `pavarde`, `foto`, `aprasymas`) VALUES
(1, 'Edvinas', 'Dainauskas', 'Edvinas-apie-mus.jpg', 'Kad būtum ne tik išgirstas, bet ir prisimintas – vien žodžio nebepakanka. Tinkamai sudėliota mažų detalių visuma vos per keletą sekundžių gali papasakoti pačias įdomiausias istorijas ir atspindėti jautriausias akimirkas. Mūsų komandos tikslas – padėti šias akimirkas atrasti, pagauti ir suguldyti į vaizdo turinį. Nuo reprezentacinio įmonės video iki vestuvių ar jubiliejaus – mūsų patyrusi ir iš rankų filmavimo kamerų nepaleidžianti komanda padės įgyvendinti visas jūsų idėjas!'),
(4, 'Edvinas', 'Dainauskas', 'Edvinas-apie-mus.jpg', 'Kad būtum ne tik išgirstas, bet ir prisimintas – vien žodžio nebepakanka. Tinkamai sudėliota mažų detalių visuma vos per keletą sekundžių gali papasakoti pačias įdomiausias istorijas ir atspindėti jau'),
(5, 'Edvinas', 'Dainauskas', 'Edvinas-apie-mus.jpg', 'Kad būtum ne tik išgirstas, bet ir prisimintas – vien žodžio nebepakanka. Tinkamai sudė'),
(6, 'Irmantinis', 'Irmantekas', 'fonas.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` smallint(6) NOT NULL,
  `vardas` varchar(30) NOT NULL,
  `pavarde` varchar(30) NOT NULL,
  `tel` varchar(30) NOT NULL,
  `email` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `vardas`, `pavarde`, `tel`, `email`) VALUES
(1, 'Edvinas', 'Dainauskas', '+370656565108', 'irmantoj@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` smallint(6) NOT NULL,
  `vardas` varchar(30) NOT NULL,
  `email` varchar(150) NOT NULL,
  `tel` varchar(30) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `vardas`, `email`, `tel`, `message`) VALUES
(1, 'Dainius', 'Dainauskas@gmail.com', '+37084545', 'sjhsigsjnbjsn uhfuishiushvd uhgusdiufhufhius iuhfiuhisdhiufi usdfiuhiushsf ushfihiushi uifhsifhsfhsdif hifhsifiuhiuh hsufhsdfhsdifhs huidshfshiush hsdifhsdfhsdfhs hsfuihsifsiuhsifhs iudsfiusfdioagsigoif uisfisguisgsoui '),
(2, 'Dalius', 'kazkas@gmail.lt', '+370546652', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(3, 'Dalius', 'kazkas@gmail.lt', '+370546652', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(4, 'vcxv', 'irmantoj@gmail.com', '6545156', 'dlsfhuihgfjg uhguig'),
(5, 'vcxv', 'irmantoj@gmail.com', '6545156', 'dlsfhuihgfjg uhguig'),
(6, 'dsfds', 'dfsdf', 'sfsdf', 'dsfsdfsdfsdf'),
(7, 'vcxv', 'irmantoj@gmail.com', 'fdgfdg', 'zvfdzgsfgfsd'),
(8, 'alio', 'irmantoj@gmail.com', 'sfsdfsdf', 'sdfsdgdfhd;ljgs;jgsdkgosgsg'),
(9, 'dsfsd', 'fsdfd', 'fsdf', 'dsfsdfsdf'),
(10, 'cvxcv', 'xcvxcv', 'xcvxv', 'xvxcvxcvx'),
(11, 'fsdfd', 'dsfsdf', 'sdfsdf', 'sdfsdfsdf'),
(12, 'alio', 'irmantoj@gmail.com', '', ''),
(13, 'alio', 'irmantoj@gmail.com', '860781816', 'noreciau pasiteirauti del paslaugu kainos? noreciau video 2-3min reprezantacinio.'),
(14, 'irmantas', 'irmantoj@gmail.com', '39416848', 'ddddddddddd dbd hhhhhhhhhhhhhh'),
(15, 'alio', 'alio@gmail.com', 'dfgdfg', 'dksfndjonfaaaaaaaaa'),
(16, 'alio', 'irmantoj@gmail.com', 'ertret', 'ssssssssss'),
(17, '', '', '', ''),
(18, '', '', '', ''),
(19, '', '', '', ''),
(20, '', '', '', ''),
(21, 'Irmantas', 'irmantoj@gmail.com', '+37060781816', 'asd'),
(22, 'Irmantas', 'irmantoj@gmail.com', '+37060781816', 'asd'),
(23, 'Irmantas', 'irmantoj@gmail.com', '+37060781816', 'asd'),
(24, 'a', 'd', 'a', 'a'),
(25, 'a', 'b', 'c', 'd'),
(26, 'a', 'b', 'c', 'a'),
(27, 'a', 'a', 'a', 'a'),
(28, 'Irmantas', 'irmantoj@gmail.com', '+37060781816', 'asd'),
(29, 'Irmantas', 'irmantoj@gmail.com', '+37060781816', 'aaa'),
(30, '', '', '', ''),
(31, '', '', '', ''),
(32, '', '', '', ''),
(33, '', '', '', ''),
(34, 'Irmantas', 'irmantoj@gmail.com', '+37060781816', 'ssssssssss'),
(35, 'Irmantas', 'irmantoj@gmail.com', '+37060781816', 'ssssssssss'),
(36, 'Irmantas', 'irmantoj@gmail.com', '+37060781816', 'ssssssssss'),
(37, 'Irmantas', 'irmantoj@gmail.com', '+37060781816', 'ssssssssss'),
(38, 'Irmantas', 'irmantoj@gmail.com', '+37060781816', 'ssssssssssss'),
(39, 'Irmantas', 'irmantoj@gmail.com', '+37060781816', 'ssssssssssss'),
(40, 'Irmantas', 'irmantoj@gmail.com', '+37060781816', 'ssssssssssss'),
(41, 'Irmantas', 'irmantoj@gmail.com', '+37060781816', 'ssssssssssss'),
(42, 'Irmantas', 'irmantoj@gmail.com', '+37060781816', 'ssssssssssss'),
(43, 'Irmantas', 'irmantoj@gmail.com', '+37060781816', 'ssssssssssss'),
(44, '', '', '', ''),
(45, '', '', '', ''),
(46, '', '', '', ''),
(47, '', '', '', ''),
(48, '', '', '', ''),
(49, '', '', '', ''),
(50, '', '', '', ''),
(51, '', '', '', ''),
(52, '', '', '', ''),
(53, 'Irmantas', 'irmantoj@gmail.com', '+37060781816', 'aaaaaaaaaaaaa aaaaaaaaaaaaaaaaaa aaaaaa'),
(54, 'Irmantas', 'irmantoj@gmail.com', '+37060781816', 'xxxxxxxxxxxxx'),
(55, '', '', '', ''),
(56, '', '', '', ''),
(57, 'Irmantas', 'irmantoj@gmail.com', '+37060781816', 'textas'),
(58, 'Irmantas', 'irmantoj@gmail.com', '+37060781816', 'testas 2'),
(59, 'Irmantas', 'irmantoj@gmail.com', '+37060781816', ';;;'),
(60, 'Irmantas', 'irmantoj@gmail.com', '+37060781816', 'jh'),
(61, 'Irmantas', 'irmantoj@gmail.com', '+37060781816', 'fgjh'),
(62, 'Irmantas', 'irmantoj@gmail.com', '+37060781816', 'fsfxfxf'),
(63, 'Irmantas', 'irmantoj@gmail.com', '+37060781816', 'ghfhfg'),
(64, 'Irmantas', 'irmantoj@gmail.com', '+37060781816', 'ghjghj'),
(65, 'Irmantas', 'irmantoj@gmail.com', '+37060781816', 'qaaaa'),
(66, '', '', '', 'vff'),
(67, 'Irmantas', 'irmantoj@gmail.com', '+37060781816', 'cvcxvcxv xcvcx xv'),
(68, '', '', '', 'cvcxv'),
(69, '', '', '', 'cvcxv'),
(70, '', '', '', 'df'),
(71, '', '', 'a', 'fds'),
(72, 'fsd', 'fsdf', 'sdfsd', 'dsfsdfs'),
(73, '', '', '', 'dfsd'),
(74, 'g', 'fg', 'gfh', 'gfhfgh'),
(75, '', 'dd', '', ''),
(76, '', '', '', ''),
(77, 'Irmantas', 'irmantoj@gmail.com', '+37060781816', 'fggggggggggggggggg'),
(78, 'Irmantas', 'irmantoj@gmail.com', '+37060781816', 'aaaaaaaa'),
(79, '', '', '', ''),
(80, 'Irmantas', 'irmantoj@gmail.com', '+37060781816', 'dddddddddddd'),
(81, 'Irmantas', '', '+37060781816', 'ffffffff'),
(82, '', '', '', ''),
(83, '', '', '', ''),
(84, '', '', '', ''),
(85, '', '', '', ''),
(86, '', '', '', ''),
(87, '', '', '', ''),
(88, '', '', '', ''),
(89, '', '', '', ''),
(90, '', '', '', ''),
(91, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `paslaugos`
--

CREATE TABLE `paslaugos` (
  `id` int(11) NOT NULL,
  `pav` varchar(60) NOT NULL,
  `aprasymas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `paslaugos`
--

INSERT INTO `paslaugos` (`id`, `pav`, `aprasymas`) VALUES
(1, 'Renginių filmavimas', 'Renginių filmavimas. Kiekvieno renginių organizatoriaus tikslas – laimingi jo svečiai ir dalyviai. Kad sunkaus darbo rezultatas ir džiaugsmas žmonių akyse neliktų užmarštyje, siūlome filmavimo paslaugas. Turime pakankamai didelę komandą ir visą reikiamą įrangą, kad jūsų sukurtą atmosferą perteiktume iš įvairių kampų ir sujungtume į vieną nuostabų pasakojimą. Tad nesirūpinkite renginio akimirkų įamžinimu ir jį patikėkite profesionalams.'),
(2, 'Reklaminių klipų filmavimas', 'Reklaminių klipų filmavimas. Kokybiškas reklaminis klipas ar reprezentacinis filmukas gali padėti pasiekti tikslinę auditoriją, supažindinti su nauju produktu, paslauga ar organizacijos veikla bei didinti pasitikėjimą prekės ženklu. Jei galvoje sukasi galybė minčių ir scenarijų bei ieškote stiprios komandos, kuri jas paverstų kūrybišku video sprendimu – susitikime ir pasidalinkime savo mintimis.'),
(11, 'Filmavimas iš oro', 'Filmavimas iš oro. Yra istorijų, kurioms papasakoti reikalingas platesnis skrydis. Šiam skrydžiui pasitelkiame dronus, kurie gali užfiksuoti panoraminius vaizdus, NT objektus, renginių ir švenčių akimirkas ar reklamoms reikiamą medžiagą. Turime visus leidimus filmavimui iš oro miesto teritorijose ir arti pastatų, tad viskas, ko mums reikia – jūsų vizija ir tikslios koordinatės, o filmuko gamyba nuo A iki Z pasirūpinsime mes.'),
(12, 'Vestuvių filmavimas', 'Vestuvių filmavimas. Lengvai ant pečių krentantis nuometas, laimės ašaromis sudrėkusios jaunojo akys, nedrąsiai ant rankos užmaunamas auksinis žiedas, svečių emocijos, pirmasis šokis… Kiek daug jaudinančių akimirkų gali sutilpti į vieną dieną, vieną šventę, kuri tampa nesibaigiančia gyvenimo švente. O kad jos niekada nepamirštumėte, viską užfiksuosime ir paversime vestuvių filmu – tuo, kuris pasakos pačią gražiausią – jūsų meilės istoriją.'),
(13, 'Asmeninių švenčių filmavimas', 'Asmeninių švenčių filmavimas. Kuriant šventę svarbi kiekviena detalė: nuo temos ir papuošimų iki muzikantų ar svečių susodinimo. Tačiau pats gražiausias atributas – prisiminimai, kuriuos nešiojamės dar ilgai. Kad jie džiugintų ne tik jus, bet ir visus svečius, siūlome filmavimo paslaugas. Įamžinsime jūsų gimtadienius, krikštynas, jubiliejus, vestuvių metines ir kitas asmenines šventes bei sukursime jų tematiką ir nuotaiką atitinkantį filmuką.'),
(14, 'Vaizdo klipų filmavimas', 'Vaizdo klipų filmavimas. Ilgametė patirtis ir šimtai įgyvendintų projektų padėjo įvaldyti garso bei vaizdo santykį kuriant vaizdo klipus. Jei ieškote geriausio sprendimo savo kūriniui, padėsime išvystyti scenarijų, surasti tinkamiausią aplinką ir pasirūpinsime visu vaizdo medžiagos filmavimo bei montavimo procesu.');

-- --------------------------------------------------------

--
-- Table structure for table `pradinis`
--

CREATE TABLE `pradinis` (
  `id` int(11) NOT NULL,
  `title` tinytext NOT NULL,
  `subtitle` tinytext NOT NULL,
  `textas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pradinis`
--

INSERT INTO `pradinis` (`id`, `title`, `subtitle`, `textas`) VALUES
(1, 'Antra Versija', 'Video filmavimo ir montavimo paslaugos', 'Kad būtum ne tik išgirstas, bet ir prisimintas – vien žodžio nebepakanka. Tinkamai sudėliota mažų detalių visuma vos per keletą sekundžių gali papasakoti pačias įdomiausias istorijas ir atspindėti jautriausias akimirkas. Mūsų komandos tikslas – padėti šias akimirkas atrasti, pagauti ir suguldyti į vaizdo turinį. Nuo reprezentacinio įmonės video iki vestuvių ar jubiliejaus – mūsų patyrusi ir iš rankų filmavimo kamerų nepaleidžianti komanda padės įgyvendinti visas jūsų idėjas!'),
(2, 'Antra versija', 'v2 versija', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,'),
(3, 'sgdsdgdsgdsg', 'dsgdsgsdgdsgdsg', 'dsivhobvjbvhsbvhbvsbdjbvhsdbjhbvjhbvhjbvjhbvj');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `title`, `link`) VALUES
(1, 'Jazz Do It - Tarp Debesų (live at studio) v2', 'https://www.youtube.com/embed/tgcTi8FK9kc'),
(2, 'Motocross club Devyniukė LTU [v2video]', 'https://www.youtube.com/embed/yPAbDbm1O4s'),
(3, 'Lithuanian Bike Stunter 2018', 'https://www.youtube.com/embed/9Y3zD4OsEGA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paslaugos`
--
ALTER TABLE `paslaugos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pradinis`
--
ALTER TABLE `pradinis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `paslaugos`
--
ALTER TABLE `paslaugos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `pradinis`
--
ALTER TABLE `pradinis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
