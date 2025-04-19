<?php

use app\widgets\charts\Pie;
use yii\bootstrap5\Breadcrumbs;

$this->title = 'Генерация отчётов в Excel'
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
                        'label' => 'Генерация отчётов в Excel',
                    ],
                ]
            ]) ?>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12 col-lg-8 mx-auto">
            <p class="text-center fs-4 font-monospace text-primary">
                <?= $this->title ?>
                <img width="64" src="/img/excel.png" alt="">
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-9 mx-auto">
            <div class="vstack gap-2">
                <a href="/admin/home/export-votes">Отчёт по голосованиям</a>
                <a href="/admin/home/export-surveys">Отчёт по опросам</a>
            </div>
        </div>
    </div>
</div>