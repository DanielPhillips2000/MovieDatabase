<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Movies".
 *
 * @property int $MovieID
 * @property string $Title
 * @property string $ReleaseDate
 * @property int|null $DirectorID
 * @property int|null $RatingID
 *
 * @property MovieActor[] $movieActors
 * @property AgeRating $rating
 * @property Person $director
 */
class Movies extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Movies';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Title', 'ReleaseDate'], 'required'],
            [['ReleaseDate'], 'safe'],
            [['DirectorID', 'RatingID'], 'integer'],
            [['Title'], 'string', 'max' => 70],
            [['RatingID'], 'exist', 'skipOnError' => true, 'targetClass' => AgeRatings::className(), 'targetAttribute' => ['RatingID' => 'RatingID']],
            [['DirectorID'], 'exist', 'skipOnError' => true, 'targetClass' => Persons::className(), 'targetAttribute' => ['DirectorID' => 'PersonID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'MovieID' => 'Movie ID',
            'Title' => 'Title',
            'ReleaseDate' => 'Release Date',
            'DirectorID' => 'Director',
            'RatingID' => 'Rating',
            
        ];
    }

    /**
     * Gets query for [[MovieActors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMovieActors()
    {
        return $this->hasMany(MovieActor::className(), ['MovieID' => 'MovieID']);
    }

    /**
     * Gets query for [[Rating]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRating()
    {
        return $this->hasOne(AgeRating::className(), ['RatingID' => 'RatingID']);
    }

    /**
     * Gets query for [[Director]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDirector()
    {
        return $this->hasOne(Person::className(), ['PersonID' => 'DirectorID']);
    }
}
