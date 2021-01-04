<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%hr}}`.
 */
class m210104_031947_create_hr_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%hr}}', [
            'id' => $this->primaryKey(),
            'fish' => $this->char(50)->notNull(),
            'email' => $this->char(50)->unique(),
            'phone' => $this->char(25),
            'age' => $this->integer(),
            'status' => $this->integer(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
            'created_by' => $this->integer(),
            'updated_by' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%hr}}');
    }
}
