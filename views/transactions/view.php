<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Transactions $model */

$this->title = $model->TransactionID;
$this->params['breadcrumbs'][] = ['label' => 'Transactions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="transactions-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'TransactionID' => $model->TransactionID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'TransactionID' => $model->TransactionID], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'TransactionID',
            'Date',
            'Amount',
            'Type',
            'Description:ntext',
            'EmployeeID',
        ],
    ]) ?>

</div>
