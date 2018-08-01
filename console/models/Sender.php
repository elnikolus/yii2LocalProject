<?php
/**
 * Created by PhpStorm.
 * User: drofi
 * Date: 30.07.2018
 * Time: 23:06
 */

namespace console\models;
use Yii;

class Sender
{
    public static function run($subscribers, $newsList)
    {
        foreach ($subscribers as $subscriber) {
            $result = Yii::$app->mailer->compose('/mailer/newsList', [
                'newsList' => $newsList,
            ])
                ->setFrom('test.php.up@gmail.com')
                ->setTo($subscriber['email'])
                ->setSubject('Тема сообщения')
                ->send();
            var_dump($result);
        }
    }

}