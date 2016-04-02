/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : ass

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-03-31 17:10:16
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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of records
-- ----------------------------
INSERT INTO `records` VALUES ('1', '2015-12-3', 'ksull', '15916357625', 'mx2', '15498486465', 'asd', '123a', '213', '数码', '红', '5456asd4 ', 'asdasd ', '返厂检测', '2016-03-20', '6', '2016-03-29', '2', '2016-03-29', '2', null, null, '2016-03-29', null, '12分店');
INSERT INTO `records` VALUES ('2', '2015-12-3', 'testimg', '15916357625', 'mx2', '12345654554654', '花', '好', '电池', '手机', '白', '奥都收到', ' 这是什么的 ', '返厂检测', '2016-03-21', '6', '2016-03-29', '2', '2016-03-29', '2', null, null, '2016-03-29', null, '12分店');
INSERT INTO `records` VALUES ('3', '2015-12-3', 'testi', '15916357625', 'mx2', '231123123213123', '花', '好', '电池', '数码', '白', '红阿布都放你那按时到静安寺 ', ' 阿斯蒂芬撒旦法请假 我去基恩请问 奥斯卡的阿兰卡的武器as的AWK 斯科拉法安防是啊是', '返厂检测', '2016-03-27', '6', '2016-03-29', '2', '2016-03-29', '2', null, null, '2016-03-29', null, '12分店');
INSERT INTO `records` VALUES ('4', '2015-12-3', '张剑培', '15916357625', 'mx2', '123123458123', '花', '好', '', '手机', '红', ' 华盛顿和', ' ', '返厂检测', '2016-03-27', '6', '2016-03-29', '2', '2016-03-29', '2', null, null, '2016-03-29', null, '12分店');
INSERT INTO `records` VALUES ('5', '2015-12-3', 'zhangj', '15916357625', 'mx2', '561243156234', '花', '好', '电池', '手机', '红', '拉到就', ' ', '返厂检测', '2015-03-27', '6', '2016-01-25', null, null, null, null, null, '2016-03-28', null, '12分店');
INSERT INTO `records` VALUES ('6', '2014-6-8', 'testsss', '15016002145', 'm4', '4652261212', '全新', '完好', '电池', '手机', '红', ' 开不到', ' ', '返厂检测', '2014-03-23', '6', '2015-06-2', null, null, null, null, null, '2016-03-29', null, '12分店');
INSERT INTO `records` VALUES ('7', '2016-1-2', '张子', '59165325498', 'iphone6', '445648965153165', '微花', '完好', '电池', '手机', '白', '触屏失效 ', ' ', '返厂检测', '2013-03-27', '6', '2013-05-06', null, null, null, null, null, '2016-03-28', null, '12分店');
INSERT INTO `records` VALUES ('8', '2014-6-8', '陈cs', '15016002365', '诺基亚', '47899658854', '新', '好', '电池', '手机', '白', '砸砖头 ', ' ', '返厂检测', '2016-03-27', '6', '2016-03-29', '2', '2016-03-29', '2', null, null, '2016-03-29', '2', '12分店');
INSERT INTO `records` VALUES ('9', '2016-3-5', '张剑培', '15916357625', 'iPhone6', '65552399945', '完好', '完好', '电池', '手机', '蓝', ' 好\r\n', ' ', '返厂检测', '2016-03-29', '6', '2016-03-29', '2', '2016-03-29', '2', null, null, '2016-03-29', null, '12分店');
INSERT INTO `records` VALUES ('10', '2015-9-8', '陈旭小', '13666662588', 'iPhone6s', '888666444555221', '微花', '破', '数据线', '手机', '白', '维修屏幕 ', ' 注意数据', '返厂检测', '2016-03-29', '6', '2016-03-29', '2', '2016-03-29', '2', '2016-03-29', '2', '2016-03-29', '2', '12分店');
INSERT INTO `records` VALUES ('11', '2014-6-8', '张学友', '1500000623', 'iPhone2', '123588654899', '花', '完好', '保卡，电池，充电器', '电脑', '红', ' 无法开机', '速度跟进', '返厂检测', '2016-03-29', '6', '2016-03-29', '2', '2016-03-29', '2', '2016-03-29', '2', '2016-03-29', '2', '12分店');
INSERT INTO `records` VALUES ('12', '2014-6-8', '张剑培', '1500000623', 'iPhone2', '2165464635', '不花', '无误', '电池', '手机', '红', ' 啊啊啊', ' 阿斯顿', '返厂检测', '2016-03-31', '6', '2016-03-31', '2', '2016-03-31', '2', '2016-03-31', '2', '2016-03-31', '2', '12分店');

-- ----------------------------
-- Table structure for region
-- ----------------------------
DROP TABLE IF EXISTS `region`;
CREATE TABLE `region` (
  `id` int(2) NOT NULL COMMENT '区域ID',
  `region` varchar(30) NOT NULL COMMENT '区域名',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of region
-- ----------------------------
INSERT INTO `region` VALUES ('1', '陈江一区');
INSERT INTO `region` VALUES ('2', '陈江二区');
INSERT INTO `region` VALUES ('3', '惠州区域');
INSERT INTO `region` VALUES ('4', '博罗区域');
INSERT INTO `region` VALUES ('5', '惠阳区域');

-- ----------------------------
-- Table structure for sector
-- ----------------------------
DROP TABLE IF EXISTS `sector`;
CREATE TABLE `sector` (
  `id` int(3) NOT NULL AUTO_INCREMENT COMMENT '门店id',
  `name` varchar(50) NOT NULL COMMENT '门店名称',
  `region` int(3) DEFAULT NULL COMMENT '所属区域',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sector
-- ----------------------------
INSERT INTO `sector` VALUES ('1', '12分店', '1');
INSERT INTO `sector` VALUES ('2', '5分店', '2');
INSERT INTO `sector` VALUES ('3', '2分店', '5');
INSERT INTO `sector` VALUES ('4', '40分店', '5');
INSERT INTO `sector` VALUES ('5', '小金小米店', '4');
INSERT INTO `sector` VALUES ('6', '龙丰华为店', '3');
INSERT INTO `sector` VALUES ('7', '博罗苹果店', '4');
INSERT INTO `sector` VALUES ('8', '陈江苹果', '1');
INSERT INTO `sector` VALUES ('9', '惠东苹果', '3');
INSERT INTO `sector` VALUES ('10', '总仓', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', '001', '张剑培', 'e10adc3949ba59abbe56e057f20f883e', '1', '12分店');
INSERT INTO `user` VALUES ('2', '002', '刘海霞', 'e10adc3949ba59abbe56e057f20f883e', '2', '12分店');
INSERT INTO `user` VALUES ('3', '003', '5分店', 'e10adc3949ba59abbe56e057f20f883e', '3', '5分店');
INSERT INTO `user` VALUES ('11', '004', '李四十', '123456', '4', '博罗苹果店');
INSERT INTO `user` VALUES ('12', '0055', 'aaa', '123456', '2', '总仓');

-- ----------------------------
-- Table structure for userjob
-- ----------------------------
DROP TABLE IF EXISTS `userjob`;
CREATE TABLE `userjob` (
  `usertype` int(2) NOT NULL,
  `userjob` varchar(10) DEFAULT NULL COMMENT '用户职位'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of userjob
-- ----------------------------
INSERT INTO `userjob` VALUES ('1', '系统管理员');
INSERT INTO `userjob` VALUES ('2', '总仓售后员');
INSERT INTO `userjob` VALUES ('3', '门店售后员');
INSERT INTO `userjob` VALUES ('4', '客服专员');
