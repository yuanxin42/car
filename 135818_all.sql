SET FOREIGN_KEY_CHECKS = 0;

DROP TABLE IF EXISTS  `all_car`;
CREATE TABLE `all_car` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` char(255) DEFAULT NULL,
  `car_type` char(11) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `oldprice` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `information` text,
  `phone` int(11) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `adress` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8;

insert into `all_car`(`id`,`img`,`car_type`,`price`,`oldprice`,`title`,`information`,`phone`,`user_name`,`adress`) values
('69','http://yyyxxxxin.top/car/assets/images/banner16.jpg','','2222','111','阿斯顿撒','请输入您要推广的信息...','2147483647','原','哈尔滨'),
('70','http://yyyxxxxin.top/car/assets/images/banner21.jpg','1','33','22','撒旦撒旦撒','请输入您要推广的信息...','2147483647','原','啊实打'),
('71','http://yyyxxxxin.top/car/assets/images/pic61.jpg','','333','22','阿萨大苏打萨达','请输入您要推广的阿斯顿撒信息...','2147483647','原','哈尔滨'),
('72','http://yyyxxxxin.top/car/assets/images/banner45.jpg','1','555','3444','撒打算','请输入您要推广的信息...','2147483647','撒','撒旦大神'),
('73','http://yyyxxxxin.top/car/assets/images/pic221.jpg','0','444','555','阿萨大大是','请输入您要推广的信息...','2147483647','原','牡丹江'),
('74','http://yyyxxxxin.top/car/assets/images/pic71.jpg','1','555','33','全部1111','全部1111全部1111全部1111全部1111','2147483647','撒旦撒','阿斯顿撒'),
('75','http://yyyxxxxin.top/car/assets/images/pic131.jpg','1','500','400','奔驰220','奔驰220奔驰220奔驰220奔驰220','2147483647','原鑫','哈尔滨'),
('76','http://yyyxxxxin.top/car/assets/images/pic171.jpg','1','5555','444','全部奔驰','全部奔驰全部奔驰全部奔驰','2147483647','阿萨大大','阿斯顿撒旦'),
('77','http://yyyxxxxin.top/car/assets/images/banner39.jpg','','444','33','啊实打','请输入撒旦撒您要推广的信息...','2147483647','原搜索','哈尔滨'),
('78','','1,3','250','250','我叫原鑫  听说你很牛逼是么','赶紧把我卖出去吧 谁买啊','2147483647','原鑫比较逼','我就黑大的  不服来找我');
DROP TABLE IF EXISTS  `call_us`;
CREATE TABLE `call_us` (
  `id` int(11) NOT NULL,
  `emil` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `msg` text,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

insert into `call_us`(`id`,`emil`,`phone`,`msg`,`name`) values
('0','asdasdas','3214324324',' asdasd','sasadsa');
DROP TABLE IF EXISTS  `eight_percent`;
CREATE TABLE `eight_percent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `information` text,
  `car_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

insert into `eight_percent`(`id`,`title`,`information`,`car_id`) values
('36','我叫原鑫  听说你很牛逼是么','赶紧把我卖出去吧 谁买啊','78');
DROP TABLE IF EXISTS  `hot_goods`;
CREATE TABLE `hot_goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `information` text,
  `car_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

insert into `hot_goods`(`id`,`title`,`information`,`car_id`) values
('40','啊实打实','啊实打实的撒','70'),
('41','撒打算','撒阿斯顿飒飒的','72'),
('42','热销1111','热销1111热销1111热销1111','74'),
('43','热门车奔驰','热门车奔驰热门车奔驰热门车奔驰热门车奔驰热门车奔驰','75'),
('44','热销1111222','热销1111222热销1111222','76'),
('45','夏天快来了  我真的很热','原鑫牌热售车 你值得拥有','78');
DROP TABLE IF EXISTS  `nine_percent`;
CREATE TABLE `nine_percent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `information` text,
  `car_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS  `rob_car`;
CREATE TABLE `rob_car` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `information` text,
  `car_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

insert into `rob_car`(`id`,`title`,`information`,`car_id`) values
('40','阿斯顿撒旦撒的','撒大苏打撒旦是','73');
DROP TABLE IF EXISTS  `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` char(255) DEFAULT NULL,
  `pass` char(255) DEFAULT NULL,
  `isadmin` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

insert into `user`(`id`,`user`,`pass`,`isadmin`) values
('29','guo','123','0');
DROP TABLE IF EXISTS  `will_toshow`;
CREATE TABLE `will_toshow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` char(255) DEFAULT NULL,
  `car_type` char(11) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `oldprice` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `information` text,
  `phone` int(11) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `adress` text,
  `arr` text,
  `hottit` varchar(255) DEFAULT NULL,
  `hotdes` text,
  `robtit` varchar(255) DEFAULT NULL,
  `robdes` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

insert into `will_toshow`(`id`,`img`,`car_type`,`price`,`oldprice`,`title`,`information`,`phone`,`user_name`,`adress`,`arr`,`hottit`,`hotdes`,`robtit`,`robdes`) values
('13','http://yyyxxxxin.top/car/assets/images/banner46.jpg','','22','12','阿斯顿撒','请输入您要推广的信息...撒旦撒','2147483647','原','哈尔滨','{"yourname":"u539f","youphone":"18846438557","adress":"u54c8u5c14u6ee8","price":"22","oldprice":"12","youtit":"u963fu65afu987fu6492","description":"u8bf7u8f93u5165u60a8u8981u63a8u5e7fu7684u4fe1u606f...u6492u65e6u6492","type":"","isrob_car":"0","robtit":"","robdes":"","ishot_car":"0","hottit":"","hotdes":"","nineoreight":"0","img":"http://yyyxxxxin.top/car/assets/images/banner46.jpg"}','','','',''),
('14','http://yyyxxxxin.top/car/assets/images/banner47.jpg','','333','112','阿斯顿打撒','请输入您要推广的信息...','2147483647','啊实打','哈尔滨','{"yourname":"u554au5b9eu6253","youphone":"18856578776","adress":"u54c8u5c14u6ee8","price":"333","oldprice":"112","youtit":"u963fu65afu987fu6253u6492","description":"u8bf7u8f93u5165u60a8u8981u63a8u5e7fu7684u4fe1u606f...","type":"","isrob_car":"0","robtit":"","robdes":"","ishot_car":"0","hottit":"","hotdes":"","nineoreight":"0","img":"http://yyyxxxxin.top/car/assets/images/banner47.jpg"}','','','',''),
('15','http://yyyxxxxin.top/car/assets/images/pic110.jpg','','444','333','阿斯顿撒旦','请输入您要推广的信息...','2147483647','啊实打','阿萨德','{"yourname":"u554au5b9eu6253","youphone":"18846438557","adress":"u963fu8428u5fb7","price":"444","oldprice":"333","youtit":"u963fu65afu987fu6492u65e6","description":"u8bf7u8f93u5165u60a8u8981u63a8u5e7fu7684u4fe1u606f...","type":"","isrob_car":"0","robtit":"","robdes":"","ishot_car":"0","hottit":"","hotdes":"","nineoreight":"0","img":"http://yyyxxxxin.top/car/assets/images/pic110.jpg"}','','','',''),
('16','http://yyyxxxxin.top/car/assets/images/banner48.jpg','','888','77','快乐和环境','请输入您要推广的信息...','2147483647','亏','环境和','{"yourname":"u4e8f","youphone":"18856578776","adress":"u73afu5883u548c","price":"888","oldprice":"77","youtit":"u5febu4e50u548cu73afu5883","description":"u8bf7u8f93u5165u60a8u8981u63a8u5e7fu7684u4fe1u606f...","type":"","isrob_car":"0","robtit":"","robdes":"","ishot_car":"0","hottit":"","hotdes":"","nineoreight":"0","img":"http://yyyxxxxin.top/car/assets/images/banner48.jpg"}','','','',''),
('17','http://yyyxxxxin.top/car/assets/images/pic182.jpg','','6766','34354','飒飒的','请输入您要推广的信息...','2147483647','阿三大苏打','飒飒','{"yourname":"u963fu4e09u5927u82cfu6253","youphone":"18856578776","adress":"u98d2u98d2","price":"6766","oldprice":"34354","youtit":"u98d2u98d2u7684","description":"u8bf7u8f93u5165u60a8u8981u63a8u5e7fu7684u4fe1u606f...","type":"","isrob_car":"0","robtit":"","robdes":"","ishot_car":"0","hottit":"","hotdes":"","nineoreight":"0","img":"http://yyyxxxxin.top/car/assets/images/pic182.jpg"}','','','',''),
('18','http://yyyxxxxin.top/car/assets/images/pic281.jpg','','234324','3234','阿三大苏打','请输入您要推广的信息...','2147483647','飒飒的','阿三大苏打','{"yourname":"u98d2u98d2u7684","youphone":"18856578776","adress":"u963fu4e09u5927u82cfu6253","price":"234324","oldprice":"3234","youtit":"u963fu4e09u5927u82cfu6253","description":"u8bf7u8f93u5165u60a8u8981u63a8u5e7fu7684u4fe1u606f...","type":"","isrob_car":"0","robtit":"","robdes":"","ishot_car":"0","hottit":"","hotdes":"","nineoreight":"0","img":"http://yyyxxxxin.top/car/assets/images/pic281.jpg"}','','','',''),
('19','http://yyyxxxxin.top/car/assets/images/pic211.jpg','','2323','44545','萨达萨达是','请输入您要推广的信息...','2147483647','烘干机烘干机','阿斯顿撒旦','{"yourname":"u70d8u5e72u673au70d8u5e72u673a","youphone":"18846438557","adress":"u963fu65afu987fu6492u65e6","price":"2323","oldprice":"44545","youtit":"u8428u8fbeu8428u8fbeu662f","description":"u8bf7u8f93u5165u60a8u8981u63a8u5e7fu7684u4fe1u606f...","type":"","isrob_car":"0","robtit":"","robdes":"","ishot_car":"0","hottit":"","hotdes":"","nineoreight":"0","img":"http://yyyxxxxin.top/car/assets/images/pic211.jpg"}','','','',''),
('20','http://yyyxxxxin.top/car/assets/images/pic72.jpg','','345345','43435','啊实打实','请输入您要推广的信息...','2147483647','撒啊撒打算','阿斯顿撒旦','{"yourname":"u6492u554au6492u6253u7b97","youphone":"18856578776","adress":"u963fu65afu987fu6492u65e6","price":"345345","oldprice":"43435","youtit":"u554au5b9eu6253u5b9e","description":"u8bf7u8f93u5165u60a8u8981u63a8u5e7fu7684u4fe1u606f...","type":"","isrob_car":"0","robtit":"","robdes":"","ishot_car":"0","hottit":"","hotdes":"","nineoreight":"0","img":"http://yyyxxxxin.top/car/assets/images/pic72.jpg"}','','','',''),
('21','http://yyyxxxxin.top/car/assets/images/pic212.jpg','','345435','43534','撒旦啊','请输入您要推广的信息...','2147483647','啊实打实','啊大苏打','{"yourname":"u554au5b9eu6253u5b9e","youphone":"22222222222","adress":"u554au5927u82cfu6253","price":"345435","oldprice":"43534","youtit":"u6492u65e6u554a","description":"u8bf7u8f93u5165u60a8u8981u63a8u5e7fu7684u4fe1u606f...","type":"","isrob_car":"0","robtit":"","robdes":"","ishot_car":"0","hottit":"","hotdes":"","nineoreight":"0","img":"http://yyyxxxxin.top/car/assets/images/pic212.jpg"}','','','','');
SET FOREIGN_KEY_CHECKS = 1;

