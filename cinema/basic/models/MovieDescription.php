<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "movie_description".
 *
 * @property int $id
 * @property int $id_movie
 * @property string $description
 */
class MovieDescription extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'movie_description';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_movie'], 'integer'],
            [['description'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_movie' => 'Id Movie',
            'description' => 'Description',
        ];
    }
}
