<?php

use yii\db\Migration;

/**
 * Class m201126_121402_create_comments_migrate
 */
class m201126_121402_create_comments_migrate extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%comments}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'comments' => $this->string(255)->notNull(),
            'date' => $this->dateTime()->null(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%comments}}');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201126_121402_create_comments_migrate cannot be reverted.\n";

        return false;
    }
    */
}
