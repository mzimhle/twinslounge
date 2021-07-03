/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50612
Source Host           : localhost:3306
Source Database       : emanager

Target Server Type    : MYSQL
Target Server Version : 50612
File Encoding         : 65001

Date: 2014-11-17 19:13:54
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `enquiry`
-- ----------------------------
DROP TABLE IF EXISTS `enquiry`;
CREATE TABLE `enquiry` (
  `enquiry_code` varchar(10) NOT NULL,
  `campaign_code` varchar(4) NOT NULL,
  `areapost_code` varchar(10) DEFAULT NULL,
  `enquiry_name` varchar(50) DEFAULT NULL,
  `enquiry_email` varchar(50) DEFAULT NULL,
  `enquiry_number` varchar(15) DEFAULT NULL,
  `enquiry_subject` varchar(50) DEFAULT NULL,
  `enquiry_comments` text,
  `enquiry_added` datetime DEFAULT NULL,
  `enquiry_updated` datetime DEFAULT NULL,
  `enquiry_active` tinyint(1) DEFAULT '1',
  `enquiry_deleted` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`enquiry_code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of enquiry
-- ----------------------------
