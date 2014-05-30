### 基于 SevenMVC-Lib 项目的目录结构

* **cache** Smarty 缓存文件夹
* **configs** Smarty 模板配置文件夹
* **controllers** MVC 控制器文件夹
* **libs** SevenMVC-Lib 源文件
* **models** MVC 模型文件夹
* **templates** Smarty 模板文件夹
* **templates_c** Smarty 模板编译文件夹
* **wwwroot** 站点根目录 (index.php 所在文件夹)

### DEMO 测试数据

```
SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `books`
-- ----------------------------
DROP TABLE IF EXISTS `books`;
CREATE TABLE `books` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(2047) NOT NULL,
  `author` varchar(255) DEFAULT NULL,
  `pages` int(11) DEFAULT NULL,
  `content` varchar(2047) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of books
-- ----------------------------
INSERT INTO `books` VALUES ('1', 'Book-1', 'Author A', '77', '<p>Book-1 Content</p>');
INSERT INTO `books` VALUES ('2', 'Book Two', 'Author B', '177', '<p>book tow content</p>');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) DEFAULT NULL,
  `pass` varchar(64) DEFAULT NULL,
  `sex` tinyint(4) DEFAULT NULL,
  `age` mediumint(4) DEFAULT NULL,
  `ip` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Seven', '21232f297a57a5a743894a0e4a801fc3', '1', '36', null);
INSERT INTO `users` VALUES ('2', 'Honey', '21232f297a57a5a743894a0e4a801fc3', '0', '27', null);
```