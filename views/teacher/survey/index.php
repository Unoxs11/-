<?php

$this->title = 'Опросы';

use yii\helpers\Url;
use yii\bootstrap5\Breadcrumbs;

?>
<div class="container">
    <div class="row mt-4">
        <div class="col">
            <?= Breadcrumbs::widget([
                'links' => [
                    [
                        'label' => 'Мой кабинет',
                        'url' => '/teacher/home'
                    ],
                    [
                        'label' => $this -> title
                    ]
                ]

            ]) ?>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12 col-lg-8 mx-auto">
            <p class="text-center fs-4 font-monospace text-info">
                <?= $this->title ?>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-9 mx-auto">
          <?php foreach($sur as $s):?>
            <?php if($s -> NotSur($student -> id)):?>
                <form action="" method="post">
                    <label class="form-label" for=""><?=$s -> question?></label>
                    <textarea class="form-control" name="answer" id="" required></textarea>
                    <input type="hidden" name="survey_id" value="<?=$s -> id?>">
                    <input type="hidden" name="user_id" value="<?=$student -> id?>">
                    <button type="submit" class="mt-3 btn btn-sm btn-warning">Отправить</button>
                </form>
            <?php else :?>
                <p class="fs-4 text-center">
                    На данный момент опросов для вас нет
                </p>
            <?php endif ?>
          <?php endforeach?>
        </div>
    </div>
</div>