<?php

use yii\db\Migration;

/**
 * Class m200613_114537_admin
 */
class m200613_114537_admin extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $sql = "CREATE TABLE `admin`  (
  `admin_name` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '123456',
  `login_time` datetime(0) NULL DEFAULT NULL,
  PRIMARY KEY (`admin_name`, `admin_password`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;";

    $this->db->createCommand($sql)->execute();

    $sql = "INSERT INTO `admin` (`admin_name`, `admin_password`, `login_time`) VALUES
('abc', '123', NULL),
('Einstein', '123456', NULL),
('inphantasm', '123456', NULL),
('NKU丨阳', '123456', NULL);";

    $this->db->createCommand($sql)->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%admin}}');
    }


    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200613_114537_admin cannot be reverted.\n";

        return false;
    }
    */
}
