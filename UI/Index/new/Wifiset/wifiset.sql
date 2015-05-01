CREATE TABLE `wifi_base` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `base_id` varchar(255) DEFAULT NULL,
  `base_ssid` varchar(255) DEFAULT NULL,
  `base_enc` varchar(255) DEFAULT NULL,
  `base_password` varchar(10) DEFAULT NULL,
  `wifi_chanel` tinyint(4) DEFAULT '1' COMMENT '0：停用 1 使用',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8


CREATE TABLE `wifi_waiwang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tpl_name` varchar(255) DEFAULT NULL,
  `tpl_path` varchar(255) DEFAULT NULL,
  `group` varchar(10) DEFAULT NULL,
  `state` tinyint(4) DEFAULT '1' COMMENT '0：停用 1 使用',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8


CREATE TABLE `wifi_neiwang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tpl_name` varchar(255) DEFAULT NULL,
  `tpl_path` varchar(255) DEFAULT NULL,
  `group` varchar(10) DEFAULT NULL,
  `state` tinyint(4) DEFAULT '1' COMMENT '0：停用 1 使用',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8


CREATE TABLE `wifi_renzheng` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tpl_name` varchar(255) DEFAULT NULL,
  `tpl_path` varchar(255) DEFAULT NULL,
  `group` varchar(10) DEFAULT NULL,
  `state` tinyint(4) DEFAULT '1' COMMENT '0：停用 1 使用',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8
