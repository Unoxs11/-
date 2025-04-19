<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\bootstrap5\Breadcrumbs;



$this->title = "Голосование #" . $model->id;

\yii\web\YiiAsset::register($this);
?>
<div class="container">
    <div class="row mt-1">
        <div class="col">
            <?= Breadcrumbs::widget([
                'links' => [
                    [
                        'label' => 'Мой кабинет',
                        'url' => '/admin/home'
                    ],
                    [
                        'label' => 'Голосования',
                    ],
                ]
            ]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-9 mx-auto">
            <div class="vote-view">

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
                        'is_public',
                        'question:ntext',
                    ],
                ]) ?>

            </div>
        </div>
    </div>
</div>