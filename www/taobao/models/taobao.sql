/*
 Navicat Premium Data Transfer

 Source Server         : hsyii
 Source Server Type    : MySQL
 Source Server Version : 50617
 Source Host           : localhost:3306
 Source Schema         : taobao

 Target Server Type    : MySQL
 Target Server Version : 50617
 File Encoding         : 65001

 Date: 25/11/2019 23:59:49
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '超级管理员id',
  `admin_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '超级管理员昵称',
  `password` varchar(130) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '超级管理员密码',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '超级管理员表' ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for order_list
-- ----------------------------
DROP TABLE IF EXISTS `order_list`;
CREATE TABLE `order_list`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '订单id',
  `shop_id` int(11) NOT NULL COMMENT '网店id 关联shop_list的id',
  `user_id` int(11) NULL DEFAULT NULL COMMENT '用户id，关联user的id',
  `price` decimal(10, 2) NOT NULL COMMENT '商品单价',
  `send_addr` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '发货地址',
  `recv_addr` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '收货地址',
  `order_state` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '订单状态',
  `timestamp` datetime(0) NOT NULL COMMENT '订单创建时间',
  `product_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '商品名称',
  `product_type` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT '无' COMMENT '商品型号',
  `buy_num` int(11) NOT NULL COMMENT '购买数量',
  `product_img_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '商品图片',
  `product_detail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '货品描述',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `shop_id`(`shop_id`) USING BTREE,
  INDEX `user_id`(`user_id`) USING BTREE,
  CONSTRAINT `order_list_ibfk_1` FOREIGN KEY (`shop_id`) REFERENCES `shop_list` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `order_list_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '订单表' ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for product_list
-- ----------------------------
DROP TABLE IF EXISTS `product_list`;
CREATE TABLE `product_list`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '商品名称',
  `shop_id` int(11) NOT NULL COMMENT '网店id，关联shop_list的id',
  `product_img_url` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '商品图片url',
  `product_detail` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '商品详情',
  `product_count` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '商品库存',
  `price` decimal(10, 2) NOT NULL COMMENT '商品单价',
  `product_type` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '商品型号',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `shop_id`(`shop_id`) USING BTREE,
  CONSTRAINT `product_list_ibfk_1` FOREIGN KEY (`shop_id`) REFERENCES `shop_list` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for return_goods
-- ----------------------------
DROP TABLE IF EXISTS `return_goods`;
CREATE TABLE `return_goods`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '退货记录的id',
  `return_state` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '退货状态',
  `user_id` int(11) NULL DEFAULT NULL COMMENT '申请退货的用户id，关联user的id',
  `order_id` int(11) NOT NULL COMMENT '要退货的订单的id，关联order的id',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `user_id`(`user_id`) USING BTREE,
  INDEX `order_id`(`order_id`) USING BTREE,
  CONSTRAINT `return_goods_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `return_goods_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `order_list` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for shop_assistant
-- ----------------------------
DROP TABLE IF EXISTS `shop_assistant`;
CREATE TABLE `shop_assistant`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '网店管理员_id',
  `password` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL COMMENT '网店管理员密码',
  `assistant_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '网店管理员的昵称',
  `shop_id` int(11) NOT NULL COMMENT '网店id，关联shop_list的id',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `shop_id`(`shop_id`) USING BTREE,
  CONSTRAINT `shop_assistant_ibfk_1` FOREIGN KEY (`shop_id`) REFERENCES `shop_list` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for shop_list
-- ----------------------------
DROP TABLE IF EXISTS `shop_list`;
CREATE TABLE `shop_list`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '网店id',
  `shop_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '网店名',
  `contact` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '联系方式',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for shop_manager
-- ----------------------------
DROP TABLE IF EXISTS `shop_manager`;
CREATE TABLE `shop_manager`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `shop_id` int(11) NULL DEFAULT NULL COMMENT '关联shop_list表的id',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `shop_id`(`shop_id`) USING BTREE,
  CONSTRAINT `shop_manager_ibfk_1` FOREIGN KEY (`shop_id`) REFERENCES `shop_list` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for shopping_cart
-- ----------------------------
DROP TABLE IF EXISTS `shopping_cart`;
CREATE TABLE `shopping_cart`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `product_id` int(11) NOT NULL COMMENT '商品id',
  `buy_num` int(11) NULL DEFAULT NULL COMMENT '购买数量',
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `product_id`(`product_id`) USING BTREE,
  CONSTRAINT `shopping_cart_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product_list` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '用户id',
  `password` varchar(130) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '用户密码',
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '用户名',
  `recv_addr` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '用户的收货地址',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Compact;

SET FOREIGN_KEY_CHECKS = 1;
