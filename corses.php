<?php 
session_start();
if(!$_SESSION['user']){
    header('Location:'.$_SERVER['HTTP_REFERER']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Шрифт Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- Пакет JavaScript с Popper и CSS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image" href="img/favicon.svg" />
    <title>CODE Academy</title>
</head>

<body>
    <!-- header -->
    <?php
    require_once 'components/header.php';
    require_once 'vendor/connectDB.php';
    ?>
    <!-- / header -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Зона контента -->
    <div class="container">


        <div class="title">Начать просто. Попробуйте</div>
        <div class="sm_title">Мы выбрали одно направление — фронтенд, и сделали подробные тренажёры о
            веб-технологиях.</div>
        <h5 style="margin-top: 60px;">Знакомство с HTML и CSS</h5>
        <p>На практике знакомимся с базовыми технологиями веб-разработки: HTML и CSS</p>
        <div class="row">
            <div class="col-sm">
                <div class="card" style="width: 100%">
                    <div class="card-body">
                        <h5 class="card-title">Основы HTML</h5>
                        <p class="card-text">Познакомимся с основными тегами HTML</p>
                        <a href="tasks/trainer1.php" class="btn btn-primary">Начать</a>
                    </div>
                </div> 
            </div>
            <div class="col-sm">
                <div class="card" style="width: 100%">
                    <div class="card-body">
                        <h5 class="card-title">Основы CSS</h5>
                        <p class="card-text">Познакомимся с CSS</p>
                        <a href="tasks/trainer2.php" class="btn btn-primary">Начать</a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" style="width: 100%">
                    <div class="card-body">
                        <h5 class="card-title">Основы CSS </h5>
                        <p class="card-text">Познакомимся с CSS flexbox</p>
                        <a href="tasks/trainer3.php" class="btn btn-primary">Начать</a>
                    </div>
                </div>
            </div>
        </div>

        <h5 style="margin-top: 60px;">Знакомство JavaScript</h5>
        <p>Начнём изучение языка с рассмотрения основных «строительных блоков» кода.</p>
        <div class="row">
            <div class="col-sm">
                <div class="card" style="width: 100%">
                    <div class="card-body">
                        <h5 class="card-title">Основы JavaScript</h5>
                        <p class="card-text">Познакомимся с основами JavaScript</p>
                        <a href="#" class="btn btn-primary">Начать</a>
                    </div>
                </div> 
            </div>
            <div class="col-sm">
                <div class="card" style="width: 100%">
                    <div class="card-body">
                        <h5 class="card-title">Инструкции JavaScript</h5>
                        <p class="card-text">Псинтаксические конструкции и команды</p>
                        <a href="#" class="btn btn-primary">Начать</a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" style="width: 100%">
                    <div class="card-body">
                        <h5 class="card-title">Переменные JavaScript </h5>
                        <p class="card-text">Познакомимся  «хранилищем» данных</p>
                        <a href="#" class="btn btn-primary">Начать</a>
                    </div>
                </div>
            </div>
        </div>

        <h5 style="margin-top: 60px;">Знакомство PHP</h5>
        <p>Начнём изучение языка с рассмотрения основных «строительных блоков» кода.</p>
        <div class="row">
            <div class="col-sm">
                <div class="card" style="width: 100%">
                    <div class="card-body">
                        <h5 class="card-title">Основы PHP</h5>
                        <p class="card-text">Познакомимся с основами PHP</p>
                        <a href="#" class="btn btn-primary">Начать</a>
                    </div>
                </div> 
            </div>
            <div class="col-sm">
                <div class="card" style="width: 100%">
                    <div class="card-body">
                        <h5 class="card-title">Встраивание кода PHP</h5>
                        <p class="card-text">Принципы скриптов на PHP</p>
                        <a href="#" class="btn btn-primary">Начать</a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" style="width: 100%">
                    <div class="card-body">
                        <h5 class="card-title">Переменные PHP </h5>
                        <p class="card-text">Познакомимся  «хранилищем» данных</p>
                        <a href="#" class="btn btn-primary">Начать</a>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <!-- Footer -->
    <?php
    require_once 'components/footer.php';
    ?>
    <!-- Footer -->
</body>

</html>