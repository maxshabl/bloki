<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "posts".
 *
 * @property integer $id
 * @property string $title
 * @property string $keywords
 * @property string $text
 * @property string $postscol
 * @property string $data
 */
class Posts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'posts';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text','abstract','title', 'keywords'], 'string'],
            [['date'], 'default'],
            //[['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
            //[['title', 'keywords'], 'string', 'max' => 255],
            [['postscol'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'keywords' => 'Keywords',
            'text' => 'Text',
            'postscol' => 'Postscol',
            'abstract' => 'Abstract',
            'date' => 'Date',
        ];
    }
}
