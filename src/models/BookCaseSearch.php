<?php

namespace eneskayiklik\library\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use eneskayiklik\library\models\BookCase;

/**
 * BookCaseSearch represents the model behind the search form of `eneskayiklik\library\models\BookCase`.
 */
class BookCaseSearch extends BookCase
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['genre', 'book_name', 'author', 'effective_date'], 'safe'],
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
        $query = BookCase::find();

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
        ]);

        $query->andFilterWhere(['like', 'genre', $this->genre])
            ->andFilterWhere(['like', 'book_name', $this->book_name])
            ->andFilterWhere(['like', 'author', $this->author])
            ->andFilterWhere(['like', 'effective_date', $this->effective_date]);

        return $dataProvider;
    }
}
