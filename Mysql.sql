-- ??
CREATE DATABASE beauty DEFAULT CHARSET utf8 COLLATE utf8_general_ci;

-- ??
CREATE TABLE IF NOT EXISTS `stu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stu` varchar(255) DEFAULT NULL,
  `img` varchar(255) NOT NULL,
  `beauti` varchar(255) DEFAULT NULL,
  `score` int(20) NOT NULL DEFAULT '1400',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=78 ;

-- ????
INSERT INTO `stu` (`id`, `stu`, `img`, `beauti`, `score`) VALUES
(1, 'Mary', '', 'src', 1400),
(2, 'Nancy', '', 'src', 1400),
(3, 'Kacy', '', 'src', 1400),
(4, 'Judegli', '', 'src', 1400);
