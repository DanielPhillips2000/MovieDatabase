<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AgeRatings;

/**
 * AgeRatingsSearch represents the model behind the search form of `app\models\AgeRatings`.
 */
class AgeRatingsSearch extends AgeRatings
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['RatingID'], 'integer'],
            [['Rating', 'AgeRange', 'RatingIcon'], 'safe'],
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
        $query = AgeRatings::find();

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
            'RatingID' => $this->RatingID,
        ]);

        $query->andFilterWhere(['like', 'Rating', $this->Rating])
            ->andFilterWhere(['like', 'AgeRange', $this->AgeRange])
            ->andFilterWhere(['like', 'RatingIcon', $this->RatingIcon]);

        return $dataProvider;
    }
}
