### DEMO 测试数据

```
/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50612
Source Host           : localhost:3306
Source Database       : test

Target Server Type    : MYSQL
Target Server Version : 50612
File Encoding         : 65001

Date: 2014-05-22 10:44:57
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `books`
-- ----------------------------
DROP TABLE IF EXISTS `books`;
CREATE TABLE `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(127) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `title` varchar(2047) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `author` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `pages` int(11) DEFAULT NULL,
  `index` varchar(2047) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `content` varchar(2047) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of books
-- ----------------------------
INSERT INTO `books` VALUES ('1', '', 'Book One', 'Author A', '77', null, null);
INSERT INTO `books` VALUES ('2', '', 'Book Two', 'Author B', '177', null, null);

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `pass` varchar(64) DEFAULT NULL,
  `sex` tinyint(4) DEFAULT NULL,
  `age` mediumint(4) DEFAULT NULL,
  `ip` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Seven', null, '1', '36', null);
INSERT INTO `users` VALUES ('2', 'Honey', null, '0', '25', null);
```