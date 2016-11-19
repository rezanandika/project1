/*
Navicat MySQL Data Transfer

Source Server         : MY LOCAL
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : siapp

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-05-12 16:19:53
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `file`
-- ----------------------------
DROP TABLE IF EXISTS `file`;
CREATE TABLE `file` (
  `id` varchar(255) NOT NULL,
  `table_name` varchar(255) DEFAULT NULL,
  `table_field` varchar(255) DEFAULT NULL,
  `field_value` varchar(255) DEFAULT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `input_by` varchar(255) DEFAULT NULL,
  `input_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of file
-- ----------------------------
INSERT INTO `file` VALUES ('c60d98aaedb65c8ba5e023cbacb41874eb4d22ad', 'user', 'id', 'c4cab7526d9d124d79b30c818d2fcc37a1f63c73', 'Tamako.Market.600.1416434.jpg', '2016/05/c60d98aaedb65c8ba5e023cbacb41874eb4d22ad.jpg', 'c4cab7526d9d124d79b30c818d2fcc37a1f63c73', '2016-05-12 11:39:53');
