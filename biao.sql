/*
MySQL Data Transfer
Source Host: localhost
Source Database: nsw2015
Target Host: localhost
Target Database: nsw2015
Date: 2015-9-14 12:52:32
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for biao
-- ----------------------------
DROP TABLE IF EXISTS `biao`;
CREATE TABLE `biao` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `number` varchar(50) NOT NULL,
  `class` varchar(20) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `qq` int(50) NOT NULL,
  `dormitoty` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records 
-- ----------------------------
