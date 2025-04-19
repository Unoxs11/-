<?php

use app\models\VoteAnswerUser;
use app\models\VoteAnswer;
$this -> title = 'Текущие опросы';
?>

<div class="container mt-3">
    <div class="row mt-2">
        <div class="col-12 col-lg-8 mx-auto text-center fs-5">
            <?=$this -> title?>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12 col-lg-8 mx-auto text-center fs-5">
            <?php foreach ($sur as $s): ?>
                <div class="card px-3 rounded">
                    <p class="fs-5 fw-bold">
                        <?=$s -> question ?>
                    </p>
                    <p class="card-footer">
                       Опрос проводится <?=$s -> getType() ?>
                    </p>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>