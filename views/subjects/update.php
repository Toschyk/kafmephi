<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Subjects $model */

$this->title = 'Update Subjects: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Subjects', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'Id' => $model->Id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="subjects-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
