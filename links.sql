/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : bactaynguyen

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2021-12-14 07:21:41
*/

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for links
-- ----------------------------
DROP TABLE IF EXISTS `links`;
CREATE TABLE `links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of links
-- ----------------------------
INSERT INTO `links` VALUES ('2', 'Cổng thông tin Tổng cục DTNN', 'http://www.dtnn', '2021-12-13 13:22:15', '2021-12-13 13:22:15');
INSERT INTO `links` VALUES ('3', 'Edoctc - Quản lý văn bản điều hành', 'https://edoctc.cdtqg.vn/', '2021-12-13 13:22:51', '2021-12-13 13:22:51');
INSERT INTO `links` VALUES ('4', 'Email công vụ', 'https://mail.gdsr.gov.vn', '2021-12-13 13:23:14', '2021-12-13 13:23:14');
INSERT INTO `links` VALUES ('5', 'Email tỉnh Gia Lai', 'https://mail.gialai.gov.vn', '2021-12-13 13:23:37', '2021-12-13 13:23:37');
INSERT INTO `links` VALUES ('6', 'Kế toán nội bộ', 'http://ktnb.cdtqg.vn:8020/', '2021-12-13 13:24:01', '2021-12-13 13:24:01');
INSERT INTO `links` VALUES ('7', 'Dịch vụ công trực tuyến', 'https://dvc.vst.mof.gov.vn', '2021-12-13 13:25:43', '2021-12-13 13:25:43');
INSERT INTO `links` VALUES ('8', 'Quản lý vật tư hàng hóa', 'http://10.160.0.24/VatTuHangHoa/WebUI/HT_DangNhap.aspx?notaccess=', '2021-12-13 13:26:22', '2021-12-13 13:26:22');
INSERT INTO `links` VALUES ('9', 'Quản lý mạng lưới kho', 'http://10.160.0.24/MLK/WebUI/HT_DangNhap.aspx', '2021-12-13 13:26:52', '2021-12-13 13:26:52');
INSERT INTO `links` VALUES ('10', 'Hệ thống thu thập thông tin báo cáo', 'https://ttbc.cdtqg.vn/thuthapdulieu/user/login', '2021-12-13 13:27:39', '2021-12-13 13:27:39');
INSERT INTO `links` VALUES ('11', 'Hệ thống khai thác dữ liệu thông tin báo cáo', 'https://10.160.0.68:9503/analytics/saw.dll?bieehome', '2021-12-13 13:28:25', '2021-12-13 13:28:25');
INSERT INTO `links` VALUES ('12', 'Thi đua khen thưởng', 'https://tdkt.mof.gov.vn', '2021-12-13 13:28:45', '2021-12-13 13:28:45');
INSERT INTO `links` VALUES ('13', 'Quản lý cán bộ bộ tài chính', 'http://qlcb.cdtqg.vn/Login.aspx?ReturnUrl=/', '2021-12-13 13:29:23', '2021-12-13 13:29:23');
INSERT INTO `links` VALUES ('14', 'Thuế điện tử', 'https://thuedientu.gdt.gov.vn/etaxnnt/Request?&dse_sessionId=HMyusBu90VRyKGUAhz2log_&dse_applicationId=-1&dse_pageId=2&dse_operationName=corpIndexProc&dse_errorPage=error_page.jsp&dse_processorState=i', '2021-12-13 13:29:52', '2021-12-13 13:29:52');
