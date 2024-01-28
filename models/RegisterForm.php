<?php

namespace app\models;

use Yii;
use yii\base\Model;

class RegisterForm extends Model
{
    public $username;
    public $password;

    public function rules()
    {
        return [

            [['username', 'password'], 'required'],
            ['username', 'unique', 'targetClass' => '\app\models\User', 'message' => 'Такой пользователь уже существует'],
            ['password', 'string', 'min' => 6],
        ];
    }
}