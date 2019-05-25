-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2019 at 07:15 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `matrimonial_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `age_from`
--

CREATE TABLE IF NOT EXISTS `age_from` (
  `Age_id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `Username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `age_from`
--

INSERT INTO `age_from` (`Age_id`, `Name`, `Status`, `Username`) VALUES
(1, '18', 1, 'pr'),
(2, '19', 1, 'pr'),
(3, '20', 1, 'pr'),
(4, '21', 1, 'pr'),
(5, '22', 1, 'pr'),
(6, '23', 1, 'pr'),
(7, '24', 1, 'pr'),
(8, '25', 1, 'pr'),
(9, '26', 1, 'pr'),
(10, '27', 1, 'pr'),
(11, '28', 1, 'pr'),
(12, '29', 1, 'pr'),
(13, '30', 1, 'pr'),
(14, '31', 1, 'pr'),
(15, '32', 1, 'pr'),
(16, '33', 1, 'pr'),
(17, '34', 1, 'pr'),
(18, '35', 1, 'pr'),
(19, '36', 1, 'pr'),
(20, '37', 1, 'pr'),
(21, '38', 1, 'pr'),
(22, '39', 1, 'pr'),
(23, '40', 1, 'pr'),
(24, '41', 1, 'pr'),
(25, '42', 1, 'pr'),
(26, '43', 1, 'pr'),
(27, '44', 1, 'pr'),
(28, '45', 1, 'pr'),
(29, '46', 1, 'pr'),
(30, '47', 1, 'pr'),
(31, '48', 1, 'pr'),
(32, '49', 1, 'pr'),
(33, '50', 1, 'pr'),
(34, '51', 1, 'pr'),
(35, '52', 1, 'pr'),
(36, '53', 1, 'pr'),
(37, '54', 1, 'pr'),
(38, '55', 1, 'pr'),
(39, '56', 1, 'pr'),
(40, '57', 1, 'pr'),
(41, '58', 1, 'pr'),
(42, '59', 1, 'pr'),
(43, '60', 1, 'pr'),
(44, '61', 1, 'pr'),
(45, '62', 1, 'pr'),
(46, '63', 1, 'pr'),
(47, '64', 1, 'pr'),
(48, '65', 1, 'pr'),
(49, '66', 1, 'pr'),
(50, '67', 1, 'pr'),
(51, '68', 1, 'pr'),
(52, '69', 1, 'pr'),
(53, '70', 1, 'pr'),
(54, '71', 1, 'pr');

-- --------------------------------------------------------

--
-- Table structure for table `age_to`
--

CREATE TABLE IF NOT EXISTS `age_to` (
  `Age_id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `Username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `age_to`
--

INSERT INTO `age_to` (`Age_id`, `Name`, `Status`, `Username`) VALUES
(1, '18', 1, 'pr'),
(2, '19', 1, 'pr'),
(3, '20', 1, 'pr'),
(4, '21', 1, 'pr'),
(5, '22', 1, 'pr'),
(6, '23', 1, 'pr'),
(7, '24', 1, 'pr'),
(8, '25', 1, 'pr'),
(9, '26', 1, 'pr'),
(10, '27', 1, 'pr'),
(11, '28', 1, 'pr'),
(12, '29', 1, 'pr'),
(13, '30', 1, 'pr'),
(14, '31', 1, 'pr'),
(15, '32', 1, 'pr'),
(16, '33', 1, 'pr'),
(17, '34', 1, 'pr'),
(18, '35', 1, 'pr'),
(19, '36', 1, 'pr'),
(20, '37', 1, 'pr'),
(21, '38', 1, 'pr'),
(22, '39', 1, 'pr'),
(23, '40', 1, 'pr'),
(24, '41', 1, 'pr'),
(25, '42', 1, 'pr'),
(26, '43', 1, 'pr'),
(27, '44', 1, 'pr'),
(28, '45', 1, 'pr'),
(29, '46', 1, 'pr'),
(30, '47', 1, 'pr'),
(31, '48', 1, 'pr'),
(32, '49', 1, 'pr'),
(33, '50', 1, 'pr'),
(34, '51', 1, 'pr'),
(35, '52', 1, 'pr'),
(36, '53', 1, 'pr'),
(37, '54', 1, 'pr'),
(38, '55', 1, 'pr'),
(39, '56', 1, 'pr'),
(40, '57', 1, 'pr'),
(41, '58', 1, 'pr'),
(42, '59', 1, 'pr'),
(43, '60', 1, 'pr'),
(44, '61', 1, 'pr'),
(45, '62', 1, 'pr'),
(46, '63', 1, 'pr'),
(47, '64', 1, 'pr'),
(48, '65', 1, 'pr'),
(49, '66', 1, 'pr'),
(50, '67', 1, 'pr'),
(51, '68', 1, 'pr'),
(52, '69', 1, 'pr'),
(53, '70', 1, 'pr'),
(54, '71', 1, 'pr');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `C_id` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `Username` varchar(50) NOT NULL,
  PRIMARY KEY (`C_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`C_id`, `Name`, `Status`, `Username`) VALUES
('1', 'Afghanistan', 1, 'pr'),
('10', 'Austria', 1, 'pr'),
('100', 'Liberia', 1, 'pr'),
('101', 'Libya', 1, 'pr'),
('102', 'Liechtenstein', 1, 'pr'),
('103', 'Lithuania', 1, 'pr'),
('104', 'Luxembourg', 1, 'pr'),
('105', 'Madagascar', 1, 'pr'),
('106', 'Malawi', 1, 'pr'),
('107', 'Malaysia', 1, 'pr'),
('108', 'Maldives', 1, 'pr'),
('109', 'Mali', 1, 'pr'),
('11', 'Azerbaijan', 1, 'pr'),
('110', 'Malta', 1, 'pr'),
('111', 'Marshall Islands', 1, 'pr'),
('112', 'Mauritania', 1, 'pr'),
('113', 'Mauritius', 1, 'pr'),
('114', 'Mexico', 1, 'pr'),
('115', 'Micronesia, Federated States of', 1, 'pr'),
('116', 'Moldova', 1, 'pr'),
('117', 'Monaco', 1, 'pr'),
('118', 'Mongolia', 1, 'pr'),
('119', 'Montenegro', 1, 'pr'),
('12', 'The Bahamas', 1, 'pr'),
('120', 'Morocco', 1, 'pr'),
('121', 'Mozambique', 1, 'pr'),
('122', 'Myanmar (Burma)', 1, 'pr'),
('123', 'Namibia', 1, 'pr'),
('124', 'Nauru', 1, 'pr'),
('125', 'Nepal', 1, 'pr'),
('126', 'Netherlands', 1, 'pr'),
('127', 'New Zealand', 1, 'pr'),
('128', 'Nicaragua', 1, 'pr'),
('129', 'Niger', 1, 'pr'),
('13', 'Bahrain', 1, 'pr'),
('130', 'Nigeria', 1, 'pr'),
('131', 'North Macedonia', 1, 'pr'),
('132', 'Norway', 1, 'pr'),
('133', 'Oman', 1, 'pr'),
('134', 'Pakistan', 1, 'pr'),
('135', 'Palau', 1, 'pr'),
('136', 'Panama', 1, 'pr'),
('137', 'Papua New Guinea', 1, 'pr'),
('138', 'Paraguay', 1, 'pr'),
('139', 'Peru', 1, 'pr'),
('14', 'Bangladesh', 1, 'pr'),
('140', 'Philippines', 1, 'pr'),
('141', 'Poland', 1, 'pr'),
('142', 'Portugal', 1, 'pr'),
('143', 'Qatar', 1, 'pr'),
('144', 'Romania', 1, 'pr'),
('145', 'Russia', 1, 'pr'),
('146', 'Rwanda', 1, 'pr'),
('147', 'Saint Kitts and Nevis', 1, 'pr'),
('148', 'Saint Lucia', 1, 'pr'),
('149', 'Saint Vincent and the Grenadines', 1, 'pr'),
('15', 'Barbados', 1, 'pr'),
('150', 'Samoa', 1, 'pr'),
('151', 'San Marino', 1, 'pr'),
('152', 'Sao Tome and Principe', 1, 'pr'),
('153', 'Saudi Arabia', 1, 'pr'),
('154', 'Senegal', 1, 'pr'),
('155', 'Serbia', 1, 'pr'),
('156', 'Seychelles', 1, 'pr'),
('157', 'Sierra Leone', 1, 'pr'),
('158', 'Singapore', 1, 'pr'),
('159', 'Slovakia', 1, 'pr'),
('16', 'Belarus', 1, 'pr'),
('160', 'Slovenia', 1, 'pr'),
('161', 'Solomon Islands', 1, 'pr'),
('162', 'Somalia', 1, 'pr'),
('163', 'South Africa', 1, 'pr'),
('164', 'Spain', 1, 'pr'),
('165', 'Sri Lanka', 1, 'pr'),
('166', 'Sudan', 1, 'pr'),
('167', 'Sudan, South', 1, 'pr'),
('168', 'Suriname', 1, 'pr'),
('169', 'Sweden', 1, 'pr'),
('17', 'Belgium', 1, 'pr'),
('170', 'Switzerland', 1, 'pr'),
('171', 'Syria', 1, 'pr'),
('172', 'Taiwan', 1, 'pr'),
('173', 'Tajikistan', 1, 'pr'),
('174', 'Tanzania', 1, 'pr'),
('175', 'Thailand', 1, 'pr'),
('176', 'Togo', 1, 'pr'),
('177', 'Tonga', 1, 'pr'),
('178', 'Trinidad and Tobago', 1, 'pr'),
('179', 'Tunisia', 1, 'pr'),
('18', 'Belize', 1, 'pr'),
('180', 'Turkey', 1, 'pr'),
('181', 'Turkmenistan', 1, 'pr'),
('182', 'Tuvalu', 1, 'pr'),
('183', 'Uganda', 1, 'pr'),
('184', 'Ukraine', 1, 'pr'),
('185', 'United Arab Emirates', 1, 'pr'),
('186', 'United Kingdom', 1, 'pr'),
('187', 'United States', 1, 'pr'),
('188', 'Uruguay', 1, 'pr'),
('189', 'Uzbekistan', 1, 'pr'),
('19', 'Benin', 1, 'pr'),
('190', 'Vanuatu', 1, 'pr'),
('191', 'Vatican City', 1, 'pr'),
('192', 'Venezuela', 1, 'pr'),
('193', 'Vietnam', 1, 'pr'),
('194', 'Yemen', 1, 'pr'),
('195', 'Zambia', 1, 'pr'),
('196', 'Zimbabwe', 1, 'pr'),
('2', 'Albania', 1, 'pr'),
('20', 'Bhutan', 1, 'pr'),
('21', 'Bolivia', 1, 'pr'),
('22', 'Bosnia and Herzegovina', 1, 'pr'),
('23', 'Botswana', 1, 'pr'),
('24', 'Brazil', 1, 'pr'),
('25', 'Brunei', 1, 'pr'),
('26', 'Bulgaria', 1, 'pr'),
('27', 'Burkina Faso', 1, 'pr'),
('28', 'Burundi', 1, 'pr'),
('29', 'Cabo Verde', 1, 'pr'),
('3', 'Algeria', 1, 'pr'),
('30', 'Cambodia', 1, 'pr'),
('31', 'Cameroon', 1, 'pr'),
('32', 'Canada', 1, 'pr'),
('33', 'Central African Republic', 1, 'pr'),
('34', 'Chad', 1, 'pr'),
('35', 'Chile', 1, 'pr'),
('36', 'China', 1, 'pr'),
('37', 'Colombia', 1, 'pr'),
('38', 'Comoros', 1, 'pr'),
('39', 'Congo, Democratic Republic of the', 1, 'pr'),
('4', 'Andorra', 1, 'pr'),
('40', 'Congo, Republic of the', 1, 'pr'),
('41', 'Costa Rica', 1, 'pr'),
('42', 'C?te d?Ivoire', 1, 'pr'),
('43', 'Croatia', 1, 'pr'),
('44', 'Cuba', 1, 'pr'),
('45', 'Cyprus', 1, 'pr'),
('46', 'Czech Republic', 1, 'pr'),
('47', 'Denmark', 1, 'pr'),
('48', 'Djibouti', 1, 'pr'),
('49', 'Dominica', 1, 'pr'),
('5', 'Angola', 1, 'pr'),
('50', 'Dominican Republic', 1, 'pr'),
('51', 'East Timor (Timor-Leste)', 1, 'pr'),
('52', 'Ecuador', 1, 'pr'),
('53', 'Egypt', 1, 'pr'),
('54', 'El Salvador', 1, 'pr'),
('55', 'Equatorial Guinea', 1, 'pr'),
('56', 'Eritrea', 1, 'pr'),
('57', 'Estonia', 1, 'pr'),
('58', 'Eswatini', 1, 'pr'),
('59', 'Ethiopia', 1, 'pr'),
('6', 'Antigua and Barbuda', 1, 'pr'),
('60', 'Fiji', 1, 'pr'),
('61', 'Finland', 1, 'pr'),
('62', 'France', 1, 'pr'),
('63', 'Gabon', 1, 'pr'),
('64', 'The Gambia', 1, 'pr'),
('65', 'Georgia', 1, 'pr'),
('66', 'Germany', 1, 'pr'),
('67', 'Ghana', 1, 'pr'),
('68', 'Greece', 1, 'pr'),
('69', 'Grenada', 1, 'pr'),
('7', 'Argentina', 1, 'pr'),
('70', 'Guatemala', 1, 'pr'),
('71', 'Guinea', 1, 'pr'),
('72', 'Guinea-Bissau', 1, 'pr'),
('73', 'Guyana', 1, 'pr'),
('74', 'Haiti', 1, 'pr'),
('75', 'Honduras', 1, 'pr'),
('76', 'Hungary', 1, 'pr'),
('77', 'Iceland', 1, 'pr'),
('78', 'India', 1, 'pr'),
('79', 'Indonesia', 1, 'pr'),
('8', 'Armenia', 1, 'pr'),
('80', 'Iran', 1, 'pr'),
('81', 'Iraq', 1, 'pr'),
('82', 'Ireland', 1, 'pr'),
('83', 'Israel', 1, 'pr'),
('84', 'Italy', 1, 'pr'),
('85', 'Jamaica', 1, 'pr'),
('86', 'Japan', 1, 'pr'),
('87', 'Jordan', 1, 'pr'),
('88', 'Kazakhstan', 1, 'pr'),
('89', 'Kenya', 1, 'pr'),
('9', 'Australia', 1, 'pr'),
('90', 'Kiribati', 1, 'pr'),
('91', 'Korea, North', 1, 'pr'),
('92', 'Korea, South', 1, 'pr'),
('93', 'Kosovo', 1, 'pr'),
('94', 'Kuwait', 1, 'pr'),
('95', 'Kyrgyzstan', 1, 'pr'),
('96', 'Laos', 1, 'pr'),
('97', 'Latvia', 1, 'pr'),
('98', 'Lebanon', 1, 'pr'),
('99', 'Lesotho', 1, 'pr');

-- --------------------------------------------------------

--
-- Table structure for table `describe_yourself`
--

CREATE TABLE IF NOT EXISTS `describe_yourself` (
  `Username` varchar(20) NOT NULL,
  `Physical_disability` varchar(30) NOT NULL,
  `About_yourself` varchar(180) NOT NULL,
  `Address` varchar(120) NOT NULL,
  `Mobile_number` varchar(15) NOT NULL,
  `Upload_pic` varchar(500) NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `describe_yourself`
--

INSERT INTO `describe_yourself` (`Username`, `Physical_disability`, `About_yourself`, `Address`, `Mobile_number`, `Upload_pic`) VALUES
('Jyoti99Pandey', 'No', 'Love myself I do. Not everything, but I love the good as well as the bad. I love my crazy lifestyle, and I love my hard discipline. I love my freedom of speech and the way my eyes ', 'Pangchaura, Kanda, Bageshwar', '+91-8404941098', 'Jyoti99Pandey.jpg'),
('MasoomMishra', 'No', 'Love myself I do. Not everything, but I love the good as well as the bad. I love my crazy lifestyle, and I love my hard discipline. I love my freedom of speech and the way my eyes ', 'c/o-Kiran Tiwari, Brahmpuri Muhallah, Gali no-1, Raghunathpur, Motihari, East Champaran, Bihar', '+91-8400866618', 'Masoom_Mishra.jpg'),
('PoojaBohra', 'No', 'Love myself I do. Not everything, but I love the good as well as the bad. I love my crazy lifestyle, and I love my hard discipline. I love my freedom of speech and the way my eyes ', 'Pitoragarh', '+91-8404941098', 'Pooja_Bohra.jpg'),
('PratikMishra', 'No', 'Love myself I do. Not everything, but I love the good as well as the bad. I love my crazy lifestyle, and I love my hard discipline. I love my freedom of speech and the way my eyes ', 'c/o-Kiran Tiwari, Brahmpuri Muhallah, Gali no-1, Raghunathpur, Motihari, East Champaran, Bihar', '+91-8404941098', 'Pratik_Mishra.jpg'),
('PreetiKushwaha', 'No', 'Love myself I do. Not everything, but I love the good as well as the bad. I love my crazy lifestyle, and I love my hard discipline. I love my freedom of speech and the way my eyes ', 'Haldwani', '+91-9997122129', 'Preeti_Kushwaha.jpg'),
('RaviPandey', 'No', 'I hate myself because i have no girlfriend, the reason is i''m chichora. ', 'Unchapul', '+91-9987482065', 'Ravi_Pandey.jpg'),
('Satyam Kumar', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `education_&_career_details`
--

CREATE TABLE IF NOT EXISTS `education_&_career_details` (
  `Username` varchar(20) NOT NULL,
  `Education_field` varchar(80) NOT NULL,
  `Education_level` varchar(80) NOT NULL,
  `Graduation_clg_name` varchar(80) NOT NULL DEFAULT 'NA',
  `pg_clg_name` varchar(80) NOT NULL DEFAULT 'NA',
  `currently_working_with` varchar(80) NOT NULL,
  `desigination` varchar(80) NOT NULL,
  `Annual_income` varchar(60) NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education_&_career_details`
--

INSERT INTO `education_&_career_details` (`Username`, `Education_field`, `Education_level`, `Graduation_clg_name`, `pg_clg_name`, `currently_working_with`, `desigination`, `Annual_income`) VALUES
('Jyoti99Pandey', 'Computers/IT', 'Bachelors', 'Amrapali Group of Institute, Haldwami, Lamachaur, Shiksha Nagar, Pin-263139', 'Amrapali Group of Institute, Haldwami, Lamachaur, Shiksha Nagar, Pin-263139', 'Not Working', 'Student', 'INR 1 Lac to 2 Lac'),
('MasoomMishra', 'Computers/IT', 'Masters', 'Amrapali Group of Institute, Haldwami, Lamachaur, Shiksha Nagar, Pin-263139', 'Banaras Hindu University', 'Not Working', 'Student', 'INR 1 Lac to 2 Lac'),
('PoojaBohra', 'Computers/IT', 'Bachelors', 'Amrapali Group of Institute, Haldwami, Lamachaur, Shiksha Nagar, Pin-263139', 'Amrapali Group of Institute, Haldwami, Lamachaur, Shiksha Nagar, Pin-263139', 'Not Working', 'Student', 'INR 1 Lac to 2 Lac'),
('PratikMishra', 'Computers/IT', 'Bachelors', 'Amrapali Group of Institute, Haldwami, Lamachaur, Shiksha Nagar, Pin-263139', 'Banaras Hindu University', 'Not Working', 'Student', 'INR 1 Lac to 2 Lac'),
('PreetiKushwaha', 'Computers/IT', 'Bachelors', 'Amrapali Group of Institute, Haldwami, Lamachaur, Shiksha Nagar, Pin-263139', 'Amrapali Group of Institute, Haldwami, Lamachaur, Shiksha Nagar, Pin-263139', 'Not Working', 'Student', 'INR 1 Lac to 2 Lac'),
('RaviPandey', 'Computers/IT', 'Bachelors', 'Amrapali Group of Institute, Haldwami, Lamachaur, Shiksha Nagar, Pin-263139', 'Banaras Hindu University', 'Not Working', 'Student', 'INR 1 Lac to 2 Lac'),
('Satyam Kumar', '', '', 'NA', 'NA', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `education_level`
--

CREATE TABLE IF NOT EXISTS `education_level` (
  `E_id` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `Username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education_level`
--

INSERT INTO `education_level` (`E_id`, `Name`, `Status`, `Username`) VALUES
('1', 'Doctorate', 1, 'pr'),
('2', 'Masters', 1, 'pr'),
('3', 'Honours Degree', 1, 'pr'),
('4', 'Bachelors', 1, 'pr'),
('5', 'Undergraduate', 1, 'pr'),
('6', 'Associates Degree', 1, 'pr'),
('7', 'Diploma', 1, 'pr'),
('8', 'High School', 1, 'pr'),
('9', 'Less than high school', 1, 'pr'),
('10', 'Trade School', 1, 'pr');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `Username` varchar(50) NOT NULL,
  `Comment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Username`, `Comment`) VALUES
('Satyam Kumar', 'Nice Site'),
('Jyoti99Pandey', '');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `Username` varchar(50) NOT NULL,
  `Pic1` varchar(500) NOT NULL,
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`s_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=149 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`Username`, `Pic1`, `s_no`) VALUES
('pratik99kumar@gmail.com', '139.jpg', 139),
('pratik99kumar@gmail.com', '140.jpg', 140),
('pooja@gmail.com', '144.JPG', 144),
('jyoti2000pandey@gmail.com', '147.jpg', 147),
('pratik99kumar@gmail.com', '148.jpg', 148);

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE IF NOT EXISTS `gender` (
  `G_id` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `Username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`G_id`, `Name`, `Status`, `Username`) VALUES
('1', 'Male', 1, 'pr'),
('2', 'Female', 1, 'pr');

-- --------------------------------------------------------

--
-- Table structure for table `height_from`
--

CREATE TABLE IF NOT EXISTS `height_from` (
  `Height_id` varchar(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `Username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `height_from`
--

INSERT INTO `height_from` (`Height_id`, `Name`, `Status`, `Username`) VALUES
('1', '4'' 5'''' - 134cm', 1, 'pr'),
('2', '4'' 6'''' - 137cm', 1, 'pr'),
('3', '4'' 7'''' - 139cm', 1, 'pr'),
('4', '4'' 8'''' - 142cm', 1, 'pr'),
('5', '4'' 9'''' - 144cm', 1, 'pr'),
('6', '4'' 10'''' - 147cm', 1, 'pr'),
('7', '4'' 11'''' - 149cm', 1, 'pr'),
('8', '5'' - 152cm', 1, 'pr'),
('9', '5'' 1'''' - 154cm', 1, 'pr'),
('10', '5'' 2'''' - 157cm', 1, 'pr'),
('11', '5'' 3'''' - 160cm', 1, 'pr'),
('12', '5'' 4'''' - 162cm', 1, 'pr'),
('13', '5'' 5'''' - 165cm', 1, 'pr'),
('14', '5'' 6'''' - 167cm', 1, 'pr'),
('15', '5'' 7'''' - 170cm', 1, 'pr'),
('16', '5'' 8'''' - 172cm', 1, 'pr'),
('17', '5'' 9'''' - 175cm', 1, 'pr'),
('18', '5'' 10'''' - 177cm', 1, 'pr'),
('19', '5'' 11'''' - 180cm', 1, 'pr'),
('20', '6'' - 182cm', 1, 'pr'),
('21', '6'' 1'''' - 185cm', 1, 'pr'),
('22', '6'' 2'''' - 187cm', 1, 'pr'),
('23', '6'' 3'''' - 190cm', 1, 'pr'),
('24', '6'' 4'''' - 193cm', 1, 'pr'),
('25', '6'' 5'''' - 195cm', 1, 'pr'),
('26', '6'' 6'''' - 198cm', 1, 'pr'),
('27', '6'' 7'''' - 200cm', 1, 'pr'),
('28', '6'' 8'''' - 203cm', 1, 'pr'),
('29', '6'' 9'''' - 205cm', 1, 'pr'),
('30', '6'' 10'''' - 208cm', 1, 'pr'),
('31', '6'' 11'''' - 210cm', 1, 'pr'),
('32', '7'' - 213cm', 1, 'pr');

-- --------------------------------------------------------

--
-- Table structure for table `height_to`
--

CREATE TABLE IF NOT EXISTS `height_to` (
  `Height_id` varchar(20) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `Username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `height_to`
--

INSERT INTO `height_to` (`Height_id`, `Name`, `Status`, `Username`) VALUES
('1', '4'' 5'''' - 134cm', 1, 'pr'),
('2', '4'' 6'''' - 137cm', 1, 'pr'),
('3', '4'' 7'''' - 139cm', 1, 'pr'),
('4', '4'' 8'''' - 142cm', 1, 'pr'),
('5', '4'' 9'''' - 144cm', 1, 'pr'),
('6', '4'' 10'''' - 147cm', 1, 'pr'),
('7', '4'' 11'''' - 149cm', 1, 'pr'),
('8', '5'' - 152cm', 1, 'pr'),
('9', '5'' 1'''' - 154cm', 1, 'pr'),
('10', '5'' 2'''' - 157cm', 1, 'pr'),
('11', '5'' 3'''' - 160cm', 1, 'pr'),
('12', '5'' 4'''' - 162cm', 1, 'pr'),
('13', '5'' 5'''' - 165cm', 1, 'pr'),
('14', '5'' 6'''' - 167cm', 1, 'pr'),
('15', '5'' 7'''' - 170cm', 1, 'pr'),
('16', '5'' 8'''' - 172cm', 1, 'pr'),
('17', '5'' 9'''' - 175cm', 1, 'pr'),
('18', '5'' 10'''' - 177cm', 1, 'pr'),
('19', '5'' 11'''' - 180cm', 1, 'pr'),
('20', '6'' - 182cm', 1, 'pr'),
('21', '6'' 1'''' - 185cm', 1, 'pr'),
('22', '6'' 2'''' - 187cm', 1, 'pr'),
('23', '6'' 3'''' - 190cm', 1, 'pr'),
('24', '6'' 4'''' - 193cm', 1, 'pr'),
('25', '6'' 5'''' - 195cm', 1, 'pr'),
('26', '6'' 6'''' - 198cm', 1, 'pr'),
('27', '6'' 7'''' - 200cm', 1, 'pr'),
('28', '6'' 8'''' - 203cm', 1, 'pr'),
('29', '6'' 9'''' - 205cm', 1, 'pr'),
('30', '6'' 10'''' - 208cm', 1, 'pr'),
('31', '6'' 11'''' - 210cm', 1, 'pr'),
('32', '7'' - 213cm', 1, 'pr');

-- --------------------------------------------------------

--
-- Table structure for table `lifestyle_information`
--

CREATE TABLE IF NOT EXISTS `lifestyle_information` (
  `Username` varchar(20) NOT NULL,
  `Age_from` varchar(5) NOT NULL,
  `Age_to` varchar(5) NOT NULL,
  `Height_from` varchar(20) NOT NULL,
  `Height_To` varchar(20) NOT NULL,
  `Body_type` varchar(10) NOT NULL,
  `Skin_jone` varchar(10) NOT NULL,
  `Smoke` varchar(10) NOT NULL,
  `Drink` varchar(10) NOT NULL,
  `Diet` varchar(20) NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lifestyle_information`
--

INSERT INTO `lifestyle_information` (`Username`, `Age_from`, `Age_to`, `Height_from`, `Height_To`, `Body_type`, `Skin_jone`, `Smoke`, `Drink`, `Diet`) VALUES
('Jyoti99Pandey', '18', '20', '5'' 2'''' - 157cm', '5'' 9'''' - 175cm', 'Average', 'Very Fair', 'No', 'No', 'Non-Vegetarian'),
('MasoomMishra', '18', '20', '5'' 2'''' - 157cm', '5'' 9'''' - 175cm', 'Athletic', 'Tan', 'No', 'No', 'Non-Vegetarian'),
('PoojaBohra', '18', '20', '5'' 1'''' - 154cm', '5'' 9'''' - 175cm', 'Average', 'Tan', 'No', 'No', 'Vegetarian'),
('PratikMishra', '18', '20', '5'' 1'''' - 154cm', '5'' 9'''' - 175cm', 'Average', 'Fair', 'No', 'No', 'Non-Vegetarian'),
('PreetiKushwaha', '18', '20', '4'' 10'''' - 147cm', '5'' 6'''' - 167cm', 'Slim', 'Tan', 'No', 'No', 'Non-Vegetarian'),
('RaviPandey', '18', '21', '5'' 1'''' - 154cm', '5'' 9'''' - 175cm', 'Average', 'Fair', 'No', 'No', 'Non-Vegetarian'),
('Satyam Kumar', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `login_table`
--

CREATE TABLE IF NOT EXISTS `login_table` (
  `Username` varchar(30) NOT NULL,
  `Password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `looking_for`
--

CREATE TABLE IF NOT EXISTS `looking_for` (
  `L_id` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `Username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `looking_for`
--

INSERT INTO `looking_for` (`L_id`, `Name`, `Status`, `Username`) VALUES
('1', 'Male', 1, 'pr'),
('2', 'Female', 1, 'pr');

-- --------------------------------------------------------

--
-- Table structure for table `martial_status`
--

CREATE TABLE IF NOT EXISTS `martial_status` (
  `martial_id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `Username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `martial_status`
--

INSERT INTO `martial_status` (`martial_id`, `Name`, `Status`, `Username`) VALUES
(1, 'Doesn''t Matter', 1, 'pr'),
(2, 'Never Married', 1, 'pr'),
(3, 'Divorced', 1, 'pr'),
(4, 'Widowed', 1, 'pr'),
(5, 'Awaiting Divorce', 1, 'pr'),
(6, 'Annulled', 1, 'pr');

-- --------------------------------------------------------

--
-- Table structure for table `mother_tongue`
--

CREATE TABLE IF NOT EXISTS `mother_tongue` (
  `M_id` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `Username` varchar(50) NOT NULL,
  PRIMARY KEY (`M_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mother_tongue`
--

INSERT INTO `mother_tongue` (`M_id`, `Name`, `Status`, `Username`) VALUES
('1', 'Mother Tongue ', 1, 'pr'),
('10', 'Marathi ', 1, 'pr'),
('11', 'Marwari ', 1, 'pr'),
('12', 'Odia ', 1, 'pr'),
('13', 'Punjabi ', 1, 'pr'),
('14', 'Sindhi ', 1, 'pr'),
('15', 'Tamil ', 1, 'pr'),
('16', 'Telugu ', 1, 'pr'),
('17', 'Urdu', 1, 'pr'),
('18', 'Aka', 1, 'pr'),
('19', 'Arabic ', 1, 'pr'),
('2', 'Doesn''t Matter', 1, 'pr'),
('20', 'Arunachali ', 1, 'pr'),
('21', 'Awadhi ', 1, 'pr'),
('22', 'Baluchi ', 1, 'pr'),
('23', 'Bhojpuri ', 1, 'pr'),
('24', 'Bhutia', 1, 'pr'),
('25', 'Brahui ', 1, 'pr'),
('26', 'Brij ', 1, 'pr'),
('27', 'Burmese', 1, 'pr'),
('28', 'Chattisgarhi ', 1, 'pr'),
('29', 'Chinese ', 1, 'pr'),
('3', 'Hindi', 1, 'pr'),
('30', 'Coorgi ', 1, 'pr'),
('31', 'Dogri ', 1, 'pr'),
('32', 'French ', 1, 'pr'),
('33', 'Garhwali ', 1, 'pr'),
('34', 'Garo ', 1, 'pr'),
('35', 'Haryanavi', 1, 'pr'),
('36', 'Himachali/Pahari ', 1, 'pr'),
('37', 'Hindko ', 1, 'pr'),
('38', 'Kanauji ', 1, 'pr'),
('39', 'Kashmiri ', 1, 'pr'),
('4', 'English', 1, 'pr'),
('40', 'Khandesi ', 1, 'pr'),
('41', 'Khasi ', 1, 'pr'),
('42', 'Koshali', 1, 'pr'),
('43', 'Kumaoni ', 1, 'pr'),
('44', 'Kutchi ', 1, 'pr'),
('45', 'Ladakhi ', 1, 'pr'),
('46', 'Lepcha ', 1, 'pr'),
('47', 'Magahi ', 1, 'pr'),
('48', 'Maithili ', 1, 'pr'),
('49', 'Malay ', 1, 'pr'),
('5', 'Gujarati', 1, 'pr'),
('50', 'Manipuri', 1, 'pr'),
('51', 'Miji', 1, 'pr'),
('52', 'Mizo ', 1, 'pr'),
('53', 'Monpa', 1, 'pr'),
('54', 'Nepali ', 1, 'pr'),
('55', 'Pashto ', 1, 'pr'),
('56', 'Persian ', 1, 'pr'),
('57', 'Rajasthani ', 1, 'pr'),
('58', 'Russian ', 1, 'pr'),
('59', 'Sanskrit', 1, 'pr'),
('6', 'Bengali', 1, 'pr'),
('60', 'Santhali ', 1, 'pr'),
('61', 'Seraiki', 1, 'pr'),
('62', 'Sinhala', 1, 'pr'),
('63', 'Sourashtra ', 1, 'pr'),
('64', 'Spanish ', 1, 'pr'),
('65', 'Swedish ', 1, 'pr'),
('66', 'Tagalog ', 1, 'pr'),
('67', 'Tulu ', 1, 'pr'),
('68', 'Assames', 1, 'pr'),
('69', 'Other', 1, 'pr'),
('7', 'Kannada', 1, 'pr'),
('8', 'Konkani ', 1, 'pr'),
('9', 'Malayalam ', 1, 'pr');

-- --------------------------------------------------------

--
-- Table structure for table `partner_prefrences`
--

CREATE TABLE IF NOT EXISTS `partner_prefrences` (
  `Username` varchar(50) NOT NULL,
  `Age_from` varchar(10) NOT NULL,
  `Age_to` varchar(10) NOT NULL,
  `Height_from` varchar(20) NOT NULL,
  `Height_to` varchar(20) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Looking_for` varchar(10) NOT NULL,
  `Martial_status` varchar(50) NOT NULL,
  `Religion` varchar(50) NOT NULL,
  `Mother_tongue` varchar(50) NOT NULL,
  `Community` varchar(50) NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partner_prefrences`
--

INSERT INTO `partner_prefrences` (`Username`, `Age_from`, `Age_to`, `Height_from`, `Height_to`, `Gender`, `Looking_for`, `Martial_status`, `Religion`, `Mother_tongue`, `Community`) VALUES
('Jyoti99Pandey', '', '', '', '', '', '', '', '', '', ''),
('MasoomMishra', '', '', '', '', '', '', '', '', '', ''),
('PoojaBohra', '', '', '', '', '', '', '', '', '', ''),
('PratikMishra', '', '', '', '', '', '', '', '', '', ''),
('PreetiKushwaha', '', '', '', '', '', '', '', '', '', ''),
('RaviPandey', '', '', '', '', '', '', '', '', '', ''),
('Satyam Kumar', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `personal_information`
--

CREATE TABLE IF NOT EXISTS `personal_information` (
  `Username` varchar(20) NOT NULL,
  `Father_Name` varchar(30) NOT NULL,
  `Religion` varchar(20) NOT NULL,
  `Country` varchar(80) NOT NULL,
  `State` varchar(20) NOT NULL,
  `Martial_Status` varchar(30) NOT NULL,
  `Gothram/Gothra` varchar(11) NOT NULL DEFAULT 'NA',
  `Nakshtra` varchar(11) NOT NULL DEFAULT 'NA',
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_information`
--

INSERT INTO `personal_information` (`Username`, `Father_Name`, `Religion`, `Country`, `State`, `Martial_Status`, `Gothram/Gothra`, `Nakshtra`) VALUES
('Jyoti99Pandey', 'Ramesh Chandra pandey', 'Hindu', 'India', 'Uttarakhand', 'Never Married', 'Bhardawaj', 'vats'),
('MasoomMishra', 'Abhay Kumar Mishra', 'Hindu', 'India', 'BIHAR', 'Never Married', 'Bhardawaj', 'vats'),
('PoojaBohra', 'Nandan Singh Bohra', 'Hindu', 'India', 'Uttarakhand', 'Never Married', 'Bhardawaj', 'vats'),
('PratikMishra', 'Abhay Kumar Mishra', 'Hindu', 'India', 'BIHAR', 'Never Married', 'Bhardawaj', 'vats'),
('PreetiKushwaha', 'Surendra Prasad', 'Hindu', 'India', 'BIHAR', 'Never Married', 'Bhardawaj', 'vats'),
('RaviPandey', 'Umesh Chandra Pandey', 'Hindu', 'India', 'Uttarakhand', 'Never Married', 'Bhardawaj', 'vats'),
('Satyam Kumar', '', '', '', '', '', 'NA', 'NA');

-- --------------------------------------------------------

--
-- Table structure for table `register_yourself`
--

CREATE TABLE IF NOT EXISTS `register_yourself` (
  `Username` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(15) NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_yourself`
--

INSERT INTO `register_yourself` (`Username`, `Email`, `Password`) VALUES
('Jyoti99Pandey', 'jyoti2000pandey@gmail.com', '123'),
('MasoomMishra', 'masoom517@gmail.com', '123'),
('PoojaBohra', 'pooja@gmail.com', '123'),
('PratikMishra', 'pratik99kumar@gmail.com', '123'),
('PreetiKushwaha', 'kushwahapreeti999@gmail.com', '123'),
('RaviPandey', 'pandeyravi1105@gmail.com', '123'),
('Satyam Kumar', 'satyam@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `religion`
--

CREATE TABLE IF NOT EXISTS `religion` (
  `R_id` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `Username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `religion`
--

INSERT INTO `religion` (`R_id`, `Name`, `Status`, `Username`) VALUES
('1', 'Religion', 1, 'pr'),
('2', 'Doesn''t Matter', 1, 'pr'),
('3', 'Hindu', 1, 'pr'),
('4', 'Muslim', 1, 'pr'),
('5', 'Christian', 1, 'pr'),
('6', 'Sikh', 1, 'pr'),
('7', 'Parsi', 1, 'pr'),
('8', 'Jain', 1, 'pr'),
('9', 'Buddhist', 1, 'pr'),
('10', 'Jewish', 1, 'pr'),
('11', 'No Religion', 1, 'pr'),
('12', 'Spiritual', 1, 'pr'),
('13', 'Other', 1, 'pr');

-- --------------------------------------------------------

--
-- Table structure for table `some_basic_details`
--

CREATE TABLE IF NOT EXISTS `some_basic_details` (
  `Username` varchar(20) NOT NULL,
  `First_Name` varchar(15) NOT NULL,
  `Last_Name` varchar(15) NOT NULL,
  `Birthdate` date NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Mother_Tongue` varchar(10) NOT NULL,
  `Looking_For` varchar(6) NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `some_basic_details`
--

INSERT INTO `some_basic_details` (`Username`, `First_Name`, `Last_Name`, `Birthdate`, `Gender`, `Mother_Tongue`, `Looking_For`) VALUES
('Jyoti99Pandey', 'Jyoti', 'Pandey', '2000-03-25', 'Female', 'Hindi', 'Male'),
('MasoomMishra', 'Masoom', 'Mishra', '2000-05-04', 'Male', 'Hindi', 'Female'),
('PoojaBohra', 'Pooja', 'Bhora', '1998-06-05', 'Female', 'Hindi', 'Male'),
('PratikMishra', 'Pratik', 'Mishra', '1999-10-30', 'Male', 'Hindi', 'Female'),
('PreetiKushwaha', 'Preeti', 'Kushwaha', '1997-11-11', 'Female', 'Hindi', 'Male'),
('RaviPandey', 'Ravi', 'Pandey', '1998-05-11', 'Male', 'Hindi', 'Female'),
('Satyam Kumar', '', '', '0000-00-00', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
