<?php


use app\models\Employees;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;


/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Employees';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="employees-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (Yii::$app->user->can('admin')): ?>
        <p>
            <?= Html::a('Create Employees', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    <?php endif; ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'EmployeeID',
            'FirstName',
            'LastName',
            'Position',
            'Department',

            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Employees $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'EmployeeID' => $model->EmployeeID]);
                },
                'visibleButtons' => [
                    'view' => Yii::$app->user->can('admin'),
                    'update' => Yii::$app->user->can('admin'),
                    'delete' => Yii::$app->user->can('admin'),
                ]
            ],
        ],
    ]); ?>
</div>

