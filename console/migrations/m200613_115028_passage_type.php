<?php

use yii\db\Migration;

/**
 * Class m200613_115028_passage_type
 */
class m200613_115028_passage_type extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $sql = "CREATE TABLE `passagetype`  (
  `typename` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `typeid` int(0) NOT NULL,
  PRIMARY KEY (`typename`, `typeid`) USING BTREE,
  INDEX `typename`(`typename`) USING BTREE,
  INDEX `typeid`(`typeid`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;";
        $this->db->createCommand($sql)->execute();
        $sql = "INSERT INTO `passagetype` VALUES ('国内疫情进展', 1);
INSERT INTO `passagetype` VALUES ('国外疫情进展', 2);
INSERT INTO `passagetype` VALUES ('科普防护知识', 3);";
        $this->db->createCommand($sql)->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%passagetype}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200613_115028_passage_type cannot be reverted.\n";

        return false;
    }
    */
}
