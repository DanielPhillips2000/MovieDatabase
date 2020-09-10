<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "MovieActor".
 *
 * @property int $MovieActorID
 * @property int|null $PersonID
 * @property int|null $MovieID
 *
 * @property Person $person
 * @property Movie $movie
 */
class MovieActor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'MovieActor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['PersonID', 'MovieID'], 'integer'],
            [['PersonID'], 'exist', 'skipOnError' => true, 'targetClass' => Persons::className(), 'targetAttribute' => ['PersonID' => 'PersonID']],
            [['MovieID'], 'exist', 'skipOnError' => true, 'targetClass' => Movies::className(), 'targetAttribute' => ['MovieID' => 'MovieID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'MovieActorID' => 'Movie Actor ID',
            'PersonID' => 'Actor/Actress',
            'MovieID' => 'Movie',
        ];
    }

    /**
     * Gets query for [[Person]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPerson()
    {
        return $this->hasOne(Person::className(), ['PersonID' => 'PersonID']);
    }

    /**
     * Gets query for [[Movie]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMovie()
    {
        return $this->hasMany(Movie::className(), ['MovieID' => 'MovieID']);
    }
}
