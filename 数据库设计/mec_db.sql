/*
Navicat MySQL Data Transfer

Source Server         : .
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : mec_db

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2017-05-19 08:13:27
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for accumulate_num
-- ----------------------------
DROP TABLE IF EXISTS `accumulate_num`;
CREATE TABLE `accumulate_num` (
  `AN_ID` varchar(45) NOT NULL,
  `F_ID` varchar(45) DEFAULT NULL,
  `AN_NUM` int(11) DEFAULT NULL,
  PRIMARY KEY (`AN_ID`),
  KEY `FK_Reference_13` (`F_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of accumulate_num
-- ----------------------------
INSERT INTO `accumulate_num` VALUES ('\r\nf552618f-38e6-480d-9dc0-a4936f881bec', 'c71e0244-2bff-46e6-82ff-12b7877cee37', '20');

-- ----------------------------
-- Table structure for area
-- ----------------------------
DROP TABLE IF EXISTS `area`;
CREATE TABLE `area` (
  `AR_ID` varchar(45) NOT NULL,
  `CY_ID` varchar(45) DEFAULT NULL,
  `AR_NAME` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`AR_ID`),
  KEY `FK_Reference_10` (`CY_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of area
-- ----------------------------
INSERT INTO `area` VALUES ('375486ab-f943-461b-9e0b-794280c70753', 'd49b2fe1-8712-4a1d-810c-dd4887c01453', '碑林区');
INSERT INTO `area` VALUES ('00ad057a-c2a4-4246-af69-2ce36e2ddf2f', 'd49b2fe1-8712-4a1d-810c-dd4887c01453', '新城区');
INSERT INTO `area` VALUES ('60c14962-784b-4342-ae52-d6d73584a8cf', 'd49b2fe1-8712-4a1d-810c-dd4887c01453', '未央区');
INSERT INTO `area` VALUES ('c6383a18-0586-464b-9cac-8b5c6dffc406', 'd49b2fe1-8712-4a1d-810c-dd4887c01453', '雁塔区');
INSERT INTO `area` VALUES ('2aaef8e0-4a5d-45f6-beea-b4f35b3d375b', 'd49b2fe1-8712-4a1d-810c-dd4887c01453', '莲湖区');
INSERT INTO `area` VALUES ('339f56bd-eab4-4c79-bdb3-ffe52e5cae60', 'd49b2fe1-8712-4a1d-810c-dd4887c01453', '灞桥区');
INSERT INTO `area` VALUES ('85bb3e63-67a0-4836-b976-7a3313a1e7df', 'd49b2fe1-8712-4a1d-810c-dd4887c01453', '高陵区');
INSERT INTO `area` VALUES ('012091af-9b96-4601-85da-bfd5cee0dc4a', 'd49b2fe1-8712-4a1d-810c-dd4887c01453', '阎良区');
INSERT INTO `area` VALUES ('e67eed82-1539-4835-9891-e80e9661c4d6', 'd49b2fe1-8712-4a1d-810c-dd4887c01453', '长安区');
INSERT INTO `area` VALUES ('9f3872ad-42a3-4d5a-8713-14c7864c2164', 'd49b2fe1-8712-4a1d-810c-dd4887c01453', '周至县');
INSERT INTO `area` VALUES ('54ff74b0-55d8-452a-a855-17c397843eae', 'd49b2fe1-8712-4a1d-810c-dd4887c01453', '蓝田县');

-- ----------------------------
-- Table structure for city
-- ----------------------------
DROP TABLE IF EXISTS `city`;
CREATE TABLE `city` (
  `CY_ID` varchar(45) NOT NULL,
  `CY_NAME` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`CY_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of city
-- ----------------------------
INSERT INTO `city` VALUES ('d49b2fe1-8712-4a1d-810c-dd4887c01453', '西安市');

-- ----------------------------
-- Table structure for customer
-- ----------------------------
DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `C_ID` varchar(45) NOT NULL,
  `C_NAME` varchar(20) DEFAULT NULL,
  `C_NIKENAME` varchar(20) DEFAULT NULL,
  `C_USERNAME` varchar(20) DEFAULT NULL,
  `C_EMAIL` varchar(20) DEFAULT NULL,
  `C_PHONE` varchar(16) DEFAULT NULL,
  `C_PASSWORD` varchar(20) DEFAULT NULL,
  `C_PIC` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`C_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of customer
-- ----------------------------
INSERT INTO `customer` VALUES ('6f4b9fee-c673-4b99-9e80-7f8b0017f7a7', '张三', 'k_85846121', 'k_85846121', '85846121@qq.com', '13558593665', 'k_85846121', null);
INSERT INTO `customer` VALUES ('f6723bd6-829b-49c5-842e-a383babb6f67', '李四', 'k_21646849', 'k_21646849', '494161864@qq.com', '13598986367', 'k_21646849', null);
INSERT INTO `customer` VALUES ('591abc5465f3c', null, '鲁特', 'root', '464161@qq.com', '12413424124', 'root', '1495077145_1447533091.jpg');
INSERT INTO `customer` VALUES ('591abe1402005', null, null, 'root1', '86498464@qq.com', '12413424124', 'root1', null);
INSERT INTO `customer` VALUES ('591ac11a77bff', null, null, 'testuser', '86498464@qq.com', '12413424124', '123456', null);
INSERT INTO `customer` VALUES ('591ac1403daef', null, null, 'testuser1', '86498464@qq.com', '12413424124', '123456', null);
INSERT INTO `customer` VALUES ('591ac21605191', null, null, 'testuser2', '86498464@qq.com', '12413424124', '123456', null);

-- ----------------------------
-- Table structure for customer_collect
-- ----------------------------
DROP TABLE IF EXISTS `customer_collect`;
CREATE TABLE `customer_collect` (
  `CC_ID` varchar(45) NOT NULL,
  `C_ID` varchar(45) NOT NULL,
  `FS_ID` varchar(45) NOT NULL,
  `CC_FS_NAME` varchar(100) DEFAULT NULL,
  `CC_FS_IMG` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`CC_ID`),
  KEY `C_ID` (`C_ID`),
  KEY `FS_ID` (`FS_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of customer_collect
-- ----------------------------
INSERT INTO `customer_collect` VALUES ('9ba3f262-3f4c-4787-abe8-517a74eb1892', '591abc5465f3c', 'bee3bd4a-6ce1-4d9d-b901-f27a5015ab52', '外婆家', 'wpjnewlogo.jpg');

-- ----------------------------
-- Table structure for customer_detail
-- ----------------------------
DROP TABLE IF EXISTS `customer_detail`;
CREATE TABLE `customer_detail` (
  `CD_ID` varchar(45) NOT NULL,
  `C_ID` varchar(45) DEFAULT NULL,
  `CD_LOCAL` varchar(200) DEFAULT NULL,
  `CD_LOACL_DETAIL` varchar(500) DEFAULT NULL,
  `CD_POST` varchar(20) DEFAULT NULL,
  `CD_ACC_NUM` int(11) DEFAULT NULL,
  PRIMARY KEY (`CD_ID`),
  KEY `FK_Reference_14` (`C_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of customer_detail
-- ----------------------------
INSERT INTO `customer_detail` VALUES ('19bb9726-d2ab-4c9d-b46f-b5e267ec40ec', '6f4b9fee-c673-4b99-9e80-7f8b0017f7a7', '西安市雁塔区', null, '46411651', '100');
INSERT INTO `customer_detail` VALUES ('19bb9726-d2ab-4c9d-bj89-b5e267ec7sha', '591abc5465f3c', null, null, null, '10');
INSERT INTO `customer_detail` VALUES ('591abe140914e', '591abe1402005', null, null, null, '10');
INSERT INTO `customer_detail` VALUES ('591ac11a7aadf', '591ac11a77bff', null, null, null, '10');
INSERT INTO `customer_detail` VALUES ('591ac140409cf', '591ac1403daef', null, null, null, '10');
INSERT INTO `customer_detail` VALUES ('591ac216093fa', '591ac21605191', null, null, null, '10');

-- ----------------------------
-- Table structure for customer_local
-- ----------------------------
DROP TABLE IF EXISTS `customer_local`;
CREATE TABLE `customer_local` (
  `UL_ID` varchar(45) NOT NULL,
  `C_ID` varchar(45) DEFAULT NULL,
  `UL_PRIVENCE` varchar(45) DEFAULT NULL,
  `UL_CITY` varchar(45) DEFAULT NULL,
  `UL_AREA` varchar(45) DEFAULT NULL,
  `UL_NAME` varchar(45) DEFAULT NULL,
  `UL_STREE_LOCAL` varchar(200) DEFAULT NULL,
  `UL_POST_NUM` varchar(15) DEFAULT NULL,
  `UL_PHONE` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`UL_ID`),
  KEY `LOCAL_CUSTOMER_ID` (`C_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of customer_local
-- ----------------------------
INSERT INTO `customer_local` VALUES ('591cf0f991492', '591abc5465f3c', '陕西省', '西安市', '莲湖区', '鲁特', '12路144号', '456463', '13563963588');

-- ----------------------------
-- Table structure for cust_free_card
-- ----------------------------
DROP TABLE IF EXISTS `cust_free_card`;
CREATE TABLE `cust_free_card` (
  `CFC_ID` varchar(45) NOT NULL,
  `C_ID` varchar(45) DEFAULT NULL,
  `FFC_ID` varchar(45) DEFAULT NULL,
  `CFC_NAME` varchar(100) DEFAULT NULL,
  `CFC_MONEY` double DEFAULT NULL,
  `CFC_STORE` varchar(100) DEFAULT NULL,
  `CFC_FOOD` varchar(200) DEFAULT NULL,
  `CFC_START_TIME` datetime DEFAULT NULL,
  `CFC_END_TIME` datetime DEFAULT NULL,
  PRIMARY KEY (`CFC_ID`),
  KEY `FK_Reference_15` (`C_ID`),
  KEY `FK_Reference_17` (`FFC_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of cust_free_card
-- ----------------------------
INSERT INTO `cust_free_card` VALUES ('746010df-46a7-4b8d-b445-cc7d388c86f3', '6f4b9fee-c673-4b99-9e80-7f8b0017f7a7', '88389bef-294b-483d-8c0a-764acf42254a', '外婆家优惠劵', '2', '外婆家', '香辣鸡翅', '2017-05-10 09:36:38', '2017-06-10 09:37:07');
INSERT INTO `cust_free_card` VALUES ('e70498c1-c573-43a4-9701-e2fe56f9ee40', '591abc5465f3c', '88389bef-294b-483d-8c0a-764acf42254a', '外婆家优惠劵', '2', '外婆家', '香辣鸡翅', '2017-05-10 09:37:12', '2017-06-10 09:37:17');

-- ----------------------------
-- Table structure for foods
-- ----------------------------
DROP TABLE IF EXISTS `foods`;
CREATE TABLE `foods` (
  `F_ID` varchar(45) NOT NULL,
  `FS_ID` varchar(45) DEFAULT NULL,
  `FT_ID` varchar(45) DEFAULT NULL,
  `F_NAME` varchar(32) DEFAULT NULL,
  `F_DES` varchar(5000) DEFAULT NULL,
  `F_PIC` varchar(200) DEFAULT NULL,
  `F_PRICE` double DEFAULT NULL,
  `F_DISCOUNT` double DEFAULT NULL,
  `F_DISCOUNT_PRICE` double DEFAULT NULL,
  `FS_NAME` varchar(50) DEFAULT NULL,
  `F_ON_TIME` datetime DEFAULT NULL,
  `F_STATE` int(11) DEFAULT NULL,
  `F_RECOMMED` int(11) DEFAULT NULL,
  `F_BANNER` int(11) DEFAULT NULL,
  `F_AREA` varchar(100) DEFAULT NULL,
  `F_EAT_T` varchar(20) DEFAULT NULL,
  `F_LOCATION` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`F_ID`),
  KEY `FK_Reference_1` (`FS_ID`),
  KEY `FK_Reference_18` (`FT_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of foods
-- ----------------------------
INSERT INTO `foods` VALUES ('c71e0244-2bff-46e6-82ff-12b7877cee37', 'bee3bd4a-6ce1-4d9d-b901-f27a5015ab52', 'da0ac564-a27b-4735-9f9d-4c455b29f272', '香辣鸡翅', '1. 将土豆洗净刮皮。\r\n2. 先将土豆切成整齐的大薄片这样是切出均匀的丝的要点。\r\n3. 将土豆片切成细丝。\r\n4. 用清水将切好的土豆丝泡去淀粉，（这样炒出的土豆丝清爽不粘）\r\n5. 将葱切末、辣椒剪成小段、蒜切末、红椒切丝、姜切末。', 'f05.jpg', '25.25', null, null, '外婆家', null, '1', '1', '0', '雁塔区', '中餐', '陕西省西安市雁塔区丈八北路88号');
INSERT INTO `foods` VALUES ('b1e08072-7cff-426c-afcc-bcff9b537652', 'bee3bd4a-6ce1-4d9d-b901-f27a5015ab52', 'da0ac564-a27b-4735-9f9d-4c455b29f272', '青椒炒肉', null, '04.jpg', '10', null, null, '外婆家', null, '1', '1', '0', '雁塔区', '中餐', '陕西省西安市雁塔区丈八北路88号');
INSERT INTO `foods` VALUES ('1b1132a8-045c-49b6-9589-9404dc1514f1', 'bee3bd4a-6ce1-4d9d-b901-f27a5015ab52', 'da0ac564-a27b-4735-9f9d-4c455b29f272', '香辣鸡丁', null, '06.jpg', '10', null, null, '外婆家', null, '1', '1', '0', '雁塔区', '中餐', '陕西省西安市雁塔区丈八北路88号');
INSERT INTO `foods` VALUES ('e13616f2-1310-4a24-957d-03a7e8dc258c', 'bee3bd4a-6ce1-4d9d-b901-f27a5015ab52', 'da0ac564-a27b-4735-9f9d-4c455b29f272', '糖醋鱼', null, '01.jpg', '15', null, null, '外婆家', null, '1', '0', '1', '雁塔区', '中餐', '陕西省西安市雁塔区丈八北路88号');
INSERT INTO `foods` VALUES ('83d3951f-5dbc-47c3-91d9-1e163dbfc3ff', 'bee3bd4a-6ce1-4d9d-b901-f27a5015ab52', 'da0ac564-a27b-4735-9f9d-4c455b29f272', '回锅肉', null, '02.jpg', '12', null, null, '外婆家', null, '1', '0', '1', '雁塔区', '中餐', '陕西省西安市雁塔区丈八北路88号');
INSERT INTO `foods` VALUES ('7e5aa6d2-7677-4f4b-b177-e9920a3abfae', 'bee3bd4a-6ce1-4d9d-b901-f27a5015ab52', 'da0ac564-a27b-4735-9f9d-4c455b29f272', '烤鸡', null, '03.jpg', '23', null, null, '外婆家', null, '1', '0', '1', '雁塔区', '中餐', '陕西省西安市雁塔区丈八北路88号');

-- ----------------------------
-- Table structure for foods_cust_des
-- ----------------------------
DROP TABLE IF EXISTS `foods_cust_des`;
CREATE TABLE `foods_cust_des` (
  `F_U_ID` varchar(45) NOT NULL,
  `F_ID` varchar(45) DEFAULT NULL,
  `C_ID` varchar(45) DEFAULT NULL,
  `F_U_DES` varchar(1000) DEFAULT NULL,
  `F_U_TIME` datetime DEFAULT NULL,
  `F_U_NICE` int(11) DEFAULT NULL,
  `C_NIKE_NAME` varchar(50) DEFAULT NULL,
  `F_PIC` varchar(200) DEFAULT NULL,
  `F_NAME` varchar(100) DEFAULT NULL,
  `FS_NAME` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`F_U_ID`),
  KEY `FK_Reference_3` (`F_ID`),
  KEY `FK_Reference_4` (`C_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of foods_cust_des
-- ----------------------------
INSERT INTO `foods_cust_des` VALUES ('289553ad-4bce-40e7-bd5f-b213dfd6e3ab', 'c71e0244-2bff-46e6-82ff-12b7877cee37', '6f4b9fee-c673-4b99-9e80-7f8b0017f7a7', '味道挺不错，送餐速度挺快...', '2017-05-11 09:26:46', '1', 'k_85846121', 'f05.jpg', '香辣鸡翅', '外婆家');
INSERT INTO `foods_cust_des` VALUES ('8ec5a9f1-f26b-40a6-8e3f-899f6a20b82d', 'c71e0244-2bff-46e6-82ff-12b7877cee37', 'f6723bd6-829b-49c5-842e-a383babb6f67', '味道挺不错，送餐速度挺快...', '2017-05-11 09:38:46', '1', 'k_21646849', 'f05.jpg', '香辣鸡翅', '外婆家');
INSERT INTO `foods_cust_des` VALUES ('73ade7ea-e9c3-4fa4-b795-1eeb5de2080e', 'c71e0244-2bff-46e6-82ff-12b7877cee37', '591abc5465f3c', '味道挺不错，送餐速度挺快...', '2017-05-18 09:16:18', '1', 'root', 'f05.jpg', '香辣鸡翅', '外婆家');

-- ----------------------------
-- Table structure for foods_free_card
-- ----------------------------
DROP TABLE IF EXISTS `foods_free_card`;
CREATE TABLE `foods_free_card` (
  `FFC_ID` varchar(45) NOT NULL,
  `F_ID` varchar(45) DEFAULT NULL,
  `FFC_NAME` varchar(100) DEFAULT NULL,
  `FFC_MONEY` double DEFAULT NULL,
  `FFC_ON_TIME` datetime DEFAULT NULL,
  `FFC_OFF_TIME` datetime DEFAULT NULL,
  `FFC_STATE` int(11) DEFAULT NULL,
  PRIMARY KEY (`FFC_ID`),
  KEY `FK_Reference_16` (`F_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of foods_free_card
-- ----------------------------
INSERT INTO `foods_free_card` VALUES ('\r\n88389bef-294b-483d-8c0a-764acf42254a', 'c71e0244-2bff-46e6-82ff-12b7877cee37', '外婆家优惠劵', '2', '2017-05-10 08:18:55', '2017-06-10 08:19:20', '1');

-- ----------------------------
-- Table structure for foods_sale_history
-- ----------------------------
DROP TABLE IF EXISTS `foods_sale_history`;
CREATE TABLE `foods_sale_history` (
  `FSH_ID` varchar(45) NOT NULL,
  `F_ID` varchar(45) DEFAULT NULL,
  `C_ID` varchar(45) DEFAULT NULL,
  `FSH_SALE_TIME` datetime DEFAULT NULL,
  PRIMARY KEY (`FSH_ID`),
  KEY `FK_Reference_8` (`F_ID`),
  KEY `FK_Reference_9` (`C_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of foods_sale_history
-- ----------------------------
INSERT INTO `foods_sale_history` VALUES ('da97dd39-7352-4c66-adf8-ee03d30cb2ec', 'c71e0244-2bff-46e6-82ff-12b7877cee37', '6f4b9fee-c673-4b99-9e80-7f8b0017f7a7', '2017-05-04 15:25:35');

-- ----------------------------
-- Table structure for foods_type
-- ----------------------------
DROP TABLE IF EXISTS `foods_type`;
CREATE TABLE `foods_type` (
  `FT_ID` varchar(45) NOT NULL,
  `FT_NAME` varchar(200) DEFAULT NULL,
  `FT_DES` varchar(2000) DEFAULT NULL,
  PRIMARY KEY (`FT_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of foods_type
-- ----------------------------
INSERT INTO `foods_type` VALUES ('da0ac564-a27b-4735-9f9d-4c455b29f272', '中餐', null);
INSERT INTO `foods_type` VALUES ('99350f6a-8adb-4ffb-903d-c330f86c63b5', '甜点', null);
INSERT INTO `foods_type` VALUES ('464281ab-8819-4b41-9ea3-5708692f66e0', '日韩料理', null);

-- ----------------------------
-- Table structure for food_store
-- ----------------------------
DROP TABLE IF EXISTS `food_store`;
CREATE TABLE `food_store` (
  `FS_ID` varchar(45) NOT NULL,
  `AR_ID` varchar(45) DEFAULT NULL,
  `FS_NAME` varchar(50) DEFAULT NULL,
  `FS_LOCAL` varchar(100) DEFAULT NULL,
  `FS_TEL` varchar(15) DEFAULT NULL,
  `FS_PIC` varchar(255) DEFAULT NULL,
  `FS_SERVICE_TIME` varchar(50) DEFAULT NULL,
  `FS_INDEX` int(11) DEFAULT NULL,
  `FS_SCORE` int(11) DEFAULT NULL,
  `FS_DES` varchar(2000) DEFAULT NULL,
  `FS_HISTORY` varchar(1000) DEFAULT NULL,
  `FS_WAY` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`FS_ID`),
  KEY `FK_Reference_11` (`AR_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of food_store
-- ----------------------------
INSERT INTO `food_store` VALUES ('bee3bd4a-6ce1-4d9d-b901-f27a5015ab52', 'c6383a18-0586-464b-9cac-8b5c6dffc406', '外婆家', '陕西省西安市雁塔区丈八北路88号', '029-88888888', 'wpjnewlogo.jpg', '09:00~22:00', '1', '4', '仅售169元！价值289元的4-5人餐，提供免费WiFi。', '***于2005年3月28日开业，立于西安市碑林区***于2005年3月28日开业，立于西安市碑林区***于2005年3月28日开业，立于西安市碑林区***于2005年3月28日开业，立于西安市碑林区***', '300路、115路、14路、800路到西辛庄站下车往东100米');
INSERT INTO `food_store` VALUES ('3a1552dc-eeb7-42b2-bbd6-73d5bae7e3bf', 'c6383a18-0586-464b-9cac-8b5c6dffc406', '魏家凉皮', '陕西省西安市雁塔区丈八北路90号', '029-88888888', 'weijia.jpg', null, '1', '5', '仅售169元！价值289元的4-5人餐，提供免费WiFi。', null, null);
INSERT INTO `food_store` VALUES ('8df4b3b8-e17d-40ba-8b60-df5df15fdfa0', 'c6383a18-0586-464b-9cac-8b5c6dffc406', '外婆家二店', '陕西省西安市雁塔区丈八北路125号', '029-88888888', 'wpjnewlogo.jpg', null, '1', '5', '仅售169元！价值289元的4-5人餐，提供免费WiFi。', null, null);
INSERT INTO `food_store` VALUES ('10b6eda9-b81b-44dd-a0e7-8062253b53bf', 'c6383a18-0586-464b-9cac-8b5c6dffc406', '魏家凉皮二店', '陕西省西安市雁塔区丈八北路52号', '029-88888888', 'weijia.jpg', null, '1', '5', '仅售169元！价值289元的4-5人餐，提供免费WiFi。', null, null);
INSERT INTO `food_store` VALUES ('d9799314-f903-4b5f-8498-60669b2b8d33', 'c6383a18-0586-464b-9cac-8b5c6dffc406', '外婆家三店', '陕西省西安市雁塔区丈八北路40号', '029-88888888', 'wpjnewlogo.jpg', null, '1', '5', '仅售169元！价值289元的4-5人餐，提供免费WiFi。', null, null);

-- ----------------------------
-- Table structure for order_foods
-- ----------------------------
DROP TABLE IF EXISTS `order_foods`;
CREATE TABLE `order_foods` (
  `OFD_ID` varchar(45) NOT NULL,
  `OF_ID` varchar(45) DEFAULT NULL,
  `F_ID` varchar(45) DEFAULT NULL,
  `OFD_CREATE_TIME` datetime DEFAULT NULL,
  PRIMARY KEY (`OFD_ID`),
  KEY `FK_Reference_12` (`F_ID`),
  KEY `FK_Reference_6` (`OF_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of order_foods
-- ----------------------------
INSERT INTO `order_foods` VALUES ('2cbf8ede-3d85-459b-9c06-612cf8f4e245', 'b05ae41b7dd8', 'c71e0244-2bff-46e6-82ff-12b7877cee37', '2017-05-04 15:20:28');

-- ----------------------------
-- Table structure for order_form
-- ----------------------------
DROP TABLE IF EXISTS `order_form`;
CREATE TABLE `order_form` (
  `OF_ID` varchar(45) NOT NULL,
  `C_ID` varchar(45) DEFAULT NULL,
  `OF_SERIAL_NUMBER` varchar(45) DEFAULT NULL,
  `C_NAME` varchar(20) DEFAULT NULL,
  `OF_MONEY` double DEFAULT NULL,
  `OF_CREATE_TIME` datetime DEFAULT NULL,
  `OF_STATE` int(11) DEFAULT NULL,
  PRIMARY KEY (`OF_ID`),
  KEY `FK_Reference_5` (`C_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of order_form
-- ----------------------------
INSERT INTO `order_form` VALUES ('34c0b4ce-9cec-4c69-9268-b05ae41b7dd8', '6f4b9fee-c673-4b99-9e80-7f8b0017f7a7', '201705040900', '张三', '20', '2017-05-04 15:22:22', '1');
INSERT INTO `order_form` VALUES ('c1a66b96-7c33-4f52-a5c3-fee506eadcdd', '6f4b9fee-c673-4b99-9e80-7f8b0017f7a7', '201705040911', '张三', '20', '2017-05-09 08:41:17', '0');
INSERT INTO `order_form` VALUES ('70bed9fc-f000-4628-bd8d-4a36260aa864', '591abc5465f3c', '201705040912', 'root', '25', '2017-05-17 09:37:48', '0');
SET FOREIGN_KEY_CHECKS=1;
