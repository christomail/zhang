/*
Navicat MySQL Data Transfer

Source Server         : MySql
Source Server Version : 50709
Source Host           : localhost:3306
Source Database       : coffee

Target Server Type    : MYSQL
Target Server Version : 50709
File Encoding         : 65001

Date: 2016-08-04 09:28:45
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `think_category`
-- ----------------------------
DROP TABLE IF EXISTS `think_category`;
CREATE TABLE `think_category` (
  `id` smallint(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(30) NOT NULL,
  `parent_id` smallint(5) unsigned NOT NULL,
  `product_num` tinyint(2) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_category
-- ----------------------------
INSERT INTO `think_category` VALUES ('00001', '甜品', '0', '0');
INSERT INTO `think_category` VALUES ('00002', '蛋糕', '1', '0');
INSERT INTO `think_category` VALUES ('00003', '水果蛋糕', '2', '1');
INSERT INTO `think_category` VALUES ('00004', '抹茶蛋糕', '2', '1');
INSERT INTO `think_category` VALUES ('00005', '巧克力蛋糕', '2', '1');
INSERT INTO `think_category` VALUES ('00006', '饼干', '1', '0');
INSERT INTO `think_category` VALUES ('00007', '曲奇', '6', '2');
INSERT INTO `think_category` VALUES ('00008', '奶油饼干', '6', '2');
INSERT INTO `think_category` VALUES ('00009', '苏打饼干', '6', '2');
INSERT INTO `think_category` VALUES ('00010', '饮品', '0', '0');
INSERT INTO `think_category` VALUES ('00011', '咖啡', '10', '0');
INSERT INTO `think_category` VALUES ('00012', '拿铁咖啡', '11', '3');
INSERT INTO `think_category` VALUES ('00013', '卡布奇诺', '11', '3');
INSERT INTO `think_category` VALUES ('00014', '提拉米苏', '11', '3');
INSERT INTO `think_category` VALUES ('00015', '奶茶', '10', '0');
INSERT INTO `think_category` VALUES ('00016', '巧克力奶茶', '15', '3');
INSERT INTO `think_category` VALUES ('00017', '原味奶茶', '15', '3');
INSERT INTO `think_category` VALUES ('00018', '焦糖太妃奶茶', '15', '3');
