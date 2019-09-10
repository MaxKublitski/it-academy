<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%movie_description}}`.
 */
class m190906_175459_create_movie_description_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%movie_description}}', [
            'id' => $this->primaryKey(),
            'id_movie' => $this->integer(),
            'description' => $this->text()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%movie_description}}');
    }
}
