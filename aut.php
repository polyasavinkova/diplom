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

<!-- header -->
<?php
  require_once 'components/header.php';
?>
<!-- / header -->

<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <H1 style="margin-top: 100px; text-align: center ;">Вход</H1>
            <form action="vendor/loginAction.php" method="post">
                <div class="Form__login" style="margin-top: 15px;" >
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Введите email пользователя">
                    <small class="invalid-feedback">Сообщение об ошибке</small>
                </div>
                <div class="form-group" style="margin-top: 15px;" >
                    <label>Пароль</label>
                    <input type="password" name="password" class="form-control" placeholder="Введите пароль">
                    <small class="invalid-feedback">Сообщение об ошибке</small>
                </div>
                <button style="margin-top: 30px; margin-bottom: 10px;" type="submit" name="loginsubmit" class="btn btn-primary">Войти</button><br>
                <small id="emailHelp" class="form-text text-muted">Еще нет аккаунта? <a href="reg.php" class="alert-link">Зарегистрируйтесь</a></small>
            </form>
        </div>
        <div class="col-3"></div>
    </div>
</div>