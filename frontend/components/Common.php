<?
namespace frontend\components;

use yii\base\Component;
use yii\helpers\BaseFileHelper;
use yii\helpers\Url;

class Common extends Component{

    const EVENT_NOTIFY = 'notify_admin';

    public function sendMail($subject,$text,$emailTo='tikhmenev@mail.ru',$nameFrom='КОЛЬЦА ДЛЯ КОЛОДЦЕВ')
    {
        if(\Yii::$app->mail->compose()
            ->setFrom(['jbi33@yandex.ru' => 'КОЛЬЦА ДЛЯ КОЛОДЦЕВ'])
            ->setTo([$emailTo => $nameFrom])
            ->setSubject($subject)
            ->setHtmlBody($text)
            ->send()){
            $this->trigger(self::EVENT_NOTIFY);
            return true;
        }
    }

    public function tinyMce()
    {

    }



}