<?php

use yii\db\Migration;

/**
 * Class m200613_114801_china_cured
 */
class m200613_114801_china_cured extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $sql = "CREATE TABLE `china_cured` (
  `province` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `T200606` int(11) DEFAULT NULL,
  `T200607` int(11) DEFAULT NULL,
  `T200608` int(11) NOT NULL,
  `T200609` int(11) NOT NULL,
  `T200610` int(11) NOT NULL,
  `T200611` int(11) NOT NULL,
  `T200612` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;";
        $this->db->createCommand($sql)->execute();

        $sql = "INSERT INTO `china_cured` (`province`, `T200606`, `T200607`, `T200608`, `T200609`, `T200610`, `T200611`, `T200612`) VALUES
('上海', 663, 664, 665, 666, 667, 668, 669),
('云南', 183, 183, 183, 183, 183, 183, 183),
('内蒙古', 213, 213, 213, 213, 213, 213, 213),
('北京', 583, 583, 583, 583, 583, 583, 583),
('台湾', 429, 430, 431, 432, 433, 434, 435),
('吉林', 150, 151, 152, 153, 154, 155, 156),
('四川', 558, 558, 558, 558, 558, 558, 558),
('天津', 189, 189, 189, 189, 189, 189, 189),
('宁夏', 75, 75, 75, 75, 75, 75, 75),
('安徽', 985, 985, 985, 985, 985, 985, 985),
('山东', 780, 780, 780, 780, 780, 780, 780),
('山西', 198, 198, 198, 198, 198, 198, 198),
('广东', 1584, 1584, 1584, 1584, 1584, 1584, 1584),
('广西', 252, 252, 252, 252, 252, 252, 252),
('新疆', 73, 73, 73, 73, 73, 73, 73),
('江苏', 653, 653, 653, 653, 653, 653, 653),
('江西', 931, 931, 931, 931, 931, 931, 931),
('河北', 322, 322, 322, 322, 322, 322, 322),
('河南', 1254, 1254, 1254, 1254, 1254, 1254, 1254),
('浙江', 1267, 1267, 1267, 1267, 1267, 1267, 1267),
('海南', 162, 162, 162, 162, 162, 162, 162),
('湖北', 63623, 63623, 63623, 63623, 63623, 63623, 63623),
('湖南', 1015, 1015, 1015, 1015, 1015, 1015, 1015),
('澳门', 45, 45, 45, 45, 45, 45, 45),
('甘肃', 137, 137, 137, 137, 137, 137, 137),
('福建', 356, 356, 356, 356, 356, 356, 356),
('西藏', 1, 1, 1, 1, 1, 1, 1),
('贵州', 145, 145, 145, 145, 145, 145, 145),
('辽宁', 147, 147, 147, 147, 147, 147, 147),
('重庆', 573, 573, 573, 573, 573, 573, 573),
('陕西', 305, 305, 305, 305, 305, 305, 305),
('青海', 18, 18, 18, 18, 18, 18, 18),
('香港', 1045, 1048, 1051, 1054, 1057, 1060, 1063),
('黑龙江', 934, 934, 934, 934, 934, 934, 934);";

        $this->db->createCommand($sql)->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%china_cured}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200613_114801_china_cured cannot be reverted.\n";

        return false;
    }
    */
}
