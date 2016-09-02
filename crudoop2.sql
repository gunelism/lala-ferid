-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2016 at 07:54 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudoop2`
--

-- --------------------------------------------------------

--
-- Table structure for table `crudoop2`
--

CREATE TABLE `crudoop2` (
  `id` int(10) NOT NULL,
  `text` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `src` varchar(100) CHARACTER SET latin1 NOT NULL,
  `view` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `crudoop2`
--

INSERT INTO `crudoop2` (`id`, `text`, `date`, `src`, `view`) VALUES
(34, 'Sankt-Peterburq ÅŸÉ™hÉ™rindÉ™ â€œBMWâ€ avtosalonundan 100 saniyÉ™yÉ™ dÃ¶rd avtomobil oÄŸurlanÄ±b.\r\n\r\nOxu.Az-Ä±n mÉ™lumatÄ±na gÃ¶rÉ™, bu barÉ™dÉ™ â€œDelovoy Peterburqâ€ nÉ™ÅŸri yazÄ±r.\r\n\r\nHadisÉ™ cÃ¼mÉ™ axÅŸamÄ±, sentyabrÄ±n 1-dÉ™, baÅŸ verib. Polis ÅŸÃ¶bÉ™sinÉ™ avtosalonun meneceri ÅŸikayÉ™t É™rizÉ™si ilÉ™ mÃ¼raciÉ™t edib. \r\n\r\nOnun sÃ¶zlÉ™rinÉ™ gÃ¶rÉ™, Ã¼zlÉ™ri baÄŸlÄ± olan dÃ¶rd nÉ™fÉ™r â€œtest driveâ€ Ã¼Ã§Ã¼n nÉ™zÉ™rdÉ™ tutulmuÅŸ X6, X5 vÉ™ beÅŸinci vÉ™ yeddinci seriya BMW markalÄ± avtomobillÉ™rÉ™ yaxÄ±nlaÅŸÄ±blar.\r\n\r\nÃ–z aÃ§arlarÄ± qapÄ±larÄ± aÃ§an soyÄŸunÃ§ular avtomobillÉ™ri salondan Ã§Ä±xararaq namÉ™lum istiqamÉ™tdÉ™ sÃ¼rÃ¼blÉ™r.\r\n\r\nPolis dÉ™rhal É™mÉ™liyyat-axtarÄ±ÅŸ tÉ™dbirlÉ™rinÉ™ baÅŸlasa da, cinayÉ™tkarlarÄ± tutmaq mÃ¼mkÃ¼n olmayÄ±b.\r\n\r\nBildirilir ki, ÅŸirkÉ™tÉ™ 19 milyon rubl dÉ™yÉ™rindÉ™ ziyan dÉ™yib. Faktla baÄŸlÄ± cinayÉ™t iÅŸi aÃ§Ä±lÄ±b. ', '2016-09-02 17:50:05', '02092016648241.jpg', 2),
(35, 'SentyabrÄ±n 2-dÉ™ AzÉ™rbaycan RespublikasÄ±nÄ±n Prezidenti, Milli Olimpiya KomitÉ™sinin prezidenti Ä°lham Æliyev BraziliyanÄ±n Rio-de-Janeyro ÅŸÉ™hÉ™rindÉ™ keÃ§irilÉ™n XXXI Yay Olimpiya OyunlarÄ±nda iÅŸtirak etmiÅŸ idmanÃ§Ä±larla vÉ™ onlarÄ±n mÉ™ÅŸqÃ§ilÉ™ri ilÉ™ gÃ¶rÃ¼ÅŸÃ¼b.\r\n\r\nOxu.Az xÉ™bÉ™r verir ki, gÃ¶rÃ¼ÅŸÉ™ toplaÅŸanlar AzÉ™rbaycan Prezidentini, xanÄ±mÄ± Mehriban ÆliyevanÄ± vÉ™ ailÉ™ Ã¼zvlÉ™rini hÉ™rarÉ™tlÉ™ qarÅŸÄ±ladÄ±lar.\r\n\r\nDÃ¶vlÉ™timizin baÅŸÃ§Ä±sÄ± gÃ¶rÃ¼ÅŸdÉ™ nitq sÃ¶ylÉ™di.\r\n\r\nSonra Prezident Ä°lham Æliyevin AzÉ™rbaycan milli olimpiya komandasÄ±nÄ±n Ã¼zvlÉ™rinin tÉ™ltif edilmÉ™si ilÉ™ baÄŸlÄ± sÉ™rÉ™ncamlarÄ± elan edildi.\r\n\r\nDÃ¶vlÉ™timizin baÅŸÃ§Ä±sÄ± AzÉ™rbaycan idmanÄ±nÄ±n inkiÅŸafÄ±ndakÄ± xidmÉ™tlÉ™rinÉ™ vÉ™ XXXI Yay Olimpiya OyunlarÄ±nda gÃ¶stÉ™rdiklÉ™ri yÃ¼ksÉ™k nailiyyÉ™tlÉ™rÉ™ gÃ¶rÉ™ tÉ™ltif edilmiÅŸ idmanÃ§Ä±lara vÉ™ onlarÄ±n mÉ™ÅŸqÃ§ilÉ™rinÉ™ â€œAzÉ™rbaycan RespublikasÄ± Prezidentinin fÉ™xri diplomuâ€nu, â€œTÉ™rÉ™qqiâ€ medallarÄ±nÄ±, â€œÅžÃ¶hrÉ™tâ€, â€œVÉ™tÉ™nÉ™ xidmÉ™tÉ™ gÃ¶rÉ™â€ ordenlÉ™rini tÉ™qdim etdi, onlara bir daha uÄŸurlar arzuladÄ±.\r\n\r\nAzÉ™rbaycanÄ±n sÉ™rbÉ™st gÃ¼lÉ™ÅŸ Ã¼zrÉ™ yÄ±ÄŸma komandasÄ±nÄ±n bÃ¶yÃ¼k mÉ™ÅŸqÃ§isi Firdovsi Umudov, XXXI Yay Olimpiya OyunlarÄ±nÄ±n gÃ¼mÃ¼ÅŸ medalÃ§Ä±sÄ± ToÄŸrul ÆsgÉ™rovun ÅŸÉ™xsi mÉ™ÅŸqÃ§isi ElÃ§in Zeynalov, kiÅŸilÉ™rdÉ™n ibarÉ™t taekvondo Ã¼zrÉ™ yÄ±ÄŸma komandanÄ±n mÉ™ÅŸqÃ§isi Elnur Amanov, Olimpiya OyunlarÄ±nÄ±n bÃ¼rÃ¼nc mÃ¼kafatÃ§Ä±sÄ±, cÃ¼doÃ§u Elmar QasÄ±mov, Rio OlimpiadasÄ±nÄ±n gÃ¼mÃ¼ÅŸ medalÃ§Ä±sÄ±, gÃ¼lÉ™ÅŸÃ§i Mariya Stadnik Ã§Ä±xÄ±ÅŸ edÉ™rÉ™k Ã¶lkÉ™mizdÉ™ idmanÄ±n inkiÅŸafÄ±na gÃ¶stÉ™rdiyi yÃ¼ksÉ™k diqqÉ™t vÉ™ qayÄŸÄ±ya gÃ¶rÉ™ dÃ¶vlÉ™timizin baÅŸÃ§Ä±sÄ±na minnÉ™tdarlÄ±qlarÄ±nÄ± Ã§atdÄ±rdÄ±lar.\r\n\r\nPrezident Ä°lham Æliyev QroznÄ±da Ã‡eÃ§enistan Muxtar RespublikasÄ±nÄ±n ilk Prezidenti ÆhmÉ™d KadÄ±rovun xatirÉ™sinÉ™ hÉ™sr olunmuÅŸ peÅŸÉ™kar kikboksinq turnirindÉ™ qalib gÉ™lÉ™rÉ™k dÃ¼nya Ã§empionu titulu qazanan â€œWBC Muaythaiâ€ versiyasÄ± Ã¼zrÉ™ dÃ¼nya Ã§empionu Zabit SÉ™mÉ™dov ilÉ™ gÃ¶rÃ¼ÅŸdÃ¼, onu qazandÄ±ÄŸÄ± qÉ™lÉ™bÉ™ mÃ¼nasibÉ™tilÉ™ tÉ™brik etdi.\r\n\r\nSonda Prezident Ä°lham Æliyev olimpiyaÃ§Ä±larla vÉ™ onlarÄ±n mÉ™ÅŸqÃ§ilÉ™ri ilÉ™ xatirÉ™ ÅŸÉ™killÉ™ri Ã§É™kdirdi.', '2016-09-02 17:05:29', '02092016648452.jpg', 7),
(36, 'ABÅž-Ä±n dÃ¶vlÉ™t borcunun mÉ™blÉ™ÄŸi tarixdÉ™ ilk dÉ™fÉ™ 19,5 trilyon dollara Ã§atÄ±b.\r\n\r\nOxu.Az RÄ°A Novosti-yÉ™ istinadÉ™n xÉ™bÉ™r verir ki, bu barÉ™dÉ™ ABÅž MaliyyÉ™ nazirliyi mÉ™lumat yayÄ±b. \r\n\r\nABÅž-da dÃ¶vlÉ™t borcunun tavanÄ±na dair qanun mart ayÄ±nÄ±n 15-nÉ™ qÉ™dÉ™r qÃ¼vvÉ™dÉ™n dÃ¼ÅŸÃ¼b. \r\nHakimiyyÉ™t fÉ™aliyyÉ™tini maliyyÉ™lÉ™ÅŸdirmÉ™k Ã¼Ã§Ã¼n gÃ¶tÃ¼rÉ™cÉ™yi borcun mÉ™blÉ™ÄŸinÉ™ dair mÉ™hdudiyyÉ™t yoxdur. ', '2016-09-02 17:05:55', '02092016649043.jpg', 8),
(37, 'TÃ¼rkiyÉ™dÉ™ AzÉ™rbaycan É™silli iÅŸ adamÄ±, â€œBahÃ§Ä±van GÄ±daâ€ ÅŸirkÉ™tinin qurucusu vÉ™ ÅŸirkÉ™tin Ä°darÉ™ HeyÉ™tinin sÉ™dri, â€œPendir kralÄ±â€ adlandÄ±rÄ±lan MÉ™cid BahÃ§Ä±van 85 yaÅŸÄ±nda vÉ™fat edib.\r\n\r\nOxu.Az-Ä±n APA-ya istinadÉ™n verdiyi mÉ™lumata gÃ¶rÉ™, M. BahÃ§Ä±vanÄ±n cÉ™nazÉ™si sabah Ä°stanbulda Fatih mÉ™scidindÉ™ qÄ±lÄ±nacaq gÃ¼norta namazÄ±ndan sonra ÆdirnÉ™qapÄ± ÅŸÉ™hidliyindÉ™ dÉ™fn edilÉ™cÉ™k.\r\n\r\nQeyd edÉ™k ki, M. BahÃ§Ä±van 1931-ci ildÉ™ Ä°rÉ™vanda tanÄ±nmÄ±ÅŸ azÉ™rbaycanlÄ± ailÉ™sindÉ™ anadan olub. 1930-cu illÉ™rin sonlarÄ±nda ailÉ™si ilÉ™ birlikdÉ™ Ã¶ncÉ™ Ä°rana, iki il sonra isÉ™ TÃ¼rkiyÉ™yÉ™ kÃ¶Ã§Ã¼b.\r\n\r\nM.BahÃ§Ä±van 1960-cÄ± illÉ™rdÉ™ TÃ¼rkiyÉ™dÉ™ pendir istehsalÄ± ilÉ™ mÉ™ÅŸÄŸul olmaÄŸa baÅŸlayÄ±b, TÃ¼rkiyÉ™dÉ™ pendir ticarÉ™tinin 50 faizinÉ™ nÉ™zarÉ™t edib.\r\n\r\nBuna gÃ¶rÉ™ dÉ™ â€œPendir kralÄ±â€ lÉ™qÉ™bi ilÉ™ mÉ™ÅŸhurlaÅŸÄ±b.\r\n\r\nM.BahÃ§Ä±van iÅŸ adamÄ± kimi fÉ™aliyyÉ™ti vÉ™ sosial layihÉ™lÉ™rdÉ™ iÅŸtirakÄ± ilÉ™ baÄŸlÄ± TÃ¼rkiyÉ™ BÃ¶yÃ¼k MillÉ™t MÉ™clisinin â€œAli XidmÉ™tâ€ mÃ¼kafatÄ±na layiq gÃ¶rÃ¼lÃ¼b.', '2016-09-02 16:49:20', '02092016649204.jpg', 0),
(38, 'ErmÉ™nistanÄ±n silahlÄ± qÃ¼vvÉ™lÉ™rinin fÉ™rari hÉ™rbÃ§isi Tobolskda saxlanÄ±lÄ±b. \r\n\r\nOxu.Az RÄ°A Novosti-yÉ™ istinadÉ™n xÉ™bÉ™r verir ki, bu barÉ™dÉ™ TÃ¼men vilayÉ™tinin prokurorluÄŸu bu gÃ¼n mÉ™lumat yayÄ±b. \r\n\r\nProkurorluÄŸun mÉ™lumatÄ±na gÃ¶rÉ™, ErmÉ™nistan vÉ™tÉ™ndaÅŸÄ± Vage Ohanesyan ermÉ™ni ordusunda 2009-cu ildÉ™n xidmÉ™t edir. 2016-cÄ± ilin fevralÄ±nda bÃ¶lÃ¼k komandiri, 28 yaÅŸlÄ± Ohanesyan mÉ™zuniyyÉ™tÉ™ Ã§Ä±xÄ±b vÉ™ Ã¶lkÉ™ni tÉ™rk edib. Fakt Ã¼zrÉ™ â€œfÉ™rarilikâ€ maddÉ™si ilÉ™ cinayÉ™t iÅŸi aÃ§Ä±lÄ±b. Ona qarÅŸÄ± qiyabi olaraq ittiham irÉ™li sÃ¼rÃ¼lÃ¼b. \r\n\r\nâ€œAvqustun iyirmi doqquzunda Ohanesyan Tobolskda polis É™mÉ™kdaÅŸlarÄ± tÉ™rÉ™findÉ™n saxlanÄ±lÄ±b. SÉ™nÉ™dlÉ™rin yoxlanÄ±ÅŸÄ± zamanÄ± onun axtarÄ±ÅŸda olduÄŸu mÉ™lum olub. MÉ™hkÉ™mÉ™nin qÉ™rarÄ± ilÉ™ qaÃ§aq gÃ¶zaltÄ±na alÄ±nÄ±bâ€, - mÉ™lumatda bildirilib. \r\n\r\nProkurorluÄŸun mÉ™lumatÄ±na gÃ¶rÉ™, Ohanesyana qarÅŸÄ± ekstradisiya yoxlamasÄ± aparÄ±lÄ±b, onun ErmÉ™nistana tÉ™hvil verilmÉ™si mÉ™sÉ™lÉ™sinin hÉ™lli Ã¼Ã§Ã¼n materiallar Rusiya BaÅŸ ProkurorluÄŸuna gÃ¶ndÉ™rilib.', '2016-09-02 16:49:35', '02092016649355.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crudoop2`
--
ALTER TABLE `crudoop2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crudoop2`
--
ALTER TABLE `crudoop2`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
