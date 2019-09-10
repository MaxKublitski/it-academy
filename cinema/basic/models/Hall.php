<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hall".
 *
 * @property int $id
 * @property int $row
 * @property int $place
 * @property string $cathegory
 * @property string $price
 */
class Hall extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hall';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['row', 'place'], 'integer'],
            [['price'], 'number'],
            [['cathegory'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'row' => 'Row',
            'place' => 'Place',
            'cathegory' => 'Cathegory',
            'price' => 'Price',
        ];
    }
}
