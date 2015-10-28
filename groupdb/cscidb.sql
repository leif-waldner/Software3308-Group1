CREATE TABLE IF NOT EXISTS `title` (
`Id` int(1) NOT NULL auto_increment,
`urladd` varchar(100) NOT NULL,
`titlename` varchar(100) NOT NULL,
`titledate` varchar(50) NOT NULL,
`titletime` varchar(50) NOT NULL,
PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

INSERT INTO `title`(`Id`, `urladd`,`titlename`, `titledate`,`titletime`) VALUES
	(1, 'URL1','newstitle1', '10/27/2015','2:23am'),
	(2, 'URL2','newstitle2', '10/27/2015','2:24am');

CREATE TABLE IF NOT EXISTS `text` ( 
`Id` int(1) NOT NULL auto_increment,
`content` varchar(100) NOT NULL,
`paranum` int(1) NOT NULL,
PRIMARY KEY (`Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;
INSERT INTO `text` (`Id`, `content`, `paranum`) VALUES
	(1, 'abc', 5),
	(2, 'def', 6);
