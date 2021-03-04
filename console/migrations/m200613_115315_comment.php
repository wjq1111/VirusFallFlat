<?php

use yii\db\Migration;

/**
 * Class m200613_115315_comment
 */
class m200613_115315_comment extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $sql = "CREATE TABLE `comment` (
  `passageid` int(11) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `discuss` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;
";
        $this->db->createCommand($sql)->execute();
        $sql = "INSERT INTO `comment` (`passageid`, `userid`, `discuss`, `time`) VALUES
(1001, 1, '没有什么困难可以打倒中国人民！', '0000-00-00 00:00:00');";
        $this->db->createCommand($sql)->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%comment}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200613_115315_comment cannot be reverted.\n";

        return false;
    }
    */
}
