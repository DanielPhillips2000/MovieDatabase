<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "AgeRatings".
 *
 * @property int $RatingID
 * @property string $Rateing
 * @property string $AgeRange
 * @property string $RatingIcon
 *
 * @property Movie[] $movies
 */
class AgeRatings extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'AgeRatings';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Rating', 'AgeRange',], 'required'],
            [['Rating', 'AgeRange', 'RatingIcon'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'RatingID' => 'Rating ID',
            'Rating' => 'Rating',
            'AgeRange' => 'Age Range',
            'RatingIcon' => 'Rating Icon',
        ];
    }

    /**
     * Gets query for [[Movies]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMovies()
    {
        return $this->hasMany(Movie::className(), ['RatingID' => 'RatingID']);
    }
}
