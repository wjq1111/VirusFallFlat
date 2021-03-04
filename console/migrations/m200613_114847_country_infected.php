<?php

use yii\db\Migration;

/**
 * Class m200613_114847_country_infected
 */
class m200613_114847_country_infected extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $sql = "CREATE TABLE `country_infected` (
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
        $sql = "INSERT INTO `country_infected` (`country`, `T200606`, `T200607`, `T200608`, `T200609`, `T200610`, `T200611`, `T200612`) VALUES
('俄罗斯', 449834, 458689, 467718, 476925, 486313, 495886, 505648),
('印度', 236184, 247040, 258395, 270272, 282695, 295689, 309280),
('巴基斯坦', 89249, 98943, 109690, 121604, 134812, 149455, 165688),
('意大利', 234531, 234801, 235071, 235342, 235613, 235884, 236156),
('日本', 17118, 17164, 17210, 17256, 17302, 17348, 17395),
('法国', 153055, 153634, 154215, 154798, 155384, 155972, 156562),
('美国', 1965708, 1988544, 2011645, 2035015, 2058656, 2082572, 2106766),
('英国', 283311, 284868, 286434, 288008, 289591, 291183, 292783),
('韩国', 11719, 11766, 11813, 11860, 11908, 11956, 12004);";
        $this->db->createCommand($sql)->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%country_infected}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200613_114847_country_infected cannot be reverted.\n";

        return false;
    }
    */
}
