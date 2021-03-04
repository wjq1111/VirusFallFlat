<?php

use yii\db\Migration;

/**
 * Class m200613_115405_passage_like
 */
class m200613_115405_passage_like extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $sql = "CREATE TABLE `passagelike`  (
  `userid` int(0) NOT NULL,
  `passageid` int(0) NOT NULL,
  PRIMARY KEY (`userid`, `passageid`) USING BTREE,
  INDEX `passageid`(`passageid`) USING BTREE,
  CONSTRAINT `passageid` FOREIGN KEY (`passageid`) REFERENCES `passage` (`passageid`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `userid` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;";
        $this->db->createCommand($sql)->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%passagelike}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200613_115405_passage_like cannot be reverted.\n";

        return false;
    }
    */
}
