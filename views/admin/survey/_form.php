<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Survey $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="survey-form">

<?php $form = ActiveForm::begin([
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
            'horizontalCssClasses' => [
                'label' => 'col-sm-3 text-end',
                'offset' => 'offset-sm-4',
                'wrapper' => 'col-sm-8',
                'error' => '',
                'hint' => '',
            ],
        ],
    ]); ?>

    <?= $form->field($model, 'type')->dropDownList([ 'All' => 'Для всех', 'Student' => 'Для студентов', 'Teacher' => 'Для преподавателей', 'Applicant' => 'Для абитуриентов', ]) ?>

    <?= $form->field($model, 'is_public')->dropDownList([ '0' => 'Нет', '1' => 'Да', ]) ?>

    <?= $form->field($model, 'question')->textarea(['rows' => 6]) ?>

    <div class="form-group mt-3 mb-3">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success w-100']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
