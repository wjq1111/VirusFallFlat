<?php

use yii\db\Migration;

/**
 * Class m200613_115152_user
 */
class m200613_115152_user extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
         $sql = "CREATE TABLE `user`  (
  `username` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `userid` int(0) NOT NULL AUTO_INCREMENT,
  `enterdate` datetime(0) NULL DEFAULT NULL,
  `userpswd` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`userid`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;";
      $this->db->createCommand($sql)->execute();

      $sql = "INSERT INTO `user` (`username`, `userid`, `enterdate`, `userpswd`) VALUES
('helloworld', 1, NULL, '12345678');";
      $this->db->createCommand($sql)->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200613_115152_user cannot be reverted.\n";

        return false;
    }
    */
}
