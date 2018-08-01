<?php

use yii\db\Migration;

/**
 * Class m180730_184929_create_news_teble
 */
class m180730_184929_create_news_teble extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('news', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255),
            'content' => $this->text(),
            'status' => $this->string(3),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180730_184929_create_news_teble cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m180730_184929_create_news_teble cannot be reverted.\n";

        return false;
    }
    */
}
