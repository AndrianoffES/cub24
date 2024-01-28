<?php

namespace app\commands;

use Yii;
use yii\console\Controller;
use app\models\User;

class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;

        // очистка старых данных
        $auth->removeAll();

        // создание ролей
        $admin = $auth->createRole('admin');
        $user = $auth->createRole('user');

        // добавление ролей в систему
        $auth->add($admin);
        $auth->add($user);

        // создание разрешений
        $manageUsers = $auth->createPermission('manageUsers');
        $manageUsers->description = 'Manage users';

        // добавление разрешений в систему
        $auth->add($manageUsers);

        // назначение разрешений ролям
        $auth->addChild($admin, $manageUsers);

    }

    public function actionAssignAdmin($userId)
    {
        $auth = Yii::$app->authManager;

        // Назначение роли
        $adminRole = $auth->getRole('admin');
        $auth->assign($adminRole, $userId);

        // Обновление поля 'role' в таблице 'user'
        $user = User::findOne($userId);
        if ($user) {
            $user->role = 'admin';
            if (!$user->save()) {
                echo "Не удалось обновить роль пользователя.\n";
                print_r($user->getErrors());
            } else {
                echo "Пользователю с ID $userId назначена роль администратора и обновлена таблица пользователей.\n";
            }
        } else {
            echo "Пользователь с ID $userId не найден.\n";
        }
    }


}
