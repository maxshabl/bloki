<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property string $id
 * @property double $price
 * @property string $title
 * @property string $descr
 * @property string $images
 * @property string $dimention
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['price'], 'number'],
            [['descr'], 'string'],
            [['title', 'images', 'dimention'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'price' => 'Price',
            'title' => 'Title',
            'descr' => 'Descr',

            'dimention' => 'Dimention',
        ];
    }
}
