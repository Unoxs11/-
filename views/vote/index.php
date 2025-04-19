<?php

use app\models\VoteAnswerUser;
use app\models\VoteAnswer;
$this -> title = 'Текущие голосования';
?>

<div class="container mt-3">
    <div class="row mt-2">
        <div class="col-12 col-lg-8 mx-auto text-center fs-5">
            Текущие голосования
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12 col-lg-8 mx-auto text-center fs-5">
            <?php foreach ($votes as $vote): ?>
                <?php
                $answers = $vote->getAnswer();
                $va = VoteAnswer::find()->where(['vote_id' => $vote->id])->column();

                $vc = VoteAnswerUser::find()->where(
                    ['vote_answer_id' => $va]
                )->count();
                ?>
                <ul class="list-group list-group-flush card mb-3">
                    <div class="card-title text-center fw-bold">
                        <?= $vote->question ?>
                    </div>
                    <?php foreach ($answers as $an): ?>
                        <li class="list-group-item">
                            <div class="progress" role="progressbar">
                                <?php
                                $count = VoteAnswerUser::find()->where(['vote_answer_id' => $an->id])->count();
                                $proc = ($count / $vc) * 100;

                                if (!$count) {
                                    $count = 0;
                                    $proc = 1;
                                }
                                ?>
                                <div class="progress-bar bg-success fw-bold" style="width: <?= $proc ?>%">
                                    <?= $an->answer ?> - Голосов: <?= $count ?> - <?= round($proc, 2) ?>%
                                </div>
                            </div>
                        </li>
                    <?php endforeach ?>
                </ul>
            <?php endforeach ?>
        </div>
    </div>
</div>