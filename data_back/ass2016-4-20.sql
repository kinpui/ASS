/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : ass

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2016-04-20 15:01:01
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for clause
-- ----------------------------
DROP TABLE IF EXISTS `clause`;
CREATE TABLE `clause` (
  `clause` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of clause
-- ----------------------------
INSERT INTO `clause` VALUES ('1)	保修机免费维修，自手机购买之日起一年内无人为损坏或进液的。\r\n2)	未按说明书要求使用/维护/保养造成损坏的、使用不当造成损坏的，非授权的维修或拆装、人力损坏，因不可抗力造成的损坏、进液、摔坏、震裂等，不在保修之列，本维修中心将视故障情况，给予报价并收费维修。\r\n3)	经本维修中心维修的保外故障机，享有一个月的免费保修期（仅限同一故障且非人为造成）\r\n4)	更换的旧件恕不退还，如有需要请提前声明，手机内存资料有可能因整理后丢失，请在维修前自行妥善保存。\r\n5)、	除特殊声明外，我中心不负责保管用户的电池、SIM卡等附件。\r\n6)	如因用户原因联系不到造成的延误，我中心概不负责，敬请用户提供准确的联系方式。\r\n7)	用户需在本中心通知取机开始计是那个月内取回用户机：如有超出三个月不取机的，因此产生的损坏、丢失等情况本中心概不负责。\r\n8)	请妥善保管取机联，凭单取机，被他人用取机联冒领，本中心该公司概不负责。\r\n9)	对于有隐藏故障的手机，经检测后，不一定能恢复原来的故障状况，或故障严重而不能维修的，则退还给顾客（包括外形，功能及最初呈报的故障）\r\n');

-- ----------------------------
-- Table structure for color
-- ----------------------------
DROP TABLE IF EXISTS `color`;
CREATE TABLE `color` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(30) DEFAULT NULL COMMENT '颜色名称',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of color
-- ----------------------------
INSERT INTO `color` VALUES ('2', '绿色');
INSERT INTO `color` VALUES ('4', '白色');
INSERT INTO `color` VALUES ('7', '黑色');

-- ----------------------------
-- Table structure for digital_type
-- ----------------------------
DROP TABLE IF EXISTS `digital_type`;
CREATE TABLE `digital_type` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `value` varchar(20) NOT NULL COMMENT '数码类型',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of digital_type
-- ----------------------------
INSERT INTO `digital_type` VALUES ('1', '手机');
INSERT INTO `digital_type` VALUES ('2', '电脑');
INSERT INTO `digital_type` VALUES ('3', '相机');
INSERT INTO `digital_type` VALUES ('4', '手机配件');
INSERT INTO `digital_type` VALUES ('5', '数码配件');

-- ----------------------------
-- Table structure for factory
-- ----------------------------
DROP TABLE IF EXISTS `factory`;
CREATE TABLE `factory` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `value` varchar(30) NOT NULL COMMENT '厂家名称',
  `phone` varchar(30) DEFAULT NULL COMMENT '电话号码',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of factory
-- ----------------------------
INSERT INTO `factory` VALUES ('1', '魅族', '400-6700-648');
INSERT INTO `factory` VALUES ('2', '小米', '400-6700-648');
INSERT INTO `factory` VALUES ('3', '华为', '400-6700-648');
INSERT INTO `factory` VALUES ('4', '苹果', '400-6700-648');
INSERT INTO `factory` VALUES ('7', '乐视', '400-6700-648');
INSERT INTO `factory` VALUES ('8', '酷派', '3792794');

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
  `receive_d` varchar(50) DEFAULT NULL COMMENT '接收时间',
  `take_d` varchar(50) DEFAULT NULL COMMENT '客户取机时间',
  `from_s` varchar(100) DEFAULT NULL COMMENT '数码来自的门店名称',
  `new_string` varchar(100) DEFAULT NULL COMMENT '换新串码',
  `new_string_explain` varchar(300) DEFAULT NULL COMMENT '换新串码说明',
  `offer` varchar(50) DEFAULT NULL COMMENT '报价',
  `reason` varchar(100) DEFAULT NULL COMMENT '报价原因',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of records
-- ----------------------------
INSERT INTO `records` VALUES ('1', '2015-12-3', 'ksull', '15916357625', 'mx2', '15498486465', 'asd', '123a', '213', '2', '红', '5456asd4 ', 'asdasd ', '返厂检测', '2016-03-20', '7', '2016-04-07', '3', '2016-04-07', '3', '2016-04-07', '3', '2016-03-29', null, '2016-04-12', '2016-04-12', '5分店', null, null, null, null);
INSERT INTO `records` VALUES ('3', '2015-12-3', 'testi', '15916357625', 'mx2', '231123123213123', '花', '好', '电池', '2', '白', '红阿布都放你那按时到静安寺 ', ' 阿斯蒂芬撒旦法请假 我去基恩请问 奥斯卡的阿兰卡的武器as的AWK 斯科拉法安防是啊是', '返厂检测', '2016-03-27', '6', '2016-04-07', '3', '2016-04-07', '3', '2016-04-07', '3', '2016-04-20', '2', null, null, '12分店', null, null, null, null);
INSERT INTO `records` VALUES ('5', '2015-12-3', 'zhangj', '15916357625', 'mx2', '561243156234', '花', '好', '电池', '2', '红', '拉到就', ' ', '返厂检测', '2015-03-27', '5', '2016-04-07', '3', '2016-04-07', '3', '2016-04-07', '3', '2016-03-28', null, null, null, '12分店', null, null, null, null);
INSERT INTO `records` VALUES ('6', '2014-6-8', 'testsss', '15016002145', 'm4', '4652261212', '全新', '完好', '电池', '3', '红', ' 开不到', ' ', '返厂检测', '2014-03-23', '7', '2016-04-07', '3', '2016-04-07', '3', '2016-04-07', '3', '2016-03-29', null, null, null, '12分店', null, null, null, null);
INSERT INTO `records` VALUES ('7', '2016-1-2', '张子', '59165325498', 'iphone6', '445648965153165', '微花', '完好', '电池', '1', '白', '触屏失效 ', ' ', '返厂检测', '2013-03-27', '5', '2016-04-07', '3', '2016-04-07', '3', '2016-04-14', '2', '2016-04-14', '2', null, null, '12分店', '12345679', 'asdf ', '12', '123');
INSERT INTO `records` VALUES ('8', '2014-6-8', '陈cs', '15016002365', '诺基亚', '47899658854', '新', '好', '电池', '4', '白', '砸砖头 ', ' ', '返厂检测', '2016-03-27', '4', '2016-04-07', '3', '2016-04-07', '3', '2016-04-07', '3', '2016-04-07', '3', null, null, '12分店', null, null, null, null);
INSERT INTO `records` VALUES ('9', '2016-3-5', '张剑培', '15916357625', 'iPhone6', '65552399945', '完好', '完好', '电池', '2', '蓝', ' 好\r\n', ' ', '返厂检测', '2016-03-29', '4', '2016-04-07', '3', '2016-04-07', '3', '2016-04-07', '3', '2016-03-29', null, null, null, '12分店', null, null, null, null);
INSERT INTO `records` VALUES ('10', '2015-9-8', '陈旭小', '13666662588', 'iPhone6s', '888666444555221', '微花', '破', '数据线', '3', '白', '维修屏幕 ', ' 注意数据', '返厂检测', '2016-03-29', '6', '2016-03-29', '2', '2016-03-29', '2', '2016-03-29', '2', '2016-03-29', '2', null, null, '12分店', null, null, null, null);
INSERT INTO `records` VALUES ('11', '2014-6-8', '张学友', '88888888', 'iPhone2', '123588654899', '花', '完好', '保卡，电池，充电器', '1', '红', ' 无法开机', '速度跟进', '返厂检测', '2016-03-29', '4', '2016-03-29', '2', '2016-03-29', '2', '2016-04-15', '2', '2016-03-29', '2', null, null, '12分店', '15', 'acxsa ', null, null);
INSERT INTO `records` VALUES ('12', '2014-6-8', '张剑培', '1500000623', 'iPhone2', '2165464635', '不花', '无误', '电池', '4', '红', ' 啊啊啊', ' 阿斯顿', '返厂检测', '2016-04-3', '4', '2016-04-07', '1', '2016-04-07', '1', '2016-04-07', '1', '2016-03-31', '2', null, null, '12分店', null, null, null, null);
INSERT INTO `records` VALUES ('13', '2013-02-15', '悟空', '13288882222', 'iphone 2', '1234567897945665', '花', 'POS', '电池', '5', '红', ' 开机不到', ' 是的', '返厂检测', '2016-04-07', '4', '2016-04-07', '1', '2016-04-07', '1', '2016-04-07', '1', '2016-04-07', '1', null, null, '5分店', null, null, null, null);
INSERT INTO `records` VALUES ('14', '2015-5-25', '张剑培', '7777777', 'mx2', '1231231231231', '微', '好', '电池，数据线', '1', '红', '阿萨德 ', ' ', '返厂检测', '2016-04-07', '4', '2016-04-07', '1', '2016-04-07', '1', '2016-04-07', '1', null, null, null, null, '12分店', null, null, null, null);
INSERT INTO `records` VALUES ('19', '2014-6-8', 'testsssa', '15016002145', 'm4', '4652261212', '全新', '完好', '电池', '3', '红', ' 开不到', ' ', '返厂检测', '2014-03-23', '2', '2016-04-12', '2', '2016-04-07', '3', '2016-04-07', '3', '2016-03-29', null, null, null, '12分店', null, null, null, null);
INSERT INTO `records` VALUES ('23', '2016-1-2', '张子A', '59165325498', 'iphone6', '445648965153165', '微花', '完好', '电池', '2', '白', '触屏失效 ', ' ', '返厂检测', '2013-04-10', '2', '2016-04-07', '3', '2016-04-07', '3', '2016-04-07', '3', '2016-03-28', null, null, null, '12分店', null, null, null, null);
INSERT INTO `records` VALUES ('24', '2015-9-8', '张剑培', '15916357625', 'mi5', '44162111999950', '无', '无', '无', '1', '红', '无卡 ', ' ', '返厂检测', '2016-04-12', '7', '2016-04-12', '2', '2016-04-12', '2', '2016-04-12', '2', '2016-04-12', '2', '2016-04-12', '2016-04-12', '5分店', null, null, null, null);
INSERT INTO `records` VALUES ('25', '2015-5-25', '张号', '15916357625', '锤子', '155564886', '无', '无', '无', '2', '白', '太大 ', ' ', '返厂检测', '2016-04-12', '4', '2016-04-12', '2', '2016-04-12', '2', '2016-04-14', '2', null, null, null, null, '5分店', null, null, null, null);
INSERT INTO `records` VALUES ('26', '2013-02-15', '张悟空', '88888888', '坚果', '1232165', '微', '好', '电池，数据线', '3', '蓝', ' 无故障啊 就是想修', ' ', '返厂检测', '2016-04-01', '7', '2016-04-12', '2', '2016-04-12', '2', '2016-04-12', '2', '2016-04-12', '2', '2016-04-12', '2016-04-12', '5分店', null, null, null, null);
INSERT INTO `records` VALUES ('27', '2014-6-8', 'kinpui', '15916357625', 'meizu pro 6', '1321564654984456', '花', '好', '电池', '1', '白色', '预约 ', ' ', '返厂检测', '2016-04-12', '2', '2016-04-14', '2', null, null, null, null, null, null, null, null, '5分店', null, null, null, null);
INSERT INTO `records` VALUES ('28', '2016-3-28', '李克强', '138888888', '红旗X1', '888888888899', '无', '完好', '全配', '1', '白色', '保养 ', ' ', '返厂检测', '2016-04-14', '4', '2016-04-14', '2', '2016-04-14', '2', '2016-04-14', '2', null, null, null, null, '5分店', null, null, '999', '李总');
INSERT INTO `records` VALUES ('29', '2015-12-3', '李克强', '123456', '红旗X1', '888888999', '完好', '完好', '全配', '1', '白色', '无故障 ', '总理使用 ', '返厂检测', '2016-04-14', '7', '2016-04-14', '2', '2016-04-14', '2', '2016-04-14', '2', '2016-04-14', '2', '2016-04-14', '2016-04-14', '5分店', '44162119950406', '破烂不堪。纠缠不清', '98', '换壳');
INSERT INTO `records` VALUES ('30', '2015-12-3', '李克强', '999999999', 'mi note', '99999998890', '花', '无', '电池', '1', '白色', '刷机 ', ' ', '返厂检测', '2016-04-15', '3', '2016-04-15', '2', '2016-04-15', '18', null, null, null, null, null, null, '网销部', null, null, '790', '换屏幕了');
INSERT INTO `records` VALUES ('31', '', '', '', 'iPhone2', '88888888888', null, null, '88', '1', '绿色', ' ', ' ', null, '2016-04-19', '2', '2016-04-19', '2', null, null, null, null, null, null, null, null, '总仓', null, null, null, null);
INSERT INTO `records` VALUES ('32', '', '', '', 'iPhone12', '87897898888', null, null, '保卡，电池，充电器', '1', '白色', '电池盖 ', ' ', null, '2016-04-19', '7', '2016-04-19', '2', '2016-04-19', '2', '2016-04-19', '2', '2016-04-19', '2', '2016-04-19', '2016-04-19', '总仓', null, null, null, null);
INSERT INTO `records` VALUES ('33', '', '', '', 'testing1', '8797897897987', null, null, 'test par', '1', '黑色', 'bar ', ' ', null, '2016-04-19', '6', '2016-04-19', '2', '2016-04-19', '2', '2016-04-19', '2', '2016-04-19', '2', '2016-04-19', null, '总仓', null, null, null, null);

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
  `addr` varchar(200) DEFAULT NULL COMMENT '地址',
  `tel` varchar(30) DEFAULT NULL COMMENT '电话',
  `region` int(3) DEFAULT NULL COMMENT '所属区域',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sector
-- ----------------------------
INSERT INTO `sector` VALUES ('1', '12分店', '8路', '0752-95255', '1');
INSERT INTO `sector` VALUES ('2', '5分店', '7路', '0752-3792793', '2');
INSERT INTO `sector` VALUES ('3', '2分店', '6路', '0752-3792795', '5');
INSERT INTO `sector` VALUES ('4', '40分店', '5路', '0752-3792796', '5');
INSERT INTO `sector` VALUES ('5', '小金小米店', '4路', '0752-3792797', '4');
INSERT INTO `sector` VALUES ('6', '龙丰华为店', '3路', '0752-3792792', '3');
INSERT INTO `sector` VALUES ('7', '博罗苹果店', '2路', '0752-3792733', '4');
INSERT INTO `sector` VALUES ('8', '陈江苹果', '1路', '0752-3798888', '1');
INSERT INTO `sector` VALUES ('9', '惠东苹果', '10路', '0752-37927966', '3');
INSERT INTO `sector` VALUES ('10', '总仓', '12领域', '0752-3792111', '1');
INSERT INTO `sector` VALUES ('11', '8分店', '仲恺中', '88888888', '2');
INSERT INTO `sector` VALUES ('12', '123', '123123', '12312', '1');
INSERT INTO `sector` VALUES ('13', '网销部', '皇庭酒店', '400-6788-648', '1');

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
INSERT INTO `state_code` VALUES ('7', '客户已取');

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
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', '001', '张剑培', 'e10adc3949ba59abbe56e057f20f883e', '1', '12分店');
INSERT INTO `user` VALUES ('2', '002', '刘海霞', 'e10adc3949ba59abbe56e057f20f883e', '2', '12分店');
INSERT INTO `user` VALUES ('3', '003', '5分店', 'e10adc3949ba59abbe56e057f20f883e', '3', '5分店');
INSERT INTO `user` VALUES ('11', '004', '吴眀渊', '123456', '2', '总仓');
INSERT INTO `user` VALUES ('12', '0055', 'aaa', '123456', '2', '总仓');
INSERT INTO `user` VALUES ('13', '012', '12分店', 'e10adc3949ba59abbe56e057f20f883e', '3', '12分店');
INSERT INTO `user` VALUES ('16', '8888', '网销中心', 'e10adc3949ba59abbe56e057f20f883e', '3', '网销部');
INSERT INTO `user` VALUES ('17', '004', '吴眀渊', '123456', '2', '总仓');
INSERT INTO `user` VALUES ('18', '005', '廖荣奇', 'e10adc3949ba59abbe56e057f20f883e', '2', '总仓');
INSERT INTO `user` VALUES ('19', '00015', '刘海霞', 'e10adc3949ba59abbe56e057f20f883e', '5', '总仓');

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
INSERT INTO `userjob` VALUES ('5', '小仓库');
