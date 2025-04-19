<?php

use app\models\VoteAnswerUser;

?>
<ul class="list-group list-group-flush card mb-3">
    <div class="card-title text-center fw-bold">
        <?=$vote -> question?>
    </div>
    <?php foreach ($answers as $an): ?>
        <li class="list-group-item">
            <div class="progress" role="progressbar">
                <?php
                  $count = VoteAnswerUser::find()->where(['vote_answer_id' => $an -> id])->count();
                  $proc = ($count / $vc)*100;

                  if(!$count) {$count = 0; $proc = 1;}
                 ?>
                <div class="progress-bar bg-success fw-bold" style="width: <?=$proc?>%">
                   <?=$an -> answer ?> - Голосов: <?=$count?> - <?=round($proc, 2)?>%
                </div>
            </div>
        </li>
    <?php endforeach ?>
</ul>


