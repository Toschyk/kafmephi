<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\StudentGrades $model */

$this->title = 'Update Student Grades: ' . $model->Id;
$this->params['breadcrumbs'][] = ['label' => 'Student Grades', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Id, 'url' => ['view', 'Id' => $model->Id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="student-grades-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
