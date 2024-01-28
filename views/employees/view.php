<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Employees $model */

$this->title = $model->EmployeeID;
$this->params['breadcrumbs'][] = ['label' => 'Employees', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="employees-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'EmployeeID' => $model->EmployeeID], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'EmployeeID' => $model->EmployeeID], [
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
            'EmployeeID',
            'FirstName',
            'LastName',
            'Position',
            'Department',
        ],
    ]) ?>

</div>
