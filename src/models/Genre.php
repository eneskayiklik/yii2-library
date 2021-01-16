<?php

namespace eneskayiklik\library\models;

use Yii;

/**
 * This is the model class for table "genre".
 *
 * @property string $genre_name
 *
 * @property BookCase[] $bookCases
 */
class Genre extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'genre';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['genre_name'], 'required'],
            [['genre_name'], 'string', 'max' => 50],
            [['genre_name'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'genre_name' => 'Genre Name',
        ];
    }

    /**
     * Gets query for [[BookCases]].
     *
     * @return \yii\db\ActiveQuery|BookCaseQuery
     */
    public function getBookCases()
    {
        return $this->hasMany(BookCase::className(), ['genre' => 'genre_name']);
    }

    /**
     * {@inheritdoc}
     * @return GenreQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new GenreQuery(get_called_class());
    }
}
