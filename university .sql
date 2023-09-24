-- phpMyAdmin SQL Dump
-- version 2.11.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 20, 2023 at 07:36 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `university`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(10) NOT NULL auto_increment,
  `cat_name` varchar(255) NOT NULL,
  PRIMARY KEY  (`cat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'GEN'),
(2, 'OBC'),
(3, 'SC'),
(4, 'ST');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `country_id` int(20) NOT NULL auto_increment,
  `country_name` varchar(255) NOT NULL,
  PRIMARY KEY  (`country_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=146 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`) VALUES
(1, 'INDIA'),
(2, 'CHINA'),
(3, 'AMERICA'),
(4, 'BRAZEEL'),
(5, 'RUSSIA'),
(119, 'AFRICA'),
(145, 'ISRAIL'),
(122, 'SAUDI');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `course_id` int(20) NOT NULL auto_increment,
  `course_name` varchar(255) NOT NULL,
  `course_fees` varchar(255) NOT NULL,
  `course_Dur` varchar(255) NOT NULL,
  `course_eligble` varchar(255) NOT NULL,
  PRIMARY KEY  (`course_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_fees`, `course_Dur`, `course_eligble`) VALUES
(1, 'BCA', '80000', '3Year', 'High School And Inter Pass'),
(2, 'MCA', '90000', '2 Year', 'BCA  Graduation '),
(3, 'PGDCA', '60000', '1Year', 'Inter Pass'),
(4, 'M-TECH', '140000', '2 Year', 'B-Tech'),
(5, 'B-TECH', '120000', '4 Year', 'High & Inter Pass'),
(6, 'BBA', '60000', '3 Year', 'Inter Pass'),
(7, 'B.Com', '55000', '3 Year', 'High & Inter Pass'),
(8, 'ADCA', '8000', '1 Year', 'High School Pass'),
(9, 'DCA', '5000', '6 Month', 'High School Pass'),
(10, 'TALLY', '10000', '3 Month', 'High School Pass'),
(11, 'CCC', '5000', '2 Month', 'High School Pass');

-- --------------------------------------------------------

--
-- Table structure for table `examcourse`
--

CREATE TABLE IF NOT EXISTS `examcourse` (
  `ecourse_id` int(255) NOT NULL auto_increment,
  `ecourse_name` varchar(255) NOT NULL,
  PRIMARY KEY  (`ecourse_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `examcourse`
--

INSERT INTO `examcourse` (`ecourse_id`, `ecourse_name`) VALUES
(1, 'BCA'),
(2, 'MCA'),
(4, 'B-TECH'),
(5, 'M-TECH');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE IF NOT EXISTS `exams` (
  `exam_id` int(255) NOT NULL auto_increment,
  `exam_title` varchar(255) NOT NULL,
  `exam_course` varchar(255) NOT NULL,
  `exam_subject` varchar(255) NOT NULL,
  `exam_date` varchar(255) NOT NULL,
  `exam_shift` varchar(255) NOT NULL,
  `exam_desc` varchar(255) NOT NULL,
  PRIMARY KEY  (`exam_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`exam_id`, `exam_title`, `exam_course`, `exam_subject`, `exam_date`, `exam_shift`, `exam_desc`) VALUES
(2, 'Semester', '1', '1', '2023-08-21', 'Morning(10:00 AM-01:00 PM)', 'Only BCA Student'),
(3, 'Semester', '2', '4', '2023-08-25', 'Evening(02:00 PM-05:00 PM)', 'Only MCA Student'),
(4, 'Semester', '2', '5', '2023-08-26', 'Morning(10:00 AM-01:00 PM)', 'Only MCA Student');

-- --------------------------------------------------------

--
-- Table structure for table `faculity`
--

CREATE TABLE IF NOT EXISTS `faculity` (
  `fac_id` int(10) NOT NULL auto_increment,
  `fac_name` varchar(255) NOT NULL,
  `fac_dob` varchar(255) NOT NULL,
  `fac_phone` varchar(255) NOT NULL,
  `fac_gender` varchar(255) NOT NULL,
  `fac_cat` varchar(255) NOT NULL,
  `fac_address` varchar(255) NOT NULL,
  `fac_qual` varchar(255) NOT NULL,
  `fac_exp` varchar(255) NOT NULL,
  `fac_area` varchar(255) NOT NULL,
  `fac_desig` varchar(255) NOT NULL,
  `fac_email` varchar(255) NOT NULL,
  `fac_net` varchar(255) NOT NULL,
  `fac_phd` varchar(255) NOT NULL,
  `fac_image` varchar(255) NOT NULL,
  `fac_status` varchar(255) NOT NULL,
  `fac_sec` varchar(255) NOT NULL,
  `fac_ans` varchar(255) NOT NULL,
  `fac_type` varchar(255) NOT NULL,
  `fac_pass` varchar(255) NOT NULL,
  PRIMARY KEY  (`fac_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `faculity`
--

INSERT INTO `faculity` (`fac_id`, `fac_name`, `fac_dob`, `fac_phone`, `fac_gender`, `fac_cat`, `fac_address`, `fac_qual`, `fac_exp`, `fac_area`, `fac_desig`, `fac_email`, `fac_net`, `fac_phd`, `fac_image`, `fac_status`, `fac_sec`, `fac_ans`, `fac_type`, `fac_pass`) VALUES
(2, 'Raj', '01/01/2002', '1544564656', 'Male', '1', 'Prayagraj', 'BCA MCA', '1Year', 'Teaching', 'Profecor', 'raj@gmail.com', 'No', 'No', 'logoimg.png', 'true', 'c81e728d9d4c2f636f067f89cc14862c', '65a1223dae83b8092c4edba0823a793c', 'faculity', 'a439c3fa932d4eadfc97202cf2b7308e'),
(3, 'Shubham', '01/01/2000', '1544564265', 'Male', '2', 'Prayagraj', 'B-tech M-tech', '2Year', 'Teaching', 'Lactural', 'shubham@gmail.com', 'No', 'No', 'logoimg.png', 'false', 'c81e728d9d4c2f636f067f89cc14862c', '3b6beb51e76816e632a40d440eab0097', 'faculity', 'b523f16be3febf259d384950936144bb'),
(4, 'Priyanshi', '01/01/1995', '1544564456', 'Male', '2', 'Prayagraj', 'BSC.Math,B-tech,M-tech', '4Year', 'Teaching', 'Profecor', 'priyanshi@gmail.com', 'Yes', 'Yes', 'logoimg.png', 'true', 'c81e728d9d4c2f636f067f89cc14862c', 'f6f47bd3b428e5a1e5c04e89ce69d5ad', 'faculity', '1ca5d336df8dfa959b162c87f30fb487'),
(5, 'Dhruv', '01/01/1999', '1544564454', 'Male', '2', 'Prayagraj', 'BSC.Math,B-tech,M-tech', '3Year', 'Teaching', 'Profecor', 'dhruv@gmail.com', 'No', 'Yes', 'logoimg.png', 'true', 'c81e728d9d4c2f636f067f89cc14862c', '1eba9614763773df08dd49049663c3e3', 'faculity', '224054dced6d8e3f1143a681526bcf59'),
(6, 'Shiva', '01/01/2002', '1544564896', 'Male', '2', 'Prayagraj', 'B-tech M-tech', '1Year', 'Teaching', 'Profecor', 'shiva@gmail.com', 'No', 'No', 'logoimg.png', 'true', 'c81e728d9d4c2f636f067f89cc14862c', '69f404925df883e0e5579d65b7768e7c', 'faculity', '40db91882ef984bcdc517969186960d9'),
(7, 'Anu', '01/01/2002', '1544578456', 'Female', '2', 'Prayagraj', 'BCA MCA', '1Year', 'Teaching', 'Profecor', 'anu@gmail.com', 'Yes', 'No', 'logoimg.png', 'true', 'c81e728d9d4c2f636f067f89cc14862c', '89a4b5bd7d02ad1e342c960e6a98365c', 'faculity', '86c1ca50aa9ae3408797766185a3fe96'),
(18, 'Anamika Pandey', '01/01/1990', '8888555556', 'Female', '1', 'Prayagraj', 'BSC-Math,BCA MCA', '3 Year', 'Teaching', 'Profecor', 'anamika@gmail.com', 'Yes', 'Yes', 'logoimg.png', 'false', 'c81e728d9d4c2f636f067f89cc14862c', '012424224c77e9b1d29b271aa4611a45', 'faculity', '1de38e237013175cc433be422cd60580'),
(22, 'Pawan', '21/07/2002', '5445014882', 'Male', '2', 'Prayagraj                                    ', 'Teaching                                    ', ' 2 Year                              ', 'Teaching                                    ', 'Profecor', 'pawan@gmail.com', 'No', 'No', '20221001_1314141693806155.jpg', 'false', 'c81e728d9d4c2f636f067f89cc14862c', 'e546efafd624d5096f96e9b1dc42da42', 'faculity', 'c95d44f58d4ce1b62976af548346aa15');

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE IF NOT EXISTS `fees` (
  `fees_id` int(255) NOT NULL auto_increment,
  `fees_st_id` int(255) NOT NULL,
  `fees_st_course` varchar(255) NOT NULL,
  `fees_total` varchar(255) NOT NULL,
  `fees_amount` varchar(255) NOT NULL,
  `fees_balance` varchar(255) NOT NULL,
  `fees_date` varchar(255) NOT NULL,
  `fees_desc` varchar(255) NOT NULL,
  PRIMARY KEY  (`fees_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`fees_id`, `fees_st_id`, `fees_st_course`, `fees_total`, `fees_amount`, `fees_balance`, `fees_date`, `fees_desc`) VALUES
(16, 5, 'BCA', '80000', '80000', 'null', '20-08-23', 'All Paid'),
(15, 4, 'MCA', '90000', '50000,40000', 'null', '20-08-23,20/08/23', '1st paid,Penging All Paid'),
(12, 7, 'B-TECH', '120000', '120000', 'null', '20-08-23', 'paid'),
(14, 3, 'BCA', '80000', '80000', 'null', '20-08-23', 'Paid'),
(19, 10, 'BCA', '80000', '80000', 'null', '04-09-23', 'All paid ');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `gal_id` int(10) NOT NULL auto_increment,
  `gal_image` varchar(255) NOT NULL,
  PRIMARY KEY  (`gal_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gal_id`, `gal_image`) VALUES
(43, 'EQAEzcs.webp'),
(44, 'HD-wallpaper-jai-shree-krishna-bhagwan-lord-radhe-shree-krishna-shri-krishna.jpg'),
(40, '5913057.webp'),
(41, 'abc1010.jpg'),
(42, 'Bp1FbZ6.webp'),
(39, '161716.webp'),
(37, '793bb0d8845f9a44f922b1903fb94c58.jpg'),
(38, '28008dc9ac3beb19ccc45927ec4f4fdc.jpg'),
(36, '483a299fde750664b529c727d2a840b0.jpg'),
(35, '3kRbHzu.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `login_id` int(10) NOT NULL auto_increment,
  `login_user` varchar(255) NOT NULL,
  `login_pass` varchar(255) NOT NULL,
  `login_cpass` varchar(255) NOT NULL,
  `login_sec_id` varchar(255) NOT NULL,
  `login_ans` varchar(255) NOT NULL,
  `login_type` varchar(255) NOT NULL,
  PRIMARY KEY  (`login_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `login_user`, `login_pass`, `login_cpass`, `login_sec_id`, `login_ans`, `login_type`) VALUES
(1, '0ac95ef7abfe8c69e4b30c6ee83e150e', 'dc06698f0e2e75751545455899adccc3', '996797b8fbf18227d3eb1fa438a718f9', 'c81e728d9d4c2f636f067f89cc14862c', '9d32883d50e03b30450fa9ab25e6f280', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `mark_add`
--

CREATE TABLE IF NOT EXISTS `mark_add` (
  `mark_id` int(100) NOT NULL auto_increment,
  `mark_st_id` varchar(255) NOT NULL,
  `mark_st_name` varchar(255) NOT NULL,
  `mark_st_father` varchar(255) NOT NULL,
  `mark_st_gen` varchar(255) NOT NULL,
  `mark_st_course` varchar(255) NOT NULL,
  `mark_sub` varchar(255) NOT NULL,
  `mark_sub_total` varchar(255) NOT NULL,
  `mark_sub_obt` varchar(255) NOT NULL,
  `mark_sub_prac` varchar(255) NOT NULL,
  `obt_prac` varchar(255) NOT NULL,
  `mark_date` varchar(255) NOT NULL,
  `mark_desc` varchar(255) NOT NULL,
  `mark_sum_total` varchar(255) NOT NULL,
  PRIMARY KEY  (`mark_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `mark_add`
--

INSERT INTO `mark_add` (`mark_id`, `mark_st_id`, `mark_st_name`, `mark_st_father`, `mark_st_gen`, `mark_st_course`, `mark_sub`, `mark_sub_total`, `mark_sub_obt`, `mark_sub_prac`, `obt_prac`, `mark_date`, `mark_desc`, `mark_sum_total`) VALUES
(1, '10', 'Shubham', 'shyam', 'Male', '1', '1', '70', '55', '30', '25', '2023-09-08', 'good', '80'),
(2, '10', 'Shubham', 'shyam', 'Male', '1', '2', '70', '40', '30', '27', '2023-09-08', 'good', '67'),
(3, '10', 'Shubham', 'shyam', 'Male', '1', '3', '70', '50', '30', '27', '2023-09-08', 'good', '77'),
(4, '3', 'Mrs Shyama Singh', 'Mr. Prem Singh', 'Female', '1', '1', '70', '50', '30', '22', '2023-01-01', 'good', '72'),
(5, '3', 'Mrs Shyama Singh', 'Mr. Prem Singh', 'Female', '1', '2', '70', '30', '30', '22', '2023-01-01', 'good', '52'),
(7, '3', 'Mrs Shyama Singh', 'Mr. Prem Singh', 'Female', '1', '3', '70', '39', '30', '27', '2023-01-01', 'good', '66'),
(8, '4', 'Mr Amar Shrivastava', 'Mr Ankur Shrivastava', 'Male', '2', '4', '70', '65', '30', '25', '2023-01-01', 'good', '90'),
(9, '4', 'Mr Amar Shrivastava', 'Mr Ankur Shrivastava', 'Male', '2', '5', '70', '65', '30', '25', '2023-01-01', 'good', '90');

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

CREATE TABLE IF NOT EXISTS `qualification` (
  `quali_id` int(20) NOT NULL auto_increment,
  `quali_name` varchar(255) NOT NULL,
  PRIMARY KEY  (`quali_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `qualification`
--

INSERT INTO `qualification` (`quali_id`, `quali_name`) VALUES
(1, '10th'),
(2, '12th'),
(3, 'Graduation');

-- --------------------------------------------------------

--
-- Table structure for table `security`
--

CREATE TABLE IF NOT EXISTS `security` (
  `security_id` int(10) NOT NULL auto_increment,
  `security_question` varchar(255) NOT NULL,
  PRIMARY KEY  (`security_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `security`
--

INSERT INTO `security` (`security_id`, `security_question`) VALUES
(1, 'What is your mother''s name'),
(2, 'What is your nick name'),
(3, 'What is your father''s name?'),
(4, 'what is your dob ?'),
(5, 'what is your favorite place?'),
(6, 'what is your school name?'),
(7, 'what is your pet animal''s name ?'),
(8, 'what is your best friend''s?'),
(9, 'what is your age?'),
(10, 'what is your favorite game?');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `state_id` int(20) NOT NULL auto_increment,
  `state_name` varchar(255) NOT NULL,
  `state_country` varchar(255) NOT NULL,
  PRIMARY KEY  (`state_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`, `state_country`) VALUES
(1, 'UTTAR PRADESH', '1'),
(2, 'MADHYA PRADESH', '1'),
(3, 'HIMACHAL PRADESH', '1'),
(4, 'UTTRAKHAND', '1'),
(5, 'JHARKHAND', '1'),
(6, 'Beinjing', '2'),
(7, 'Tianjin', '2'),
(8, 'Hebiee', '2'),
(9, 'Lianing', '2'),
(10, 'Shanghai', '2'),
(11, 'Jaingsu', '2'),
(12, 'Henjinang', '2'),
(13, 'Shandong', '2'),
(14, 'Alaboma', '3'),
(15, 'Alaska', '3'),
(16, 'Arizona', '3'),
(17, 'Arkansas', '3'),
(18, 'California', '3'),
(19, 'Hawaii', '3'),
(20, 'Parana', '4'),
(21, 'Goius', '4'),
(22, 'Santa...', '4'),
(23, 'Ceara', '4'),
(24, 'Paulo', '4'),
(25, 'Amazonas', '4'),
(26, 'Tocantins', '4'),
(27, 'Bryansk', '5'),
(28, 'Kaluga', '5'),
(29, 'Lusk', '5'),
(30, 'Oryal', '5'),
(31, 'Ryazan', '5'),
(32, 'Tula', '5'),
(33, 'Tar', '5'),
(34, 'Ijdfh', '145'),
(35, 'Ijdfh', '145'),
(36, 'Ijdfh', '145'),
(37, 'dkjgh', '145'),
(38, 'Ijdfh', '145'),
(39, 'Ijdfh', '145'),
(40, 'sdfj', '122'),
(41, 'sdfj', '122'),
(42, 'dkjgh', '122'),
(43, 'dkjgh', '122'),
(44, 'dkjgh', '122'),
(45, 'dkjgh', '122'),
(46, 'Ijdfh', '122'),
(47, 'Ijdfh', '122'),
(48, '', '0'),
(49, '', '0'),
(50, '', '0'),
(51, 'dkjgh', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `st_id` int(255) NOT NULL auto_increment,
  `st_name` varchar(255) NOT NULL,
  `st_father` varchar(255) NOT NULL,
  `st_phone` varchar(255) NOT NULL,
  `st_email` varchar(255) NOT NULL,
  `st_gender` varchar(255) NOT NULL,
  `st_qualification` varchar(255) NOT NULL,
  `st_dob` varchar(255) NOT NULL,
  `st_doa` varchar(255) NOT NULL,
  `st_course` varchar(255) NOT NULL,
  `st_category` varchar(255) NOT NULL,
  `st_country` varchar(255) NOT NULL,
  `st_state` varchar(255) NOT NULL,
  `st_pincode` varchar(255) NOT NULL,
  `st_image` varchar(255) NOT NULL,
  `st_address1` varchar(255) NOT NULL,
  `st_address2` varchar(255) NOT NULL,
  PRIMARY KEY  (`st_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`st_id`, `st_name`, `st_father`, `st_phone`, `st_email`, `st_gender`, `st_qualification`, `st_dob`, `st_doa`, `st_course`, `st_category`, `st_country`, `st_state`, `st_pincode`, `st_image`, `st_address1`, `st_address2`) VALUES
(3, 'Mrs Shyama Singh', 'Mr. Prem Singh', '8589576665', 'shya9090@gmail.com', 'Female', '1,2,3', '2002-01-01', '2020-07-30', '1', 'GEN', '1', '', '230002', 'lsjkr6wg7ctq97qv1692946633.jpg', 'Gujrat', 'Panjab'),
(4, 'Mr Amar Shrivastava', 'Mr Ankur Shrivastava', '7545855895', 'amar@gmail.com', 'Male', '1,2', '2000-01-01', '2020-05-25', '2', 'GEN', '1', '', '223200', 'abc10101692946650.jpg', 'Azamgarh civil 41. line ', 'Ahiraula Azamgarh'),
(5, 'Ms Sunanda Goswami', 'Mr. Prahalad Goswami', '8546592000', 'sunanda2000@gmail.com', 'Female', '1,2', '20000-01-01', '2020-05-05', '1', 'OBC', '1', '', '233220', '793bb0d8845f9a44f922b1903fb94c581692946674.jpg', 'Prayagraj', 'Ambedkar Nagar'),
(7, 'Mr Trisha Kesharwani', 'Mr. Rupesh Kesharwani', '8954563532', 'trisha3030@gmail.com', 'Female', '1,2,3', '2002-01-01', '06/05/2020', '5', 'OBC', '1', '', '232500', '3kRbHzu1692946733.jpg', 'Lakhnau', 'Bihar'),
(10, 'Shubham', 'shyam', '4465456465', 'shubham229@gmail.com', 'Male', '1,2', '2002-01-01', '2020-05-05', '1', 'OBC', '1', '', '232500', '3kRbHzu1693846947.jpg', 'Prayagraj', 'Mau');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `subject_id` int(255) NOT NULL auto_increment,
  `subject_name` varchar(255) NOT NULL,
  `subject_course` varchar(255) NOT NULL,
  `subject_total_mark` varchar(255) NOT NULL,
  `subject_practical_mark` varchar(255) NOT NULL,
  PRIMARY KEY  (`subject_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_name`, `subject_course`, `subject_total_mark`, `subject_practical_mark`) VALUES
(1, 'c', '1', '70', '30'),
(2, 'java', '1', '70', '30'),
(3, 'data Structure', '1', '70', '30'),
(4, 'Advance Java', '2', '70', '30'),
(5, 'Advance Networking', '2', '70', '30'),
(6, 'Math', '1', '100', '0'),
(7, 'Digital Math', '2', '100', '0');
