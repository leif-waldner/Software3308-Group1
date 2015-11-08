CREATE DATABASE IF NOT EXISTS `news_system`;
USE `news_system`;
CREATE TABLE IF NOT EXISTS `news` (

  `newsid` int(11) NOT NULL auto_increment,

  `dtime` datetime default NULL,

  `title` varchar(255) default NULL,
  `link`  varchar(255) default NULL,
  `text1` text,

  `text2` text,

  PRIMARY KEY  (`newsid`)

);
