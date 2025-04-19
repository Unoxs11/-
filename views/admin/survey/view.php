<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\bootstrap5\Breadcrumbs;

/** @var yii\web\View $this */
/** @var app\models\Survey $model */

$this->title = 'Опрос №' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Surveys', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="container">
    <div class="row mt-4">
        <div class="col">
            <?= Breadcrumbs::widget([
                'links' => [
                    [
                        'label' => 'Мой кабинет',
                        'url' => '/admin/home'
                    ],
                    [
                        'label' => 'Опросы',
                        'url' => '/admin/survey/index'
                    ],
                    [
                        'label' => 'Опрос №' .  $model->id,
                    ],
                ]
            ]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-9 mx-auto">
            <div class="survey-view">

                <h1><?= Html::encode($this->title) ?></h1>

                <p>
                    <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
                    <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
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
                        'id',
                        [
                            'attribute' => 'is_public',
                            'value' => function($model){
                                return $model -> isPublic();
                            }
                        ],
                        [
                            'attribute' => 'type',
                            'value' => function($model){
                                return $model -> getType();
                            }
                        ],
                        'question:ntext',
                    ],
                ]) ?>

            </div>
        </div>
    </div>
</div>