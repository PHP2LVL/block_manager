-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2018 at 06:21 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mm_page-assembler`
--

-- --------------------------------------------------------

--
-- Table structure for table `fd_admin_chat`
--

CREATE TABLE `fd_admin_chat` (
  `id` int(11) NOT NULL,
  `admin` varchar(255) NOT NULL,
  `msg` longtext NOT NULL,
  `date` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fd_chat_box`
--

CREATE TABLE `fd_chat_box` (
  `id` int(11) NOT NULL,
  `nikas` varchar(255) DEFAULT NULL,
  `msg` varchar(255) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `niko_id` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fd_chat_box`
--

INSERT INTO `fd_chat_box` (`id`, `nikas`, `msg`, `time`, `niko_id`) VALUES
(1, 'Sistema', 'Labas, Pasauli :)', '2012-09-09 13:48:22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fd_duk`
--

CREATE TABLE `fd_duk` (
  `id` int(11) NOT NULL,
  `klausimas` varchar(255) DEFAULT NULL,
  `atsakymas` text,
  `lang` varchar(3) NOT NULL DEFAULT 'lt' COMMENT 'Language',
  `order` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fd_d_forumai`
--

CREATE TABLE `fd_d_forumai` (
  `id` int(11) NOT NULL,
  `pav` varchar(255) DEFAULT NULL,
  `lang` varchar(3) NOT NULL DEFAULT 'lt' COMMENT 'Language',
  `place` int(11) DEFAULT NULL,
  `teises` varchar(255) NOT NULL DEFAULT 'N;'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fd_d_straipsniai`
--

CREATE TABLE `fd_d_straipsniai` (
  `id` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `pav` varchar(255) DEFAULT NULL,
  `lang` varchar(3) NOT NULL DEFAULT 'lt' COMMENT 'Language',
  `last_data` int(10) DEFAULT NULL,
  `last_nick` varchar(255) DEFAULT NULL,
  `autorius` varchar(255) DEFAULT NULL,
  `uzrakinta` set('taip','ne') NOT NULL DEFAULT 'ne',
  `sticky` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fd_d_temos`
--

CREATE TABLE `fd_d_temos` (
  `id` int(11) NOT NULL,
  `fid` int(11) DEFAULT NULL,
  `pav` varchar(255) DEFAULT NULL,
  `aprasymas` varchar(255) DEFAULT NULL,
  `lang` varchar(3) NOT NULL DEFAULT 'lt' COMMENT 'Language',
  `last_data` int(10) DEFAULT NULL,
  `last_nick` varchar(255) DEFAULT NULL,
  `place` int(11) DEFAULT NULL,
  `teises` varchar(255) NOT NULL DEFAULT 'N;'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fd_d_zinute`
--

CREATE TABLE `fd_d_zinute` (
  `id` int(11) NOT NULL,
  `tid` int(11) DEFAULT NULL,
  `sid` int(11) DEFAULT NULL,
  `nick` int(11) DEFAULT NULL,
  `zinute` text,
  `laikas` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fd_galerija`
--

CREATE TABLE `fd_galerija` (
  `ID` int(11) NOT NULL,
  `pavadinimas` varchar(255) DEFAULT 'Be pavadinimo',
  `file` varchar(255) NOT NULL DEFAULT 'none.png',
  `foto` text,
  `apie` longtext,
  `lang` varchar(3) NOT NULL DEFAULT 'lt' COMMENT 'Language',
  `autorius` int(6) NOT NULL DEFAULT '0',
  `data` int(10) DEFAULT NULL,
  `categorija` int(3) DEFAULT '1',
  `teises` varchar(255) DEFAULT 'N;',
  `kom` set('taip','ne') NOT NULL DEFAULT 'taip',
  `rodoma` varchar(4) NOT NULL DEFAULT 'NE'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fd_grupes`
--

CREATE TABLE `fd_grupes` (
  `id` int(3) NOT NULL,
  `pavadinimas` varchar(255) DEFAULT NULL,
  `aprasymas` mediumtext,
  `lang` varchar(3) NOT NULL DEFAULT 'lt' COMMENT 'Language',
  `teises` varchar(255) NOT NULL DEFAULT 'N;',
  `pav` varchar(255) DEFAULT NULL,
  `path` varchar(255) NOT NULL DEFAULT '0',
  `kieno` varchar(255) DEFAULT NULL,
  `place` int(11) NOT NULL DEFAULT '1',
  `mod` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fd_kas_prisijunges`
--

CREATE TABLE `fd_kas_prisijunges` (
  `id` int(11) NOT NULL,
  `uid` varchar(11) NOT NULL DEFAULT '',
  `timestamp` int(15) NOT NULL DEFAULT '0',
  `ip` varchar(45) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `user` varchar(255) DEFAULT NULL,
  `agent` varchar(255) DEFAULT NULL,
  `ref` varchar(255) DEFAULT NULL,
  `clicks` float NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fd_kas_prisijunges`
--

INSERT INTO `fd_kas_prisijunges` (`id`, `uid`, `timestamp`, `ip`, `file`, `user`, `agent`, `ref`, `clicks`) VALUES
(1, 'zZtueGH72F', 1545236588, '::1', 'admin;a,ajax;', 'Twister', 'User-Agent: \'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/71.0.3578.98 Safari/537.36\'', 'http://localhost/pazengusiuKursai/mightmedia/dievai/admin;a,pageAssembler;c,settings', 130),
(1, 'rrrq0maFvB', 1545243617, '::1', 'themes/material/plugins/bootstrap/css/bootstrap.css.map', 'admin', 'User-Agent: \'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.92 Safari/537.36\'', 'Direct Link', 49),
(1, 'XiKvM5SkVo', 1545243380, '::1', 'block_manager/dievai/admin;a,pageAssembler;c,edit;pageId,1;insertBlock,col_2_text_1_img;blockType,text', 'admin', 'User-Agent: \'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.92 Safari/537.36\'', 'http://pages.mightmedia.test/dievai/admin;a,pageAssembler;c,list', 3);

-- --------------------------------------------------------

--
-- Table structure for table `fd_knyga`
--

CREATE TABLE `fd_knyga` (
  `id` int(11) NOT NULL,
  `nikas` varchar(255) DEFAULT NULL,
  `msg` varchar(255) DEFAULT NULL,
  `time` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fd_kom`
--

CREATE TABLE `fd_kom` (
  `id` int(11) NOT NULL,
  `kid` int(11) NOT NULL DEFAULT '0',
  `pid` varchar(255) NOT NULL DEFAULT '0',
  `zinute` text,
  `nick` varchar(255) DEFAULT NULL,
  `nick_id` int(11) NOT NULL DEFAULT '0',
  `data` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fd_logai`
--

CREATE TABLE `fd_logai` (
  `id` int(10) NOT NULL,
  `action` text,
  `time` int(10) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fd_naujienos`
--

CREATE TABLE `fd_naujienos` (
  `id` int(11) NOT NULL,
  `pavadinimas` varchar(255) DEFAULT NULL,
  `kategorija` int(2) NOT NULL DEFAULT '1',
  `naujiena` mediumtext,
  `daugiau` text,
  `lang` varchar(3) NOT NULL DEFAULT 'lt' COMMENT 'Language',
  `data` int(10) DEFAULT NULL,
  `autorius` varchar(255) DEFAULT NULL,
  `kom` set('taip','ne') NOT NULL DEFAULT 'taip',
  `rodoma` varchar(4) NOT NULL DEFAULT 'NE',
  `sticky` smallint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fd_naujienos`
--

INSERT INTO `fd_naujienos` (`id`, `pavadinimas`, `kategorija`, `naujiena`, `daugiau`, `lang`, `data`, `autorius`, `kom`, `rodoma`, `sticky`) VALUES
(1, 'Sveikiname įdiegus MightMedia TVS v.1.46', 0, 'Jūs sėkmingai įdiegėte <a target="_blank" title="MightMedia TVS" href="http://www.mightmedia.lt">MightMedia TVS</a> . Jos autoriai <a target="_blank" href="http://code.google.com/p/coders/"><strong>CodeRS</strong></a> . Prašome nepasisavinti autorinių teisių, priešingu atveju jūs pažeisite GNU teises.', 'Kiekvienam puslapyje privalomas užrašas apačioje "<a target="_blank" href="http://www.mightmedia.lt/">MightMedia</a>" su nuoroda į <a target="_blank" href="http://www.mightmedia.lt/">http://www.mightmedia.lt</a>\r\n', 'lt', 1346622467, 'Sistema', 'taip', 'TAIP', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fd_newsgetters`
--

CREATE TABLE `fd_newsgetters` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fd_nuorodos`
--

CREATE TABLE `fd_nuorodos` (
  `id` int(11) NOT NULL,
  `cat` int(3) NOT NULL DEFAULT '1',
  `url` varchar(255) DEFAULT NULL,
  `pavadinimas` varchar(255) NOT NULL DEFAULT '0',
  `click` int(11) NOT NULL DEFAULT '0',
  `nick` int(5) DEFAULT NULL,
  `date` int(10) DEFAULT NULL,
  `apie` text,
  `lang` varchar(3) NOT NULL DEFAULT 'lt' COMMENT 'Language',
  `active` varchar(4) NOT NULL DEFAULT 'NE',
  `balsai` int(255) NOT NULL DEFAULT '0',
  `balsavo` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fd_nustatymai`
--

CREATE TABLE `fd_nustatymai` (
  `id` int(6) NOT NULL,
  `key` varchar(255) DEFAULT NULL,
  `val` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fd_nustatymai`
--

INSERT INTO `fd_nustatymai` (`id`, `key`, `val`) VALUES
(1, 'Pavadinimas', 'MightMedia TVS'),
(2, 'Apie', 'Trumpai apie svetainę'),
(3, 'Keywords', 'TVS, mightmedia, coders'),
(4, 'Copyright', '<a href="http://www.mightmedia.lt" target="_blank">MightMedia TVS</a>'),
(5, 'Palaikymas', '1'),
(6, 'Maintenance', 'Atsiprašome<br /> Svetainė šiuo metu yra tvarkoma.<br /> Prisijungti gali tik administratoriai.'),
(7, 'Chat_limit', '5'),
(8, 'News_limit', '5'),
(9, 'Stilius', 'apelsinas'),
(10, 'Bandymai', '3'),
(11, 'fotodyd', '450'),
(12, 'minidyd', '150'),
(13, 'galbalsuot', '1'),
(14, 'fotoperpsl', '10'),
(15, 'galkom', '1'),
(16, 'pirminis', 'naujienos'),
(17, 'keshas', '0'),
(18, 'kmomentarai_sveciams', '0'),
(19, 'F_urls', ';'),
(20, 'galorder', 'data'),
(21, 'galorder_type', 'DESC'),
(22, 'Editor', 'markitup'),
(23, 'hyphenator', '1'),
(24, 'Pastas', 'twister0123@gmail.com'),
(25, 'kalba', 'lt.php'),
(26, 'Admin_folder', 'admin'),
(27, 'Admin_folder', 'dievai');

-- --------------------------------------------------------

--
-- Table structure for table `fd_page`
--

CREATE TABLE `fd_page` (
  `id` int(11) NOT NULL,
  `pavadinimas` varchar(255) DEFAULT NULL,
  `lang` varchar(3) NOT NULL DEFAULT 'lt' COMMENT 'Language',
  `file` varchar(255) DEFAULT NULL,
  `place` int(11) DEFAULT NULL,
  `show` enum('Y','N') NOT NULL DEFAULT 'Y',
  `teises` varchar(255) NOT NULL DEFAULT 'N;',
  `parent` int(150) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fd_page`
--

INSERT INTO `fd_page` (`id`, `pavadinimas`, `lang`, `file`, `place`, `show`, `teises`, `parent`) VALUES
(1, 'Naujienos', 'lt', 'puslapiai/naujienos.php', 1, 'Y', 'N;', 0),
(2, 'Apie', 'lt', 'puslapiai/apie.php', 5, 'Y', 'N;', 0),
(3, 'Paieška', 'lt', 'puslapiai/search.php', 6, 'Y', 'i:0;', 0),
(4, 'Kontaktai', 'lt', 'puslapiai/kontaktas.php', 6, 'Y', 'N;', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fd_panel`
--

CREATE TABLE `fd_panel` (
  `id` int(11) NOT NULL,
  `panel` varchar(255) DEFAULT NULL,
  `lang` varchar(3) NOT NULL DEFAULT 'lt' COMMENT 'Language',
  `file` varchar(255) DEFAULT NULL,
  `place` int(11) DEFAULT NULL,
  `align` enum('R','L','C') NOT NULL DEFAULT 'C',
  `rodyti` varchar(4) DEFAULT NULL,
  `show` enum('Y','N') NOT NULL DEFAULT 'Y',
  `teises` varchar(255) NOT NULL DEFAULT 'N;'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fd_panel`
--

INSERT INTO `fd_panel` (`id`, `panel`, `lang`, `file`, `place`, `align`, `rodyti`, `show`, `teises`) VALUES
(1, 'Kalendorius', 'lt', 'blokai/kalendorius.php', 1, 'R', 'Taip', 'Y', 'N;'),
(2, 'Meniu', 'lt', 'blokai/meniu.php', 2, 'L', 'Taip', 'Y', 'N;');

-- --------------------------------------------------------

--
-- Table structure for table `fd_pa_data`
--

CREATE TABLE `fd_pa_data` (
  `id` int(9) UNSIGNED NOT NULL,
  `parent_id` int(9) DEFAULT NULL,
  `order_id` int(9) DEFAULT NULL,
  `type` text,
  `lang` text,
  `content` text,
  `page_id` int(9) DEFAULT NULL,
  `style` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fd_pa_data`
--

INSERT INTO `fd_pa_data` (`id`, `parent_id`, `order_id`, `type`, `lang`, `content`, `page_id`, `style`) VALUES
(9, NULL, NULL, '../extensions/page_assembler/text_blocks/2-col-text-1-img/config.json', 'lt', '[{"type":"span","style":"","name":"Column1","value":"Rusty Griswold is now an adult working as a pilot for a low budget&nbsp;regional airline&nbsp;called Econo-Air, and shares a stale relationship with his wife Debbie and their two children, their shy and awkward 14-year-old son James, and their intimidating 12-year-old son Kevin. The gloating from his friends Jack and Nancy Peterson about a family trip they had in&nbsp;Paris&nbsp;doesn&#39;t help his situation. He desires to relive the fun of his family vacations and holiday gatherings from his childhood. These memories prompt him to abandon his family&#39;s annual trip to their cabin in&nbsp;Cheboygan, Michigan&nbsp;and instead drive cross country to Walley World, just like he did with his parents and sister. For the trip, Rusty rents a Tartan Prancer, an ugly, over-complicated&nbsp;Albanian&nbsp;SUV.\\r\\n"},{"type":"span","style":"","name":"Column2","value":"Vacation&nbsp;is a 2015 American&nbsp;comedy film&nbsp;written and directed by&nbsp;Jonathan Goldstein&nbsp;and&nbsp;John Francis Daley&nbsp;(in their&nbsp;directorial debuts). It stars&nbsp;Ed Helms,&nbsp;Christina Applegate,&nbsp;Skyler Gisondo,&nbsp;Steele Stebbins,&nbsp;Leslie Mann,&nbsp;Chris Hemsworth,&nbsp;Beverly D&#39;Angelo, and&nbsp;Chevy Chase. It is the fifth installment of the&nbsp;Vacation&nbsp;film series, serving as a&nbsp;soft reboot. It is also the second not to carry the&nbsp;National Lampoon&nbsp;name after&nbsp;Vegas Vacation, and was released by&nbsp;New Line Cinema&nbsp;and&nbsp;Warner Bros.&nbsp;on July 29, 2015. It has an approval rating of 26% on&nbsp;Rotten Tomatoes&nbsp;and grossed $104 million on a $31 million budget.[5]\\r\\n"},{"type":"text","style":"crop","name":"Image_sorce","value":"https:\\/\\/upload.wikimedia.org\\/wikipedia\\/en\\/1\\/19\\/Vacation_poster.jpg"},{"type":"text","style":"","name":"Image_title","value":"Vacation"},{"type":"text","style":"","name":"Image_alt","value":"Vacation"}]', 1, NULL),
(13, NULL, NULL, '../extensions/page_assembler/text_blocks/2-col-text-1-img/config.json', 'lt', '[{"type":"span","style":"","name":"Column1","value":"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat sit amet magna in dignissim. Pellentesque consectetur vestibulum metus, blandit posuere ligula sollicitudin non. Suspendisse eu pharetra sem. Nunc non dapibus enim. Vivamus tincidunt nunc augue, blandit auctor nulla consequat nec. Pellentesque et urna elementum nunc suscipit tristique. Sed vel diam a quam pellentesque consectetur. Curabitur varius aliquam lectus vitae dignissim. Nulla ut justo rutrum, posuere nunc ac, hendrerit libero. Nullam vehicula libero pulvinar malesuada rhoncus. In maximus velit aliquet tortor auctor, vitae posuere urna vehicula.<\\/p>\\r\\n"},{"type":"span","style":"","name":"Column2","value":"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat sit amet magna in dignissim. Pellentesque consectetur vestibulum metus, blandit posuere ligula sollicitudin non. Suspendisse eu pharetra sem. Nunc non dapibus enim. Vivamus tincidunt nunc augue, blandit auctor nulla consequat nec. Pellentesque et urna elementum nunc suscipit tristique. Sed vel diam a quam pellentesque consectetur. Curabitur varius aliquam lectus vitae dignissim. Nulla ut justo rutrum, posuere nunc ac, hendrerit libero. Nullam vehicula libero pulvinar malesuada rhoncus. In maximus velit aliquet tortor auctor, vitae posuere urna vehicula.<\\/p>\\r\\n"},{"type":"text","style":"crop","name":"Image_sorce","value":"https:\\/\\/ak.picdn.net\\/assets\\/cms\\/482d21f5fea2d7987905385b105bd94eef07f888-f36977f80171eb012f3dada67039f5a5a9b4ba22-shutterstock-526098166-min.jpg"},{"type":"text","style":"","name":"Image_title","value":""},{"type":"text","style":"","name":"Image_alt","value":""}]', 1, NULL),
(8, NULL, NULL, '../extensions/page_assembler/text_blocks/4-col-text-spans/config.json', 'lt', '[{"type":"span","style":"","name":"Column1","value":"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat sit amet magna in dignissim. Pellentesque consectetur vestibulum metus, blandit posuere ligula sollicitudin non. Suspendisse eu pharetra sem. Nunc non dapibus enim. Vivamus tincidunt nunc augue, blandit auctor nulla consequat nec. Pellentesque et urna elementum nunc suscipit tristique. Sed vel diam a quam pellentesque consectetur. Curabitur varius aliquam lectus vitae dignissim. Nulla ut justo rutrum, posuere nunc ac, hendrerit libero. Nullam vehicula libero pulvinar malesuada rhoncus. In maximus velit aliquet tortor auctor, vitae posuere urna vehicula.<\\/p>\\r\\n"},{"type":"span","style":"","name":"Column2","value":"<p>Trumpas Eilerastukas<br \\/>\\r\\njau baigesi jis<\\/p>\\r\\n"},{"type":"span","style":"","name":"Column3","value":"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat sit amet magna in dignissim. Pellentesque consectetur vestibulum metus, blandit posuere ligula sollicitudin non. Suspendisse eu pharetra sem. Nunc non dapibus enim. Vivamus tincidunt nunc augue, blandit auctor nulla consequat nec. Pellentesque et urna elementum nunc suscipit tristique. Sed vel diam a quam pellentesque consectetur. Curabitur varius aliquam lectus vitae dignissim. Nulla ut justo rutrum, posuere nunc ac, hendrerit libero. Nullam vehicula libero pulvinar malesuada rhoncus. In maximus velit aliquet tortor auctor, vitae posuere urna vehicula.<\\/p>\\r\\n"},{"type":"span","style":"","name":"Column4","value":"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat sit amet magna in dignissim. Pellentesque consectetur vestibulum metus, blandit posuere ligula sollicitudin non. Suspendisse eu pharetra sem. Nunc non dapibus enim. Vivamus tincidunt nunc augue, blandit auctor nulla consequat nec. Pellentesque et urna elementum nunc suscipit tristique. Sed vel diam a quam pellentesque consectetur. Curabitur varius aliquam lectus vitae dignissim. Nulla ut justo rutrum, posuere nunc ac, hendrerit libero. Nullam vehicula libero pulvinar malesuada rhoncus. In maximus velit aliquet tortor auctor, vitae posuere urna vehicula.<\\/p>\\r\\n"}]', 1, NULL),
(6, NULL, NULL, '../extensions/page_assembler/text_blocks/2-col-text-1-img/config.json', 'lt', '[{"type":"span","style":"","name":"Column1","value":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat sit amet magna in dignissim. Pellentesque consectetur vestibulum metus, blandit posuere ligula sollicitudin non. Suspendisse eu pharetra sem. Nunc non dapibus enim. Vivamus tincidunt nunc augue, blandit auctor nulla consequat nec. Pellentesque et urna elementum nunc suscipit tristique. Sed vel diam a quam pellentesque consectetur. Curabitur varius aliquam lectus vitae dignissim. Nulla ut justo rutrum, posuere nunc ac, hendrerit libero. Nullam vehicula libero pulvinar malesuada rhoncus. In maximus velit aliquet tortor auctor, vitae posuere urna vehicula."},{"type":"span","style":"","name":"Column2","value":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat sit amet magna in dignissim. Pellentesque consectetur vestibulum metus, blandit posuere ligula sollicitudin non. Suspendisse eu pharetra sem. Nunc non dapibus enim. Vivamus tincidunt nunc augue, blandit auctor nulla consequat nec. Pellentesque et urna elementum nunc suscipit tristique. Sed vel diam a quam pellentesque consectetur. Curabitur varius aliquam lectus vitae dignissim. Nulla ut justo rutrum, posuere nunc ac, hendrerit libero. Nullam vehicula libero pulvinar malesuada rhoncus. In maximus velit aliquet tortor auctor, vitae posuere urna vehicula."},{"type":"text","style":"crop","name":"Image_sorce","value":"http:\\/\\/www.apimages.com\\/Images\\/Ap_Creative_Stock_Header.jpg"},{"type":"text","style":"","name":"Image_title","value":""},{"type":"text","style":"","name":"Image_alt","value":""}]', 1, NULL),
(11, NULL, NULL, '../extensions/page_assembler/team/config.json', 'lt', '[{"type":"span","style":"","name":"Column1","value":"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat sit amet magna in dignissim. Pellentesque consectetur vestibulum metus, blandit posuere ligula sollicitudin non. Suspendisse eu pharetra sem. Nunc non dapibus enim. Vivamus tincidunt nunc augue, blandit auctor nulla consequat nec. Pellentesque et urna elementum nunc suscipit tristique. Sed vel diam a quam pellentesque consectetur. Curabitur varius aliquam lectus vitae dignissim. Nulla ut justo rutrum, posuere nunc ac, hendrerit libero. Nullam vehicula libero pulvinar malesuada rhoncus. In maximus velit aliquet tortor auctor, vitae posuere urna vehicula.<\\/p>\\r\\n"},{"type":"span","style":"","name":"Column2","value":"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum feugiat sit amet magna in dignissim. Pellentesque consectetur vestibulum metus, blandit posuere ligula sollicitudin non. Suspendisse eu pharetra sem. Nunc non dapibus enim. Vivamus tincidunt nunc augue, blandit auctor nulla consequat nec. Pellentesque et urna elementum nunc suscipit tristique. Sed vel diam a quam pellentesque consectetur. Curabitur varius aliquam lectus vitae dignissim. Nulla ut justo rutrum, posuere nunc ac, hendrerit libero. Nullam vehicula libero pulvinar malesuada rhoncus. In maximus velit aliquet tortor auctor, vitae posuere urna vehicula.<\\/p>\\r\\n"},{"type":"text","style":"crop","name":"Image_sorce","value":"http:\\/\\/www.apimages.com\\/Images\\/Ap_Creative_Stock_Header.jpg"},{"type":"text","style":"","name":"Image_title","value":""},{"type":"text","style":"","name":"Image_alt","value":""}]', 1, NULL),
(14, NULL, NULL, '../extensions/page_assembler/list_blocks/12-col-list/config.json', 'lt', '[{"type":"span","style":"","name":"Column1","value":"<p>Value 1<\\/p>\\r\\n"},{"type":"span","style":"","name":"Column2","value":"<p>Value 2<\\/p>\\r\\n"},{"type":"span","style":"","name":"Column3","value":"<p>Value 3<\\/p>\\r\\n"},{"type":"span","style":"","name":"Column4","value":"<p>Your Value<\\/p>\\r\\n"},{"type":"span","style":"","name":"Column5","value":"<p>Your Value<\\/p>\\r\\n"}]', 1, NULL),
(15, NULL, NULL, '../extensions/page_assembler/list_blocks/12-col-list/config.json', 'lt', '[{"type":"span","style":"","name":"Column1","value":"<p>Value 1<\\/p>\\r\\n"},{"type":"span","style":"","name":"Column2","value":"<p>Value 2<\\/p>\\r\\n"},{"type":"span","style":"","name":"Column3","value":"<p>Value 3<\\/p>\\r\\n"},{"type":"span","style":"","name":"Column4","value":"<p>Your Value<\\/p>\\r\\n"},{"type":"span","style":"","name":"Column5","value":"<p>Your Value<\\/p>\\r\\n"}]', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fd_pa_page_settings`
--

CREATE TABLE `fd_pa_page_settings` (
  `id` int(9) UNSIGNED NOT NULL,
  `page_id` int(9) DEFAULT NULL,
  `title` text,
  `lang` text,
  `meta_title` text,
  `meta_desc` text,
  `meta_keywords` text,
  `friendly_url` text,
  `status_id` int(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fd_pa_page_settings`
--

INSERT INTO `fd_pa_page_settings` (`id`, `page_id`, `title`, `lang`, `meta_title`, `meta_desc`, `meta_keywords`, `friendly_url`, `status_id`) VALUES
(24, 24, 'aaa', 'lt', 'utf8', 'Mightmedia', 'aaa', '/', NULL),
(25, 25, 'aaa', 'lt', 'utf8', 'Mightmedia', 'aaa', '/', NULL),
(26, 26, 'aaa', 'lt', 'utf8', 'Mightmedia', 'aaa', '/', NULL),
(27, 27, 'aaa', 'lt', 'utf8', 'Mightmedia', 'aaa', '/', NULL),
(28, 28, 'aaa', 'lt', 'utf8', 'Mightmedia', 'aaa', '/', NULL),
(29, 29, 'aaa', 'lt', 'utf8', 'Mightmedia', 'aaa', '/', NULL),
(30, 30, 'aaa', 'lt', 'utf8', 'Mightmedia', 'aaa', '/', NULL),
(31, 31, 'aaa', 'lt', 'utf8', 'Mightmedia', 'aaa', '/', NULL),
(32, 32, 'aaa', 'lt', 'utf8', 'Mightmedia', 'aaa', ';', NULL),
(33, 33, 'aaa', 'lt', 'utf8', 'Mightmedia', 'aaa', '/', NULL),
(34, 34, 'aaa', 'lt', 'utf8', 'Mightmedia', 'aaa', '/', NULL),
(35, 35, 'aaa', 'lt', 'utf8', 'Mightmedia', 'aaa', '/', NULL),
(36, 36, 'aaa', 'lt', 'utf8', 'Mightmedia', 'aaa', '/', NULL),
(37, 37, 'aaa', 'lt', 'utf8', 'Mightmedia', 'aaa', '/', NULL),
(38, 38, 'aaa', 'lt', 'utf8', 'Mightmedia', 'aaa', '/', NULL),
(39, 39, 'aaa', 'lt', 'aaa', 'Mightmedia', 'aaa', '/', NULL),
(40, 40, 'Mightmedia', 'lt', 'utf8', 'Mightmedia', 'aaa', '/', NULL),
(41, 41, 'aaa', 'lt', 'utf8', 'Mightmedia', 'aaa', '/', NULL),
(42, 42, 'Mightmedia', 'lt', 'utf8', 'Mightmedia', 'aaa', '/', NULL),
(43, 43, 'aaa', 'lt', 'utf8', 'Mightmedia', 'aaa', '/', NULL),
(44, 44, 'aaa', 'lt', 'utf8', 'Mightmedia', 'aaa', '/', NULL),
(45, 45, 'aaa', 'lt', 'utf8', 'Mightmedia', 'aaa', '/', NULL),
(46, 46, 'aaa', 'lt', 'utf8', 'Mightmedia', 'aaa', '/', NULL),
(47, 47, 'aaa', 'lt', 'utf8', 'Mightmedia', 'aaa', '/', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fd_poll_answers`
--

CREATE TABLE `fd_poll_answers` (
  `id` int(255) NOT NULL,
  `question_id` int(255) NOT NULL DEFAULT '0',
  `answer` text NOT NULL,
  `lang` varchar(3) NOT NULL DEFAULT 'lt' COMMENT 'Language'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fd_poll_questions`
--

CREATE TABLE `fd_poll_questions` (
  `id` int(255) NOT NULL,
  `question` text NOT NULL,
  `radio` int(1) NOT NULL DEFAULT '0',
  `shown` int(1) NOT NULL DEFAULT '0',
  `only_guests` int(1) NOT NULL,
  `author_id` int(11) NOT NULL DEFAULT '1',
  `author_name` varchar(255) NOT NULL DEFAULT 'Admin',
  `lang` varchar(3) NOT NULL DEFAULT 'lt' COMMENT 'Language'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fd_poll_votes`
--

CREATE TABLE `fd_poll_votes` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `question_id` int(11) NOT NULL DEFAULT '0',
  `answer_id` int(11) NOT NULL DEFAULT '0',
  `lang` varchar(3) NOT NULL DEFAULT 'lt' COMMENT 'Language'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fd_private_msg`
--

CREATE TABLE `fd_private_msg` (
  `id` int(11) NOT NULL,
  `from` varchar(255) DEFAULT NULL,
  `to` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL DEFAULT '...',
  `msg` text,
  `read` set('YES','NO') NOT NULL DEFAULT 'NO',
  `date` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fd_ratings`
--

CREATE TABLE `fd_ratings` (
  `id` int(11) NOT NULL,
  `rating_id` varchar(255) DEFAULT NULL,
  `rating_num` int(11) DEFAULT NULL,
  `IP` varchar(255) DEFAULT NULL,
  `psl` varchar(255) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fd_salis`
--

CREATE TABLE `fd_salis` (
  `iso` varchar(2) NOT NULL DEFAULT '',
  `name` varchar(255) DEFAULT NULL,
  `printable_name` varchar(255) DEFAULT NULL,
  `iso3` varchar(3) DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fd_salis`
--

INSERT INTO `fd_salis` (`iso`, `name`, `printable_name`, `iso3`, `numcode`) VALUES
('LT', 'LITHUANIA', 'Lithuania', 'LTU', 440),
('RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', 643),
('US', 'UNITED STATES', 'United States', 'USA', 840);

-- --------------------------------------------------------

--
-- Table structure for table `fd_siuntiniai`
--

CREATE TABLE `fd_siuntiniai` (
  `ID` int(11) NOT NULL,
  `paspaudimai` decimal(11,0) NOT NULL DEFAULT '0',
  `pavadinimas` varchar(255) DEFAULT 'Be pavadinimo',
  `file` varchar(255) NOT NULL DEFAULT 'none.png',
  `foto` text,
  `apie` longtext,
  `lang` varchar(3) NOT NULL DEFAULT 'lt' COMMENT 'Language',
  `autorius` int(6) NOT NULL DEFAULT '0',
  `data` int(10) DEFAULT NULL,
  `categorija` int(3) DEFAULT '1',
  `teises` varchar(255) DEFAULT 'N;',
  `rodoma` varchar(4) NOT NULL DEFAULT 'NE'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fd_straipsniai`
--

CREATE TABLE `fd_straipsniai` (
  `id` int(11) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `pav` varchar(255) DEFAULT NULL,
  `t_text` text,
  `f_text` longtext,
  `lang` varchar(3) NOT NULL DEFAULT 'lt' COMMENT 'Language',
  `date` int(11) DEFAULT NULL,
  `autorius` varchar(255) DEFAULT NULL,
  `autorius_id` int(11) DEFAULT NULL,
  `vote` int(11) DEFAULT NULL,
  `click` int(11) DEFAULT NULL,
  `kom` varchar(4) NOT NULL DEFAULT 'ne',
  `rodoma` varchar(4) NOT NULL DEFAULT 'NE',
  `kat` int(125) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fd_users`
--

CREATE TABLE `fd_users` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `nick` varchar(150) DEFAULT NULL,
  `levelis` int(2) NOT NULL DEFAULT '3',
  `pass` varchar(255) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `slaptas` varchar(255) DEFAULT NULL,
  `icq` varchar(255) DEFAULT NULL,
  `msn` varchar(255) DEFAULT NULL,
  `skype` varchar(255) DEFAULT NULL,
  `yahoo` varchar(255) DEFAULT NULL,
  `aim` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `salis` varchar(3) DEFAULT 'LT',
  `miestas` varchar(255) DEFAULT NULL,
  `vardas` varchar(255) DEFAULT NULL,
  `pavarde` varchar(255) DEFAULT NULL,
  `gim_data` date DEFAULT NULL,
  `parasas` text,
  `forum_temos` int(11) NOT NULL DEFAULT '0',
  `forum_atsakyta` int(11) NOT NULL DEFAULT '0',
  `taskai` decimal(11,0) NOT NULL DEFAULT '0',
  `balsai` int(11) NOT NULL DEFAULT '0',
  `balsavo` text,
  `pm_viso` int(11) NOT NULL DEFAULT '50',
  `reg_data` int(10) DEFAULT NULL,
  `login_data` int(10) DEFAULT NULL,
  `login_before` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fd_users`
--

INSERT INTO `fd_users` (`id`, `ip`, `nick`, `levelis`, `pass`, `email`, `slaptas`, `icq`, `msn`, `skype`, `yahoo`, `aim`, `url`, `salis`, `miestas`, `vardas`, `pavarde`, `gim_data`, `parasas`, `forum_temos`, `forum_atsakyta`, `taskai`, `balsai`, `balsavo`, `pm_viso`, `reg_data`, `login_data`, `login_before`) VALUES
(1, '::1', 'admin', 1, '66b65567cedbc743bda3417fb813b9ba', 'aivaras.cenkus@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'LT', NULL, NULL, NULL, NULL, 'Svetainės administratorius', 0, 0, '0', 0, NULL, 500, 1543341807, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fd_admin_chat`
--
ALTER TABLE `fd_admin_chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fd_chat_box`
--
ALTER TABLE `fd_chat_box`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fd_duk`
--
ALTER TABLE `fd_duk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lang` (`lang`);

--
-- Indexes for table `fd_d_forumai`
--
ALTER TABLE `fd_d_forumai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lang` (`lang`);

--
-- Indexes for table `fd_d_straipsniai`
--
ALTER TABLE `fd_d_straipsniai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lang` (`lang`);

--
-- Indexes for table `fd_d_temos`
--
ALTER TABLE `fd_d_temos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lang` (`lang`);

--
-- Indexes for table `fd_d_zinute`
--
ALTER TABLE `fd_d_zinute`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fd_galerija`
--
ALTER TABLE `fd_galerija`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `lang` (`lang`);

--
-- Indexes for table `fd_grupes`
--
ALTER TABLE `fd_grupes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lang` (`lang`);

--
-- Indexes for table `fd_kas_prisijunges`
--
ALTER TABLE `fd_kas_prisijunges`
  ADD PRIMARY KEY (`uid`),
  ADD KEY `ip` (`ip`),
  ADD KEY `file` (`file`(250)),
  ADD KEY `timestamp` (`timestamp`);

--
-- Indexes for table `fd_knyga`
--
ALTER TABLE `fd_knyga`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fd_kom`
--
ALTER TABLE `fd_kom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fd_logai`
--
ALTER TABLE `fd_logai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fd_naujienos`
--
ALTER TABLE `fd_naujienos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lang` (`lang`);

--
-- Indexes for table `fd_newsgetters`
--
ALTER TABLE `fd_newsgetters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fd_nuorodos`
--
ALTER TABLE `fd_nuorodos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lang` (`lang`);

--
-- Indexes for table `fd_nustatymai`
--
ALTER TABLE `fd_nustatymai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fd_page`
--
ALTER TABLE `fd_page`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lang` (`lang`);

--
-- Indexes for table `fd_panel`
--
ALTER TABLE `fd_panel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lang` (`lang`);

--
-- Indexes for table `fd_pa_data`
--
ALTER TABLE `fd_pa_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fd_pa_page_settings`
--
ALTER TABLE `fd_pa_page_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fd_poll_answers`
--
ALTER TABLE `fd_poll_answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lang` (`lang`);

--
-- Indexes for table `fd_poll_questions`
--
ALTER TABLE `fd_poll_questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lang` (`lang`);

--
-- Indexes for table `fd_poll_votes`
--
ALTER TABLE `fd_poll_votes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lang` (`lang`);

--
-- Indexes for table `fd_private_msg`
--
ALTER TABLE `fd_private_msg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fd_ratings`
--
ALTER TABLE `fd_ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fd_salis`
--
ALTER TABLE `fd_salis`
  ADD PRIMARY KEY (`iso`);

--
-- Indexes for table `fd_siuntiniai`
--
ALTER TABLE `fd_siuntiniai`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `lang` (`lang`);

--
-- Indexes for table `fd_straipsniai`
--
ALTER TABLE `fd_straipsniai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lang` (`lang`);

--
-- Indexes for table `fd_users`
--
ALTER TABLE `fd_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nick` (`nick`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fd_admin_chat`
--
ALTER TABLE `fd_admin_chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fd_chat_box`
--
ALTER TABLE `fd_chat_box`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `fd_duk`
--
ALTER TABLE `fd_duk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fd_d_forumai`
--
ALTER TABLE `fd_d_forumai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fd_d_straipsniai`
--
ALTER TABLE `fd_d_straipsniai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fd_d_temos`
--
ALTER TABLE `fd_d_temos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fd_d_zinute`
--
ALTER TABLE `fd_d_zinute`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fd_galerija`
--
ALTER TABLE `fd_galerija`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fd_grupes`
--
ALTER TABLE `fd_grupes`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `fd_knyga`
--
ALTER TABLE `fd_knyga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fd_kom`
--
ALTER TABLE `fd_kom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fd_logai`
--
ALTER TABLE `fd_logai`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fd_naujienos`
--
ALTER TABLE `fd_naujienos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `fd_newsgetters`
--
ALTER TABLE `fd_newsgetters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `fd_nuorodos`
--
ALTER TABLE `fd_nuorodos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fd_nustatymai`
--
ALTER TABLE `fd_nustatymai`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `fd_page`
--
ALTER TABLE `fd_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `fd_panel`
--
ALTER TABLE `fd_panel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `fd_pa_data`
--
ALTER TABLE `fd_pa_data`
  MODIFY `id` int(9) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `fd_pa_page_settings`
--
ALTER TABLE `fd_pa_page_settings`
  MODIFY `id` int(9) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `fd_poll_answers`
--
ALTER TABLE `fd_poll_answers`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fd_poll_questions`
--
ALTER TABLE `fd_poll_questions`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fd_poll_votes`
--
ALTER TABLE `fd_poll_votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fd_private_msg`
--
ALTER TABLE `fd_private_msg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fd_ratings`
--
ALTER TABLE `fd_ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fd_siuntiniai`
--
ALTER TABLE `fd_siuntiniai`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fd_straipsniai`
--
ALTER TABLE `fd_straipsniai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fd_users`
--
ALTER TABLE `fd_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
