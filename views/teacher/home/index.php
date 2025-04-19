<?php

$this->title = 'Преподаватель - ' . $student->gfn();

use yii\helpers\Url;
use yii\bootstrap5\Breadcrumbs;

?>
    <div class="row">
        <div class="col">
            <?= Breadcrumbs::widget([
                'links' => [
                    [
                        'label' => 'Мой кабинет',
                    ],
                ]
            ]) ?>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-8 mx-auto">
            <p class="text-center fs-4 font-monospace text-info">
                <?= $this->title ?>
            </p>
        </div>
    </div>
</div>