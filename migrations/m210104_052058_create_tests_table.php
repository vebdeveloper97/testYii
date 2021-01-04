<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%tests}}`.
 */
class m210104_052058_create_tests_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%tests}}', [
            'id' => $this->primaryKey(),
            'text' => $this->text(),
            'coment' => $this->text(),
            'date' => $this->datetime(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%tests}}');
    }
}
