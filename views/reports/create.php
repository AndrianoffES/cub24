<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Reports $model */

$this->title = 'Create Reports';
$this->params['breadcrumbs'][] = ['label' => 'Reports', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reports-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
