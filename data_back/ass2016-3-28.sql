/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : ass

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-03-28 20:28:35
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for records
-- ----------------------------
DROP TABLE IF EXISTS `records`;
CREATE TABLE `records` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `buy_date` varchar(100) NOT NULL COMMENT '购买日期',
  `customer_name` varchar(50) NOT NULL COMMENT '客户名称',
  `customer_phone` varchar(100) NOT NULL COMMENT '客户电话',
  `brand` varchar(100) NOT NULL COMMENT '品牌型号 ',
  `string_code` varchar(100) NOT NULL COMMENT '数码串码',
  `appearance` varchar(320) DEFAULT NULL COMMENT '外观描述 ',
  `screen` varchar(100) DEFAULT NULL COMMENT '显示屏 ',
  `parts` varchar(150) DEFAULT NULL COMMENT '配件 ',
  `digital_type` varchar(40) DEFAULT NULL COMMENT '数码类型',
  `digital_color` varchar(20) DEFAULT NULL COMMENT '数码颜色 ',
  `fault` varchar(350) DEFAULT NULL COMMENT '故障原因',
  `remarks` varchar(400) DEFAULT NULL COMMENT '备注',
  `repair_type` varchar(600) DEFAULT NULL COMMENT '维修类型',
  `start_date` varchar(50) DEFAULT NULL COMMENT ' 送修日期',
  `state` varchar(80) DEFAULT NULL COMMENT '送修状态(1:门店送往总仓；2:总仓接收；3:总仓送往厂家；4:总仓从厂家取回；5:仓库发往门店；6:门店接收)',
  `s_w_d` varchar(100) DEFAULT NULL COMMENT '门店送修仓库日期',
  `s_w_u` varchar(50) DEFAULT NULL COMMENT '仓库接收门店返修产品的操作者id',
  `w_m_d` varchar(100) DEFAULT NULL COMMENT '仓库送修厂家日期',
  `w_m_u` varchar(50) DEFAULT NULL COMMENT '仓库送修产品到厂家的操作者id',
  `m_w_d` varchar(100) DEFAULT NULL COMMENT '厂家返回仓库日期',
  `m_w_u` varchar(50) DEFAULT NULL COMMENT '厂家产品返回仓库操作者id',
  `w_s_d` varchar(100) DEFAULT NULL COMMENT '仓库返回门店日期',
  `w_s_u` varchar(50) DEFAULT NULL COMMENT '仓库返修产品返回门店操作者id',
  `from_s` varchar(100) DEFAULT NULL COMMENT '数码来自的门店名称',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of records
-- ----------------------------
INSERT INTO `records` VALUES ('1', '2015-12-3', 'kinpui', '15916357625', 'mx2', '15498486465', 'asd', '123a', '213', '数码', '红', '5456asd4 ', 'asdasd ', '返厂检测', '2016-03-27', '2', '2016-3-28', '3', null, null, null, null, null, null, null);
INSERT INTO `records` VALUES ('2', '2015-12-3', 'kinpui', '15916357625', 'mx2', '12345654554654', '花', '好', '电池', '手机', '白', '奥都收到', ' 这是什么的 ', '返厂检测', '2016-03-27', '2', '2016-03-28', '3', null, null, null, null, null, null, '12分店');
INSERT INTO `records` VALUES ('3', '2015-12-3', 'kinpui——ce', '15916357625', 'mx2', '231123123213123', '花', '好', '电池', '数码', '白', '红阿布都放你那按时到静安寺 ', ' 阿斯蒂芬撒旦法请假 我去基恩请问 奥斯卡的阿兰卡的武器as的AWK 斯科拉法安防是啊是', '返厂检测', '2016-03-27', '2', '2016-03-28', '3', null, null, null, null, '2016-03-28', null, '12分店');
INSERT INTO `records` VALUES ('4', '2015-12-3', '张剑培', '15916357625', 'mx2', '123123458123', '花', '好', '', '手机', '红', ' 华盛顿和', ' ', '返厂检测', '2016-03-27', '2', '2016-03-28', '3', null, null, null, null, null, null, '12分店');
INSERT INTO `records` VALUES ('5', '2015-12-3', 'kinpui_zhang', '15916357625', 'mx2', '561243156234', '花', '好', '电池', '手机', '红', '拉到就', ' ', '返厂检测', '2016-03-27', '6', null, null, null, null, null, null, '2016-03-28', null, '12分店');
INSERT INTO `records` VALUES ('6', '2014-6-8', '站线', '15016002145', 'm4', '4652261212', '全新', '完好', '电池', '手机', '红', ' 开不到', ' ', '返厂检测', '2016-03-27', '5', null, null, null, null, null, null, '2016-03-28', null, '12分店');
INSERT INTO `records` VALUES ('7', '2016-1-2', '张子', '59165325498', 'iphone6', '445648965153165', '微花', '完好', '电池', '手机', '白', '触屏失效 ', ' ', '返厂检测', '2016-03-27', '6', null, null, null, null, null, null, '2016-03-28', null, '12分店');
INSERT INTO `records` VALUES ('8', '2014-6-8', '陈校', '15016002365', '诺基亚', '47899658854', '新', '好', '电池', '手机', '白', '砸砖头 ', ' ', '返厂检测', '2016-03-27', '2', '2016-03-28', '3', null, null, null, null, null, null, '12分店');

-- ----------------------------
-- Table structure for state_code
-- ----------------------------
DROP TABLE IF EXISTS `state_code`;
CREATE TABLE `state_code` (
  `state_code` int(2) NOT NULL COMMENT '状态码',
  `state_msg` varchar(20) NOT NULL COMMENT '状态名称',
  PRIMARY KEY (`state_code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of state_code
-- ----------------------------
INSERT INTO `state_code` VALUES ('1', '门店送往总仓');
INSERT INTO `state_code` VALUES ('2', '总仓接收');
INSERT INTO `state_code` VALUES ('3', '总仓送往厂家');
INSERT INTO `state_code` VALUES ('4', '总仓从厂家取回');
INSERT INTO `state_code` VALUES ('5', '仓库发往门店');
INSERT INTO `state_code` VALUES ('6', '门店接收');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL COMMENT '用户名',
  `nickname` varchar(100) NOT NULL COMMENT '用户昵称',
  `password` varchar(100) NOT NULL,
  `usertype` varchar(1) NOT NULL COMMENT '用户类型：1管理员，2总仓管理员，3门店售后管理员，4客服',
  `sector` varchar(255) NOT NULL COMMENT '用户所属部门',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', '001', '管理员', 'e10adc3949ba59abbe56e057f20f883e', '1', '网销部');
INSERT INTO `user` VALUES ('2', '002', '仓库管理员', 'e10adc3949ba59abbe56e057f20f883e', '2', '仓库');
INSERT INTO `user` VALUES ('3', '003', '门店管理员', 'e10adc3949ba59abbe56e057f20f883e', '3', '12分店');
INSERT INTO `user` VALUES ('4', '004', '客服', 'e10adc3949ba59abbe56e057f20f883e', '4', '客服部');
