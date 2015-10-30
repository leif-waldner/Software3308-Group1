CREATE TABLE `news` (

  `newsid` int(11) NOT NULL auto_increment,

  `dtime` datetime default NULL,

  `title` varchar(255) default NULL,

  `text1` text,

  `text2` text,

  PRIMARY KEY  (`newsid`)

);
INSERT INTO news (title, dtime, text1,text2) VALUES ('colorado',NOW(), 'duck','chicken');

