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
                        style="margin-right: 15px;">Выйти</button>
                    <button onclick="window.location.href='reg.html'" type="button" class="btn btn-dark">Админ
                        панель</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- Зона контента -->
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Логин пользователя</th>
                    <th scope="col">Пароль</th>
                    <th scope="col">Действие</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Иван</td>
                    <td>kjsABDswu</td>
                    <td>
                        <a href="vendor/AdminUserAction.php?status=0&id=<?=$post['id'] ?>" role="button"
                            class="btn btn-danger">Заблокировать</a>
                        <a href="vendor/AdminUserAction.php?status=1&id=<?=$post['id'] ?>" role="button"
                            class="btn btn-success">Разблокировать</a>
                    </td>
                </tr>
                </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Ксения</td>
                    <td>wsendgUHbedivb</td>
                    <td>
                        <a href="vendor/AdminUserAction.php?status=0&id=<?=$post['id'] ?>" role="button"
                            class="btn btn-danger">Заблокировать</a>
                        <a href="vendor/AdminUserAction.php?status=1&id=<?=$post['id'] ?>" role="button"
                            class="btn btn-success">Разблокировать</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Руслан</td>
                    <td>zdsfn54sfbr8</td>
                    <td>
                        <a href="vendor/AdminUserAction.php?status=0&id=<?=$post['id'] ?>" role="button"
                            class="btn btn-danger">Заблокировать</a>
                        <a href="vendor/AdminUserAction.php?status=1&id=<?=$post['id'] ?>" role="button"
                            class="btn btn-success">Разблокировать</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">4</th>
                    <td>Юрий</td>
                    <td>SDBrHVUH4d5fb</td>
                    <td>
                        <a href="vendor/AdminUserAction.php?status=0&id=<?=$post['id'] ?>" role="button"
                            class="btn btn-danger">Заблокировать</a>
                        <a href="vendor/AdminUserAction.php?status=1&id=<?=$post['id'] ?>" role="button"
                            class="btn btn-success">Разблокировать</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">5</th>
                    <td>Константин</td>
                    <td>SFRNnsrfhbb4</td>
                    <td>
                        <a href="vendor/AdminUserAction.php?status=0&id=<?=$post['id'] ?>" role="button"
                            class="btn btn-danger">Заблокировать</a>
                        <a href="vendor/AdminUserAction.php?status=1&id=<?=$post['id'] ?>" role="button"
                            class="btn btn-success">Разблокировать</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">6</th>
                    <td>Иван</td>
                    <td>kjsABDswu</td>
                    <td>
                        <a href="vendor/AdminUserAction.php?status=0&id=<?=$post['id'] ?>" role="button"
                            class="btn btn-danger">Заблокировать</a>
                        <a href="vendor/AdminUserAction.php?status=1&id=<?=$post['id'] ?>" role="button"
                            class="btn btn-success">Разблокировать</a>
                    </td>
                </tr>
                </td>
                </tr>
                <tr>
                    <th scope="row">7</th>
                    <td>Ксения</td>
                    <td>wsendgUHbedivb</td>
                    <td>
                        <a href="vendor/AdminUserAction.php?status=0&id=<?=$post['id'] ?>" role="button"
                            class="btn btn-danger">Заблокировать</a>
                        <a href="vendor/AdminUserAction.php?status=1&id=<?=$post['id'] ?>" role="button"
                            class="btn btn-success">Разблокировать</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">8</th>
                    <td>Руслан</td>
                    <td>zdsfn54sfbr8</td>
                    <td>
                        <a href="vendor/AdminUserAction.php?status=0&id=<?=$post['id'] ?>" role="button"
                            class="btn btn-danger">Заблокировать</a>
                        <a href="vendor/AdminUserAction.php?status=1&id=<?=$post['id'] ?>" role="button"
                            class="btn btn-success">Разблокировать</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">9</th>
                    <td>Юрий</td>
                    <td>SDBrHVUH4d5fb</td>
                    <td>
                        <a href="vendor/AdminUserAction.php?status=0&id=<?=$post['id'] ?>" role="button"
                            class="btn btn-danger">Заблокировать</a>
                        <a href="vendor/AdminUserAction.php?status=1&id=<?=$post['id'] ?>" role="button"
                            class="btn btn-success">Разблокировать</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">10</th>
                    <td>Константин</td>
                    <td>SFRNnsrfhbb4</td>
                    <td>
                        <a href="vendor/AdminUserAction.php?status=0&id=<?=$post['id'] ?>" role="button"
                            class="btn btn-danger">Заблокировать</a>
                        <a href="vendor/AdminUserAction.php?status=1&id=<?=$post['id'] ?>" role="button"
                            class="btn btn-success">Разблокировать</a>
                    </td>
            </tbody>
        </table>
    </div>
</body>

</html>