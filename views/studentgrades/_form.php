<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\StudentGrades $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="student-grades-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'StudentId')->textInput() ?>

    <?= $form->field($model, 'SubjectId')->textInput() ?>

    <?= $form->field($model, 'Grade')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
