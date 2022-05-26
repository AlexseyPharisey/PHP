CREATE TABLE `people` (
`id` tinyint(4) NOT NULL AUTO_INCREMENT,
`name` tinytext COLLATE utf8_unicode_ci NOT NULL, 
`surname` tinytext COLLATE utf8_unicode_ci NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=100;