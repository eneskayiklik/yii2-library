<?php

namespace eneskayiklik\library\models;

use Yii;

/**
 * This is the model class for table "book_case".
 *
 * @property int $id
 * @property string $genre
 * @property string $book_name
 * @property string $author
 * @property string $effective_date
 *
 * @property Genre $genre0
 */
class BookCase extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'book_case';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['genre', 'book_name', 'author', 'effective_date'], 'required'],
            [['genre', 'book_name', 'author'], 'string', 'max' => 50],
            [['effective_date'], 'string', 'max' => 11],
            [['genre'], 'exist', 'skipOnError' => true, 'targetClass' => Genre::className(), 'targetAttribute' => ['genre' => 'genre_name']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'genre' => 'Genre',
            'book_name' => 'Book Name',
            'author' => 'Author',
            'effective_date' => 'Effective Date',
        ];
    }

    /**
     * Gets query for [[Genre0]].
     *
     * @return \yii\db\ActiveQuery|GenreQuery
     */
    public function getGenre0()
    {
        return $this->hasOne(Genre::className(), ['genre_name' => 'genre']);
    }

    /**
     * {@inheritdoc}
     * @return BookCaseQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new BookCaseQuery(get_called_class());
    }
}
