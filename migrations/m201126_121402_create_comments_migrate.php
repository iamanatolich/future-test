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

        $this->insert('comments', [
            'id' => '1',
            'name' => 'Савва',
            'comments' => 'Спасибо за ваше тестовое задание. Оно, действительно, изумительное',
            'date' => '2020-11-26 19:17:46',
        ]);

        $this->insert('comments', [
            'id' => '2',
            'name' => 'Евдоким',
            'comments' => 'Если включить мозги, то всё элементарно Ватсон!',
            'date' => '2020-11-26 19:18:32',
        ]);

        $this->insert('comments', [
            'id' => '3',
            'name' => 'Артемий',
            'comments' => 'Почему такое сложное задание??? Мне кажется нужно быть первоклассным программистом, чтобы выполнить его :(',
            'date' => '2020-11-26 19:19:38',
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
