/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 80019
 Source Host           : localhost:3306
 Source Schema         : virusfallflat

 Target Server Type    : MySQL
 Target Server Version : 80019
 File Encoding         : 65001

 Date: 11/06/2020 21:42:50
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `admin_name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '123456',
  `login_time` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`admin_name`, `admin_password`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('abc', '123', NULL);
INSERT INTO `admin` VALUES ('Einstein', '123456', NULL);
INSERT INTO `admin` VALUES ('inphantasm', '123456', NULL);
INSERT INTO `admin` VALUES ('NKU丨阳', '123456', NULL);

-- ----------------------------
-- Table structure for china_cured
-- ----------------------------
DROP TABLE IF EXISTS `china_cured`;
CREATE TABLE `china_cured`  (
  `province` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `T200606` int(0) NULL DEFAULT NULL,
  `T200607` int(0) NULL DEFAULT NULL,
  PRIMARY KEY (`province`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of china_cured
-- ----------------------------
INSERT INTO `china_cured` VALUES ('上海', 663, 664);
INSERT INTO `china_cured` VALUES ('云南', 183, 183);
INSERT INTO `china_cured` VALUES ('内蒙古', 213, 213);
INSERT INTO `china_cured` VALUES ('北京', 583, 583);
INSERT INTO `china_cured` VALUES ('台湾', 429, 430);
INSERT INTO `china_cured` VALUES ('吉林', 150, 151);
INSERT INTO `china_cured` VALUES ('四川', 558, 558);
INSERT INTO `china_cured` VALUES ('天津', 189, 189);
INSERT INTO `china_cured` VALUES ('宁夏', 75, 75);
INSERT INTO `china_cured` VALUES ('安徽', 985, 985);
INSERT INTO `china_cured` VALUES ('山东', 780, 780);
INSERT INTO `china_cured` VALUES ('山西', 198, 198);
INSERT INTO `china_cured` VALUES ('广东', 1584, 1584);
INSERT INTO `china_cured` VALUES ('广西', 252, 252);
INSERT INTO `china_cured` VALUES ('新疆', 73, 73);
INSERT INTO `china_cured` VALUES ('江苏', 653, 653);
INSERT INTO `china_cured` VALUES ('江西', 931, 931);
INSERT INTO `china_cured` VALUES ('河北', 322, 322);
INSERT INTO `china_cured` VALUES ('河南', 1254, 1254);
INSERT INTO `china_cured` VALUES ('浙江', 1267, 1267);
INSERT INTO `china_cured` VALUES ('海南', 162, 162);
INSERT INTO `china_cured` VALUES ('湖北', 63623, 63623);
INSERT INTO `china_cured` VALUES ('湖南', 1015, 1015);
INSERT INTO `china_cured` VALUES ('澳门', 45, 45);
INSERT INTO `china_cured` VALUES ('甘肃', 137, 137);
INSERT INTO `china_cured` VALUES ('福建', 356, 356);
INSERT INTO `china_cured` VALUES ('西藏', 1, 1);
INSERT INTO `china_cured` VALUES ('贵州', 145, 145);
INSERT INTO `china_cured` VALUES ('辽宁', 147, 147);
INSERT INTO `china_cured` VALUES ('重庆', 573, 573);
INSERT INTO `china_cured` VALUES ('陕西', 305, 305);
INSERT INTO `china_cured` VALUES ('青海', 18, 18);
INSERT INTO `china_cured` VALUES ('香港', 1045, 1048);
INSERT INTO `china_cured` VALUES ('黑龙江', 934, 934);

-- ----------------------------
-- Table structure for china_death
-- ----------------------------
DROP TABLE IF EXISTS `china_death`;
CREATE TABLE `china_death`  (
  `province` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `T200606` int(0) NULL DEFAULT NULL,
  `T200607` int(0) NULL DEFAULT NULL,
  PRIMARY KEY (`province`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of china_death
-- ----------------------------
INSERT INTO `china_death` VALUES ('上海', 7, 7);
INSERT INTO `china_death` VALUES ('云南', 2, 2);
INSERT INTO `china_death` VALUES ('内蒙古', 1, 1);
INSERT INTO `china_death` VALUES ('北京', 9, 9);
INSERT INTO `china_death` VALUES ('台湾', 7, 7);
INSERT INTO `china_death` VALUES ('吉林', 2, 2);
INSERT INTO `china_death` VALUES ('四川', 3, 3);
INSERT INTO `china_death` VALUES ('天津', 3, 3);
INSERT INTO `china_death` VALUES ('宁夏', 0, 0);
INSERT INTO `china_death` VALUES ('安徽', 6, 6);
INSERT INTO `china_death` VALUES ('山东', 7, 7);
INSERT INTO `china_death` VALUES ('山西', 0, 0);
INSERT INTO `china_death` VALUES ('广东', 8, 8);
INSERT INTO `china_death` VALUES ('广西', 2, 2);
INSERT INTO `china_death` VALUES ('新疆', 3, 3);
INSERT INTO `china_death` VALUES ('江苏', 0, 0);
INSERT INTO `china_death` VALUES ('江西', 1, 1);
INSERT INTO `china_death` VALUES ('河北', 6, 6);
INSERT INTO `china_death` VALUES ('河南', 22, 22);
INSERT INTO `china_death` VALUES ('浙江', 1, 1);
INSERT INTO `china_death` VALUES ('海南', 6, 6);
INSERT INTO `china_death` VALUES ('湖北', 4512, 4512);
INSERT INTO `china_death` VALUES ('湖南', 4, 4);
INSERT INTO `china_death` VALUES ('澳门', 0, 0);
INSERT INTO `china_death` VALUES ('甘肃', 2, 2);
INSERT INTO `china_death` VALUES ('福建', 1, 1);
INSERT INTO `china_death` VALUES ('西藏', 0, 0);
INSERT INTO `china_death` VALUES ('贵州', 2, 2);
INSERT INTO `china_death` VALUES ('辽宁', 2, 2);
INSERT INTO `china_death` VALUES ('重庆', 6, 6);
INSERT INTO `china_death` VALUES ('陕西', 3, 3);
INSERT INTO `china_death` VALUES ('青海', 0, 0);
INSERT INTO `china_death` VALUES ('香港', 4, 4);
INSERT INTO `china_death` VALUES ('黑龙江', 13, 13);

-- ----------------------------
-- Table structure for china_infected
-- ----------------------------
DROP TABLE IF EXISTS `china_infected`;
CREATE TABLE `china_infected`  (
  `province` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `T200606` int(0) NULL DEFAULT NULL,
  `T200607` int(0) NULL DEFAULT NULL,
  PRIMARY KEY (`province`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of china_infected
-- ----------------------------
INSERT INTO `china_infected` VALUES ('上海', 677, 667);
INSERT INTO `china_infected` VALUES ('云南', 185, 185);
INSERT INTO `china_infected` VALUES ('内蒙古', 235, 235);
INSERT INTO `china_infected` VALUES ('北京', 594, 594);
INSERT INTO `china_infected` VALUES ('台湾', 443, 443);
INSERT INTO `china_infected` VALUES ('吉林', 155, 155);
INSERT INTO `china_infected` VALUES ('四川', 578, 578);
INSERT INTO `china_infected` VALUES ('天津', 192, 193);
INSERT INTO `china_infected` VALUES ('宁夏', 75, 75);
INSERT INTO `china_infected` VALUES ('安徽', 991, 991);
INSERT INTO `china_infected` VALUES ('山东', 792, 792);
INSERT INTO `china_infected` VALUES ('山西', 198, 198);
INSERT INTO `china_infected` VALUES ('广东', 1601, 1602);
INSERT INTO `china_infected` VALUES ('广西', 254, 254);
INSERT INTO `china_infected` VALUES ('新疆', 76, 76);
INSERT INTO `china_infected` VALUES ('江苏', 653, 653);
INSERT INTO `china_infected` VALUES ('江西', 932, 932);
INSERT INTO `china_infected` VALUES ('河北', 328, 328);
INSERT INTO `china_infected` VALUES ('河南', 1276, 1276);
INSERT INTO `china_infected` VALUES ('浙江', 1268, 1268);
INSERT INTO `china_infected` VALUES ('海南', 169, 170);
INSERT INTO `china_infected` VALUES ('湖北', 68135, 68135);
INSERT INTO `china_infected` VALUES ('湖南', 1019, 1019);
INSERT INTO `china_infected` VALUES ('澳门', 45, 45);
INSERT INTO `china_infected` VALUES ('甘肃', 139, 139);
INSERT INTO `china_infected` VALUES ('福建', 358, 359);
INSERT INTO `china_infected` VALUES ('西藏', 1, 1);
INSERT INTO `china_infected` VALUES ('贵州', 147, 147);
INSERT INTO `china_infected` VALUES ('辽宁', 149, 149);
INSERT INTO `china_infected` VALUES ('重庆', 579, 579);
INSERT INTO `china_infected` VALUES ('陕西', 309, 311);
INSERT INTO `china_infected` VALUES ('青海', 18, 18);
INSERT INTO `china_infected` VALUES ('香港', 1102, 1105);
INSERT INTO `china_infected` VALUES ('黑龙江', 947, 947);

-- ----------------------------
-- Table structure for comment
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment`  (
  `passageid` int(0) NULL DEFAULT NULL,
  `userid` int(0) NULL DEFAULT NULL,
  `discuss` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  INDEX `userid`(`userid`) USING BTREE,
  INDEX `passageid`(`passageid`) USING BTREE,
  CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`passageid`) REFERENCES `passage` (`passageid`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of comment
-- ----------------------------
INSERT INTO `comment` VALUES (1001, 1, '没有什么困难可以打倒中国人民！');
INSERT INTO `comment` VALUES (2001, 1, '美国政府必将自食其果！');

-- ----------------------------
-- Table structure for country_cured
-- ----------------------------
DROP TABLE IF EXISTS `country_cured`;
CREATE TABLE `country_cured`  (
  `country` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `T200606` int(0) NULL DEFAULT NULL,
  `T200607` int(0) NULL DEFAULT NULL,
  PRIMARY KEY (`country`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of country_cured
-- ----------------------------
INSERT INTO `country_cured` VALUES ('俄罗斯', 212680, 221388);
INSERT INTO `country_cured` VALUES ('印度', 113233, 119293);
INSERT INTO `country_cured` VALUES ('巴基斯坦', 31198, 33465);
INSERT INTO `country_cured` VALUES ('意大利', 163781, 165078);
INSERT INTO `country_cured` VALUES ('日本', 14972, 14972);
INSERT INTO `country_cured` VALUES ('法国', 70504, 70806);
INSERT INTO `country_cured` VALUES ('美国', 738646, 751894);
INSERT INTO `country_cured` VALUES ('英国', 1228, 1230);
INSERT INTO `country_cured` VALUES ('韩国', 10531, 10552);

-- ----------------------------
-- Table structure for country_death
-- ----------------------------
DROP TABLE IF EXISTS `country_death`;
CREATE TABLE `country_death`  (
  `country` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `T200606` int(0) NULL DEFAULT NULL,
  `T200607` int(0) NULL DEFAULT NULL,
  PRIMARY KEY (`country`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of country_death
-- ----------------------------
INSERT INTO `country_death` VALUES ('俄罗斯', 5528, 5725);
INSERT INTO `country_death` VALUES ('印度', 6649, 6946);
INSERT INTO `country_death` VALUES ('巴基斯坦', 1838, 2002);
INSERT INTO `country_death` VALUES ('意大利', 33774, 33846);
INSERT INTO `country_death` VALUES ('日本', 914, 916);
INSERT INTO `country_death` VALUES ('法国', 29111, 29142);
INSERT INTO `country_death` VALUES ('美国', 111390, 112096);
INSERT INTO `country_death` VALUES ('英国', 40621, 40465);
INSERT INTO `country_death` VALUES ('韩国', 273, 273);

-- ----------------------------
-- Table structure for country_infected
-- ----------------------------
DROP TABLE IF EXISTS `country_infected`;
CREATE TABLE `country_infected`  (
  `country` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `T200606` int(0) NULL DEFAULT NULL,
  `T200607` int(0) NULL DEFAULT NULL,
  PRIMARY KEY (`country`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of country_infected
-- ----------------------------
INSERT INTO `country_infected` VALUES ('俄罗斯', 449834, 458689);
INSERT INTO `country_infected` VALUES ('印度', 236184, 247040);
INSERT INTO `country_infected` VALUES ('巴基斯坦', 89249, 98943);
INSERT INTO `country_infected` VALUES ('意大利', 234531, 234801);
INSERT INTO `country_infected` VALUES ('日本', 17118, 17164);
INSERT INTO `country_infected` VALUES ('法国', 153055, 153634);
INSERT INTO `country_infected` VALUES ('美国', 1965708, 1988544);
INSERT INTO `country_infected` VALUES ('英国', 283311, 284868);
INSERT INTO `country_infected` VALUES ('韩国', 11719, 11766);

-- ----------------------------
-- Table structure for passage
-- ----------------------------
DROP TABLE IF EXISTS `passage`;
CREATE TABLE `passage`  (
  `passageid` int(0) NOT NULL,
  `passagetime` datetime(0) NULL DEFAULT NULL,
  `article` varchar(10000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `reflink` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `likecount` int(0) UNSIGNED NULL DEFAULT 0,
  `type` int(0) NULL DEFAULT NULL,
  `clickcount` int(0) UNSIGNED NULL DEFAULT 0,
  PRIMARY KEY (`passageid`) USING BTREE,
  INDEX `type`(`type`) USING BTREE,
  CONSTRAINT `type` FOREIGN KEY (`type`) REFERENCES `passagetype` (`typeid`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of passage
-- ----------------------------
INSERT INTO `passage` VALUES (1001, '2020-06-11 00:00:00', '一次疫情的爆发让国内外的人们都感受到了这个病毒的厉害，疫情的爆发让全国人民的关注点都在累计确诊人数上面。病毒的蔓延让全球200多个国家都陷入了一个水深火热的状态之中。境外输入一直是我国需要防控的难题，而当下不仅是境外输入给国内人民带来了危害，无症状的出现也让大家为之紧张，众所周知无症状的存在比被确诊的病例的威胁都要高出几倍，但是今日要说的这项确诊，带来的不是坏消息，而是一个好消息！截止6月11日全国疫情最新消息显示，全国累计确诊新增11例，境外输入新增11例，现存确诊新增6例，现存无症状下降26例，累计治愈新增5例。从这组数据可以看到的是现存无症状的下降26例幅度趋势是最大的，当下现存无症状的总确诊还有129例，而在这段时间以来，无症状就不断下降，这也让人们原本紧张的心情，得到了一缓解。“无症状”相信大家都知道了是怎样的一个概念存在：没有感染的症状，不像被确诊的患者那样表现出相应的症状，引起人们误导没有被感染，而这样的新冠病毒在他们体内已经形成，一旦被这样的无症状接触自己也会被感染，所以等下的无症状经过排查和检测，治疗，这个无症状已经不断向好，这也印证了钟南山院士所说的那般“国内疫情还未结束，只有继续做好防控措施，这些疫情就会远离我们！”这次，钟老又说对了。所以无论是对于无症状还是境外输入都好，国内疫情还未清零，都要做好相对应的防范措施，所以出门的时候在密集地区还是要戴口罩的，千万不要有侥幸的心理，保持良好的态度去抗疫！', 'http://baijiahao.baidu.com/s?id=1669190008038572667&wfr=newsapp', 0, 1, 0);
INSERT INTO `passage` VALUES (2001, '2020-06-11 00:00:00', '来源：一财网\r\n自1月21日，美国公布境内第一例新冠肺炎确诊病例至今的142天时间里，美国新冠肺炎确诊病例已超200万例。而在疫情未获得较好控制的情况下，美过早“重启经济”也引发了社会的担忧——第二波疫情就要或者已经来了。\r\n确诊人数超200万 新一波疫情又要来了\r\n早在2020年1月初，美国就收到新冠肺炎将在美国蔓延的情报。然而5个月过去了，这个自诩“拥有世界上最好的公共卫生体系”的国家，现在却成为全球新冠肺炎疫情最为严重的国家。约翰斯·霍普金斯大学公布的数据显示，截至美东时间6月10日23时13分（北京时间11日11时13分），美国新冠肺炎确诊病例超过200万例，为2000464例，死亡112908例。\r\n如今，在美国新冠肺炎疫情还未获得控制的情况下，美国50个州和华盛顿特区都已经开始进入分阶段经济重启。人们大规模涌入海滩、购物中心、餐厅，表现出对经济重启的“迫不及待”。\r\n匆忙复工所带来的人群密切接触，让确诊病例数持续上升。根据《华盛顿邮报》汇编的数据，与前一周相比，有23个州以及哥伦比亚特区和波多黎各地区的7天滚动式平均新冠肺炎病毒病例都有增加，其中多数增长了10％以上。而据《休斯顿纪事报》报道，得克萨斯州卫生服务部周二发布的新数据显示，自5月25日以来，得克萨斯州因新冠肺炎住院治疗的人数增加了36％。\r\n洛杉矶县卫生服务部门主任克里斯蒂娜·加利（Christina Ghaly）博士当地时间6月5日表示：“虽然我们还不清楚确切的重新开放和恢复经济活动将如何影响新冠肺炎病毒的传播，但现在的传播速率似乎已经大于1，并且略有上升趋势。”\r\n鉴于此，美国多地近日决定放缓重启经济活动的计划。当地时间6月1日，华盛顿市政府宣布，由于当地疫情出现反弹趋势，将推迟开放部分商业和公共场所的“第二阶段”重启计划。佛罗里达州迈阿密达德县决定，在当地宵禁结束前，暂缓原定于6月1日实施的开放海滩计划。过早“重启经济”的做法也引发了社会的担忧。根据美国凯撒健康新闻（Kaiser health news）报道，公共卫生官员警告说，仓促重启将导致第二波新冠肺炎疫情高峰的到来。如果没有可靠的治疗方法或疫苗，这可能会延迟经济复苏和恢复社会正常状态的时间，甚至可能迫使人们再次隔离。\r\n约翰斯·霍普金斯大学健康安全中心专家埃里克·托纳（Eric Toner）在接受采访时表示，美国的部分地区正在迎来新一波疫情：“规模不大，目前还远，但是它来了。”\r\n应对疫情不力 美国政府负主要责任\r\n美国新冠肺炎疫情失控，美媒称这与美国政府应对不力疫情脱不了关系。\r\n根据《纽约时报》《华盛顿邮报》等媒体2020年4月复盘的美国疫情时间线，美国政府一再忽视疫情警告，怠于采取防控措施。虽然收到多次预警，但美国政府不仅对各种警告置之不理，反而着重于控制信息传播，限制医学专家向公众发布疫情信息，甚至发布虚假信息误导民众，称新冠病毒是“大号流感”，感染病毒的风险和死亡率“非常低”，疫情会很快“奇迹般地消失”，导致防控疫情的“黄金窗口期”被白白浪费。\r\n美国哥伦比亚大学的研究显示：\r\n美国行动限制措施的延迟导致至少3.6万人付出生命；\r\n如果美国政府提前一星期实施行动限制措施，能够多挽救3.6万人的生命；\r\n而如果美国政府提前两星期就开始实施行动限制措施，美国83%死于新冠病毒的患者将幸免于难。\r\n关于疫情，美国究竟隐瞒了多少？\r\n虽然1月21日美国才报告第一例新冠肺炎病例， 不过近一年前，美媒就曾报道过弗吉尼亚州暴发了不明原因呼吸系统疾病。另有一些在去年被诊断为流感的患者，后来体内检测到了新冠病毒抗体。\r\n去年7月，就有美国媒体曾报道称，在美国弗吉尼亚州斯普林菲尔德的“绿色春天”（Greenspring）退休人员社区暴发了一种不明原因的呼吸系统致命性疾病。当时有54人感染了这种疾病，还发生了2例与该疾病有关的病亡。报道称，患者症状包括“发烧、咳嗽、浑身疼痛、气喘、声音沙哑和全身无力”等，也有患者出现肺炎症状。《华盛顿邮报》2019年8月2日报道称，弗吉尼亚州卫生官员乔纳森·佛科发现，2019年夏天，当地上报的呼吸系统疾病暴发数量增加了大约一半，其中就包括“绿色春天”社区的这次疫情。\r\n美国新泽西州贝尔维尔市市长迈克尔·梅尔哈姆也曾表示，他认为自己去年11月就感染了新冠病毒。当时医生诊断他得了流感，可后来新冠病毒抗体检测结果呈阳性。梅尔哈姆称，他身边也有很多人曾在去年11、12月生病且症状严重。\r\n3月11日，美国疾控中心主任罗伯特·雷德菲尔德承认，美国确实有一些“流感”死者实际感染的可能是新冠肺炎。美国疾控中心报告显示，美国2019—2020流感季始于去年9月29日。\r\n美国疫情似乎还有不少谜底待解。\r\n142天从1到200万 美国病例如何爆发式增长\r\n从1月21日美国出现境内第一例新冠肺炎确诊病例开始算起，到3月19日，美国确诊病例数过万，从1例到1万例用了一个多月的时间，而确诊病例数从1万到2万只用了两天。从3月21日开始，美国每天新增确诊病例都超过1万例。从3月26日开始，单日新增病例保持在2万例左右。至今，美国新冠肺炎确诊病例数持续高速增长，平均3至4天确诊病例数就增加10万例。\r\n让我们回顾美国新冠肺炎疫情的发展情况：\r\n1月21日\r\n美国疾病预防与控制中心公布美国境内第一例新冠肺炎确诊病例。\r\n2月29日\r\n美国华盛顿州一名新冠肺炎患者死亡，成为全美国第一例因新冠肺炎死亡的病例。\r\n3月2日\r\n美国境内新冠肺炎确诊病例达到100例，其中包括6例死亡病例。\r\n3月10日\r\n美国新冠肺炎确诊病例达到1000例。\r\n3月13日\r\n美国宣布因疫情进入紧急状态。\r\n3月19日\r\n美国新冠肺炎确诊病例破万，达10259例。\r\n3月21日\r\n美国新冠肺炎确诊病例超2万例。\r\n3月24日\r\n美国新冠肺炎确诊病例突破5万例，达50206例。\r\n3月26日\r\n美国新冠肺炎确诊病例为82404例，从此成为全球新冠确诊病例最多的国家。\r\n3月27日\r\n美国新冠肺炎确诊病例超10万例，为100717例，死亡1544例，日新增病例接近2万人。\r\n4月6日\r\n美国新冠肺炎死亡人数突破1万，达到10335例。\r\n4月10日\r\n美国新冠肺炎确诊病例突破50万例，为500399例，死亡18637例。\r\n4月16日\r\n美国政府启动“重启美国(Opening up America again)”计划。\r\n4月28日\r\n美国新冠肺炎确诊病例突破100万例，为1010717例，死亡58365例。\r\n5月18日\r\n美国新冠肺炎确诊病例超150万例，为1500753例；死亡病例已经超过9万例，为90312例；\r\n5月27日\r\n美国新冠肺炎死亡人数超10万例，为100047人。\r\n6月10日\r\n美国新冠肺炎确诊病例超200万例，为2000464例。\r\n病例数不断增加，\r\n新一波疫情恐将到来。\r\n也许正像亚利桑那大学公共卫生研究人员\r\n乔·杰拉尔德说的那样：\r\n“更糟糕的日子还在后头”。', 'http://baijiahao.baidu.com/s?id=1669207000843455592&wfr=newsapp', 0, 2, 0);
INSERT INTO `passage` VALUES (3001, '2020-05-10 00:00:00', '新型冠状病毒家族及其传染特点x \r\n什么是冠状病毒？\r\n冠状病毒最早为1937年从鸡身上分离出来，1965年分离得到第一株人冠状病毒，因为在电子显微镜下观察到其外膜上有明显的棒状粒子突起，形态像皇冠，故命名为冠状病毒。\r\n按系统分类学的角度，冠状病毒属于网巢病毒目冠状病毒科正冠状病毒亚科冠状病毒属。冠状病毒属，又分为α、β、γ和δ属，但只有α、β属能感染人类。SARS-CoV-2目前属于β冠状病毒属。', 'https://www.sohu.com/a/394247100_464461?scm=1019.e000a.v1.0&spm=smpc.csrpage.news-list.5.15918809576', 0, 3, 0);
INSERT INTO `passage` VALUES (3002, '2020-05-27 00:00:00', '武汉的新型冠状病毒肺炎牵动着全国人民的神经，每天都有大量新增确诊病例毒。截止2020年2月9日9时09分，全国共有37251例确诊病例，其中812人死亡。在疫情疯狂肆虐时，目前依旧没有针对病毒本身的特异性治疗方案。\r\n1. 认识冠状病毒知己知彼，方可百战不殆。首先，让我们了解一下我们的对手，2019-nCoV，属于冠状病毒的一种。冠状病毒最早于1937年从鸡身上分离出来，病毒包膜上存在棘突，整个病毒像日冕，因此被称为冠状病毒。冠状病毒是正链单链RNA病毒，直径约80～120nm。我们所熟知的非典型性肺炎（SARS）的病毒病原体SARS-CoV和中东呼吸综合征（MERS）的病毒病原体MERS-CoV，同样也属于冠状病毒家族的成员。2. 冠状病毒临床特点冠状病毒性肺炎主要的临床症状会表现出发热，咳嗽，或者伴随有浑身乏力，流鼻涕，打喷嚏一些感冒的症状，有一些患者甚至出现消化系统的症状，表现出有腹泻的现象，一般出现这些现象的时候，要排除一下个人的生活环境，比如近期去过武汉，或者是否接触过从武汉来的人员，在出现这些症状的时候，就需要作出及时的排查。在确定有冠状病毒肺炎该三人的情况的时候，应该及时的进行隔离，因为新型冠状病毒肺炎会传播比较广泛，确定有人传人，并且有二代或者是三代的传染性，一定范围的社区传播存在变异的可能性，有扩散的趋势。\r\n那新型冠状病毒与我们平时所知道的肺结核怎么区别？\r\n世界卫生组织最近公告，目前全球有17.5亿人已感染结核菌，现有病人2000万，每年新发现病例达800万，300余万人死于结核病。结核病已成为世界范围内每年因传染病而亡故的首位病因。我国现有约600万结核病人，每年约23万人死于结核病，一些地区的疫情还比较严重。\r\n若能早期发现肺结核，既可早期治疗，彻底治愈，又可减少社会传染源。结核病的临床症状主要有三：一咳、二血、三发热，这是值得警惕的三个方面。\r\n1、咳嗽 呼吸系统的疾病，如感冒、咽喉炎、支气管炎、肺炎等，都可引起咳嗽，不过这些咳嗽，一般经过一个月治疗都会痊愈。若反复咳嗽，迁延不愈特别是咳“半声嗽”，吐白色或灰白黏液样痰时，就要引起注意。\r\n2、痰中带血 据统计，约有半数肺结核病人会出现痰中带血，这是因为肺结核病人肺内特异性和非特异性炎症，造成毛细血管壁通透性增强，大量红细胞通过毛细血管壁外渗至肺泡中并与痰相混，因而出现痰中带血。\r\n3、发热 由于结核菌的毒素及代谢产物刺激中枢神经系统，致使大脑皮层功能失调，引起植物神经功能紊乱，从而出现午后潮热、手足心发热、面颊潮红等症状。\r\n除以上三个方面外，当您感到疲倦无力、食欲不振、身体逐渐消瘦、失眠、盗汗、胸痛、胸闷等症状时，需要考虑有肺结核的可能。\r\n目前病毒核酸检测新冠肺炎的确诊“金标准”，而面临“金标准”资源紧缺、采样方式受限、假阴性的问题，疫区众多疑似病例得不到及时有效的确诊及后续治疗，此时需要影像检查手段CT作为重要病例确诊最直观的参考依据。\r\n最后还请大家做好防护、勤洗手，减少外出，做好自我防护，也是在为社会做贡献，众志成城打赢这场防疫狙击战，是夙愿，是使命在肩，没有一个冬天不可逾越，没有一个春天不会来临！', 'https://www.sohu.com/a/373996130_99939128?scm=1019.e000a.v1.0&spm=smpc.csrpage.news-list.9.159188095', 0, 3, 0);

-- ----------------------------
-- Table structure for passagelike
-- ----------------------------
DROP TABLE IF EXISTS `passagelike`;
CREATE TABLE `passagelike`  (
  `userid` int(0) NOT NULL,
  `passageid` int(0) NOT NULL,
  PRIMARY KEY (`userid`, `passageid`) USING BTREE,
  INDEX `passageid`(`passageid`) USING BTREE,
  CONSTRAINT `passageid` FOREIGN KEY (`passageid`) REFERENCES `passage` (`passageid`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `userid` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of passagelike
-- ----------------------------

-- ----------------------------
-- Table structure for passagetype
-- ----------------------------
DROP TABLE IF EXISTS `passagetype`;
CREATE TABLE `passagetype`  (
  `typename` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `typeid` int(0) NOT NULL,
  PRIMARY KEY (`typename`, `typeid`) USING BTREE,
  INDEX `typename`(`typename`) USING BTREE,
  INDEX `typeid`(`typeid`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of passagetype
-- ----------------------------
INSERT INTO `passagetype` VALUES ('国内疫情进展', 1);
INSERT INTO `passagetype` VALUES ('国外疫情进展', 2);
INSERT INTO `passagetype` VALUES ('科普防护知识', 3);

-- ----------------------------
-- Table structure for publish
-- ----------------------------
DROP TABLE IF EXISTS `publish`;
CREATE TABLE `publish`  (
  `userid` int(0) NULL DEFAULT NULL,
  `passageid` int(0) NULL DEFAULT NULL,
  INDEX `userid`(`userid`) USING BTREE,
  INDEX `passageid`(`passageid`) USING BTREE,
  CONSTRAINT `publish_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `publish_ibfk_2` FOREIGN KEY (`passageid`) REFERENCES `passage` (`passageid`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of publish
-- ----------------------------



-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `username` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `userid` int(0) NOT NULL AUTO_INCREMENT,
  `enterdate` datetime(0) NULL DEFAULT NULL,
  `userpswd` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`userid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('helloworld', 1, NULL, '12345678');

SET FOREIGN_KEY_CHECKS = 1;
