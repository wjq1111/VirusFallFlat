<?php

use yii\db\Migration;

/**
 * Class m200613_114807_china_death
 */
class m200613_114807_china_death extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $sql = "CREATE TABLE `china_death` (
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
        $sql = "INSERT INTO `china_death` (`province`, `T200606`, `T200607`, `T200608`, `T200609`, `T200610`, `T200611`, `T200612`) VALUES
('上海', 7, 7, 7, 7, 7, 7, 7),
('云南', 2, 2, 2, 2, 2, 2, 2),
('内蒙古', 1, 1, 1, 1, 1, 1, 1),
('北京', 9, 9, 9, 9, 9, 9, 9),
('台湾', 7, 7, 7, 7, 7, 7, 7),
('吉林', 2, 2, 2, 2, 2, 2, 2),
('四川', 3, 3, 3, 3, 3, 3, 3),
('天津', 3, 3, 3, 3, 3, 3, 3),
('宁夏', 0, 0, 0, 0, 0, 0, 0),
('安徽', 6, 6, 6, 6, 6, 6, 6),
('山东', 7, 7, 7, 7, 7, 7, 7),
('山西', 0, 0, 0, 0, 0, 0, 0),
('广东', 8, 8, 8, 8, 8, 8, 8),
('广西', 2, 2, 2, 2, 2, 2, 2),
('新疆', 3, 3, 3, 3, 3, 3, 3),
('江苏', 0, 0, 0, 0, 0, 0, 0),
('江西', 1, 1, 1, 1, 1, 1, 1),
('河北', 6, 6, 6, 6, 6, 6, 6),
('河南', 22, 22, 22, 22, 22, 22, 22),
('浙江', 1, 1, 1, 1, 1, 1, 1),
('海南', 6, 6, 6, 6, 6, 6, 6),
('湖北', 4512, 4512, 4512, 4512, 4512, 4512, 4512),
('湖南', 4, 4, 4, 4, 4, 4, 4),
('澳门', 0, 0, 0, 0, 0, 0, 0),
('甘肃', 2, 2, 2, 2, 2, 2, 2),
('福建', 1, 1, 1, 1, 1, 1, 1),
('西藏', 0, 0, 0, 0, 0, 0, 0),
('贵州', 2, 2, 2, 2, 2, 2, 2),
('辽宁', 2, 2, 2, 2, 2, 2, 2),
('重庆', 6, 6, 6, 6, 6, 6, 6),
('陕西', 3, 3, 3, 3, 3, 3, 3),
('青海', 0, 0, 0, 0, 0, 0, 0),
('香港', 4, 4, 4, 4, 4, 4, 4),
('黑龙江', 13, 13, 13, 13, 13, 13, 13);";
        $this->db->createCommand($sql)->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%china_death}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200613_114807_china_death cannot be reverted.\n";

        return false;
    }
    */
}
