<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Basket;

/**
 * BasketSearch represents the model behind the search form of `app\models\Basket`.
 */
class BasketSearch extends Basket
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'row', 'place'], 'integer'],
            [['date_of_order', 'movie', 'date_of_movie'], 'safe'],
            [['price'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Basket::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'date_of_order' => $this->date_of_order,
            'date_of_movie' => $this->date_of_movie,
            'row' => $this->row,
            'place' => $this->place,
            'price' => $this->price,
        ]);

        $query->andFilterWhere(['like', 'movie', $this->movie]);

        return $dataProvider;
    }
}
