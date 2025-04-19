<?php

$this->title = 'Голосования';

use yii\helpers\Url;
use yii\bootstrap5\Breadcrumbs;
use yii\widgets\Pjax;

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
                        'label' => $this->title
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
        <div class="col-12 col-lg-8 mx-auto">
            <?php foreach ($votes as $vo): ?>
                <?php if ($vo->notAnswerTeacher($student->id)): ?>
                    <div>
                        <?php Pjax::begin(); ?>
                        <form action="" method="post" data-pjax="true">
                            <div class="card rounded shadow p-2 pt-1 pb-1 mb-3">
                                <div class="card-title text-center fw-bold fs-5">
                                    <label for="" class="form-label">
                                        <?= $vo->question ?>
                                    </label>
                                </div>
                                <div class="card-body">
                                    <?php $ans = $vo->getAnswer(); ?>
                                    <ul class="list-group list-group-flush">
                                        <?php foreach ($ans as $an): ?>
                                            <li class="list-group-item">
                                                <div class="form-check">
                                                    <input checked class="form-check-input" type="radio" name="ans" value="<?= $an->id ?>">
                                                    <label class="form-check-label">
                                                        <?= $an->answer ?>
                                                    </label>
                                                </div>
                                            </li>
                                        <?php endforeach ?>
                                    </ul>
                                    <button type="submit" class="mt-1 btn btn-sm border border-success">
                                        Голосовать
                                    </button>
                                </div>
                            </div>
                            <input type="hidden" name="vote_id" value="<?=$vo -> id?>">
                        </form>
                        <?php Pjax::end(); ?>
                    </div>
                <?php endif ?>
            <?php endforeach ?>
        </div>
    </div>
</div>

