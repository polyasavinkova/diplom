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
    <link rel="icon" type="image" href="img/favicon.svg"/>
    <title>CODE Academy</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Меню -->
    <nav style="margin-left: 40px; margin-right: 40px;" class="navbar navbar-expand-lg navbar-light bg-transparent">
        <div class="container-fluid">
            <a style="padding-right:20px;" class="navbar-brand" href="index.html">CODE Academy</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">О профессии</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Как учим</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Трудоустройство</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Программа</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <button onclick="window.location.href='aut.html'" type="button" class="btn btn-outline-dark"
                        style="margin-right: 15px;">Войти</button>
                    <button onclick="window.location.href='reg.html'" type="button"
                        class="btn btn-dark">Зарегистрироваться</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Зона контента -->
    <div class="container">
        

        <div class="title">Начать просто. Попробуйте</div>
        <div class="sm_title">Мы выбрали одно направление — фронтенд, и сделали самые подробные тренажёры о веб-технологиях.</div>
        <div class="row">
            <div class="col-sm">
                <div class="card" style="width: 100%">
                    <div class="card-body">
                        <h5 class="card-title">Знакомство с веб-разработкой</h5>
                        <p class="card-text">На практике знакомимся с базовыми технологиями веб-разработки: HTML, CSS, JavaScript и PHP.</p>
                        <a href="corses.html" class="btn btn-primary">Начать</a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" style="width: 100%">
                    <div class="card-body">
                        <h5 class="card-title">Знакомство с HTML и CSS</h5>
                        <p class="card-text">Изучаем основы HTML и CSS. На практике разбираемся с разметкой и базовой стилизацией.</p>
                        <a href="corses.html" class="btn btn-primary">Начать</a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" style="width: 100%">
                    <div class="card-body">
                        <h5 class="card-title">Знакомство с JavaScript</h5>
                        <p class="card-text">Узнаем, как работает язык сценариев в браузере. А так же научимся оживлять интерфейсы.</p>
                        <a href="corses.html" class="btn btn-primary">Начать</a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="card" style="width: 100%">
                    <div class="card-body">
                        <h5 class="card-title">Знакомство с PHP</h5>
                        <p class="card-text">Добавим скриптовый язык общего назначения в разметку, поработаем с веб-сценариями, данными и адресом на практике.</p>
                        <a href="corses.html" class="btn btn-primary">Начать</a>
                    </div>
                </div>
            </div>
          
            
        </div>
        <div class="title">Тренажер — это насыщенная и проработанная среда</div>
        <div class="sm_title">Здесь трудно, но интересно. Много теории, ещё больше практики&nbsp;— всё направлено<br>на то,чтобы вы освоили профессию веб&nbsp;-&nbsp;разработчика.</div>
        <div class="teach row gy-3">
            <div class="col-md-6">
                <img style="width: 100%" src="img/optimize_1.png" alt="...">
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
                <img style="width: 100%" src="img/optimize_1.png" alt="...">
            </div>
        </div>
        <div class="teach row gy-3">
            <div class="col-md-6">
                <img style="width: 100%" src="img/optimize_1.png" alt="...">
            </div>
            <div class="col-md-5">
                <h5>Учебные проекты</h5>
                <p>Вам предстоит делать сайты и веб-приложения. Эти задачи точно повторяют реальную работу веб-разработчиков. Из таких проектов сложится ваше портфолио.</p>
            </div>
        </div>

        <div class="title">Программа курса соответствует запросам рынка</div>
        <div class="sm_title">Мы развиваемся вместе с индустрией и постоянно обновляем материалы. Поэтому они актуальны всегда.</div>
        <a href="img/Omega Premium Active.pdf" download="programm">Скачать полную программу в PDF</a>
        <div class="programm">
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  <h5>Основы HTML и CSS</h5>
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Познакомимся с основами вёрстки на примере небольшого лендинга.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  <h5>Основы JavaScript</h5>
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Познакомимся с JavaScript, с его помощью изменим вёрстку на странице, напишем переключатель тем, сделаем интерактивную форму подписки и научимся пользоваться консолью.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  <h5>Структура HTML-документа</h5>
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Размечаем страницы блога, разбираемся из каких тегов она состоит и за что эти теги отвечают.</div>
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
</body>

</html>