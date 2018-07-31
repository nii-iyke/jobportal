-- phpMyAdmin SQL Dump
-- version 2.8.0.1
-- http://www.phpmyadmin.net
-- 
-- Host: custsql-ipg121.eigbox.net
-- Generation Time: Jul 05, 2017 at 03:38 AM
-- Server version: 5.6.32
-- PHP Version: 4.4.9
-- 
-- Database: `jobportal`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `admin`
-- 

CREATE TABLE `admin` (
  `adm_id` int(20) NOT NULL,
  `adm_name` varchar(100) NOT NULL,
  `adm_pass` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `admin`
-- 

INSERT INTO `admin` VALUES (1, 'admin', 'password');

-- --------------------------------------------------------

-- 
-- Table structure for table `application`
-- 

CREATE TABLE `application` (
  `apply_id` int(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(20) DEFAULT NULL,
  `emp_id` int(20) DEFAULT NULL,
  `job_id` int(20) DEFAULT NULL,
  `status` int(20) DEFAULT NULL,
  `date_applied` varchar(20) NOT NULL,
  PRIMARY KEY (`apply_id`),
  KEY `user_id` (`user_id`),
  KEY `emp_id` (`emp_id`),
  KEY `job_id` (`job_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

-- 
-- Dumping data for table `application`
-- 

INSERT INTO `application` VALUES (8, 12, 7, 6, NULL, '05-07-17');

-- --------------------------------------------------------

-- 
-- Table structure for table `employer`
-- 

CREATE TABLE `employer` (
  `eid` int(20) NOT NULL AUTO_INCREMENT,
  `log_id` int(20) NOT NULL,
  `ename` varchar(100) DEFAULT NULL,
  `etype` varchar(100) DEFAULT NULL,
  `industry` varchar(100) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `pincode` varchar(100) DEFAULT NULL,
  `executive` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `profile` varchar(700) DEFAULT NULL,
  `logo` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`eid`),
  KEY `log_id` (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

-- 
-- Dumping data for table `employer`
-- 

INSERT INTO `employer` VALUES (3, 25, 'WETLANDS', 'Company', 'Cement/Construction/Engineering/Metals/Steel/Iron', 'P.O. BOX 45\r\nLEGON\r\nACCRA', NULL, 'SYLVIA', '0256778903', 'LEGON', ' HWDUCWIDCJ ', NULL);
INSERT INTO `employer` VALUES (4, 26, 'WETLANDS', 'Company', 'Chemicals/Petro Chemicals/Plastics', 'P.o.box 34\r\nLegon\r\nAccra', NULL, 'Justice', '0506443627', 'Legon', 'abcde', NULL);
INSERT INTO `employer` VALUES (5, 30, 'WETLANDS', 'Company', 'Cement/Construction/Engineering/Metals/Steel/Iron', 'P.O. BOX 45\r\nLEGON\r\nACCRA', NULL, 'SYLVIA', '0256778903', 'LEGON', ' HWDUCWIDCJ ', NULL);
INSERT INTO `employer` VALUES (6, 31, 'WETLANDS', 'Company', 'Cement/Construction/Engineering/Metals/Steel/Iron', 'P.O. BOX 45\r\nLEGON\r\nACCRA', NULL, 'SYLVIA', '0256778903', 'LEGON', ' HWDUCWIDCJ ', NULL);
INSERT INTO `employer` VALUES (7, 32, 'Cross Ocean Agencies', 'Company', 'Shipping/Marine', 'P O Box Co. 1914\r\nTema\r\nGhana', NULL, 'Mr. Eugene Amissah', '0204312330', 'Tema', 'Marine services', NULL);
INSERT INTO `employer` VALUES (8, 33, 'fe', 'Company', 'Chemicals/Petro Chemicals/Plastics', '3eeefv', NULL, 'efvwf', 'wwefv', 'wefrwne', 'wtnr,jmrjm', NULL);
INSERT INTO `employer` VALUES (9, 34, 'test', 'Company', 'Consumer FMCG/Foods/Beverages', 'test', NULL, 'test', '2323232323', 'test', 'test', NULL);
INSERT INTO `employer` VALUES (10, 35, 'test', 'Company', 'Accessories/Apparel/Fashion Design', 'test', NULL, 'test', 'test', 'test', 'test', NULL);
INSERT INTO `employer` VALUES (11, 37, 'Test', 'Company', 'Courier/Freight/Transportation/Warehousing', 'test\r\ntest', NULL, 'Test', '1111111111', 'test', 'Test', NULL);
INSERT INTO `employer` VALUES (12, 38, 'test', 'Company', 'Accessories/Apparel/Fashion Design', 'test', NULL, 'test', '123123132', 'test', 'test', NULL);
INSERT INTO `employer` VALUES (13, 44, 'test', 'Company', 'Courier/Freight/Transportation/Warehousing', 'test', NULL, 'test', 'test', 'test', 'test', NULL);
INSERT INTO `employer` VALUES (14, 45, 'test', 'Company', 'Accounting/Consulting/Taxation', 'test', NULL, 'test', 'test', 'test', 'test', NULL);
INSERT INTO `employer` VALUES (15, 46, 'goviral', 'Company', 'Advertising/Event Management/PR', 'P.O.Box 306\r\nTema', NULL, 'Osei Tutu', '0506443627', 'Everywhere', 'we do design', NULL);
INSERT INTO `employer` VALUES (16, 47, 'goviral', 'Company', 'Advertising/Event Management/PR', 'P.O.Box 306\r\nTema', NULL, 'Osei Tutu', '0506443627', 'Everywhere', 'we do design', NULL);
INSERT INTO `employer` VALUES (17, 48, 'goviral', 'Company', 'Advertising/Event Management/PR', 'P.O.Box 306\r\nTema', NULL, 'Osei Tutu', '0506443627', 'Everywhere', 'we do design', NULL);
INSERT INTO `employer` VALUES (18, 49, 'Vii', 'Company', 'Advertising/Event Management/PR', 'wbcgoqe', NULL, 'JB', '0506443627', 'Canada', 'hrwwotihbr', NULL);
INSERT INTO `employer` VALUES (19, 53, 'Wetlands', 'Company', 'Security/Law Enforcement', 'P.O.Box C01914\r\nTema\r\nAccra', NULL, 'Rev Amissah', '0244291192', 'Sakumono', ' A shipping company dealing in cargo handling and marine services', NULL);

-- --------------------------------------------------------

-- 
-- Table structure for table `jobs`
-- 

CREATE TABLE `jobs` (
  `jobid` int(20) NOT NULL AUTO_INCREMENT,
  `eid` int(20) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `jobdesc` varchar(700) NOT NULL,
  `vacno` int(20) DEFAULT NULL,
  `experience` varchar(100) DEFAULT NULL,
  `basicpay` varchar(100) DEFAULT NULL,
  `fnarea` varchar(100) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `industry` varchar(200) DEFAULT NULL,
  `ugqual` varchar(100) DEFAULT NULL,
  `pgqual` varchar(100) DEFAULT NULL,
  `profile` varchar(700) DEFAULT NULL,
  `postdate` varchar(20) NOT NULL,
  PRIMARY KEY (`jobid`),
  KEY `eid` (`eid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `jobs`
-- 

INSERT INTO `jobs` VALUES (6, 7, 'Driver', 'Transportation ', 10, '4', 'GHC 1000', NULL, 'Tema', 'Shipping/Marine', 'Diploma', NULL, 'Experienced and very good control and handling of vehicles', '05-07-17');

-- --------------------------------------------------------

-- 
-- Table structure for table `jobseeker`
-- 

CREATE TABLE `jobseeker` (
  `user_id` int(20) NOT NULL AUTO_INCREMENT,
  `log_id` int(20) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL,
  `experience` varchar(100) DEFAULT NULL,
  `skills` varchar(100) DEFAULT NULL,
  `basic_edu` varchar(100) DEFAULT NULL,
  `master_edu` varchar(100) DEFAULT NULL,
  `other_qual` varchar(100) DEFAULT NULL,
  `dob` varchar(50) DEFAULT NULL,
  `Resume` varchar(100) DEFAULT NULL,
  `photo` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `log_id` (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

-- 
-- Dumping data for table `jobseeker`
-- 

INSERT INTO `jobseeker` VALUES (11, 24, 'test', '123123', 'test', '1', 'test', 'B.Arch', 'SHS Graduate', NULL, NULL, NULL, NULL);
INSERT INTO `jobseeker` VALUES (12, 27, 'Eugene Amissah', '0274918123', 'Tema', '1', 'programming', 'B.Sc', 'University Graduate', NULL, NULL, NULL, NULL);
INSERT INTO `jobseeker` VALUES (13, 42, 'test123 test123', '54664634365', 'test123', '7', 'test123', 'B.A', 'SHS Graduate', NULL, NULL, NULL, NULL);
INSERT INTO `jobseeker` VALUES (14, 50, 'Justice Amissah', '0506443627', 'Bolga', '6', 'IT', 'B.A', 'University Graduate', NULL, NULL, NULL, NULL);
INSERT INTO `jobseeker` VALUES (15, 51, 'Justice Amissah', '0506443627', 'Bolga', '6', 'IT', 'B.A', 'University Graduate', NULL, NULL, NULL, NULL);
INSERT INTO `jobseeker` VALUES (16, 52, 'Justice Amissah', '0506443627', 'Bolga', '6', 'IT', 'B.A', 'University Graduate', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

-- 
-- Table structure for table `login`
-- 

CREATE TABLE `login` (
  `log_id` int(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `usertype` varchar(20) NOT NULL,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`log_id`),
  UNIQUE KEY `email` (`email`),
  KEY `log_id` (`log_id`),
  KEY `log_id_2` (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

-- 
-- Dumping data for table `login`
-- 

INSERT INTO `login` VALUES (24, 'technicalspecialists1@gmail.com', '$2y$10$UCYqkjb7uvVXMis/Fpulveo1LorSsVdnTgqCgFz9f3P/fVTJHi2pu', 'jobseeker', 1);
INSERT INTO `login` VALUES (25, 'ji_amissah@yahoo.com', '$2y$10$kwj83ht6VmpXspzRU2Cdp.xOAwMlXL7aUyOffG9YHtm/tjZsEeJai', 'employer', 0);
INSERT INTO `login` VALUES (26, 'jbkamissah@gmail.com', '$2y$10$oNpiY2lcqDSDTdKjgHUOguJZVDxBjNdtZbs/yMPMvyoLgEY25Onbq', 'employer', 0);
INSERT INTO `login` VALUES (27, 'eugene.amissah@gmail.com', '$2y$10$tw1gLhxiMVrM9oYQNzg4L.huoouJ7J9LgG7NaVg6KjaaHEYyjdbPu', 'jobseeker', 1);
INSERT INTO `login` VALUES (30, 'jkpaf@gmail.com', '$2y$10$.hmwRFCkddDC/4QTQIP1.uAxvupeARoXqJmqw85tOJ69jFY/95VDm', 'employer', 0);
INSERT INTO `login` VALUES (31, 'jb@gmail.com', '$2y$10$eANAX0P4WTCaFnAIDkJoCu.lzdfaQtCxaC4ZFEju0XytW5Y7ujF36', 'employer', 0);
INSERT INTO `login` VALUES (32, 'crossltd@gmail.com', '$2y$10$xt7BZwxxMcDC7YIDzisuVecgzmemKS5Gu/dQjMGDnFEnCY9FlQTLq', 'employer', 0);
INSERT INTO `login` VALUES (33, 'jjuf@gmail.com', '$2y$10$pLlMoD4.B/BaJvj9PPFnie/5GV5JHpWprAPN4ZdsPw1FJjp7xr7kS', 'employer', 0);
INSERT INTO `login` VALUES (34, 'test@test.com', '$2y$10$btgceeRAoplOaxVkvCMnvuuV0k/44VjQXTYQW2RJuMwV.4.ixVFWu', 'employer', 0);
INSERT INTO `login` VALUES (35, 'test@gmail.com', '$2y$10$LcbTdOnElu21bLiebrX5Xu/6b9J9Xgfc7NUo9AqRblS96vjfXyM6m', 'employer', 0);
INSERT INTO `login` VALUES (37, 'test56@test.com', '$2y$10$WVswFyUAfgdKYhrAR5XVIeIrkrZjn9rvx/xUcL2rY/K.qLU54b9Cu', 'employer', 0);
INSERT INTO `login` VALUES (38, 'test@testgd.com', '$2y$10$6mjUh4VIEiWE3iaISS.2jOWu3HrCWwVR0HzDfz/aEEcDi8T75gjkG', 'employer', 0);
INSERT INTO `login` VALUES (39, 'ikbj@gmail.com', '$2y$10$8xW0J94.K65oR8.I8iBXwesNXtCX.OI4KkGa/s.26mxcDbU.AOTyC', 'employer', 0);
INSERT INTO `login` VALUES (42, 'test@testttss.com', '$2y$10$8t5J21KivvPvuWJRM3faVOcGOdDx.raPfGMQDbMtNZWRqCcwXzVQO', 'jobseeker', 1);
INSERT INTO `login` VALUES (44, 'test123@test.com', '$2y$10$SGfGRst6DBcw0/DMIMX75.4GgGrDnrRWmZCWnT1kV17kajeJDiPMy', 'employer', 0);
INSERT INTO `login` VALUES (45, 'test12345@test.com', '$2y$10$bR/1ED2iD6N2eItHc4rafOnV5in/ES511YpcdmUYJw/WREqBkbw/6', 'employer', 0);
INSERT INTO `login` VALUES (46, 'jamissahk@gmail.com', '$2y$10$7RoGw.D4bXAVb4315jMmXudtCNiHJ3HOuH3L78vHNHBOrMFYN.Xhu', 'employer', 0);
INSERT INTO `login` VALUES (47, 'jahk@gmail.com', '$2y$10$fs00YamGflt1Q1bRSeC//OJigzwryLjw4isZvAvNOmVcwxN7vVNJm', 'employer', 0);
INSERT INTO `login` VALUES (48, 'jib@gmail.com', '$2y$10$EZDD3e0ksLnUVCKGGNrUsuQrXHseEqGJxMqPRXcUU/WqHClT/sa2G', 'employer', 0);
INSERT INTO `login` VALUES (49, 'yiii@ymail.com', '$2y$10$MEaLHj3wKnV7LSEyziFDPeuHzmYJ8OJGvIl95nSqHT9Xx2levpLCy', 'employer', 0);
INSERT INTO `login` VALUES (50, 'jik@ymail.com', '$2y$10$.IqkaAI76h.UPjnkU05dLe7DW5g.bvZ3eR95hngWth0LxY7B3yVDa', 'jobseeker', 1);
INSERT INTO `login` VALUES (51, 'bo@ymail.com', '$2y$10$KYTQmxku.2XtXfkevGvIZOkz1LPYrGtwODR1LRFb1qEkZkUqCb7mW', 'jobseeker', 1);
INSERT INTO `login` VALUES (52, 'a@ymail.com', '$2y$10$6UY2tEX6XtogT67H35j05.3DOsfnxwg8Bi3ZhqEGqzNozqvnMnd5C', 'jobseeker', 1);
INSERT INTO `login` VALUES (53, 'you@gmail.com', '$2y$10$FhTO.Z2nCMpjn0cnTIKJg.TTwdcwpHBdN5r67rCL7Uc/VG9oiRZRa', 'employer', 0);

-- --------------------------------------------------------

-- 
-- Table structure for table `selection`
-- 

CREATE TABLE `selection` (
  `sel_id` int(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(20) DEFAULT NULL,
  `emp_id` int(20) DEFAULT NULL,
  `job_id` int(20) DEFAULT NULL,
  `status` int(5) DEFAULT NULL,
  `date` varchar(20) NOT NULL,
  PRIMARY KEY (`sel_id`),
  KEY `user_id` (`user_id`),
  KEY `emp_id` (`emp_id`),
  KEY `job_id` (`job_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `selection`
-- 

INSERT INTO `selection` VALUES (2, 12, 7, 6, 1, '05-07-17');

-- 
-- Constraints for dumped tables
-- 

-- 
-- Constraints for table `application`
-- 
ALTER TABLE `application`
  ADD CONSTRAINT `fk_empid` FOREIGN KEY (`emp_id`) REFERENCES `employer` (`eid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_job` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`jobid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_userid` FOREIGN KEY (`user_id`) REFERENCES `jobseeker` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

-- 
-- Constraints for table `employer`
-- 
ALTER TABLE `employer`
  ADD CONSTRAINT `fk_log_id` FOREIGN KEY (`log_id`) REFERENCES `login` (`log_id`) ON DELETE CASCADE ON UPDATE CASCADE;

-- 
-- Constraints for table `jobs`
-- 
ALTER TABLE `jobs`
  ADD CONSTRAINT `fk_eid` FOREIGN KEY (`eid`) REFERENCES `employer` (`eid`) ON DELETE CASCADE ON UPDATE CASCADE;

-- 
-- Constraints for table `jobseeker`
-- 
ALTER TABLE `jobseeker`
  ADD CONSTRAINT `fk_login` FOREIGN KEY (`log_id`) REFERENCES `login` (`log_id`) ON DELETE CASCADE ON UPDATE CASCADE;

-- 
-- Constraints for table `selection`
-- 
ALTER TABLE `selection`
  ADD CONSTRAINT `fk_emp` FOREIGN KEY (`emp_id`) REFERENCES `employer` (`eid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_jobs` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`jobid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`user_id`) REFERENCES `jobseeker` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
