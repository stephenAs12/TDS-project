-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2022 at 07:59 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tds v1.0.1`
--

-- --------------------------------------------------------

--
-- Table structure for table `forgot_password`
--

CREATE TABLE `forgot_password` (
  `id` int(11) NOT NULL,
  `code` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forgot_password`
--

INSERT INTO `forgot_password` (`id`, `code`, `email`) VALUES
(41, '16272ecd5323dd', 'nigussiesefinew.41@gmail.com'),
(44, '16277ae3e28dd7', 'aa@gmail.com'),
(46, '16277d1b06d212', 'nigussiesefinew.40@gmail.com'),
(47, '16277d344134ab', 'nigussiesefinew.40@gmail.com'),
(48, '16277d38b48b74', 'nigussiesefinew.40@gmail.com'),
(49, '16277d3b44296f', 'nigussiesefinew.40@gmail.com'),
(52, '16277d9650aa61', 'nigussiesefinew.40@gmail.com'),
(53, '16277d9f349954', 'nigussiesefinew.40@gmail.com'),
(54, '16277dabd38997', 'nigussiesefinew.40@gmail.com'),
(55, '16277db34c722a', 'nigussiesefinew.40@gmail.com'),
(56, '16277db369d888', 'nigussiesefinew.40@gmail.com'),
(57, '16277db696688d', 'stephen.as17@yahoo.com'),
(59, '16277dbba4d623', 'nigussiesefinew.41@gmail.com'),
(63, '16279125ad2043', 'nigussiesefinew.40@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `gudgit`
--

CREATE TABLE `gudgit` (
  `woreda id` int(11) NOT NULL,
  `gudgnit id` int(11) NOT NULL,
  `school id` int(11) NOT NULL,
  `school name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `job_id` int(11) NOT NULL,
  `job_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_id`, `job_name`) VALUES
(1, 'Admin'),
(2, 'TDS expert');

-- --------------------------------------------------------

--
-- Table structure for table `job_level`
--

CREATE TABLE `job_level` (
  `level_id` int(11) NOT NULL,
  `jobid` int(11) NOT NULL,
  `level_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_level`
--

INSERT INTO `job_level` (`level_id`, `jobid`, `level_name`) VALUES
(2, 2, 'Zone'),
(3, 2, 'Region'),
(5, 1, 'Woreda'),
(6, 1, 'Zone'),
(7, 2, 'Woreda');

-- --------------------------------------------------------

--
-- Table structure for table `required`
--

CREATE TABLE `required` (
  `required_id` int(11) NOT NULL,
  `zone` int(11) NOT NULL,
  `woreda` int(11) NOT NULL,
  `school` int(11) NOT NULL,
  `education_level` varchar(250) NOT NULL,
  `major` varchar(250) NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `required`
--

INSERT INTO `required` (`required_id`, `zone`, `woreda`, `school`, `education_level`, `major`, `number`) VALUES
(20, 273, 174, 102, 'Master', 'Amharic', 9),
(21, 273, 174, 101, 'Master', 'English', 5),
(22, 273, 174, 101, 'Master', 'Maths', 10),
(23, 273, 173, 105, 'Master', 'Amharic', 0),
(24, 273, 173, 104, 'Master', 'English', 0),
(25, 273, 173, 105, 'Master', 'Maths', 4),
(26, 273, 176, 89, 'Master', 'Amharic', 5),
(27, 273, 176, 90, 'Master', 'English', 3),
(28, 273, 176, 91, 'Master', 'Maths', 1),
(29, 273, 175, 93, 'Master', 'Amharic', 4),
(30, 273, 175, 92, 'Master', 'English', 2),
(31, 273, 175, 92, 'Master', 'Maths', 6),
(33, 273, 172, 97, 'Master', 'English', 0),
(34, 273, 172, 97, 'Master', 'Maths', 0),
(35, 273, 172, 97, 'Master', 'Amharic', 0);

-- --------------------------------------------------------

--
-- Table structure for table `required_woreda`
--

CREATE TABLE `required_woreda` (
  `required_id` int(11) NOT NULL,
  `handler` varchar(250) NOT NULL,
  `zone` int(11) NOT NULL,
  `woreda` int(11) NOT NULL,
  `education_level` varchar(250) NOT NULL,
  `major` varchar(250) NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `required_woreda`
--

INSERT INTO `required_woreda` (`required_id`, `handler`, `zone`, `woreda`, `education_level`, `major`, `number`) VALUES
(629, '174MasterAmharic', 273, 174, 'Master', 'Amharic', 9),
(630, '174MasterEnglish', 273, 174, 'Master', 'English', 5),
(631, '174MasterMaths', 273, 174, 'Master', 'Maths', 10),
(632, '173MasterAmharic', 273, 173, 'Master', 'Amharic', 0),
(633, '173MasterEnglish', 273, 173, 'Master', 'English', 0),
(634, '173MasterMaths', 273, 173, 'Master', 'Maths', 4),
(635, '176MasterAmharic', 273, 176, 'Master', 'Amharic', 5),
(636, '176MasterEnglish', 273, 176, 'Master', 'English', 3),
(637, '176MasterMaths', 273, 176, 'Master', 'Maths', 1),
(638, '175MasterAmharic', 273, 175, 'Master', 'Amharic', 4),
(639, '175MasterEnglish', 273, 175, 'Master', 'English', 2),
(640, '175MasterMaths', 273, 175, 'Master', 'Maths', 6),
(641, '172MasterEnglish', 273, 172, 'Master', 'English', 0),
(642, '172MasterMaths', 273, 172, 'Master', 'Maths', 0),
(643, '172MasterAmharic', 273, 172, 'Master', 'Amharic', 0);

-- --------------------------------------------------------

--
-- Table structure for table `resource`
--

CREATE TABLE `resource` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `posted_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resource`
--

INSERT INTO `resource` (`id`, `title`, `file_name`, `posted_date`) VALUES
(59, 'one', '5509-Screenshot (1).png', '2022-05-10 06:53:10'),
(60, 'data', '6472-php.docx', '2022-05-18 14:18:51');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `known_id` varchar(250) NOT NULL,
  `full_name` varchar(250) NOT NULL,
  `sex` varchar(250) NOT NULL,
  `disability` varchar(250) NOT NULL,
  `married` varchar(250) NOT NULL,
  `nominee` varchar(250) NOT NULL,
  `zone` int(11) NOT NULL,
  `woreda` int(11) NOT NULL,
  `school` int(11) NOT NULL,
  `education_level` varchar(250) NOT NULL,
  `major` varchar(250) NOT NULL,
  `service` int(11) NOT NULL,
  `new_woreda` int(11) NOT NULL,
  `remark` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `known_id`, `full_name`, `sex`, `disability`, `married`, `nominee`, `zone`, `woreda`, `school`, `education_level`, `major`, `service`, `new_woreda`, `remark`) VALUES
(338, '35278', 'njuio mwer asdf', 'Female', 'No', 'Yes', 'Yes', 273, 175, 94, 'Master', 'Amharic', 26, 173, 'service'),
(339, '61', 'dhfgdh asdf vzxc', 'Male', 'No', 'Yes', 'No', 273, 174, 101, 'Master', 'English', 30, 173, 'service'),
(340, '73', 'dhfgh dfgsdf vzxcvz', 'Male', 'No', 'No', 'No', 273, 174, 102, 'Master', 'Maths', 25, 173, 'service'),
(341, '92', 'dfgh cvbcnvb xcvdbgf', 'Female', 'Yes', 'No', 'No', 273, 173, 105, 'Master', 'Amharic', 22, 174, 'service'),
(342, '48957', 'erty dxfvd tyhtrh', 'Male', 'Yes', 'Yes', 'Yes', 273, 176, 89, 'Master', 'English', 20, 174, 'service'),
(343, '62154', 'nhtr mjyt cdwq', 'Male', 'No', 'Yes', 'No', 273, 176, 89, 'Master', 'Amharic', 20, 175, 'service'),
(344, '97561', 'nah woo wsfs', 'Male', 'Yes', 'Yes', 'Yes', 273, 176, 89, 'Master', 'English', 19, 175, 'service'),
(345, '79', 'adfasd dfsg cvbxc', 'Female', 'Yes', 'Yes', 'Yes', 273, 174, 101, 'Master', 'Amharic', 23, 173, 'service'),
(346, '95871', 'Zelalem Eniyew Ejigu', 'Male', 'Yes', 'Yes', 'Yes', 273, 172, 97, 'Master', 'English', 22, 173, 'service'),
(347, '89763', 'qfjio lpou mnbvc', 'Male', 'Yes', 'Yes', 'No', 273, 175, 95, 'Master', 'Maths', 19, 173, 'service'),
(348, '51', 'hdfgdhf dfbxcvb asdfa', 'Female', 'No', 'No', 'No', 273, 174, 102, 'Master', 'English', 26, 172, 'service'),
(349, '98476', 'Yihunie Belay Sinishaw', 'Male', 'No', 'Yes', 'No', 273, 172, 97, 'Master', 'Maths', 16, 173, 'service'),
(350, '52', 'dghdj dghrtw yreytr', 'Female', 'No', 'No', 'No', 273, 174, 101, 'Master', 'Maths', 27, 172, 'service');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `school_id` int(11) NOT NULL,
  `woreda_id` int(11) NOT NULL,
  `school_name` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`school_id`, `woreda_id`, `school_name`) VALUES
(4, 23, 'Damot Mesenado'),
(5, 23, 'Tana Hayk'),
(6, 23, 'Fitawrari'),
(7, 55, 'Shndi Mesenado'),
(15, 64, 'Mota Mesenado'),
(16, 65, 'አብርሀ ወ አጽብሀ'),
(17, 65, 'ኮለኔል ጌታቸው እሸቴ ከፍተኛ እና ሁለተኛ ደረጃ ትምህርት ቤት '),
(18, 65, 'ፊት አውራሪ ይዘንጋው'),
(19, 65, 'መርጡለማርያም መሰናዶ'),
(20, 65, 'ኢዛና'),
(21, 65, 'ይጠፈት'),
(22, 62, 'mach'),
(23, 62, 'tanahaik'),
(25, 62, 'bahirdar zuriya'),
(26, 65, 'ጣና ሀይቅ'),
(30, 302, NULL),
(31, 76, 'Woldia mesenado'),
(32, 76, 'Gubalaftu secondary'),
(33, 178, 'ኬሚሴ ሁለተኛ ደረጃ ት/ቤት'),
(34, 178, 'ሳዳሳ 29 መጀመሪያ ደረጃ ት/ቤት'),
(35, 178, 'Dinkiyye gobeensa school'),
(36, 178, 'qqq'),
(37, 178, 'aaaa'),
(38, 178, 'zzzz'),
(39, 178, 'xxxxx'),
(40, 178, 'cccccc'),
(41, 178, 'vvvvv'),
(42, 178, 'bbbbbb'),
(43, 178, 'vvvvv'),
(49, 69, '11s'),
(50, 69, '12s'),
(51, 69, '13s'),
(52, 69, '14s'),
(53, 69, '15s'),
(54, 70, '21s'),
(55, 70, '22s'),
(56, 70, '23s'),
(57, 70, '24s'),
(58, 70, '25s'),
(59, 71, '31s'),
(60, 71, '32s'),
(61, 71, '34s'),
(62, 71, '35s'),
(63, 72, '41s'),
(64, 72, '42s'),
(65, 72, '43s'),
(66, 72, '44s'),
(67, 72, '45s'),
(68, 73, '51s'),
(69, 73, '52s'),
(70, 73, '53s'),
(71, 73, '54s'),
(72, 73, '55s'),
(73, 74, '61s'),
(74, 74, '62s'),
(75, 74, '63s'),
(76, 74, '64s'),
(77, 74, '65s'),
(78, 75, '71s'),
(79, 75, '72s'),
(80, 75, '73s'),
(81, 75, '74s'),
(82, 75, '75s'),
(83, 178, 'tana hayq'),
(84, 182, 'ጂሌ መሰናዶ'),
(85, 182, 'ኦሮሞ መሰናዶ '),
(86, 182, 'ኬሚሴ ሰከንዳርይ'),
(87, 180, 'ጌራ መሰናዶ'),
(88, 180, 'ኬሚሴ የመጀመሪያ ደረጃ ትምህርት ቤት'),
(89, 176, 'qwd'),
(90, 176, 'dssdgf'),
(91, 176, 'ghfgh'),
(92, 175, 'sdfasdf'),
(93, 175, 'xcvbxcv'),
(94, 175, 'uuuuuuu'),
(95, 175, 'mmmmm'),
(96, 175, 'eeeeee'),
(97, 172, 'dsdfs'),
(98, 172, 'xxxxxx'),
(99, 172, 'qwwe34'),
(100, 172, 'fght6575'),
(101, 174, 'fdg'),
(102, 174, 'vcn'),
(103, 173, 'sdadfgs'),
(104, 173, 'bvncgf'),
(105, 173, 'gfhty');

-- --------------------------------------------------------

--
-- Table structure for table `superviser`
--

CREATE TABLE `superviser` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `disability` varchar(10) NOT NULL,
  `education level` varchar(50) NOT NULL,
  `employment year` date NOT NULL,
  `teaching service` int(11) NOT NULL,
  `other service` int(11) NOT NULL,
  `calculated service` int(11) NOT NULL,
  `multiplier` int(11) NOT NULL,
  `marital status` varchar(50) NOT NULL,
  `zone` varchar(50) NOT NULL,
  `woreda` varchar(50) NOT NULL,
  `gudignit` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teacher_id` int(11) NOT NULL,
  `knownid` varchar(250) DEFAULT NULL,
  `fname` varchar(250) NOT NULL,
  `mname` varchar(250) NOT NULL,
  `lname` varchar(250) NOT NULL,
  `sex` varchar(8) NOT NULL,
  `disability` varchar(10) NOT NULL,
  `marital_status` varchar(10) NOT NULL,
  `nominee` varchar(10) NOT NULL,
  `zone` int(11) NOT NULL,
  `woreda` int(11) NOT NULL,
  `school` int(11) NOT NULL,
  `education_level` varchar(250) NOT NULL,
  `major` varchar(250) NOT NULL,
  `employment_period` varchar(250) NOT NULL,
  `current_period` varchar(100) NOT NULL,
  `service` int(11) NOT NULL,
  `other_service` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teacher_id`, `knownid`, `fname`, `mname`, `lname`, `sex`, `disability`, `marital_status`, `nominee`, `zone`, `woreda`, `school`, `education_level`, `major`, `employment_period`, `current_period`, `service`, `other_service`) VALUES
(59, '47', 'haaa', 'here', 'vcf', 'Female', 'No', 'Yes', 'Yes', 274, 178, 38, 'Degree', 'maaths', '2022-05-05', '', 10, 2),
(60, '16', 'bbbnvbn', 'hgfthfh', 'hfdd', 'Male', 'Yes', 'No', 'No', 274, 178, 38, 'Degree', 'gff', '2022-06-02', '', 3, 2),
(61, '25', 'Tesfaye', 'Haile', 'Tegegne ', 'Male', 'No', 'Yes', 'No', 274, 178, 35, 'Master', 'Software', '2022-05-18', '', 10, 5),
(62, '35', 'hhaa', 'sdss', 'axzx', 'Male', 'No', 'No', 'No', 274, 178, 34, 'Master', 'aAAAA', '2022-05-06', '', 3, 3),
(77, '56184', 'Abebaw', 'Andualem', 'Tegegne', 'Male', 'No', 'No', 'No', 274, 178, 33, 'Master', 'Physics', '1998-09-06', '', 5, 0),
(78, '17649', 'Biniyam', 'Yeshambel', 'Getahun', 'Male', 'No', 'No', 'No', 274, 178, 33, 'Master', 'Physics', '1995-01-06', '', 5, 0),
(79, '97123', 'Nardos', 'Yimesgen', 'Zelalem', 'Female', 'No', 'Yes', 'Yes', 274, 178, 33, 'Degree', 'Amharic', '2002-03-06', '', 2, 0),
(80, '52764', 'hay', 'ham', 'haa', 'Female', 'Yes', 'Yes', 'No', 274, 182, 85, 'Degree', 'chemistry', '2022-06-08', '', 4, 0),
(81, '72158', 'Amele', 'Gashaw', 'Dmeke', 'Female', 'No', 'Yes', 'Yes', 274, 178, 33, 'Degree', 'Amaric', '2001-02-06', '', 2, 0),
(82, '47536', 'jjj', 'wwe', 'yui', 'Female', 'Yes', 'Yes', 'No', 274, 182, 85, 'Degree', 'chemistry', '2022-06-16', '', 4, 0),
(83, '42918', 'Fikadu', 'Ambaw', 'Zelalem', 'Male', 'Yes', 'No', 'No', 274, 178, 33, 'Linear', 'Biology', '1990-10-06', '', 1, 0),
(84, '13456', 'qwe', 'trew', 'opihj', 'Male', 'No', 'Yes', 'Yes', 274, 182, 84, 'Master', 'Biology', '2022-06-08', '', 11, 0),
(85, '51492', 'mol', 'cvzsfs', 'asas', 'Female', 'Yes', 'Yes', 'Yes', 274, 182, 84, 'Master', 'Biology', '2022-06-14', '', 10, 4),
(86, '46289', 'Begashaw', 'Temesgen', 'Alemu', 'Male', 'Yes', 'No', 'No', 274, 178, 33, 'Linear', 'Biology', '1992-07-06', '', 1, 0),
(87, '84275', 'Meri', 'Yonas', 'Getinet', 'Male', 'No', 'Yes', 'Yes', 274, 178, 33, 'Cluster', 'Sport', '2006-06-06', '', 3, 0),
(88, '84392', 'kikk', 'awasad', 'ewrwe', 'Male', 'Yes', 'Yes', 'Yes', 274, 182, 86, 'Linear', 'Maths', '2022-06-08', '', 4, 4),
(89, '16725', 'Almaz', 'Yimesgen', 'Abebe', 'Female', 'No', 'Yes', 'No', 274, 178, 33, 'Cluster', 'Sport', '1988-09-06', '', 3, 0),
(90, '56412', 'wertddf', 'erewe', 'xcvdsd', 'Male', 'No', 'Yes', 'No', 274, 182, 86, 'Linear', 'Maths', '2022-06-14', '', 11, 2),
(91, '13458', 'fghj', 'hgdfsd', 'zza', 'Male', 'Yes', 'Yes', 'Yes', 274, 182, 86, 'Cluster', 'Physics', '2022-06-08', '', 8, 0),
(92, '94326', 'opiu', 'fgdgsf', 'xsdsd', 'Male', 'Yes', 'Yes', 'Yes', 274, 182, 85, 'Linear', 'Amharic', '2022-06-17', '', 15, 6),
(93, '26381', 'kilokj', 'dfgsdgsdsdg', 'hytre', 'Male', 'Yes', 'Yes', 'Yes', 274, 182, 85, 'Degree', 'Amharic', '2022-06-16', '', 15, 9),
(94, '81467', 'Sara', 'Birhanu', 'Abeje', 'Female', 'No', 'Yes', 'No', 274, 180, 87, 'Master', 'Chemistry', '1975-02-06', '', 7, 0),
(95, '75863', 'Binyam', 'Belay', 'Andargachew', 'Male', 'No', 'Yes', 'No', 274, 180, 87, 'Master', 'Chemistry', '1973-05-06', '', 7, 0),
(96, '97561', 'nah', 'woo', 'wsfs', 'Male', 'Yes', 'Yes', 'Yes', 273, 176, 89, 'Master', 'English', '2022-06-05', '', 4, 0),
(97, '23947', 'Alem', 'Zelalem', 'Getachew', 'Female', 'Yes', 'No', 'No', 274, 180, 87, 'Degree', 'Civics', '1984-01-19', '', 4, 0),
(98, '48957', 'erty', 'dxfvd', 'tyhtrh', 'Male', 'Yes', 'Yes', 'Yes', 273, 176, 89, 'Master', 'English', '2022-06-05', '', 5, 0),
(99, '52813', 'qwscd', 'cbgfh', 'tyyty', 'Male', 'No', 'Yes', 'No', 273, 176, 90, 'Master', 'English', '2022-06-07', '', 1, 0),
(100, '79845', 'Zinegnaw', 'Getachew', 'Tegegne', 'Male', 'Yes', 'No', 'No', 274, 180, 87, 'Linear', 'English', '1992-04-08', '', 3, 0),
(103, '19542', 'Tadila', 'Fasil', 'Demoz', 'Female', 'No', 'Yes', 'Yes', 274, 180, 87, 'Linear', 'Mathematics', '2004-10-12', '', 3, 0),
(105, '83195', 'Demis', 'Teshager', 'Belachew', 'Male', 'No', 'Yes', 'Yes', 274, 180, 87, 'Linear', 'Mathematics', '1997-01-15', '', 1, 0),
(107, '19253', 'Ayalenesh', 'Gashaye', 'Zemenu', 'Female', 'No', 'No', 'No', 274, 180, 87, 'Cluster', 'Amharic', '2002-07-20', '', 1, 0),
(108, '62154', 'nhtr', 'mjyt', 'cdwq', 'Male', 'No', 'Yes', 'No', 273, 176, 89, 'Master', 'Amharic', '2022-06-11', '', 5, 0),
(109, '82976', 'Worku', 'Abebe', 'Zegeye', 'Male', 'No', 'No', 'No', 274, 180, 87, 'Cluster', 'Amharic', '1997-02-19', '', 1, 0),
(110, '43862', 'zaqw', 'cder', 'bgty', 'Male', 'No', 'Yes', 'Yes', 273, 176, 89, 'Master', 'Maths', '2022-06-12', '', 6, 0),
(112, '24156', 'Ylikal', 'Getinet', 'Ayalew', 'Male', 'No', 'Yes', 'Yes', 274, 180, 87, 'Degree', 'Economics', '1983-03-22', '', 4, 0),
(114, '97465', 'Birhan', 'Asimare', 'Endalamaw', 'Female', 'No', 'Yes', 'Yes', 274, 180, 87, 'Degree', 'Economics', '1994-03-02', '', 4, 0),
(115, '97154', 'emu', 'bab', 'ada', 'Male', 'Yes', 'Yes', 'Yes', 273, 175, 95, 'Master', 'Amharic', '2022-06-01', '', 8, 0),
(116, '98476', 'Yihunie', 'Belay', 'Sinishaw', 'Male', 'No', 'Yes', 'No', 273, 172, 97, 'Master', 'Maths', '1970-02-18', '', 3, 0),
(117, '75648', 'ama', 'feee', 'vfdf', 'Female', 'No', 'Yes', 'No', 273, 175, 92, 'Master', 'Amharic', '2022-06-01', '', 12, 0),
(119, '21537', 'Tewodros', 'Kasahun', 'Mihiretab', 'Male', 'No', 'Yes', 'No', 273, 172, 97, 'Master', 'Amharic', '1976-07-29', '', 7, 0),
(120, '29564', 'Bekele', 'Temach ', 'Haile', 'Male', 'No', 'Yes', 'No', 267, 69, 49, 'Master', 'English', '2022-06-16', '', 2, 0),
(122, '73128', 'Dereje', 'Gelagay', 'Taye', 'Male', 'Yes', 'No', 'No', 267, 69, 50, 'Degree', 'Mathematics', '2022-06-23', '', 3, 0),
(123, '73584', 'Aster', 'Awoke', 'Bihonegn', 'Female', 'No', 'Yes', 'No', 273, 172, 98, 'Master', 'Amharic', '1990-02-08', '', 6, 0),
(124, '31785', 'Hirut', 'Bekele', 'Teshome', 'Female', 'No', 'Yes', 'No', 267, 69, 51, 'Linear', 'Amharic', '2022-07-20', '', 4, 0),
(125, '89763', 'qfjio', 'lpou', 'mnbvc', 'Male', 'Yes', 'Yes', 'No', 273, 175, 95, 'Master', 'Maths', '2022-06-07', '', 4, 0),
(126, '95871', 'Zelalem', 'Eniyew', 'Ejigu', 'Male', 'Yes', 'Yes', 'Yes', 273, 172, 97, 'Master', 'English', '1991-11-27', '', 9, 0),
(127, '64287', 'Almaz ', 'Anagre', 'Kidane', 'Female', 'Yes', 'Yes', 'Yes', 267, 69, 53, 'Degree', 'Physics', '2024-06-23', '', 2, 0),
(128, '35278', 'njuio', 'mwer', 'asdf', 'Female', 'No', 'Yes', 'Yes', 273, 175, 94, 'Master', 'Amharic', '2022-06-07', '', 11, 0),
(129, '78429', 'Fikir', 'Bihonegn', 'Demissie', 'Female', 'Yes', 'Yes', 'Yes', 273, 172, 98, 'Master', 'English', '2022-06-24', '', 2, 0),
(132, '83712', 'Kelem', 'Aytenew', 'Taye ', 'Male', 'Yes', 'No', 'No', 267, 69, 52, 'Degree', 'Mathematics', '2033-06-22', '', 2, 0),
(134, '67429', 'Chalie', 'Birega', 'Tseday', 'Male', 'No', 'Yes', 'No', 267, 69, 51, 'Cluster', 'Mathematics', '2022-06-22', '', 3, 0),
(136, '41725', 'Deres ', 'Tenaw', 'Biruk', 'Male', 'No', 'Yes', 'No', 267, 69, 51, 'Degree', 'Ict', '2022-06-23', '', 1, 0),
(139, '95314', 'Chekole', 'Taye', 'Tenaw', 'Female', 'No', 'Yes', 'No', 267, 69, 50, 'Degree', 'Chemistry ', '2022-06-16', '', 2, 0),
(141, '82749', 'wertyu', 'fhtfhth', 'hfbnvb', 'Male', 'Yes', 'Yes', 'Yes', 273, 175, 92, 'Master', 'Maths', '2022-06-07', '', 11, 0),
(143, '25986', 'mplo', 'wqert', 'uiok', 'Male', 'No', 'Yes', 'Yes', 267, 70, 54, 'Degree', 'Civics', '2022-06-01', '', 5, 1),
(144, '52489', 'selam', 'mulu', 'grty', 'Female', 'No', 'Yes', 'Yes', 267, 70, 54, 'Degree', 'Civics', '2022-06-02', '', 5, 0),
(145, '27834', 'haymanot', 'sdrgtrrh', 'gfggf', 'Female', 'Yes', 'Yes', 'No', 267, 70, 55, 'Master', 'Chemistry', '2022-06-02', '', 7, 2),
(146, '43987', 'mama', 'kldsos', 'xccxsc', 'Female', 'No', 'No', 'No', 267, 70, 56, 'Master', 'Physics', '2022-06-04', '', 10, 2),
(147, '49561', 'popod', 'gfreda', 'awadsf', 'Female', 'Yes', 'Yes', 'Yes', 267, 70, 56, 'Linear', 'Physics', '2022-06-08', '', 14, 0),
(148, '87492', 'qscxza', 'ghytre', 'yhjkiu', 'Male', 'Yes', 'Yes', 'Yes', 267, 70, 57, 'Linear', 'Sport', '2022-06-07', '', 5, 5),
(149, '38461', 'asxcvb', 'fdddd', 'sdgdfbfb', 'Male', 'Yes', 'Yes', 'Yes', 267, 70, 57, 'Cluster', 'Geography', '2022-06-06', '', 5, 5),
(150, '59438', 'Getachew', 'Jemberu', 'Haile', 'Male', 'No', 'Yes', 'Yes', 267, 71, 59, 'Linear', 'Amharic', '2022-06-08', '', 5, 2),
(151, '15936', 'qqqq', 'sssss', 'aaaaa', 'Female', 'Yes', 'Yes', 'Yes', 267, 70, 58, 'Master', 'Chemistry', '2022-06-16', '', 13, 4),
(152, '62579', 'Fetene', 'Tamagn', 'Beyene', 'Male', 'No', 'Yes', 'Yes', 267, 71, 60, 'Degree', 'Civics', '2022-06-23', '', 5, 2),
(153, '65974', 'Chalie', 'Tamru', 'Gebeyaw', 'Male', 'Yes', 'Yes', 'No', 267, 71, 61, 'Cluster', 'Sport', '2022-06-23', '', 5, 1),
(154, '82917', 'kkklll', 'bbvvccc', 'sdssds', 'Male', 'No', 'Yes', 'No', 267, 70, 57, 'Degree', 'Maths', '2022-06-07', '', 6, 5),
(155, '19672', 'werty', 'nnnggbcv', 'cccvvf', 'Male', 'Yes', 'No', 'No', 267, 70, 55, 'Degree', 'Maths', '2022-06-18', '', 15, 1),
(156, '89617', 'Chernet', 'Tamru', 'Hunegnaw', 'Male', 'No', 'No', 'No', 267, 71, 61, 'Degree', 'Geography', '2022-06-30', '', 5, 1),
(157, '72143', 'Fetene', 'Dagnachew', 'Gelagay', 'Male', 'Yes', 'No', 'No', 267, 71, 62, 'Degree', 'Chemistry', '2022-06-09', '', 5, 2),
(158, '31986', 'Dagnachew', 'Ejigu', 'Damite', 'Male', 'No', 'Yes', 'No', 267, 71, 62, 'Cluster', 'Science', '2022-06-22', '', 2, 1),
(159, '48569', 'Frehiwot', 'Ejigu', 'Taye', 'Male', 'Yes', 'No', 'No', 267, 71, 61, 'Degree', 'Civics', '2022-07-02', '', 4, 3),
(160, '93', 'fdshd', 'hjgjfgh', 'jfgdjfg', 'Male', 'No', 'No', 'No', 273, 173, 103, 'Master', 'Amharic', '2022-06-06', '', 7, 0),
(161, '18', 'dfgsdfg', 'sdfhgh', 'sghdf', 'Male', 'Yes', 'Yes', 'Yes', 273, 173, 104, 'Master', 'English', '2022-06-05', '', 7, 0),
(162, '36', 'fsdfhdf', 'hdfgdh', 'xgdhf', 'Male', 'No', 'Yes', 'No', 273, 173, 104, 'Master', 'English', '2022-06-15', '', 8, 0),
(163, '19', 'fgfh', 'gjfghj', 'cvbdn', 'Male', 'Yes', 'Yes', 'No', 273, 173, 104, 'Master', 'English', '2022-06-16', '', 10, 0),
(164, '92', 'dfgh', 'cvbcnvb', 'xcvdbgf', 'Female', 'Yes', 'No', 'No', 273, 173, 105, 'Master', 'Amharic', '2022-06-16', '', 8, 0),
(165, '52', 'dghdj', 'dghrtw', 'yreytr', 'Female', 'No', 'No', 'No', 273, 174, 101, 'Master', 'Maths', '2022-06-06', '', 12, 0),
(166, '73', 'dhfgh', 'dfgsdf', 'vzxcvz', 'Male', 'No', 'No', 'No', 273, 174, 102, 'Master', 'Maths', '2022-06-20', '', 10, 0),
(167, '51', 'hdfgdhf', 'dfbxcvb', 'asdfa', 'Female', 'No', 'No', 'No', 273, 174, 102, 'Master', 'English', '2022-06-07', '', 11, 0),
(168, '61', 'dhfgdh', 'asdf', 'vzxc', 'Male', 'No', 'Yes', 'No', 273, 174, 101, 'Master', 'English', '2022-06-22', '', 15, 0),
(169, '79', 'adfasd', 'dfsg', 'cvbxc', 'Female', 'Yes', 'Yes', 'Yes', 273, 174, 101, 'Master', 'Amharic', '2022-06-08', '', 8, 0);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_transfer`
--

CREATE TABLE `teacher_transfer` (
  `id` int(11) NOT NULL,
  `known_id` varchar(250) NOT NULL,
  `full_name` varchar(250) NOT NULL,
  `sex` varchar(250) NOT NULL,
  `disability` varchar(250) NOT NULL,
  `married` varchar(250) NOT NULL,
  `nominee` varchar(250) NOT NULL,
  `zone` varchar(250) NOT NULL,
  `woreda` varchar(250) NOT NULL,
  `school` varchar(250) NOT NULL,
  `education_level` varchar(250) NOT NULL,
  `major` varchar(250) NOT NULL,
  `service_transfer` float NOT NULL,
  `woreda_one` varchar(250) NOT NULL,
  `woreda_two` varchar(250) NOT NULL,
  `woreda_three` varchar(250) NOT NULL,
  `rank` varchar(250) DEFAULT NULL,
  `remark` varchar(250) DEFAULT 'service'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_transfer`
--

INSERT INTO `teacher_transfer` (`id`, `known_id`, `full_name`, `sex`, `disability`, `married`, `nominee`, `zone`, `woreda`, `school`, `education_level`, `major`, `service_transfer`, `woreda_one`, `woreda_two`, `woreda_three`, `rank`, `remark`) VALUES
(1203, '93', 'fdshd hjgjfgh jfgdjfg', 'Male', 'No', 'No', 'No', '273', '173', '103', 'Master', 'Amharic', 21, '172', '0', '0', '3', 'service'),
(1204, '18', 'dfgsdfg sdfhgh sghdf', 'Male', 'Yes', 'Yes', 'Yes', '273', '173', '104', 'Master', 'English', 21, '172', '174', '0', '4', 'service'),
(1205, '36', 'fsdfhdf hdfgdh xgdhf', 'Male', 'No', 'Yes', 'No', '273', '173', '104', 'Master', 'English', 22, '172', '174', '0', '3', 'service'),
(1206, '19', 'fgfh gjfghj cvbdn', 'Male', 'Yes', 'Yes', 'No', '273', '173', '104', 'Master', 'English', 24, '172', '0', '0', '2', 'service'),
(1215, '52813', 'qwscd cbgfh tyyty', 'Male', 'No', 'Yes', 'No', '273', '176', '90', 'Master', 'English', 16, '173', '172', '175', '3', 'service'),
(1217, '43862', 'zaqw cder bgty', 'Male', 'No', 'Yes', 'Yes', '273', '176', '89', 'Master', 'Maths', 21, '172', '173', '174', '3', 'service'),
(1219, '82749', 'wertyu fhtfhth hfbnvb', 'Male', 'Yes', 'Yes', 'Yes', '273', '175', '92', 'Master', 'Maths', 26, '172', '173', '174', '2', 'service'),
(1220, '97154', 'emu bab ada', 'Male', 'Yes', 'Yes', 'Yes', '273', '175', '95', 'Master', 'Amharic', 23, '172', '173', '0', '2', 'service'),
(1221, '75648', 'ama feee vfdf', 'Female', 'No', 'Yes', 'No', '273', '175', '92', 'Master', 'Amharic', 27, '172', '173', '174', '1', 'service'),
(1224, '21537', 'Tewodros Kasahun Mihiretab', 'Male', 'No', 'Yes', 'No', '273', '172', '97', 'Master', 'Amharic', 20, '173', '0', '0', '3', 'service'),
(1225, '73584', 'Aster Awoke Bihonegn', 'Female', 'No', 'Yes', 'No', '273', '172', '98', 'Master', 'Amharic', 19, '173', '176', '0', '4', 'service'),
(1227, '78429', 'Fikir Bihonegn Demissie', 'Female', 'Yes', 'Yes', 'Yes', '273', '172', '98', 'Master', 'English', 15, '173', '176', '174', '4', 'service'),
(1232, '92', 'dfgh cvbcnvb xcvdbgf', 'Female', 'Yes', 'No', 'No', '273', '173', '105', 'Master', 'Amharic', 22, '174', '172', '0', '1', 'service'),
(1233, '52', 'dghdj dghrtw yreytr', 'Female', 'No', 'No', 'No', '273', '174', '101', 'Master', 'Maths', 27, '172', '173', '0', '1', 'service'),
(1234, '73', 'dhfgh dfgsdf vzxcvz', 'Male', 'No', 'No', 'No', '273', '174', '102', 'Master', 'Maths', 25, '173', '172', '0', '1', 'service'),
(1235, '51', 'hdfgdhf dfbxcvb asdfa', 'Female', 'No', 'No', 'No', '273', '174', '102', 'Master', 'English', 26, '172', '173', '175', '1', 'service'),
(1236, '61', 'dhfgdh asdf vzxc', 'Male', 'No', 'Yes', 'No', '273', '174', '101', 'Master', 'English', 30, '173', '172', '0', '1', 'service'),
(1237, '79', 'adfasd dfsg cvbxc', 'Female', 'Yes', 'Yes', 'Yes', '273', '174', '101', 'Master', 'Amharic', 23, '173', '172', '0', '2', 'service'),
(1238, '97561', 'nah woo wsfs', 'Male', 'Yes', 'Yes', 'Yes', '273', '176', '89', 'Master', 'English', 19, '175', '172', '173', '1', 'service'),
(1239, '48957', 'erty dxfvd tyhtrh', 'Male', 'Yes', 'Yes', 'Yes', '273', '176', '89', 'Master', 'English', 20, '174', '175', '0', '1', 'service'),
(1241, '62154', 'nhtr mjyt cdwq', 'Male', 'No', 'Yes', 'No', '273', '176', '89', 'Master', 'Amharic', 20, '175', '172', '173', '1', 'service'),
(1243, '89763', 'qfjio lpou mnbvc', 'Male', 'Yes', 'Yes', 'No', '273', '175', '95', 'Master', 'Maths', 19, '173', '0', '0', '2', 'service'),
(1247, '35278', 'njuio mwer asdf', 'Female', 'No', 'Yes', 'Yes', '273', '175', '94', 'Master', 'Amharic', 26, '173', '174', '172', '1', 'service'),
(1248, '95871', 'Zelalem Eniyew Ejigu', 'Male', 'Yes', 'Yes', 'Yes', '273', '172', '97', 'Master', 'English', 22, '173', '0', '0', '2', 'service'),
(1251, '98476', 'Yihunie Belay Sinishaw', 'Male', 'No', 'Yes', 'No', '273', '172', '97', 'Master', 'Maths', 16, '173', '0', '0', '3', 'service');

-- --------------------------------------------------------

--
-- Table structure for table `transfer_request`
--

CREATE TABLE `transfer_request` (
  `request_id` int(11) NOT NULL,
  `choice_key` varchar(250) NOT NULL,
  `current_zone` int(11) NOT NULL,
  `current_woreda` int(11) NOT NULL,
  `teacher_id` varchar(250) NOT NULL,
  `request_type` varchar(250) NOT NULL,
  `region_one` varchar(250) DEFAULT NULL,
  `region_two` varchar(250) DEFAULT NULL,
  `zone_one` int(11) DEFAULT NULL,
  `z1_woreda_one` int(11) DEFAULT NULL,
  `z1_woreda_two` int(11) DEFAULT NULL,
  `z1_woreda_any` int(11) DEFAULT NULL,
  `zone_two` int(11) DEFAULT NULL,
  `z2_woreda_one` int(11) DEFAULT NULL,
  `z2_woreda_two` int(11) DEFAULT NULL,
  `z2_woreda_any` int(11) DEFAULT NULL,
  `woreda_one` int(11) DEFAULT NULL,
  `woreda_two` int(11) DEFAULT NULL,
  `woreda_three` int(11) DEFAULT NULL,
  `gudignt_one` int(11) DEFAULT NULL,
  `gudignt_two` int(11) DEFAULT NULL,
  `gudignt_three` int(11) DEFAULT NULL,
  `school_one` int(11) DEFAULT NULL,
  `school_two` int(11) DEFAULT NULL,
  `school_three` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transfer_request`
--

INSERT INTO `transfer_request` (`request_id`, `choice_key`, `current_zone`, `current_woreda`, `teacher_id`, `request_type`, `region_one`, `region_two`, `zone_one`, `z1_woreda_one`, `z1_woreda_two`, `z1_woreda_any`, `zone_two`, `z2_woreda_one`, `z2_woreda_two`, `z2_woreda_any`, `woreda_one`, `woreda_two`, `woreda_three`, `gudignt_one`, `gudignt_two`, `gudignt_three`, `school_one`, `school_two`, `school_three`) VALUES
(118, '56184 Woreda To Woreda', 274, 178, '56184', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 177, 179, 181, NULL, NULL, NULL, NULL, NULL, NULL),
(119, '19253 Woreda To Woreda', 274, 180, '19253', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 177, 178, 181, NULL, NULL, NULL, NULL, NULL, NULL),
(120, '17649 Woreda To Woreda', 274, 178, '17649', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 179, 177, 183, NULL, NULL, NULL, NULL, NULL, NULL),
(121, '97123 Woreda To Woreda', 274, 178, '97123', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 177, 183, 182, NULL, NULL, NULL, NULL, NULL, NULL),
(122, '19542 Woreda To Woreda', 274, 180, '19542', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 177, 178, 179, NULL, NULL, NULL, NULL, NULL, NULL),
(123, '23947 Woreda To Woreda', 274, 180, '23947', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 182, 179, 178, NULL, NULL, NULL, NULL, NULL, NULL),
(124, '72158 Woreda To Woreda', 274, 178, '72158', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 183, 177, 180, NULL, NULL, NULL, NULL, NULL, NULL),
(125, '13456 Woreda To Woreda', 274, 182, '13456', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 179, 177, 183, NULL, NULL, NULL, NULL, NULL, NULL),
(126, '24156 Woreda To Woreda', 274, 180, '24156', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 181, 179, 178, NULL, NULL, NULL, NULL, NULL, NULL),
(127, '13458 Woreda To Woreda', 274, 182, '13458', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 183, 177, 179, NULL, NULL, NULL, NULL, NULL, NULL),
(128, '75863 Woreda To Woreda', 274, 180, '75863', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 179, 178, 181, NULL, NULL, NULL, NULL, NULL, NULL),
(129, '42918 Woreda To Woreda', 274, 178, '42918', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 183, 180, 181, NULL, NULL, NULL, NULL, NULL, NULL),
(130, '26381 Woreda To Woreda', 274, 182, '26381', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 183, 181, 178, NULL, NULL, NULL, NULL, NULL, NULL),
(131, '79845 Woreda To Woreda', 274, 180, '79845', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 179, 177, 183, NULL, NULL, NULL, NULL, NULL, NULL),
(132, '47536 Woreda To Woreda', 274, 182, '47536', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 181, 183, 178, NULL, NULL, NULL, NULL, NULL, NULL),
(133, '51492 Woreda To Woreda', 274, 182, '51492', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 183, 180, 178, NULL, NULL, NULL, NULL, NULL, NULL),
(134, '46289 Woreda To Woreda', 274, 178, '46289', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 179, 182, 180, NULL, NULL, NULL, NULL, NULL, NULL),
(135, '52764 Woreda To Woreda', 274, 182, '52764', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 183, 177, 181, NULL, NULL, NULL, NULL, NULL, NULL),
(136, '82976 Woreda To Woreda', 274, 180, '82976', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 181, 182, 177, NULL, NULL, NULL, NULL, NULL, NULL),
(137, '84275 Woreda To Woreda', 274, 178, '84275', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 180, 183, 177, NULL, NULL, NULL, NULL, NULL, NULL),
(138, '56412 Woreda To Woreda', 274, 182, '56412', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 183, 179, 178, NULL, NULL, NULL, NULL, NULL, NULL),
(139, '83195 Woreda To Woreda', 274, 180, '83195', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 183, 179, 177, NULL, NULL, NULL, NULL, NULL, NULL),
(140, '84392 Woreda To Woreda', 274, 182, '84392', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 180, 183, 177, NULL, NULL, NULL, NULL, NULL, NULL),
(141, '94326 Woreda To Woreda', 274, 182, '94326', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 178, 183, 180, NULL, NULL, NULL, NULL, NULL, NULL),
(142, '97465 Woreda To Woreda', 274, 180, '97465', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 177, 182, 178, NULL, NULL, NULL, NULL, NULL, NULL),
(143, '16725 Woreda To Woreda', 274, 178, '16725', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 180, 183, 177, NULL, NULL, NULL, NULL, NULL, NULL),
(144, '15936 Woreda To Woreda', 267, 70, '15936', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 75, 78, 81, NULL, NULL, NULL, NULL, NULL, NULL),
(145, '31986 Woreda To Woreda', 267, 71, '31986', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 74, 78, 80, NULL, NULL, NULL, NULL, NULL, NULL),
(146, '19672 Woreda To Woreda', 267, 70, '19672', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 81, 78, 77, NULL, NULL, NULL, NULL, NULL, NULL),
(147, '48569 Woreda To Woreda', 267, 71, '48569', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 74, 81, 70, NULL, NULL, NULL, NULL, NULL, NULL),
(148, '25986 Woreda To Woreda', 267, 70, '25986', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 81, 78, 72, NULL, NULL, NULL, NULL, NULL, NULL),
(149, '29564 Woreda To Woreda', 267, 69, '29564', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 70, 74, 72, NULL, NULL, NULL, NULL, NULL, NULL),
(150, '59438 Woreda To Woreda', 267, 71, '59438', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 79, 81, 72, NULL, NULL, NULL, NULL, NULL, NULL),
(154, '62579 Woreda To Woreda', 267, 71, '62579', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 74, 70, 82, NULL, NULL, NULL, NULL, NULL, NULL),
(155, '31785 Woreda To Woreda', 267, 69, '31785', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 70, 74, 73, NULL, NULL, NULL, NULL, NULL, NULL),
(156, '65974 Woreda To Woreda', 267, 71, '65974', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 78, 81, 82, NULL, NULL, NULL, NULL, NULL, NULL),
(157, '27834 Woreda To Woreda', 267, 70, '27834', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 80, 77, 73, NULL, NULL, NULL, NULL, NULL, NULL),
(158, '38461 Woreda To Woreda', 267, 70, '38461', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 81, 80, 76, NULL, NULL, NULL, NULL, NULL, NULL),
(159, '72143 Woreda To Woreda', 267, 71, '72143', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 74, 81, 73, NULL, NULL, NULL, NULL, NULL, NULL),
(160, '41725 Woreda To Woreda', 267, 69, '41725', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 74, 77, 78, NULL, NULL, NULL, NULL, NULL, NULL),
(161, '43987 Woreda To Woreda', 267, 70, '43987', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 81, 75, 76, NULL, NULL, NULL, NULL, NULL, NULL),
(162, '89617 Woreda To Woreda', 267, 71, '89617', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 74, 69, 70, NULL, NULL, NULL, NULL, NULL, NULL),
(164, '49561 Woreda To Woreda', 267, 70, '49561', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 74, 76, 75, NULL, NULL, NULL, NULL, NULL, NULL),
(166, '52489 Woreda To Woreda', 267, 70, '52489', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 78, 77, 73, NULL, NULL, NULL, NULL, NULL, NULL),
(167, '64287 Woreda To Woreda', 267, 69, '64287', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 74, 80, 82, NULL, NULL, NULL, NULL, NULL, NULL),
(168, '82917 Woreda To Woreda', 267, 70, '82917', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 81, 77, 71, NULL, NULL, NULL, NULL, NULL, NULL),
(169, '87492 Woreda To Woreda', 267, 70, '87492', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 80, 79, 74, NULL, NULL, NULL, NULL, NULL, NULL),
(170, '67429 Woreda To Woreda', 267, 69, '67429', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 81, 77, 72, NULL, NULL, NULL, NULL, NULL, NULL),
(171, '73128 Woreda To Woreda', 267, 69, '73128', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 81, 77, 72, NULL, NULL, NULL, NULL, NULL, NULL),
(172, '83712 Woreda To Woreda', 267, 69, '83712', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 75, 76, 78, NULL, NULL, NULL, NULL, NULL, NULL),
(173, '95314 Woreda To Woreda', 267, 69, '95314', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 75, 70, 79, NULL, NULL, NULL, NULL, NULL, NULL),
(205, '93 Woreda To Woreda', 273, 173, '93', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 172, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(206, '18 Woreda To Woreda', 273, 173, '18', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 172, 174, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(207, '36 Woreda To Woreda', 273, 173, '36', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 172, 174, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(208, '19 Woreda To Woreda', 273, 173, '19', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 172, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(209, '92 Woreda To Woreda', 273, 173, '92', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 174, 172, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(210, '52 Woreda To Woreda', 273, 174, '52', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 172, 173, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(211, '73 Woreda To Woreda', 273, 174, '73', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 173, 172, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(212, '51 Woreda To Woreda', 273, 174, '51', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 172, 173, 175, NULL, NULL, NULL, NULL, NULL, NULL),
(213, '61 Woreda To Woreda', 273, 174, '61', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 173, 172, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(214, '79 Woreda To Woreda', 273, 174, '79', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 173, 172, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(215, '97561 Woreda To Woreda', 273, 176, '97561', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 175, 172, 173, NULL, NULL, NULL, NULL, NULL, NULL),
(216, '48957 Woreda To Woreda', 273, 176, '48957', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 174, 175, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(217, '52813 Woreda To Woreda', 273, 176, '52813', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 173, 172, 175, NULL, NULL, NULL, NULL, NULL, NULL),
(218, '62154 Woreda To Woreda', 273, 176, '62154', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 175, 172, 173, NULL, NULL, NULL, NULL, NULL, NULL),
(219, '43862 Woreda To Woreda', 273, 176, '43862', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 172, 173, 174, NULL, NULL, NULL, NULL, NULL, NULL),
(220, '89763 Woreda To Woreda', 273, 175, '89763', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 173, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(221, '82749 Woreda To Woreda', 273, 175, '82749', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 172, 173, 174, NULL, NULL, NULL, NULL, NULL, NULL),
(222, '97154 Woreda To Woreda', 273, 175, '97154', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 172, 173, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(223, '75648 Woreda To Woreda', 273, 175, '75648', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 172, 173, 174, NULL, NULL, NULL, NULL, NULL, NULL),
(224, '35278 Woreda To Woreda', 273, 175, '35278', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 173, 174, 172, NULL, NULL, NULL, NULL, NULL, NULL),
(225, '95871 Woreda To Woreda', 273, 172, '95871', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 173, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(226, '21537 Woreda To Woreda', 273, 172, '21537', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 173, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(227, '73584 Woreda To Woreda', 273, 172, '73584', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 173, 176, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(228, '98476 Woreda To Woreda', 273, 172, '98476', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 173, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(229, '78429 Woreda To Woreda', 273, 172, '78429', 'Woreda To Woreda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 173, 176, 174, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `uimg` varchar(250) DEFAULT NULL,
  `urole` varchar(100) NOT NULL,
  `aname` int(11) DEFAULT NULL,
  `wname` int(11) DEFAULT NULL,
  `uphone` int(10) NOT NULL,
  `uemail` varchar(100) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `first_login` int(11) NOT NULL DEFAULT 0,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fname`, `mname`, `lname`, `uimg`, `urole`, `aname`, `wname`, `uphone`, `uemail`, `password`, `first_login`, `status`) VALUES
(416, 'Estifanos', 'Aschale', 'Kassa', './../../../../../../images/pp/2589-Capture.PNG', 'Regional Admin', 265, 36, 918819955, 'a@gmail.com', '$2y$10$T3MYYoNDyUlgkl773C/MdOExaJXU87iOoyi.ppKanHesp1Vo.44s2', 1, 1),
(526, 'Netsi', 'Haile', 'Teshu', NULL, 'Zone Admin', 274, NULL, 923225254, 'b@gmail.com', '$2y$10$shzvww6zUD/Zwth.bzpo7.d6l/HmEGB4U8O8Pgj1.uIG6qywNvrHK', 1, 1),
(530, 'Hirut', 'Tesfaw', 'Getachew', NULL, 'Woreda Admin', 274, 178, 923225585, 'c@gmail.com', '$2y$10$34D4gOjxt7jpPc7L5.mJsO1X38RKoIlUzTL5l7k/mY.ldF2vAIHMm', 1, 1),
(532, 'Hana', 'Goytom', 'Tsadik', NULL, 'Woreda TDS expert', 274, 178, 918819956, 'cc@gmail.com', '$2y$10$AHwHtlXDpczUeS0pHDz66.hiwAWfGyysAvHTGQ.C3etgDtEuZOSvW', 1, 1),
(533, 'Nigussie', 'Sefinew ', 'Tagele', NULL, 'Zone Admin', 273, NULL, 923225263, 'b1@gmail.com', '$2y$10$X2.I4W56rLp95bnnwLPumOhl9WIzLozkOLPZ6Pb8hAm.LIM3VYo12', 1, 1),
(539, 'Belay ', 'Mebratu', 'Demeke', NULL, 'Zone Admin', 267, NULL, 918819951, 'stephen.as17@yahoo.com', '$2y$10$4UUxd0zE9K6telnkRwiSdesCHUHpMLVwuJHDHaU4hwsSXB0BGzT2S', 1, 1),
(541, '1', '1', '1', NULL, 'Woreda Admin', 267, 69, 0, '1', '$2y$10$wTMTI5e4uq3/TEgCV22D5efSQokM4jEie1UEWfRjZwWpBHlQf4xXO', 1, 1),
(543, '2', '2', '2', NULL, 'Woreda Admin', 267, 70, 918819966, '2', '$2y$10$n/lkIje1PCcRXTjyYD6TYOVYAnnmcsADCY/UG2JQSveDHU0ZlVcxO', 1, 1),
(544, '3', '3', '3', NULL, 'Woreda Admin', 267, 71, 918819967, '3', '$2y$10$Z3RUBBnQVT4bLx64xMgXHODaMsfVY4/9OgIwSZjQfBRs0WSV34od6', 1, 1),
(549, '11', '11', '11', NULL, 'Woreda TDS expert', 267, 69, 918818888, '11', '$2y$10$bPRBV04q/BjaweNR50sL6On1m2cCrzIHIpYCNMryMa4Be5rghMXgm', 1, 1),
(550, '22', '22', '22', NULL, 'Woreda TDS expert', 267, 70, 918818889, '22', '$2y$10$.2pWE7EdjDFIlt3C6sb0jegurAeWYG4FjdKkfZvdntgWDcm0SGuky', 1, 1),
(551, '33', '33', '33', NULL, 'Woreda TDS expert', 267, 71, 918818890, '33', '$2y$10$nMIKE41i0pIXmlZuNrHQq.xmybZMPMVBdg8LHBQ93.j4/f4dh893q', 1, 1),
(559, 'hhgfdh', 'sswhg', 'hhg', NULL, 'Zone Admin', 284, NULL, 989845984, 'jhdja@gmail.com', '$2y$10$YMLNO0AX.x9.neJ5Ao7xbOw5Hbk8Z.oDbg.emwbKf9Qjt3eVarFGG', 0, 1),
(570, 'Eden', 'Gelagay', 'Taye', NULL, 'Woreda Admin', 274, 182, 956558521, 'eden@gmail.com', '$2y$10$zL1akzUL4AfFURarsYjMwOtPZwfJoCWvoVrAvwsQQZTFmNt6NF9Wu', 1, 1),
(571, 'Haimanot', 'Tefery', 'Haile', NULL, 'Woreda TDS expert', 274, 182, 912125487, 'h@gmail.com', '$2y$10$ThgX/lGt7YuQWMiMvVzWsOtxEr4xadWAc5I3c8WO6HvxkTNhxJtu6', 1, 1),
(572, 'quara', 'wored', 'admn', NULL, 'Woreda Admin', 273, 176, 918818181, 'q@gmail.com', '$2y$10$SUrXybKvnYh9uGzmvWqgbOHHBQ4f7jKNiIhCBpzBxscY5O/dr0dPC', 1, 1),
(577, 'Feven ', 'Geremew', 'Hailu', NULL, 'Woreda Admin', 274, 180, 923155114, 'n@gmail.com', '$2y$10$yD0Nu7xaOoo5Tx2aUCJbKO9NAhX1FFigq6bvmmT5iDDKHMdbLCe9K', 1, 1),
(578, 'Ketema', 'Bedilu', 'Tesfaye', NULL, 'Woreda TDS expert', 274, 180, 923659871, 'g@gmail.com', '$2y$10$WgtM94FM86jHr7IV.EPV1eEQvFM3NrN99WZKyFfJ59ymvIqPppZqS', 1, 1),
(580, 'quaraexpe', 'woer', 'fsasd', NULL, 'Woreda TDS expert', 273, 176, 918181818, 'qq@gmail.com', '$2y$10$2NdXoW0/a0ISvlTElLacjeZMewXl8OAUYOElP0z3aRgR7YRf7iG5W', 1, 1),
(581, 'qaswe', 'azxsd', 'zxcds', NULL, 'Woreda Admin', 273, 175, 923231818, 'w@gmail.com', '$2y$10$XPr5FG1t5ZbFSrG5pnimter1AJ8HpgUQbY7fzveDfcvGlqYwiDl6G', 1, 1),
(582, 'dfgtr', 'cvbgf', 'bnmjh', NULL, 'Woreda TDS expert', 273, 175, 937575656, 'ww@gmail.com', '$2y$10$nb6BTXAfnNRV6JW6sEI8ieqGotQiu1Eweg8YaNxcYc0kAsOAnjTkS', 1, 1),
(583, 'dffgh', 'dfgvcvb', 'dfgrg', NULL, 'Woreda Admin', 273, 172, 912123656, 'e@gmail.com', '$2y$10$PsfqNaA3jE1vGorfki7mc.Pl9TZH6hIEORckmqGAbLz0yyI2H6p22', 1, 0),
(584, 'gggggg', 'bvnvbn', 'xvxcx', NULL, 'Woreda TDS expert', 273, 172, 978789656, 'ee@gmail.com', '$2y$10$JJjkJ529S6t7sfb7Xam/LuFeoIgB0X51cUaeJddGGBZgikEkzuiu2', 1, 1),
(585, 'adagn', 'ager', 'chako', NULL, 'Woreda Admin', 273, 173, 946867512, 'ad@gmail.com', '$2y$10$gbdXifc/VEunb2xS3vC0OuYcVKltANQyV4BniiSzGr22dYIAxHgHO', 1, 0),
(586, 'mrab', 'armachho', 'chako', NULL, 'Woreda Admin', 273, 174, 946867513, 'ar@gmail.com', '$2y$10$aKvmCqDhC4oBLwxqTkoaZu2kR/mRh2YZ40qYvj0iOcvUG2QuvSPPi', 1, 1),
(587, 'armachho', 'expert', 'sda', NULL, 'Woreda TDS expert', 273, 174, 912123645, 'arr@gmail.com', '$2y$10$e1wnDNcNbUcHxJZ1zd9Hu.7mykxgutSY9yiBDcGn1Qg3okWMz.6g2', 1, 1),
(588, 'adagn', 'expert', 'dffg', NULL, 'Woreda TDS expert', 273, 173, 981187545, 'add@gmail.com', '$2y$10$7cp5NcVOkV1OCBkP8S4Nhe1nuYpdD3LotvddF0wG7wtbDdKyZLXn6', 1, 1),
(600, 'Zinaw', 'Akalu', 'Dbr', NULL, 'Woreda Admin', 274, 178, 923225874, 'nigussiesefinew.41@gmail.com', '$2y$10$OQGD/syTHcEU3zPkQ6xXxuvKDipPj1eeJO67sovJaQW.9qMwB2oFe', 0, 0),
(606, 'quara', 'wored', 'admn', NULL, 'Region TDS expert', 282, NULL, 912364583, 'estifanosaschale12@gmail.com', '$2y$10$IKG1mnhbpfA7RLlEKyQBRO52SXZ7HS2iHAjXu/atGhvwqjbUd/boa', 1, 1),
(610, 'Enmen', 'Akalu', 'Dbr', NULL, 'Woreda Admin', 273, 172, 912235696, 'b2@gmail.com', '$2y$10$XaeiIbRqq2aF/Cdds4IRyuPY1JVif/5XY1oHchzOWAk.iaNezyC1S', 1, 1),
(615, 'Haile ', 'Tamiru ', 'Temach', NULL, 'Zone TDS expert', 273, 302, 923225887, 'nigussiesefinew.40@gmail.com', '$2y$10$X5YnzNSnJoyhCOl97K8pAefMAKD3HpvtOYtavjSyRPOamcbgtMbZ.', 1, 1),
(616, 'koysha', 'Sefinew', 'Aschale', NULL, 'Zone Admin', 269, NULL, 918519955, 'ruhamanat@gmail.com', '$2y$10$K.KyMImqZp9v.Fi4yrv3yupPafeA4D2NU1pJaG3o0VddJkmUa0xdG', 0, 0),
(617, 'Haile ', 'Shegaw', 'Temu  ', NULL, 'Zone TDS expert', 273, 302, 923225564, 'nigussiesefienw.40@gmail.com', '$2y$10$YS6Y2zVLIjzwUuT6uXPkaehSZ4e3L0e9yJ2IGHjXwO4zOX1Q1pc.y', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `woreda`
--

CREATE TABLE `woreda` (
  `woreda_id` int(11) NOT NULL,
  `zoneid` int(11) DEFAULT NULL,
  `woreda_name` varchar(100) DEFAULT NULL,
  `woreda_code` int(11) DEFAULT NULL,
  `multiplication_point` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `woreda`
--

INSERT INTO `woreda` (`woreda_id`, `zoneid`, `woreda_name`, `woreda_code`, `multiplication_point`) VALUES
(21, 265, 'ሰሜን አቸፈር', 1, 1.2),
(22, 265, 'ደቡብ አቸፈር', 2, 1.2),
(23, 265, 'ባህርዳር ዙሪያ', 3, 1.2),
(24, 265, 'ይልማና ደንሳ', 4, 1.2),
(25, 265, 'ጎንጅ ቆለላ', 5, 1.2),
(26, 265, 'ቡሬ ዙሪያ', 6, 1.2),
(27, 265, 'ቡሬ ከተማ', 7, 1.1),
(28, 265, 'ሰከላ', 8, 1.2),
(29, 265, 'ደጋ ዳሞት', 9, 1.2),
(30, 265, 'ደምበጫ', 10, 1.2),
(31, 265, 'ወንበርማ', 11, 1.2),
(32, 265, 'ጃቢ ጠህናን', 12, 1.2),
(33, 265, 'ደቡብ ሜጫ', 13, 1.2),
(34, 265, 'ሰሜን ሜጫ', 14, 1.2),
(35, 265, 'ቋሪት', 15, 1.2),
(36, 265, 'ፍኖተ ሰላም', 16, 1),
(38, 270, 'አበርገሌ', 87, 1.5),
(39, 270, 'ዳህና', 88, 1.2),
(40, 270, 'ጋዝጊብላ', 89, 1.2),
(41, 270, 'ዝቋላ', 90, 1.5),
(42, 270, 'ሰቆጣ ከተማ', 91, 1.1),
(43, 270, 'ስሀላ ሰየምት', 92, 1.5),
(44, 270, 'ጻግብጂ', 93, 1.3),
(50, 266, 'አዋበል', 17, 1.2),
(51, 266, 'አነደድ', 18, 1.2),
(52, 266, 'ባሶሊበን', 19, 1.2),
(53, 266, 'ቢቡኝ', 20, 1.2),
(54, 266, 'ደባይጥላትግን', 21, 1.2),
(55, 266, 'ደጀን', 22, 1.2),
(56, 266, 'ጎንቻ ሲሶ እነሴ', 23, 1.2),
(57, 266, 'ጎዛምን', 24, 1.2),
(58, 266, 'ስናን', 25, 1.2),
(59, 266, 'ሁለት እጁእነሴ', 26, 1.2),
(60, 276, 'እናርጅ እናውጋ', 27, 1.2),
(61, 266, 'እነማይ', 28, 1.2),
(62, 266, 'ማቻከል', 29, 1.2),
(63, 266, 'ሸበል በረንታ', 30, 1.2),
(64, 266, 'ሞጣ ከተማ', 31, 1.1),
(65, 266, 'እነብሴ ሳር ምድር', 32, 1.2),
(66, 266, 'ደብረ ማርቆስ ከተማ', 33, 1),
(67, 266, 'ደ/ኤልያስ', 34, 1.2),
(68, 266, 'ሰዴኤ', 35, 1.2),
(69, 267, 'ቡግና', 36, 1.3),
(70, 267, 'ላስታ', 37, 1.2),
(71, 267, 'ዋድላ', 38, 1.2),
(72, 267, 'ዳውንት', 39, 1.2),
(73, 267, 'ግዳን', 40, 1.2),
(74, 267, 'ላሊበላ ከተማ', 41, 1.1),
(75, 267, 'ቆቦ ከተማ', 42, 1.1),
(76, 267, 'ጉባላፍቱ', 43, 1.2),
(77, 267, 'ሀብሩ', 44, 1.2),
(78, 267, 'ራያ ቆቦ', 45, 1.2),
(79, 267, 'መቄት', 46, 1.2),
(80, 267, 'አንጎት', 47, 1.2),
(81, 267, 'ወልዲያ ከተማ', 48, 1),
(82, 267, 'ጋዞ', 49, 1.2),
(83, 268, 'ታች ጋይንት', 50, 1.2),
(84, 268, 'ደራ', 51, 1.2),
(85, 268, 'እብናት', 52, 1.2),
(86, 268, 'እስቴ', 53, 1.2),
(87, 268, 'አንዳቤት', 54, 1.2),
(89, 268, 'ደብረታቦር', 55, 1),
(90, 268, 'ፎገራ', 56, 1.2),
(91, 268, 'ሊቦከምከም', 57, 1.2),
(92, 268, 'ላይጋይንት', 58, 1.2),
(93, 268, 'ወረታ ከተማ', 59, 1),
(94, 268, 'ስማዳ', 60, 1.2),
(96, 268, 'ሰደ ሙጃ', 62, 1.2),
(97, 268, 'ጉና ቤጌምድር', 63, 1.2),
(98, 268, 'መቀጣዋ', 64, 1.3),
(99, 268, 'ፋርጣ', 61, 1.2),
(100, 269, 'አምባሰል', 65, 1.2),
(101, 269, 'ወግዲ', 66, 1.2),
(102, 269, 'ቦረና', 67, 1.2),
(103, 269, 'ኮምቦልቻ', 68, 1),
(104, 269, 'ጃማ', 69, 1.2),
(105, 269, 'ቃሉ', 70, 1.2),
(106, 269, 'ከላላ', 71, 1.2),
(108, 269, 'ኩታ በር', 72, 1.2),
(109, 269, 'ለጋምቦ', 73, 1.2),
(110, 269, 'መሀል ሳይንት', 74, 1.3),
(111, 269, 'ወረባቦ', 75, 1.2),
(112, 269, 'መቅደላ', 76, 1.2),
(113, 269, 'ወረኢሉ', 77, 1.2),
(114, 269, 'ለገሂዳ', 78, 1.2),
(115, 269, 'ተሁለደሬ', 79, 1.2),
(117, 269, 'ደሴ ዙሪያ', 80, 1.2),
(118, 269, 'ተንታ', 81, 1.2),
(119, 269, 'አልብኮ', 82, 1.2),
(120, 269, 'አርጎባ ልዩ ወረዳ', 83, 1.3),
(121, 269, 'ሳይንት አጂባር', 84, 1.3),
(122, 269, 'ደላንታ', 85, 1.2),
(124, 270, 'ሰቆጣ ዙሪያ', 86, 1.2),
(126, 271, 'በረህት', 94, 1.3),
(127, 271, 'ምንጃር ሸንኮራ', 95, 1.2),
(128, 271, 'አንጎለላ ', 96, 1.2),
(129, 271, 'አንኮበር', 97, 1.2),
(130, 271, 'ባሶና ወራና', 98, 1.2),
(131, 271, 'ኤፍራታና ግድም', 99, 1.2),
(132, 271, 'መንዝ ጌራምድር', 100, 1.2),
(133, 271, 'መንዝ ቀያ ገብረኤል', 101, 1.2),
(134, 271, 'ሀገረ ማርያም', 102, 1.2),
(135, 271, 'ሲያደብርና ዋዩ', 103, 1.2),
(136, 271, 'እንሳሮ', 104, 1.2),
(137, 271, 'ቀወት', 105, 1.3),
(138, 271, 'መንዝ ላሎ ምድር', 106, 1.2),
(139, 271, 'መንዝ ማማ ምድር', 107, 1.2),
(140, 271, 'መርሀቤቴ', 108, 1.2),
(141, 271, 'ሚዳወረሞ', 109, 1.3),
(142, 271, 'ጣርማበር', 110, 1.2),
(143, 271, 'ሞረትና ጅሩ', 111, 1.2),
(144, 271, 'ሸዋሮቢት ከተማ', 112, 1.1),
(145, 271, 'አንጾኪያ ገምዛ', 113, 1.2),
(146, 271, 'ግሼራቤል', 114, 1.4),
(147, 271, 'ደብረብርሀን ከተማ ', 115, 1),
(148, 271, 'አሳግርት', 116, 1.2),
(149, 271, 'ሞጃና ወደራ', 117, 1.2),
(150, 272, 'ምዕራብ በለሳ', 118, 1.4),
(151, 272, 'አለፋ', 119, 1.2),
(152, 272, 'ጣቁሳ', 120, 1.2),
(153, 272, 'ጠገደ', 121, 1.5),
(154, 272, 'ወገራ', 122, 1.2),
(155, 272, 'ምስራቅ በለሳ', 123, 1.4),
(156, 272, 'ታች አርማጭሆ', 124, 1.5),
(157, 272, 'ኪንፋዝ በገላ', 125, 1.4),
(158, 272, 'ምዕራብ ደንቢያ', 126, 1.2),
(159, 272, 'ምስራቅ ደንቢያ', 127, 1.2),
(160, 272, 'ጎንደር ዙሪያ ', 128, 1.2),
(161, 272, 'ላይ አርማጭሆ', 129, 1.2),
(162, 272, 'ነባሩ ጭልጋ', 130, 1.2),
(163, 272, 'ጭልጋ ቁጥር አንድ', 131, 1.2),
(164, 272, 'ማዕከላዊ አርማጭሆ', 132, 1.5),
(165, 275, 'ጠለምት', 133, 1.5),
(166, 275, 'ጃናሞራ', 134, 1.4),
(167, 275, 'በየዳ', 135, 1.5),
(168, 275, 'ደባርቅ ከተማ', 136, 1),
(169, 275, 'ዳባት', 137, 1.2),
(170, 275, 'ደባርቅ ዙሪያ', 138, 1.2),
(171, 275, 'አዲአርቃይ', 139, 1.5),
(172, 273, 'ገንዳ ውሃ ከተማ', 140, 1.3),
(173, 273, 'አዳኝ አገር ጫቆ', 141, 1.4),
(174, 273, 'ምዕራብ አርማጭሆ', 142, 1.5),
(175, 273, 'መተማ', 143, 1.5),
(176, 273, 'ቋራ', 144, 1.5),
(177, 274, 'አርጡማ ፋርሲ', 145, 1.2),
(178, 274, 'ባቲ ዙሪያ', 146, 1.3),
(179, 274, 'ባቲ ከተማ', 147, 1.1),
(180, 274, 'ደዋ ጨፋ', 148, 1.2),
(181, 274, 'ደዌ ሀረዋ', 149, 1.3),
(182, 274, 'ጅሌ ጥሙጋ', 150, 1.3),
(183, 274, 'ከሚሴ ከተማ', 151, 1),
(184, 276, 'ዳንግላ ዙሪያ', 152, 1.2),
(185, 276, 'ዳንግላ ከተማ', 153, 1),
(186, 276, 'ጃዊ', 154, 1.5),
(187, 276, 'አንከሻ ጓጉሳ', 155, 1.2),
(188, 276, 'ጓንጓ', 156, 1.2),
(189, 276, 'ዚገም', 157, 1.4),
(190, 276, 'ቻግኒ ከተማ ', 158, 1.1),
(191, 276, 'ፋግታ ለኩማ', 159, 1.2),
(192, 276, 'ባንጃ', 160, 1.2),
(193, 276, 'ጓጉሳ', 161, 1.2),
(194, 276, 'እንጅባራ ከተማ ', 162, 1),
(195, 276, 'አየሁ ጓጉሳ', 163, 1.2),
(196, 277, 'ሰቲት ሁመራ ክ/አስተዳደር', 164, 1.2),
(197, 277, 'ዳንሻ ከ/አስተዳደር', 165, 1.2),
(198, 277, 'ጠገደ', 166, 1.5),
(199, 277, 'ካብታ ሁመራ', 167, 1.5),
(200, 277, 'አውራ', 168, 1.5),
(201, 277, 'ወልቃይት', 169, 1.5),
(202, 5, 'ደሴ ከተማ', 170, 1),
(203, 5, 'ባ/ዳር ከተማ', 171, 1),
(204, 5, 'ጎንደር ከተማ', 172, 1),
(205, 5, 'በየትኛዉም ወረዳ', 173, 1),
(302, NULL, NULL, NULL, NULL),
(303, 277, 'Maytsebri', 176, 1.5),
(305, 273, 'ሽንፋ', 177, 1.5);

-- --------------------------------------------------------

--
-- Table structure for table `zone`
--

CREATE TABLE `zone` (
  `zone_id` int(11) NOT NULL,
  `zone_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `zone`
--

INSERT INTO `zone` (`zone_id`, `zone_name`) VALUES
(282, NULL),
(283, 'Dangila'),
(280, 'Kombolcha '),
(284, 'welqayit'),
(272, 'ማዕከላዊ ጎንደር'),
(266, 'ምስራቅ ጎጃም'),
(273, 'ምዕራብ ጎንደር'),
(265, 'ምዕራብ ጎጃም'),
(271, 'ሰሜን ሸዋ'),
(267, 'ሰሜን ወሎ'),
(275, 'ሰሜን ጎንደር'),
(278, 'ባህርዳር'),
(276, 'አዊ ብሄረሰብ አስተዳደር '),
(274, 'ኦሮሞ ብሄረሰብ አስተዳደር'),
(277, 'ወልቃይት ጠገደ ሰጢጥ ሁመራ'),
(270, 'ዋግ ሕምራ'),
(5, 'ዞነ አስተዳደር'),
(269, 'ደቡብ ወሎ'),
(268, 'ደቡብ ጎንደር');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forgot_password`
--
ALTER TABLE `forgot_password`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gudgit`
--
ALTER TABLE `gudgit`
  ADD PRIMARY KEY (`gudgnit id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `job_level`
--
ALTER TABLE `job_level`
  ADD PRIMARY KEY (`level_id`),
  ADD KEY `jobid` (`jobid`);

--
-- Indexes for table `required`
--
ALTER TABLE `required`
  ADD PRIMARY KEY (`required_id`),
  ADD KEY `zone` (`zone`),
  ADD KEY `woreda` (`woreda`),
  ADD KEY `school` (`school`);

--
-- Indexes for table `required_woreda`
--
ALTER TABLE `required_woreda`
  ADD PRIMARY KEY (`required_id`),
  ADD UNIQUE KEY `handler` (`handler`);

--
-- Indexes for table `resource`
--
ALTER TABLE `resource`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `known_id` (`known_id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`school_id`),
  ADD KEY `woreda_id` (`woreda_id`);

--
-- Indexes for table `superviser`
--
ALTER TABLE `superviser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacher_id`),
  ADD UNIQUE KEY `known_id` (`knownid`),
  ADD KEY `zone` (`zone`),
  ADD KEY `woreda` (`woreda`),
  ADD KEY `school` (`school`);

--
-- Indexes for table `teacher_transfer`
--
ALTER TABLE `teacher_transfer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `known_id` (`known_id`);

--
-- Indexes for table `transfer_request`
--
ALTER TABLE `transfer_request`
  ADD PRIMARY KEY (`request_id`),
  ADD UNIQUE KEY `choice_key` (`choice_key`),
  ADD KEY `current_zone` (`current_zone`),
  ADD KEY `current_woreda` (`current_woreda`),
  ADD KEY `transfer_request_ibfk_1` (`teacher_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `uemail` (`uemail`),
  ADD UNIQUE KEY `uphone` (`uphone`),
  ADD KEY `users_ibfk_1` (`aname`),
  ADD KEY `users_ibfk_2` (`wname`);

--
-- Indexes for table `woreda`
--
ALTER TABLE `woreda`
  ADD PRIMARY KEY (`woreda_id`),
  ADD UNIQUE KEY `woreda_code` (`woreda_code`),
  ADD KEY `woreda_ibfk_1` (`zoneid`);

--
-- Indexes for table `zone`
--
ALTER TABLE `zone`
  ADD PRIMARY KEY (`zone_id`),
  ADD UNIQUE KEY `zone_name` (`zone_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forgot_password`
--
ALTER TABLE `forgot_password`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `job_level`
--
ALTER TABLE `job_level`
  MODIFY `level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `required`
--
ALTER TABLE `required`
  MODIFY `required_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `required_woreda`
--
ALTER TABLE `required_woreda`
  MODIFY `required_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=659;

--
-- AUTO_INCREMENT for table `resource`
--
ALTER TABLE `resource`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=366;

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `school_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT for table `teacher_transfer`
--
ALTER TABLE `teacher_transfer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1278;

--
-- AUTO_INCREMENT for table `transfer_request`
--
ALTER TABLE `transfer_request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=230;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=621;

--
-- AUTO_INCREMENT for table `woreda`
--
ALTER TABLE `woreda`
  MODIFY `woreda_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=306;

--
-- AUTO_INCREMENT for table `zone`
--
ALTER TABLE `zone`
  MODIFY `zone_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=285;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `job_level`
--
ALTER TABLE `job_level`
  ADD CONSTRAINT `job_level_ibfk_1` FOREIGN KEY (`jobid`) REFERENCES `job` (`job_id`);

--
-- Constraints for table `required`
--
ALTER TABLE `required`
  ADD CONSTRAINT `required_ibfk_1` FOREIGN KEY (`zone`) REFERENCES `zone` (`zone_id`),
  ADD CONSTRAINT `required_ibfk_2` FOREIGN KEY (`woreda`) REFERENCES `woreda` (`woreda_id`),
  ADD CONSTRAINT `required_ibfk_3` FOREIGN KEY (`school`) REFERENCES `school` (`school_id`);

--
-- Constraints for table `school`
--
ALTER TABLE `school`
  ADD CONSTRAINT `school_ibfk_1` FOREIGN KEY (`woreda_id`) REFERENCES `woreda` (`woreda_id`);

--
-- Constraints for table `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_ibfk_1` FOREIGN KEY (`zone`) REFERENCES `zone` (`zone_id`),
  ADD CONSTRAINT `teachers_ibfk_2` FOREIGN KEY (`woreda`) REFERENCES `woreda` (`woreda_id`),
  ADD CONSTRAINT `teachers_ibfk_3` FOREIGN KEY (`school`) REFERENCES `school` (`school_id`);

--
-- Constraints for table `transfer_request`
--
ALTER TABLE `transfer_request`
  ADD CONSTRAINT `transfer_request_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`knownid`),
  ADD CONSTRAINT `transfer_request_ibfk_2` FOREIGN KEY (`current_zone`) REFERENCES `zone` (`zone_id`),
  ADD CONSTRAINT `transfer_request_ibfk_3` FOREIGN KEY (`current_woreda`) REFERENCES `woreda` (`woreda_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`aname`) REFERENCES `zone` (`zone_id`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`wname`) REFERENCES `woreda` (`woreda_id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Constraints for table `woreda`
--
ALTER TABLE `woreda`
  ADD CONSTRAINT `woreda_ibfk_1` FOREIGN KEY (`zoneid`) REFERENCES `zone` (`zone_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
