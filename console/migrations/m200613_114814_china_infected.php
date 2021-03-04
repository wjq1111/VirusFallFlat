<?php

use yii\db\Migration;

/**
 * Class m200613_114814_china_infected
 */
class m200613_114814_china_infected extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $sql = "CREATE TABLE `china_infected` (
  `province` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `T200606` int(11) DEFAULT NULL,
  `T200607` int(11) DEFAULT NULL,
  `T200608` int(11) NOT NULL,
  `T200609` int(11) NOT NULL,
  `T200610` int(11) NOT NULL,
  `T200611` int(11) NOT NULL,
  `T200612` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;
";
        $this->db->createCommand($sql)->execute();
        $sql = "INSERT INTO `china_infected` (`province`, `T200606`, `T200607`, `T200608`, `T200609`, `T200610`, `T200611`, `T200612`) VALUES
('上海', 667, 667, 667, 667, 667, 667, 667),
('云南', 185, 185, 185, 185, 185, 185, 185),
('内蒙古', 235, 235, 235, 235, 235, 235, 235),
('北京', 594, 594, 594, 594, 594, 594, 594),
('台湾', 443, 443, 443, 443, 443, 443, 443),
('吉林', 155, 155, 155, 155, 155, 155, 155),
('四川', 578, 578, 578, 578, 578, 578, 578),
('天津', 192, 193, 194, 195, 196, 197, 198),
('宁夏', 75, 75, 75, 75, 75, 75, 75),
('安徽', 991, 991, 991, 991, 991, 991, 991),
('山东', 792, 792, 792, 792, 792, 792, 792),
('山西', 198, 198, 198, 198, 198, 198, 198),
('广东', 1601, 1602, 1603, 1604, 1605, 1606, 1607),
('广西', 254, 254, 254, 254, 254, 254, 254),
('新疆', 76, 76, 76, 76, 76, 76, 76),
('江苏', 653, 653, 653, 653, 653, 653, 653),
('江西', 932, 932, 932, 932, 932, 932, 932),
('河北', 328, 328, 328, 328, 328, 328, 328),
('河南', 1276, 1276, 1276, 1276, 1276, 1276, 1276),
('浙江', 1268, 1268, 1268, 1268, 1268, 1268, 1268),
('海南', 169, 170, 171, 172, 173, 174, 175),
('湖北', 68135, 68135, 68135, 68135, 68135, 68135, 68135),
('湖南', 1019, 1019, 1019, 1019, 1019, 1019, 1019),
('澳门', 45, 45, 45, 45, 45, 45, 45),
('甘肃', 139, 139, 139, 139, 139, 139, 139),
('福建', 358, 359, 360, 361, 362, 363, 364),
('西藏', 1, 1, 1, 1, 1, 1, 1),
('贵州', 147, 147, 147, 147, 147, 147, 147),
('辽宁', 149, 149, 149, 149, 149, 149, 149),
('重庆', 579, 579, 579, 579, 579, 579, 579),
('陕西', 309, 311, 313, 315, 317, 319, 321),
('青海', 18, 18, 18, 18, 18, 18, 18),
('香港', 1102, 1105, 1108, 1111, 1114, 1117, 1120),
('黑龙江', 947, 947, 947, 947, 947, 947, 947);";
        $this->db->createCommand($sql)->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%china_infected}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200613_114814_china_infected cannot be reverted.\n";

        return false;
    }
    */
}