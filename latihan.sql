/*
 Navicat Premium Data Transfer

 Source Server         : Mysql Local
 Source Server Type    : MySQL
 Source Server Version : 80407
 Source Host           : localhost:3306
 Source Schema         : latihan

 Target Server Type    : MySQL
 Target Server Version : 80407
 File Encoding         : 65001

 Date: 02/04/2026 11:04:38
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for jpb_area
-- ----------------------------
DROP TABLE IF EXISTS `jpb_area`;
CREATE TABLE `jpb_area`  (
  `id` smallint NOT NULL AUTO_INCREMENT,
  `area_name` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `area_code` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_auto_ro
-- ----------------------------
DROP TABLE IF EXISTS `jpb_auto_ro`;
CREATE TABLE `jpb_auto_ro`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `id_member` bigint NOT NULL,
  `id_source` bigint NOT NULL,
  `source` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NULL DEFAULT NULL,
  `nominal` double NOT NULL,
  `percent` tinyint NOT NULL COMMENT 'IN, OUT',
  `amount` double NOT NULL,
  `status` tinyint(1) NOT NULL,
  `description` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NULL,
  `datecreated` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `id_member`(`id_member`, `id_source`, `source`) USING BTREE,
  INDEX `type`(`percent`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 286 CHARACTER SET = utf8mb3 COLLATE = utf8mb3_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_auto_ro_out
-- ----------------------------
DROP TABLE IF EXISTS `jpb_auto_ro_out`;
CREATE TABLE `jpb_auto_ro_out`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `id_member` bigint NOT NULL,
  `id_source` bigint NOT NULL,
  `source` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'bonus, topup, shop, withdraw, transfer',
  `amount` int NOT NULL,
  `status` int NOT NULL COMMENT '1 = active, 0 = inactive',
  `description` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `datecreated` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `routunique`(`id_member`, `id_source`, `source`) USING BTREE,
  INDEX `id_member`(`id_member`) USING BTREE,
  INDEX `id_source`(`id_source`) USING BTREE,
  INDEX `source`(`source`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb3 COLLATE = utf8mb3_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_banks
-- ----------------------------
DROP TABLE IF EXISTS `jpb_banks`;
CREATE TABLE `jpb_banks`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kode` varchar(3) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `type` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT 'bank',
  `flipcode` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `espaycode` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `linkitacode` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `logo` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id`(`id`) USING BTREE,
  INDEX `kode`(`kode`) USING BTREE,
  INDEX `flipcode`(`flipcode`) USING BTREE,
  INDEX `espaycode`(`espaycode`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 59 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci COMMENT = 'Kode dan Nama Bank' ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_bonus
-- ----------------------------
DROP TABLE IF EXISTS `jpb_bonus`;
CREATE TABLE `jpb_bonus`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `id_bonus` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_member` bigint NOT NULL,
  `type` int NOT NULL COMMENT '1=Sponsor,2=Pairing',
  `desc` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `status` int NOT NULL,
  `amount` double NOT NULL,
  `tax` double NOT NULL,
  `amount_tax` double NOT NULL,
  `datecreated` datetime NOT NULL,
  `datemodified` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id_member`(`id_member`) USING BTREE,
  INDEX `type`(`type`) USING BTREE,
  INDEX `amount`(`amount`) USING BTREE,
  INDEX `id_bonus`(`id_bonus`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1694 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_bonus_generation_refs
-- ----------------------------
DROP TABLE IF EXISTS `jpb_bonus_generation_refs`;
CREATE TABLE `jpb_bonus_generation_refs`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `id_bonus` bigint NOT NULL,
  `id_member` bigint NOT NULL,
  `id_downline` bigint NOT NULL,
  `gen` tinyint NOT NULL COMMENT 'bonus, topup, shop, withdraw, transfer',
  `type` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NULL DEFAULT NULL,
  `omzet` int NOT NULL,
  `percentage` tinyint NOT NULL COMMENT 'IN, OUT',
  `amount` int NOT NULL,
  `year` smallint NOT NULL,
  `month` tinyint NOT NULL,
  `date` date NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `description` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NULL,
  `dateomzet` datetime NULL DEFAULT NULL,
  `datecreated` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id_member`(`id_member`) USING BTREE,
  INDEX `id_bonus`(`id_bonus`) USING BTREE,
  INDEX `year`(`year`) USING BTREE,
  INDEX `month`(`month`) USING BTREE,
  INDEX `date`(`date`) USING BTREE,
  INDEX `dateomzet`(`dateomzet`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 460 CHARACTER SET = utf8mb3 COLLATE = utf8mb3_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_bonus_level_refs
-- ----------------------------
DROP TABLE IF EXISTS `jpb_bonus_level_refs`;
CREATE TABLE `jpb_bonus_level_refs`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `id_bonus` bigint NOT NULL,
  `id_member` bigint NOT NULL,
  `id_downline` bigint NOT NULL,
  `level` smallint NOT NULL COMMENT 'bonus, topup, shop, withdraw, transfer',
  `level_downline` smallint NOT NULL,
  `omzet` int NOT NULL,
  `percentage` tinyint NOT NULL COMMENT 'IN, OUT',
  `amount` int NOT NULL,
  `year` smallint NOT NULL,
  `month` tinyint NOT NULL,
  `date` date NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `description` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NULL,
  `dateomzet` datetime NULL DEFAULT NULL,
  `datecreated` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id_member`(`id_member`) USING BTREE,
  INDEX `id_bonus`(`id_bonus`) USING BTREE,
  INDEX `year`(`year`) USING BTREE,
  INDEX `month`(`month`) USING BTREE,
  INDEX `date`(`date`) USING BTREE,
  INDEX `dateomzet`(`dateomzet`) USING BTREE,
  INDEX `level`(`level`) USING BTREE,
  INDEX `level_downline`(`level_downline`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1054 CHARACTER SET = utf8mb3 COLLATE = utf8mb3_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_bonus_matching_refs
-- ----------------------------
DROP TABLE IF EXISTS `jpb_bonus_matching_refs`;
CREATE TABLE `jpb_bonus_matching_refs`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `id_bonus_pairing` bigint NOT NULL,
  `id_bonus_matching` bigint NOT NULL,
  `id_member` bigint NOT NULL,
  `id_downline` bigint NOT NULL,
  `gen` tinyint NOT NULL COMMENT 'bonus, topup, shop, withdraw, transfer',
  `percentage` tinyint NOT NULL COMMENT 'IN, OUT',
  `bonus` int NOT NULL,
  `amount` int NOT NULL,
  `status` tinyint(1) NOT NULL,
  `description` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NULL,
  `datecreated` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id_bonus_pairing`(`id_bonus_pairing`) USING BTREE,
  INDEX `id_bonus_matching`(`id_bonus_matching`) USING BTREE,
  INDEX `id_member`(`id_member`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb3 COLLATE = utf8mb3_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_cart
-- ----------------------------
DROP TABLE IF EXISTS `jpb_cart`;
CREATE TABLE `jpb_cart`  (
  `id` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `cart_code` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_member` bigint NOT NULL,
  `type` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `grouping` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `grouping_id` int NOT NULL,
  `product_id` int NOT NULL,
  `package_id` int NOT NULL,
  `varian_id` int NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `weight` double NULL DEFAULT NULL,
  `bv` double NOT NULL,
  `price` double NULL DEFAULT NULL,
  `qty` int NULL DEFAULT NULL,
  `subtotal` double NULL DEFAULT NULL,
  `total_item` int NOT NULL,
  `items` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `status` tinyint NOT NULL DEFAULT 1,
  `datecreated` datetime NOT NULL,
  `datemodified` datetime NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `cart_code`(`cart_code`) USING BTREE,
  INDEX `cart_member`(`id_member`) USING BTREE,
  INDEX `cart_group`(`grouping`) USING BTREE,
  INDEX `cart_groupid`(`grouping_id`) USING BTREE,
  INDEX `cart_product`(`product_id`) USING BTREE,
  INDEX `cart_package`(`package_id`) USING BTREE,
  INDEX `cart_varian`(`varian_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_country
-- ----------------------------
DROP TABLE IF EXISTS `jpb_country`;
CREATE TABLE `jpb_country`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `iso` char(2) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `name` varchar(80) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nicename` varchar(80) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `iso3` char(3) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `numcode` smallint NULL DEFAULT NULL,
  `phonecode` int NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `iso3`(`iso3`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 239 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_district
-- ----------------------------
DROP TABLE IF EXISTS `jpb_district`;
CREATE TABLE `jpb_district`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `province_id` smallint NOT NULL,
  `district_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `district_type` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `district_code` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `postal_code` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `id_express` int NOT NULL,
  `lion` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `idx_province_id`(`province_id`) USING BTREE,
  INDEX `idx_id_lion`(`lion`(768)) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 514 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_eproduct
-- ----------------------------
DROP TABLE IF EXISTS `jpb_eproduct`;
CREATE TABLE `jpb_eproduct`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `id_member` bigint NOT NULL,
  `id_source` bigint NOT NULL,
  `source` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'bonus, topup, shop, withdraw, transfer',
  `category` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT 'product' COMMENT 'product, shipping',
  `amount` double NOT NULL,
  `type` varchar(5) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'IN, OUT',
  `status` int NOT NULL COMMENT '1 = active, 0 = inactive',
  `description` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `datecreated` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id_member`(`id_member`) USING BTREE,
  INDEX `source`(`source`) USING BTREE,
  INDEX `type`(`type`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb3 COLLATE = utf8mb3_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_ewallet
-- ----------------------------
DROP TABLE IF EXISTS `jpb_ewallet`;
CREATE TABLE `jpb_ewallet`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `id_member` bigint NOT NULL,
  `id_source` bigint NOT NULL,
  `source` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'bonus, topup, shop, withdraw, transfer',
  `category` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT 'commission' COMMENT 'commission, profit',
  `nominal` int NOT NULL,
  `percent` tinyint NOT NULL,
  `autoro` int NOT NULL,
  `tax` int NOT NULL,
  `amount` int NOT NULL,
  `type` varchar(5) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'IN, OUT',
  `status` int NOT NULL COMMENT '1 = active, 0 = inactive',
  `description` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `datecreated` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `walletunique`(`id_member`, `id_source`, `source`) USING BTREE,
  INDEX `id_member`(`id_member`) USING BTREE,
  INDEX `source`(`source`) USING BTREE,
  INDEX `type`(`type`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1771 CHARACTER SET = utf8mb3 COLLATE = utf8mb3_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_ewallet_transfer
-- ----------------------------
DROP TABLE IF EXISTS `jpb_ewallet_transfer`;
CREATE TABLE `jpb_ewallet_transfer`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `id_transfer` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_member_sender` bigint NOT NULL,
  `username_sender` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_member` bigint NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nominal` int NOT NULL,
  `nominal_receipt` int NOT NULL,
  `admin_fund` int NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `datecreated` datetime NOT NULL,
  `datemodified` datetime NOT NULL,
  `created_by` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `ewt_id_transfer`(`id_transfer`) USING BTREE,
  INDEX `ewt_id_member_sender`(`id_member_sender`) USING BTREE,
  INDEX `ewt_id_member`(`id_member`) USING BTREE,
  INDEX `ewt_status`(`status`) USING BTREE,
  INDEX `ewt_date`(`datecreated`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_keys
-- ----------------------------
DROP TABLE IF EXISTS `jpb_keys`;
CREATE TABLE `jpb_keys`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `id_member` bigint NOT NULL,
  `name` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `key` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `level` tinyint NOT NULL DEFAULT 1,
  `ignore_limits` tinyint NOT NULL,
  `is_private_key` tinyint(1) NOT NULL,
  `ip_addresses` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `datecreated` datetime NOT NULL,
  `datemodified` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_log
-- ----------------------------
DROP TABLE IF EXISTS `jpb_log`;
CREATE TABLE `jpb_log`  (
  `log_id` bigint NOT NULL AUTO_INCREMENT,
  `log_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `log_time` datetime NOT NULL,
  `log_status` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `log_desc` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`log_id`) USING BTREE,
  INDEX `log_name`(`log_name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1669 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_log_action
-- ----------------------------
DROP TABLE IF EXISTS `jpb_log_action`;
CREATE TABLE `jpb_log_action`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `username` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `ip` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `user_agent` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `platform` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `desc` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `assum` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `assum_staff` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `datetime` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `log_act_name`(`name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 684 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_log_api
-- ----------------------------
DROP TABLE IF EXISTS `jpb_log_api`;
CREATE TABLE `jpb_log_api`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `username` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `ip` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `user_agent` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `platform` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `desc` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `token` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `datetime` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `log_act_name`(`name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 34 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_log_cron
-- ----------------------------
DROP TABLE IF EXISTS `jpb_log_cron`;
CREATE TABLE `jpb_log_cron`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `cron_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `log_desc` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `log_name`(`cron_name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 269 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_log_notif
-- ----------------------------
DROP TABLE IF EXISTS `jpb_log_notif`;
CREATE TABLE `jpb_log_notif`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `category` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `title` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `send` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `message` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `status` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` bigint NULL DEFAULT NULL,
  `user_2nd` bigint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_member
-- ----------------------------
DROP TABLE IF EXISTS `jpb_member`;
CREATE TABLE `jpb_member`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `username` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `package` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sponsor` bigint NOT NULL COMMENT 'Sponsor Recruitement',
  `sponsor_uid` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `parent` bigint NOT NULL COMMENT 'Parent of Tree',
  `parent_uid` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `position` varchar(15) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '' COMMENT 'root for admin',
  `group` int NOT NULL,
  `gen` int NOT NULL,
  `level` int NOT NULL,
  `tree_sponsor` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tree` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `phone` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password_pin` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  `password_trx` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `type` int NOT NULL DEFAULT 1 COMMENT '1=Administrator,2=Member',
  `status` int NOT NULL DEFAULT 0 COMMENT '0=Not Active,1=Active,2=Banned,3=Deleted',
  `birthdate` date NULL DEFAULT NULL,
  `gender` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `idcard` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `npwp` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `country` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `province` smallint NOT NULL,
  `district` smallint NOT NULL,
  `subdistrict` smallint NULL DEFAULT NULL,
  `village` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `address` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `bank` int NOT NULL,
  `bill` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `bill_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `photo` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `idcard_img` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `qrcode_img` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `total_omzet` double NOT NULL,
  `package_omzet` double NOT NULL,
  `rank` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `referral_code` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `as_stockist` tinyint(1) NOT NULL COMMENT '1=ms, 2=stockist, 3=master',
  `as_stockist_pusat` tinyint(1) NOT NULL,
  `stockist_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `stockist_province` smallint NULL DEFAULT NULL,
  `stockist_district` smallint NULL DEFAULT NULL,
  `stockist_subdistrict` smallint NULL DEFAULT NULL,
  `stockist_village` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `stockist_address` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `to_stockist` bigint NOT NULL,
  `shop_invoice` smallint NOT NULL,
  `shop_uniquecode` smallint NOT NULL,
  `wd_status` tinyint NOT NULL DEFAULT 1 COMMENT '0=\"Otomatis Sistem\"; 1=\"Manual WD\"',
  `wd_min` int NOT NULL DEFAULT 0,
  `agree_ethic` tinyint(1) NOT NULL DEFAULT 0,
  `change_password` smallint NOT NULL,
  `last_login` datetime NULL DEFAULT NULL,
  `member_hu` bigint NOT NULL,
  `is_ro` int NOT NULL,
  `datecreated` datetime NOT NULL,
  `datemodified` datetime NOT NULL,
  `dateupgrade` datetime NULL DEFAULT NULL,
  `datestockist` datetime NULL DEFAULT NULL,
  `datero` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `memberunique`(`username`) USING BTREE,
  UNIQUE INDEX `parentunique`(`parent`, `position`) USING BTREE,
  INDEX `memberuid`(`username`) USING BTREE,
  INDEX `phone`(`phone`) USING BTREE,
  INDEX `sponsor`(`sponsor`) USING BTREE,
  INDEX `parent`(`parent`) USING BTREE,
  INDEX `type`(`type`) USING BTREE,
  INDEX `email`(`email`) USING BTREE,
  INDEX `status`(`status`) USING BTREE,
  INDEX `datecreated`(`datecreated`) USING BTREE,
  INDEX `rank`(`rank`) USING BTREE,
  INDEX `member_hu`(`member_hu`) USING BTREE,
  INDEX `is_ro`(`is_ro`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 281 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_member_confirm
-- ----------------------------
DROP TABLE IF EXISTS `jpb_member_confirm`;
CREATE TABLE `jpb_member_confirm`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `id_member` bigint NOT NULL,
  `member` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_sponsor` bigint NOT NULL,
  `sponsor` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_upline` bigint NOT NULL,
  `upline` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_downline` bigint NOT NULL,
  `downline` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `package` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `package_count` tinyint NOT NULL DEFAULT 1,
  `position` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` int NOT NULL COMMENT '0=Review,1=Confirmed',
  `access` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL COMMENT 'admin, pin',
  `id_shop_order` bigint NOT NULL,
  `referral_code` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `bv` double NOT NULL,
  `nominal` double NOT NULL,
  `shipping` double NOT NULL,
  `uniquecode` smallint NOT NULL,
  `total_payment` double NOT NULL,
  `datecreated` datetime NOT NULL,
  `datemodified` datetime NOT NULL,
  `dateconfirmed` datetime NULL DEFAULT NULL,
  `confirm_by` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 281 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_member_omzet
-- ----------------------------
DROP TABLE IF EXISTS `jpb_member_omzet`;
CREATE TABLE `jpb_member_omzet`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `id_member` bigint NOT NULL,
  `pack_omzet` double NOT NULL,
  `bv` double NOT NULL,
  `sponsor` double NOT NULL COMMENT 'Sponsor Point',
  `pairing` double NOT NULL COMMENT 'Pairing Point',
  `reward` double NOT NULL COMMENT 'Reward Point',
  `ro` double NOT NULL,
  `omzet` double NOT NULL,
  `price` double NOT NULL,
  `amount` double NOT NULL,
  `status` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `desc` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `date` date NOT NULL,
  `datecreated` datetime NOT NULL,
  `datemodified` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `mo_id_member`(`id_member`) USING BTREE,
  INDEX `mo_status`(`status`) USING BTREE,
  INDEX `mo_date`(`date`) USING BTREE,
  INDEX `mo_datecreated`(`datecreated`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 72 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_member_point
-- ----------------------------
DROP TABLE IF EXISTS `jpb_member_point`;
CREATE TABLE `jpb_member_point`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `id_member` bigint NOT NULL,
  `type` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `period` smallint NOT NULL DEFAULT 0,
  `period_start` date NULL DEFAULT NULL,
  `period_end` date NULL DEFAULT NULL,
  `point_left` double NOT NULL,
  `point_right` double NOT NULL,
  `point_qualified` double NOT NULL,
  `status` int NOT NULL DEFAULT 1,
  `datecreated` datetime NOT NULL,
  `datemodified` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `MP.unique`(`id_member`, `type`, `period`) USING BTREE,
  INDEX `MP_id_member`(`id_member`) USING BTREE,
  INDEX `MP.type`(`type`) USING BTREE,
  INDEX `MP.period`(`period`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 132 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_member_report
-- ----------------------------
DROP TABLE IF EXISTS `jpb_member_report`;
CREATE TABLE `jpb_member_report`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `id_member` bigint NOT NULL,
  `pairing_left` double NOT NULL,
  `pairing_right` double NOT NULL,
  `pairing_qualified` double NOT NULL,
  `reward_left` double NOT NULL,
  `reward_right` double NOT NULL,
  `total_omzet` double NOT NULL,
  `total_ro_omzet` double NOT NULL,
  `total_ro_point` double NOT NULL,
  `last_ro_omzet` double NOT NULL,
  `last_ro_point` double NOT NULL,
  `last_ro_date` datetime NULL DEFAULT NULL,
  `datecreated` datetime NOT NULL,
  `datemodified` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `MR.unique`(`id_member`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_news
-- ----------------------------
DROP TABLE IF EXISTS `jpb_news`;
CREATE TABLE `jpb_news`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(200) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NULL DEFAULT NULL,
  `content` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NULL,
  `mime_type` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NULL DEFAULT NULL,
  `url` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NULL,
  `status` enum('publish','draft','delete') CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL DEFAULT 'publish',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `slug`(`slug`) USING BTREE,
  INDEX `title`(`title`) USING BTREE,
  INDEX `status`(`status`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb3 COLLATE = utf8mb3_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_notification
-- ----------------------------
DROP TABLE IF EXISTS `jpb_notification`;
CREATE TABLE `jpb_notification`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `title` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `content` longtext CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` int NOT NULL,
  `type` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  `datecreated` datetime NOT NULL,
  `datemodified` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `slug`(`slug`) USING BTREE,
  INDEX `status`(`status`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 28 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_options
-- ----------------------------
DROP TABLE IF EXISTS `jpb_options`;
CREATE TABLE `jpb_options`  (
  `id_option` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `value` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  PRIMARY KEY (`id_option`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 112 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_otp
-- ----------------------------
DROP TABLE IF EXISTS `jpb_otp`;
CREATE TABLE `jpb_otp`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `id_member` bigint NOT NULL,
  `email` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `type` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `ip_address` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `platform` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `browser` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `agent` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `user_agent` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `otp` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `expiration` int UNSIGNED NULL DEFAULT NULL,
  `status` tinyint NOT NULL,
  `datecreated` datetime NULL DEFAULT NULL,
  `datemodified` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `user_idx`(`id_member`, `email`, `type`) USING BTREE,
  INDEX `last_activity_idx`(`expiration`) USING BTREE,
  INDEX `type_otp`(`type`) USING BTREE,
  INDEX `otp`(`otp`) USING BTREE,
  INDEX `email`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_package
-- ----------------------------
DROP TABLE IF EXISTS `jpb_package`;
CREATE TABLE `jpb_package`  (
  `package` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `package_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `package_index` tinyint NOT NULL,
  `package_count` tinyint NOT NULL DEFAULT 1,
  `bv` int NOT NULL,
  `nominal` int NOT NULL,
  `sponsor_percent` tinyint NOT NULL,
  `passup_percent` tinyint NOT NULL,
  `pairing_percent` tinyint NOT NULL,
  `pairing_nominal` int NOT NULL COMMENT 'Rp',
  `pairing_max` int NOT NULL COMMENT 'BV',
  `pairing_point` smallint NOT NULL,
  `reward_point` double NOT NULL,
  `description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `is_register` tinyint(1) NOT NULL,
  `is_order` tinyint NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `datecreated` datetime NOT NULL,
  `datemodified` datetime NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`package`) USING BTREE,
  UNIQUE INDEX `package`(`package`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_pairing_point
-- ----------------------------
DROP TABLE IF EXISTS `jpb_pairing_point`;
CREATE TABLE `jpb_pairing_point`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `id_member` bigint NOT NULL,
  `package` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `type` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `bv` int NOT NULL,
  `point` double NOT NULL,
  `status` int NOT NULL DEFAULT 1,
  `datecreated` datetime NOT NULL,
  `datemodified` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `PP_id_member`(`id_member`) USING BTREE,
  INDEX `PP.type`(`type`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 72 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_pairing_qualified
-- ----------------------------
DROP TABLE IF EXISTS `jpb_pairing_qualified`;
CREATE TABLE `jpb_pairing_qualified`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `id_member` bigint NOT NULL,
  `left` double NOT NULL,
  `right` double NOT NULL,
  `qualified` double NOT NULL,
  `total_point` double NOT NULL,
  `carry_left` double NOT NULL,
  `carry_right` double NOT NULL,
  `kurs` double NOT NULL,
  `status` tinyint NOT NULL DEFAULT 1,
  `datecreated` datetime NOT NULL,
  `datemodified` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `PQ_id_member`(`id_member`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 108 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_pin
-- ----------------------------
DROP TABLE IF EXISTS `jpb_pin`;
CREATE TABLE `jpb_pin`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `id_order_pin` bigint NOT NULL,
  `id_pin` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_member` bigint NOT NULL,
  `id_member_owner` bigint NOT NULL,
  `id_member_register` bigint NOT NULL,
  `id_member_registered` bigint NOT NULL,
  `product` int NOT NULL,
  `varian` int NOT NULL DEFAULT 0,
  `type` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `bv` int NOT NULL,
  `amount` bigint NOT NULL,
  `status` int NOT NULL COMMENT '0=Pending,1=Active,2=Used',
  `used` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `datecreated` datetime NOT NULL,
  `datemodified` datetime NOT NULL,
  `dateexpired` date NULL DEFAULT NULL,
  `dateused` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `pin_id_member`(`id_member`) USING BTREE,
  INDEX `pin_id_member_register`(`id_member_register`) USING BTREE,
  INDEX `pin_id_member_registered`(`id_member_registered`) USING BTREE,
  INDEX `pin_status`(`status`) USING BTREE,
  INDEX `pin_product`(`product`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2200 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_pin_transfer
-- ----------------------------
DROP TABLE IF EXISTS `jpb_pin_transfer`;
CREATE TABLE `jpb_pin_transfer`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `id_member_sender` bigint NOT NULL,
  `username_sender` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_member` bigint NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_pin` bigint NOT NULL,
  `product` int NOT NULL,
  `varian` int NOT NULL DEFAULT 0,
  `product_package` int NOT NULL DEFAULT 0,
  `amount` int NOT NULL,
  `price_member` int NOT NULL,
  `type` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT 'transfer_pin',
  `description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `datecreated` datetime NOT NULL,
  `datemodified` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `pt_id_member_sender`(`id_member_sender`) USING BTREE,
  INDEX `pt_id_member`(`id_member`) USING BTREE,
  INDEX `pt_id_pin`(`id_pin`) USING BTREE,
  INDEX `pt_product`(`product`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_product
-- ----------------------------
DROP TABLE IF EXISTS `jpb_product`;
CREATE TABLE `jpb_product`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `sku` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `name` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `type` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '' COMMENT 'All=Reg+RO',
  `varian` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `hu` tinyint NOT NULL,
  `bv` int NOT NULL,
  `price_hpp` int NOT NULL,
  `price` int NOT NULL,
  `price_member` int NOT NULL,
  `price_customer` int NOT NULL,
  `sponsor_point` double NOT NULL,
  `pairing_point` double NOT NULL,
  `reward_point` double NOT NULL,
  `stockist_point` double NOT NULL,
  `reward_budget` int NOT NULL,
  `weight` double NULL DEFAULT NULL COMMENT 'Weight = Gram',
  `stock` int NOT NULL,
  `description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `image` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `s3_upload` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `show_order` tinyint NULL DEFAULT 1,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_by` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `modified_by` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `datecreated` datetime NOT NULL,
  `datemodified` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `dateupdated` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `product_unique`(`name`, `slug`, `varian`) USING BTREE,
  INDEX `product_name`(`name`) USING BTREE,
  INDEX `porduct_slug`(`slug`) USING BTREE,
  INDEX `idx_type`(`type`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_product_area_fee
-- ----------------------------
DROP TABLE IF EXISTS `jpb_product_area_fee`;
CREATE TABLE `jpb_product_area_fee`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `source` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_source` int NOT NULL,
  `id_area` int NOT NULL,
  `fee` double NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `datecreated` datetime NOT NULL,
  `datemodified` datetime NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `paf_unique`(`source`, `id_source`, `id_area`) USING BTREE,
  INDEX `paf_source`(`source`) USING BTREE,
  INDEX `paf_id_source`(`id_source`) USING BTREE,
  INDEX `paf_id_area`(`id_area`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_product_package
-- ----------------------------
DROP TABLE IF EXISTS `jpb_product_package`;
CREATE TABLE `jpb_product_package`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `sku` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `name` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `type` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `hu` tinyint NOT NULL,
  `type_price` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `total_item` int NOT NULL,
  `total_qty` int NOT NULL,
  `total_amount` double NOT NULL DEFAULT 0,
  `bv` double NOT NULL,
  `price` double NOT NULL DEFAULT 0,
  `weight` double NULL DEFAULT NULL COMMENT 'Weight = Gram',
  `sponsor_point` double NOT NULL,
  `pairing_point` double NOT NULL,
  `stockist_point` double NOT NULL,
  `reward_point` double NOT NULL,
  `image` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `show_order` tinyint NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `datecreated` datetime NOT NULL,
  `datemodified` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `created_by` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `modified_by` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `pp_unique`(`name`, `slug`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_product_package_item
-- ----------------------------
DROP TABLE IF EXISTS `jpb_product_package_item`;
CREATE TABLE `jpb_product_package_item`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `id_package` int NOT NULL,
  `id_product` int NOT NULL,
  `id_varian` int NOT NULL,
  `qty` int NOT NULL DEFAULT 0,
  `datecreated` datetime NOT NULL,
  `datemodified` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `ppi_package`(`id_package`) USING BTREE,
  INDEX `ppi_product`(`id_product`) USING BTREE,
  INDEX `ppi_varian`(`id_varian`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_product_stock
-- ----------------------------
DROP TABLE IF EXISTS `jpb_product_stock`;
CREATE TABLE `jpb_product_stock`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_id` int NOT NULL,
  `qty` int NOT NULL,
  `price` double NOT NULL,
  `total` double NOT NULL,
  `supplier_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `datecreated` datetime NOT NULL,
  `datemodified` datetime NOT NULL,
  `created_by` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `modified_by` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_product_stock_in
-- ----------------------------
DROP TABLE IF EXISTS `jpb_product_stock_in`;
CREATE TABLE `jpb_product_stock_in`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `id_supplier` bigint NOT NULL,
  `id_warehouse` bigint NOT NULL,
  `id_source` bigint NOT NULL,
  `source` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'bonus, topup, shop, withdraw, transfer',
  `id_detail` bigint NOT NULL,
  `product` int NOT NULL,
  `varian` int NOT NULL,
  `qty` int NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '1 = active, 0 = inactive',
  `description` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `datecreated` datetime NOT NULL,
  `dateexpired` date NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `stockin`(`id_supplier`, `id_warehouse`, `id_source`, `source`, `product`, `varian`, `id_detail`) USING BTREE,
  INDEX `id_supplier`(`id_supplier`) USING BTREE,
  INDEX `id_warehouse`(`id_warehouse`) USING BTREE,
  INDEX `id_source`(`id_source`) USING BTREE,
  INDEX `source`(`source`) USING BTREE,
  INDEX `product`(`product`) USING BTREE,
  INDEX `status`(`status`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb3 COLLATE = utf8mb3_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_product_stock_opname
-- ----------------------------
DROP TABLE IF EXISTS `jpb_product_stock_opname`;
CREATE TABLE `jpb_product_stock_opname`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `ref_number` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `product_id` int NOT NULL,
  `varian_id` int NOT NULL,
  `recorded_qty` int NOT NULL,
  `actual_qty` int NOT NULL,
  `difference_qty` int NOT NULL,
  `price` double NOT NULL,
  `total` double NOT NULL,
  `type` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `memo` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `date_trans` date NOT NULL,
  `datecreated` datetime NOT NULL,
  `datemodified` datetime NOT NULL,
  `created_by` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `pso.ref_number`(`ref_number`) USING BTREE,
  INDEX `pso.product`(`product_id`) USING BTREE,
  INDEX `pso.date`(`datecreated`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_product_stock_out
-- ----------------------------
DROP TABLE IF EXISTS `jpb_product_stock_out`;
CREATE TABLE `jpb_product_stock_out`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `id_warehouse` bigint NOT NULL,
  `id_member` bigint NOT NULL,
  `id_source` bigint NOT NULL,
  `source` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'bonus, topup, shop, withdraw, transfer',
  `id_detail` bigint NOT NULL,
  `product` int NOT NULL,
  `varian` int NOT NULL,
  `qty` int NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '1 = active, 0 = inactive',
  `description` text CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `datecreated` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `stockout`(`id_member`, `id_source`, `source`, `product`, `varian`, `id_detail`, `id_warehouse`) USING BTREE,
  INDEX `id_source`(`id_source`) USING BTREE,
  INDEX `source`(`source`) USING BTREE,
  INDEX `product`(`product`) USING BTREE,
  INDEX `status`(`status`) USING BTREE,
  INDEX `id_member`(`id_member`) USING BTREE,
  INDEX `id_warehouse`(`id_warehouse`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 51 CHARACTER SET = utf8mb3 COLLATE = utf8mb3_general_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_product_stockist
-- ----------------------------
DROP TABLE IF EXISTS `jpb_product_stockist`;
CREATE TABLE `jpb_product_stockist`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_member` bigint NOT NULL,
  `id_source` bigint NOT NULL,
  `source` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'bonus, topup, shop, withdraw, transfer',
  `id_detail` bigint NOT NULL,
  `product` int NOT NULL,
  `varian` int NOT NULL,
  `qty` int NOT NULL,
  `price` double NOT NULL,
  `total` double NOT NULL,
  `form` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `type` varchar(5) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL COMMENT 'IN, OUT',
  `status` tinyint NOT NULL DEFAULT 1 COMMENT '1 = active, 0 = inactive',
  `description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `datecreated` datetime NOT NULL,
  `datemodified` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `pss_unique`(`id_member`, `id_source`, `source`, `id_detail`, `product`, `varian`, `type`, `status`) USING BTREE,
  INDEX `pss_id_member`(`id_member`) USING BTREE,
  INDEX `pss_id_source`(`id_source`) USING BTREE,
  INDEX `pss_source`(`source`) USING BTREE,
  INDEX `pss_product`(`product`) USING BTREE,
  INDEX `pss_varian`(`varian`) USING BTREE,
  INDEX `pss_type`(`type`) USING BTREE,
  INDEX `pss_status`(`status`) USING BTREE,
  INDEX `pss_datecreated`(`datecreated`) USING BTREE,
  INDEX `pss_detail`(`id_detail`) USING BTREE,
  INDEX `pss_form`(`form`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_product_stockist_stock_opname
-- ----------------------------
DROP TABLE IF EXISTS `jpb_product_stockist_stock_opname`;
CREATE TABLE `jpb_product_stockist_stock_opname`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `ref_number` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_member` bigint NOT NULL,
  `product_id` int NOT NULL,
  `varian_id` int NOT NULL,
  `recorded_qty` int NOT NULL,
  `actual_qty` int NOT NULL,
  `difference_qty` int NOT NULL,
  `qty` int NOT NULL,
  `price` double NOT NULL,
  `total` double NOT NULL,
  `type` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `memo` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `date_trans` date NOT NULL,
  `datecreated` datetime NOT NULL,
  `datemodified` datetime NOT NULL,
  `created_by` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `pso.ref_number`(`ref_number`) USING BTREE,
  INDEX `pso.id_member`(`id_member`) USING BTREE,
  INDEX `pso.product`(`product_id`) USING BTREE,
  INDEX `pso.varian`(`varian_id`) USING BTREE,
  INDEX `pso.date`(`datecreated`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_product_varian
-- ----------------------------
DROP TABLE IF EXISTS `jpb_product_varian`;
CREATE TABLE `jpb_product_varian`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `id_product` int NOT NULL,
  `name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `varian` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `bv` double NULL DEFAULT NULL,
  `price_hpp` double NOT NULL DEFAULT 0,
  `price` double NOT NULL DEFAULT 0,
  `weight` double NOT NULL DEFAULT 0,
  `image` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `datecreated` datetime NOT NULL,
  `datemodified` datetime NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `pp_unique`(`id_product`, `name`, `varian`) USING BTREE,
  INDEX `pp_product`(`id_product`) USING BTREE,
  INDEX `pp_name`(`name`) USING BTREE,
  INDEX `pp_varian`(`varian`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_province
-- ----------------------------
DROP TABLE IF EXISTS `jpb_province`;
CREATE TABLE `jpb_province`  (
  `id` smallint NOT NULL,
  `area_id` int NOT NULL,
  `province_name` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `province_code` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `id_express` int NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_purchase_order
-- ----------------------------
DROP TABLE IF EXISTS `jpb_purchase_order`;
CREATE TABLE `jpb_purchase_order`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `id_purchase_kledo` bigint NOT NULL,
  `id_purchase_delivery` bigint NOT NULL,
  `id_supplier_kledo` int NULL DEFAULT NULL,
  `invoice` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `id_supplier` int NOT NULL,
  `ref_number_order` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `ref_number_delivery` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `products` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `total_qty` int NOT NULL,
  `subtotal` int NOT NULL,
  `shipping` int NOT NULL,
  `unique` smallint NOT NULL,
  `pph` double NOT NULL,
  `ppn` double NOT NULL,
  `discount` int NOT NULL,
  `down_payment` int NOT NULL,
  `total_payment` int NULL DEFAULT NULL,
  `status` int NOT NULL COMMENT '0=Review,1=Confirmed',
  `memo` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `trans_date` date NULL DEFAULT NULL,
  `due_date` date NULL DEFAULT NULL,
  `delivery_date` date NULL DEFAULT NULL,
  `dateexpired` date NULL DEFAULT NULL,
  `datecreated` datetime NOT NULL,
  `datemodified` datetime NOT NULL,
  `dateconfirmed` datetime NULL DEFAULT NULL,
  `created_by` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `modified_by` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `po_status`(`status`) USING BTREE,
  INDEX `po_id_supplier`(`id_supplier`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_purchase_order_detail
-- ----------------------------
DROP TABLE IF EXISTS `jpb_purchase_order_detail`;
CREATE TABLE `jpb_purchase_order_detail`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `id_purchase_order` bigint NOT NULL,
  `id_supplier` int NOT NULL,
  `id_product_kledo` int NOT NULL,
  `id_varian` int NOT NULL,
  `product` int NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `varian` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `weight` int NOT NULL COMMENT 'Weight = Gram',
  `price` int NOT NULL,
  `price_cart` int NOT NULL,
  `qty` int NOT NULL,
  `discount` int NOT NULL,
  `pph` double NOT NULL,
  `ppn` double NOT NULL,
  `subtotal` int NOT NULL,
  `subtotal_omzet` int NOT NULL,
  `subtotal_weight` int NOT NULL,
  `description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `dateexpired` date NULL DEFAULT NULL,
  `datecreated` datetime NOT NULL,
  `datemodified` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `pod_product`(`product`) USING BTREE,
  INDEX `pod_id_supplier`(`id_supplier`) USING BTREE,
  INDEX `pod_id_purchase_order`(`id_purchase_order`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_rajaongkir
-- ----------------------------
DROP TABLE IF EXISTS `jpb_rajaongkir`;
CREATE TABLE `jpb_rajaongkir`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `province_id` int NOT NULL DEFAULT 0,
  `province_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `city_id` int NOT NULL DEFAULT 0,
  `city_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `district_id` int NOT NULL DEFAULT 0,
  `district_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_province` int NOT NULL DEFAULT 0,
  `id_district` int NOT NULL DEFAULT 0,
  `id_subdistrict` int NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `province_id`(`province_id`) USING BTREE,
  INDEX `city_id`(`city_id`) USING BTREE,
  INDEX `district_id`(`district_id`) USING BTREE,
  INDEX `id_province`(`id_province`) USING BTREE,
  INDEX `id_district`(`id_district`) USING BTREE,
  INDEX `id_subdistrict`(`id_subdistrict`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7126 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_ranks
-- ----------------------------
DROP TABLE IF EXISTS `jpb_ranks`;
CREATE TABLE `jpb_ranks`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `id_member` bigint NOT NULL,
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `rank` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `rank_index` tinyint NOT NULL,
  `downline` int NOT NULL,
  `point_left` double NOT NULL,
  `point_right` double NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `datecreated` datetime NOT NULL,
  `datemodified` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `rk_id_member`(`id_member`) USING BTREE,
  INDEX `rk_rank`(`rank`) USING BTREE,
  INDEX `rk_index`(`rank_index`) USING BTREE,
  INDEX `rk_status`(`status`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 34 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_reward
-- ----------------------------
DROP TABLE IF EXISTS `jpb_reward`;
CREATE TABLE `jpb_reward`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `id_member` bigint NOT NULL,
  `id_reward` int NOT NULL,
  `type` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `point_qualified` bigint NOT NULL,
  `point_left` bigint NOT NULL,
  `point_right` bigint NOT NULL,
  `rank` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `message` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nominal` double NOT NULL DEFAULT 0,
  `nominal_receipt` double NOT NULL,
  `admin_fund` double NOT NULL,
  `tax` double NOT NULL,
  `bank` int NOT NULL,
  `bank_code` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NULL DEFAULT '',
  `bill` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `bill_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `is_trip` tinyint NOT NULL,
  `claim` tinyint NOT NULL,
  `flip_id` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `status` int NOT NULL COMMENT '0=Pending,1=Confirmed',
  `inquiry_status` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `datecreated` datetime NOT NULL,
  `datemodified` datetime NOT NULL,
  `dateconfirmed` datetime NULL DEFAULT NULL,
  `dateclaimed` datetime NULL DEFAULT NULL,
  `confirm_by` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `id`(`id_member`, `id_reward`, `type`) USING BTREE,
  INDEX `R_id_member`(`id_member`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_reward_config
-- ----------------------------
DROP TABLE IF EXISTS `jpb_reward_config`;
CREATE TABLE `jpb_reward_config`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `type` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `reward` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  `nominal` bigint NOT NULL,
  `point` int NOT NULL,
  `packages` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `rank` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `message` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `start_date` date NULL DEFAULT NULL,
  `end_date` date NULL DEFAULT NULL,
  `is_lifetime` tinyint(1) NOT NULL DEFAULT 1,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `datecreated` datetime NOT NULL,
  `datemodified` datetime NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `unique_reward`(`type`, `reward`, `point`, `start_date`, `end_date`, `is_active`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_reward_point
-- ----------------------------
DROP TABLE IF EXISTS `jpb_reward_point`;
CREATE TABLE `jpb_reward_point`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `id_member` bigint NOT NULL,
  `package` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `type` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `bv` int NOT NULL,
  `point` double NOT NULL,
  `status` int NOT NULL DEFAULT 1,
  `datecreated` datetime NOT NULL,
  `datemodified` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `PP_id_member`(`id_member`) USING BTREE,
  INDEX `PP.type`(`type`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_ro
-- ----------------------------
DROP TABLE IF EXISTS `jpb_ro`;
CREATE TABLE `jpb_ro`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `invoice` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `id_activator` bigint NOT NULL,
  `id_member` bigint NOT NULL,
  `id_stockist` bigint NOT NULL,
  `id_shop_order` bigint NOT NULL,
  `position` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `type` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `pins` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `meta` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `status` tinyint NOT NULL,
  `point` double NOT NULL,
  `total_bv` double NOT NULL,
  `total_qty` int NOT NULL,
  `subtotal` double NOT NULL,
  `unique` smallint NOT NULL,
  `shipping` double NOT NULL,
  `shipping_discount` double NOT NULL,
  `discount` double NOT NULL,
  `voucher` double NOT NULL,
  `fee` double NOT NULL DEFAULT 0,
  `ppn` double NOT NULL,
  `autoro` double NOT NULL DEFAULT 0,
  `total_checkout` double NOT NULL DEFAULT 0,
  `total_payment` double NOT NULL,
  `total_omzet` double NOT NULL,
  `shipping_method` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `desc` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `datecreated` datetime NOT NULL,
  `datemodified` datetime NOT NULL,
  `dateconfirmed` datetime NULL DEFAULT NULL,
  `confirmed_by` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `modified_by` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `ro_invoice`(`invoice`) USING BTREE,
  INDEX `ro_id_member`(`id_member`) USING BTREE,
  INDEX `ro_id_activator`(`id_activator`) USING BTREE,
  INDEX `ro_id_stockist`(`id_stockist`) USING BTREE,
  INDEX `ro_id_shop_order`(`id_shop_order`) USING BTREE,
  INDEX `ro_type`(`type`) USING BTREE,
  INDEX `ro_status`(`status`) USING BTREE,
  INDEX `ro_datecreated`(`datecreated`) USING BTREE,
  INDEX `ro_dateconfirmed`(`dateconfirmed`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_ro_point_monthly
-- ----------------------------
DROP TABLE IF EXISTS `jpb_ro_point_monthly`;
CREATE TABLE `jpb_ro_point_monthly`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `id_member` bigint NOT NULL,
  `year` smallint NOT NULL,
  `month` tinyint NOT NULL,
  `total_bv` bigint NOT NULL,
  `total_bv_left` bigint NOT NULL,
  `total_bv_right` bigint NOT NULL,
  `kurs_bv_point` int NOT NULL,
  `point` double NOT NULL DEFAULT 0,
  `point_left` double NOT NULL DEFAULT 0,
  `point_right` double NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '0=Pending,1=Confirmed',
  `desc` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `date` date NULL DEFAULT NULL,
  `datecreated` datetime NOT NULL,
  `datemodified` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `RP_unique`(`id_member`, `year`, `month`) USING BTREE,
  INDEX `RP_id_member`(`id_member`) USING BTREE,
  INDEX `RP_year`(`year`) USING BTREE,
  INDEX `RP_month`(`month`) USING BTREE,
  INDEX `RP_date`(`date`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_sessions
-- ----------------------------
DROP TABLE IF EXISTS `jpb_sessions`;
CREATE TABLE `jpb_sessions`  (
  `session_id` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `device_id` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `username` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `session` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `id_member` bigint NOT NULL,
  `id_staff` int NOT NULL,
  `ip_address` varchar(45) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `platform` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `browser` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `agent` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `user_agent` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `expiration` int NOT NULL DEFAULT 0,
  `user_data` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `token` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `otp` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `otp_expiration` int NOT NULL DEFAULT 0,
  `datecreated` datetime NULL DEFAULT NULL,
  `datemodified` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`session_id`) USING BTREE,
  INDEX `user_device`(`device_id`) USING BTREE,
  INDEX `user_session`(`session`) USING BTREE,
  INDEX `last_activity_idx`(`expiration`) USING BTREE,
  INDEX `user_idx`(`username`) USING BTREE,
  INDEX `user_session_id`(`session_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_shop_order
-- ----------------------------
DROP TABLE IF EXISTS `jpb_shop_order`;
CREATE TABLE `jpb_shop_order`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `invoice` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `id_member` bigint NOT NULL,
  `id_stockist` bigint NOT NULL,
  `id_espay` bigint NOT NULL,
  `type_order` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `products` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `meta` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `status` int NOT NULL COMMENT '0=Review,1=Confirmed, 2=done, 4=cancelled',
  `point_sponsor` double NOT NULL,
  `point_pairing` double NOT NULL,
  `point_reward` double NOT NULL,
  `point_stockist` double NOT NULL,
  `total_bv` double NOT NULL,
  `total_qty` int NOT NULL,
  `subtotal` double NOT NULL,
  `shipping` double NOT NULL,
  `unique` smallint NOT NULL,
  `discount` double NOT NULL,
  `shipping_discount` double NOT NULL,
  `fee` double NOT NULL DEFAULT 0,
  `ppn` double NOT NULL,
  `handling_fee` double NOT NULL DEFAULT 0,
  `insurance_fee` double NOT NULL DEFAULT 0,
  `additional_cost` double NOT NULL,
  `autoro` double NOT NULL DEFAULT 0,
  `total_checkout` double NOT NULL DEFAULT 0,
  `total_payment` double NOT NULL,
  `payment_remain` int NOT NULL,
  `total_omzet` double NOT NULL,
  `voucher` double NOT NULL,
  `saldo_eproduct` double NOT NULL,
  `saldo_eshipping` double NOT NULL,
  `saldo_eshipping_subsidy` double NOT NULL,
  `payment_method` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `payment_shipping_method` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT 'transfer',
  `payment_shipping_status` tinyint NULL DEFAULT 1,
  `bank_code` varchar(30) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NULL DEFAULT NULL,
  `account_number` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `shipping_method` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `phone` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_province` int NULL DEFAULT NULL,
  `id_district` int NULL DEFAULT NULL,
  `id_subdistrict` int NULL DEFAULT NULL,
  `province` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `district` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `subdistrict` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `village` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `address` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `postcode` varchar(8) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `courier` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `service` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `weight` int NOT NULL,
  `resi` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `pin_transfer` tinyint(1) NOT NULL DEFAULT 0,
  `description` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `created_by` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `confirmed_by` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `modified_by` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `datecreated` datetime NOT NULL,
  `datemodified` datetime NOT NULL,
  `dateconfirmed` datetime NULL DEFAULT NULL,
  `datestockistconfirmed` datetime NULL DEFAULT NULL,
  `dateexpired` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `po_id_member`(`id_member`) USING BTREE,
  INDEX `po_status`(`status`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 54 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_shop_order_detail
-- ----------------------------
DROP TABLE IF EXISTS `jpb_shop_order_detail`;
CREATE TABLE `jpb_shop_order_detail`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `id_shop_order` bigint NOT NULL,
  `id_member` bigint NOT NULL,
  `product_package` int NOT NULL DEFAULT 0,
  `product` int NOT NULL,
  `varian` int NOT NULL DEFAULT 0,
  `type` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  `weight` int NOT NULL COMMENT 'Weight = Gram',
  `point` double NOT NULL,
  `bv` double NOT NULL,
  `omzet` double NOT NULL,
  `price` double NOT NULL,
  `price_cart` double NOT NULL,
  `additional_cost` double NOT NULL,
  `qty` int NOT NULL,
  `discount` double NOT NULL,
  `subtotal` double NOT NULL,
  `subtotal_bv` double NOT NULL,
  `subtotal_omzet` double NOT NULL,
  `subtotal_weight` double NOT NULL,
  `subtotal_cost` double NOT NULL,
  `datecreated` datetime NOT NULL,
  `datemodified` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `pod_id_member`(`id_member`) USING BTREE,
  INDEX `pod_product`(`product`) USING BTREE,
  INDEX `pod_id_shop_order`(`id_shop_order`) USING BTREE,
  INDEX `pod_id_product_package`(`product_package`) USING BTREE,
  INDEX `pod_id_varian`(`varian`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 54 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_staff
-- ----------------------------
DROP TABLE IF EXISTS `jpb_staff`;
CREATE TABLE `jpb_staff`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `phone` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `photo` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `access` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `role` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `status` tinyint NULL DEFAULT 1,
  `datecreated` datetime NOT NULL,
  `datemodified` datetime NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `username`(`username`) USING BTREE,
  INDEX `email`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_subdistrict
-- ----------------------------
DROP TABLE IF EXISTS `jpb_subdistrict`;
CREATE TABLE `jpb_subdistrict`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `district_id` smallint NOT NULL,
  `subdistrict_name` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `id_express` int NOT NULL,
  `lion` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7387 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_supplier
-- ----------------------------
DROP TABLE IF EXISTS `jpb_supplier`;
CREATE TABLE `jpb_supplier`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `phone` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `address` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `id_contact_kledo` int NULL DEFAULT NULL,
  `status` tinyint(1) NULL DEFAULT 1,
  `datecreated` datetime NOT NULL,
  `datemodified` datetime NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `name`(`name`) USING BTREE,
  INDEX `email`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_upgrade
-- ----------------------------
DROP TABLE IF EXISTS `jpb_upgrade`;
CREATE TABLE `jpb_upgrade`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `upgrader` bigint NULL DEFAULT 0,
  `id_member` bigint NOT NULL DEFAULT 0,
  `package_before` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `package_after` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `upgrade` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `omzet` bigint NOT NULL DEFAULT 0,
  `amount` bigint NOT NULL DEFAULT 0,
  `point` smallint NOT NULL DEFAULT 0,
  `pins` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `desc` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `datecreated` datetime NOT NULL,
  `datemodified` datetime NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id_member`(`id_member`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_video
-- ----------------------------
DROP TABLE IF EXISTS `jpb_video`;
CREATE TABLE `jpb_video`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `title` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `url` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sequence` int NOT NULL,
  `image` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `datecreated` datetime NOT NULL,
  `datemodified` datetime NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_video_progress
-- ----------------------------
DROP TABLE IF EXISTS `jpb_video_progress`;
CREATE TABLE `jpb_video_progress`  (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `id_member` bigint NOT NULL,
  `id_video` bigint NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `datecreated` datetime NOT NULL,
  `datemodified` datetime NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for jpb_withdraw
-- ----------------------------
DROP TABLE IF EXISTS `jpb_withdraw`;
CREATE TABLE `jpb_withdraw`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_member` bigint NOT NULL,
  `type` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `bank` int NOT NULL,
  `bank_type` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `bank_code` varchar(20) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NULL DEFAULT '',
  `bank_name` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `bill` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `bill_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nominal` int NOT NULL,
  `nominal_receipt` int NOT NULL,
  `tax` int NOT NULL,
  `auto_ro` int NOT NULL,
  `admin_fund` int NOT NULL,
  `status` tinyint NULL DEFAULT 0,
  `flip_id` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `linkita_inquiry` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `inquiry_status` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `linkita_pay` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `payment_status` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  `datecreated` datetime NOT NULL,
  `datemodified` datetime NOT NULL,
  `dateconfirmed` datetime NULL DEFAULT NULL,
  `confirm_by` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT '',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `wd_id_member`(`id_member`) USING BTREE,
  INDEX `wd_type`(`type`) USING BTREE,
  INDEX `wd_linkita_inquiry`(`linkita_inquiry`) USING BTREE,
  INDEX `wd_linkita_pay`(`linkita_pay`) USING BTREE,
  INDEX `wd_status`(`status`) USING BTREE,
  INDEX `wd_date`(`datecreated`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 77 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 135 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Function structure for GetAncestry
-- ----------------------------
DROP FUNCTION IF EXISTS `GetAncestry`;
delimiter ;;
CREATE FUNCTION `GetAncestry`(`GivenID` BIGINT)
 RETURNS longtext CHARSET latin1
  READS SQL DATA 
BEGIN
	DECLARE rv LONGTEXT;
	DECLARE ch BIGINT;

	SET ch = GivenID;
	
	WITH RECURSIVE MemberHierarchy AS (
			SELECT
					`id`,
					`username`,
					`name`,
					`parent`,
					`level`
			FROM jpb_member WHERE id = ch
			UNION ALL
			SELECT
					e.`id`,
					e.`username`,
					e.`name`,
					e.parent,
					e.`level`
			FROM jpb_member e 
			INNER JOIN MemberHierarchy eh ON e.id = eh.parent
	)
	
	SELECT GROUP_CONCAT(`id`) INTO rv FROM MemberHierarchy WHERE id != ch AND `level` > 0;
	
	RETURN rv;
END
;;
delimiter ;

-- ----------------------------
-- Function structure for GetAncestrySponsor
-- ----------------------------
DROP FUNCTION IF EXISTS `GetAncestrySponsor`;
delimiter ;;
CREATE FUNCTION `GetAncestrySponsor`(`GivenID` BIGINT)
 RETURNS longtext CHARSET latin1
  READS SQL DATA 
BEGIN
	DECLARE rv LONGTEXT;
	DECLARE ch BIGINT;

	SET ch = GivenID;
	
	WITH RECURSIVE MemberHierarchy AS (
			SELECT
					`id`,
					`username`,
					`name`,
					`sponsor`,
					`gen`
			FROM jpb_member WHERE id = ch
			UNION ALL
			SELECT
					e.`id`,
					e.`username`,
					e.`name`,
					e.`sponsor`,
					e.`gen`
			FROM jpb_member e 
			INNER JOIN MemberHierarchy eh ON e.id = eh.sponsor
	)
	
	SELECT GROUP_CONCAT(`id`) INTO rv FROM MemberHierarchy WHERE id != ch AND gen > 0;
	
	RETURN rv;
END
;;
delimiter ;

-- ----------------------------
-- Function structure for GetDownlineMaxLevel
-- ----------------------------
DROP FUNCTION IF EXISTS `GetDownlineMaxLevel`;
delimiter ;;
CREATE FUNCTION `GetDownlineMaxLevel`(`GivenID` BIGINT)
 RETURNS int
  READS SQL DATA 
BEGIN
	DECLARE ch BIGINT;
	DECLARE lvl INT;

	SET lvl = 0;
	SET ch = GivenID;
	
	WITH RECURSIVE MemberHierarchy AS (
			SELECT
					`id`,
					`username`,
					`name`,
					`parent`,
					`gen`,
					`group`,
					`level`,
					1 AS `leveling`
			FROM jpb_member WHERE id = ch
			UNION ALL
			SELECT
					e.`id`,
					e.`username`,
					e.`name`,
					e.`parent`,
					e.`gen`,
					e.`group`,
					e.`level`,
					(eh.`leveling` + 1) AS `leveling`
			FROM jpb_member e 
			INNER JOIN MemberHierarchy eh ON (e.parent = eh.id)
	)
	
	SELECT MAX(`leveling`) INTO lvl FROM MemberHierarchy WHERE id != ch AND leveling > 0 AND gen > 0 AND `group` > 0;
	
	IF LENGTH(lvl) = 0 THEN RETURN lvl; END IF;
	IF lvl > 1 THEN 
		SET lvl = lvl - 1;
	END IF;
	
	RETURN lvl;
END
;;
delimiter ;

-- ----------------------------
-- Function structure for GetDownlineMaxLevelByPos
-- ----------------------------
DROP FUNCTION IF EXISTS `GetDownlineMaxLevelByPos`;
delimiter ;;
CREATE FUNCTION `GetDownlineMaxLevelByPos`(`GivenID` BIGINT, `PosID` VARCHAR(20))
 RETURNS int
  READS SQL DATA 
BEGIN
	DECLARE gid, cid BIGINT;
	DECLARE lvl INT;
	DECLARE pos VARCHAR(10);

	SET lvl = 0;
	SET gid = GivenID;
	SET pos = PosID;
	
	IF LENGTH(GivenID) = 0 THEN RETURN lvl; END IF;
	IF LENGTH(PosID) = 0 THEN RETURN lvl; END IF;
	
	SELECT id INTO cid FROM jpb_member WHERE parent = gid AND position = pos;
	
	IF LENGTH(cid) = 0 THEN RETURN lvl; END IF;
	
	WITH RECURSIVE MemberHierarchy AS (
			SELECT
					`id`,
					`username`,
					`name`,
					`parent`,
					`gen`,
					`group`,
					`level`,
					1 AS `leveling`
			FROM jpb_member WHERE id = cid
			UNION ALL
			SELECT
					e.`id`,
					e.`username`,
					e.`name`,
					e.`parent`,
					e.`gen`,
					e.`group`,
					e.`level`,
					(eh.`leveling` + 1) AS `leveling`
			FROM jpb_member e 
			INNER JOIN MemberHierarchy eh ON (e.parent = eh.id)
	)
	
	SELECT MAX(`leveling`) INTO lvl FROM MemberHierarchy WHERE leveling > 0 AND gen > 0 AND `group` > 0;
	
	IF LENGTH(lvl) = 0 THEN RETURN lvl; END IF;
	
	RETURN lvl;
END
;;
delimiter ;

-- ----------------------------
-- Function structure for GetFamilyTreeByPosition
-- ----------------------------
DROP FUNCTION IF EXISTS `GetFamilyTreeByPosition`;
delimiter ;;
CREATE FUNCTION `GetFamilyTreeByPosition`(`GivenID` INT, `PosID` TEXT)
 RETURNS longtext CHARSET latin1
  READS SQL DATA 
BEGIN
	DECLARE rv,q,queue,queue_children TEXT;
	DECLARE posmem VARCHAR(10);
	DECLARE queue_length,front_id,pos,ifor INT;
	
	SET rv = '';
	IF GivenID = 0 THEN RETURN rv; END IF;

	SET posmem = PosID;
	SET queue  = GivenID;
	SET queue_length = 1;
	SET ifor = 0;
	WHILE queue_length > 0 DO
			IF queue_length = 1 THEN
				SET front_id = queue;
				SET queue = '';
			ELSE
				SET front_id = SUBSTR(queue,1,LOCATE(',',queue)-1);
				SET pos = LOCATE(',',queue) + 1;
				SET q = SUBSTR(queue,pos);
				SET queue = q;
			END IF;
				
			SET queue_length = queue_length - 1;

			IF ifor = 0 THEN
				SELECT IFNULL(qc,'') INTO queue_children
				FROM (SELECT GROUP_CONCAT(id) qc
				FROM jpb_member WHERE parent = front_id AND position = posmem) A;
			ELSE
				SELECT IFNULL(qc,'') INTO queue_children
				FROM (SELECT GROUP_CONCAT(id) qc
				FROM jpb_member WHERE parent = front_id) A;
			END IF;

			IF LENGTH(queue_children) = 0 THEN
					IF LENGTH(queue) = 0 THEN
							SET queue_length = 0;
					END IF;
			ELSE
					IF LENGTH(rv) = 0 THEN
							SET rv = queue_children;
					ELSE
							SET rv = CONCAT(rv,',',queue_children);
					END IF;
					IF LENGTH(queue) = 0 THEN
							SET queue = queue_children;
					ELSE
							SET queue = CONCAT(queue,',',queue_children);
					END IF;
					SET queue_length = LENGTH(queue) - LENGTH(REPLACE(queue,',','')) + 1;
			END IF;
		SET ifor = ifor + 1;
	END WHILE;

	RETURN rv;
END
;;
delimiter ;

-- ----------------------------
-- Function structure for GetGen
-- ----------------------------
DROP FUNCTION IF EXISTS `GetGen`;
delimiter ;;
CREATE FUNCTION `GetGen`(`ParentID` BIGINT, `DownID` BIGINT)
 RETURNS int
  READS SQL DATA 
BEGIN
	DECLARE lvl INT;
    DECLARE dwn INT;
    DECLARE par INT;

	SET lvl = 0;
    SET dwn = DownID;
    SET par = ParentID;
    
	lvloop: WHILE dwn > 0 DO
		SELECT sponsor INTO dwn 
        FROM jpb_member WHERE id = dwn;
        
        SET lvl := lvl + 1;
        
        IF dwn = par THEN
        	LEAVE lvloop;
        END IF;
	END WHILE lvloop;
	RETURN lvl;
END
;;
delimiter ;

-- ----------------------------
-- Function structure for GetGroup
-- ----------------------------
DROP FUNCTION IF EXISTS `GetGroup`;
delimiter ;;
CREATE FUNCTION `GetGroup`(`GivenID` BIGINT, `SponID` BIGINT)
 RETURNS int
  READS SQL DATA 
BEGIN
	DECLARE rv INT;
	DECLARE ch BIGINT;
	DECLARE sp BIGINT;

	SET rv = 0;
	SET ch = GivenID;
	SET sp = SponID;
	
	WITH RECURSIVE MemberHierarchy AS (
			SELECT
					`id`,
					`username`,
					`name`,
					`sponsor`,
					`group`,
					`gen`
			FROM jpb_member WHERE id = ch
			UNION ALL
			SELECT
					e.`id`,
					e.`username`,
					e.`name`,
					e.`sponsor`,
					e.`group`,
					e.`gen`
			FROM jpb_member e 
			INNER JOIN MemberHierarchy eh ON (e.id = eh.sponsor)
	)
	
	SELECT `group` INTO rv FROM MemberHierarchy WHERE sponsor = sp;
	
	IF LENGTH(rv) = 0 THEN RETURN rv; END IF;
	
	RETURN rv;
END
;;
delimiter ;

-- ----------------------------
-- Function structure for GetLastDownlineByPosition
-- ----------------------------
DROP FUNCTION IF EXISTS `GetLastDownlineByPosition`;
delimiter ;;
CREATE FUNCTION `GetLastDownlineByPosition`(`GivenID` BIGINT, `PosID` VARCHAR(50))
 RETURNS int
  READS SQL DATA 
BEGIN
	DECLARE ch BIGINT;
	DECLARE up BIGINT;
	DECLARE pos VARCHAR(50);

	SET ch = 0;
	SET up = GivenID;
	SET pos = PosID;
	
	WITH RECURSIVE MemberHierarchy AS (
			SELECT
					`id`,
					`username`,
					`name`,
					`parent`,
					1 AS `leveling`
			FROM jpb_member WHERE id = up
			UNION ALL
			SELECT
					e.`id`,
					e.`username`,
					e.`name`,
					e.`parent`,
					(eh.`leveling` + 1) AS `leveling`
			FROM jpb_member e 
			INNER JOIN MemberHierarchy eh ON (e.parent = eh.id AND e.position = pos)
	)
	
	SELECT `id` INTO ch FROM MemberHierarchy ORDER BY `leveling` DESC LIMIT 1;
	
	IF LENGTH(ch) = 0 THEN RETURN ch; END IF;
	
	RETURN ch;
END
;;
delimiter ;

-- ----------------------------
-- Function structure for GetLevel
-- ----------------------------
DROP FUNCTION IF EXISTS `GetLevel`;
delimiter ;;
CREATE FUNCTION `GetLevel`(`ParentID` BIGINT, `DownID` BIGINT)
 RETURNS int
  READS SQL DATA 
BEGIN
	DECLARE lvl INT;
    DECLARE dwn INT;
    DECLARE par INT;

	SET lvl = 0;
    SET dwn = DownID;
    SET par = ParentID;
    
	lvloop: WHILE dwn > 0 DO
		SELECT parent INTO dwn 
        FROM jpb_member WHERE id = dwn;
        
        SET lvl := lvl + 1;
        
        IF dwn = par THEN
        	LEAVE lvloop;
        END IF;
	END WHILE lvloop;
	RETURN lvl;
END
;;
delimiter ;

-- ----------------------------
-- Function structure for GetMemberHierarchy
-- ----------------------------
DROP FUNCTION IF EXISTS `GetMemberHierarchy`;
delimiter ;;
CREATE FUNCTION `GetMemberHierarchy`(`GivenID` BIGINT)
 RETURNS longtext CHARSET latin1
  READS SQL DATA 
BEGIN
	DECLARE rv LONGTEXT;
	DECLARE ch BIGINT;

	SET ch = GivenID;
	
	WITH RECURSIVE MemberHierarchy AS (
			SELECT
					`id`,
					`username`,
					`name`,
					`parent`,
					`level`
			FROM jpb_member WHERE id = ch
			UNION ALL
			SELECT
					e.`id`,
					e.`username`,
					e.`name`,
					e.parent,
					e.`level`
			FROM jpb_member e 
			INNER JOIN MemberHierarchy eh ON e.parent = eh.id
	)
	
	SELECT GROUP_CONCAT(`id`) INTO rv FROM MemberHierarchy WHERE id != ch AND `level` > 0;
	
	RETURN rv;
END
;;
delimiter ;

-- ----------------------------
-- Function structure for GetMyGen
-- ----------------------------
DROP FUNCTION IF EXISTS `GetMyGen`;
delimiter ;;
CREATE FUNCTION `GetMyGen`(`GivenID` BIGINT)
 RETURNS int
  READS SQL DATA 
BEGIN
	DECLARE ch BIGINT;
	DECLARE gen INT;

	SET gen = 0;
	SET ch = GivenID;
	
	WITH RECURSIVE MemberHierarchy AS (
			SELECT
					`id`,
					`username`,
					`name`,
					`sponsor`,
					1 AS `generation`
			FROM jpb_member WHERE id = ch
			UNION ALL
			SELECT
					e.`id`,
					e.`username`,
					e.`name`,
					e.`sponsor`,
					(eh.`generation` + 1) AS `generation`
			FROM jpb_member e 
			INNER JOIN MemberHierarchy eh ON (e.id = eh.sponsor)
	)
	
	SELECT `generation` INTO gen FROM MemberHierarchy ORDER BY `generation` DESC LIMIT 1;
	
	IF LENGTH(gen) = 0 THEN RETURN gen; END IF;
	
	IF gen > 1 THEN 
		SET gen = gen - 1;
	END IF;
	
	RETURN gen;
END
;;
delimiter ;

-- ----------------------------
-- Function structure for GetMyLevel
-- ----------------------------
DROP FUNCTION IF EXISTS `GetMyLevel`;
delimiter ;;
CREATE FUNCTION `GetMyLevel`(`GivenID` BIGINT)
 RETURNS int
  READS SQL DATA 
BEGIN
	DECLARE ch BIGINT;
	DECLARE lvl INT;

	SET lvl = 0;
	SET ch = GivenID;
	
	WITH RECURSIVE MemberHierarchy AS (
			SELECT
					`id`,
					`username`,
					`name`,
					`parent`,
					1 AS `leveling`
			FROM jpb_member WHERE id = ch
			UNION ALL
			SELECT
					e.`id`,
					e.`username`,
					e.`name`,
					e.`parent`,
					(eh.`leveling` + 1) AS `leveling`
			FROM jpb_member e 
			INNER JOIN MemberHierarchy eh ON (e.id = eh.parent)
	)
	
	SELECT `leveling` INTO lvl FROM MemberHierarchy ORDER BY `leveling` DESC LIMIT 1;
	
	IF LENGTH(lvl) = 0 THEN RETURN lvl; END IF;
	
	IF lvl > 1 THEN 
		SET lvl = lvl - 1;
	END IF;
	
	RETURN lvl;
END
;;
delimiter ;

SET FOREIGN_KEY_CHECKS = 1;
