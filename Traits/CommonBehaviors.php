<?php
namespace app\traits;

use yii\filters\AccessControl;
use yii\filters\VerbFilter;

trait CommonBehaviors
{
    /**
     * @return array
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'actions' => ['index', 'view'], // Действия, доступные всем пользователям
                        'allow' => true,
                        'roles' => ['@', '?'], // '@' - авторизованные пользователи, '?' - гости
                    ],
                    [
                        'actions' => ['create', 'update'], // Действия, доступные администратору
                        'allow' => true,
                        'roles' => ['admin'],
                    ],
                    [
                        'actions' => ['delete'], // Удаление разрешено только администратору
                        'allow' => true,
                        'roles' => ['admin'],
                        'verbs' => ['POST'], // Удаление разрешено только через POST-запрос
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }
}