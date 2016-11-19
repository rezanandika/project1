/*
Navicat MySQL Data Transfer

Source Server         : MY LOCAL
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : siapp

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-05-11 14:36:11
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `group`
-- ----------------------------
DROP TABLE IF EXISTS `group`;
CREATE TABLE `group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT '0',
  `update_date` datetime DEFAULT NULL,
  `update_by` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of group
-- ----------------------------
INSERT INTO `group` VALUES ('1', 'Administrator', '2015-04-28 10:57:53', '0', '2015-07-02 08:20:31', '2');
INSERT INTO `group` VALUES ('2', 'Operator', '2015-04-28 10:58:29', '0', '2015-07-14 10:35:49', '2');
INSERT INTO `group` VALUES ('3', 'Auditor', '2015-04-28 10:58:39', '0', '2015-07-02 08:22:16', '2');

-- ----------------------------
-- Table structure for `menu`
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL COMMENT 'full class icon template',
  `status` int(1) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `parent` int(11) DEFAULT '0',
  `state` varchar(255) DEFAULT 'view',
  `create_date` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT '0',
  `update_date` datetime DEFAULT NULL,
  `update_by` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('1', 'Dashboard', 'dashboard', 'fa fa-dashboard', '1', '1', '0', 'view', '2015-04-22 12:49:30', '1', null, '0');
INSERT INTO `menu` VALUES ('11', 'User', 'user', 'fa fa-user', '1', '2', '54', 'view', '2015-04-23 16:35:09', '1', null, '0');
INSERT INTO `menu` VALUES ('23', 'Group', 'group', 'fa fa-users', '1', '1', '54', 'view', '2015-05-06 18:27:31', '1', null, '0');
INSERT INTO `menu` VALUES ('24', 'Master Data', '#', 'fa fa-files-o', '1', '2', '0', 'view', null, '1', null, '0');
INSERT INTO `menu` VALUES ('54', 'Pengaturan', '#', 'fa fa-cogs', '1', '6', '0', 'view', null, '0', null, '0');

-- ----------------------------
-- Table structure for `menugroup`
-- ----------------------------
DROP TABLE IF EXISTS `menugroup`;
CREATE TABLE `menugroup` (
  `group_id` int(11) NOT NULL DEFAULT '0',
  `menu_id` int(11) NOT NULL DEFAULT '0',
  `view` tinyint(1) DEFAULT NULL,
  `add` tinyint(1) DEFAULT NULL,
  `edit` tinyint(1) DEFAULT NULL,
  `delete` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`group_id`,`menu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of menugroup
-- ----------------------------
INSERT INTO `menugroup` VALUES ('1', '1', '1', '1', '1', '1');
INSERT INTO `menugroup` VALUES ('1', '11', '1', '1', '1', '1');
INSERT INTO `menugroup` VALUES ('1', '23', '1', '1', '1', '1');
INSERT INTO `menugroup` VALUES ('1', '24', '1', '1', '1', '1');
INSERT INTO `menugroup` VALUES ('1', '54', '1', '1', '1', '1');

-- ----------------------------
-- Table structure for `setting`
-- ----------------------------
DROP TABLE IF EXISTS `setting`;
CREATE TABLE `setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `value` text,
  `create_date` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT '0',
  `update_date` datetime DEFAULT NULL,
  `update_by` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of setting
-- ----------------------------
INSERT INTO `setting` VALUES ('1', 'site_title', 'SIAPP', '2015-04-24 10:32:01', '1', '2015-04-28 16:14:47', '0');
INSERT INTO `setting` VALUES ('2', 'tagline', '', '2015-04-24 10:32:01', '1', '2015-04-28 16:14:47', '0');
INSERT INTO `setting` VALUES ('3', 'email', 'siapp@setneg.go.id', '2015-04-24 10:32:01', '1', '2015-04-28 16:14:47', '0');
INSERT INTO `setting` VALUES ('4', 'time_zone', 'UTC+7', '2015-04-24 10:32:01', '1', '2015-04-28 16:14:47', '0');
INSERT INTO `setting` VALUES ('5', 'lang', 'en', '2015-04-24 10:32:01', '1', '2015-04-28 16:14:47', '0');
INSERT INTO `setting` VALUES ('6', 'logo', '', '2015-04-24 11:31:45', '1', '2015-04-24 11:41:25', '0');
INSERT INTO `setting` VALUES ('7', 'facebook', '', '2015-04-24 13:32:14', '1', '2015-04-28 16:14:44', '0');
INSERT INTO `setting` VALUES ('8', 'twitter', '', '2015-04-24 13:32:14', '1', '2015-04-28 16:14:44', '0');
INSERT INTO `setting` VALUES ('9', 'youtube', '', '2015-04-24 13:32:14', '1', '2015-04-28 16:14:44', '0');
INSERT INTO `setting` VALUES ('10', 'google-plus', '', '2015-04-24 13:32:14', '1', '2015-04-28 16:14:44', '0');
INSERT INTO `setting` VALUES ('11', 'instagram', '', '2015-04-24 13:32:14', '1', '2015-04-28 16:14:44', '0');
INSERT INTO `setting` VALUES ('12', 'template_admin', 'admin_lte', '2015-04-29 17:58:02', '1', null, '0');
INSERT INTO `setting` VALUES ('13', 'template', 'one_page', '2015-04-29 17:58:21', '1', null, '0');
INSERT INTO `setting` VALUES ('14', 'app_version', '1.0', '2015-06-21 04:36:00', '0', null, '0');
INSERT INTO `setting` VALUES ('15', 'first_login', '0', null, '0', '2015-09-03 09:19:02', '0');

-- ----------------------------
-- Table structure for `template`
-- ----------------------------
DROP TABLE IF EXISTS `template`;
CREATE TABLE `template` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of template
-- ----------------------------
INSERT INTO `template` VALUES ('1', 'sb_admin2', 'template/sb_admin2/', 'admin', null);
INSERT INTO `template` VALUES ('2', 'one_page', 'template/one_page/', 'public', null);
INSERT INTO `template` VALUES ('3', 'admin_lte', 'template/admin_lte/', 'admin', null);

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `userfile` varchar(255) DEFAULT NULL,
  `create_date` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT '0',
  `update_date` datetime DEFAULT NULL,
  `update_by` int(11) DEFAULT '0',
  `last_login` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'Admin Dev', 'isaadmin', 'a5039e5b86e2b0588c0af55d1c40e74ad616d5d7', 'hanief@isatechindonesia.com', '2', null, '2015-04-28 11:06:47', '0', '2015-04-28 16:29:10', '0', '0000-00-00 00:00:00');
INSERT INTO `user` VALUES ('2', 'Admin', 'admin', '036d0ef7567a20b5a4ad24a354ea4a945ddab676', 'haniefhan@gmail.com', '1', null, '2015-04-28 12:48:38', '0', '2016-05-11 14:34:56', '2', '2016-05-11 14:34:56');
