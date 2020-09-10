<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Persons;

/**
 * PersonsSearch represents the model behind the search form of `app\models\Persons`.
 */
class PersonsSearch extends Persons
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['PersonID', 'AHeight', 'AWeight'], 'integer'],
            [['FirstName', 'SecondName', 'Birthday'], 'safe'],
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
        $query = Persons::find();

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
            'PersonID' => $this->PersonID,
            'Birthday' => $this->Birthday,
            'AHeight' => $this->AHeight,
            'AWeight' => $this->AWeight,
        ]);

        $query->andFilterWhere(['like', 'FirstName', $this->FirstName])
            ->andFilterWhere(['like', 'SecondName', $this->SecondName]);

        return $dataProvider;
    }
}
