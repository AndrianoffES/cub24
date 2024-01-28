<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Reports $model */

$this->title = 'Update Reports: ' . $model->Title;
$this->params['breadcrumbs'][] = ['label' => 'Reports', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Title, 'url' => ['view', 'ReportID' => $model->ReportID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="reports-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
