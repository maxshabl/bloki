<?php
namespace frontend\models;
use yii;
use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model
{
    /**
    * @var UploadedFile
    */
    public $imageFile;

    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $path = Yii::getAlias("@frontend/web/uploads/");
            $id = Yii::$app->request->get("id");
            $this->imageFile->saveAs($path . $id . '.' . 'jpg');
            return true;
        } else {
    return false;
        }
    }
}