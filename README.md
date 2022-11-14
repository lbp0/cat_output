# Cat Output
> **特别注意：** *测试版本，有很多已知bug尚未修复*  

通过网页记录并追踪猫猫尿尿拉粑粑状况。
## 需求(开发环境)
- 网页服务器(Apache/2.4.48)
- MySql(10.0.28-MariaDB)
- PHP(8.0.7)
## 快速开始
开始前请先确保网页服务器,MySQL与PHP之间已连接完毕  
1. 下载源码并放置在网页服务器http文档目录  
2. 创建数据库，详见"[数据库格式](https://github.com/lbp0/cat_output/blob/main/README.md#%E6%95%B0%E6%8D%AE%E5%BA%93%E6%A0%BC%E5%BC%8F)"章节
3. 配置项目内/conf/main.conf，填入数据库信息
4. 通过http进行访问  
## 数据库格式
**格式**
|字段名|类型|备注|
| --- | --- | --- |
|cat_id|bigint,NOT NULL|记录ID,主键|
|cat_year|varchar(254)|年|
|cat_month|varchar(254)|月|
|cat_day|varchar(254)|日|
|cat_hour|varchar(254)|时|
|cat_minute|varchar(254)|分|
|cat_popo|varchar(254)|是否尿尿|
|cat_bubu|varchar(254)|是否拉粑粑|

**使用SQL创建**
```
DROP TABLE IF EXISTS `[替换为你的数据库表名]`;
CREATE TABLE `[替换为你的数据库表名]`  (
  `cat_id` bigint NOT NULL,
  `cat_year` varchar(254) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NULL DEFAULT NULL,
  `cat_month` varchar(254) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NULL DEFAULT NULL,
  `cat_day` varchar(254) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NULL DEFAULT NULL,
  `cat_hour` varchar(254) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NULL DEFAULT NULL,
  `cat_minute` varchar(254) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NULL DEFAULT NULL,
  `cat_popo` varchar(254) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NULL DEFAULT NULL,
  `cat_bubu` varchar(254) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NULL DEFAULT NULL,
  PRIMARY KEY (`cat_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_bin ROW_FORMAT = DYNAMIC;

SET FOREIGN_KEY_CHECKS = 1;
```
## 特别注意
如果你是第一次配置Web+PHP+MySQL环境，请优先确保：
- 网页服务器(Apache)已配置PHP信息
- MySQL已授权远程访问
### PHP
- 本项目主页为cat.php，请在PHP配置中添加

