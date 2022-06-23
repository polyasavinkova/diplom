<?php 
session_start();
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
        <section class="promo row">
            <div class="col-12 gy-5">
                <div class="block" style="color: rgba(255, 255, 255, 0.85); font-size: 40px;">Начните карьеру в IT,
                    оттачивайте своё мастерство</div>
                <div class="block" style="color: rgba(255, 255, 255, 0.85); font-size: 20px;">Научитесь создавать и
                    программировать современные веб-интерфейсы</div>
            </div>
            <div class="col-12 gy-5">
                <div class="promobutton">
                    <button onclick="window.location.href='corses.php'" style="padding: 16px; min-width: 350px;"
                        type="button" class="btn btn-light">Начать учиться бесплатно</button>
                </div>
            </div>
        </section>
        <div class="bullets-block row">
            <div class="col-sm">
                <div class="item">
                    <img class="item-img" alt="" src="img/orig.svg">
                    Можно учиться из любой точки мира
                </div>
                <div class="item">
                    <img class="item-img" alt="" src="img/orig (1).svg">
                    После обучения помогаем трудоустроиться
                </div>
            </div>

            <div class="col-sm">
                <div class="item">
                    <img class="item-img" alt="" src="img/orig (2).svg">
                    CSS, HTML, JavaScript и другие важные навыки
                </div>
                <div class="item">
                    <img class="item-img" alt="" src="img/orig (3).svg">
                    5 работ в портфолио: сайты и веб-приложения
                </div>
            </div>
            <div class="col-sm">
                <div class="item">
                    <img class="item-img" alt="" src="img/orig (4).svg">
                    18 практических работ
                </div>
                <div class="item">
                    <img class="item-img" alt="" src="img/orig.svg">
                    Можно учиться из любой точки мира
                </div>
            </div>
        </div>

        
        <div id="prof" class="title">Что именно вы будете делать, когда станете веб-разработчиком</div>
        <div class="bullets-block row">
            <div class="col-sm">
                <div class="item">
                    <img class="item-img" alt="" src="img/orig (5).svg">
                    Уверенно писать код
                </div>
            </div>

            <div class="col-sm">
                <div class="item">
                    <img class="item-img" alt="" src="img/orig (5).svg">
                    Разрабатывать сайты
                </div>
            </div>
            <div class="col-sm">
                <div class="item">
                    <img class="item-img" alt="" src="img/orig (5).svg">
                    Работать над продуктом
                </div>
            </div>
            <div class="col-sm">
                <div class="item">
                    <img class="item-img" alt="" src="img/orig (5).svg">
                    Помогать бизнесу развиваться
                </div>
            </div>
        </div>

        <div class="title">Тысячи студентов уже освоили новую профессию&nbsp;— теперь ваша очередь</div>
        <div class="sm_title">Истории людей, которые уже занимаются любимым делом</div>
        <div class="row">
            <div class="col-sm">
                <div class="card" style="width: 100%">
                    <img src="img/2people.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Иван</h5>
                        <h6 class="card-subtitle mb-2 text-muted">29 лет</h6>
                        <p class="card-text">Всю жизнь мечтал писать код, но работал PR-менеджером. Пробовал разные
                            курсы, но все их бросал. А в 2019 году нашёл Тренажер и теперь работаю веб-разработчиком в
                            Bookmate.</p>

                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" style="width: 100%">
                    <img src="img/people.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Максим</h5>
                        <h6 class="card-subtitle mb-2 text-muted">30 лет</h6>
                        <p class="card-text">Я работал в продажах, затем в такси и не представлял, чем именно хочу
                            заниматься. Однажды случайно наткнулся на Тренажер. С тех пор уже вырос до middle
                            веб-разработчика в Loymax.</p>

                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" style="width: 100%">
                    <img src="img/1people.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Алена</h5>
                        <h6 class="card-subtitle mb-2 text-muted">27 лет</h6>
                        <p class="card-text">Пять лет я работала юристом, однако мне всегда были интересны технологии. И
                            я решила стать веб-разработчицей. Благодаря поддержке одногруппников и наставника в
                            Практикуме, получилось сдать все проекты, а затем устроиться в стартап Sayana.</p>

                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" style="width: 100%">
                    <img src="img/3people.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Миша</h5>
                        <h6 class="card-subtitle mb-2 text-muted">31 год</h6>
                        <p class="card-text">7 лет я работал поваром, но хотел расти в ином направлении. Мне был
                            интересен и дизайн, и программирование, поэтому я пошёл учиться на курс «Веб-разработчик».
                            Порой было непросто, но я справился и теперь работаю в компании Ottofeller.</p>

                    </div>
                </div>
            </div>
        </div>
        <div id="about" class="title">Тренажер — это насыщенная и проработанная среда</div>
        <div class="sm_title">Здесь трудно, но интересно. Много теории, ещё больше практики&nbsp;— всё направлено<br>на
            то,чтобы вы освоили профессию веб&nbsp;-&nbsp;разработчика.</div>
        <div class="teach row gy-3">
            <div class="col-md-6">
                <img style="width: 100%" src="img/1.png" alt="...">
            </div>
            <div class="col-md-5">
                <h5>Понятная теория</h5>
                <p>Обучение построено на примерах из жизни. Сложность нарастает постепенно.</p>
            </div>
        </div>
        <div class="teach row gy-3">
            <div class="col-md-5">
                <h5>Практика в тренажёре</h5>
                <p>Вы будете писать много кода, ошибаться, получать обратную связь и учиться на этих ошибках.</p>
            </div>
            <div class="col-md-6">
                <img style="width: 100%" src="img/2.png" alt="...">
            </div>
        </div>
        

        <div id="prog" class="title">Программа курса соответствует запросам рынка</div>
        <div class="sm_title">Мы развиваемся вместе с индустрией и постоянно обновляем материалы. Поэтому они актуальны
            всегда.</div>
        <div class="programm">
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            <h5>Основы HTML и CSS</h5>
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Познакомимся с основами вёрстки на примере небольшого лендинга.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            <h5>Основы JavaScript</h5>
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                        data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Познакомимся с JavaScript, с его помощью изменим вёрстку на
                            странице, напишем переключатель тем, сделаем интерактивную форму подписки и научимся
                            пользоваться консолью.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                            aria-controls="flush-collapseThree">
                            <h5>Структура HTML-документа</h5>
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                        aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Размечаем страницы блога, разбираемся из каких тегов она состоит и
                            за что эти теги отвечают.</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="title">Что вы получите после тренажера</div>
        <div class="bullets-block row">
            <div class="col-sm">
                <div class="item">
                    <img class="item-img" alt="" src="img/orig (6).svg">
                    Навыки, которые нужны работодателям
                </div>
            </div>

            <div class="col-sm">
                <div class="item">
                    <img class="item-img" alt="" src="img/orig (6).svg">
                    Сообщество веб-разработчиков
                </div>
            </div>
            <div class="col-sm">
                <div class="item">
                    <img class="item-img" alt="" src="img/orig (6).svg">
                    Новую профессию
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