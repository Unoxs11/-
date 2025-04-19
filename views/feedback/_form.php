<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Feedback $model */
/** @var ActiveForm $form */
?>
<div class="feedback-_form">

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
        <?= $form->field($model, 'username')?>
        <?= $form->field($model, 'question')->textarea() ?>
        <?= $form->field($model, 'email')->input('email') ?>
        <?= $form->field($model, 'phone')?>
        <div class="form-group mt-3 mb-4 text-center">
            <?= Html::submitButton('Отправить вопрос', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- feedback-_form -->
