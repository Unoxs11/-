<?php

use app\models\Auth;
use yii\bootstrap5\Dropdown;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
?>
<header>
    <nav class="navbar navbar-expand-lg bg-success">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <?php if (Auth::isAdmin() || Auth::isTeacher() || Auth::isStudent() || Auth::isApplicant()) : ?>

                    <?php else : ?>
                        <li class="nav-item dropdown rounded bg-dark p-0">
                            <a class="nav-link fs-6 text-white dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Личный кабинет
                            </a>
                            <ul class="dropdown-menu border border-warning p-2 rounded">
                                <li><a class="dropdown-item  fw-bold" href="/student/auth/login">Студент</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item  fw-bold" href="/teacher/auth/login">Преподаватель</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item  fw-bold" href="/applicant/auth/login">Абитуриент</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item  fw-bold" href="/admin/auth/login">Администратор</a></li>
                            </ul>
                        </li>
                    <?php endif ?>
                    <?php if (Auth::isAdmin()) : ?>
                        <li class="nav-item">
                            <a class="nav-link text-white fw-bold" href="/admin/home">Администратор</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white fw-bold" href="/admin/auth/logout">Выйти</a>
                        </li>
                    <?php endif ?>
                    <?php if (Auth::isStudent()) : ?>
                        <li class="nav-item">
                            <a class="nav-link text-white fw-bold" href="/student/home">Студент</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white fw-bold" href="/student/auth/logout">Выйти</a>
                        </li>
                    <?php endif ?>
                    <?php if (Auth::isTeacher()) : ?>
                        <li class="nav-item">
                            <a class="nav-link text-white fw-bold" href="/teacher/home">Преподаватель</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white fw-bold" href="/teacher/auth/logout">Выйти</a>
                        </li>
                    <?php endif ?>
                    <?php if (Auth::isApplicant()) : ?>
                        <li class="nav-item">
                            <a class="nav-link text-white fw-bold" href="/applicant/home">Абитуриент</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white fw-bold" href="/applicant/auth/logout">Выйти</a>
                        </li>
                    <?php endif ?>
                </ul>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-white fw-bold" href="/faq">Описание</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white fw-bold" href="/about">О приложении</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white fw-bold" href="https://www.muiv.ru">Университет</a>
                    </li>
                    <li class="nav-item dropdown rounded p-0">
                        <a class="nav-link text-white fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="fw-bold">...</span>
                        </a>
                        <ul class="dropdown-menu border border-warning p-2 rounded">
                            <li><a class="dropdown-item  fw-bold" href="/survey">Опросы</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item  fw-bold" href="/vote">Голосования</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="/" class="nav-link d-flex flex-column">
                            <span class="fs-5 fw-bold text-white fst-italic">
                                <?= Yii::$app->name ?>
                            </span>
                            <small class="text-white font-monospace">
                                <?= Yii::$app->params['subtitle'] ?>
                            </small>
                        </a>
                    </li>
                </ul>
            </div>
            <a class="navbar-brand" href="/">
                <img width="64" src="/img/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
</header>