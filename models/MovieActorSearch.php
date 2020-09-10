<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\MovieActor;

/**
 * MovieActorSearch represents the model behind the search form of `app\models\MovieActor`.
 */
class MovieActorSearch extends MovieActor
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['MovieActorID', 'PersonID', 'MovieID'], 'integer'],
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
        $query = MovieActor::find();

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
            'MovieActorID' => $this->MovieActorID,
            'PersonID' => $this->PersonID,
            'MovieID' => $this->MovieID,
        ]);

        return $dataProvider;
    }
}
