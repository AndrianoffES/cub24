<?php

use app\models\Reports;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Reports';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reports-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Reports', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ReportID',
            'Title',
            'CreationDate',
            'EmployeeID',
            'Status',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Reports $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ReportID' => $model->ReportID]);
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
