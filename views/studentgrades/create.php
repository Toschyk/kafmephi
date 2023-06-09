<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\StudentGrades $model */

$this->title = 'Create Student Grades';
$this->params['breadcrumbs'][] = ['label' => 'Student Grades', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-grades-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
