<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "basket".
 *
 * @property int $id
 * @property string $date_of_order
 * @property string $movie
 * @property string $date_of_movie
 * @property int $row
 * @property int $place
 * @property string $price
 */
class Basket extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'basket';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date_of_order', 'date_of_movie'], 'safe'],
            [['row', 'place'], 'integer'],
            [['price'], 'number'],
            [['movie'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'date_of_order' => 'Date Of Order',
            'movie' => 'Movie',
            'date_of_movie' => 'Date Of Movie',
            'row' => 'Row',
            'place' => 'Place',
            'price' => 'Price',
        ];
    }
}
