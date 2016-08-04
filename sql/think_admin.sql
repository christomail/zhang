/*
Navicat MySQL Data Transfer

Source Server         : MySql
Source Server Version : 50709
Source Host           : localhost:3306
Source Database       : coffee

Target Server Type    : MYSQL
Target Server Version : 50709
File Encoding         : 65001

Date: 2016-08-04 09:28:38
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `think_admin`
-- ----------------------------
DROP TABLE IF EXISTS `think_admin`;
CREATE TABLE `think_admin` (
  `id` mediumint(8) NOT NULL DEFAULT '0',
  `username` char(30) NOT NULL COMMENT '职位名称',
  `password` char(32) NOT NULL COMMENT '密码',
  `is_used` tinyint(2) unsigned NOT NULL DEFAULT '1' COMMENT '管理员是否可用',
  `last_login` datetime DEFAULT NULL COMMENT '上次登录时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_admin
-- ----------------------------
INSERT INTO `think_admin` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', '1', '2016-07-11 11:09:29');
