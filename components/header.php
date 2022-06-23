<?php
// Не авторизован
if(!$_SESSION['user']){?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<nav style="margin-left: 40px; margin-right: 40px;" class="navbar navbar-expand-lg navbar-light bg-transparent">
<?php
?>
    <div class="container-fluid">
        <a style="padding-right:20px;" class="navbar-brand" href="../index.php">CODE Academy</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../#prof">О профессии</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../#about ">Как учим</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../#prog">Программа</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../corses.php">Тренажеры</a>
                </li>
            </ul>
            <form class="d-flex">
                <a href="/aut.php" class="btn btn-outline-dark"
                    style="margin-right: 15px;">Войти</a>
                <a href='/reg.php'
                    class="btn btn-dark">Зарегистрироваться</a>
            </form>
        </div>
    </div>
</nav>
<?php }


else{?>
<!-- Авторизован -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<nav style="margin-left: 40px; margin-right: 40px;" class="navbar navbar-expand-lg navbar-light bg-transparent">
    <div class="container-fluid">
        <a style="padding-right:20px;" class="navbar-brand" href="../index.php">CODE Academy</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../#prof">О профессии</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../#about ">Как учим</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../#prog">Программа</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../corses.php">Тренажеры</a>
                </li>
                <?php session_start();if($_SESSION['user']['status']==1){ ?>
                <li class="nav-item">
                    <a class="nav-link" href="admin.php">Пользователи</a>
                </li>
            <?php } ?>
        </ul>
            <form class="d-flex">
                <a href="/exit.php" class="btn btn-outline-dark"
                    style="margin-right: 15px;">Выйти</a>
                <a href='/profile.php'
                    class="btn btn-dark">Профиль
                    <?php session_start(); if($_SESSION['user']){ echo $_SESSION['user']['login'];} ?></a>
            </form>
        </div>
    </div>
</nav>
<?php }
?>