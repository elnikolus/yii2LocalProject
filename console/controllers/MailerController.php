<?php

namespace console\controllers;

use console\models\Subscriber;
use Yii;
use console\models\News;
use console\models\Sender;

class MailerController extends  \yii\console\Controller
{
    public function actionSend()
    {

        $subscribers = Subscriber::getList();
        $newsList = News::getList();

        $result = Sender::run($subscribers, $newsList);

        print_r($result);

    }
}