-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 05, 2023 at 12:34 AM
-- Server version: 5.7.23-23
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `swaga21h_dbm`
--

-- --------------------------------------------------------

--
-- Table structure for table `dmb_admin`
--

DROP TABLE IF EXISTS `dmb_admin`;
CREATE TABLE `dmb_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(30) CHARACTER SET latin1 NOT NULL,
  `admin_password` varchar(225) CHARACTER SET latin1 NOT NULL,
  `admin_type` varchar(20) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dmb_admin`
--

INSERT INTO `dmb_admin` (`admin_id`, `admin_username`, `admin_password`, `admin_type`) VALUES
(1, 'master', '21232f297a57a5a743894a0e4a801fc3', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `dmb_data`
--

DROP TABLE IF EXISTS `dmb_data`;
CREATE TABLE `dmb_data` (
  `id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `json_data` longtext COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('Yes','No') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Yes',
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dmb_data`
--

INSERT INTO `dmb_data` (`id`, `type`, `category_id`, `subcategory_id`, `name`, `image`, `json_data`, `slug`, `status`, `update_at`) VALUES
(1, 'banner', 0, 0, 'Test', 'smallthmb_711341674318998quality-2.jpg', '{\"action\":\"edit\",\"id\":\"1\",\"type\":\"banner\",\"name\":\"Test\",\"description\":\"<p>Lorem ipsum dolor sit amet, nam te agam soleat cetero, his ad exerci quodsi sententiae putent bonorum ne.<\\/p>\"}', 'test', 'Yes', '2023-01-21 16:36:38'),
(2, 'banner', 0, 0, 'testingg', 'smallthmb_8905361674319905quality-2.jpg', '{\"action\":\"edit\",\"id\":\"2\",\"type\":\"banner\",\"name\":\"testingg\",\"description\":\"<p>Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley<\\/p>\"}', 'testingg', 'Yes', '2023-01-21 16:51:45'),
(67, 'cms', 0, 0, 'Class Room', '', '{\"action\":\"edit\",\"id\":\"67\",\"type\":\"cms\",\"name\":\"Class Room\",\"description\":\"<p>Lorem Ipsum is simply dummy text of the printing<\\/p>\"}', 'class-room', 'Yes', '2023-01-21 17:05:07'),
(68, 'headerbanner', 0, 0, 'Home Banner Title', '', '{\"action\":\"add\",\"id\":\"\",\"type\":\"headerbanner\",\"page_name\":\"Home\",\"name\":\"Home Banner Title\",\"description\":\"<p>Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley<\\/p>\"}', 'home-banner-title', 'Yes', '2023-01-21 17:00:51'),
(69, 'cms', 0, 0, 'Teacher', 'smallthmb_39539916743687030002.jpeg', '{\"action\":\"edit\",\"id\":\"69\",\"type\":\"cms\",\"name\":\"Teacher\",\"description\":\"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis.<\\/p>\"}', 'teacher', 'Yes', '2023-01-22 06:25:03'),
(70, 'cms', 0, 0, 'Curriculum', '', '{\"action\":\"add\",\"id\":\"\",\"type\":\"cms\",\"name\":\"Curriculum\",\"description\":\"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis.<\\/p>\"}', 'curriculum', 'Yes', '2023-01-21 17:09:41'),
(71, 'cms', 0, 0, 'Do you want to prepare your future with us?', '', '{\"action\":\"add\",\"id\":\"\",\"type\":\"cms\",\"name\":\"Do you want to prepare your future with us?\",\"description\":\"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis.<\\/p>\"}', 'do-you-want-to-prepare-your-future-with-us', 'Yes', '2023-01-21 17:11:14'),
(72, 'cms', 0, 0, 'Our Mision', 'smallthmb_7224121674322292bg-about.jpg', '{\"action\":\"add\",\"id\":\"\",\"type\":\"cms\",\"name\":\"Our Mision\",\"description\":\"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<\\/p>\"}', 'our-mision', 'Yes', '2023-01-21 17:31:32'),
(73, 'cms', 0, 0, 'Build Smart Generation', '', '{\"action\":\"add\",\"id\":\"\",\"type\":\"cms\",\"name\":\"Build Smart Generation\",\"description\":\"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.<\\/p>\"}', 'build-smart-generation', 'Yes', '2023-01-21 17:34:05'),
(74, 'cms', 0, 0, 'Build Smart Generation', '', '{\"action\":\"add\",\"id\":\"\",\"type\":\"cms\",\"name\":\"Build Smart Generation\",\"description\":\"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.<\\/p>\"}', 'build-smart-generation-74', 'Yes', '2023-01-21 17:34:24'),
(75, 'cms', 0, 0, 'Our Facilities', 'smallthmb_9499861674322555img-facilities.jpg', '{\"action\":\"add\",\"id\":\"\",\"type\":\"cms\",\"name\":\"Our Facilities\",\"description\":\"\"}', 'our-facilities', 'Yes', '2023-01-21 17:35:55'),
(76, 'cms', 0, 0, 'Studio Center 1', '', '{\"action\":\"add\",\"id\":\"\",\"type\":\"cms\",\"name\":\"Studio Center\",\"description\":\"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<\\/p>\"}', 'studio-center', 'Yes', '2023-01-21 17:53:59'),
(77, 'cms', 0, 0, 'Studio Center 2', '', '{\"action\":\"add\",\"id\":\"\",\"type\":\"cms\",\"name\":\"Studio Center\",\"description\":\"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<\\/p>\"}', 'studio-center', 'Yes', '2023-01-21 17:54:05'),
(78, 'cms', 0, 0, 'Studio Center 3', '', '{\"action\":\"add\",\"id\":\"\",\"type\":\"cms\",\"name\":\"Studio Center\",\"description\":\"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<\\/p>\"}', 'studio-center', 'Yes', '2023-01-21 17:54:13'),
(79, 'cms', 0, 0, 'Studio Center 4', '', '{\"action\":\"add\",\"id\":\"\",\"type\":\"cms\",\"name\":\"Studio Center\",\"description\":\"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<\\/p>\"}', 'studio-center', 'Yes', '2023-01-21 17:54:19'),
(80, 'cms', 0, 0, 'Head Master Desk', 'smallthmb_6261071674323903bg-facilitiespage.jpg', '{\"action\":\"add\",\"id\":\"\",\"type\":\"cms\",\"name\":\"Head Master Desk\",\"description\":\"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Lorem ipsum dolor sit amet,<br \\/><br \\/> consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Lorem ipsum dolor sit amet, <br \\/> consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Lorem ipsum dolor sit amet,<br \\/><br \\/> consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Lorem ipsum dolor sit amet, <br \\/> consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.<\\/p>\"}', 'head-master-desk', 'Yes', '2023-01-21 17:58:23'),
(81, 'cms', 0, 0, 'Our Testimonials', 'smallthmb_3008991674324227img-mission-1.png', '{\"action\":\"edit\",\"id\":\"81\",\"type\":\"cms\",\"name\":\"Our Testimonials\",\"description\":\"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.<\\/p>\"}', 'our-testimonials', 'Yes', '2023-01-21 18:03:47'),
(82, 'cms', 0, 0, 'Graduation 2022', '', '{\"action\":\"add\",\"id\":\"\",\"type\":\"cms\",\"name\":\"Graduation 2022\",\"description\":\"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.<\\/p>\"}', 'graduation-2022', 'Yes', '2023-01-21 18:05:15'),
(83, 'testimonial', 0, 0, 'Teast teast1', 'smallthmb_2382071674324569icon-testi-1.jpg', '{\"action\":\"add\",\"id\":\"\",\"type\":\"testimonial\",\"name\":\"Teast teast1\",\"designation\":\"\",\"description\":\"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<\\/p>\"}', 'teast-teast1', 'Yes', '2023-01-21 18:09:29'),
(84, 'testimonial', 0, 0, 'test 2', 'smallthmb_2813431674324592icon-testi-2.jpg', '{\"action\":\"add\",\"id\":\"\",\"type\":\"testimonial\",\"name\":\"test 2\",\"designation\":\"student\",\"description\":\"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<\\/p>\"}', 'test-2', 'Yes', '2023-01-21 18:09:52'),
(85, 'testimonial', 0, 0, 'test student3', 'smallthmb_8190441674324615icon-testi-1.jpg', '{\"action\":\"add\",\"id\":\"\",\"type\":\"testimonial\",\"name\":\"test student3\",\"designation\":\"teacher\",\"description\":\"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<\\/p>\"}', 'test-student3', 'Yes', '2023-01-21 18:10:15'),
(87, 'about', 0, 0, 'About Debipur Milan Vidyapith', 'smallthmb_8528951674325874bg-facilities.jpg', '{\"action\":\"add\",\"id\":\"\",\"type\":\"about\",\"name\":\"About Debipur Milan Vidyapith\",\"description\":\"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore <br \\/><br \\/> magna aliqua. Lorem ipsum dolor sit amet, consectetur a<\\/p>\\r\\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor tempor incididunt<br \\/><br \\/> ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<\\/p>\"}', 'about-debipur-milan-vidyapith', 'Yes', '2023-01-21 18:31:14'),
(88, 'about', 0, 0, 'about 22', 'smallthmb_7356351674325892bg-facilitiespage.jpg', '{\"action\":\"add\",\"id\":\"\",\"type\":\"about\",\"name\":\"about 22\",\"description\":\"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore <br \\/><br \\/> magna aliqua. Lorem ipsum dolor sit amet, consectetur a<\\/p>\\r\\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor tempor incididunt<br \\/><br \\/> ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<\\/p>\"}', 'about-22', 'Yes', '2023-01-21 18:31:32'),
(89, 'about', 0, 0, 'about3', 'smallthmb_4391081674325910bg-contact.jpg', '{\"action\":\"add\",\"id\":\"\",\"type\":\"about\",\"name\":\"about3\",\"description\":\"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore <br \\/><br \\/> magna aliqua. Lorem ipsum dolor sit amet, consectetur a<\\/p>\\r\\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor tempor incididunt<br \\/><br \\/> ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<\\/p>\"}', 'about3', 'Yes', '2023-01-21 18:31:50'),
(90, 'headerbanner', 0, 0, 'Swamiji', '', '{\"action\":\"add\",\"id\":\"\",\"type\":\"headerbanner\",\"page_name\":\"About\",\"name\":\"Swamiji\",\"description\":\"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.<\\/p>\"}', 'swamiji', 'Yes', '2023-01-21 18:34:37'),
(91, 'headerbanner', 0, 0, 'Swamiji', '', '{\"action\":\"edit\",\"id\":\"91\",\"type\":\"headerbanner\",\"page_name\":\"History\",\"name\":\"Swamiji\",\"description\":\"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.<\\/p>\"}', 'swamiji-91', 'Yes', '2023-01-21 18:52:09'),
(92, 'history', 0, 0, 'Build Smart Generation', 'smallthmb_2239881674327517bg-facilitiespage.jpg', '{\"action\":\"add\",\"id\":\"\",\"type\":\"history\",\"name\":\"Build Smart Generation\",\"description\":\"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore<br \\/><br \\/>magna aliqua. Lorem ipsum dolor sit amet, consectetur a<\\/p>\\r\\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor tempor incididunt<br \\/><br \\/>ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<\\/p>\"}', 'build-smart-generation', 'Yes', '2023-01-21 18:58:37'),
(93, 'headerbanner', 0, 0, 'Teacher', '', '{\"action\":\"add\",\"id\":\"\",\"type\":\"headerbanner\",\"page_name\":\"Faculty \",\"name\":\"Teacher\",\"description\":\"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.<\\/p>\"}', 'teacher', 'Yes', '2023-01-21 19:07:07'),
(94, 'headerbanner', 0, 0, 'Teacher second', '', '{\"action\":\"edit\",\"id\":\"94\",\"type\":\"headerbanner\",\"page_name\":\"Gallery\",\"name\":\"Teacher second\",\"description\":\"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.<\\/p>\"}', 'teacher-second', 'Yes', '2023-01-21 19:08:40'),
(95, 'headerbanner', 0, 0, 'Teacher notice', '', '{\"action\":\"edit\",\"id\":\"95\",\"type\":\"headerbanner\",\"page_name\":\"Notice\",\"name\":\"Teacher notice\",\"description\":\"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.<\\/p>\"}', 'teacher-notice', 'Yes', '2023-01-21 19:09:48'),
(96, 'headerbanner', 0, 0, 'Test by Test', '', '{\"action\":\"add\",\"id\":\"\",\"type\":\"headerbanner\",\"page_name\":\"Contact\",\"name\":\"Test by Test\",\"description\":\"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.<\\/p>\"}', 'test-by-test', 'Yes', '2023-01-22 04:46:39'),
(97, 'gallery', 0, 0, 'Test', 'smallthmb_7856001674580796bg-about.jpg', '{\"action\":\"edit\",\"id\":\"97\",\"type\":\"gallery\",\"name\":\"Test\"}', 'test', 'Yes', '2023-01-24 17:19:56'),
(98, 'facuilty', 0, 0, 'Rajib Jana', 'smallthmb_3871431674587908bg-about.jpg', '{\"action\":\"add\",\"id\":\"\",\"type\":\"facuilty\",\"name\":\"Rajib Jana\",\"designation\":\"tat\",\"degree\":\"bca, mba, phd\",\"description\":\"\"}', 'rajib-jana', 'Yes', '2023-01-24 19:18:28'),
(99, 'facuilty', 0, 0, 'Kisholoy', 'smallthmb_8182731674587937bg-elementor.jpg', '{\"action\":\"add\",\"id\":\"\",\"type\":\"facuilty\",\"name\":\"Kisholoy\",\"designation\":\"asst teach\",\"degree\":\"bhdfds, dsfdsf,dsfsdfds\",\"description\":\"\"}', 'kisholoy', 'Yes', '2023-01-24 19:18:57'),
(100, 'notice', 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet', 'smallthmb_3082351674588639bg-about.jpg', '{\"action\":\"edit\",\"id\":\"100\",\"type\":\"notice\",\"name\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet\",\"date\":\"\",\"description\":\"\"}', 'lorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elit-sed-do-eiusmod-tempor-incididunt-ut-labore-et-dolore-magna-aliqua-lorem-ipsum-dolor-sit-amet-100', 'Yes', '2023-01-24 19:33:17'),
(101, 'notice', 0, 0, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet', 'smallthmb_8127171674588649bg-contact.jpg', '{\"action\":\"edit\",\"id\":\"101\",\"type\":\"notice\",\"name\":\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet\",\"date\":\"\",\"description\":\"\"}', 'lorem-ipsum-dolor-sit-amet-consectetur-adipiscing-elit-sed-do-eiusmod-tempor-incididunt-ut-labore-et-dolore-magna-aliqua-lorem-ipsum-dolor-sit-amet', 'Yes', '2023-01-24 19:33:12'),
(102, 'cms', 0, 0, 'Contact Us', 'smallthmb_4926991674589482img-facilities.jpg', '{\"action\":\"edit\",\"id\":\"102\",\"type\":\"cms\",\"name\":\"Contact Us\",\"description\":\"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis. its tttest<\\/p>\"}', 'contact-us', 'Yes', '2023-01-24 19:44:42');

-- --------------------------------------------------------

--
-- Table structure for table `dmb_seo`
--

DROP TABLE IF EXISTS `dmb_seo`;
CREATE TABLE `dmb_seo` (
  `id` int(11) NOT NULL,
  `pageurl` varchar(255) CHARACTER SET latin1 NOT NULL,
  `meta_data` longtext CHARACTER SET latin1 NOT NULL,
  `meta_key` longtext CHARACTER SET latin1 NOT NULL,
  `status` enum('1','0') CHARACTER SET latin1 NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dmb_seo`
--

INSERT INTO `dmb_seo` (`id`, `pageurl`, `meta_data`, `meta_key`, `status`) VALUES
(1, 'SEO', '<p>Invictus Corporate Solutions is a knowledge centric and value driven firm committed to offering our clients seamless services in the area of resource raising, transaction &amp; corporate advisory support and strategy consulting We strive to add value to the business of our clients through focused and specialized advisory&nbsp;</p>', '<p>Invictus Corporate Solutions is a knowledge centric and value driven firm committed to offering our clients seamless services in the area of resource raising, transaction &amp; corporate advisory support and strategy consulting We strive to add value to the business of our clients through focused and specialized advisory and consulting services</p>', '1');

-- --------------------------------------------------------

--
-- Table structure for table `dmb_settings`
--

DROP TABLE IF EXISTS `dmb_settings`;
CREATE TABLE `dmb_settings` (
  `id` int(11) NOT NULL,
  `config_type` varchar(256) CHARACTER SET latin1 NOT NULL,
  `config_val` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `dmb_settings`
--

INSERT INTO `dmb_settings` (`id`, `config_type`, `config_val`) VALUES
(1, 'admin_email', 'swagata.infotech@gmail.com'),
(2, 'facebook_link', 'https://www.facebook.com/swagatainfotech'),
(3, 'twitter_link', 'https://twitter.com/?lang=en'),
(6, 'youtube_link', 'http://youtube.com'),
(17, 'googleplus_link', 'http://www.google.com'),
(22, 'linkedin_link', ''),
(23, 'contact_email', 'swagata.infotech@gmail.com'),
(24, 'corporate_office_address', '106 Santoshpur Avenue, Lake Terrace, near Santoshpur Lake, Kolkata: 700075'),
(25, 'contact_no_1', '+91-9073861954'),
(26, 'contact_no_2', ''),
(27, 'product_bigthmb_width', ''),
(28, 'product_bigthmb_height', ''),
(29, 'product_smallthmb_width', ''),
(30, 'product_smallthmb_height', ''),
(31, 'banner_width', ''),
(32, 'banner_height', ''),
(33, 'additionalbanner_width', ''),
(34, 'additionalbanner_height', ''),
(35, 'landline_no', ''),
(36, 'cat_nav_limit', ''),
(39, '', ''),
(40, 'admin_email', 'swagata.infotech@gmail.com'),
(41, 'admin_email', 'swagata.infotech@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dmb_admin`
--
ALTER TABLE `dmb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `dmb_data`
--
ALTER TABLE `dmb_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dmb_seo`
--
ALTER TABLE `dmb_seo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dmb_settings`
--
ALTER TABLE `dmb_settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dmb_admin`
--
ALTER TABLE `dmb_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dmb_data`
--
ALTER TABLE `dmb_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `dmb_seo`
--
ALTER TABLE `dmb_seo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dmb_settings`
--
ALTER TABLE `dmb_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
