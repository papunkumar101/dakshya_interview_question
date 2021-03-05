--
-- MySQL 5.5.5
-- Fri, 05 Mar 2021 05:42:39 +0000
--

CREATE TABLE `admin` (
   `ad_id` int(11) not null auto_increment,
   `ad_uid` varchar(100),
   `ad_pass` varchar(100),
   PRIMARY KEY (`ad_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=2;

INSERT INTO `admin` (`ad_id`, `ad_uid`, `ad_pass`) VALUES 
('1', 'admin', 'admin');

CREATE TABLE `attendance` (
   `a_id` int(11) not null auto_increment,
   `u_id` varchar(100) not null,
   `day` varchar(11),
   `in_time` text,
   `out_time` text,
   `date` text,
   `update_time` timestamp not null default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
   PRIMARY KEY (`a_id`),
