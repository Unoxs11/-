<?php

use yii\bootstrap5\Breadcrumbs;

$this->title = 'Администратор'
?>
<div class="container">
    <div class="row mt-4">
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
    <div class="row mt-3">
        <div class="col-12 col-lg-8 mx-auto">
            <p class="text-center fs-4 font-monospace text-info">
                <?= $this->title ?>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-9 mx-auto pb-4">
            <div class="row align-items-center justify-content-center row-cols-1 row-cols-lg-3 g-3">
                <div class="col">
                    <a class="text-decoration-none" href="/admin/student/index">
                        <div class="card bg-info rounded shadow">
                            <div class="card-body text-center">
                                <h5 class="card-title text-white">Студенты</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a class="text-decoration-none" href="/admin/teacher/index">
                        <div class="card bg-info rounded shadow">
                            <div class="card-body text-center">
                                <h5 class="card-title text-white">Преподаватели</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a class="text-decoration-none" href="/admin/applicant/index">
                        <div class="card bg-info rounded shadow">
                            <div class="card-body text-center">
                                <h5 class="card-title text-white">Абитуриенты</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a class="text-decoration-none" href="/admin/survey/index">
                        <div class="card bg-info rounded shadow">
                            <div class="card-body text-center">
                                <h5 class="card-title text-white">Опросы</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a class="text-decoration-none" href="/admin/vote/index">
                        <div class="card bg-info rounded shadow">
                            <div class="card-body text-center">
                                <h5 class="card-title text-white">Голосования</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a class="text-decoration-none" href="/admin/home/statistic">
                        <div class="card bg-info rounded shadow">
                            <div class="card-body text-center">
                                <h5 class="card-title text-white">Отчёты</h5>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a class="text-decoration-none" href="/admin/feedback/index">
                        <div class="card bg-info rounded shadow">
                            <div class="card-body text-center">
                                <h5 class="card-title text-white">Обратная связь</h5>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>