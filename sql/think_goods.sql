/*
Navicat MySQL Data Transfer

Source Server         : MySql
Source Server Version : 50709
Source Host           : localhost:3306
Source Database       : coffee

Target Server Type    : MYSQL
Target Server Version : 50709
File Encoding         : 65001

Date: 2016-08-04 09:28:55
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `think_goods`
-- ----------------------------
DROP TABLE IF EXISTS `think_goods`;
CREATE TABLE `think_goods` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT 'Id',
  `goods_name` char(30) NOT NULL,
  `cat_id` smallint(8) DEFAULT NULL,
  `title` char(20) NOT NULL,
  `tag` char(20) DEFAULT NULL COMMENT '标签',
  `pic` varchar(150) DEFAULT '' COMMENT 'pic',
  `mid_pic` varchar(150) DEFAULT NULL COMMENT '中图',
  `sm_pic` varchar(150) DEFAULT '' COMMENT 'pic小的缩略图',
  `sort_num` mediumint(8) unsigned DEFAULT NULL COMMENT '排序码',
  `size` char(20) DEFAULT NULL COMMENT '尺寸',
  `type` char(20) DEFAULT NULL COMMENT '品类',
  `starttime` date DEFAULT NULL COMMENT '促销开始时间',
  `endtime` date DEFAULT NULL COMMENT '促销结束时间',
  `describle` text COMMENT '商品描述',
  `keywords` varchar(255) DEFAULT NULL COMMENT '关键词',
  `price` float(20,2) NOT NULL COMMENT '价格',
  `is_on_sale` enum('否','是') DEFAULT '是' COMMENT '是否促销',
  `is_hot` enum('是','否') DEFAULT '是' COMMENT '是否热销',
  `updatetime` date DEFAULT NULL,
  `is_on` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '1表示在发布，0表示未发布',
  `createtime` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='商品图片';

-- ----------------------------
-- Records of think_goods
-- ----------------------------
INSERT INTO `think_goods` VALUES ('1', 'test1', '1', 'test1', 'test1', '', null, '', '1', null, null, '2016-08-01', '2016-08-04', '&lt;p&gt;test1&lt;/p&gt;', 'test1', '1.00', '是', '是', null, '1', '2016-08-03');
INSERT INTO `think_goods` VALUES ('2', 'test2', '2', 'test2', 'test2', '', null, '', '2', null, null, '2016-08-03', '2016-08-05', '&lt;p&gt;test2&lt;/p&gt;', 'test2', '2.00', '是', '是', null, '1', '2016-08-03');
