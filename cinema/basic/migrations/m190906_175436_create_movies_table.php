<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%movies}}`.
 */
class m190906_175436_create_movies_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%movies}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'date' => $this->dateTime(),
            'price' => $this->decimal(5,2)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%movies}}');
    }
}
