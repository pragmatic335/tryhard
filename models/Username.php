<?php


namespace app\models;


use yii\db\ActiveRecord;

class Username extends ActiveRecord
{
    public static function getUsername($username) {
        return(Username::findOne()->);
    }

}