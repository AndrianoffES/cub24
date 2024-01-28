<?php

use app\models\Transactions;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Transactions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transactions-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Transactions', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'TransactionID',
            'Date',
            'Amount',
            'Type',
            'Description:ntext',
            //'EmployeeID',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Transactions $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'TransactionID' => $model->TransactionID]);
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
