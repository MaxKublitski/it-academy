<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%basket}}`.
 */
class m190906_175612_create_basket_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%basket}}', [
            'id' => $this->primaryKey(),
            'date_of_order' => $this->dateTime(),
            'movie' => $this->string(),
            'date_of_movie' => $this->dateTime(),
            'row' => $this->integer(),
            'place' => $this->integer(),
            'price' => $this->decimal(5,2)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%basket}}');
    }
}
