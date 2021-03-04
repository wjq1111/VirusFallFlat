<?php

use yii\db\Migration;

/**
 * Class m200613_114839_country_death
 */
class m200613_114839_country_death extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $sql = "CREATE TABLE `country_death` (
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
        $sql = "INSERT INTO `country_death` (`country`, `T200606`, `T200607`, `T200608`, `T200609`, `T200610`, `T200611`, `T200612`) VALUES
('俄罗斯', 5528, 5725, 5929, 6140, 6359, 6586, 6821),
('印度', 6649, 6946, 7256, 7580, 7919, 8273, 8643),
('巴基斯坦', 1838, 2002, 2181, 2376, 2588, 2819, 3071),
('意大利', 33774, 33846, 33918, 33990, 34062, 34135, 34208),
('日本', 914, 916, 918, 920, 922, 924, 926),
('法国', 29111, 29142, 29173, 29204, 29235, 29266, 29297),
('美国', 111390, 112096, 112806, 113521, 114241, 114965, 115694),
('英国', 40621, 40465, 40310, 40155, 40001, 39847, 39694),
('韩国', 273, 273, 273, 273, 273, 273, 273);";
        $this->db->createCommand($sql)->execute();
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200613_114839_country_death cannot be reverted.\n";

        return false;
    }
    */
}
