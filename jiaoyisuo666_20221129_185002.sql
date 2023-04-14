-- MySQL dump 10.13  Distrib 5.6.50, for Linux (x86_64)
--
-- Host: localhost    Database: jiaoyisuo666
-- ------------------------------------------------------
-- Server version	5.6.50-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tw_admin`
--

DROP TABLE IF EXISTS `tw_admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tw_admin` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL DEFAULT '',
  `username` char(16) NOT NULL,
  `nickname` varchar(50) NOT NULL,
  `moble` varchar(50) NOT NULL,
  `password` char(32) NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(11) unsigned NOT NULL,
  `last_login_time` int(11) unsigned NOT NULL,
  `last_login_ip` int(11) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8mb4 COMMENT='管理员表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tw_admin`
--

LOCK TABLES `tw_admin` WRITE;
/*!40000 ALTER TABLE `tw_admin` DISABLE KEYS */;
INSERT INTO `tw_admin` VALUES (1,'','admin','','','e10adc3949ba59abbe56e057f20f883e',0,0,1669696494,139,0,1),(2,'','admin1','技术','','e10adc3949ba59abbe56e057f20f883e',0,0,0,0,0,1),(99,'','admln','','','e10adc3949ba59abbe56e057f20f883e',0,0,0,0,0,1);
/*!40000 ALTER TABLE `tw_admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tw_adver`
--

DROP TABLE IF EXISTS `tw_adver`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tw_adver` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `lang` varchar(20) NOT NULL DEFAULT 'zh-cn',
  `name` varchar(20) NOT NULL DEFAULT '',
  `subhead` varchar(20) NOT NULL COMMENT '副标题描述',
  `url` varchar(100) NOT NULL DEFAULT '',
  `img` varchar(100) NOT NULL DEFAULT '',
  `type` varchar(50) NOT NULL DEFAULT '',
  `sort` int(11) unsigned NOT NULL DEFAULT '0',
  `addtime` int(11) unsigned NOT NULL DEFAULT '0',
  `endtime` int(11) unsigned NOT NULL DEFAULT '0',
  `onlinetime` int(11) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(4) unsigned NOT NULL DEFAULT '0',
  `look` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0 电脑端 1手机端',
  PRIMARY KEY (`id`) USING BTREE,
  KEY `name` (`name`) USING BTREE,
  KEY `status` (`status`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT COMMENT='广告图片表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tw_adver`
--

LOCK TABLES `tw_adver` WRITE;
/*!40000 ALTER TABLE `tw_adver` DISABLE KEYS */;
/*!40000 ALTER TABLE `tw_adver` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tw_appc`
--

DROP TABLE IF EXISTS `tw_appc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tw_appc` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `web_name` varchar(64) DEFAULT NULL,
  `web_title` varchar(64) DEFAULT NULL,
  `web_icp` varchar(64) DEFAULT NULL,
  `index_img` varchar(256) DEFAULT NULL,
  `pay` varchar(256) DEFAULT NULL,
  `withdraw_notice` varchar(256) DEFAULT NULL,
  `charge_notice` varchar(256) DEFAULT NULL,
  `show_coin` varchar(255) DEFAULT NULL,
  `show_market` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tw_appc`
--

LOCK TABLES `tw_appc` WRITE;
/*!40000 ALTER TABLE `tw_appc` DISABLE KEYS */;
INSERT INTO `tw_appc` VALUES (2,'数字资产交易平台','数字资产交易平台','','','{\"alipay\":{\"name\":\"\\u5f20\\u4e09\",\"value\":\"123456@163.com\"},\"bank\":{\"name\":\"\\u674e\\u56db\",\"value\":\"88888888666666\"}}','提现说明文字后台可配置','充值说明文字 后台可配置','[\"2\",\"39\",\"41\"]','[\"1\",\"31\",\"33\"]');
/*!40000 ALTER TABLE `tw_appc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tw_area`
--

DROP TABLE IF EXISTS `tw_area`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tw_area` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_zh` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `name_en` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `name_abbr` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  `international_area_code` varchar(50) COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=212 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tw_area`
--

LOCK TABLES `tw_area` WRITE;
/*!40000 ALTER TABLE `tw_area` DISABLE KEYS */;
INSERT INTO `tw_area` VALUES (1,'阿富汗','Afghanistan','AFG','93'),(2,'阿尔巴尼亚','Albania','ALB','355'),(3,'阿尔及利亚','Algeria','DZA','213'),(4,'安道尔','Andorra','AND','376'),(5,'安哥拉','Angola','AGO','244'),(6,'安提瓜和巴布达','Antigua and Barbuda','ATG','1268'),(7,'阿根廷','Argentina','ARG','54'),(8,'亚美尼亚','Armenia','ARM','374'),(9,'澳大利亚','Australia','AUS','61'),(10,'奥地利','Austria','AUT','43'),(11,'阿塞拜疆','Azerbaijan','AZE','994'),(12,'巴哈马','Bahamas','BHS','1242'),(13,'巴林','Bahrain','BHR','973'),(14,'孟加拉','Bangladesh','BGD','880'),(15,'巴巴多斯','Barbados','BRB','1246'),(16,'白俄罗斯','Belarus','BLR','375'),(17,'比利时','Belgium','BEL','32'),(18,'伯利兹','Belize','BLZ','501'),(19,'贝宁','Benin','BEN','229'),(20,'不丹','Bhutan','BTN','975'),(21,'玻利维亚','Bolivia','BOL','591'),(22,'波黑','Bosnia and Herzegovina','BIH','387'),(23,'博茨瓦纳','Botswana','BWA','267'),(24,'巴西','Brazil','BRA','55'),(25,'文莱','Brunei','BRN','673'),(26,'保加利亚','Bulgaria','BGR','359'),(27,'布基纳法索','Burkina Faso','BFA','226'),(28,'布隆迪','Burundi','BDI','257'),(29,'柬埔寨','Cambodia','KHM','855'),(30,'喀麦隆','Cameroon','CMR','237'),(31,'加拿大','Canada','CAN','1'),(32,'佛得角','Cape Verde','CPV','238'),(33,'中非','Central African Republic','CAF','236'),(34,'乍得','Chad','TCD','235'),(35,'智利','Chile','CHL','56'),(36,'中国','China','CHN','86'),(37,'哥伦比亚','Colombia','COL','57'),(38,'科摩罗','Comoros','COM','269'),(39,'刚果（布）','Congo (Brazzaville)','COG','242'),(40,'刚果（金）','Congo (Kinshasa)','COD','243'),(41,'库克群岛（新西兰）','Cook Islands','COK','682'),(42,'哥斯达黎加','Costa Rica','CRI','506'),(43,'科特迪瓦','Coate d\'Ivoire','CIV','225'),(44,'克罗地亚','Croatia','HRV','385'),(45,'古巴','Cuba','CUB','53'),(46,'塞浦路斯','Cyprus','CYP','357'),(47,'捷克','Czech Republic','CZE','420'),(48,'丹麦','Denmark','DNK','45'),(49,'吉布提','Djibouti','DJI','253'),(50,'多米尼克','Dominica','DMA','1767'),(51,'多米尼加','Dominican Republic','DOM','1809'),(52,'厄瓜多尔','Ecuador','ECU','593'),(53,'埃及','Egypt','EGY','20'),(54,'萨尔瓦多','El Salvador','SLV','503'),(55,'赤道几内亚','Equatorial Guinea','GNQ','240'),(56,'厄立特里亚','Eritrea','ERI','291'),(57,'爱沙尼亚','Estonia','EST','372'),(58,'埃塞俄比亚','Ethiopia','ETH','251'),(59,'斐济','Fiji','FJI','679'),(60,'芬兰','Finland','FIN','358'),(61,'法国','France','FRA','33'),(62,'加蓬','Gabon','GAB','241'),(63,'冈比亚','Gambia, The','GMB','220'),(64,'格鲁吉亚','Georgia','GEO','995'),(65,'德国','Germany','DEU','49'),(66,'加纳','Ghana','GHA','233'),(67,'希腊','Greece','GRC','30'),(68,'格林纳达','Grenada','GRD','1473'),(69,'危地马拉','Guatemala','GTM','502'),(70,'几内亚','Guinea','GIN','224'),(71,'几内亚比绍','Guinea-Bissau','GNB','245'),(72,'圭亚那','Guyana','GUY','592'),(73,'海地','Haiti','HTI','509'),(74,'洪都拉斯','Honduras','HND','504'),(75,'匈牙利','Hungary','HUN','36'),(76,'冰岛','Iceland','ISL','354'),(77,'印度','India','IND','91'),(78,'印尼','Indonesia','IDN','62'),(79,'伊朗','Iran','IRN','98'),(80,'伊拉克','Iraq','IRQ','964'),(81,'爱尔兰','Ireland','IRL','353'),(82,'以色列','Israel','ISR','972'),(83,'意大利','Italy','ITA','39'),(84,'牙买加','Jamaica','JAM','1876'),(85,'日本','Japan','JPN','81'),(86,'约旦','Jordan','JOR','962'),(87,'哈萨克斯坦','Kazakhstan','KAZ','7'),(88,'肯尼亚','Kenya','KEN','254'),(89,'基里巴斯','Kiribati','KIR','686'),(90,'科索沃','Kosovo',NULL,'384'),(91,'科威特','Kuwait','KWT','965'),(92,'吉尔吉斯斯坦','Kyrgyzstan','KGZ','996'),(93,'老挝','Laos','LAO','856'),(94,'拉脱维亚','Latvia','LVA','371'),(95,'黎巴嫩','Lebanon','LBN','961'),(96,'莱索托','Lesotho','LSO','266'),(97,'利比里亚','Liberia','LBR','231'),(98,'利比亚','Libya','LBY','218'),(99,'列支敦士登','Liechtenstein','LIE','423'),(100,'立陶宛','Lithuania','LTU','370'),(101,'卢森堡','Luxembourg','LUX','352'),(102,'马其顿','Macedonia','MKD','389'),(103,'马达加斯加','Madagascar','MDG','261'),(104,'马拉维','Malawi','MWI','265'),(105,'马来西亚','Malaysia','MYS','60'),(106,'马尔代夫','Maldives','MDV','960'),(107,'马里','Mali','MLI','223'),(108,'马耳他','Malta','MLT','356'),(109,'毛里塔尼亚','Mauritania','MRT','222'),(110,'毛里求斯','Mauritius','MUS','230'),(111,'墨西哥','Mexico','MEX','52'),(112,'摩尔多瓦','Moldova','MDA','373'),(113,'摩纳哥','Monaco','MCO','377'),(114,'蒙古','Mongolia','MNG','976'),(115,'黑山','Montenegro','MNE','382'),(116,'摩洛哥','Morocco','MAR','212'),(117,'莫桑比克','Mozambique','MOZ','258'),(118,'缅甸','Myanmar','MMR','95'),(119,'纳米比亚','Namibia','NAM','264'),(120,'尼泊尔','Nepal','NPL','977'),(121,'荷兰','Netherlands','NLD','31'),(122,'新西兰','New Zealand','NZL','64'),(123,'尼加拉瓜','Nicaragua','NIC','505'),(124,'尼日尔','Niger','NER','227'),(125,'尼日利亚','Nigeria','NGA','234'),(126,'纽埃（新西兰）','Niue','NIU','683'),(127,'朝鲜','Nouth Korea','PRK','850'),(128,'挪威','Norway','NOR','47'),(129,'阿曼','Oman','OMN','968'),(130,'巴基斯坦','Pakistan','PAK','92'),(131,'帕劳','Palau','PLW','680'),(132,'巴勒斯坦','Palestine','PSE','970'),(133,'巴拿马','Panama','PAN','507'),(134,'巴布亚新几内亚','Papua New Guinea','PNG','675'),(135,'巴拉圭','Paraguay','PRY','595'),(136,'秘鲁','Peru','PER','51'),(137,'菲律宾','Philippines','PHL','63'),(138,'波兰','Poland','POL','48'),(139,'葡萄牙','Portugal','PRT','351'),(140,'卡塔尔','Qatar','QAT','974'),(141,'罗马尼亚','Romania','ROU','40'),(142,'俄罗斯','Russia','RUS','7'),(143,'卢旺达','Rwanda','RWA','250'),(144,'圣基茨和尼维斯','Saint Christopher and Nevis','KNA','1869'),(145,'圣卢西亚','Saint Lucia','LCA','1758'),(146,'圣文森特和格林纳丁斯','Saint Vincent and the Grenadines','VCT','1784'),(147,'萨摩亚','Samoa','WSM','685'),(148,'圣马力诺','San Marino','SMR','378'),(149,'沙特阿拉伯','Saudi Arabia','SAU','966'),(150,'塞内加尔','Senegal','SEN','221'),(151,'塞尔维亚','Serbia','SRB','381'),(152,'塞舌尔','Seychelles','SYC','248'),(153,'塞拉利昂','Sierra Leone','SLE','232'),(154,'新加坡','Singapore','SGP','65'),(155,'斯洛伐克','Slovakia','SVK','421'),(156,'斯洛文尼亚','Slovenia','SVN','386'),(157,'所罗门群岛','Solomon Islands','SLB','677'),(158,'索马里','Somali','SOM','252'),(159,'南非','South Africa','ZAF','27'),(160,'韩国','South Korea','KOR','82'),(161,'南苏丹','South Sudan','SSD','211'),(162,'西班牙','Spain','ESP','34'),(163,'斯里兰卡','Sri Lanka','LKA','94'),(164,'苏丹','Sudan','SDN','249'),(165,'苏里南','Suriname','SUR','597'),(166,'斯威士兰','Swaziland','SWZ','268'),(167,'瑞典','Sweden','SWE','46'),(168,'瑞士','Switzerland','CHE','41'),(169,'叙利亚','Syria','SYR','963'),(170,'台湾','Taiwan','TWN','886'),(171,'塔吉克斯坦','Tajikistan','TJK','992'),(172,'坦桑尼亚','Tanzania','TZA','255'),(173,'泰国','Thailand','THA','66'),(174,'东帝汶','Timor-Leste','TLS','670'),(175,'多哥','Togo','TGO','228'),(176,'汤加','Tonga','TON','676'),(177,'特立尼达和多巴哥','Trinidad and Tobago','TTO','1868'),(178,'突尼斯','Tunisia','TUN','216'),(179,'土耳其','Turkey','TUR','90'),(180,'土库曼斯坦','Turkmenistan','TKM','993'),(181,'乌干达','Uganda','UGA','256'),(182,'乌克兰','Ukraine','UKR','380'),(183,'阿联酋','United Arab Emirates','ARE','971'),(184,'英国','United Kingdom','GBR','44'),(185,'美国','United States','USA','1'),(186,'乌拉圭','Uruguay','URY','598'),(187,'乌兹别克斯坦','Uzbekistan','UZB','998'),(188,'瓦努阿图','Vanuatu','VUT','678'),(189,'委内瑞拉','Venezuela','VEN','58'),(190,'越南','Vietnam','VNM','84'),(191,'也门','Yemen','YEM','967'),(192,'赞比亚','Zambia','ZMB','260'),(193,'津巴布韦','Zimbabwe','ZWE','263'),(194,'美属萨摩亚（美国）','American Samoa','ASM','1684'),(195,'安圭拉 （英国）','Anguilla','AIA','1264'),(196,'阿鲁巴（荷兰）','Aruba','ABW','297'),(197,'百慕大（英国）','Bermuda','BMU','1441'),(198,'开曼群岛（英国）','Cayman Islands','CYM','1345'),(199,'福克兰群岛（英国、阿根廷争议）','Falkland Islands (Islas Malvinas)','FLK','500'),(200,'法罗群岛（丹麦）','Faroe Islands','FRO','298'),(201,'直布罗陀（英国）','Gibraltar','GIB','350'),(202,'格陵兰（丹麦）','Greenland','GRL','299'),(203,'香港（中国）','Hong Kong','HKG','852'),(204,'澳门（中国）','Macao','MAC','853'),(205,'蒙特塞拉特（英国）','Montserrat','MSR','1664'),(206,'新喀里多尼亚（法国）','New Caledonia','NCL','687'),(207,'波多黎各（美国）','Puerto Rico','PRI','1787'),(208,'托克劳（新西兰）','Tokelau','TKL','690'),(209,'特克斯和凯科斯群岛（英国）','Turks and Caicos Islands','TCA','1649'),(210,'留尼旺和马约特（法国）',NULL,NULL,'262'),(211,'爱沙尼亚','Republic of Estonia',NULL,'372');
/*!40000 ALTER TABLE `tw_area` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tw_auth_extend`
--

DROP TABLE IF EXISTS `tw_auth_extend`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tw_auth_extend` (
  `group_id` mediumint(10) unsigned NOT NULL COMMENT '用户id',
  `extend_id` mediumint(8) unsigned NOT NULL COMMENT '扩展表中数据的id',
  `type` tinyint(1) unsigned NOT NULL COMMENT '扩展类型标识 1:栏目分类权限;2:模型权限',
  UNIQUE KEY `group_extend_type` (`group_id`,`extend_id`,`type`) USING BTREE,
  KEY `uid` (`group_id`) USING BTREE,
  KEY `group_id` (`extend_id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tw_auth_extend`
--

LOCK TABLES `tw_auth_extend` WRITE;
/*!40000 ALTER TABLE `tw_auth_extend` DISABLE KEYS */;
INSERT INTO `tw_auth_extend` VALUES (1,1,1),(1,1,2),(1,2,1),(1,2,2),(1,3,1),(1,3,2),(1,4,1),(1,37,1);
/*!40000 ALTER TABLE `tw_auth_extend` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tw_auth_group`
--

DROP TABLE IF EXISTS `tw_auth_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tw_auth_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '用户组id,自增主键',
  `module` varchar(20) NOT NULL COMMENT '用户组所属模块',
  `type` tinyint(4) NOT NULL COMMENT '组类型',
  `title` char(20) NOT NULL DEFAULT '' COMMENT '用户组中文名称',
  `description` varchar(80) NOT NULL DEFAULT '' COMMENT '描述信息',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '用户组状态：为1正常，为0禁用,-1为删除',
  `rules` varchar(1000) NOT NULL DEFAULT '' COMMENT '用户组拥有的规则id，多个规则 , 隔开',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tw_auth_group`
--

LOCK TABLES `tw_auth_group` WRITE;
/*!40000 ALTER TABLE `tw_auth_group` DISABLE KEYS */;
INSERT INTO `tw_auth_group` VALUES (1,'admin',1,'superadmin','超级管理员组,拥有系统所有权限',1,'1519,1580,1581,1582,1624,1674,2268,2269,2275,2276,2277,2279,2281,2283,2284,2285,2286,2287,2288,2291,2292,2293,2300,2301,2302,2303,2304,2305,2306,2307,2308,2309,2310,2311,2312,2313,2314,2315,2316,2317,2318,2319,2320,2321,2322,2323,2324,2325,2326,2334,2335,2336,2339,2340,2341,2348,2349,2352,2356,2358,2359,2362,2365,2367,2370,2372,2373,2374,2375,2376,2379,2389,2390,2392,2393,2394,2397,2399,2406,2407,2408,2409,2410,2411,2412,2415,2416,2420,2422,2424,2425,2426,2427,2428,2429,2430,2431,2432,2434,2435,2438,2439,2440,2441,2443,2444,2445,2449,2451,2452,2453,2454,2455,2456,2457,2458,2459,2460,2461,2462,2463'),(16,'admin',1,'information','文档组管理员',1,'2275,2276,2285,2286,2287,2288,2289,2290,2318,2319,2321,2336,2339,2362,2375,2435,2438,2439,2440,2441'),(17,'admin',1,'kefu','客户服务',1,'2275,2276,2279,2285,2286,2287,2288,2289,2290,2310,2318,2319,2321,2336,2339,2349,2362,2375,2435,2438,2439,2440,2441'),(18,'admin',1,'shichang','市场组管理员',1,'1580,1581,1582,1624,1674,2268,2269,2275,2276,2277,2279,2285,2286,2287,2288,2289,2290,2291,2292,2300,2301,2302,2303,2304,2305,2306,2307,2308,2309,2310,2311,2312,2313,2314,2315,2316,2317,2318,2319,2321,2322,2323,2324,2325,2326,2334,2335,2336,2339,2340,2341,2348,2349,2356,2359,2362,2365,2367,2375,2376,2399,2420,2426,2432,2433,2434,2435,2438,2439,2440,2441,2451,2452,2456,2458,2461,2462,2463'),(19,'admin',1,'caiwu','财务管理员',1,'1519,2275,2279,2285,2293,2349,2422,2424,2427,2449,2453,2454,2455'),(22,'admin',1,'low','只有查看交易市场权限',1,'2275,2279,2285,2310,2349,2356,2359,2451,2452,2456,2458');
/*!40000 ALTER TABLE `tw_auth_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tw_auth_group_access`
--

DROP TABLE IF EXISTS `tw_auth_group_access`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tw_auth_group_access` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL COMMENT '用户组id',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `group_id` (`group_id`) USING BTREE,
  KEY `uid` (`uid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tw_auth_group_access`
--

LOCK TABLES `tw_auth_group_access` WRITE;
/*!40000 ALTER TABLE `tw_auth_group_access` DISABLE KEYS */;
INSERT INTO `tw_auth_group_access` VALUES (1,1,1);
/*!40000 ALTER TABLE `tw_auth_group_access` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tw_auth_rule`
--

DROP TABLE IF EXISTS `tw_auth_rule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tw_auth_rule` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '规则id,自增主键',
  `module` varchar(20) NOT NULL COMMENT '规则所属module',
  `type` tinyint(2) NOT NULL DEFAULT '1' COMMENT '1-url;2-主菜单',
  `name` char(80) NOT NULL DEFAULT '' COMMENT '规则唯一英文标识',
  `title` char(20) NOT NULL DEFAULT '' COMMENT '规则中文描述',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '是否有效(0:无效,1:有效)',
  `condition` varchar(300) NOT NULL DEFAULT '' COMMENT '规则附加条件',
  PRIMARY KEY (`id`) USING BTREE,
  KEY `module` (`module`,`status`,`type`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2464 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tw_auth_rule`
--

LOCK TABLES `tw_auth_rule` WRITE;
/*!40000 ALTER TABLE `tw_auth_rule` DISABLE KEYS */;
INSERT INTO `tw_auth_rule` VALUES (425,'admin',1,'Admin/article/add','新增',-1,''),(427,'admin',1,'Admin/article/setStatus','改变状态',-1,''),(428,'admin',1,'Admin/article/update','保存',-1,''),(429,'admin',1,'Admin/article/autoSave','保存草稿',-1,''),(430,'admin',1,'Admin/article/move','移动',-1,''),(432,'admin',2,'Admin/Article/mydocument','内容',-1,''),(437,'admin',1,'Admin/Trade/config','交易配置',-1,''),(449,'admin',1,'Admin/Index/operate','市场统计',-1,''),(455,'admin',1,'Admin/Issue/config','认购配置',-1,''),(457,'admin',1,'Admin/Index/database/type/export','数据备份',-1,''),(461,'admin',1,'Admin/Article/chat','聊天列表',-1,''),(464,'admin',1,'Admin/Index/database/type/import','数据还原',-1,''),(471,'admin',1,'Admin/Mytx/config','提现配置',-1,''),(472,'admin',2,'Admin/Mytx/index','提现',-1,''),(473,'admin',1,'Admin/Config/market','市场配置',-1,''),(477,'admin',1,'Admin/User/myzr','转入虚拟币',-1,''),(479,'admin',1,'Admin/User/myzc','转出虚拟币',-1,''),(482,'admin',2,'Admin/ExtA/index','扩展',-1,''),(488,'admin',1,'Admin/Auth_manager/createGroup','新增用户组',-1,''),(499,'admin',1,'Admin/ExtA/index','扩展管理',-1,''),(509,'admin',1,'Admin/Article/adver_edit','编辑',-1,''),(510,'admin',1,'Admin/Article/adver_status','修改',-1,''),(513,'admin',1,'Admin/Issue/index_edit','认购编辑',-1,''),(514,'admin',1,'Admin/Issue/index_status','认购修改',-1,''),(515,'admin',1,'Admin/Article/chat_edit','编辑',-1,''),(516,'admin',1,'Admin/Article/chat_status','修改',-1,''),(517,'admin',1,'Admin/User/coin_edit','coin修改',-1,''),(519,'admin',1,'Admin/Mycz/type_status','状态修改',-1,''),(520,'admin',1,'Admin/Issue/log_status','认购状态',-1,''),(521,'admin',1,'Admin/Issue/log_jiedong','认购解冻',-1,''),(522,'admin',1,'Admin/Tools/database/type/export','数据备份',-1,''),(525,'admin',1,'Admin/Config/coin_edit','编辑',-1,''),(526,'admin',1,'Admin/Config/coin_add','编辑币种',-1,''),(527,'admin',1,'Admin/Config/coin_status','状态修改',-1,''),(528,'admin',1,'Admin/Config/market_edit','编辑',-1,''),(530,'admin',1,'Admin/Tools/database/type/import','数据还原',-1,''),(541,'admin',2,'Admin/Trade/config','交易',-1,''),(569,'admin',1,'Admin/ADVERstatus','修改',-1,''),(570,'admin',1,'Admin/Tradelog/index','交易记录',-1,''),(585,'admin',1,'Admin/Config/mycz','充值配置',-1,''),(590,'admin',1,'Admin/Mycztype/index','充值类型',-1,''),(600,'admin',1,'Admin/Usergoods/index','用户联系地址',-1,''),(1379,'admin',1,'Admin/Bazaar/index','集市管理',-1,''),(1405,'admin',1,'Admin/Bazaar/config','集市配置',-1,''),(1425,'admin',1,'Admin/Bazaar/log','集市记录',-1,''),(1451,'admin',1,'Admin/Bazaar/invit','集市推广',-1,''),(1519,'admin',2,'Admin/Finance/index','财务',1,''),(1575,'admin',1,'Admin/Shop/index','商品管理',-1,''),(1578,'admin',1,'Admin/Huafei/index','充值记录',-1,''),(1579,'admin',1,'Admin/Huafei/config','充值配置',-1,''),(1580,'admin',1,'Admin/Vote/index','投票记录',1,''),(1581,'admin',1,'Admin/Vote/type','投票配置',1,''),(1582,'admin',1,'Admin/Money/index','理财中心',1,''),(1599,'admin',1,'Admin/Config/moble','短信配置',-1,''),(1606,'admin',1,'Admin/Shop/config','商城配置',-1,''),(1607,'admin',1,'Admin/Money/log','理财记录',-1,''),(1623,'admin',1,'Admin/Shop/type','商品类型',-1,''),(1624,'admin',1,'Admin/Fenhong/index','分红配置',1,''),(1625,'admin',1,'Admin/Huafei/type','充值金额',-1,''),(1626,'admin',1,'Admin/Money/fee','理财明细',-1,''),(1651,'admin',1,'Admin/Shop/coin','付款方式',-1,''),(1652,'admin',1,'Admin/Huafei/coin','付款方式',-1,''),(1673,'admin',1,'Admin/Shop/log','购物记录',-1,''),(1674,'admin',1,'Admin/Fenhong/log','分红记录',1,''),(1681,'admin',1,'Admin/Shop/goods','收货地址',-1,''),(2092,'admin',2,'Admin/Game/index','应用',-1,''),(2168,'admin',1,'Admin/Config/mobile','短信配置',-1,''),(2251,'admin',1,'Admin/Ptpbc/list','点对点交易记录',-1,''),(2255,'admin',1,'Admin/AuthManager/createGroup','新增用户组',1,''),(2256,'admin',1,'Admin/AuthManager/editgroup','编辑用户组',1,''),(2257,'admin',1,'Admin/AuthManager/writeGroup','更新用户组',1,''),(2258,'admin',1,'Admin/AuthManager/changeStatus','改变状态',1,''),(2259,'admin',1,'Admin/AuthManager/access','访问授权',1,''),(2260,'admin',1,'Admin/AuthManager/category','分类授权',1,''),(2261,'admin',1,'Admin/AuthManager/user','成员授权',1,''),(2262,'admin',1,'Admin/AuthManager/tree','成员列表授权',1,''),(2263,'admin',1,'Admin/AuthManager/group','用户组',1,''),(2264,'admin',1,'Admin/AuthManager/addToGroup','添加到用户组',1,''),(2265,'admin',1,'Admin/AuthManager/removeFromGroup','用户组移除',1,''),(2266,'admin',1,'Admin/AuthManager/addToCategory','分类添加到用户组',1,''),(2267,'admin',1,'Admin/AuthManager/addToModel','模型添加到用户组',1,''),(2268,'admin',1,'Admin/Trade/status','修改状态',1,''),(2269,'admin',1,'Admin/Trade/chexiao','撤销挂单',1,''),(2270,'admin',1,'Admin/Shop/images','图片',1,''),(2271,'admin',1,'Admin/Login/index','用户登录',-1,''),(2272,'admin',1,'Admin/Login/loginout','用户退出',-1,''),(2273,'admin',1,'Admin/User/setpwd','修改管理员密码',-1,''),(2274,'admin',1,'Admin/Analog/console','行情调整',-1,''),(2275,'admin',2,'Admin/Index/index','首页',1,''),(2276,'admin',2,'Admin/Article/index','内容',1,''),(2277,'admin',2,'Admin/User/index','用户',1,''),(2278,'admin',2,'Admin/Finance/mycz','财务',-1,''),(2279,'admin',2,'Admin/Trade/index','交易',1,''),(2280,'admin',2,'Admin/Issue/index','应用',-1,''),(2281,'admin',2,'Admin/Config/index','系统',1,''),(2282,'admin',2,'Admin/Operate/index','运营',-1,''),(2283,'admin',2,'Admin/Tools/index','数据备份',1,''),(2284,'admin',2,'Admin/Cloud/index','扩展',1,''),(2285,'admin',1,'Admin/Index/index','后台首页',1,''),(2286,'admin',1,'Admin/Article/index','文章管理',1,''),(2287,'admin',1,'Admin/Article/edit','编辑添加',1,''),(2288,'admin',1,'Admin/Text/index','提示文字',1,''),(2289,'admin',1,'Admin/Text/edit','编辑',-1,''),(2290,'admin',1,'Admin/Text/status','修改',-1,''),(2291,'admin',1,'Admin/User/index','用户管理',1,''),(2292,'admin',1,'Admin/User/config','用户配置',1,''),(2293,'admin',1,'Admin/Finance/index','财务明细',1,''),(2294,'admin',1,'Admin/Finance/myczTypeEdit','编辑添加',1,''),(2295,'admin',1,'Admin/Cloud/index','扩展',-1,''),(2296,'admin',1,'Admin/Finance/config','配置',1,''),(2297,'admin',1,'Admin/Tools/index','清理缓存',-1,''),(2298,'admin',1,'Admin/Finance/type','类型',1,''),(2299,'admin',1,'Admin/Finance/type_status','状态修改',1,''),(2300,'admin',1,'Admin/User/edit','编辑添加',1,''),(2301,'admin',1,'Admin/User/status','修改状态',1,''),(2302,'admin',1,'Admin/User/adminEdit','编辑添加',1,''),(2303,'admin',1,'Admin/User/adminStatus','修改状态',1,''),(2304,'admin',1,'Admin/User/authEdit','编辑添加',1,''),(2305,'admin',1,'Admin/User/authStatus','修改状态',1,''),(2306,'admin',1,'Admin/User/authStart','重新初始化权限',1,''),(2307,'admin',1,'Admin/User/logEdit','编辑添加',1,''),(2308,'admin',1,'Admin/User/logStatus','修改状态',1,''),(2309,'admin',1,'Admin/User/qianbaoEdit','编辑添加',1,''),(2310,'admin',1,'Admin/Trade/index','委托管理',1,''),(2311,'admin',1,'Admin/User/qianbaoStatus','修改状态',1,''),(2312,'admin',1,'Admin/User/bankEdit','编辑添加',1,''),(2313,'admin',1,'Admin/User/bankStatus','修改状态',1,''),(2314,'admin',1,'Admin/User/coinEdit','编辑添加',1,''),(2315,'admin',1,'Admin/User/coinLog','财产统计',1,''),(2316,'admin',1,'Admin/User/goodsEdit','编辑添加',1,''),(2317,'admin',1,'Admin/User/goodsStatus','修改状态',1,''),(2318,'admin',1,'Admin/Article/typeEdit','编辑添加',1,''),(2319,'admin',1,'Admin/Article/youqingEdit','编辑添加',1,''),(2320,'admin',1,'Admin/Config/index','网站信息',1,''),(2321,'admin',1,'Admin/Article/adverEdit','编辑添加',1,''),(2322,'admin',1,'Admin/User/authAccess','访问授权',1,''),(2323,'admin',1,'Admin/User/authAccessUp','访问授权修改',1,''),(2324,'admin',1,'Admin/User/authUser','成员授权',1,''),(2325,'admin',1,'Admin/User/authUserAdd','成员授权增加',1,''),(2326,'admin',1,'Admin/User/authUserRemove','成员授权解除',1,''),(2327,'admin',1,'Admin/Operate/index','推广奖励',-1,''),(2328,'admin',1,'Admin/App/config','APP配置',-1,''),(2329,'admin',1,'AdminUser/detail','后台用户详情',-1,''),(2330,'admin',1,'AdminUser/status','后台用户状态',-1,''),(2331,'admin',1,'AdminUser/add','后台用户新增',-1,''),(2332,'admin',1,'AdminUser/edit','后台用户编辑',-1,''),(2333,'admin',1,'Admin/Articletype/edit','编辑',-1,''),(2334,'admin',1,'Admin/Issue/index','认购配置',1,''),(2335,'admin',1,'Admin/Issue/log','认购记录',1,''),(2336,'admin',1,'Admin/Article/images','上传图片',1,''),(2337,'admin',1,'Admin/Adver/edit','编辑',1,''),(2338,'admin',1,'Admin/Adver/status','修改',1,''),(2339,'admin',1,'Admin/Article/type','栏目类型',1,''),(2340,'admin',1,'Admin/User/index_edit','编辑',1,''),(2341,'admin',1,'Admin/User/index_status','修改',1,''),(2342,'admin',1,'Admin/Finance/mycz','人民币充值',-1,''),(2343,'admin',1,'Admin/Finance/myczTypeStatus','状态修改',1,''),(2344,'admin',1,'Admin/Finance/myczTypeImage','上传图片',1,''),(2345,'admin',1,'Admin/Finance/mytxStatus','修改状态',1,''),(2346,'admin',1,'Admin/Tools/dataExport','备份数据库',-1,''),(2347,'admin',1,'Admin/Tools/dataImport','还原数据库',-1,''),(2348,'admin',1,'Admin/User/admin','管理员管理',1,''),(2349,'admin',1,'Admin/Trade/log','成交记录',1,''),(2350,'admin',1,'Admin/Issue/edit','认购编辑',-1,''),(2351,'admin',1,'Admin/Issue/status','认购修改',-1,''),(2352,'admin',1,'Admin/Invit/config','推广配置',1,''),(2353,'admin',1,'Admin/App/vip_config_list','APP等级',-1,''),(2354,'admin',1,'Admin/Link/edit','编辑',1,''),(2355,'admin',1,'Admin/Link/status','修改',1,''),(2356,'admin',1,'Admin/Index/coin','币种统计',1,''),(2357,'admin',1,'Admin/Cloud/update','自动升级',-1,''),(2358,'admin',1,'Admin/Config/hq','行情配置',1,''),(2359,'admin',1,'Admin/Index/market','市场统计',1,''),(2360,'admin',1,'Admin/Chat/edit','编辑',1,''),(2361,'admin',1,'Admin/Chat/status','修改',1,''),(2362,'admin',1,'Admin/Article/adver','广告管理',1,''),(2363,'admin',1,'Admin/Trade/chat','交易聊天',-1,''),(2364,'admin',1,'Admin/Finance/myczType','人民币充值方式',-1,''),(2365,'admin',1,'Admin/Usercoin/edit','财产修改',1,''),(2366,'admin',1,'Admin/Finance/mytxExcel','导出选中',1,''),(2367,'admin',1,'Admin/User/auth','权限列表',1,''),(2368,'admin',1,'Admin/Mycz/status','修改',1,''),(2369,'admin',1,'Admin/Mycztype/status','状态修改',1,''),(2370,'admin',1,'Admin/Config/contact','客服配置',1,''),(2371,'admin',1,'Admin/App/adsblock_list','APP广告板块',-1,''),(2372,'admin',1,'Admin/Tools/queue','服务器队列',1,''),(2373,'admin',1,'Admin/Tools/qianbao','钱包检查',1,''),(2374,'admin',1,'Admin/Cloud/game','应用管理',1,''),(2375,'admin',1,'Admin/Article/youqing','友情链接',1,''),(2376,'admin',1,'Admin/User/log','登录日志',1,''),(2377,'admin',1,'Admin/Finance/mytx','人民币提现',-1,''),(2378,'admin',1,'Admin/Finance/mytxChuli','正在处理',1,''),(2379,'admin',1,'Admin/Config/bank','银行配置',1,''),(2380,'admin',1,'Admin/Config/bank_edit','编辑',1,''),(2381,'admin',1,'Admin/Coin/edit','编辑',1,''),(2382,'admin',1,'Admin/Coin/status','状态修改',1,''),(2383,'admin',1,'Admin/Market/edit','编辑市场',1,''),(2384,'admin',1,'Admin/Config/market_add','状态修改',1,''),(2385,'admin',1,'Admin/Tools/invoke','其他模块调用',-1,''),(2386,'admin',1,'Admin/Tools/optimize','优化表',-1,''),(2387,'admin',1,'Admin/Tools/repair','修复表',-1,''),(2388,'admin',1,'Admin/Tools/del','删除备份文件',-1,''),(2389,'admin',1,'Admin/Tools/export','数据备份',1,''),(2390,'admin',1,'Admin/Tools/import','数据恢复',1,''),(2391,'admin',1,'Admin/Tools/excel','导出数据库',-1,''),(2392,'admin',1,'Admin/Tools/exportExcel','导出Excel',1,''),(2393,'admin',1,'Admin/Tools/importExecl','导入Excel',1,''),(2394,'admin',1,'Admin/Config/coin','币种配置',1,''),(2395,'admin',1,'Admin/User/detail','用户详情',-1,''),(2396,'admin',1,'Admin/App/ads_user','APP广告用户',-1,''),(2397,'admin',1,'Admin/Cloud/theme','主题模板',1,''),(2398,'admin',1,'Admin/Trade/comment','币种评论',-1,''),(2399,'admin',1,'Admin/User/qianbao','用户钱包',1,''),(2400,'admin',1,'Admin/Trade/market','市场配置',-1,''),(2401,'admin',1,'Admin/Finance/mytxConfig','人民币提现配置',-1,''),(2402,'admin',1,'Admin/Finance/mytxChexiao','撤销提现',1,''),(2403,'admin',1,'Admin/Mytx/status','状态修改',1,''),(2404,'admin',1,'Admin/Mytx/excel','取消',1,''),(2405,'admin',1,'Admin/Mytx/exportExcel','导入excel',-1,''),(2406,'admin',1,'Admin/Menu/index','菜单管理',1,''),(2407,'admin',1,'Admin/Menu/sort','排序',1,''),(2408,'admin',1,'Admin/Menu/add','添加',1,''),(2409,'admin',1,'Admin/Menu/edit','编辑',1,''),(2410,'admin',1,'Admin/Cloud/kefu','客服代码',1,''),(2411,'admin',1,'Admin/Menu/del','删除',1,''),(2412,'admin',1,'Admin/Cloud/kefuUp','使用',1,''),(2413,'admin',1,'Admin/Menu/toogleHide','是否隐藏',-1,''),(2414,'admin',1,'Admin/Menu/toogleDev','是否开发',-1,''),(2415,'admin',1,'Admin/Menu/importFile','导入文件',1,''),(2416,'admin',1,'Admin/Menu/import','导入',1,''),(2417,'admin',1,'Admin/Config/text','提示文字',-1,''),(2418,'admin',1,'Admin/Ptpbc/log','点对点交易记录',-1,''),(2419,'admin',1,'Admin/Ptpbc/index','点对点交易',-1,''),(2420,'admin',1,'Admin/User/bank','提现地址',1,''),(2421,'admin',1,'Admin/Trade/invit','交易推荐',-1,''),(2422,'admin',1,'Admin/Finance/myzr','虚拟币转入',1,''),(2423,'admin',1,'Admin/Finance/mytxQueren','确认提现',1,''),(2424,'admin',1,'Admin/Finance/myzcQueren','确认转出',1,''),(2425,'admin',1,'Admin/Config/qita','系统配置',1,''),(2426,'admin',1,'Admin/User/coin','用户财产',1,''),(2427,'admin',1,'Admin/Finance/myzc','虚拟币转出',1,''),(2428,'admin',1,'Admin/Verify/code','图形验证码',1,''),(2429,'admin',1,'Admin/Verify/mobile','手机验证码',1,''),(2430,'admin',1,'Admin/Verify/email','邮件验证码',1,''),(2431,'admin',1,'Admin/Config/daohang','前端导航配置',1,''),(2432,'admin',1,'Admin/User/goods','联系地址',1,''),(2433,'admin',1,'Admin/User/myzc_qr','确认转出',1,''),(2434,'admin',1,'Admin/User/amountlog','资金变更日志',1,''),(2435,'admin',1,'Admin/Article/status','修改状态',1,''),(2436,'admin',1,'Admin/Finance/myczStatus','修改状态',1,''),(2437,'admin',1,'Admin/Finance/myczQueren','确认到账',1,''),(2438,'admin',1,'Admin/Article/typeStatus','修改状态',1,''),(2439,'admin',1,'Admin/Article/youqingStatus','修改状态',1,''),(2440,'admin',1,'Admin/Article/adverStatus','修改状态',1,''),(2441,'admin',1,'Admin/Article/adverImage','上传图片',1,''),(2442,'admin',2,'Admin/Finance/myzr','财务',-1,''),(2443,'admin',1,'Admin/Config/smss','短信群发',1,''),(2444,'admin',1,'Admin/Config/dhfooter','页脚导航配置',1,''),(2445,'admin',1,'Admin/Config/dhadmin','后端导航配置',1,''),(2446,'admin',2,'Admin/Issue/log','应用',-1,''),(2447,'admin',1,'Admin/Exchange/myzr','充值记录',-1,''),(2448,'admin',1,'Admin/Exchange/myzc','提现记录',-1,''),(2449,'admin',1,'Admin/Exchange/agent','C2C代理商',1,''),(2450,'admin',1,'Admin/Exchange/log','C2C配置',-1,''),(2451,'admin',2,'Admin/Invit/index','运营',1,''),(2452,'admin',1,'Admin/Invit/index','推广奖励',1,''),(2453,'admin',1,'Admin/Exchange/mycz','充值记录',1,''),(2454,'admin',1,'Admin/Exchange/mytx','提现记录',1,''),(2455,'admin',1,'Admin/Exchange/config','C2C配置',1,''),(2456,'admin',1,'Admin/Invit/mining','交易挖矿',1,''),(2457,'admin',1,'Admin/Config/marketo','市场配置',1,''),(2458,'admin',1,'Admin/Invit/recharge','充值挖矿',1,''),(2459,'admin',1,'Admin/Config/joggle','接口配置',1,''),(2460,'admin',1,'Admin/Tools/cache','清理缓存',1,''),(2461,'admin',1,'Admin/Apps/index','应用首页',1,''),(2462,'admin',1,'Admin/Config/mining','交易挖矿',1,''),(2463,'admin',2,'Admin/Apps/index','应用',1,'');
/*!40000 ALTER TABLE `tw_auth_rule` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tw_bborder`
--

DROP TABLE IF EXISTS `tw_bborder`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tw_bborder` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '记录ID',
  `uid` int(11) NOT NULL COMMENT '会员ID',
  `account` varchar(30) NOT NULL COMMENT '会员账号',
  `type` int(11) NOT NULL COMMENT '订单类型1买2卖',
  `ordertype` int(11) NOT NULL COMMENT '交易类别1限价2市价',
  `symbol` varchar(30) NOT NULL COMMENT '交易对',
  `coin` varchar(30) NOT NULL COMMENT '币名称',
  `coinnum` decimal(20,8) NOT NULL COMMENT '交易币数量',
  `usdtnum` decimal(20,8) NOT NULL COMMENT '交易USDT数量',
  `price` decimal(20,8) NOT NULL COMMENT '交易单价',
  `xjprice` decimal(20,8) NOT NULL COMMENT '限价单价',
  `addtime` datetime NOT NULL COMMENT '添加交易',
  `tradetime` datetime NOT NULL COMMENT '成交时间',
  `fee` decimal(20,8) NOT NULL COMMENT '手续费',
  `sxfbl` float(10,2) NOT NULL COMMENT '手续费比例',
  `status` int(11) NOT NULL COMMENT '1委托2交易完成3已撤消',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COMMENT='币币交易记录';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tw_bborder`
--

LOCK TABLES `tw_bborder` WRITE;
/*!40000 ALTER TABLE `tw_bborder` DISABLE KEYS */;
INSERT INTO `tw_bborder` VALUES (1,255,'138881',1,1,'BTC/USDT','BTC',0.00000000,10000.00000000,0.00000000,16770.06000000,'2022-11-10 14:05:19','2022-11-10 14:06:58',0.00000000,0.00,3),(2,318,'qq878412',1,1,'BTC/USDT','BTC',0.00000000,100.00000000,0.00000000,16847.38000000,'2022-11-12 16:51:00','0000-00-00 00:00:00',0.00000000,0.00,3),(3,355,'3422260640',1,1,'BTC/USDT','BTC',0.00000000,25.00000000,0.00000000,25.00000000,'2022-11-14 15:35:06','2022-11-14 15:38:54',0.00000000,0.00,3),(4,437,'kaluvala.123n@gmail.com',1,1,'BTC/USDT','BTC',0.00000000,10.00000000,0.00000000,10.00000000,'2022-11-15 21:09:52','2022-11-15 21:10:02',0.00000000,0.00,3),(5,389,'8888881',1,1,'BTC/USDT','BTC',0.00000000,2540.00000000,0.00000000,10.00000000,'2022-11-15 23:14:08','2022-11-15 23:14:12',0.00000000,0.00,2),(6,417,'simhasriram@gmail.com',1,1,'BTC/USDT','BTC',0.00000000,16488.52000000,0.00000000,16488.52000000,'2022-11-16 22:15:02','0000-00-00 00:00:00',0.00000000,0.00,3),(7,417,'simhasriram@gmail.com',1,1,'BTC/USDT','BTC',1.00022202,16488.52000000,16484.86000000,16488.52000000,'2022-11-16 22:15:05','2022-11-16 22:15:43',0.00000000,0.00,2),(8,417,'simhasriram@gmail.com',2,1,'BTC/USDT','BTC',1.00020000,16461.08155800,16457.79000000,16451.81000000,'2022-11-16 22:51:38','2022-11-16 22:51:42',0.00000000,0.00,2),(9,543,'123123',1,1,'BTC/USDT','BTC',0.18091841,3000.00000000,16582.06000000,16586.47000000,'2022-11-24 17:43:43','2022-11-24 17:43:52',0.00000000,0.00,2),(10,543,'123123',1,2,'BTC/USDT','BTC',0.18084316,3000.00000000,16588.96000000,16588.96000000,'2022-11-24 17:44:15','2022-11-24 17:44:15',0.00000000,0.00,2),(11,543,'123123',2,2,'BTC/USDT','BTC',0.09040000,1499.24603200,16584.58000000,16584.58000000,'2022-11-24 17:51:46','2022-11-24 17:51:46',0.00000000,0.00,2),(12,543,'123123',2,2,'BTC/USDT','BTC',0.09040000,1499.24603200,16584.58000000,16584.58000000,'2022-11-24 17:51:47','2022-11-24 17:51:47',0.00000000,0.00,2),(13,543,'123123',2,1,'BTC/USDT','BTC',0.18000000,2988.70560000,16603.92000000,16597.02000000,'2022-11-24 17:53:21','2022-11-24 17:53:21',0.00000000,0.00,2);
/*!40000 ALTER TABLE `tw_bborder` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tw_bbsetting`
--

DROP TABLE IF EXISTS `tw_bbsetting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tw_bbsetting` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '记录ID',
  `bb_kstime` varchar(30) NOT NULL COMMENT '开市时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COMMENT='币币交易设置';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tw_bbsetting`
--

LOCK TABLES `tw_bbsetting` WRITE;
/*!40000 ALTER TABLE `tw_bbsetting` DISABLE KEYS */;
INSERT INTO `tw_bbsetting` VALUES (1,'00:00~24:00');
/*!40000 ALTER TABLE `tw_bbsetting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tw_bill`
--

DROP TABLE IF EXISTS `tw_bill`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tw_bill` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '记录ID',
  `uid` int(11) NOT NULL COMMENT '会员ID',
  `username` varchar(60) NOT NULL COMMENT '会员账号',
  `num` decimal(10,4) NOT NULL COMMENT '操作金额',
  `coinname` varchar(30) NOT NULL COMMENT '币名称',
  `afternum` decimal(10,4) NOT NULL COMMENT '操作后余额',
  `type` int(11) NOT NULL COMMENT '1充币2提币3购买合约4出售合约5购买矿机6购机奖励7矿机收益冻结8释放冻结收益9币币交易USDT10币币交易币种11认购扣除12认购增加13一代认购奖励14二代认购奖励15三代认购奖励16提币退回17充币成功',
  `addtime` datetime NOT NULL COMMENT '操作时间',
  `st` int(11) NOT NULL COMMENT '1增加2减少',
  `remark` varchar(225) NOT NULL COMMENT '操作说明',
  `trc20id` varchar(200) DEFAULT NULL COMMENT 'trc交易id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='操作日志';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tw_bill`
--

LOCK TABLES `tw_bill` WRITE;
/*!40000 ALTER TABLE `tw_bill` DISABLE KEYS */;
/*!40000 ALTER TABLE `tw_bill` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tw_coin`
--

DROP TABLE IF EXISTS `tw_coin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tw_coin` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `name` varchar(50) NOT NULL COMMENT '币种代码',
  `czline` varchar(50) NOT NULL COMMENT '充值网络',
  `type` int(11) NOT NULL COMMENT '币类型：1钱包币2平台币3认购币',
  `title` varchar(50) NOT NULL DEFAULT '' COMMENT '币种名称',
  `sort` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `addtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '添加时间',
  `status` int(11) unsigned NOT NULL COMMENT '状态：1可用2禁用',
  `czstatus` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '充值状态：1正常2禁止',
  `lixi` decimal(11,2) NOT NULL COMMENT '每日利息',
  `czaddress` varchar(225) NOT NULL COMMENT '充值地址',
  `czminnum` float(10,2) NOT NULL COMMENT '最小充值数量',
  `txstatus` int(11) unsigned NOT NULL COMMENT '提币状态：1正常2禁止',
  `sxftype` int(11) unsigned NOT NULL COMMENT '1按比例，2按数量',
  `txsxf` float(10,2) NOT NULL COMMENT '提币手续费比例',
  `txsxf_n` float(10,2) NOT NULL COMMENT '提币手续费数量',
  `txminnum` float(10,2) NOT NULL COMMENT '最小提币数量',
  `txmaxnum` float(10,2) NOT NULL COMMENT '最大提币数量',
  `bbsxf` float(10,2) NOT NULL COMMENT '币币手续费',
  `hysxf` float(10,2) NOT NULL COMMENT '合约手续费',
  `czline2` varchar(255) DEFAULT NULL COMMENT '充值网络2',
  `czaddress2` varchar(255) DEFAULT NULL COMMENT '充值地址2',
  `agent_id` int(11) DEFAULT NULL COMMENT '代理ID',
  `default_on` int(1) NOT NULL DEFAULT '0' COMMENT '默认充值',
  `blance` decimal(11,4) DEFAULT '0.0000' COMMENT 'usdt余额',
  `trx_blance` decimal(11,4) DEFAULT '0.0000' COMMENT '矿工费余额',
  `usdtkey` varchar(200) DEFAULT NULL COMMENT 'usdt私钥',
  PRIMARY KEY (`id`) USING BTREE,
  KEY `name` (`name`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT COMMENT='币种配置表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tw_coin`
--

LOCK TABLES `tw_coin` WRITE;
/*!40000 ALTER TABLE `tw_coin` DISABLE KEYS */;
INSERT INTO `tw_coin` VALUES (30,'btc','Bitcoin',1,'BTC',0,'2022-11-09 17:33:54',1,1,0.00,'15tvArU26A3dYf9A923xUE3Cyoj2eSbNgG',50.00,1,1,0.00,0.00,10.00,10000.00,0.00,0.00,'','',0,1,0.0000,0.0000,NULL),(31,'usdt','TRC20',1,'USDT',0,'2022-11-16 23:39:48',1,1,0.00,'TVqXJsrDJLwr1LdTTidg98u2qdcWyBze3Z',50.00,1,1,0.00,0.00,10.00,10000.00,0.00,0.00,'ERC20','0xC2C56e935ECE4c1C45443EE6a881bfD9C4B45AD4',0,1,2188.5600,0.0000,'adf50e05056936361a58d3016156c14bf81966a3df85c7bc60bcb4b38150a690'),(32,'eth','ETH',1,'ETH',0,'2022-11-16 23:40:18',1,1,0.00,'0x25493061dfD2468Ae09B6104e602430e5B71a59d',50.00,1,1,0.00,0.00,10.00,10000.00,0.00,0.00,'','',0,1,0.0000,0.0000,NULL),(38,'usdt','TRC20',1,'测试',0,'2022-11-23 22:28:28',1,1,0.00,'TJJ4y5Rgz2xHTb9yQNzmPMjYVo1uitfrBV',0.00,1,1,0.00,0.00,0.00,0.00,0.00,0.00,'','',167,0,1.0000,3.3564,'ea3c630996fde966a7bddf965d2b4a854a0df2e0e96c1a4a1326b00e4ed3c94d'),(40,'usdt','trc',1,'usdt',0,'2022-11-10 20:23:04',1,1,0.00,'TGUvTDiBDLiEYwzbbSUkhMihm5Gz3sH37H',0.00,1,1,0.00,0.00,0.00,0.00,0.00,0.00,'','',165,0,0.0000,0.0000,'018bb398b703fa0008f60586870549e4ddbff53a9baf9c7f22cdcce21752dc71'),(42,'usdt','TRC20',1,'USDT',0,'2022-11-10 21:21:56',1,1,0.00,'TV36tSeAiTS957yNqNK3T8GF3D5gUF5Gxq',50.00,1,1,0.00,0.00,10.00,10000.00,0.00,0.00,'ERC20','0x7Aa64235593F3f3EFB0852B782c56477987096c7',286,0,2.0000,0.0000,NULL),(43,'usdt','TRC20',1,'USDT',0,'2022-11-10 21:32:36',1,1,0.00,'TYCpbwd3yQs2qUcafJdX1NJqKdDkJoHnFv',50.00,1,1,0.00,0.00,10.00,10000.00,0.00,0.00,'ERC20','0x11f8B50Fe37af2Af1F1211E991Ba4649AeBe2376',287,0,202.5092,0.0000,NULL),(44,'usdt','TRC20',1,'USDT',0,'2022-11-10 21:37:22',1,1,0.00,'TXh8F8GNLgTpeAdbFW6ybBGHth5BABkSMp',50.00,1,1,0.00,0.00,10.00,10000.00,0.00,0.00,'ERC20','0x9BbD32EE3d2e0C6A0a9A07Fe4A3FC59cc5E67327',288,0,0.0000,0.0000,NULL),(45,'usdt','TRC20',1,'USDT',0,'2022-11-10 21:40:33',1,1,0.00,'TGSz8Lqr3mndTYhSyK2JoWeEfUoWcbBUh5',50.00,1,1,0.00,0.00,10.00,10000.00,0.00,0.00,'ERC20','0x64A78Fa80600550346E145a8B4CeB4e438c4e98C',289,0,0.0000,0.0000,NULL),(46,'usdt','TRC20',1,'USDT',0,'2022-11-12 15:39:55',1,1,0.00,'TEwtmUXttCG9YaYtfhU8d7quKneQuPkFTR',50.00,1,1,0.00,0.00,10.00,10000.00,0.00,0.00,'ERC20','0xD75BEa4D9818e79b4c956d8E6b5835F277aF4F59',333,0,5509.3931,51.8589,NULL),(47,'usdt','TRC20',1,'USDT',0,'2022-11-14 21:34:23',1,1,0.00,'TFGC6McycUBVLjnFXxyk48sRY1cdtPoUBu',50.00,1,1,0.00,0.00,10.00,10000.00,0.00,0.00,'ERC20','0x845Bf1cE6Cf329cB5dE458588654891FaCe80a62',430,0,0.0000,0.0000,NULL),(48,'usdt','TRC20',1,'USDT',0,'2022-11-21 20:57:45',1,1,0.00,'TSxXvWd83yEwqAZP9Jwzd3zuK9tgVxgC3U',50.00,1,1,0.00,5.00,10.00,10000.00,0.00,0.00,'ERC20','0x88c6B4eEF1F947B2e151e3899c38bfE9c8724Ab1',504,0,0.0000,0.0000,NULL),(49,'usdt','TRC20',1,'USDT',0,'2022-11-23 21:03:58',1,1,0.00,'TJ7CPJagdvz3BL4UqtJkqHWe83uRKjyVGR',50.00,1,1,0.00,5.00,10.00,10000.00,0.00,0.00,'ERC20','0x2995A88326EebF3D4e0399f49c9493EeA48ECA5C',513,0,0.0000,0.0000,NULL);
/*!40000 ALTER TABLE `tw_coin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tw_coin_comment`
--

DROP TABLE IF EXISTS `tw_coin_comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tw_coin_comment` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(10) unsigned NOT NULL,
  `coinname` varchar(50) NOT NULL,
  `content` varchar(500) NOT NULL,
  `cjz` int(11) unsigned NOT NULL,
  `tzy` int(11) unsigned NOT NULL,
  `xcd` int(11) unsigned NOT NULL,
  `sort` int(11) unsigned NOT NULL,
  `addtime` int(10) unsigned NOT NULL,
  `endtime` int(11) unsigned NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `status` (`status`) USING BTREE,
  KEY `userid` (`userid`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tw_coin_comment`
--

LOCK TABLES `tw_coin_comment` WRITE;
/*!40000 ALTER TABLE `tw_coin_comment` DISABLE KEYS */;
/*!40000 ALTER TABLE `tw_coin_comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tw_coin_json`
--

DROP TABLE IF EXISTS `tw_coin_json`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tw_coin_json` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `data` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `sort` int(11) unsigned NOT NULL DEFAULT '0',
  `addtime` int(11) unsigned NOT NULL DEFAULT '0',
  `endtime` int(11) unsigned NOT NULL DEFAULT '0',
  `status` int(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`) USING BTREE,
  KEY `status` (`status`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tw_coin_json`
--

LOCK TABLES `tw_coin_json` WRITE;
/*!40000 ALTER TABLE `tw_coin_json` DISABLE KEYS */;
/*!40000 ALTER TABLE `tw_coin_json` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tw_config`
--

DROP TABLE IF EXISTS `tw_config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tw_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '记录ID',
  `webname` varchar(225) NOT NULL COMMENT '网站名称',
  `webtitle` varchar(225) NOT NULL COMMENT '网络标题',
  `weblogo` varchar(225) NOT NULL COMMENT '手机端网站logo',
  `waplogo` varchar(225) NOT NULL COMMENT 'PC端网站logo',
  `webswitch` int(11) NOT NULL COMMENT '网站开关1开2关',
  `websildea` varchar(225) NOT NULL COMMENT '手机端轮播图1',
  `websildeb` varchar(225) NOT NULL COMMENT '手机端轮播图2',
  `websildec` varchar(225) NOT NULL COMMENT '手机端轮播图2',
  `wapsilded` varchar(255) DEFAULT NULL,
  `webissue` varchar(225) NOT NULL COMMENT '手机端新币认购图片',
  `webkj` varchar(225) NOT NULL COMMENT '手机端矿机首页图片',
  `wapsildea` varchar(225) NOT NULL COMMENT 'PC端轮播图1',
  `wapsildeb` varchar(225) NOT NULL COMMENT 'PC端轮播图2',
  `wapsildec` varchar(225) NOT NULL COMMENT 'PC端轮播图3',
  `wapissue` varchar(225) NOT NULL COMMENT 'PC端新币认购图片',
  `wapkj` varchar(225) NOT NULL COMMENT 'PC端矿机首页图片',
  `webtjimgs` varchar(225) NOT NULL COMMENT '手机端推荐页面logo图片',
  `waptjimgs` varchar(225) NOT NULL COMMENT 'PC端推荐页面logo图片',
  `smsemail` varchar(60) NOT NULL COMMENT '短信发送邮箱',
  `emailcode` varchar(60) NOT NULL COMMENT '邮箱授权码',
  `smtpdz` varchar(200) DEFAULT NULL COMMENT 'smtp服务器地址',
  `smstemple` varchar(225) NOT NULL COMMENT '短信验证码模板',
  `tgtext` varchar(225) NOT NULL COMMENT '推荐页面推广语',
  `gfemail` varchar(100) NOT NULL COMMENT '官方客服邮箱',
  `footertext` varchar(225) NOT NULL COMMENT 'PC端下方文字',
  `regswitch` int(11) NOT NULL COMMENT '注册开关',
  `tbswitch` int(11) NOT NULL COMMENT '提币开关',
  `regjl` int(11) NOT NULL COMMENT '注册是赠送体验矿机',
  `tymoney` decimal(20,8) NOT NULL COMMENT '注册赠送的体验金',
  `versionkey` text COMMENT '不可修改,否则报错',
  `sms_url` text COMMENT '短信提交网关',
  `sms_id` varchar(100) DEFAULT NULL COMMENT '短信商户ID',
  `sms_key` varchar(300) DEFAULT NULL COMMENT '短信商户密钥',
  `startmoney` decimal(11,4) DEFAULT '100.0000' COMMENT '自动归集起始金额',
  `shouxufeiid` varchar(500) DEFAULT NULL COMMENT 'TRX手续费账户',
  `guijiid` varchar(300) DEFAULT NULL COMMENT '自动归集收款账户',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COMMENT='网站配置表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tw_config`
--

LOCK TABLES `tw_config` WRITE;
/*!40000 ALTER TABLE `tw_config` DISABLE KEYS */;
INSERT INTO `tw_config` VALUES (1,'MBN','MORBION','635fe396d77bf.png','635fe346713e9.png',1,'62ac7f6a64120.png','62ac7f72d5c2d.png','62ac7f79b3703.png','629c72e4af37b.png','629733ae57b0f.png','629734cf34b70.png','629c72d268234.jpeg','629c72d72bea1.jpeg','629c72dbe18e2.jpeg','61517780a59b2.jpg','62973219c958a.png','635fe33dbf2f6.png','635fe32e8fcbe.png','xiaojianjian2137@163.com','NPXWBCTFWJTPTQPD','smtp.163.com','【MBN】Your Verification code is','','88888888@qq.com','',1,1,2,0.00000000,'5oqA5pyvdGVsZWdyYW06bHVja3lzdGFydHM','api.wftqm.com/api/sms/mtsend','eiRnbASDaWf','7OBDFHGDLA4fP',10.0000,'48faa50a85963250ab98da1ac9f3470','TJxpGKFEZSDonzctTNoS5uiZ8My8atRjBD');
/*!40000 ALTER TABLE `tw_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tw_content`
--

DROP TABLE IF EXISTS `tw_content`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tw_content` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `title` varchar(225) NOT NULL COMMENT '标题',
  `img` varchar(225) NOT NULL COMMENT '公告图片',
  `content` text NOT NULL COMMENT '内容',
  `addtime` datetime NOT NULL COMMENT '添加时间',
  `status` int(11) NOT NULL COMMENT '状态1显示2隐藏',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COMMENT='公告内容';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tw_content`
--

LOCK TABLES `tw_content` WRITE;
/*!40000 ALTER TABLE `tw_content` DISABLE KEYS */;
/*!40000 ALTER TABLE `tw_content` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tw_ctmarket`
--

DROP TABLE IF EXISTS `tw_ctmarket`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tw_ctmarket` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `coinname` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL COMMENT '市场名称',
  `symbol` varchar(50) NOT NULL COMMENT '交易对',
  `title` varchar(50) NOT NULL COMMENT 'BTC/USDT格式',
  `status` int(11) NOT NULL COMMENT '状态1正常2禁用',
  `state` int(11) NOT NULL DEFAULT '1' COMMENT '交易状态1正常2禁止',
  `sort` int(11) NOT NULL COMMENT '排序',
  `addtime` datetime NOT NULL COMMENT '添加时间',
  `logo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `name` (`name`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC COMMENT='合约交易对配置';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tw_ctmarket`
--

LOCK TABLES `tw_ctmarket` WRITE;
/*!40000 ALTER TABLE `tw_ctmarket` DISABLE KEYS */;
INSERT INTO `tw_ctmarket` VALUES (2,'btc','btc_usdt','btcusdt','BTC/USDT',1,1,2,'2022-11-01 00:13:21','/xm/1613786496962262.png'),(3,'eth','eth_usdt','ethusdt','ETH/USDT',1,1,3,'2022-11-01 13:37:58','/xm/1613786513998262.png'),(4,'eos','eos_usdt','eosusdt','EOS/USDT',1,1,9,'2022-11-01 13:38:12','/xm/5f8738fd439bc57.png'),(5,'doge','doge_usdt','dogeusdt','DOGE/USDT',1,1,4,'2021-08-31 17:19:10','/xm/doge.png'),(6,'bch','bch_usdt','bchusdt','BCH/USDT',1,1,5,'2021-09-20 23:51:59','/xm/5fc.png'),(7,'ltc','ltc_usdt','ltcusdt','LTC/USDT',1,1,6,'2021-08-31 17:20:08','/xm/5f87397132a8b02.png'),(8,'trx','trx_usdt','trxusdt','TRX/USDT',2,2,7,'2022-11-04 21:40:54','/xm/trx.png'),(1,'mbn','mbn_usdt','mbnusdt','MBN/USDT',2,2,1,'2022-11-08 23:46:12','/xm/mbn.png');
/*!40000 ALTER TABLE `tw_ctmarket` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tw_daohang`
--

DROP TABLE IF EXISTS `tw_daohang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tw_daohang` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `lang` varchar(20) CHARACTER SET utf8mb4 NOT NULL DEFAULT 'zh-cn',
  `name` varchar(30) CHARACTER SET utf8mb4 NOT NULL COMMENT '名称',
  `title` varchar(30) CHARACTER SET utf8mb4 NOT NULL DEFAULT '' COMMENT '名称',
  `url` varchar(100) CHARACTER SET utf8mb4 NOT NULL DEFAULT '' COMMENT 'url',
  `sort` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `addtime` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '添加时间',
  `endtime` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '编辑时间',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '状态',
  `get_login` tinyint(1) NOT NULL DEFAULT '0',
  `access` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=gbk ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tw_daohang`
--

LOCK TABLES `tw_daohang` WRITE;
/*!40000 ALTER TABLE `tw_daohang` DISABLE KEYS */;
INSERT INTO `tw_daohang` VALUES (1,'zh-cn','Trade_cn','现货交易','/Trade',1,1532772516,0,1,0,0),(2,'en-us','Trade_cn','TRADE','/Trade',1,1532772535,0,1,0,0),(3,'zh-cn','C2C_cn','C2C交易','/Exchange',2,1532772558,0,1,0,0),(4,'en-us','C2C_en','C2C','/Exchange',2,1532772569,0,1,0,0),(5,'en-us','ICO_en','ICO','/Issue',9,1532772585,0,1,0,0),(6,'zh-cn','ICO_cn','新币预热','/Issue',9,1532772596,0,1,0,0),(7,'zh-cn','VOTE_cn','投票上币','/Vote',7,1532772649,0,0,0,0),(8,'en-us','VOTE_en','VOTE','/Vote',7,1532772675,0,0,0,0),(11,'zh-cn','Help_cn','帮助中心','/Support',99,1532772738,0,1,0,0),(12,'en-us','Help_en','HELP','/Support',99,1532772753,0,1,0,0),(15,'zh-cn','Financing_cn','币生币','/Financing',5,1541438000,0,1,0,0),(16,'en-us','Financing_en','DEPOSIT REWARD','/Financing',5,1541472739,0,1,0,0),(17,'zh-cn','OTC交易','OTC交易','/Markethouse',3,1597053925,0,1,0,0),(18,'en-us','OTC','OTC','/Markethouse',3,1597054768,0,1,0,0),(19,'zh-cn','矿池挖矿','矿池挖矿','/Orepool',6,1597540099,0,1,0,0),(20,'en-us','Orepool','Orepool','/Orepool',6,1597540154,0,1,0,0);
/*!40000 ALTER TABLE `tw_daohang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tw_djprofit`
--

DROP TABLE IF EXISTS `tw_djprofit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tw_djprofit` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '记录ID',
  `uid` int(11) NOT NULL COMMENT '会员ID',
  `username` varchar(30) NOT NULL COMMENT '会员账号',
  `num` decimal(12,6) NOT NULL COMMENT '冻结额度',
  `coin` varchar(30) NOT NULL COMMENT '币名称',
  `status` int(11) NOT NULL COMMENT '状态1冻结中2已释放',
  `addtime` datetime NOT NULL COMMENT '冻结时间',
  `addday` date NOT NULL COMMENT '冻结日期',
  `thawtime` datetime NOT NULL COMMENT '解冻结时间',
  `thawday` date NOT NULL COMMENT '解冻日期',
  `remark` varchar(225) NOT NULL COMMENT '冻结说明',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='数字币冻结记录表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tw_djprofit`
--

LOCK TABLES `tw_djprofit` WRITE;
/*!40000 ALTER TABLE `tw_djprofit` DISABLE KEYS */;
/*!40000 ALTER TABLE `tw_djprofit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tw_footer`
--

DROP TABLE IF EXISTS `tw_footer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tw_footer` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `lang` varchar(20) NOT NULL DEFAULT 'zh-cn',
  `name` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL DEFAULT '',
  `url` varchar(200) NOT NULL DEFAULT '',
  `img` varchar(200) NOT NULL DEFAULT '',
  `type` varchar(200) NOT NULL DEFAULT '',
  `remark` varchar(50) NOT NULL DEFAULT '',
  `sort` int(11) unsigned NOT NULL DEFAULT '0',
  `addtime` int(11) unsigned NOT NULL DEFAULT '0',
  `endtime` int(11) unsigned NOT NULL DEFAULT '0',
  `status` int(4) NOT NULL DEFAULT '0',
  `get_login` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`) USING BTREE,
  KEY `status` (`status`) USING BTREE,
  KEY `name` (`name`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tw_footer`
--

LOCK TABLES `tw_footer` WRITE;
/*!40000 ALTER TABLE `tw_footer` DISABLE KEYS */;
INSERT INTO `tw_footer` VALUES (1,'zh-cn','About_cn','关于我们','/Support/index/articles/cid/6/id/15.html','','','',0,1532768022,0,1,0),(2,'en-us','About_en','About us','/Support/index/articles/cid/6/id/15.html','','','',0,1532768090,0,1,0),(3,'zh-cn','Help_cn','帮助中心','/Support/index.html','','','',0,1532768213,0,1,0),(4,'en-us','Help_en','Help center','/Support/index.html','','','',0,1532768248,0,1,0),(5,'zh-cn','Fees_cn','交易费率','/Support/Pages/fee.html','','','',0,1532768275,0,1,0),(6,'en-us','Fees_en','Fees','/Support/Pages/fee.html','','','',0,1532768435,0,1,0),(7,'zh-cn','Token_cn','上币申请','/Support/index/articles/cid/6/id/22.html','','','',0,1532768722,0,1,0),(8,'en-us','Token_en','Business cooperation','/Support/index/articles/cid/6/id/22.html','','','',0,1532768911,0,1,0),(9,'zh-cn','Legal_cn','用户协议','/Support/index/articles/cid/7/id/18.html','','','',0,1532769282,0,1,0),(10,'en-us','Legal_en','User Agreement','/Support/index/articles/cid/7/id/18.html','','','',0,1532769307,0,1,0),(11,'zh-cn','Contact_cn','联系我们','/Support/index/articles/cid/6/id/16.html','','','',0,1532769356,0,1,0),(12,'en-us','Contact_en','Contact Us','/Support/index/articles/cid/6/id/16.html','','','',0,1532769373,0,1,0);
/*!40000 ALTER TABLE `tw_footer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tw_hyorder`
--

DROP TABLE IF EXISTS `tw_hyorder`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tw_hyorder` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `uid` int(11) NOT NULL COMMENT '会员ID',
  `username` varchar(60) NOT NULL COMMENT '会员账号',
  `num` float(10,2) NOT NULL COMMENT '投资金额',
  `buy_orblance` decimal(11,4) NOT NULL DEFAULT '0.0000' COMMENT '买后余额',
  `hybl` float(10,2) NOT NULL COMMENT '盈亏比例',
  `hyzd` int(11) NOT NULL COMMENT '合约涨跌1买涨2买跌',
  `coinname` varchar(30) NOT NULL COMMENT '交易对',
  `status` int(11) NOT NULL COMMENT '状态：1待结算2已结算3无效结算',
  `is_win` int(11) NOT NULL COMMENT '盈亏状态：1盈利2亏损',
  `buytime` datetime NOT NULL COMMENT '购买时间',
  `selltime` datetime NOT NULL COMMENT '结算时间',
  `intselltime` int(11) NOT NULL COMMENT '结算时间戳',
  `buyprice` decimal(12,6) NOT NULL COMMENT '建仓单价',
  `sellprice` decimal(12,6) NOT NULL COMMENT '结算单价',
  `ploss` decimal(12,6) NOT NULL COMMENT '盈亏金额',
  `time` int(11) NOT NULL COMMENT '结算分钟数',
  `kongyk` int(11) NOT NULL COMMENT '控制盈亏1盈利2亏损0未指定',
  `invit` varchar(60) NOT NULL COMMENT '邀请码(上级)',
  `tznum` int(11) NOT NULL DEFAULT '0' COMMENT '0未通知，1已通知',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='合约订单表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tw_hyorder`
--

LOCK TABLES `tw_hyorder` WRITE;
/*!40000 ALTER TABLE `tw_hyorder` DISABLE KEYS */;
/*!40000 ALTER TABLE `tw_hyorder` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tw_hysetting`
--

DROP TABLE IF EXISTS `tw_hysetting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tw_hysetting` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `hy_sxf` float(10,2) NOT NULL COMMENT '交易手续费',
  `hy_time` varchar(225) NOT NULL COMMENT '合约时间组',
  `hy_ykbl` varchar(225) NOT NULL COMMENT '盈亏比例组',
  `hy_tzed` varchar(225) NOT NULL COMMENT '投资额度组',
  `hy_kstime` varchar(225) NOT NULL COMMENT '开市时间',
  `hy_ksid` varchar(225) NOT NULL COMMENT '亏损ID组',
  `hy_ylid` varchar(225) NOT NULL COMMENT '盈利ID组',
  `hy_fkgl` varchar(225) NOT NULL COMMENT '风控概率组',
  `hy_min` float(10,2) NOT NULL COMMENT '合约最低投资额',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COMMENT='合约参数';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tw_hysetting`
--

LOCK TABLES `tw_hysetting` WRITE;
/*!40000 ALTER TABLE `tw_hysetting` DISABLE KEYS */;
INSERT INTO `tw_hysetting` VALUES (1,2.00,'1,2,3,5,10','83,90,92,95,98','100,200,500,1000,2000,5000','00:00~24:00','221','203|242|309|307|286|330|328|325|324|323|322|329|450|310|510|327|326|331','30',50.00);
/*!40000 ALTER TABLE `tw_hysetting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tw_issue`
--

DROP TABLE IF EXISTS `tw_issue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tw_issue` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '记录ID',
  `name` varchar(255) NOT NULL COMMENT '认购项目标题',
  `coinname` varchar(50) NOT NULL COMMENT '认购币名称',
  `buycoin` varchar(50) NOT NULL COMMENT '购买币名称',
  `num` decimal(20,6) unsigned NOT NULL COMMENT '发行数量',
  `price` decimal(20,6) unsigned NOT NULL COMMENT '发行单价',
  `lixi` decimal(11,2) NOT NULL DEFAULT '0.00' COMMENT '每日利息增幅',
  `sellnum` decimal(20,6) unsigned NOT NULL COMMENT '已售数量',
  `ysnum` decimal(20,6) unsigned NOT NULL COMMENT '预设已售数量',
  `allmax` decimal(20,6) unsigned NOT NULL COMMENT '个人认购量上限',
  `min` decimal(20,6) unsigned NOT NULL COMMENT '最小购买值',
  `max` decimal(20,6) unsigned NOT NULL COMMENT '最大购买值',
  `lockday` int(11) unsigned NOT NULL COMMENT '锁仓周期',
  `tian` int(11) unsigned NOT NULL COMMENT '认购周期',
  `imgs` varchar(225) NOT NULL COMMENT '币图片',
  `content` text NOT NULL COMMENT '币说明',
  `addtime` datetime NOT NULL COMMENT '发布日期',
  `starttime` datetime NOT NULL COMMENT '开始认购时间',
  `finishtime` datetime NOT NULL COMMENT '结束认购时间',
  `status` int(11) NOT NULL COMMENT '状态1正常2隐藏',
  `state` int(11) NOT NULL COMMENT '状态1启用认购2禁止认购',
  `jlcoin` varchar(30) NOT NULL COMMENT '奖励币种名称',
  `one_jl` float(10,2) NOT NULL COMMENT '一代奖励比例',
  `two_jl` float(10,2) NOT NULL COMMENT '二代奖励比例',
  `three_jl` float(10,2) NOT NULL COMMENT '三代奖励比例',
  `yuan_price` decimal(11,6) NOT NULL DEFAULT '0.000000' COMMENT '原始单价',
  PRIMARY KEY (`id`) USING BTREE,
  KEY `name` (`name`) USING BTREE,
  KEY `coinname` (`coinname`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT COMMENT='认购发行表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tw_issue`
--

LOCK TABLES `tw_issue` WRITE;
/*!40000 ALTER TABLE `tw_issue` DISABLE KEYS */;
INSERT INTO `tw_issue` VALUES (1,'TCC币第一期认购','ttc','usdt',20000000.000000,0.100000,0.00,172200.000000,1000000.000000,10000.000000,100.000000,10000.000000,90,15,'6141abda8365f.png','<span>TCC币是由华尔街华人风控联合发起，限量发行1亿个</span><span>，2021年9月18日向全球起发起第一期认购，第一期发行量20000000，为期15天，认购币冻结90天自动释放，释放后</span><span>币币市场开放TCC/USDT交易对</span><span>，合约市场开放TCC/USDT交易对进行交易，价格预计是认购单价的10倍.<span>TCC币是由华尔街华人风控联合发起，限量发行1亿个</span><span>，2021年9月18日向全球起发起第一期认购，第一期发行量20000000，为期15天，认购币冻结90天自动释放，释放后</span><span>币币市场开放TCC/USDT交易对</span><span>，合约市场开放TCC/USDT交易对进行交易，价格预计是认购单价的10倍.</span><span>TCC币是由华尔街华人风控联合发起，限量发行1亿个</span><span>，2021年9月18日向全球起发起第一期认购，第一期发行量20000000，为期15天，认购币冻结90天自动释放，释放后</span><span>币币市场开放TCC/USDT交易对</span><span>，合约市场开放TCC/USDT交易对进行交易，价格预计是认购单价的10倍.</span><span>TCC币是由华尔街华人风控联合发起，限量发行1亿个</span><span>，2021年9月18日向全球起发起第一期认购，第一期发行量20000000，为期15天，认购币冻结90天自动释放，释放后</span><span>币币市场开放TCC/USDT交易对</span><span>，合约市场开放TCC/USDT交易对进行交易，价格预计是认购单价的10倍.</span></span>','2021-09-24 11:19:50','2021-09-15 00:00:00','2021-09-30 00:00:00',2,1,'usdz',1.00,0.50,0.30,0.000000),(2,'TTC币第二期认购','mbn','usdt',30000000.000000,1.200000,0.00,0.000000,0.000000,50000.000000,100.000000,10000.000000,120,20,'6141b93748061.png','morbion币是由华尔街华人风控联合发起，限量发行1亿个，2021年9月18日向全球起发起第一期认购，第一期发行量20000000，为期15天，认购币冻结90天自动释放，释放后币币市场开放TCC/USDT交易对，合约市场开放TCC/USDT交易对进行交易，价格预计是认购单价的10倍.','2022-11-08 23:57:11','2021-10-05 00:00:00','2021-10-25 00:00:00',2,1,'eth',1.00,0.50,0.30,0.000000),(3,'MORBION','mbn','usdt',999999999.000000,3.638320,29.50,57389819.381968,15000000.000000,9999999.000000,100.000000,9999999999999.000000,90,180,'635fc4ba73dcd.png','<h2 style=\"color:#74777A;text-indent:0pt;background-color:#FFFFFF;font-family:;\">\r\n	Industry background\r\n</h2>\r\n<p>\r\n	<span>MORBION coins are jointly launched by Mobie Exchange, with a limited issuance of 100 million. On October 31, 2022, the first subscription will be launched worldwide. The first subscription will have a circulation of 999999999 for 180 days. The subscription coins will be automatically released after 90 days of freezing. After the release, the currency market will open MBN/USDT trading pairs, and the contract market will open MBN/USDT trading pairs for trading. The price is expected to be 10 times of the subscription unit price</span>\r\n</p>','2022-11-26 01:32:15','2022-10-31 11:02:32','2023-04-29 11:02:32',1,1,'usdt',0.00,0.00,0.00,0.140000);
/*!40000 ALTER TABLE `tw_issue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tw_issue_log`
--

DROP TABLE IF EXISTS `tw_issue_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tw_issue_log` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '记录ID',
  `pid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '认购项目ID',
  `uid` int(11) unsigned NOT NULL COMMENT '会员ID',
  `account` varchar(60) NOT NULL COMMENT '会员账号',
  `name` varchar(255) NOT NULL COMMENT '项目名称',
  `coinname` varchar(50) NOT NULL COMMENT '认购币名称',
  `buycoin` varchar(50) NOT NULL COMMENT '支付币名称',
  `price` decimal(20,6) unsigned NOT NULL COMMENT '认购单价',
  `lixi_money` decimal(11,6) NOT NULL DEFAULT '0.000000' COMMENT '利息',
  `yugu` decimal(11,4) NOT NULL DEFAULT '0.0000' COMMENT '预估收益',
  `num` decimal(20,6) unsigned NOT NULL COMMENT '认购数量',
  `mum` decimal(20,6) unsigned NOT NULL COMMENT '支付金额',
  `lockday` int(11) unsigned NOT NULL COMMENT '冻结数量',
  `addtime` datetime NOT NULL COMMENT '认购时间',
  `endtime` datetime NOT NULL COMMENT '释放时间',
  `endday` date NOT NULL COMMENT '释放日期',
  `status` int(4) NOT NULL COMMENT '状态1冻结中2已解冻',
  `jiesuan` int(1) NOT NULL DEFAULT '0' COMMENT '收益是否结算到余额',
  PRIMARY KEY (`id`) USING BTREE,
  KEY `userid` (`uid`) USING BTREE,
  KEY `status` (`status`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=226 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT COMMENT='认购记录表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tw_issue_log`
--

LOCK TABLES `tw_issue_log` WRITE;
/*!40000 ALTER TABLE `tw_issue_log` DISABLE KEYS */;
INSERT INTO `tw_issue_log` VALUES (218,3,180,'444444@qq.com','MORBION','mbn','usdt',0.140000,99999.999999,371700.0000,100000.000000,14000.000000,90,'2022-10-31 20:59:30','2023-01-29 20:59:30','2023-01-29',1,0),(219,3,180,'444444@qq.com','MORBION','mbn','usdt',0.140000,690.665976,15539.9845,111111.000000,15555.540000,90,'2022-11-01 00:16:12','2023-01-30 00:16:12','2023-01-30',2,1),(220,3,186,'740026296@qq.com','MORBION','mbn','usdt',0.140000,10325.000000,37170.0000,10000.000000,1400.000000,90,'2022-11-01 00:36:10','2023-01-30 00:36:10','2023-01-30',1,0),(221,3,186,'740026296@qq.com','MORBION','mbn','usdt',0.140000,10325.000000,37170.0000,10000.000000,1400.000000,90,'2022-11-01 13:28:59','2023-01-30 13:28:59','2023-01-30',1,0),(222,3,180,'444444@qq.com','MORBION','mbn','usdt',0.140000,1032.500000,3717.0000,1000.000000,140.000000,90,'2022-11-01 16:40:21','2023-01-30 16:40:21','2023-01-30',1,0),(223,3,174,'heima1@gmail.com','MORBION','mbn','usdt',0.140000,90.860000,371.7000,100.000000,14.000000,90,'2022-11-04 23:20:14','2023-02-02 23:20:14','2023-02-02',1,0),(224,3,174,'heima1@gmail.com','MORBION','mbn','usdt',0.140000,908.600000,3717.0000,1000.000000,140.000000,90,'2022-11-04 23:20:30','2023-02-02 23:20:30','2023-02-02',1,0),(225,3,286,'杜总286','MORBION','mbn','usdt',0.317156,11227.322400,84204.9180,10000.000000,3171.560000,90,'2022-11-14 16:50:31','2023-02-12 16:50:31','2023-02-12',1,0);
/*!40000 ALTER TABLE `tw_issue_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tw_kjorder`
--

DROP TABLE IF EXISTS `tw_kjorder`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tw_kjorder` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '记录ID',
  `kid` int(11) NOT NULL COMMENT '矿机ID',
  `sharbltxt` int(11) NOT NULL COMMENT '共享矿机识别号',
  `type` int(11) NOT NULL COMMENT '矿机类型1独资2共享',
  `sharebl` float(10,2) NOT NULL COMMENT '共享的占有比例',
  `uid` int(11) NOT NULL COMMENT '会员ID',
  `username` varchar(30) NOT NULL COMMENT '会员账号',
  `kjtitle` varchar(225) NOT NULL COMMENT '矿机名称',
  `imgs` varchar(225) DEFAULT NULL COMMENT '矿机图片',
  `status` int(11) NOT NULL COMMENT '矿机状态1正常2停止产币3过期',
  `cycle` int(11) NOT NULL COMMENT '矿机周期',
  `synum` int(11) NOT NULL COMMENT '收益次数',
  `outtype` int(11) NOT NULL COMMENT '产出类型1按产值2按币',
  `outcoin` varchar(30) NOT NULL COMMENT '产出币种',
  `outnum` decimal(12,6) NOT NULL COMMENT '产出的币量',
  `outusdt` decimal(12,6) NOT NULL COMMENT '按产币的量',
  `djout` int(11) NOT NULL COMMENT '产币冻结1否2是',
  `djnum` int(11) NOT NULL COMMENT '产币冻结天数',
  `addtime` datetime NOT NULL COMMENT '购买日期',
  `endtime` datetime NOT NULL COMMENT '过期时间',
  `intaddtime` int(11) NOT NULL COMMENT '购买时间戳',
  `intendtime` int(11) NOT NULL COMMENT '到期时间戳',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COMMENT='矿机订单表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tw_kjorder`
--

LOCK TABLES `tw_kjorder` WRITE;
/*!40000 ALTER TABLE `tw_kjorder` DISABLE KEYS */;
INSERT INTO `tw_kjorder` VALUES (2,19,0,1,0.00,446,'8790558251','Free mining machine','629a2098a5cc5.png',1,14,2,2,'usdt',2.000000,0.000000,1,0,'2022-11-15 22:34:17','2022-11-29 22:34:17',1668522857,1669732457),(3,19,0,1,0.00,333,'陈总333','Free mining machine','629a2098a5cc5.png',1,14,3,2,'usdt',2.000000,0.000000,1,0,'2022-11-16 18:16:20','2022-11-30 18:16:20',1668593780,1669803380),(4,19,0,1,0.00,287,'王总287','Free mining machine','629a2098a5cc5.png',1,14,4,2,'usdt',2.000000,0.000000,1,0,'2022-11-17 20:24:55','2022-12-01 20:24:55',1668687895,1669897495),(5,20,0,1,0.00,334,'9191916666','ETH mining machine 1st','629a2088d6ce8.png',1,180,175,1,'eth',0.000000,6.100000,1,0,'2022-11-22 19:47:48','2023-05-21 19:47:48',1669117668,1684669668),(6,20,0,1,0.00,167,'13888888888','ETH mining machine 1st','629a2088d6ce8.png',1,180,175,1,'eth',0.000000,6.100000,1,0,'2022-11-22 20:34:50','2023-05-21 20:34:50',1669120490,1684672490);
/*!40000 ALTER TABLE `tw_kjorder` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tw_kjprofit`
--

DROP TABLE IF EXISTS `tw_kjprofit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tw_kjprofit` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '记录ID',
  `uid` int(11) NOT NULL COMMENT '会员ID',
  `username` varchar(30) NOT NULL COMMENT '会员账号',
  `kid` int(11) NOT NULL COMMENT '矿机ID',
  `ktitle` varchar(225) NOT NULL COMMENT '矿机名称',
  `num` decimal(12,6) NOT NULL COMMENT '收益金额',
  `coin` varchar(30) NOT NULL COMMENT '收益币种',
  `addtime` datetime NOT NULL COMMENT '收益时间',
  `day` date NOT NULL COMMENT '收益日期',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COMMENT='矿机收益表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tw_kjprofit`
--

LOCK TABLES `tw_kjprofit` WRITE;
/*!40000 ALTER TABLE `tw_kjprofit` DISABLE KEYS */;
INSERT INTO `tw_kjprofit` VALUES (1,446,'8790558251',2,'Free mining machine',2.000000,'usdt','2022-11-16 00:00:02','2022-11-16'),(2,446,'8790558251',2,'Free mining machine',2.000000,'usdt','2022-11-17 00:00:01','2022-11-17'),(3,333,'陈总333',3,'Free mining machine',2.000000,'usdt','2022-11-17 00:00:01','2022-11-17'),(4,446,'8790558251',2,'Free mining machine',2.000000,'usdt','2022-11-18 00:00:01','2022-11-18'),(5,333,'陈总333',3,'Free mining machine',2.000000,'usdt','2022-11-18 00:00:01','2022-11-18'),(6,287,'王总287',4,'Free mining machine',2.000000,'usdt','2022-11-18 00:00:01','2022-11-18'),(7,446,'8790558251',2,'Free mining machine',2.000000,'usdt','2022-11-19 00:00:01','2022-11-19'),(8,333,'陈总333',3,'Free mining machine',2.000000,'usdt','2022-11-19 00:00:01','2022-11-19'),(9,287,'王总287',4,'Free mining machine',2.000000,'usdt','2022-11-19 00:00:01','2022-11-19'),(10,446,'8790558251',2,'Free mining machine',2.000000,'usdt','2022-11-20 00:00:01','2022-11-20'),(11,333,'陈总333',3,'Free mining machine',2.000000,'usdt','2022-11-20 00:00:01','2022-11-20'),(12,287,'王总287',4,'Free mining machine',2.000000,'usdt','2022-11-20 00:00:01','2022-11-20'),(13,446,'8790558251',2,'Free mining machine',2.000000,'usdt','2022-11-21 00:00:01','2022-11-21'),(14,333,'陈总333',3,'Free mining machine',2.000000,'usdt','2022-11-21 00:00:01','2022-11-21'),(15,287,'王总287',4,'Free mining machine',2.000000,'usdt','2022-11-21 00:00:01','2022-11-21'),(16,446,'8790558251',2,'Free mining machine',2.000000,'usdt','2022-11-22 00:00:01','2022-11-22'),(17,333,'陈总333',3,'Free mining machine',2.000000,'usdt','2022-11-22 00:00:01','2022-11-22'),(18,287,'王总287',4,'Free mining machine',2.000000,'usdt','2022-11-22 00:00:01','2022-11-22'),(19,446,'8790558251',2,'Free mining machine',2.000000,'usdt','2022-11-23 00:00:01','2022-11-23'),(20,333,'陈总333',3,'Free mining machine',2.000000,'usdt','2022-11-23 00:00:01','2022-11-23'),(21,287,'王总287',4,'Free mining machine',2.000000,'usdt','2022-11-23 00:00:01','2022-11-23'),(22,334,'9191916666',5,'ETH mining machine 1st',0.005374,'eth','2022-11-23 00:00:02','2022-11-23'),(23,167,'13888888888',6,'ETH mining machine 1st',0.005374,'eth','2022-11-23 00:00:02','2022-11-23'),(24,446,'8790558251',2,'Free mining machine',2.000000,'usdt','2022-11-24 00:00:02','2022-11-24'),(25,333,'陈总333',3,'Free mining machine',2.000000,'usdt','2022-11-24 00:00:02','2022-11-24'),(26,287,'王总287',4,'Free mining machine',2.000000,'usdt','2022-11-24 00:00:02','2022-11-24'),(27,334,'9191916666',5,'ETH mining machine 1st',0.005254,'eth','2022-11-24 00:00:02','2022-11-24'),(28,167,'13888888888',6,'ETH mining machine 1st',0.005254,'eth','2022-11-24 00:00:02','2022-11-24'),(29,446,'8790558251',2,'Free mining machine',2.000000,'usdt','2022-11-25 00:00:01','2022-11-25'),(30,333,'陈总333',3,'Free mining machine',2.000000,'usdt','2022-11-25 00:00:01','2022-11-25'),(31,287,'王总287',4,'Free mining machine',2.000000,'usdt','2022-11-25 00:00:01','2022-11-25'),(32,334,'9191916666',5,'ETH mining machine 1st',0.005104,'eth','2022-11-25 00:00:01','2022-11-25'),(33,167,'13888888888',6,'ETH mining machine 1st',0.005104,'eth','2022-11-25 00:00:01','2022-11-25'),(34,446,'8790558251',2,'Free mining machine',2.000000,'usdt','2022-11-26 00:00:02','2022-11-26'),(35,333,'陈总333',3,'Free mining machine',2.000000,'usdt','2022-11-26 00:00:02','2022-11-26'),(36,287,'王总287',4,'Free mining machine',2.000000,'usdt','2022-11-26 00:00:02','2022-11-26'),(37,334,'9191916666',5,'ETH mining machine 1st',0.005128,'eth','2022-11-26 00:00:02','2022-11-26'),(38,167,'13888888888',6,'ETH mining machine 1st',0.005128,'eth','2022-11-26 00:00:02','2022-11-26'),(39,446,'8790558251',2,'Free mining machine',2.000000,'usdt','2022-11-27 00:00:01','2022-11-27'),(40,333,'陈总333',3,'Free mining machine',2.000000,'usdt','2022-11-27 00:00:01','2022-11-27'),(41,287,'王总287',4,'Free mining machine',2.000000,'usdt','2022-11-27 00:00:01','2022-11-27'),(42,334,'9191916666',5,'ETH mining machine 1st',0.005039,'eth','2022-11-27 00:00:02','2022-11-27'),(43,167,'13888888888',6,'ETH mining machine 1st',0.005039,'eth','2022-11-27 00:00:02','2022-11-27');
/*!40000 ALTER TABLE `tw_kjprofit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tw_kuangji`
--

DROP TABLE IF EXISTS `tw_kuangji`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tw_kuangji` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `type` int(11) NOT NULL COMMENT '矿机类型1独资2共享',
  `rtype` int(11) NOT NULL COMMENT '类型1购买2赠送',
  `sharebl` varchar(30) NOT NULL COMMENT '共享矿机分享比例',
  `sharecode` varchar(30) NOT NULL COMMENT '共享识别码',
  `title` varchar(225) NOT NULL COMMENT '矿机标题',
  `content` text NOT NULL COMMENT '矿机内容',
  `imgs` varchar(225) NOT NULL COMMENT '矿机图片',
  `outtype` int(11) NOT NULL COMMENT '产出类型1按产值2按币量',
  `dayoutnum` decimal(12,6) NOT NULL COMMENT '日产币量',
  `outcoin` varchar(30) NOT NULL COMMENT '日产出币种',
  `pricenum` decimal(12,6) NOT NULL COMMENT '矿机单价额度',
  `pricecoin` varchar(30) NOT NULL COMMENT '矿机单价币种',
  `cycle` int(11) NOT NULL COMMENT '周期',
  `suanl` float(10,2) NOT NULL COMMENT '矿机算力',
  `allnum` int(11) NOT NULL COMMENT '库机库存总量',
  `ycnum` int(11) NOT NULL COMMENT '预计出售量',
  `sellnum` int(11) NOT NULL COMMENT '已售数量',
  `jlnum` decimal(12,6) NOT NULL COMMENT '奖励币量',
  `jlcoin` varchar(30) NOT NULL COMMENT '奖励币种',
  `buyask` int(11) NOT NULL COMMENT '申购要求类型1按币量2按团队',
  `asknum` int(11) NOT NULL COMMENT '要求数量',
  `djout` int(11) NOT NULL COMMENT '产币冻结状态：1否2是',
  `djday` int(11) NOT NULL COMMENT '产币冻结天数',
  `status` int(11) NOT NULL COMMENT '状态1正常2禁用',
  `buymax` int(11) NOT NULL COMMENT '购买上限',
  `addtime` datetime NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COMMENT='矿机列表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tw_kuangji`
--

LOCK TABLES `tw_kuangji` WRITE;
/*!40000 ALTER TABLE `tw_kuangji` DISABLE KEYS */;
INSERT INTO `tw_kuangji` VALUES (25,1,1,'0','','ETH mining machine','2$ worth of ETH is produced every day','629a2056be6a3.png',1,2.000000,'eth',200.000000,'usdt',180,78.00,30,24,0,0.000000,'usdt',1,0,1,0,1,1,'2022-06-03 22:53:14'),(22,1,1,'0','','ETH mining machine 3st','32.2$ worth of ETH is produced every day','629a20684467a.png',1,32.200000,'eth',2000.000000,'usdt',180,624.00,100,47,0,0.000000,'usdt',1,0,1,0,1,1,'2022-06-03 22:53:30'),(21,1,1,'0','','ETH mining machine 2st','13.8$ worth of ETH is produced every day','629a2076c2787.png',1,13.800000,'eth',1000.000000,'usdt',180,312.00,100,88,0,0.000000,'usdt',1,0,1,0,1,1,'2022-06-03 22:53:46'),(20,1,1,'0','','ETH mining machine 1st','6.1$ worth of ETH is produced every day','629a2088d6ce8.png',1,6.100000,'eth',500.000000,'usdt',180,156.00,100,70,0,0.000000,'usdt',1,0,1,0,1,1,'2022-06-03 22:54:03'),(19,1,2,'0','','Free mining machine','','629a2098a5cc5.png',2,2.000000,'usdt',0.000000,'usdt',14,0.00,9999,0,0,0.000000,'usdt',1,0,1,0,1,1,'2022-11-10 03:53:37'),(26,1,1,'0','','Invite  friend miner','Invite 10 friends to get this miner. The daily profit is 2 USDT','629a2043e3c21.png',1,2.000000,'usdt',2.000000,'usdt',100,0.00,10000,8500,0,0.000000,'usdt',2,10,1,0,1,1,'2022-06-03 22:52:54');
/*!40000 ALTER TABLE `tw_kuangji` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tw_market`
--

DROP TABLE IF EXISTS `tw_market`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tw_market` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL COMMENT '市场名称',
  `round` varchar(2) NOT NULL DEFAULT '0',
  `round_mum` varchar(2) NOT NULL DEFAULT '0',
  `buy_min` varchar(20) NOT NULL DEFAULT '' COMMENT '买入最小交易价',
  `buy_max` varchar(20) NOT NULL DEFAULT '' COMMENT '买入最大交易价',
  `sell_min` varchar(20) NOT NULL DEFAULT '' COMMENT '卖出最小交易价',
  `sell_max` varchar(20) NOT NULL DEFAULT '' COMMENT '卖出最大交易价',
  `trade_min` varchar(50) NOT NULL DEFAULT '' COMMENT '单笔最小交易额',
  `trade_max` varchar(50) NOT NULL DEFAULT '' COMMENT '单笔最大交易额',
  `zhang` varchar(10) NOT NULL DEFAULT '' COMMENT '涨幅限制',
  `die` varchar(10) NOT NULL DEFAULT '' COMMENT '跌幅限制',
  `hou_price` varchar(50) NOT NULL DEFAULT '1' COMMENT '昨日收盘价',
  `tendency` text,
  `trade` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '开启交易',
  `new_price` decimal(20,8) unsigned NOT NULL DEFAULT '0.00000000' COMMENT '最新成交价',
  `buy_price` decimal(20,8) unsigned NOT NULL DEFAULT '0.00000000' COMMENT '买一价',
  `sell_price` decimal(20,8) unsigned NOT NULL DEFAULT '0.00000000' COMMENT '卖一价',
  `min_price` decimal(20,8) unsigned NOT NULL DEFAULT '0.00000000' COMMENT '最低价',
  `max_price` decimal(20,8) unsigned NOT NULL DEFAULT '0.00000000' COMMENT '最高价',
  `volume` decimal(20,8) unsigned NOT NULL DEFAULT '0.00000000' COMMENT '交易量',
  `change` decimal(20,8) NOT NULL DEFAULT '0.00000000' COMMENT '涨跌幅',
  `api_min` decimal(20,8) unsigned NOT NULL DEFAULT '0.00000000',
  `api_max` decimal(20,8) unsigned NOT NULL DEFAULT '0.00000000',
  `sort` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `addtime` int(11) unsigned NOT NULL DEFAULT '0',
  `endtime` int(11) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '状态',
  `trade_buy_num_min` varchar(200) NOT NULL DEFAULT '0.001' COMMENT '单笔买入最小交易数量',
  `trade_buy_num_max` varchar(200) NOT NULL DEFAULT '1000' COMMENT '单笔买入最大交易数量',
  `trade_sell_num_min` varchar(200) NOT NULL DEFAULT '0.001' COMMENT '单笔卖出最小交易数量:',
  `trade_sell_num_max` varchar(200) NOT NULL DEFAULT '1000' COMMENT '单笔卖出最大交易数量',
  `fshow` tinyint(1) NOT NULL DEFAULT '0',
  `shuadan` tinyint(1) DEFAULT NULL COMMENT '刷单开关',
  `faxingjia` decimal(20,8) NOT NULL DEFAULT '0.00000000' COMMENT '发行价',
  `sdhigh` varchar(50) DEFAULT '0' COMMENT '刷单最高价格',
  `sdlow` varchar(50) DEFAULT '0' COMMENT '刷单最低价格',
  `sdhigh_num` varchar(50) DEFAULT '0' COMMENT '刷单最高数量',
  `sdlow_num` varchar(50) DEFAULT '0' COMMENT '刷单最低数量',
  PRIMARY KEY (`id`) USING BTREE,
  KEY `name` (`name`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT COMMENT='行情配置表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tw_market`
--

LOCK TABLES `tw_market` WRITE;
/*!40000 ALTER TABLE `tw_market` DISABLE KEYS */;
INSERT INTO `tw_market` VALUES (1,'mbn_usdt','1','2','0.000001','10000000','0.000001','10000000','1.000000','10000000','5','5','1618.80000000','[[1667305521,0],[1667319921,0],[1667334321,0],[1667348721,0],[1667363121,0],[1667377521,0],[1667391921,0],[1667406321,0],[1667420721,0],[1667435121,0],[1667449521,0],[1667463921,0],[1667478321,0],[1667492721,0],[1667507121,0],[1667521521,0],[1667535921,0],[1667550321,\"1618.80000000\"],[1667564721,0]]',1,94.80000000,16.15000000,16.15000000,94.80000000,16.16000000,630.37000000,0.80000000,0.00000000,0.00000000,0,0,0,1,'1','10000','1','10000000',0,1,12.14000000,'1','0.1','300','30');
/*!40000 ALTER TABLE `tw_market` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tw_market_json`
--

DROP TABLE IF EXISTS `tw_market_json`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tw_market_json` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `sort` int(11) unsigned NOT NULL DEFAULT '0',
  `addtime` int(11) unsigned NOT NULL DEFAULT '0',
  `endtime` int(11) unsigned NOT NULL DEFAULT '0',
  `status` int(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`) USING BTREE,
  KEY `status` (`status`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tw_market_json`
--

LOCK TABLES `tw_market_json` WRITE;
/*!40000 ALTER TABLE `tw_market_json` DISABLE KEYS */;
/*!40000 ALTER TABLE `tw_market_json` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tw_menu`
--

DROP TABLE IF EXISTS `tw_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tw_menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '文档ID',
  `title` varchar(50) NOT NULL DEFAULT '' COMMENT '标题',
  `pid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '上级分类ID',
  `sort` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '排序（同级有效）',
  `url` char(255) NOT NULL DEFAULT '' COMMENT '链接地址',
  `hide` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否隐藏',
  `tip` varchar(255) NOT NULL DEFAULT '' COMMENT '提示',
  `group` varchar(50) DEFAULT '' COMMENT '分组',
  `is_dev` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否仅开发者模式可见',
  `ico_name` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`) USING BTREE,
  KEY `pid` (`pid`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=495 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tw_menu`
--

LOCK TABLES `tw_menu` WRITE;
/*!40000 ALTER TABLE `tw_menu` DISABLE KEYS */;
INSERT INTO `tw_menu` VALUES (1,'首页',0,0,'Index/index',0,'','',0,'home'),(2,'内容管理',0,9,'Article/index',0,'','',0,'list-alt'),(3,'用户管理',0,1,'User/index',0,'','',0,'user'),(4,'财务记录',0,2,'Finance/index',0,'','',0,'th-list'),(5,'交易中心',0,3,'Trade/index',0,'','',0,'stats'),(6,'新币认购',0,6,'Issue/index',0,'','',0,'th-large'),(7,'系统设置',0,0,'Config/index',0,'','',0,'cog'),(8,'矿机管理',0,5,'Kuangm/index',0,'','',0,'list-alt'),(11,'后台首页',1,1,'Index/index',0,'','快捷操作',0,'home'),(13,'公告中心',2,1,'Article/index',0,'','内容',0,'list-alt'),(26,'会员管理',3,1,'User/index',0,'','用户管理',0,'user'),(68,'合约订单',5,1,'Trade/index',0,'','快速合约',0,'list-alt'),(69,'合约设置',5,2,'Trade/sethy',0,'','快速合约',0,'cog'),(79,'网站信息',7,1,'Config/index',0,'','系统',0,'cog'),(85,'编辑',84,4,'Coin/edit',0,'','网站配置',0,'0'),(89,'编辑市场',88,4,'Market/edit',0,'','',0,'0'),(92,'图形验证码',95,7,'Verify/code',0,'','网站配置',0,'0'),(95,'系统配置',7,1,'Config/qita',0,'','系统',0,'cog'),(117,'排序',116,5,'Menu/sort',0,'','开发组',0,'0'),(118,'添加',116,5,'Menu/add',0,'','开发组',0,'0'),(119,'编辑',116,5,'Menu/edit',0,'','开发组',0,'0'),(120,'删除',116,5,'Menu/del',0,'','开发组',0,'0'),(282,'登录日志',3,4,'User/log',0,'','用户管理',0,'list-alt'),(283,'用户钱包',3,5,'User/qianbao',0,'','用户管理',0,'list-alt'),(285,'用户财产',3,7,'User/coin',0,'','用户管理',0,'list-alt'),(288,'平台市场',7,5,'Config/marketo',0,'','系统',0,'stats'),(290,'财务明细',4,1,'Finance/index',0,'','财务管理',0,'th-list'),(295,'充币记录',4,1,'Finance/myzr',0,'','财务管理',0,'log-in'),(296,'提币记录',4,1,'Finance/myzc',0,'','财务管理',0,'log-out'),(312,'管理员管理',3,2,'User/admin',0,'','用户管理',0,'user'),(382,'币种配置',7,4,'Config/coin',0,'','系统',0,'record'),(388,'前端导航配置',7,8,'Config/daohang',1,'','导航',0,'cog'),(446,'资金流水',3,9,'User/amountlog',0,'','用户管理',0,'list-alt'),(451,'页脚导航配置',7,8,'Config/dhfooter',1,'','导航',0,'cog'),(452,'后端导航配置',7,8,'Config/dhadmin',1,'','导航',0,'cog'),(468,'认购配置',6,1,'Issue/index',0,'','认购管理',0,'cog'),(471,'认购记录',6,1,'Issue/log',0,'','认购管理',0,'globe'),(474,'限价委托记录',5,2,'Trade/bbxjlist',0,'','币币交易',0,'list-alt'),(479,'市场配置',7,5,'Config/ctmarket',0,'','系统',0,'stats'),(481,'平仓记录',5,2,'Trade/hylog',0,'','快速合约',0,'list-alt'),(484,'刷单设置',5,2,'Trade/market',0,'','机器人设置',0,'cog'),(485,'矿机列表',8,1,'Kuangm/index',0,'','矿机管理',0,'list-alt'),(486,'运行中矿机',8,2,'Kuangm/kjlist',0,'','矿机管理',0,'list-alt'),(487,'过期的矿机',8,3,'Kuangm/overlist',0,'','矿机管理',0,'list-alt'),(488,'矿机收益列表',8,3,'Kuangm/kjsylist',0,'','矿机管理',0,'list-alt'),(489,'冻结的收益',8,3,'Kuangm/djprofit',0,'','矿机管理',0,'list-alt'),(490,'市价交易记录',5,2,'Trade/bbsjlist',0,'','币币交易',0,'list-alt'),(491,'币币交易设置',5,2,'Trade/bbsetting',0,'','币币交易',0,'cog'),(492,'通知管理',3,9,'User/noticelist',0,'','用户管理',0,'list-alt'),(493,'在线客服',3,9,'User/online',0,'','用户管理',0,'list-alt'),(494,'代理管理',3,1,'User/agent',0,'','用户管理',0,'user');
/*!40000 ALTER TABLE `tw_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tw_myzc`
--

DROP TABLE IF EXISTS `tw_myzc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tw_myzc` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `userid` int(11) unsigned NOT NULL COMMENT '会员ID',
  `username` varchar(200) NOT NULL DEFAULT '' COMMENT '会员账号',
  `coinname` varchar(200) NOT NULL DEFAULT '' COMMENT '提币币种',
  `txid` varchar(200) NOT NULL DEFAULT '',
  `num` decimal(20,8) unsigned NOT NULL DEFAULT '0.00000000' COMMENT '提币数量',
  `fee` decimal(20,8) unsigned NOT NULL DEFAULT '0.00000000' COMMENT '手续费',
  `mum` decimal(20,8) unsigned NOT NULL DEFAULT '0.00000000' COMMENT '实际到账',
  `address` varchar(225) NOT NULL COMMENT '提币地址',
  `sort` int(11) unsigned NOT NULL DEFAULT '0',
  `addtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '申请时间',
  `endtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` int(4) NOT NULL DEFAULT '0' COMMENT '1待审核2完成3未通过',
  `to_user` int(2) NOT NULL DEFAULT '0' COMMENT '会员转币',
  `czline` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  KEY `userid` (`userid`) USING BTREE,
  KEY `status` (`status`) USING BTREE,
  KEY `coinname` (`coinname`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT COMMENT='提币表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tw_myzc`
--

LOCK TABLES `tw_myzc` WRITE;
/*!40000 ALTER TABLE `tw_myzc` DISABLE KEYS */;
INSERT INTO `tw_myzc` VALUES (1,286,'杜总286','usdt','',1600.00000000,0.00000000,1600.00000000,'0x3C2CDe7f7b3471f7d82491a25923c7E62f8C474d',1,'2022-11-11 22:34:02','2022-11-11 22:34:18',2,0,'TRC20'),(2,313,'1222222@qq.com','usdt','',100.00000000,0.00000000,100.00000000,'10025663541545',1,'2022-11-14 00:34:04','0000-00-00 00:00:00',1,0,'TRC20'),(3,381,'9985987232','usdt','',350.00000000,0.00000000,350.00000000,'TDnspWknNAjs4Bcr8AfCh3Enht1z3CZqxy',1,'2022-11-14 22:42:14','2022-11-15 00:07:51',2,0,NULL),(4,334,'9191916666','usdt','',50.00000000,0.00000000,50.00000000,'12314365465fd4sa5f14653',1,'2022-11-14 23:38:15','0000-00-00 00:00:00',1,0,NULL),(5,434,'ravi7000raj7@gmail.com','usdt','',170.00000000,0.00000000,170.00000000,'TP4ESzXTmMupLuEuURA9RPFxEC1D6bUdhM',1,'2022-11-15 23:22:37','2022-11-15 23:36:34',2,0,'TRC20'),(6,418,'santhu.mdk@gmail.com','usdt','',100.00000000,0.00000000,100.00000000,'TJaFjFWA9YD92EP65KuvzXYhPuJPFF8yGB',1,'2022-11-16 02:14:24','2022-11-18 21:50:19',3,0,'TRC20'),(7,440,'9823606692','usdt','',200.00000000,0.00000000,200.00000000,'TRr6rH51aMq2SpzZzpyviDLKUPZD9UhezM',1,'2022-11-16 15:36:02','2022-11-16 17:07:35',2,0,'TRC20'),(8,437,'kaluvala.123n@gmail.com','usdt','',120.00000000,0.00000000,120.00000000,'TSYcTJMqUZfKTE1M3bn7HBxvkRQ8Nu5a2W',1,'2022-11-16 20:15:39','2022-11-16 21:01:11',2,0,'TRC20'),(9,440,'9823606692','usdt','',175.00000000,0.00000000,175.00000000,'TRr6rH51aMq2SpzZzpyviDLKUPZD9UhezM',1,'2022-11-16 23:01:43','2022-11-17 00:47:49',2,0,'TRC20'),(10,418,'santhu.mdk@gmail.com','usdt','',20.00000000,0.00000000,20.00000000,'TJaFjFWA9YD92EP65KuvzXYhPuJPFF8yGB',1,'2022-11-16 23:06:31','0000-00-00 00:00:00',1,0,'TRC20'),(11,381,'9985987232','usdt','',272.20000000,0.00000000,272.20000000,'TDnspWknNAjs4Bcr8AfCh3Enht1z3CZqxy',1,'2022-11-17 00:15:05','2022-11-18 21:49:05',3,0,'TRC20'),(12,439,'8882588155','usdt','',97.00000000,0.00000000,97.00000000,'TC8SSFazth2VNvFXYugeMfZx9sSSqBBnKw',1,'2022-11-17 14:03:49','0000-00-00 00:00:00',1,0,'TRC20'),(13,440,'9823606692','usdt','',300.00000000,0.00000000,300.00000000,'TRr6rH51aMq2SpzZzpyviDLKUPZD9UhezM',1,'2022-11-17 17:09:14','2022-11-17 18:07:09',3,0,'TRC20'),(14,421,'9663561432','usdt','',67.00000000,0.00000000,67.00000000,'TUYb2VfRzAckTYcPpBje7DBdvfajBDDQtS',1,'2022-11-17 18:17:47','2022-11-17 20:09:25',2,0,'TRC20'),(15,440,'9823606692','usdt','',300.00000000,0.00000000,300.00000000,'TRr6rH51aMq2SpzZzpyviDLKUPZD9UhezM',1,'2022-11-17 20:31:59','2022-11-17 21:30:23',3,0,'TRC20'),(16,421,'9663561432','usdt','',220.00000000,0.00000000,220.00000000,'TUYb2VfRzAckTYcPpBje7DBdvfajBDDQtS',1,'2022-11-17 22:16:40','2022-11-18 21:45:01',3,0,'TRC20'),(17,440,'9823606692','usdt','',328.80000000,0.00000000,328.80000000,'TRr6rH51aMq2SpzZzpyviDLKUPZD9UhezM',1,'2022-11-17 22:23:55','2022-11-17 23:32:36',3,0,'TRC20'),(18,440,'9823606692','usdt','',328.80000000,0.00000000,328.80000000,'TRr6rH51aMq2SpzZzpyviDLKUPZD9UhezM',1,'2022-11-18 14:05:15','2022-11-18 21:44:47',3,0,'TRC20'),(19,408,'乐2','usdt','',1000.00000000,0.00000000,1000.00000000,'TEwtmUXttCG9YaYtfhU8d7quKneQuPkFTR',1,'2022-11-18 18:10:35','2022-11-18 18:16:44',2,0,NULL),(20,408,'乐2','usdt','',650.00000000,0.00000000,650.00000000,'TEwtmUXttCG9YaYtfhU8d7quKneQuPkFTR',1,'2022-11-18 18:10:58','2022-11-18 18:16:41',2,0,NULL),(21,408,'乐2','usdt','',500.00000000,0.00000000,500.00000000,'TEwtmUXttCG9YaYtfhU8d7quKneQuPkFTR',1,'2022-11-18 18:11:18','2022-11-18 18:16:38',2,0,NULL),(22,472,'shaiq123@gmail.com','usdt','',211.00000000,0.00000000,211.00000000,'TFDW4oQpLMvYJdFp6XdDQXxR5kNt2snixq',1,'2022-11-18 18:21:08','0000-00-00 00:00:00',1,0,'TRC20'),(23,434,'ravi7000raj7@gmail.com','usdt','',50.00000000,0.00000000,50.00000000,'TP4ESzXTmMupLuEuURA9RPFxEC1D6bUdhM',1,'2022-11-18 21:36:22','2022-11-18 21:44:32',3,0,'TRC20'),(24,381,'9985987232','usdt','',272.20000000,0.00000000,272.20000000,'TDnspWknNAjs4Bcr8AfCh3Enht1z3CZqxy',1,'2022-11-18 22:03:00','0000-00-00 00:00:00',1,0,'TRC20'),(25,465,'9878352277','usdt','',11.30000000,0.00000000,11.30000000,'TKHCakz7yH5jrEFARtPaxL2ux7BDpZyHNt',1,'2022-11-18 22:41:14','0000-00-00 00:00:00',1,0,'TRC20'),(26,469,'neelimatabjul@gmail.com','usdt','',50.00000000,0.00000000,50.00000000,'TGXv8vF1QNAYEiD8Q1748J85nHTfL9C5Nq',1,'2022-11-19 00:52:41','0000-00-00 00:00:00',1,0,NULL),(27,434,'ravi7000raj7@gmail.com','usdt','',50.00000000,0.00000000,50.00000000,'TP4ESzXTmMupLuEuURA9RPFxEC1D6bUdhM',1,'2022-11-19 00:56:12','0000-00-00 00:00:00',1,0,'TRC20'),(28,472,'shaiq123@gmail.com','usdt','',106.40000000,0.00000000,106.40000000,'TFDW4oQpLMvYJdFp6XdDQXxR5kNt2snixq',1,'2022-11-19 21:02:29','2022-11-19 21:40:50',2,0,'TRC20'),(29,440,'9823606692','usdt','',45.80000000,0.00000000,45.80000000,'TRr6rH51aMq2SpzZzpyviDLKUPZD9UhezM',1,'2022-11-20 00:31:19','2022-11-24 14:53:12',2,0,'TRC20'),(30,444,'itsmydummy023@gmail.com','usdt','',2500.00000000,0.00000000,2500.00000000,'TFT5yyhBafTGaizojTXxhngndG6Y88cc8p',1,'2022-11-21 03:13:53','2022-11-21 14:26:32',3,0,'TRC20'),(31,497,'satish_eng2007@rediffmail.com','usdt','',202.46000000,0.00000000,202.46000000,'satishkumareng2007@okicici',1,'2022-11-21 13:06:46','2022-11-21 15:29:03',3,0,'TRC20'),(32,497,'satish_eng2007@rediffmail.com','usdt','',202.46000000,0.00000000,202.46000000,'satishkumareng2007@okicici',1,'2022-11-21 16:39:21','2022-11-21 22:24:35',3,0,'TRC20'),(33,425,'ganiya7@gmail.com','usdt','',10000.00000000,0.00000000,10000.00000000,'TVN32YoF8w5H3hxACgvZNWmEaQf8eAavGb',1,'2022-11-21 17:47:06','2022-11-21 22:13:52',3,0,'TRC20'),(34,425,'ganiya7@gmail.com','usdt','',10000.00000000,0.00000000,10000.00000000,'TVN32YoF8w5H3hxACgvZNWmEaQf8eAavGb',1,'2022-11-22 10:34:16','2022-11-22 13:27:35',3,0,'TRC20'),(35,425,'ganiya7@gmail.com','usdt','',10000.00000000,0.00000000,10000.00000000,'TVN32YoF8w5H3hxACgvZNWmEaQf8eAavGb',1,'2022-11-22 17:23:31','0000-00-00 00:00:00',1,0,'TRC20'),(36,469,'neelimatabjul@gmail.com','usdt','',114.01000000,0.00000000,114.01000000,'TEwtmUXttCG9YaYtfhU8d7quKneQuPkFTR',1,'2022-11-22 22:01:02','2022-11-22 22:07:59',3,0,NULL),(37,452,'9599900087','usdt','',50.00000000,0.00000000,50.00000000,'TWxex81STcmGjgypZnjqkG8oDthz9GeQpQ',1,'2022-11-23 14:26:59','0000-00-00 00:00:00',1,0,'TRC20'),(38,440,'9823606692','usdt','',45.00000000,0.00000000,45.00000000,'TRr6rH51aMq2SpzZzpyviDLKUPZD9UhezM',1,'2022-11-23 14:50:39','0000-00-00 00:00:00',1,0,'TRC20'),(39,418,'santhu.mdk@gmail.com','usdt','',20.00000000,0.00000000,20.00000000,'TJaFjFWA9YD92EP65KuvzXYhPuJPFF8yGB',1,'2022-11-25 17:55:15','0000-00-00 00:00:00',1,0,'TRC20'),(40,545,'saranvr15@gmail.com','usdt','',105.00000000,0.00000000,105.00000000,'TFggcvLkhxVGVQ5gUVJUcgEHiGt5vMLCj9',1,'2022-11-25 22:02:26','2022-11-25 22:09:21',2,0,'TRC20'),(41,387,'9966775767','usdt','',3000.00000000,0.00000000,3000.00000000,'TAi4DR3V6bVgHzdojDFhVnXFhPMaXT6QKe',1,'2022-11-26 00:22:39','0000-00-00 00:00:00',1,0,'TRC20'),(42,497,'satish_eng2007@rediffmail.com','usdt','',46.64000000,0.00000000,46.64000000,'TKMntuCfJsK2XyBaire1PL96FCntUvzjTS',1,'2022-11-26 17:07:56','0000-00-00 00:00:00',1,0,'TRC20');
/*!40000 ALTER TABLE `tw_myzc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tw_notice`
--

DROP TABLE IF EXISTS `tw_notice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tw_notice` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '记录ID',
  `uid` int(11) NOT NULL COMMENT '会员ID',
  `account` varchar(60) NOT NULL COMMENT '会员账号',
  `title` varchar(225) NOT NULL COMMENT '通知标题',
  `content` text NOT NULL COMMENT '通知内容',
  `imgs` varchar(225) NOT NULL COMMENT '通知图片 ',
  `addtime` datetime NOT NULL COMMENT '发送时间',
  `status` int(11) NOT NULL COMMENT '1未读2已读',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='通知表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tw_notice`
--

LOCK TABLES `tw_notice` WRITE;
/*!40000 ALTER TABLE `tw_notice` DISABLE KEYS */;
/*!40000 ALTER TABLE `tw_notice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tw_online`
--

DROP TABLE IF EXISTS `tw_online`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tw_online` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `uid` int(11) NOT NULL COMMENT '会员ID',
  `username` varchar(225) NOT NULL COMMENT '会员账号',
  `type` int(11) NOT NULL COMMENT '类型：1客服2会员',
  `content` text NOT NULL COMMENT '内容',
  `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '发送时间',
  `state` int(11) NOT NULL DEFAULT '0' COMMENT '后台查看状态0未查看2已查看',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tw_online`
--

LOCK TABLES `tw_online` WRITE;
/*!40000 ALTER TABLE `tw_online` DISABLE KEYS */;
INSERT INTO `tw_online` VALUES (2,336,'qq878412',2,'怎么充值','2022-11-14 10:04:47',2),(3,318,'qq878412',1,'测试','2022-11-14 08:55:24',1),(4,336,'qq878412',1,'sad','2022-11-14 10:01:40',1),(5,385,'min1',2,'111','2022-11-14 11:59:44',0),(6,442,'8756273094',2,'Why my authentication is showing wrong every time','2022-11-16 15:27:35',1),(7,444,'itsmydummy023@gmail.com',2,'Hello, iam not able to authenticate','2022-11-16 15:28:59',1),(8,424,'navin.simon365@gmail.com',2,'Hi','2022-11-16 15:26:02',1),(9,424,'navin.simon365@gmail.com',1,'Hi','2022-11-16 15:26:02',1),(10,424,'navin.simon365@gmail.com',1,'Hi','2022-11-16 15:26:27',1),(11,442,'8756273094',1,'Hi','2022-11-16 15:27:35',1),(12,442,'8756273094',1,'please try again','2022-11-16 15:27:47',1),(13,444,'itsmydummy023@gmail.com',1,'Hi','2022-11-16 15:28:59',1),(14,444,'itsmydummy023@gmail.com',1,'please try again','2022-11-16 15:29:03',1),(15,424,'navin.simon365@gmail.com',1,'Hi','2022-11-17 06:18:00',1),(16,453,'9013382710',2,'hi','2022-11-18 08:33:39',1),(17,453,'9013382710',1,'Hi','2022-11-18 08:33:39',1),(18,472,'shaiq123@gmail.com',2,'My deposit is not there yet','2022-11-18 13:47:17',1),(19,472,'shaiq123@gmail.com',2,'Hello','2022-11-18 12:10:54',0),(20,472,'shaiq123@gmail.com',1,'ok let me check','2022-11-18 13:47:17',1),(21,472,'shaiq123@gmail.com',1,'hold on a second while i check','2022-11-19 14:16:47',1),(22,473,'8800592589',2,'Hi','2022-11-19 14:35:22',0),(23,473,'8800592589',2,'From how long you guys are in crypto market investment?','2022-11-19 16:51:01',1),(24,473,'8800592589',2,'??','2022-11-19 15:57:17',0),(25,473,'8800592589',1,'We have been engaged in cryptocurrency investment since 2014','2022-11-19 16:51:01',1),(26,495,'9448117712',2,'Hi','2022-11-22 10:16:20',1),(27,381,'9985987232',2,'Hi','2022-11-21 16:32:34',0),(28,381,'9985987232',2,'The transaction of 272USD is still showing as pending','2022-11-21 16:34:25',0),(29,381,'9985987232',2,'whe will it get Confirmed','2022-11-21 16:35:26',0),(30,425,'ganiya7@gmail.com',2,'Hi','2022-11-22 02:39:02',0),(31,495,'9448117712',1,'Hi','2022-11-22 10:16:20',1),(32,517,'919899847869',2,'4448','2022-11-23 16:03:43',0);
/*!40000 ALTER TABLE `tw_online` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tw_recharge`
--

DROP TABLE IF EXISTS `tw_recharge`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tw_recharge` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `uid` int(11) NOT NULL COMMENT '会员ID',
  `username` varchar(225) NOT NULL COMMENT '会员账号',
  `coin` varchar(60) NOT NULL COMMENT '币名称',
  `num` decimal(12,6) NOT NULL COMMENT '名称',
  `addtime` datetime NOT NULL COMMENT '添加时间',
  `updatetime` datetime NOT NULL COMMENT '处理时间',
  `status` int(11) NOT NULL COMMENT '状态: 待审核 1 - 审核通过 2 - 不通过3',
  `payimg` varchar(225) NOT NULL COMMENT '付款凭证',
  `msg` varchar(225) NOT NULL COMMENT '不通过说明',
  `czline` varchar(255) DEFAULT NULL,
  `atype` int(1) DEFAULT '0' COMMENT '0用户充值1管理员充值',
  `address` varchar(200) DEFAULT NULL COMMENT '充值地址',
  `trc20id` varchar(300) DEFAULT NULL COMMENT 'trc20交易Id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=204 DEFAULT CHARSET=utf8mb4 COMMENT='充值记录';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tw_recharge`
--

LOCK TABLES `tw_recharge` WRITE;
/*!40000 ALTER TABLE `tw_recharge` DISABLE KEYS */;
INSERT INTO `tw_recharge` VALUES (1,245,'XIA0010','USDT',10000.000000,'2022-11-10 18:30:44','2022-11-10 18:30:44',2,'','',NULL,1,NULL,NULL),(2,315,'qq878410','USDT',5000.000000,'2022-11-11 19:28:59','2022-11-11 19:28:59',2,'','',NULL,1,NULL,NULL),(3,317,'qq878411','USDT',5000.000000,'2022-11-11 19:29:28','2022-11-11 19:29:28',2,'','',NULL,1,NULL,NULL),(4,318,'qq878412','USDT',5000.000000,'2022-11-11 19:29:39','2022-11-11 19:29:39',2,'','',NULL,1,NULL,NULL),(5,319,'qq878413','USDT',5000.000000,'2022-11-11 19:29:51','2022-11-11 19:29:51',2,'','',NULL,1,NULL,NULL),(6,320,'qq878414','USDT',5000.000000,'2022-11-11 19:30:05','2022-11-11 19:30:05',2,'','',NULL,1,NULL,NULL),(7,321,'qq878415','USDT',5000.000000,'2022-11-11 19:30:19','2022-11-11 19:30:19',2,'','',NULL,1,NULL,NULL),(8,316,'zhuo918208','USDT',5000.000000,'2022-11-11 19:30:41','2022-11-11 19:30:41',2,'','',NULL,1,NULL,NULL),(9,286,'杜总286','USDT',10000.000000,'2022-11-11 20:52:15','2022-11-11 20:52:15',2,'','',NULL,1,NULL,NULL),(10,322,'K168','USDT',3000.000000,'2022-11-12 00:16:21','2022-11-12 00:16:21',2,'','',NULL,1,NULL,NULL),(11,323,'K1168','USDT',3000.000000,'2022-11-12 00:16:36','2022-11-12 00:16:36',2,'','',NULL,1,NULL,NULL),(12,324,'初','USDT',3000.000000,'2022-11-12 00:16:52','2022-11-12 00:16:52',2,'','',NULL,1,NULL,NULL),(13,325,'初112233','USDT',3000.000000,'2022-11-12 00:17:03','2022-11-12 00:17:03',2,'','',NULL,1,NULL,NULL),(14,326,'青123','USDT',3000.000000,'2022-11-12 00:17:14','2022-11-12 00:17:14',2,'','',NULL,1,NULL,NULL),(15,327,'青1234','USDT',3000.000000,'2022-11-12 00:17:28','2022-11-12 00:17:28',2,'','',NULL,1,NULL,NULL),(16,307,'tn168','USDT',3000.000000,'2022-11-12 00:19:10','2022-11-12 00:19:10',2,'','',NULL,1,NULL,NULL),(17,309,'tn168168','USDT',3000.000000,'2022-11-12 00:19:28','2022-11-12 00:19:28',2,'','',NULL,1,NULL,NULL),(18,310,'123','USDT',5000.000000,'2022-11-12 02:38:02','2022-11-12 02:38:02',2,'','',NULL,1,NULL,NULL),(19,328,'456','USDT',5000.000000,'2022-11-12 02:38:25','2022-11-12 02:38:25',2,'','',NULL,1,NULL,NULL),(20,329,'789','USDT',5000.000000,'2022-11-12 02:38:44','2022-11-12 02:38:44',2,'','',NULL,1,NULL,NULL),(21,330,'147','USDT',5000.000000,'2022-11-12 02:39:35','2022-11-12 02:39:35',2,'','',NULL,1,NULL,NULL),(22,331,'258','USDT',5000.000000,'2022-11-12 02:39:49','2022-11-12 02:39:49',2,'','',NULL,1,NULL,NULL),(23,334,'9191916666','USDT',5000.000000,'2022-11-12 23:38:27','2022-11-12 23:38:27',2,'','',NULL,1,NULL,NULL),(24,313,'1222222@qq.com','USDT',100.000000,'2022-11-13 22:15:31','0000-00-00 00:00:00',1,'6370fc0200b5b.jpg','',NULL,0,NULL,NULL),(25,313,'1222222@qq.com','USDT',1200.000000,'2022-11-13 22:19:46','0000-00-00 00:00:00',1,'6370fd0139646.png','',NULL,0,NULL,NULL),(26,313,'1222222@qq.com','USDT',100.000000,'2022-11-13 22:20:28','0000-00-00 00:00:00',1,'6370fd2b0ff03.jpg','',NULL,0,NULL,NULL),(27,313,'1222222@qq.com','USDT',1000.000000,'2022-11-13 22:25:02','0000-00-00 00:00:00',1,'6370fe3d5653f.png','','TRC20',0,NULL,NULL),(28,313,'1222222@qq.com','USDT',4543.000000,'2022-11-13 22:25:58','0000-00-00 00:00:00',1,'6370fe723b916.png','','TRC20',0,NULL,NULL),(29,313,'1222222@qq.com','USDT',1000.000000,'2022-11-13 22:27:04','2022-11-13 23:19:37',2,'6370feb757ed6.png','','TRC20',0,'测试1',NULL),(30,352,'0000000000','USDT',10000.000000,'2022-11-14 15:21:19','2022-11-14 15:21:19',2,'','',NULL,1,NULL,NULL),(31,358,'1233312333','USDT',10000.000000,'2022-11-14 15:21:57','2022-11-14 15:21:57',2,'','',NULL,1,NULL,NULL),(32,355,'3422260640','USDT',10000.000000,'2022-11-14 15:22:19','2022-11-14 15:22:19',2,'','',NULL,1,NULL,NULL),(33,357,'00000000','USDT',10000.000000,'2022-11-14 15:22:41','2022-11-14 15:22:41',2,'','',NULL,1,NULL,NULL),(34,354,'11111111','USDT',10000.000000,'2022-11-14 15:23:06','2022-11-14 15:23:06',2,'','',NULL,1,NULL,NULL),(35,360,'22222222','USDT',10000.000000,'2022-11-14 15:23:32','2022-11-14 15:23:32',2,'','',NULL,1,NULL,NULL),(36,363,'8881','USDT',10000.000000,'2022-11-14 15:31:23','2022-11-14 15:31:23',2,'','',NULL,1,NULL,NULL),(37,374,'8882','USDT',10000.000000,'2022-11-14 15:31:49','2022-11-14 15:31:49',2,'','',NULL,1,NULL,NULL),(38,377,'8883','USDT',10000.000000,'2022-11-14 15:32:14','2022-11-14 15:32:14',2,'','',NULL,1,NULL,NULL),(39,361,'9998881','USDT',10000.000000,'2022-11-14 15:32:46','2022-11-14 15:32:46',2,'','',NULL,1,NULL,NULL),(40,371,'9998882','USDT',10000.000000,'2022-11-14 15:33:10','2022-11-14 15:33:10',2,'','',NULL,1,NULL,NULL),(41,373,'9998883','USDT',10000.000000,'2022-11-14 15:33:33','2022-11-14 15:33:33',2,'','',NULL,1,NULL,NULL),(42,365,'216624','USDT',10000.000000,'2022-11-14 15:56:10','2022-11-14 15:56:10',2,'','',NULL,1,NULL,NULL),(43,368,'808624','USDT',10000.000000,'2022-11-14 15:56:41','2022-11-14 15:56:41',2,'','',NULL,1,NULL,NULL),(44,366,'999','USDT',10000.000000,'2022-11-14 15:57:06','2022-11-14 15:57:06',2,'','',NULL,1,NULL,NULL),(45,370,'998','USDT',10000.000000,'2022-11-14 15:57:30','2022-11-14 15:57:30',2,'','',NULL,1,NULL,NULL),(46,372,'867','USDT',10000.000000,'2022-11-14 15:57:57','2022-11-14 15:57:57',2,'','',NULL,1,NULL,NULL),(47,378,'868','USDT',10000.000000,'2022-11-14 15:58:15','2022-11-14 15:58:15',2,'','',NULL,1,NULL,NULL),(48,351,'668812','USDT',10000.000000,'2022-11-14 15:58:36','2022-11-14 15:58:36',2,'','',NULL,1,NULL,NULL),(49,415,'jun3','USDT',10000.000000,'2022-11-14 17:35:30','2022-11-14 17:35:30',2,'','',NULL,1,NULL,NULL),(50,414,'jun2','USDT',10000.000000,'2022-11-14 17:35:37','2022-11-14 17:35:37',2,'','',NULL,1,NULL,NULL),(51,413,'jun1','USDT',10000.000000,'2022-11-14 17:35:46','2022-11-14 17:35:46',2,'','',NULL,1,NULL,NULL),(52,412,'小2','USDT',10000.000000,'2022-11-14 17:36:03','2022-11-14 17:36:03',2,'','',NULL,1,NULL,NULL),(53,411,'小1','USDT',10000.000000,'2022-11-14 17:36:11','2022-11-14 17:36:11',2,'','',NULL,1,NULL,NULL),(54,410,'银2','USDT',10000.000000,'2022-11-14 17:36:34','2022-11-14 17:36:34',2,'','',NULL,1,NULL,NULL),(55,409,'银1','USDT',10000.000000,'2022-11-14 17:36:41','2022-11-14 17:36:41',2,'','',NULL,1,NULL,NULL),(56,408,'乐2','USDT',10000.000000,'2022-11-14 17:36:50','2022-11-14 17:36:50',2,'','',NULL,1,NULL,NULL),(57,407,'000003','USDT',10000.000000,'2022-11-14 17:37:14','2022-11-14 17:37:14',2,'','',NULL,1,NULL,NULL),(58,406,'杜2','USDT',10000.000000,'2022-11-14 17:37:25','2022-11-14 17:37:25',2,'','',NULL,1,NULL,NULL),(59,405,'樊2','USDT',10000.000000,'2022-11-14 17:37:34','2022-11-14 17:37:34',2,'','',NULL,1,NULL,NULL),(60,404,'曾2','USDT',10000.000000,'2022-11-14 17:37:43','2022-11-14 17:37:43',2,'','',NULL,1,NULL,NULL),(61,403,'樊1','USDT',10000.000000,'2022-11-14 17:37:56','2022-11-14 17:37:56',2,'','',NULL,1,NULL,NULL),(62,402,'龙2','USDT',10000.000000,'2022-11-14 17:38:09','2022-11-14 17:38:09',2,'','',NULL,1,NULL,NULL),(63,401,'小丽2','USDT',10000.000000,'2022-11-14 17:38:17','2022-11-14 17:38:17',2,'','',NULL,1,NULL,NULL),(64,400,'小丽1','USDT',10000.000000,'2022-11-14 17:38:27','2022-11-14 17:38:27',2,'','',NULL,1,NULL,NULL),(65,399,'小玉2','USDT',10000.000000,'2022-11-14 17:38:39','2022-11-14 17:38:39',2,'','',NULL,1,NULL,NULL),(66,398,'杜1','USDT',10000.000000,'2022-11-14 17:38:46','2022-11-14 17:38:46',2,'','',NULL,1,NULL,NULL),(67,397,'小玉1','USDT',10000.000000,'2022-11-14 17:38:56','2022-11-14 17:38:56',2,'','',NULL,1,NULL,NULL),(68,396,'曾1','USDT',10000.000000,'2022-11-14 17:39:05','2022-11-14 17:39:05',2,'','',NULL,1,NULL,NULL),(69,395,'龙1','USDT',10000.000000,'2022-11-14 17:39:15','2022-11-14 17:39:15',2,'','',NULL,1,NULL,NULL),(70,394,'000002','USDT',10000.000000,'2022-11-14 17:39:30','2022-11-14 17:39:30',2,'','',NULL,1,NULL,NULL),(71,393,'8888883','USDT',10000.000000,'2022-11-14 17:39:44','2022-11-14 17:39:44',2,'','',NULL,1,NULL,NULL),(72,392,'88888882','USDT',10000.000000,'2022-11-14 17:40:17','2022-11-14 17:40:17',2,'','',NULL,1,NULL,NULL),(73,391,'000001','USDT',10000.000000,'2022-11-14 17:40:33','2022-11-14 17:40:33',2,'','',NULL,1,NULL,NULL),(74,390,'1','USDT',10000.000000,'2022-11-14 17:40:42','2022-11-14 17:40:42',2,'','',NULL,1,NULL,NULL),(75,384,'乐1','USDT',10000.000000,'2022-11-14 17:41:59','2022-11-14 17:41:59',2,'','',NULL,1,NULL,NULL),(76,383,'均2','USDT',10000.000000,'2022-11-14 17:42:06','2022-11-14 17:42:06',2,'','',NULL,1,NULL,NULL),(77,382,'均1','USDT',10000.000000,'2022-11-14 17:42:14','2022-11-14 17:42:14',2,'','',NULL,1,NULL,NULL),(78,418,'santhu.mdk@gmail.com','USDT',27433.000000,'2022-11-14 18:04:55','2022-11-14 18:04:55',2,'','',NULL,1,NULL,NULL),(79,417,'simhasriram@gmail.com','USDT',89600.000000,'2022-11-14 18:05:08','2022-11-14 18:05:08',2,'','',NULL,1,NULL,NULL),(80,389,'8888881','USDT',10000.000000,'2022-11-14 18:11:04','2022-11-14 18:11:04',2,'','',NULL,1,NULL,NULL),(81,420,'888888','USDT',10000.000000,'2022-11-14 18:11:32','2022-11-14 18:11:32',2,'','',NULL,1,NULL,NULL),(82,416,' 8888882','USDT',10000.000000,'2022-11-14 18:14:29','2022-11-14 18:14:29',2,'','',NULL,1,NULL,NULL),(83,425,'ganiya7@gmail.com','USDT',27691.050000,'2022-11-14 20:10:53','2022-11-14 20:10:53',2,'','',NULL,1,NULL,NULL),(84,424,'navin.simon365@gmail.com','USDT',226.730000,'2022-11-14 20:12:13','2022-11-14 20:12:13',2,'','',NULL,1,NULL,NULL),(85,381,'9985987232','USDT',400.000000,'2022-11-14 20:17:39','2022-11-14 20:17:39',2,'','',NULL,1,NULL,NULL),(86,387,'9966775767','USDT',500.000000,'2022-11-14 20:18:11','2022-11-14 20:18:11',2,'','',NULL,1,NULL,NULL),(87,426,'krkrishnan20@gmail.com','USDT',39.300000,'2022-11-14 20:30:49','2022-11-14 20:30:49',2,'','',NULL,1,NULL,NULL),(88,426,'krkrishnan20@gmail.com','USDT',39.300000,'2022-11-14 20:30:54','2022-11-14 20:30:54',2,'','',NULL,1,NULL,NULL),(89,426,'krkrishnan20@gmail.com','USDT',39.300000,'2022-11-14 20:30:56','2022-11-14 20:30:56',2,'','',NULL,1,NULL,NULL),(90,423,'9555579399','USDT',23.330000,'2022-11-14 21:52:31','2022-11-14 21:52:31',2,'','',NULL,1,NULL,NULL),(91,312,'18282@qq.com','USDT',100.000000,'2022-11-14 22:25:31','0000-00-00 00:00:00',1,'63724fd9d2293.png','',NULL,0,'TRLXXkW6mGNkb4TDH53iS1myWKVN31sJJ9',NULL),(92,312,'18282@qq.com','USDT',100.000000,'2022-11-14 22:33:49','0000-00-00 00:00:00',1,'637251cc1b0b6.png','','',0,'TRLXXkW6mGNkb4TDH53iS1myWKVN31sJJ9',NULL),(93,312,'18282@qq.com','USDT',100.000000,'2022-11-14 22:37:32','0000-00-00 00:00:00',1,'637252a97fc55.png','','TRC20',0,'TRLXXkW6mGNkb4TDH53iS1myWKVN31sJJ9',NULL),(94,312,'18282@qq.com','USDT',111.000000,'2022-11-14 22:38:55','0000-00-00 00:00:00',1,'637252fde566c.jpg','','TRC20',0,'TRLXXkW6mGNkb4TDH53iS1myWKVN31sJJ9',NULL),(95,421,'9663561432','USDT',402.000000,'2022-11-14 22:44:50','2022-11-14 22:44:50',2,'','',NULL,1,NULL,NULL),(96,422,'8951114260','USDT',401.000000,'2022-11-14 22:45:19','2022-11-14 22:45:19',2,'','',NULL,1,NULL,NULL),(97,434,'ravi7000raj7@gmail.com','USDT',220.000000,'2022-11-14 23:21:32','2022-11-14 23:21:32',2,'','',NULL,1,NULL,NULL),(98,333,'陈总333','USDT',10000.000000,'2022-11-15 00:13:49','2022-11-15 00:13:49',2,'','',NULL,1,NULL,NULL),(99,313,'1222222@qq.com','USDT',100.000000,'2022-11-15 10:57:10','0000-00-00 00:00:00',1,'637300043bf61.png','','TRC20',0,'TRLXXkW6mGNkb4TDH53iS1myWKVN31sJJ9',NULL),(100,381,'9985987232','USDT',160.000000,'2022-11-15 11:49:03','2022-11-15 13:59:54',2,'63730c2a9c880.jpeg','','TRC20',0,'TEwtmUXttCG9YaYtfhU8d7quKneQuPkFTR',NULL),(101,381,'9985987232','USDT',159.200000,'2022-11-15 13:58:28','2022-11-15 13:58:28',2,'','',NULL,1,NULL,NULL),(102,441,'9840607880','USDT',150.000000,'2022-11-15 14:51:21','2022-11-15 14:51:21',2,'','',NULL,1,NULL,NULL),(103,439,'8882588155','USDT',97.000000,'2022-11-15 15:12:29','2022-11-15 15:12:29',2,'','',NULL,1,NULL,NULL),(104,436,'9994265055','USDT',9.500000,'2022-11-15 15:13:40','2022-11-15 15:13:40',2,'','',NULL,1,NULL,NULL),(105,440,'9823606692','USDT',100.200000,'2022-11-15 15:51:46','2022-11-15 15:51:46',2,'','',NULL,1,NULL,NULL),(106,437,'kaluvala.123n@gmail.com','USDT',110.000000,'2022-11-15 15:52:14','2022-11-15 15:52:14',2,'','',NULL,1,NULL,NULL),(107,448,'vinimaheshwari1402@gmail.com','USDT',80.000000,'2022-11-15 20:33:03','2022-11-15 20:33:03',2,'','',NULL,1,NULL,NULL),(108,446,'8790558251','USDT',1265.000000,'2022-11-15 20:33:29','2022-11-15 20:33:29',2,'','',NULL,1,NULL,NULL),(109,444,'itsmydummy023@gmail.com','USDT',23.000000,'2022-11-15 22:20:01','2022-11-15 22:20:01',2,'','',NULL,1,NULL,NULL),(110,444,'itsmydummy023@gmail.com','USDT',502.000000,'2022-11-16 00:11:38','2022-11-16 00:13:00',2,'6373ba30a0bd0.png','','TRC20',0,'TEwtmUXttCG9YaYtfhU8d7quKneQuPkFTR',NULL),(111,444,'itsmydummy023@gmail.com','USDT',501.200000,'2022-11-16 00:14:14','2022-11-16 00:14:14',2,'','',NULL,1,NULL,NULL),(112,444,'itsmydummy023@gmail.com','USDT',100.000000,'2022-11-16 15:39:46','2022-11-16 15:39:46',2,'','',NULL,1,NULL,NULL),(113,444,'itsmydummy023@gmail.com','USDT',2500.000000,'2022-11-16 17:04:25','2022-11-16 17:04:25',2,'','',NULL,1,NULL,NULL),(114,427,'9937557307','USDT',20.000000,'2022-11-16 18:27:20','2022-11-16 18:27:20',2,'','',NULL,1,NULL,NULL),(115,440,'9823606692','USDT',64.200000,'2022-11-16 21:48:25','2022-11-16 21:48:25',2,'','',NULL,1,NULL,NULL),(116,427,'9937557307','USDT',31.540000,'2022-11-16 22:49:51','2022-11-16 22:49:51',2,'','',NULL,1,NULL,NULL),(117,311,'2323@qq.com','USDT',1.000000,'2022-11-16 23:05:14','0000-00-00 00:00:00',1,'6374fc26dd357.png','','TRC20',0,'TBvWccpVpeCV51XWVb4LRmyVKAnYSCzc1S',NULL),(118,381,'9985987232','USDT',200.000000,'2022-11-17 00:00:47','2022-11-17 00:00:47',2,'','',NULL,1,NULL,NULL),(119,440,'9823606692','USDT',104.200000,'2022-11-17 14:00:10','0000-00-00 00:00:00',1,'6375cde6bb5ec.jpeg','','TRC20',0,'TEwtmUXttCG9YaYtfhU8d7quKneQuPkFTR',NULL),(120,440,'9823606692','USDT',104.200000,'2022-11-17 14:01:46','2022-11-17 14:01:46',2,'','',NULL,1,NULL,NULL),(121,440,'9823606692','USDT',300.000000,'2022-11-17 16:45:08','2022-11-17 16:49:41',2,'6375f490a56e6.png','','TRC20',0,'TEwtmUXttCG9YaYtfhU8d7quKneQuPkFTR',NULL),(122,440,'9823606692','USDT',299.200000,'2022-11-17 16:50:20','2022-11-17 16:50:20',2,'','',NULL,1,NULL,NULL),(123,287,'王总287','USDT',10000.000000,'2022-11-17 20:25:33','2022-11-17 20:25:33',2,'','',NULL,1,NULL,NULL),(124,455,'Achugatlavenkat5678@gmail.com','BTC',201.960000,'2022-11-17 22:03:25','2022-11-17 22:06:44',2,'63763f28b10b6.jpg','','Bitcoin',0,'15tvArU26A3dYf9A923xUE3Cyoj2eSbNgG',NULL),(125,440,'9823606692','USDT',300.000000,'2022-11-17 23:40:41','2022-11-17 23:40:41',2,'','',NULL,1,NULL,NULL),(126,448,'vinimaheshwari1402@gmail.com','USDT',999.200000,'2022-11-18 14:50:01','2022-11-18 14:55:55',2,'63772b090decb.jpg','','TRC20',0,'TEwtmUXttCG9YaYtfhU8d7quKneQuPkFTR',NULL),(127,465,'9878352277','USDT',100.000000,'2022-11-18 15:23:00','2022-11-18 15:23:00',2,'','',NULL,1,NULL,NULL),(128,472,'shaiq123@gmail.com','USDT',100.000000,'2022-11-18 15:25:52','2022-11-18 15:25:52',2,'','',NULL,1,NULL,NULL),(129,474,'9191916667','USDT',10000.000000,'2022-11-18 16:47:48','2022-11-18 16:47:48',2,'','',NULL,1,NULL,NULL),(130,475,'9191916668','USDT',10000.000000,'2022-11-18 16:48:10','2022-11-18 16:48:10',2,'','',NULL,1,NULL,NULL),(131,476,'9191916669','USDT',10000.000000,'2022-11-18 16:48:24','2022-11-18 16:48:24',2,'','',NULL,1,NULL,NULL),(132,455,'Achugatlavenkat5678@gmail.com','USDT',201.960000,'2022-11-18 17:42:13','2022-11-18 17:42:13',2,'','',NULL,1,NULL,NULL),(133,465,'9878352277','USDT',345.300000,'2022-11-18 17:52:59','2022-11-18 17:55:14',2,'637755f264991.jpg','','TRC20',0,'TEwtmUXttCG9YaYtfhU8d7quKneQuPkFTR',NULL),(134,472,'shaiq123@gmail.com','USDT',100.000000,'2022-11-18 20:27:01','2022-11-18 20:27:01',2,'','',NULL,1,NULL,NULL),(135,488,'kalaidasan.060@gmail.com','USDT',54000.000000,'2022-11-18 21:49:51','2022-11-18 21:49:51',2,'','',NULL,1,NULL,NULL),(136,469,'neelimatabjul@gmail.com','USDT',114.000000,'2022-11-18 22:06:39','2022-11-18 22:10:55',2,'63779067c4a88.jpeg','','TRC20',0,'TEwtmUXttCG9YaYtfhU8d7quKneQuPkFTR',NULL),(137,167,'13888888888','USDT',10000.000000,'2022-11-19 13:50:14','2022-11-19 13:50:14',2,'','',NULL,1,NULL,NULL),(138,387,'9966775767','USDT',1010.000000,'2022-11-19 14:37:19','2022-11-19 14:37:19',2,'','',NULL,1,NULL,NULL),(139,448,'vinimaheshwari1402@gmail.com','USDT',399.200000,'2022-11-19 14:54:30','2022-11-19 15:38:00',2,'63787d86c51db.jpg','','TRC20',0,'TEwtmUXttCG9YaYtfhU8d7quKneQuPkFTR',NULL),(140,448,'vinimaheshwari1402@gmail.com','USDT',4100.000000,'2022-11-19 14:58:59','2022-11-19 14:58:59',2,'','',NULL,1,NULL,NULL),(141,448,'vinimaheshwari1402@gmail.com','USDT',482.800000,'2022-11-19 15:02:26','2022-11-19 15:02:26',2,'','',NULL,1,NULL,NULL),(142,448,'vinimaheshwari1402@gmail.com','USDT',17.200000,'2022-11-19 15:03:24','2022-11-19 15:03:24',2,'','',NULL,1,NULL,NULL),(143,167,'13888888888','USDT',10000.000000,'2022-11-19 19:46:03','2022-11-19 19:46:03',2,'','',NULL,1,NULL,NULL),(144,440,'9823606692','USDT',305.000000,'2022-11-19 21:02:18','2022-11-19 21:16:03',2,'6378d3d84161c.png','','TRC20',0,'TEwtmUXttCG9YaYtfhU8d7quKneQuPkFTR',NULL),(145,469,'neelimatabjul@gmail.com','USDT',114.200000,'2022-11-19 21:21:54','2022-11-19 21:25:57',2,'6378d83d4e791.png','','TRC20',0,'TEwtmUXttCG9YaYtfhU8d7quKneQuPkFTR',NULL),(146,497,'satish_eng2007@rediffmail.com','USDT',114.460000,'2022-11-19 21:35:51','2022-11-19 21:35:51',2,'','',NULL,1,NULL,NULL),(147,469,'neelimatabjul@gmail.com','USDT',44.200000,'2022-11-19 21:43:50','2022-11-19 21:45:19',2,'6378dd9271665.png','','TRC20',0,'TEwtmUXttCG9YaYtfhU8d7quKneQuPkFTR',NULL),(148,472,'shaiq123@gmail.com','USDT',200.000000,'2022-11-19 21:58:58','2022-11-19 22:16:44',2,'6378e11b23c61.jpg','','TRC20',0,'TEwtmUXttCG9YaYtfhU8d7quKneQuPkFTR',NULL),(149,387,'9966775767','USDT',980.930000,'2022-11-20 19:16:09','2022-11-20 19:16:09',2,'','',NULL,1,NULL,NULL),(150,167,'13888888888','USDT',10000.000000,'2022-11-21 00:09:43','2022-11-21 00:09:43',2,'','',NULL,1,NULL,NULL),(151,387,'9966775767','USDT',3000.000000,'2022-11-21 15:28:16','2022-11-21 15:28:16',2,'','',NULL,1,NULL,NULL),(152,472,'shaiq123@gmail.com','USDT',1140.510000,'2022-11-21 20:52:03','2022-11-21 21:05:33',2,'637b746a0f734.jpg','','TRC20',0,'TEwtmUXttCG9YaYtfhU8d7quKneQuPkFTR',NULL),(153,440,'9823606692','USDT',52.000000,'2022-11-21 22:50:20','2022-11-21 22:53:34',2,'637b9029e7a91.jpeg','','TRC20',0,'TEwtmUXttCG9YaYtfhU8d7quKneQuPkFTR',NULL),(154,495,'9448117712','USDT',50.200000,'2022-11-21 23:48:29','2022-11-21 23:55:01',2,'637b9dae8e011.jpg','','TRC20',0,'TEwtmUXttCG9YaYtfhU8d7quKneQuPkFTR',NULL),(155,381,'9985987232','USDT',160.000000,'2022-11-22 14:12:20','0000-00-00 00:00:00',1,'637c683fdb3c7.jpg','','TRC20',0,'TEwtmUXttCG9YaYtfhU8d7quKneQuPkFTR',NULL),(156,452,'9599900087','USDT',677.360000,'2022-11-22 15:23:28','2022-11-22 15:23:28',2,'','',NULL,1,NULL,NULL),(157,469,'neelimatabjul@gmail.com','USDT',114.010000,'2022-11-22 21:48:22','0000-00-00 00:00:00',1,'637cd31a5e1a5.png','','TRC20',0,'TEwtmUXttCG9YaYtfhU8d7quKneQuPkFTR',NULL),(158,469,'neelimatabjul@gmail.com','USDT',113.210000,'2022-11-22 22:25:42','2022-11-22 22:34:58',2,'637cdb2ade0d5.png','','TRC20',0,'TEwtmUXttCG9YaYtfhU8d7quKneQuPkFTR',NULL),(159,497,'satish_eng2007@rediffmail.com','USDT',113.180000,'2022-11-22 23:25:22','2022-11-22 23:51:24',2,'637ce9d346cb7.jpg','','TRC20',0,'TEwtmUXttCG9YaYtfhU8d7quKneQuPkFTR',NULL),(160,469,'neelimatabjul@gmail.com','USDT',455.000000,'2022-11-23 00:26:40','2022-11-23 00:30:42',2,'637cf83d6e970.png','','TRC20',0,'TEwtmUXttCG9YaYtfhU8d7quKneQuPkFTR',NULL),(161,393,'8888883','USDT',10000.000000,'2022-11-23 15:10:38','2022-11-23 15:10:38',2,'','',NULL,1,NULL,NULL),(162,433,'ruhilrs@yahoo.co.in','USDT',1138.150000,'2022-11-23 16:44:48','2022-11-23 16:47:41',2,'637ddd774c994.jpg','','TRC20',0,'TEwtmUXttCG9YaYtfhU8d7quKneQuPkFTR',NULL),(163,433,'ruhilrs@yahoo.co.in','USDT',2000.000000,'2022-11-23 18:05:03','2022-11-23 18:05:03',2,'','',NULL,1,NULL,NULL),(164,180,'444444@qq.com','USDT',1.000000,'2022-11-23 22:30:15','2022-11-23 23:53:54',1,'637e2e7619ec7.gif','','TRC20',0,'TJJ4y5Rgz2xHTb9yQNzmPMjYVo1uitfrBV',NULL),(165,535,'918446568966','USDT',10000.000000,'2022-11-23 23:52:01','2022-11-23 23:52:01',2,'','',NULL,1,NULL,NULL),(166,534,'919893777866','USDT',10000.000000,'2022-11-23 23:52:22','2022-11-23 23:52:22',2,'','',NULL,1,NULL,NULL),(167,533,'919579900666','USDT',10000.000000,'2022-11-23 23:52:41','2022-11-23 23:52:41',2,'','',NULL,1,NULL,NULL),(168,532,'917775000889','USDT',10000.000000,'2022-11-23 23:52:55','2022-11-23 23:52:55',2,'','',NULL,1,NULL,NULL),(169,531,'919323025678','USDT',10000.000000,'2022-11-23 23:53:10','2022-11-23 23:53:10',2,'','',NULL,1,NULL,NULL),(170,530,'919767134999','USDT',10000.000000,'2022-11-23 23:53:21','2022-11-23 23:53:21',2,'','',NULL,1,NULL,NULL),(171,529,'918976792999','USDT',10000.000000,'2022-11-23 23:53:35','2022-11-23 23:53:35',2,'','',NULL,1,NULL,NULL),(172,528,'919995236888','USDT',10000.000000,'2022-11-23 23:53:48','2022-11-23 23:53:48',2,'','',NULL,1,NULL,NULL),(173,527,'919940568487','USDT',10000.000000,'2022-11-23 23:54:04','2022-11-23 23:54:04',2,'','',NULL,1,NULL,NULL),(174,521,'919313323538','USDT',10000.000000,'2022-11-23 23:54:12','2022-11-23 23:54:12',2,'','',NULL,1,NULL,NULL),(175,523,'919868766777','USDT',10000.000000,'2022-11-23 23:54:30','2022-11-23 23:54:30',2,'','',NULL,1,NULL,NULL),(176,524,'91984917','USDT',10000.000000,'2022-11-23 23:54:42','2022-11-23 23:54:42',2,'','',NULL,1,NULL,NULL),(177,526,'919873431388','USDT',10000.000000,'2022-11-23 23:54:54','2022-11-23 23:54:54',2,'','',NULL,1,NULL,NULL),(178,525,'919849176898','USDT',10000.000000,'2022-11-23 23:55:05','2022-11-23 23:55:05',2,'','',NULL,1,NULL,NULL),(179,520,'919711265689','USDT',10000.000000,'2022-11-23 23:55:29','2022-11-23 23:55:29',2,'','',NULL,1,NULL,NULL),(180,519,'919833221168','USDT',10000.000000,'2022-11-23 23:55:38','2022-11-23 23:55:38',2,'','',NULL,1,NULL,NULL),(181,518,'919958125566','USDT',10000.000000,'2022-11-23 23:56:01','2022-11-23 23:56:01',2,'','',NULL,1,NULL,NULL),(182,516,'dong001','USDT',10000.000000,'2022-11-23 23:56:52','2022-11-23 23:56:52',2,'','',NULL,1,NULL,NULL),(183,469,'neelimatabjul@gmail.com','USDT',9739.810000,'2022-11-23 23:57:03','2022-11-24 00:00:51',2,'637e42bd9e704.png','','TRC20',0,'TEwtmUXttCG9YaYtfhU8d7quKneQuPkFTR',NULL),(184,517,'919899847869','USDT',10000.000000,'2022-11-23 23:57:04','2022-11-23 23:57:04',2,'','',NULL,1,NULL,NULL),(185,180,'444444@qq.com','USDT',1.000000,'2022-11-24 00:04:02','2022-11-24 00:06:56',2,'637e447012c6f.jpeg','','TRC20',0,'TJJ4y5Rgz2xHTb9yQNzmPMjYVo1uitfrBV','d181ebb9d0c4941e838247d4de12e550eaa383a9b0fa558e847ec5726ab91e8b'),(186,180,'444444@qq.com','USDT',1.000000,'2022-11-24 00:14:54','2022-11-24 00:16:03',2,'637e46fcd9148.jpeg','','TRC20',0,'TJJ4y5Rgz2xHTb9yQNzmPMjYVo1uitfrBV','659a4197f192cf2c1d9c18c43805007a3674b40ce70ae210c4b7046d6ca32b9f'),(187,536,'1234554321','USDT',1.000000,'2022-11-24 00:31:16','0000-00-00 00:00:00',1,'637e4ad104b8f.jpeg','','TRC20',0,'TEwtmUXttCG9YaYtfhU8d7quKneQuPkFTR',NULL),(188,180,'444444@qq.com','USDT',2.000000,'2022-11-24 00:36:32','0000-00-00 00:00:00',1,'637e4c0276493.png','','TRC20',0,'TJJ4y5Rgz2xHTb9yQNzmPMjYVo1uitfrBV',NULL),(189,180,'444444@qq.com','USDT',1.000000,'2022-11-24 00:36:45','2022-11-24 00:39:56',2,'637e4c1a31f7e.png','','TRC20',0,'TJJ4y5Rgz2xHTb9yQNzmPMjYVo1uitfrBV','9fef49c9251fc663d222cf351fd93fe904fab8f47d97b292cff653c9751dd167'),(190,536,'1234554321','USDT',1.100000,'2022-11-24 00:47:59','2022-11-24 00:48:01',2,'637e4eb9c765a.jpeg','','TRC20',0,'TEwtmUXttCG9YaYtfhU8d7quKneQuPkFTR','2ad7798a34273e0267d6286cd327374e97ba324d0c4e650347f5420b42c73dee'),(191,180,'444444@qq.com','USDT',1.120000,'2022-11-24 00:56:07','2022-11-24 00:57:02',2,'637e50a62e176.gif','','TRC20',0,'TJJ4y5Rgz2xHTb9yQNzmPMjYVo1uitfrBV','dcdc71f0dae0f133430d8fea8907719b6d858d5b08eba668a8c6ba3fe8df7c69'),(192,180,'444444@qq.com','USDT',1.130000,'2022-11-24 00:59:45','2022-11-24 01:08:01',2,'637e51806d798.jpeg','','TRC20',0,'TJJ4y5Rgz2xHTb9yQNzmPMjYVo1uitfrBV','ef5205b78f9b600e1ce75d87ba760c30c9b10477adc5b111b3999043b54dd9f6'),(193,543,'123123','USDT',10000.000000,'2022-11-24 17:36:13','2022-11-24 17:36:13',2,'','',NULL,1,NULL,NULL),(194,522,'himanshusahoo83@gmail.com','USDT',200.500000,'2022-11-24 19:24:20','2022-11-24 19:25:02',2,'637f54236e9bc.jpg','','TRC20',0,'TEwtmUXttCG9YaYtfhU8d7quKneQuPkFTR','990087d24eb0b0bccec1632df5152093d28609baa34ea5cadaa3df291c7cfb59'),(195,545,'saranvr15@gmail.com','USDT',799.000000,'2022-11-25 13:34:58','0000-00-00 00:00:00',1,'638053feed475.jpg','','TRC20',0,'TEwtmUXttCG9YaYtfhU8d7quKneQuPkFTR',NULL),(196,545,'saranvr15@gmail.com','USDT',798.280000,'2022-11-25 14:04:26','2022-11-25 14:04:26',2,'','',NULL,1,NULL,NULL),(197,472,'shaiq123@gmail.com','USDT',1002.000000,'2022-11-25 14:36:28','2022-11-25 14:37:02',2,'63806264f1970.jpg','','TRC20',0,'TEwtmUXttCG9YaYtfhU8d7quKneQuPkFTR','7d4b7ef056ff548bc478f94a27405e33ae857dfe2de558218a4b2f2adddcdc23'),(198,453,'9013382710','USDT',169.200000,'2022-11-25 15:26:53','2022-11-25 15:27:01',2,'63806dd5552cb.jpg','','TRC20',0,'TEwtmUXttCG9YaYtfhU8d7quKneQuPkFTR','3c736a2bc16916fddb9c86a190781e70b7092849bd88196ba548daf82e930cc7'),(199,473,'8800592589','USDT',70.000000,'2022-11-25 18:53:49','2022-11-25 19:32:45',2,'63809eb9423e4.jpg','','TRC20',0,'TEwtmUXttCG9YaYtfhU8d7quKneQuPkFTR',NULL),(200,473,'8800592589','USDT',50.000000,'2022-11-26 14:52:01','2022-11-26 15:00:06',2,'6381b78c37887.jpg','','TRC20',0,'TEwtmUXttCG9YaYtfhU8d7quKneQuPkFTR',NULL),(201,441,'9840607880','USDT',2002.200000,'2022-11-26 17:34:03','2022-11-26 17:35:02',2,'6381dd271a72a.png','','TRC20',0,'TEwtmUXttCG9YaYtfhU8d7quKneQuPkFTR','6fe399cb022bf4bd26405909d1c2daa602a18f5a37887065bfbb68333192c7e0'),(202,439,'8882588155','USDT',112.000000,'2022-11-26 20:23:20','2022-11-26 20:36:18',2,'6382053050d0e.jpg','','TRC20',0,'TVqXJsrDJLwr1LdTTidg98u2qdcWyBze3Z',NULL),(203,439,'8882588155','USDT',1000.000000,'2022-11-26 20:36:40','2022-11-26 20:36:40',2,'','',NULL,1,NULL,NULL);
/*!40000 ALTER TABLE `tw_recharge` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tw_trade`
--

DROP TABLE IF EXISTS `tw_trade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tw_trade` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(11) unsigned NOT NULL,
  `market` varchar(50) NOT NULL,
  `price` decimal(20,8) unsigned NOT NULL DEFAULT '0.00000000',
  `num` decimal(20,8) unsigned NOT NULL DEFAULT '0.00000000',
  `deal` decimal(20,8) unsigned NOT NULL DEFAULT '0.00000000',
  `mum` decimal(20,8) unsigned NOT NULL DEFAULT '0.00000000',
  `type` tinyint(2) unsigned NOT NULL DEFAULT '0',
  `sort` int(11) unsigned NOT NULL DEFAULT '0',
  `addtime` int(11) unsigned NOT NULL DEFAULT '0',
  `endtime` int(11) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`) USING BTREE,
  KEY `userid` (`userid`) USING BTREE,
  KEY `market` (`market`,`type`,`status`) USING BTREE,
  KEY `num` (`num`,`deal`) USING BTREE,
  KEY `status` (`status`) USING BTREE,
  KEY `market_2` (`market`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=142 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC COMMENT='交易下单表'
/*!50100 PARTITION BY RANGE (id)
(PARTITION p1 VALUES LESS THAN (500000) ENGINE = InnoDB,
 PARTITION p2 VALUES LESS THAN (1000000) ENGINE = InnoDB,
 PARTITION p3 VALUES LESS THAN (1500000) ENGINE = InnoDB,
 PARTITION p4 VALUES LESS THAN (2000000) ENGINE = InnoDB,
 PARTITION p5 VALUES LESS THAN (2500000) ENGINE = InnoDB,
 PARTITION p6 VALUES LESS THAN (3000000) ENGINE = InnoDB,
 PARTITION p7 VALUES LESS THAN (3500000) ENGINE = InnoDB,
 PARTITION p8 VALUES LESS THAN (4000000) ENGINE = InnoDB,
 PARTITION p9 VALUES LESS THAN (4500000) ENGINE = InnoDB,
 PARTITION p10 VALUES LESS THAN (5000000) ENGINE = InnoDB,
 PARTITION p11 VALUES LESS THAN (5500000) ENGINE = InnoDB,
 PARTITION p12 VALUES LESS THAN (6000000) ENGINE = InnoDB,
 PARTITION p13 VALUES LESS THAN (6500000) ENGINE = InnoDB,
 PARTITION p14 VALUES LESS THAN (7000000) ENGINE = InnoDB,
 PARTITION p15 VALUES LESS THAN (7500000) ENGINE = InnoDB,
 PARTITION p16 VALUES LESS THAN (8000000) ENGINE = InnoDB,
 PARTITION p17 VALUES LESS THAN (8500000) ENGINE = InnoDB,
 PARTITION p18 VALUES LESS THAN (9000000) ENGINE = InnoDB,
 PARTITION p19 VALUES LESS THAN (9500000) ENGINE = InnoDB,
 PARTITION p20 VALUES LESS THAN (10000000) ENGINE = InnoDB,
 PARTITION p21 VALUES LESS THAN (10500000) ENGINE = InnoDB,
 PARTITION p22 VALUES LESS THAN (11000000) ENGINE = InnoDB,
 PARTITION p23 VALUES LESS THAN (11500000) ENGINE = InnoDB,
 PARTITION p24 VALUES LESS THAN (12000000) ENGINE = InnoDB,
 PARTITION p25 VALUES LESS THAN (12500000) ENGINE = InnoDB,
 PARTITION p26 VALUES LESS THAN (13000000) ENGINE = InnoDB,
 PARTITION p27 VALUES LESS THAN (13500000) ENGINE = InnoDB,
 PARTITION p28 VALUES LESS THAN (14000000) ENGINE = InnoDB,
 PARTITION p29 VALUES LESS THAN (14500000) ENGINE = InnoDB,
 PARTITION p30 VALUES LESS THAN (15000000) ENGINE = InnoDB,
 PARTITION p31 VALUES LESS THAN (15500000) ENGINE = InnoDB,
 PARTITION p32 VALUES LESS THAN (16000000) ENGINE = InnoDB,
 PARTITION p33 VALUES LESS THAN (16500000) ENGINE = InnoDB,
 PARTITION p34 VALUES LESS THAN (17000000) ENGINE = InnoDB,
 PARTITION p35 VALUES LESS THAN (17500000) ENGINE = InnoDB,
 PARTITION p36 VALUES LESS THAN (18000000) ENGINE = InnoDB,
 PARTITION p37 VALUES LESS THAN (18500000) ENGINE = InnoDB,
 PARTITION p38 VALUES LESS THAN (19000000) ENGINE = InnoDB,
 PARTITION p39 VALUES LESS THAN (19500000) ENGINE = InnoDB,
 PARTITION p40 VALUES LESS THAN (20000000) ENGINE = InnoDB,
 PARTITION p41 VALUES LESS THAN (20500000) ENGINE = InnoDB,
 PARTITION p42 VALUES LESS THAN (21000000) ENGINE = InnoDB,
 PARTITION p43 VALUES LESS THAN (21500000) ENGINE = InnoDB,
 PARTITION p44 VALUES LESS THAN (22000000) ENGINE = InnoDB,
 PARTITION p45 VALUES LESS THAN (22500000) ENGINE = InnoDB,
 PARTITION p46 VALUES LESS THAN (23000000) ENGINE = InnoDB,
 PARTITION p47 VALUES LESS THAN (23500000) ENGINE = InnoDB,
 PARTITION p48 VALUES LESS THAN (24000000) ENGINE = InnoDB,
 PARTITION p49 VALUES LESS THAN (24500000) ENGINE = InnoDB,
 PARTITION p50 VALUES LESS THAN (25000000) ENGINE = InnoDB,
 PARTITION p51 VALUES LESS THAN (25500000) ENGINE = InnoDB,
 PARTITION p52 VALUES LESS THAN (26000000) ENGINE = InnoDB,
 PARTITION p53 VALUES LESS THAN (26500000) ENGINE = InnoDB,
 PARTITION p54 VALUES LESS THAN (27000000) ENGINE = InnoDB,
 PARTITION p55 VALUES LESS THAN (27500000) ENGINE = InnoDB,
 PARTITION p56 VALUES LESS THAN (28000000) ENGINE = InnoDB,
 PARTITION p57 VALUES LESS THAN (28500000) ENGINE = InnoDB,
 PARTITION p58 VALUES LESS THAN (29000000) ENGINE = InnoDB,
 PARTITION p59 VALUES LESS THAN (30000000) ENGINE = InnoDB,
 PARTITION p60 VALUES LESS THAN (30500000) ENGINE = InnoDB,
 PARTITION p61 VALUES LESS THAN (31000000) ENGINE = InnoDB,
 PARTITION p62 VALUES LESS THAN (31500000) ENGINE = InnoDB,
 PARTITION p63 VALUES LESS THAN (32000000) ENGINE = InnoDB,
 PARTITION p64 VALUES LESS THAN (32500000) ENGINE = InnoDB,
 PARTITION p65 VALUES LESS THAN (33000000) ENGINE = InnoDB,
 PARTITION p66 VALUES LESS THAN (33500000) ENGINE = InnoDB,
 PARTITION p67 VALUES LESS THAN (34000000) ENGINE = InnoDB,
 PARTITION p68 VALUES LESS THAN (34500000) ENGINE = InnoDB,
 PARTITION p69 VALUES LESS THAN (35000000) ENGINE = InnoDB,
 PARTITION p70 VALUES LESS THAN (35500000) ENGINE = InnoDB,
 PARTITION p71 VALUES LESS THAN (36000000) ENGINE = InnoDB,
 PARTITION p72 VALUES LESS THAN (36500000) ENGINE = InnoDB,
 PARTITION p73 VALUES LESS THAN (37000000) ENGINE = InnoDB,
 PARTITION p74 VALUES LESS THAN (37500000) ENGINE = InnoDB,
 PARTITION p75 VALUES LESS THAN (38000000) ENGINE = InnoDB,
 PARTITION p76 VALUES LESS THAN (38500000) ENGINE = InnoDB,
 PARTITION p77 VALUES LESS THAN (39000000) ENGINE = InnoDB,
 PARTITION p78 VALUES LESS THAN (39500000) ENGINE = InnoDB,
 PARTITION p79 VALUES LESS THAN (40000000) ENGINE = InnoDB,
 PARTITION p80 VALUES LESS THAN (40500000) ENGINE = InnoDB,
 PARTITION p81 VALUES LESS THAN (41000000) ENGINE = InnoDB,
 PARTITION p82 VALUES LESS THAN (41500000) ENGINE = InnoDB,
 PARTITION p83 VALUES LESS THAN (42000000) ENGINE = InnoDB,
 PARTITION p84 VALUES LESS THAN (42500000) ENGINE = InnoDB,
 PARTITION p85 VALUES LESS THAN (43000000) ENGINE = InnoDB,
 PARTITION p86 VALUES LESS THAN (43500000) ENGINE = InnoDB,
 PARTITION p87 VALUES LESS THAN (44000000) ENGINE = InnoDB,
 PARTITION p88 VALUES LESS THAN (44500000) ENGINE = InnoDB,
 PARTITION p89 VALUES LESS THAN (45000000) ENGINE = InnoDB,
 PARTITION p90 VALUES LESS THAN (45500000) ENGINE = InnoDB,
 PARTITION p91 VALUES LESS THAN (46000000) ENGINE = InnoDB,
 PARTITION p92 VALUES LESS THAN (46500000) ENGINE = InnoDB,
 PARTITION p93 VALUES LESS THAN (47000000) ENGINE = InnoDB,
 PARTITION p94 VALUES LESS THAN (47500000) ENGINE = InnoDB,
 PARTITION p95 VALUES LESS THAN (48000000) ENGINE = InnoDB,
 PARTITION p96 VALUES LESS THAN (48500000) ENGINE = InnoDB,
 PARTITION p97 VALUES LESS THAN (49000000) ENGINE = InnoDB,
 PARTITION p98 VALUES LESS THAN (49500000) ENGINE = InnoDB,
 PARTITION p99 VALUES LESS THAN (50000000) ENGINE = InnoDB,
 PARTITION p100 VALUES LESS THAN (50500000) ENGINE = InnoDB,
 PARTITION p101 VALUES LESS THAN (51000000) ENGINE = InnoDB,
 PARTITION p102 VALUES LESS THAN (51500000) ENGINE = InnoDB,
 PARTITION p103 VALUES LESS THAN (52000000) ENGINE = InnoDB,
 PARTITION p104 VALUES LESS THAN (52500000) ENGINE = InnoDB,
 PARTITION p105 VALUES LESS THAN (53000000) ENGINE = InnoDB,
 PARTITION p106 VALUES LESS THAN (53500000) ENGINE = InnoDB,
 PARTITION p107 VALUES LESS THAN (54000000) ENGINE = InnoDB,
 PARTITION p108 VALUES LESS THAN (54500000) ENGINE = InnoDB,
 PARTITION p109 VALUES LESS THAN (55000000) ENGINE = InnoDB,
 PARTITION p110 VALUES LESS THAN (55500000) ENGINE = InnoDB,
 PARTITION p111 VALUES LESS THAN (56000000) ENGINE = InnoDB,
 PARTITION p112 VALUES LESS THAN (56500000) ENGINE = InnoDB,
 PARTITION p113 VALUES LESS THAN (57000000) ENGINE = InnoDB,
 PARTITION p114 VALUES LESS THAN (57500000) ENGINE = InnoDB,
 PARTITION p115 VALUES LESS THAN (58000000) ENGINE = InnoDB,
 PARTITION p116 VALUES LESS THAN (58500000) ENGINE = InnoDB,
 PARTITION p117 VALUES LESS THAN (59000000) ENGINE = InnoDB,
 PARTITION p118 VALUES LESS THAN (59500000) ENGINE = InnoDB,
 PARTITION p119 VALUES LESS THAN (60000000) ENGINE = InnoDB,
 PARTITION p120 VALUES LESS THAN (60500000) ENGINE = InnoDB,
 PARTITION p121 VALUES LESS THAN (61000000) ENGINE = InnoDB,
 PARTITION p122 VALUES LESS THAN MAXVALUE ENGINE = InnoDB) */;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tw_trade`
--

LOCK TABLES `tw_trade` WRITE;
/*!40000 ALTER TABLE `tw_trade` DISABLE KEYS */;
INSERT INTO `tw_trade` VALUES (1,0,'MBN',0.00000000,757.93000000,0.00000000,757.93000000,1,0,1667270790,0,1),(2,0,'MBN',0.00000000,1502.90000000,0.00000000,1502.90000000,1,0,1667270813,0,1),(3,0,'MBN',0.00000000,2009.66000000,0.00000000,2009.66000000,2,0,1667270813,0,1),(4,0,'MBN',0.00000000,1419.17000000,0.00000000,1419.17000000,2,0,1667270813,0,1),(5,0,'MBN',0.00000000,1781.46000000,0.00000000,1781.46000000,2,0,1667270829,0,1),(6,0,'MBN',0.00000000,1446.98000000,0.00000000,1446.98000000,1,0,1667270832,0,1),(7,0,'MBN',0.00000000,2654.84000000,0.00000000,2654.84000000,1,0,1667270832,0,1),(8,0,'MBN',0.00000000,665.49000000,0.00000000,665.49000000,2,0,1667273977,0,1),(9,0,'MBN',0.00000000,2094.75000000,0.00000000,2094.75000000,2,0,1667273977,0,1),(10,0,'MBN',0.00000000,2872.60000000,0.00000000,2872.60000000,1,0,1667273977,0,1),(11,0,'MBN',0.00000000,1752.69000000,0.00000000,1752.69000000,1,0,1667285974,0,1),(12,0,'MBN',0.00000000,929.00000000,0.00000000,929.00000000,1,0,1667285984,0,1),(13,0,'MBN',0.00000000,1661.96000000,0.00000000,1661.96000000,1,0,1667285986,0,1),(14,0,'MBN',0.00000000,1943.74000000,0.00000000,1943.74000000,2,0,1667288537,0,1),(15,0,'MBN',0.00000000,890.96000000,0.00000000,890.96000000,1,0,1667288537,0,1),(16,0,'MBN',66.00000000,379.99000000,0.00000000,379.99000000,1,0,1667288740,0,1),(17,0,'MBN',66.00000000,2235.66000000,0.00000000,2235.66000000,2,0,1667288743,0,1),(18,0,'MBN',66.00000000,1448.96000000,0.00000000,1448.96000000,1,0,1667289055,0,1),(19,0,'MBN',66.00000000,1448.32000000,0.00000000,1448.32000000,1,0,1667289055,0,1),(20,0,'MBN',66.00000000,737.89000000,0.00000000,737.89000000,1,0,1667289056,0,1),(21,0,'MBN',66.00000000,2146.24000000,0.00000000,2146.24000000,2,0,1667289056,0,1),(22,0,'MBN',66.00000000,2478.28000000,0.00000000,2478.28000000,1,0,1667289056,0,1),(23,0,'MBN',66.00000000,1906.56000000,0.00000000,1906.56000000,2,0,1667289056,0,1),(24,0,'MBN',66.00000000,2084.15000000,0.00000000,2084.15000000,2,0,1667289062,0,1),(25,0,'MBN',66.00000000,1394.47000000,0.00000000,1394.47000000,2,0,1667289236,0,1),(26,0,'MBN',66.00000000,754.26000000,0.00000000,754.26000000,1,0,1667289239,0,1),(27,0,'MBN',66.00000000,1896.69000000,0.00000000,1896.69000000,1,0,1667289239,0,1),(28,0,'MBN',66.00000000,1374.89000000,0.00000000,1374.89000000,2,0,1667289308,0,1),(29,0,'MBN',66.00000000,936.24000000,0.00000000,936.24000000,1,0,1667289379,0,1),(30,0,'USDZ',66.00000000,2993.68000000,0.00000000,2993.68000000,1,0,1667290622,0,1),(31,0,'USDZ',66.00000000,1328.75000000,0.00000000,1328.75000000,2,0,1667290623,0,1),(32,0,'USDZ',66.00000000,899.05000000,0.00000000,899.05000000,1,0,1667290623,0,1),(33,0,'USDZ',66.00000000,384.46000000,0.00000000,384.46000000,1,0,1667290632,0,1),(34,0,'USDZ',66.00000000,1306.80000000,0.00000000,1306.80000000,1,0,1667291587,0,1),(35,0,'MBN',66.00000000,1217.26000000,0.00000000,1217.26000000,2,0,1667291921,0,1),(36,0,'MBN',396.00000000,249.22000000,0.00000000,249.22000000,2,0,1667350890,0,1),(37,0,'MBN',396.00000000,1626.88000000,0.00000000,1626.88000000,1,0,1667379413,0,1),(38,0,'MBN',0.00000000,1287.08000000,0.00000000,1287.08000000,1,0,1667556661,0,1),(39,0,'mbn_usdt',0.00000000,1941.01000000,0.00000000,1941.01000000,1,0,1667558565,0,1),(40,0,'mbn_usdt',0.00000000,2288.16000000,0.00000000,2288.16000000,1,0,1667558576,0,1),(41,0,'mbn_usdt',0.00000000,520.84000000,0.00000000,520.84000000,1,0,1667558576,0,1),(42,0,'mbn_usdt',0.00000000,2639.38000000,0.00000000,2639.38000000,2,0,1667558576,0,1),(43,0,'mbn_usdt',0.00000000,1277.12000000,0.00000000,1277.12000000,2,0,1667559792,0,1),(44,0,'mbn_usdt',0.00000000,737.42000000,0.00000000,737.42000000,1,0,1667559797,0,1),(45,0,'mbn_usdt',0.00000000,2117.44000000,0.00000000,2117.44000000,1,0,1667559797,0,1),(46,0,'mbn_usdt',0.00000000,1024.92000000,0.00000000,1024.92000000,1,0,1667559797,0,1),(47,0,'mbn_usdt',46.80000000,1469.82000000,0.00000000,1469.82000000,1,0,1667562660,0,1),(48,0,'mbn_usdt',46.80000000,465.18000000,0.00000000,465.18000000,2,0,1667562705,0,1),(49,0,'mbn_usdt',46.80000000,1822.19000000,0.00000000,1822.19000000,2,0,1667562725,0,1),(50,0,'mbn_usdt',46.80000000,2730.14000000,0.00000000,2730.14000000,1,0,1667562725,0,1),(51,0,'mbn_usdt',46.80000000,803.57000000,0.00000000,803.57000000,1,0,1667562725,0,1),(52,0,'mbn_usdt',46.80000000,1694.53000000,0.00000000,1694.53000000,2,0,1667562726,0,1),(53,0,'mbn_usdt',46.80000000,49.89000000,0.00000000,49.89000000,1,0,1667562726,0,1),(54,0,'mbn_usdt',46.80000000,1163.79000000,0.00000000,1163.79000000,1,0,1667562726,0,1),(55,0,'mbn_usdt',46.80000000,2868.10000000,0.00000000,2868.10000000,1,0,1667562744,0,1),(56,0,'mbn_usdt',46.80000000,2461.07000000,0.00000000,2461.07000000,1,0,1667562744,0,1),(57,0,'mbn_usdt',46.80000000,2601.26000000,0.00000000,2601.26000000,2,0,1667562766,0,1),(58,0,'mbn_usdt',274.80000000,249.12000000,0.00000000,249.12000000,2,0,1667563662,0,1),(59,0,'mbn_usdt',274.80000000,169.89000000,0.00000000,169.89000000,1,0,1667563667,0,1),(60,0,'mbn_usdt',274.80000000,246.13000000,0.00000000,246.13000000,2,0,1667563667,0,1),(61,0,'mbn_usdt',274.80000000,170.98000000,0.00000000,170.98000000,2,0,1667563667,0,1),(62,0,'mbn_usdt',274.80000000,154.97000000,0.00000000,154.97000000,2,0,1667563824,0,1),(63,0,'mbn_usdt',274.80000000,67.72000000,0.00000000,67.72000000,1,0,1667563829,0,1),(64,0,'mbn_usdt',274.80000000,158.79000000,0.00000000,158.79000000,1,0,1667563829,0,1),(65,0,'mbn_usdt',274.80000000,276.97000000,0.00000000,276.97000000,1,0,1667563829,0,1),(66,0,'mbn_usdt',274.80000000,188.83000000,0.00000000,188.83000000,1,0,1667563875,0,1),(67,0,'mbn_usdt',274.80000000,103.04000000,0.00000000,103.04000000,1,0,1667563875,0,1),(68,0,'mbn_usdt',274.80000000,198.65000000,0.00000000,198.65000000,2,0,1667563875,0,1),(69,0,'mbn_usdt',274.80000000,59.33000000,0.00000000,59.33000000,2,0,1667563875,0,1),(70,0,'mbn_usdt',274.80000000,248.08000000,0.00000000,248.08000000,1,0,1667563875,0,1),(71,0,'mbn_usdt',274.80000000,157.39000000,0.00000000,157.39000000,2,0,1667563875,0,1),(72,0,'mbn_usdt',274.80000000,119.89000000,0.00000000,119.89000000,1,0,1667563931,0,1),(73,0,'mbn_usdt',274.80000000,289.55000000,0.00000000,289.55000000,2,0,1667563931,0,1),(74,0,'mbn_usdt',274.80000000,96.38000000,0.00000000,96.38000000,1,0,1667563931,0,1),(75,0,'mbn_usdt',1618.80000000,182.31000000,0.00000000,182.31000000,2,0,1667564454,0,1),(76,0,'mbn_usdt',1618.80000000,132.52000000,0.00000000,132.52000000,2,0,1667564454,0,1),(77,0,'mbn_usdt',1618.80000000,71.02000000,0.00000000,71.02000000,2,0,1667564454,0,1),(78,0,'mbn_usdt',1618.80000000,181.11000000,0.00000000,181.11000000,1,0,1667564469,0,1),(79,0,'mbn_usdt',1618.80000000,181.46000000,0.00000000,181.46000000,2,0,1667564469,0,1),(80,0,'mbn_usdt',1618.80000000,85.87000000,0.00000000,85.87000000,1,0,1667564469,0,1),(81,0,'mbn_usdt',94.80000000,274.83000000,0.00000000,274.83000000,2,0,1667568457,0,1),(82,0,'mbn_usdt',9712.80000000,56.73000000,0.00000000,56.73000000,2,0,1667955601,0,1),(83,0,'mbn_usdt',9712.80000000,278.84000000,0.00000000,278.84000000,2,0,1667955601,0,1),(84,0,'mbn_usdt',9712.80000000,244.29000000,0.00000000,244.29000000,2,0,1667955601,0,1),(85,0,'mbn_usdt',9712.80000000,175.05000000,0.00000000,175.05000000,1,0,1668042002,0,1),(86,0,'mbn_usdt',9712.80000000,299.62000000,0.00000000,299.62000000,1,0,1668042002,0,1),(87,0,'mbn_usdt',9712.80000000,114.65000000,0.00000000,114.65000000,1,0,1668042002,0,1),(88,0,'mbn_usdt',9712.80000000,38.27000000,0.00000000,38.27000000,1,0,1668128401,0,1),(89,0,'mbn_usdt',9712.80000000,65.43000000,0.00000000,65.43000000,1,0,1668128401,0,1),(90,0,'mbn_usdt',9712.80000000,179.93000000,0.00000000,179.93000000,1,0,1668128401,0,1),(91,0,'mbn_usdt',9712.80000000,61.72000000,0.00000000,61.72000000,1,0,1668214801,0,1),(92,0,'mbn_usdt',9712.80000000,293.65000000,0.00000000,293.65000000,1,0,1668214801,0,1),(93,0,'mbn_usdt',9712.80000000,189.41000000,0.00000000,189.41000000,1,0,1668214801,0,1),(94,0,'mbn_usdt',9712.80000000,295.18000000,0.00000000,295.18000000,1,0,1668301201,0,1),(95,0,'mbn_usdt',9712.80000000,121.88000000,0.00000000,121.88000000,2,0,1668301201,0,1),(96,0,'mbn_usdt',9712.80000000,241.12000000,0.00000000,241.12000000,1,0,1668301201,0,1),(97,0,'mbn_usdt',9712.80000000,204.20000000,0.00000000,204.20000000,2,0,1668387601,0,1),(98,0,'mbn_usdt',9712.80000000,219.18000000,0.00000000,219.18000000,2,0,1668387601,0,1),(99,0,'mbn_usdt',9712.80000000,155.38000000,0.00000000,155.38000000,1,0,1668387601,0,1),(100,0,'mbn_usdt',9712.80000000,251.83000000,0.00000000,251.83000000,1,0,1668444817,0,1),(101,0,'mbn_usdt',9712.80000000,272.43000000,0.00000000,272.43000000,2,0,1668444817,0,1),(102,0,'mbn_usdt',9712.80000000,106.11000000,0.00000000,106.11000000,2,0,1668444817,0,1),(103,0,'mbn_usdt',9712.80000000,254.40000000,0.00000000,254.40000000,2,0,1668475801,0,1),(104,0,'mbn_usdt',9712.80000000,166.85000000,0.00000000,166.85000000,2,0,1668475801,0,1),(105,0,'mbn_usdt',9712.80000000,222.80000000,0.00000000,222.80000000,2,0,1668475801,0,1),(106,0,'mbn_usdt',9712.80000000,100.85000000,0.00000000,100.85000000,1,0,1668562201,0,1),(107,0,'mbn_usdt',9712.80000000,61.36000000,0.00000000,61.36000000,2,0,1668562201,0,1),(108,0,'mbn_usdt',9712.80000000,212.04000000,0.00000000,212.04000000,2,0,1668562201,0,1),(109,0,'mbn_usdt',9712.80000000,151.01000000,0.00000000,151.01000000,1,0,1668648601,0,1),(110,0,'mbn_usdt',9712.80000000,295.09000000,0.00000000,295.09000000,1,0,1668648601,0,1),(111,0,'mbn_usdt',9712.80000000,255.55000000,0.00000000,255.55000000,1,0,1668648601,0,1),(112,0,'mbn_usdt',9712.80000000,50.82000000,0.00000000,50.82000000,2,0,1668735002,0,1),(113,0,'mbn_usdt',9712.80000000,286.95000000,0.00000000,286.95000000,2,0,1668735002,0,1),(114,0,'mbn_usdt',9712.80000000,63.13000000,0.00000000,63.13000000,2,0,1668735002,0,1),(115,0,'mbn_usdt',9712.80000000,124.18000000,0.00000000,124.18000000,1,0,1668821401,0,1),(116,0,'mbn_usdt',9712.80000000,255.16000000,0.00000000,255.16000000,2,0,1668821401,0,1),(117,0,'mbn_usdt',9712.80000000,39.49000000,0.00000000,39.49000000,2,0,1668821401,0,1),(118,0,'mbn_usdt',9712.80000000,72.55000000,0.00000000,72.55000000,1,0,1668907801,0,1),(119,0,'mbn_usdt',9712.80000000,290.34000000,0.00000000,290.34000000,2,0,1668907801,0,1),(120,0,'mbn_usdt',9712.80000000,131.95000000,0.00000000,131.95000000,2,0,1668907801,0,1),(121,0,'mbn_usdt',9712.80000000,102.70000000,0.00000000,102.70000000,1,0,1668994201,0,1),(122,0,'mbn_usdt',9712.80000000,269.99000000,0.00000000,269.99000000,2,0,1668994201,0,1),(123,0,'mbn_usdt',9712.80000000,266.31000000,0.00000000,266.31000000,2,0,1668994201,0,1),(124,0,'mbn_usdt',9712.80000000,184.72000000,0.00000000,184.72000000,1,0,1669080601,0,1),(125,0,'mbn_usdt',9712.80000000,278.68000000,0.00000000,278.68000000,1,0,1669080601,0,1),(126,0,'mbn_usdt',9712.80000000,101.83000000,0.00000000,101.83000000,1,0,1669080601,0,1),(127,0,'mbn_usdt',9712.80000000,240.09000000,0.00000000,240.09000000,1,0,1669167002,0,1),(128,0,'mbn_usdt',9712.80000000,86.21000000,0.00000000,86.21000000,1,0,1669167002,0,1),(129,0,'mbn_usdt',9712.80000000,177.01000000,0.00000000,177.01000000,2,0,1669167002,0,1),(130,0,'mbn_usdt',9712.80000000,104.58000000,0.00000000,104.58000000,2,0,1669253401,0,1),(131,0,'mbn_usdt',9712.80000000,105.12000000,0.00000000,105.12000000,1,0,1669253401,0,1),(132,0,'mbn_usdt',9712.80000000,51.35000000,0.00000000,51.35000000,2,0,1669253401,0,1),(133,0,'mbn_usdt',9712.80000000,100.82000000,0.00000000,100.82000000,1,0,1669339802,0,1),(134,0,'mbn_usdt',9712.80000000,45.92000000,0.00000000,45.92000000,1,0,1669339802,0,1),(135,0,'mbn_usdt',9712.80000000,290.74000000,0.00000000,290.74000000,1,0,1669339802,0,1),(136,0,'mbn_usdt',9712.80000000,31.62000000,0.00000000,31.62000000,1,0,1669426201,0,1),(137,0,'mbn_usdt',9712.80000000,64.27000000,0.00000000,64.27000000,2,0,1669426201,0,1),(138,0,'mbn_usdt',9712.80000000,245.91000000,0.00000000,245.91000000,1,0,1669426201,0,1),(139,0,'mbn_usdt',9712.80000000,156.55000000,0.00000000,156.55000000,1,0,1669512601,0,1),(140,0,'mbn_usdt',9712.80000000,97.42000000,0.00000000,97.42000000,2,0,1669512601,0,1),(141,0,'mbn_usdt',9712.80000000,293.42000000,0.00000000,293.42000000,1,0,1669512601,0,1);
/*!40000 ALTER TABLE `tw_trade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tw_trade_json`
--

DROP TABLE IF EXISTS `tw_trade_json`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tw_trade_json` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `market` varchar(100) NOT NULL,
  `data` varchar(500) NOT NULL DEFAULT '',
  `type` varchar(100) NOT NULL DEFAULT '',
  `sort` int(11) unsigned NOT NULL DEFAULT '0',
  `addtime` int(11) unsigned NOT NULL DEFAULT '0',
  `endtime` int(11) unsigned NOT NULL DEFAULT '0',
  `status` int(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`) USING BTREE,
  KEY `status` (`status`) USING BTREE,
  KEY `market` (`market`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT COMMENT='交易图表表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tw_trade_json`
--

LOCK TABLES `tw_trade_json` WRITE;
/*!40000 ALTER TABLE `tw_trade_json` DISABLE KEYS */;
/*!40000 ALTER TABLE `tw_trade_json` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tw_trade_log`
--

DROP TABLE IF EXISTS `tw_trade_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tw_trade_log` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `market` varchar(50) CHARACTER SET gbk NOT NULL DEFAULT '',
  `price` decimal(20,8) unsigned NOT NULL DEFAULT '0.00000000',
  `num` decimal(20,8) unsigned NOT NULL DEFAULT '0.00000000',
  `mum` decimal(20,8) unsigned NOT NULL DEFAULT '0.00000000',
  `type` tinyint(2) unsigned NOT NULL,
  `addtime` int(11) unsigned NOT NULL DEFAULT '0',
  `endtime` int(11) unsigned NOT NULL DEFAULT '0',
  `status` int(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`) USING BTREE,
  KEY `status` (`status`) USING BTREE,
  KEY `main` (`market`,`status`,`addtime`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=154 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC
/*!50100 PARTITION BY RANGE (id)
(PARTITION p1 VALUES LESS THAN (1000000) ENGINE = InnoDB,
 PARTITION p2 VALUES LESS THAN (2000000) ENGINE = InnoDB,
 PARTITION p3 VALUES LESS THAN (3000000) ENGINE = InnoDB,
 PARTITION p4 VALUES LESS THAN (4000000) ENGINE = InnoDB,
 PARTITION p5 VALUES LESS THAN (5000000) ENGINE = InnoDB,
 PARTITION p6 VALUES LESS THAN (6000000) ENGINE = InnoDB,
 PARTITION p7 VALUES LESS THAN (7000000) ENGINE = InnoDB,
 PARTITION p8 VALUES LESS THAN (8000000) ENGINE = InnoDB,
 PARTITION p9 VALUES LESS THAN (9000000) ENGINE = InnoDB,
 PARTITION p10 VALUES LESS THAN (10000000) ENGINE = InnoDB,
 PARTITION p11 VALUES LESS THAN (11000000) ENGINE = InnoDB,
 PARTITION p12 VALUES LESS THAN (12000000) ENGINE = InnoDB,
 PARTITION p13 VALUES LESS THAN (13000000) ENGINE = InnoDB,
 PARTITION p14 VALUES LESS THAN (14000000) ENGINE = InnoDB,
 PARTITION p15 VALUES LESS THAN (15000000) ENGINE = InnoDB,
 PARTITION p16 VALUES LESS THAN (16000000) ENGINE = InnoDB,
 PARTITION p17 VALUES LESS THAN (17000000) ENGINE = InnoDB,
 PARTITION p18 VALUES LESS THAN (18000000) ENGINE = InnoDB,
 PARTITION p19 VALUES LESS THAN (19000000) ENGINE = InnoDB,
 PARTITION p20 VALUES LESS THAN (20000000) ENGINE = InnoDB,
 PARTITION p21 VALUES LESS THAN (21000000) ENGINE = InnoDB,
 PARTITION p22 VALUES LESS THAN (22000000) ENGINE = InnoDB,
 PARTITION p23 VALUES LESS THAN (23000000) ENGINE = InnoDB,
 PARTITION p24 VALUES LESS THAN (24000000) ENGINE = InnoDB,
 PARTITION p25 VALUES LESS THAN (25000000) ENGINE = InnoDB,
 PARTITION p26 VALUES LESS THAN (26000000) ENGINE = InnoDB,
 PARTITION p27 VALUES LESS THAN (27000000) ENGINE = InnoDB,
 PARTITION p28 VALUES LESS THAN (28000000) ENGINE = InnoDB,
 PARTITION p29 VALUES LESS THAN (29000000) ENGINE = InnoDB,
 PARTITION p30 VALUES LESS THAN (30000000) ENGINE = InnoDB,
 PARTITION p31 VALUES LESS THAN (31000000) ENGINE = InnoDB,
 PARTITION p32 VALUES LESS THAN (32000000) ENGINE = InnoDB,
 PARTITION p33 VALUES LESS THAN (33000000) ENGINE = InnoDB,
 PARTITION p34 VALUES LESS THAN (34000000) ENGINE = InnoDB,
 PARTITION p35 VALUES LESS THAN (35000000) ENGINE = InnoDB,
 PARTITION p36 VALUES LESS THAN (36000000) ENGINE = InnoDB,
 PARTITION p37 VALUES LESS THAN (37000000) ENGINE = InnoDB,
 PARTITION p38 VALUES LESS THAN (38000000) ENGINE = InnoDB,
 PARTITION p39 VALUES LESS THAN (39000000) ENGINE = InnoDB,
 PARTITION p40 VALUES LESS THAN (40000000) ENGINE = InnoDB,
 PARTITION p41 VALUES LESS THAN (41000000) ENGINE = InnoDB,
 PARTITION p42 VALUES LESS THAN (42000000) ENGINE = InnoDB,
 PARTITION p43 VALUES LESS THAN (43000000) ENGINE = InnoDB,
 PARTITION p44 VALUES LESS THAN (44000000) ENGINE = InnoDB,
 PARTITION p45 VALUES LESS THAN (45000000) ENGINE = InnoDB,
 PARTITION p46 VALUES LESS THAN (46000000) ENGINE = InnoDB,
 PARTITION p47 VALUES LESS THAN (47000000) ENGINE = InnoDB,
 PARTITION p48 VALUES LESS THAN (48000000) ENGINE = InnoDB,
 PARTITION p49 VALUES LESS THAN (49000000) ENGINE = InnoDB,
 PARTITION p50 VALUES LESS THAN (50000000) ENGINE = InnoDB,
 PARTITION p51 VALUES LESS THAN (51000000) ENGINE = InnoDB,
 PARTITION p52 VALUES LESS THAN (52000000) ENGINE = InnoDB,
 PARTITION p53 VALUES LESS THAN (53000000) ENGINE = InnoDB,
 PARTITION p54 VALUES LESS THAN (54000000) ENGINE = InnoDB,
 PARTITION p55 VALUES LESS THAN (55000000) ENGINE = InnoDB,
 PARTITION p56 VALUES LESS THAN (56000000) ENGINE = InnoDB,
 PARTITION p57 VALUES LESS THAN (57000000) ENGINE = InnoDB,
 PARTITION p58 VALUES LESS THAN (58000000) ENGINE = InnoDB,
 PARTITION p59 VALUES LESS THAN (59000000) ENGINE = InnoDB,
 PARTITION p60 VALUES LESS THAN (60000000) ENGINE = InnoDB,
 PARTITION p61 VALUES LESS THAN (61000000) ENGINE = InnoDB,
 PARTITION p62 VALUES LESS THAN (62000000) ENGINE = InnoDB,
 PARTITION p63 VALUES LESS THAN (63000000) ENGINE = InnoDB,
 PARTITION p64 VALUES LESS THAN (64000000) ENGINE = InnoDB,
 PARTITION p65 VALUES LESS THAN (65000000) ENGINE = InnoDB,
 PARTITION p66 VALUES LESS THAN (66000000) ENGINE = InnoDB,
 PARTITION p67 VALUES LESS THAN (67000000) ENGINE = InnoDB,
 PARTITION p68 VALUES LESS THAN (68000000) ENGINE = InnoDB,
 PARTITION p69 VALUES LESS THAN (69000000) ENGINE = InnoDB,
 PARTITION p70 VALUES LESS THAN (70000000) ENGINE = InnoDB,
 PARTITION p71 VALUES LESS THAN (71000000) ENGINE = InnoDB,
 PARTITION p72 VALUES LESS THAN (72000000) ENGINE = InnoDB,
 PARTITION p73 VALUES LESS THAN (73000000) ENGINE = InnoDB,
 PARTITION p74 VALUES LESS THAN (74000000) ENGINE = InnoDB,
 PARTITION p75 VALUES LESS THAN (75000000) ENGINE = InnoDB,
 PARTITION p76 VALUES LESS THAN (76000000) ENGINE = InnoDB,
 PARTITION p77 VALUES LESS THAN (77000000) ENGINE = InnoDB,
 PARTITION p78 VALUES LESS THAN (78000000) ENGINE = InnoDB,
 PARTITION p79 VALUES LESS THAN (79000000) ENGINE = InnoDB,
 PARTITION p80 VALUES LESS THAN (80000000) ENGINE = InnoDB,
 PARTITION p81 VALUES LESS THAN (81000000) ENGINE = InnoDB,
 PARTITION p82 VALUES LESS THAN (82000000) ENGINE = InnoDB,
 PARTITION p83 VALUES LESS THAN (83000000) ENGINE = InnoDB,
 PARTITION p84 VALUES LESS THAN (84000000) ENGINE = InnoDB,
 PARTITION p85 VALUES LESS THAN (85000000) ENGINE = InnoDB,
 PARTITION p86 VALUES LESS THAN (86000000) ENGINE = InnoDB,
 PARTITION p87 VALUES LESS THAN (87000000) ENGINE = InnoDB,
 PARTITION p88 VALUES LESS THAN (88000000) ENGINE = InnoDB,
 PARTITION p89 VALUES LESS THAN (89000000) ENGINE = InnoDB,
 PARTITION p90 VALUES LESS THAN (90000000) ENGINE = InnoDB,
 PARTITION p91 VALUES LESS THAN (91000000) ENGINE = InnoDB,
 PARTITION p92 VALUES LESS THAN (92000000) ENGINE = InnoDB,
 PARTITION p93 VALUES LESS THAN (93000000) ENGINE = InnoDB,
 PARTITION p94 VALUES LESS THAN (94000000) ENGINE = InnoDB,
 PARTITION p95 VALUES LESS THAN (95000000) ENGINE = InnoDB,
 PARTITION p96 VALUES LESS THAN (96000000) ENGINE = InnoDB,
 PARTITION p97 VALUES LESS THAN (97000000) ENGINE = InnoDB,
 PARTITION p98 VALUES LESS THAN (98000000) ENGINE = InnoDB,
 PARTITION p99 VALUES LESS THAN (99000000) ENGINE = InnoDB,
 PARTITION p100 VALUES LESS THAN (100000000) ENGINE = InnoDB,
 PARTITION p101 VALUES LESS THAN (101000000) ENGINE = InnoDB,
 PARTITION p102 VALUES LESS THAN (102000000) ENGINE = InnoDB,
 PARTITION p103 VALUES LESS THAN (103000000) ENGINE = InnoDB,
 PARTITION p104 VALUES LESS THAN (104000000) ENGINE = InnoDB,
 PARTITION p105 VALUES LESS THAN (105000000) ENGINE = InnoDB,
 PARTITION p106 VALUES LESS THAN (106000000) ENGINE = InnoDB,
 PARTITION p107 VALUES LESS THAN (107000000) ENGINE = InnoDB,
 PARTITION p108 VALUES LESS THAN (108000000) ENGINE = InnoDB,
 PARTITION p109 VALUES LESS THAN (109000000) ENGINE = InnoDB,
 PARTITION p110 VALUES LESS THAN (110000000) ENGINE = InnoDB,
 PARTITION p111 VALUES LESS THAN (111000000) ENGINE = InnoDB,
 PARTITION p112 VALUES LESS THAN (112000000) ENGINE = InnoDB,
 PARTITION p113 VALUES LESS THAN (113000000) ENGINE = InnoDB,
 PARTITION p114 VALUES LESS THAN (114000000) ENGINE = InnoDB,
 PARTITION p115 VALUES LESS THAN (115000000) ENGINE = InnoDB,
 PARTITION p116 VALUES LESS THAN (116000000) ENGINE = InnoDB,
 PARTITION p117 VALUES LESS THAN (117000000) ENGINE = InnoDB,
 PARTITION p118 VALUES LESS THAN (118000000) ENGINE = InnoDB,
 PARTITION p119 VALUES LESS THAN (119000000) ENGINE = InnoDB,
 PARTITION p120 VALUES LESS THAN (120000000) ENGINE = InnoDB,
 PARTITION p121 VALUES LESS THAN (121000000) ENGINE = InnoDB,
 PARTITION p122 VALUES LESS THAN MAXVALUE ENGINE = InnoDB) */;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tw_trade_log`
--

LOCK TABLES `tw_trade_log` WRITE;
/*!40000 ALTER TABLE `tw_trade_log` DISABLE KEYS */;
INSERT INTO `tw_trade_log` VALUES (1,'MBN',0.00000000,757.93000000,757.93000000,1,1667270790,0,1),(2,'MBN',0.00000000,1502.90000000,1502.90000000,1,1667270813,0,1),(3,'MBN',0.00000000,2009.66000000,2009.66000000,2,1667270813,0,1),(4,'MBN',0.00000000,1419.17000000,1419.17000000,2,1667270813,0,1),(5,'MBN',0.00000000,1781.46000000,1781.46000000,2,1667270829,0,1),(6,'MBN',0.00000000,1446.98000000,1446.98000000,1,1667270832,0,1),(7,'MBN',0.00000000,2654.84000000,2654.84000000,1,1667270833,0,1),(8,'MBN',0.00000000,665.49000000,665.49000000,2,1667273977,0,1),(9,'MBN',0.00000000,2094.75000000,2094.75000000,2,1667273977,0,1),(10,'MBN',0.00000000,2872.60000000,2872.60000000,1,1667273977,0,1),(11,'MBN',0.00000000,1752.69000000,1752.69000000,1,1667285974,0,1),(12,'MBN',0.00000000,929.00000000,929.00000000,1,1667285984,0,1),(13,'MBN',0.00000000,1661.96000000,1661.96000000,1,1667285986,0,1),(14,'MBN',0.00000000,0.00000000,0.00000000,1,1667286096,0,0),(15,'MBN',0.00000000,0.00000000,0.00000000,1,1667286991,0,0),(16,'MBN',0.00000000,1943.74000000,1943.74000000,2,1667288537,0,1),(17,'MBN',0.00000000,890.96000000,890.96000000,1,1667288537,0,1),(18,'MBN',66.00000000,379.99000000,379.99000000,1,1667288740,0,1),(19,'MBN',66.00000000,2235.66000000,2235.66000000,2,1667288743,0,1),(20,'MBN',0.00000000,0.00000000,0.00000000,1,1667289002,0,0),(21,'MBN',66.00000000,1448.96000000,1448.96000000,1,1667289055,0,1),(22,'MBN',66.00000000,1448.32000000,1448.32000000,1,1667289055,0,1),(23,'MBN',66.00000000,737.89000000,737.89000000,1,1667289056,0,1),(24,'MBN',66.00000000,2146.24000000,2146.24000000,2,1667289056,0,1),(25,'MBN',66.00000000,2478.28000000,2478.28000000,1,1667289056,0,1),(26,'MBN',66.00000000,1906.56000000,1906.56000000,2,1667289056,0,1),(27,'MBN',66.00000000,2084.15000000,2084.15000000,2,1667289062,0,1),(28,'MBN',66.00000000,1394.47000000,1394.47000000,2,1667289236,0,1),(29,'MBN',66.00000000,754.26000000,754.26000000,1,1667289239,0,1),(30,'MBN',66.00000000,1374.89000000,1374.89000000,2,1667289308,0,1),(31,'MBN',66.00000000,936.24000000,936.24000000,1,1667289379,0,1),(32,'USDZ',66.00000000,2993.68000000,2993.68000000,1,1667290622,0,1),(33,'USDZ',66.00000000,1328.75000000,1328.75000000,2,1667290623,0,1),(34,'USDZ',66.00000000,899.05000000,899.05000000,1,1667290623,0,1),(35,'USDZ',66.00000000,384.46000000,384.46000000,1,1667290632,0,1),(36,'USDZ',66.00000000,1306.80000000,1306.80000000,1,1667291587,0,1),(37,'MBN',66.00000000,1217.26000000,1217.26000000,2,1667291921,0,1),(38,'MBN',0.00000000,0.00000000,0.00000000,1,1667323802,0,0),(39,'MBN',396.00000000,249.22000000,249.22000000,2,1667350890,0,1),(40,'MBN',396.00000000,1626.88000000,1626.88000000,1,1667379413,0,1),(41,'MBN',0.00000000,0.00000000,0.00000000,1,1667410203,0,0),(42,'MBN',0.00000000,1287.08000000,1287.08000000,1,1667556661,0,1),(43,'mbn_usdt',0.00000000,1941.01000000,1941.01000000,1,1667558565,0,1),(44,'mbn_usdt',0.00000000,2288.16000000,2288.16000000,1,1667558576,0,1),(45,'mbn_usdt',0.00000000,520.84000000,520.84000000,1,1667558576,0,1),(46,'mbn_usdt',0.00000000,2639.38000000,2639.38000000,2,1667558576,0,1),(47,'mbn_usdt',0.00000000,0.00000000,0.00000000,1,1667558643,0,0),(48,'mbn_usdt',0.00000000,1277.12000000,1277.12000000,2,1667559792,0,1),(49,'mbn_usdt',0.00000000,737.42000000,737.42000000,1,1667559797,0,1),(50,'mbn_usdt',0.00000000,2117.44000000,2117.44000000,1,1667559797,0,1),(51,'mbn_usdt',0.00000000,1024.92000000,1024.92000000,1,1667559797,0,1),(52,'mbn_usdt',46.80000000,1469.82000000,1469.82000000,1,1667562660,0,1),(53,'mbn_usdt',46.80000000,465.18000000,465.18000000,2,1667562705,0,1),(54,'mbn_usdt',46.80000000,1822.19000000,1822.19000000,2,1667562725,0,1),(55,'mbn_usdt',46.80000000,2730.14000000,2730.14000000,1,1667562725,0,1),(56,'mbn_usdt',46.80000000,803.57000000,803.57000000,1,1667562725,0,1),(57,'mbn_usdt',46.80000000,1694.53000000,1694.53000000,2,1667562726,0,1),(58,'mbn_usdt',46.80000000,49.89000000,49.89000000,1,1667562726,0,1),(59,'mbn_usdt',46.80000000,1163.79000000,1163.79000000,1,1667562726,0,1),(60,'mbn_usdt',46.80000000,2868.10000000,2868.10000000,1,1667562744,0,1),(61,'mbn_usdt',46.80000000,2601.26000000,2601.26000000,2,1667562766,0,1),(62,'mbn_usdt',274.80000000,249.12000000,249.12000000,2,1667563662,0,1),(63,'mbn_usdt',274.80000000,169.89000000,169.89000000,1,1667563667,0,1),(64,'mbn_usdt',274.80000000,246.13000000,246.13000000,2,1667563667,0,1),(65,'mbn_usdt',274.80000000,170.98000000,170.98000000,2,1667563667,0,1),(66,'mbn_usdt',274.80000000,0.00000000,0.00000000,1,1667563805,0,0),(67,'mbn_usdt',274.80000000,154.97000000,154.97000000,2,1667563824,0,1),(68,'mbn_usdt',274.80000000,67.72000000,67.72000000,1,1667563829,0,1),(69,'mbn_usdt',274.80000000,158.79000000,158.79000000,1,1667563829,0,1),(70,'mbn_usdt',274.80000000,276.97000000,276.97000000,1,1667563829,0,1),(71,'mbn_usdt',274.80000000,188.83000000,188.83000000,1,1667563875,0,1),(72,'mbn_usdt',274.80000000,103.04000000,103.04000000,1,1667563875,0,1),(73,'mbn_usdt',274.80000000,198.65000000,198.65000000,2,1667563875,0,1),(74,'mbn_usdt',274.80000000,59.33000000,59.33000000,2,1667563875,0,1),(75,'mbn_usdt',274.80000000,248.08000000,248.08000000,1,1667563875,0,1),(76,'mbn_usdt',274.80000000,157.39000000,157.39000000,2,1667563875,0,1),(77,'mbn_usdt',274.80000000,119.89000000,119.89000000,1,1667563931,0,1),(78,'mbn_usdt',274.80000000,289.55000000,289.55000000,2,1667563931,0,1),(79,'mbn_usdt',274.80000000,96.38000000,96.38000000,1,1667563931,0,1),(80,'mbn_usdt',1618.80000000,182.31000000,182.31000000,2,1667564454,0,1),(81,'mbn_usdt',1618.80000000,132.52000000,132.52000000,2,1667564454,0,1),(82,'mbn_usdt',1618.80000000,71.02000000,71.02000000,2,1667564454,0,1),(83,'mbn_usdt',1618.80000000,181.11000000,181.11000000,1,1667564469,0,1),(84,'mbn_usdt',1618.80000000,181.46000000,181.46000000,2,1667564469,0,1),(85,'mbn_usdt',1618.80000000,85.87000000,85.87000000,1,1667564469,0,1),(86,'mbn_usdt',1618.80000000,0.00000000,0.00000000,1,1667564743,0,0),(87,'mbn_usdt',1618.80000000,0.00000000,0.00000000,1,1667564941,0,0),(88,'mbn_usdt',94.80000000,274.83000000,274.83000000,2,1667568457,0,1),(89,'mbn_usdt',1618.80000000,0.00000000,0.00000000,1,1667583003,0,0),(90,'mbn_usdt',9712.80000000,56.73000000,56.73000000,2,1667955601,0,1),(91,'mbn_usdt',9712.80000000,278.84000000,278.84000000,2,1667955601,0,1),(92,'mbn_usdt',9712.80000000,244.29000000,244.29000000,2,1667955601,0,1),(93,'mbn_usdt',9712.80000000,175.05000000,175.05000000,1,1668042002,0,1),(94,'mbn_usdt',9712.80000000,299.62000000,299.62000000,1,1668042002,0,1),(95,'mbn_usdt',9712.80000000,114.65000000,114.65000000,1,1668042002,0,1),(96,'mbn_usdt',9712.80000000,0.00000000,0.00000000,1,1668096002,0,0),(97,'mbn_usdt',9712.80000000,38.27000000,38.27000000,1,1668128401,0,1),(98,'mbn_usdt',9712.80000000,65.43000000,65.43000000,1,1668128401,0,1),(99,'mbn_usdt',9712.80000000,179.93000000,179.93000000,1,1668128401,0,1),(100,'mbn_usdt',9712.80000000,0.00000000,0.00000000,1,1668182402,0,0),(101,'mbn_usdt',9712.80000000,61.72000000,61.72000000,1,1668214801,0,1),(102,'mbn_usdt',9712.80000000,293.65000000,293.65000000,1,1668214801,0,1),(103,'mbn_usdt',9712.80000000,189.41000000,189.41000000,1,1668214801,0,1),(104,'mbn_usdt',9712.80000000,0.00000000,0.00000000,1,1668268801,0,0),(105,'mbn_usdt',9712.80000000,295.18000000,295.18000000,1,1668301201,0,1),(106,'mbn_usdt',9712.80000000,121.88000000,121.88000000,2,1668301201,0,1),(107,'mbn_usdt',9712.80000000,241.12000000,241.12000000,1,1668301201,0,1),(108,'mbn_usdt',9712.80000000,0.00000000,0.00000000,1,1668355202,0,0),(109,'mbn_usdt',9712.80000000,204.20000000,204.20000000,2,1668387601,0,1),(110,'mbn_usdt',9712.80000000,219.18000000,219.18000000,2,1668387601,0,1),(111,'mbn_usdt',9712.80000000,155.38000000,155.38000000,1,1668387601,0,1),(112,'mbn_usdt',9712.80000000,251.83000000,251.83000000,1,1668444817,0,1),(113,'mbn_usdt',9712.80000000,272.43000000,272.43000000,2,1668444817,0,1),(114,'mbn_usdt',9712.80000000,106.11000000,106.11000000,2,1668444817,0,1),(115,'mbn_usdt',9712.80000000,254.40000000,254.40000000,2,1668475801,0,1),(116,'mbn_usdt',9712.80000000,166.85000000,166.85000000,2,1668475801,0,1),(117,'mbn_usdt',9712.80000000,222.80000000,222.80000000,2,1668475801,0,1),(118,'mbn_usdt',9712.80000000,100.85000000,100.85000000,1,1668562201,0,1),(119,'mbn_usdt',9712.80000000,61.36000000,61.36000000,2,1668562201,0,1),(120,'mbn_usdt',9712.80000000,212.04000000,212.04000000,2,1668562201,0,1),(121,'mbn_usdt',9712.80000000,151.01000000,151.01000000,1,1668648601,0,1),(122,'mbn_usdt',9712.80000000,295.09000000,295.09000000,1,1668648601,0,1),(123,'mbn_usdt',9712.80000000,255.55000000,255.55000000,1,1668648601,0,1),(124,'mbn_usdt',9712.80000000,50.82000000,50.82000000,2,1668735002,0,1),(125,'mbn_usdt',9712.80000000,286.95000000,286.95000000,2,1668735002,0,1),(126,'mbn_usdt',9712.80000000,63.13000000,63.13000000,2,1668735002,0,1),(127,'mbn_usdt',9712.80000000,124.18000000,124.18000000,1,1668821401,0,1),(128,'mbn_usdt',9712.80000000,255.16000000,255.16000000,2,1668821401,0,1),(129,'mbn_usdt',9712.80000000,39.49000000,39.49000000,2,1668821401,0,1),(130,'mbn_usdt',9712.80000000,72.55000000,72.55000000,1,1668907801,0,1),(131,'mbn_usdt',9712.80000000,290.34000000,290.34000000,2,1668907801,0,1),(132,'mbn_usdt',9712.80000000,131.95000000,131.95000000,2,1668907801,0,1),(133,'mbn_usdt',9712.80000000,102.70000000,102.70000000,1,1668994201,0,1),(134,'mbn_usdt',9712.80000000,269.99000000,269.99000000,2,1668994201,0,1),(135,'mbn_usdt',9712.80000000,266.31000000,266.31000000,2,1668994201,0,1),(136,'mbn_usdt',9712.80000000,184.72000000,184.72000000,1,1669080601,0,1),(137,'mbn_usdt',9712.80000000,278.68000000,278.68000000,1,1669080601,0,1),(138,'mbn_usdt',9712.80000000,101.83000000,101.83000000,1,1669080601,0,1),(139,'mbn_usdt',9712.80000000,240.09000000,240.09000000,1,1669167002,0,1),(140,'mbn_usdt',9712.80000000,86.21000000,86.21000000,1,1669167002,0,1),(141,'mbn_usdt',9712.80000000,177.01000000,177.01000000,2,1669167002,0,1),(142,'mbn_usdt',9712.80000000,104.58000000,104.58000000,2,1669253401,0,1),(143,'mbn_usdt',9712.80000000,105.12000000,105.12000000,1,1669253401,0,1),(144,'mbn_usdt',9712.80000000,51.35000000,51.35000000,2,1669253401,0,1),(145,'mbn_usdt',9712.80000000,100.82000000,100.82000000,1,1669339802,0,1),(146,'mbn_usdt',9712.80000000,45.92000000,45.92000000,1,1669339802,0,1),(147,'mbn_usdt',9712.80000000,290.74000000,290.74000000,1,1669339802,0,1),(148,'mbn_usdt',9712.80000000,31.62000000,31.62000000,1,1669426201,0,1),(149,'mbn_usdt',9712.80000000,64.27000000,64.27000000,2,1669426201,0,1),(150,'mbn_usdt',9712.80000000,245.91000000,245.91000000,1,1669426201,0,1),(151,'mbn_usdt',9712.80000000,156.55000000,156.55000000,1,1669512601,0,1),(152,'mbn_usdt',9712.80000000,97.42000000,97.42000000,2,1669512601,0,1),(153,'mbn_usdt',9712.80000000,293.42000000,293.42000000,1,1669512601,0,1);
/*!40000 ALTER TABLE `tw_trade_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tw_tyhyorder`
--

DROP TABLE IF EXISTS `tw_tyhyorder`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tw_tyhyorder` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `uid` int(11) NOT NULL COMMENT '会员ID',
  `username` varchar(60) NOT NULL COMMENT '会员账号',
  `num` float(10,2) NOT NULL COMMENT '投资金额',
  `hybl` float(10,2) NOT NULL COMMENT '盈亏比例',
  `hyzd` int(11) NOT NULL COMMENT '合约涨跌1买涨2买跌',
  `coinname` varchar(30) NOT NULL COMMENT '交易对',
  `status` int(11) NOT NULL COMMENT '状态：1待结算2已结算3无效结算',
  `is_win` int(11) NOT NULL COMMENT '盈亏状态：1盈利2亏损',
  `buytime` datetime NOT NULL COMMENT '购买时间',
  `selltime` datetime NOT NULL COMMENT '结算时间',
  `intselltime` int(11) NOT NULL COMMENT '结算时间戳',
  `buyprice` decimal(12,6) NOT NULL COMMENT '建仓单价',
  `sellprice` decimal(12,6) NOT NULL COMMENT '结算单价',
  `ploss` decimal(12,6) NOT NULL COMMENT '盈亏金额',
  `time` int(11) NOT NULL COMMENT '结算分钟数',
  `kongyk` int(11) NOT NULL COMMENT '控制盈亏1盈利2亏损0未指定',
  `invit` varchar(60) NOT NULL COMMENT '邀请码(上级)',
  `tznum` int(11) NOT NULL DEFAULT '0' COMMENT '0未通知，1已通知',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='合约订单表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tw_tyhyorder`
--

LOCK TABLES `tw_tyhyorder` WRITE;
/*!40000 ALTER TABLE `tw_tyhyorder` DISABLE KEYS */;
/*!40000 ALTER TABLE `tw_tyhyorder` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tw_user`
--

DROP TABLE IF EXISTS `tw_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tw_user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `username` varchar(50) NOT NULL COMMENT '账号(邮箱)',
  `phone` varchar(50) NOT NULL COMMENT '手机号码',
  `money` decimal(20,8) NOT NULL COMMENT '合约体验金',
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '注册类型 1 手机  2 邮箱',
  `password` varchar(32) NOT NULL DEFAULT '' COMMENT '登陆密码',
  `paypassword` varchar(32) NOT NULL DEFAULT '' COMMENT '支付密码',
  `cardzm` varchar(225) NOT NULL COMMENT '身份证正面',
  `cardfm` varchar(225) NOT NULL COMMENT '身份证反面',
  `rzstatus` int(11) NOT NULL COMMENT '认证状态0未申请1已提交2已认让3已驳回',
  `level` int(11) NOT NULL DEFAULT '0' COMMENT '待定',
  `invit_1` varchar(50) NOT NULL DEFAULT '' COMMENT '上一代',
  `invit_2` varchar(50) NOT NULL DEFAULT '' COMMENT '上二代',
  `invit_3` varchar(50) NOT NULL DEFAULT '' COMMENT '上三代',
  `path` text NOT NULL COMMENT '团队路径',
  `logins` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '登陆次数',
  `addip` varchar(50) NOT NULL DEFAULT '' COMMENT '注册IP',
  `addr` varchar(50) NOT NULL DEFAULT '' COMMENT 'IP区域',
  `addtime` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '注册时间j',
  `endtime` int(11) unsigned NOT NULL DEFAULT '0',
  `lgtime` date NOT NULL COMMENT '登陆时间',
  `loginip` varchar(50) NOT NULL COMMENT '登陆IP',
  `loginaddr` varchar(225) NOT NULL COMMENT '登陆地址',
  `logintime` datetime NOT NULL COMMENT '登陆时间',
  `rztime` int(11) unsigned NOT NULL COMMENT '认证提交时间',
  `rzuptime` int(11) unsigned NOT NULL COMMENT '认证处理时间',
  `status` tinyint(11) unsigned NOT NULL DEFAULT '0' COMMENT '状态1正常2禁用',
  `txstate` int(11) NOT NULL COMMENT '提币状态1正常2禁止',
  `invit` varchar(50) DEFAULT NULL COMMENT '邀请码',
  `stoptime` int(11) NOT NULL COMMENT '禁止提现时间',
  `is_agent` int(11) NOT NULL DEFAULT '0' COMMENT '	0否1是',
  `area_code` varchar(255) DEFAULT NULL COMMENT '区号',
  `real_name` varchar(255) DEFAULT NULL,
  `area` varchar(255) DEFAULT NULL,
  `rztype` enum('1','2','3','4') DEFAULT NULL COMMENT ' 1 护照 2驾驶证 3SSN 4身份ID',
  `buy_on` int(1) NOT NULL DEFAULT '1' COMMENT '1允许交易2禁止交易',
  `lang` varchar(30) DEFAULT NULL COMMENT '默认语言',
  `user_type` int(1) DEFAULT '1' COMMENT '1=正常用户 2=测试用户',
  PRIMARY KEY (`id`) USING BTREE,
  KEY `username` (`username`) USING BTREE,
  KEY `status` (`status`) USING BTREE,
  KEY `invit_1` (`invit_1`),
  KEY `invit_2` (`invit_2`),
  KEY `invit_3` (`invit_3`)
) ENGINE=InnoDB AUTO_INCREMENT=551 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT COMMENT='用户信息表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tw_user`
--

LOCK TABLES `tw_user` WRITE;
/*!40000 ALTER TABLE `tw_user` DISABLE KEYS */;
INSERT INTO `tw_user` VALUES (165,'heima@gmail.com','99999999999',0.00000000,0,'e10adc3949ba59abbe56e057f20f883e','e10adc3949ba59abbe56e057f20f883e','62c15eb0f2ba7.png','62c15eb353434.png',2,0,'0','0','0','',235,'172.107.194.172','北美地区',1654349988,0,'2022-11-10','182.239.114.92','香港中国移动香港有限公司','2022-07-04 14:02:00',1656856236,1656856242,1,1,'XGVFDNEWQ',1656856447,1,NULL,'xhh','area','3',1,NULL,2),(167,'13888888888','',0.00000000,0,'e10adc3949ba59abbe56e057f20f883e','25d55ad283aa400af464c76d713c07ad','63723fc4c12bd.png','63723fc807e93.png',2,0,'0','0','0','',49,'185.213.149.152','欧洲和中东地区',1656255345,0,'2022-11-29','159.138.41.118','美国','2022-11-29 09:32:04',1668431948,0,1,1,'ZQDIYNMSL',0,1,NULL,'测试',NULL,NULL,1,NULL,2),(169,'123123@qq.com','草草草草',0.00000000,0,'e10adc3949ba59abbe56e057f20f883e','4297f44b13955235245b2497399d7a93','635b7a170b91e.png','635b7a19c054a.png',2,0,'167','0','0','167',6,'203.145.95.120','香港和记电讯移动网',1656674322,0,'2022-11-09','159.138.52.239','美国','2022-10-28 14:38:21',1666939418,1666947918,1,1,'YLDJSAPQZ',0,1,NULL,NULL,NULL,NULL,1,NULL,2),(180,'444444@qq.com','13444444444',0.00000000,1,'e10adc3949ba59abbe56e057f20f883e','e10adc3949ba59abbe56e057f20f883e','635c04b8c384d.png','635c04be0039d.png',2,0,'167','0','0','167',168,'202.43.234.84','澳大利亚',1666973810,0,'2022-11-29','159.138.52.239','美国','2022-11-29 14:41:11',1666974920,1666974966,1,1,'aopAV',0,0,NULL,'1222','area','1',1,NULL,1),(181,'555555@qq.com','13555555555',0.00000000,1,'e10adc3949ba59abbe56e057f20f883e','e10adc3949ba59abbe56e057f20f883e','63692242ca2a5.png','63692246b54b7.png',2,0,'167','0','0','167',37,'202.43.234.84','澳大利亚',1666973839,0,'2022-11-20','106.122.242.31','福建省泉州市电信','2022-11-20 21:05:53',1667834440,1667834467,1,1,'fZpIH',0,1,NULL,'近视手术','area','1',1,NULL,1),(282,'cs1','1312313213',0.00000000,1,'e10adc3949ba59abbe56e057f20f883e','','63748af915def.jpg','63748afd9cc2f.jpg',1,0,'165','0','0','165',6,'139.5.108.96','欧洲',1668066727,0,'2022-11-10','','','0000-00-00 00:00:00',1668582144,0,1,1,'hDclY',0,0,NULL,'测试手动阀手动阀',NULL,NULL,1,NULL,1),(286,'杜总286','1',0.00000000,1,'033cd6ff66d0b0b3a09a0a41da2c9f56','033cd6ff66d0b0b3a09a0a41da2c9f56','636e523c7916e.png','636e5240ea3b2.jpeg',2,0,'0','0','0','',109,'139.5.108.66','欧洲',1668083640,0,'2022-11-27','219.76.157.115','香港电讯盈科有限公司','2022-11-27 02:02:48',1668174402,1668174438,1,1,'JzkMT',0,1,NULL,'杜','area','3',1,NULL,1),(287,'王总287','1',0.00000000,1,'033cd6ff66d0b0b3a09a0a41da2c9f56','033cd6ff66d0b0b3a09a0a41da2c9f56','637627e0dbab1.png','637627e496ab4.png',2,0,'0','0','0','',4,'139.5.108.66','欧洲',1668083708,0,'2022-11-19','58.152.85.37','香港电讯盈科有限公司','2022-11-19 01:44:47',1668687846,1668687895,1,1,'mzVaG',0,1,NULL,'王','area','4',1,NULL,1),(288,'陈总288','1',0.00000000,1,'033cd6ff66d0b0b3a09a0a41da2c9f56','033cd6ff66d0b0b3a09a0a41da2c9f56','','',0,0,'0','0','0','',1,'139.5.108.66','欧洲',1668083773,0,'2022-11-16','194.233.85.147','德国','2022-11-16 23:12:10',0,0,1,1,'aSgqu',0,1,NULL,NULL,NULL,NULL,1,NULL,1),(289,'董总289','1',0.00000000,1,'033cd6ff66d0b0b3a09a0a41da2c9f56','033cd6ff66d0b0b3a09a0a41da2c9f56','636f48177a66a.jpg','636f481c914ca.jpg',1,0,'0','0','0','',19,'139.5.108.66','欧洲',1668083795,0,'2022-11-25','45.59.187.222','美国','2022-11-25 16:21:06',1668410797,0,1,1,'cVPlj',1668238691,1,NULL,'kjuih',NULL,NULL,1,NULL,2),(307,'tn168','116688',0.00000000,1,'e10adc3949ba59abbe56e057f20f883e','e10adc3949ba59abbe56e057f20f883e','636ef3e253444.jpg','636ef3e7349d2.jpg',2,0,'287','0','0','287',4,'18.162.44.23','美国马萨诸塞州大波士顿区麻省理工学院',1668096744,0,'2022-11-15','154.17.18.101','美国','2022-11-15 02:45:44',1668215785,1668215933,1,1,'agcQN',0,0,NULL,'托尼',NULL,NULL,1,NULL,1),(308,'8182727@qq.com','',0.00000000,2,'e10adc3949ba59abbe56e057f20f883e','','','',0,0,'180','167','0','167,180',0,'202.43.232.187','澳大利亚',1668096759,0,'0000-00-00','','','0000-00-00 00:00:00',0,0,1,1,'YVbDk',0,0,'',NULL,NULL,NULL,1,NULL,1),(309,'tn168168','111666888',0.00000000,1,'e10adc3949ba59abbe56e057f20f883e','e10adc3949ba59abbe56e057f20f883e','636ef4526a1aa.jpg','636ef45de5d84.jpg',2,0,'287','0','0','287',6,'18.162.44.23','美国马萨诸塞州大波士顿区麻省理工学院',1668097324,0,'2022-11-18','96.126.102.148','美国新泽西州Linode公司','2022-11-18 08:14:46',1668215904,1668215924,1,1,'QLbPx',0,0,NULL,'托尼2',NULL,NULL,1,NULL,1),(310,'123','1',0.00000000,1,'e10adc3949ba59abbe56e057f20f883e','e10adc3949ba59abbe56e057f20f883e','636e9675cce99.jpg','636e967e0ffef.jpg',2,0,'286','0','0','286',6,'8.212.41.76','美国科罗拉多州布隆菲尔德市Level 3通信股份有限公司',1668097876,0,'2022-11-13','219.76.157.135','香港电讯盈科有限公司','2022-11-13 01:55:07',1668191871,1668191887,1,1,'FJPmU',0,0,NULL,'罗美丽',NULL,NULL,1,NULL,1),(311,'2323@qq.com','',0.00000000,2,'1bbd886460827015e5d605ed44252251','','','',0,0,'180','167','0','167,180',0,'110.86.223.70','福建省泉州市电信',1668097928,0,'0000-00-00','','','0000-00-00 00:00:00',0,0,1,1,'TgbGn',0,0,'',NULL,NULL,NULL,1,NULL,1),(312,'18282@qq.com','',0.00000000,2,'e10adc3949ba59abbe56e057f20f883e','','','',0,0,'180','167','0','167,180',0,'202.43.232.187','澳大利亚',1668098310,0,'0000-00-00','','','0000-00-00 00:00:00',0,0,1,1,'LfjVh',0,0,'',NULL,NULL,NULL,1,NULL,1),(313,'1222222@qq.com','',0.00000000,2,'e10adc3949ba59abbe56e057f20f883e','e10adc3949ba59abbe56e057f20f883e','','',2,0,'180','167','0','167,180',9,'110.86.223.70','福建省泉州市电信',1668098348,0,'2022-11-14','159.138.52.239','美国','2022-11-14 15:44:34',0,0,1,1,'AZWCX',1668357223,0,'',NULL,NULL,NULL,1,NULL,1),(315,'qq878410','15073442176',0.00000000,1,'11b25b02122894cb58b37cd31fa54b91','d083d4e1d41e03711897c662541e41da','','',0,0,'289','0','0','289',3,'13.126.238.135','美国Xerox',1668163459,0,'2022-11-21','220.133.13.177','台湾省台北市HiNet','2022-11-21 15:03:10',0,0,1,1,'GpVla',0,0,NULL,NULL,NULL,NULL,1,NULL,1),(316,'zhuo918208','18016706520',0.00000000,1,'11b25b02122894cb58b37cd31fa54b91','d083d4e1d41e03711897c662541e41da','6375f6a078669.jpg','6375f6a3c3c3f.jpg',2,0,'289','0','0','289',4,'13.126.238.135','美国Xerox',1668163601,0,'2022-11-18','112.97.203.67','广东省深圳市联通','2022-11-18 15:28:42',1668675238,1668675409,1,1,'oZeSg',0,0,NULL,'ssfdsg',NULL,NULL,1,NULL,1),(317,'qq878411','1801670652',0.00000000,1,'11b25b02122894cb58b37cd31fa54b91','d083d4e1d41e03711897c662541e41da','636f50781ffba.jpg','636f507b4aa94.jpg',2,0,'289','0','0','289',7,'13.126.238.135','美国Xerox',1668163682,0,'2022-11-18','219.76.157.115','香港电讯盈科有限公司','2022-11-18 15:23:16',1668239485,1668239515,1,1,'UBYmC',0,0,NULL,'fdghg',NULL,NULL,1,NULL,1),(318,'qq878412','84 878737601',0.00000000,1,'11b25b02122894cb58b37cd31fa54b91','d083d4e1d41e03711897c662541e41da','636e353a285e1.jpg','636e353d1e38b.jpg',2,0,'289','0','0','289',6,'13.126.238.135','美国Xerox',1668163924,0,'2022-11-17','112.97.201.149','广东省深圳市联通','2022-11-17 16:50:06',1668166974,1668168155,1,1,'UVevs',0,0,NULL,'456654456',NULL,NULL,1,NULL,1),(319,'qq878413','84 878703278',0.00000000,1,'11b25b02122894cb58b37cd31fa54b91','d083d4e1d41e03711897c662541e41da','6375f41771dc7.jpg','6375f41aa0ee0.jpg',2,0,'289','0','0','289',2,'13.126.238.135','美国Xerox',1668163979,0,'2022-11-17','219.76.157.115','香港电讯盈科有限公司','2022-11-17 16:42:27',1668674643,1668674711,1,1,'ejLsf',0,0,NULL,'ghgjhh',NULL,NULL,1,NULL,1),(320,'qq878414','84 878703295',0.00000000,1,'11b25b02122894cb58b37cd31fa54b91','d083d4e1d41e03711897c662541e41da','636e3543203fc.jpg','636e3546bae66.jpg',2,0,'289','0','0','289',7,'13.126.238.135','美国Xerox',1668164094,0,'2022-11-17','112.97.201.149','广东省深圳市联通','2022-11-17 15:51:21',1668167382,1668168123,1,1,'xGTLI',0,0,NULL,'fdghdfhh',NULL,NULL,1,NULL,1),(321,'qq878415','84 878703429',0.00000000,1,'11b25b02122894cb58b37cd31fa54b91','d083d4e1d41e03711897c662541e41da','636f4c91dbb48.jpg','636f4c96f0757.jpg',2,0,'289','0','0','289',7,'13.126.238.135','美国Xerox',1668164180,0,'2022-11-17','112.97.202.183','广东省深圳市联通','2022-11-17 16:23:07',1668238489,1668238535,1,1,'FnLSe',0,0,NULL,'qqqq',NULL,NULL,1,NULL,1),(322,'K168','1234567',0.00000000,1,'e10adc3949ba59abbe56e057f20f883e','e10adc3949ba59abbe56e057f20f883e','636e76277b793.jpg','636e762a2c697.jpg',2,0,'287','0','0','287',41,'45.79.64.130','美国Linode数据中心',1668182758,0,'2022-11-26','92.38.189.25','俄罗斯','2022-11-26 01:14:39',1668183595,1668183626,1,1,'KhqCI',0,0,NULL,'刘德华',NULL,NULL,1,NULL,1),(323,'K1168','12345678',0.00000000,1,'e10adc3949ba59abbe56e057f20f883e','e10adc3949ba59abbe56e057f20f883e','636e764bc87a4.jpg','636e764f1509a.jpg',2,0,'287','0','0','287',25,'45.79.64.130','美国Linode数据中心',1668182770,0,'2022-11-26','92.38.189.25','俄罗斯','2022-11-26 01:02:16',1668184032,1668184924,1,1,'zdhYT',0,0,NULL,'我爱你',NULL,NULL,1,NULL,1),(324,'初','012',0.00000000,1,'e10adc3949ba59abbe56e057f20f883e','e10adc3949ba59abbe56e057f20f883e','636e775f5f8ee.jpg','636e776c62f0b.jpg',2,0,'287','0','0','287',40,'45.79.64.130','美国Linode数据中心',1668182797,0,'2022-11-26','92.38.131.144','俄罗斯','2022-11-26 23:43:08',1668183920,1668183948,1,1,'PqmdK',0,0,NULL,'李明月',NULL,NULL,1,NULL,1),(325,'初112233','0123',0.00000000,1,'e10adc3949ba59abbe56e057f20f883e','e10adc3949ba59abbe56e057f20f883e','636e765a82b85.jpg','636e76661466e.jpg',2,0,'287','0','0','287',49,'45.79.64.130','美国Linode数据中心',1668182820,0,'2022-11-26','92.38.131.144','俄罗斯','2022-11-26 23:43:49',1668183660,1668183853,1,1,'gKeRX',0,0,NULL,'联盟',NULL,NULL,1,NULL,1),(326,'青123','112233',0.00000000,1,'e10adc3949ba59abbe56e057f20f883e','e10adc3949ba59abbe56e057f20f883e','636e7b24b7135.jpg','636e7b2865b86.jpg',2,0,'287','0','0','287',34,'45.79.64.130','美国Linode数据中心',1668183294,0,'2022-11-27','92.38.131.144','俄罗斯','2022-11-27 07:34:48',1668184873,1668184916,1,1,'qKBpd',0,0,NULL,'awjkfn',NULL,NULL,1,NULL,1),(327,'青1234','1122333',0.00000000,1,'e10adc3949ba59abbe56e057f20f883e','e10adc3949ba59abbe56e057f20f883e','636e7afac78dc.jpg','636e7b011687f.jpg',2,0,'287','0','0','287',33,'45.79.64.130','美国Linode数据中心',1668183329,0,'2022-11-27','92.38.131.144','俄罗斯','2022-11-27 07:34:21',1668184834,1668184911,1,1,'rPEsI',0,0,NULL,'wijaf',NULL,NULL,1,NULL,1),(328,'456','+919264119374',0.00000000,1,'e10adc3949ba59abbe56e057f20f883e','e10adc3949ba59abbe56e057f20f883e','636e952dce524.jpg','636e9532d6036.jpg',2,0,'286','0','0','286',27,'219.76.157.135','香港电讯盈科有限公司',1668188957,0,'2022-11-27','111.241.194.125','台湾省台北市HiNet','2022-11-27 06:47:02',1668191576,1668191682,1,1,'Hepid',0,0,NULL,'莫妮卡',NULL,NULL,1,NULL,1),(329,'789','+918769048701',0.00000000,1,'e10adc3949ba59abbe56e057f20f883e','e10adc3949ba59abbe56e057f20f883e','636e959b296de.JPG','636e959f0e3c2.JPG',2,0,'286','0','0','286',64,'219.76.157.135','香港电讯盈科有限公司',1668188977,0,'2022-11-27','218.253.8.196','香港HKCABLE','2022-11-27 06:44:43',1668191649,1668191674,1,1,'yANmK',0,0,NULL,'萨瓦迪卡',NULL,NULL,1,NULL,1),(330,'147','+919885026148',0.00000000,1,'e10adc3949ba59abbe56e057f20f883e','e10adc3949ba59abbe56e057f20f883e','636e96701d1c2.jpg','636e96767cce1.jpg',2,0,'286','0','0','286',28,'219.76.157.135','香港电讯盈科有限公司',1668189001,0,'2022-11-27','220.133.13.177','台湾省台北市HiNet','2022-11-27 06:42:56',1668191863,1668191883,1,1,'ZhzTy',0,0,NULL,'艾米丽',NULL,NULL,1,NULL,1),(331,'258','+917684057887',0.00000000,1,'e10adc3949ba59abbe56e057f20f883e','e10adc3949ba59abbe56e057f20f883e','636e96a86384c.jpg','636e96adf31da.jpg',2,0,'286','0','0','286',33,'219.76.157.135','香港电讯盈科有限公司',1668189019,0,'2022-11-27','185.212.63.136','欧洲和中东地区','2022-11-27 06:59:34',1668191920,1668191933,1,1,'zdycT',0,0,NULL,'欧柠',NULL,NULL,1,NULL,1),(332,'oc8ho617@yahoo.com','',0.00000000,2,'14194c1fd63dce6410c530c17e1a5644','','','',0,0,'287','0','0','287',1,'173.48.151.50','美国弗吉尼亚州劳登县阿什本地区Verizon Online有限公司',1668227111,0,'2022-11-12','','','0000-00-00 00:00:00',0,0,1,1,'wbtUi',0,0,'',NULL,NULL,NULL,1,NULL,1),(333,'陈总333','123456789',0.00000000,1,'033cd6ff66d0b0b3a09a0a41da2c9f56','033cd6ff66d0b0b3a09a0a41da2c9f56','6374b83ed2c24.jpeg','6374b851c9aef.jpeg',2,0,'0','0','0','',13,'35.213.212.228','美国Merit网络公司',1668237871,0,'2022-11-17','38.54.101.118','美国华盛顿Cogent通信公司','2022-11-17 18:13:20',1668593748,1668593780,1,1,'GCYQv',0,1,NULL,'陈总','area','1',1,NULL,1);
/*!40000 ALTER TABLE `tw_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tw_user_coin`
--

DROP TABLE IF EXISTS `tw_user_coin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tw_user_coin` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(10) unsigned NOT NULL,
  `usdt` decimal(20,8) unsigned NOT NULL DEFAULT '0.00000000',
  `usdtd` decimal(20,8) unsigned NOT NULL DEFAULT '0.00000000',
  `usdtb` varchar(200) NOT NULL DEFAULT '0',
  `btc` decimal(20,8) unsigned NOT NULL DEFAULT '0.00000000',
  `btcd` decimal(20,8) unsigned NOT NULL DEFAULT '0.00000000',
  `btcb` varchar(200) NOT NULL DEFAULT '0',
  `eth` decimal(20,8) unsigned NOT NULL DEFAULT '0.00000000',
  `ethd` decimal(20,8) unsigned NOT NULL DEFAULT '0.00000000',
  `ethb` varchar(200) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`) USING BTREE,
  KEY `userid` (`userid`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT COMMENT='用户币种表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tw_user_coin`
--

LOCK TABLES `tw_user_coin` WRITE;
/*!40000 ALTER TABLE `tw_user_coin` DISABLE KEYS */;
/*!40000 ALTER TABLE `tw_user_coin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tw_user_log`
--

DROP TABLE IF EXISTS `tw_user_log`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tw_user_log` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userid` int(10) unsigned NOT NULL,
  `type` varchar(200) NOT NULL DEFAULT '',
  `remark` varchar(200) NOT NULL DEFAULT '',
  `addip` varchar(200) NOT NULL DEFAULT '',
  `addr` varchar(200) NOT NULL DEFAULT '',
  `sort` int(11) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  `endtime` int(11) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`) USING BTREE,
  KEY `userid` (`userid`) USING BTREE,
  KEY `status` (`status`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT COMMENT='用户记录表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tw_user_log`
--

LOCK TABLES `tw_user_log` WRITE;
/*!40000 ALTER TABLE `tw_user_log` DISABLE KEYS */;
/*!40000 ALTER TABLE `tw_user_log` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tw_user_qianbao`
--

DROP TABLE IF EXISTS `tw_user_qianbao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8mb4 */;
CREATE TABLE `tw_user_qianbao` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `userid` int(11) unsigned NOT NULL COMMENT '会员ID',
  `coinname` varchar(200) NOT NULL COMMENT '会员账号',
  `name` varchar(200) NOT NULL DEFAULT '' COMMENT '币名称',
  `remark` varchar(200) NOT NULL COMMENT '地址备注',
  `czline` varchar(200) NOT NULL COMMENT '充值网络',
  `addr` varchar(200) NOT NULL DEFAULT '' COMMENT '提币地址',
  `sort` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `addtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '添加时间',
  `status` int(4) NOT NULL DEFAULT '0' COMMENT '状态',
  PRIMARY KEY (`id`) USING BTREE,
  KEY `status` (`status`) USING BTREE,
  KEY `userid` (`userid`) USING BTREE,
  KEY `coinname` (`coinname`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 ROW_FORMAT=COMPACT COMMENT='用户钱包表';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tw_user_qianbao`
--

LOCK TABLES `tw_user_qianbao` WRITE;
/*!40000 ALTER TABLE `tw_user_qianbao` DISABLE KEYS */;
INSERT INTO `tw_user_qianbao` VALUES (6,473,'8800592589','usdt','My','','0xd38083107aa17fc1dc9a54d4d752e4c1d6a781bc',1,'2022-11-26 02:03:37',1);
/*!40000 ALTER TABLE `tw_user_qianbao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'jiaoyisuo666'
--

--
-- Dumping routines for database 'jiaoyisuo666'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-29 18:50:03
