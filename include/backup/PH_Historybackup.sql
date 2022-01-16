-- auto --

-- -------------------------------------------------------
-- Create piwigo_history table
-- ------------------------------------------------------

DROP TABLE IF EXISTS piwigo_history;

CREATE TABLE `piwigo_history` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL DEFAULT '1970-01-01',
  `time` time NOT NULL DEFAULT '00:00:00',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `IP` varchar(15) NOT NULL DEFAULT '',
  `section` enum('categories','tags','search','list','favorites','most_visited','best_rated','recent_pics','recent_cats') DEFAULT NULL,
  `category_id` smallint(5) DEFAULT NULL,
  `tag_ids` varchar(50) DEFAULT NULL,
  `image_id` mediumint(8) DEFAULT NULL,
  `image_type` enum('picture','high','other','download') DEFAULT NULL,
  `format_id` int(11) unsigned DEFAULT NULL,
  `auth_key_id` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;



