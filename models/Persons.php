<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Persons".
 *
 * @property int $PersonID
 * @property string $FirstName
 * @property string $SecondName
 * @property string|null $Birthday
 * @property int|null $AHeight
 * @property int|null $AWeight
 *
 * @property MovieActor[] $movieActors
 * @property Movie[] $movies
 */
class Persons extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Persons';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['FirstName', 'SecondName'], 'required'],
            [['Birthday'], 'safe'],
            [['AHeight', 'AWeight'], 'integer'],
            [['FirstName', 'SecondName'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'PersonID' => 'Person ID',
            'FirstName' => 'First Name',
            'SecondName' => 'Second Name',
            'Birthday' => 'Birthday',
            'AHeight' => 'Height (m)',
            'AWeight' => 'Weight (kg)',
        ];
    }

    /**
     * Gets query for [[MovieActors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMovieActors()
    {
        return $this->hasMany(MovieActor::className(), ['PersonID' => 'PersonID']);
    }

    /**
     * Gets query for [[Movies]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMovies()
    {
        return $this->hasMany(Movie::className(), ['DirectorID' => 'PersonID']);
    }
}
