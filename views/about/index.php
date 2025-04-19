<?php
$this->title = 'О приложении'
?>
<div class="container">
    <?= $this->render('/html/h1', ['h1' => $this->title]) ?>
    <div class="row">
        <div class="col-12 col-lg-8 mx-auto">
            <p class="text-center fs-5 text-info">
                Приложение разработано в рамках выполнения выпускной квалификационной работы бакалавра.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-9 mx-auto">
            <p class="text-center fs-5 text-info">
               <span class="text-secondary text-decoration-underline">Наименование работы :</span> <br> "Проектирование информационно-аналитического Web-приложения для опросов и голосования на примере «ЧОУВО «МУ им. С.Ю. Витте"
            </p>
        </div>
    </div>
</div>