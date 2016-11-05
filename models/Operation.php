<?php
/**
 * Created by PhpStorm.
 * User: artur
 * Date: 05.11.16
 * Time: 11:42
 */
namespace app\models;
use yii\db\ActiveRecord;
use Yii;

class Operation extends ActiveRecord
{
    public static function tableName()
    {
        return 'operation';
    }
}