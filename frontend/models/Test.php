<?php

namespace frontend\models;

use frontend\components\StringHelper;
use Yii;

/**
 * Class Test
 * @package frontend\models
 *
 * @author elnikolus
 */
class Test
{
    /**
     * @param integer $max
     * @return array
     * @throws \yii\db\Exception
     */
    public static function getNewsList($max)
    {
        $max = intval($max);
        $sql = 'SELECT * FROM news LIMIT ' . $max;

        $result = Yii::$app->db->createCommand($sql)->queryAll();

        if (!empty($result) && is_array($result)) {
            foreach ($result as &$item) {
                $item['content'] = Yii::$app->stringHelper->getShort($item['content']);
            }
        }

        return $result;
    }

    /**
     * @param integer $id
     * @return array|false
     * @throws \yii\db\Exception
     */
    public static function getItem($id)
    {
        $id = intval($id);
        $sql = "SELECT * FROM news WHERE id = $id";

        return Yii::$app->db->createCommand($sql)->queryOne();
    }
}