<?php

use yii\db\Migration;

/**
 * Class m200613_114834_country_cured
 */
class m200613_114834_country_cured extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $sql = "CREATE TABLE `country_cured` (
  `country` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `T200606` int(11) DEFAULT NULL,
  `T200607` int(11) DEFAULT NULL,
  `T200608` int(11) NOT NULL,
  `T200609` int(11) NOT NULL,
  `T200610` int(11) NOT NULL,
  `T200611` int(11) NOT NULL,
  `T200612` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;";
        $this->db->createCommand($sql)->execute();
        $sql = "INSERT INTO `country_cured` (`country`, `T200606`, `T200607`, `T200608`, `T200609`, `T200610`, `T200611`, `T200612`) VALUES
('俄罗斯', 212680, 221388, 230244, 239454, 249032, 258993, 269353),
('印度', 113233, 119293, 125258, 131521, 138097, 145002, 152252),
('巴基斯坦', 31198, 33465, 35808, 38315, 40997, 43867, 46938),
('意大利', 163781, 165078, 166729, 168396, 170080, 171781, 173499),
('日本', 14972, 14972, 14972, 14972, 14972, 14972, 14972),
('法国', 70504, 70806, 71089, 71373, 71658, 71945, 72233),
('美国', 738646, 751894, 759413, 767007, 774677, 782424, 790248),
('英国', 1228, 1230, 1231, 1232, 1233, 1234, 1235),
('韩国', 10531, 10552, 10563, 10574, 10585, 10596, 10607);";
        $this->db->createCommand($sql)->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%country_cured}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200613_114834_country_cured cannot be reverted.\n";

        return false;
    }
    */
}
