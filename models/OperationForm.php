<?php
/**
 * Created by PhpStorm.
 * User: artur
 * Date: 05.11.16
 * Time: 11:45
 */

namespace app\models;

use Yii;
use yii\base\Model;

class OperationForm extends Model
{
    public $firstNumber;
    public $secondNumber;

    public function rules()
    {
        return [
            [['firstNumber', 'secondNumber'], 'required'],
            ['firstNumber', 'validNumber'],
            ['secondNumber', 'validNumber'],
        ];
    }

    public function validNumber($attribute)
    {
        if (!preg_match('/^[0-9]{3,15}$/', $this->$attribute)) {
            $this->addError($attribute, 'Must within 3-15 digits.');
        }
    }
}