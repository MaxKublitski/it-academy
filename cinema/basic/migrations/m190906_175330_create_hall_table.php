<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%hall}}`.
 */
class m190906_175330_create_hall_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%hall}}', [
            'id' => $this->primaryKey(),
            'row' => $this->integer(),
            'place' => $this->integer(),
            'cathegory' => $this->string(),
            'price' => $this->decimal(5, 2)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%hall}}');
    }
}
