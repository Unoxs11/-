<?php

use app\assets\AppAsset;
use app\models\Auth;
use app\widgets\Alert;
use yii\bootstrap5\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body class="d-flex flex-column justify-content-between min-vh-100">
    <?php $this->beginBody() ?>
    <?= $this->render('/html/header') ?>
    <?= Alert::widget() ?>
    <div class="container">
        <div class="row mt-3">
            <div class="col-12 col-lg-3">
                <div class="vstack gap-3">
                    <a class="text-decoration-none" href="/student/survey">
                        <div class="card bg-primary rounded shadow">
                            <div class="card-body text-center">
                                <h5 class="card-title text-white">Опросы</h5>
                            </div>
                        </div>
                    </a>
                    <a class="text-decoration-none" href="/student/vote">
                        <div class="card bg-primary rounded shadow">
                            <div class="card-body text-center">
                                <h5 class="card-title text-white">Голосования</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-12 col-lg-9">
                <?= $content ?>
            </div>
        </div>
    </div>
    <?= $this->render('/html/footer') ?>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>