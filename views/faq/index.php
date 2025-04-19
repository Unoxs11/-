<?php
$this->title = 'Описание'
?>
<div class="container">
    <?= $this->render('/html/h1', ['h1' => $this->title]) ?>
    <div class="row">
        <div class="col-12 col-lg-8 mx-auto">
            <p class="text-center fs-5 text-primary">
                В приложении предусмотрено 5 ролей: <br>
            <ul class="text-info">
                <li>Гость</li>
                <li>Абитуриент</li>
                <li>Студент</li>
                <li>Преподаватель</li>
                <li>Администратор</li>
            </ul>
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-9 mx-auto">
            <p class="text-center fs-5 text-info">
                <span class="text-primary text-decoration-underline">Возможности каждой из ролей :</span> <br>
            <div class="row">
                <div class="col-12 col-lg-9 mx-auto text-center">
                    <table class="table table-primary">
                        <tr>
                            <th>Гость</th>
                            <td>Можно просматривать страницы сайта, видеть опубликованные результаты голосований</td>
                        </tr>
                        <tr>
                            <td>Абитуриент</td>
                            <td>Возможности гостя + личный кабинет и участие в опросах и голосованиях, возможность видеть закрытые голосования</td>
                        </tr>
                        <tr>
                            <td>Студент</td>
                            <td>Возможности гостя + личный кабинет и участие в опросах и голосованиях, возможность видеть закрытые голосования</td>
                        </tr>
                        <tr>
                            <td>Преподаватель</td>
                            <td>Возможности гостя + личный кабинет и участие в опросах и голосованиях, возможность видеть закрытые голосования</td>
                        </tr>
                        <tr>
                            <td>Администратор</td>
                            <td>Возможности гостя + личный кабинет возможность создавать профили для всех ролей,
                                возможность создавать опросы и голосования, видеть результаты и статистику</td>
                        </tr>
                    </table>
                </div>
            </div>
            </p>
        </div>
    </div>
</div>