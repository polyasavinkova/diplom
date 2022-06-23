<?php

use LDAP\Result;

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
    <style>
        .result{
            text-decoration: none;
            color: black;
        }
    </style>
    <title>CODE Academy</title>
</head>

<body>
    <!-- header -->
    <?php
    require_once 'components/header.php';
    require_once 'vendor/connectDB.php';
    $user = mysqli_query($link, "SELECT * FROM `users` WHERE `id`={$_SESSION['user']['id']}");
    while ($result = mysqli_fetch_array($user)) {
    ?>
    <!-- / header -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Зона контента -->
    <div style="margin-top: 50px;"  class="container">
    <h3>Профиль</h3>
    <h5>Мои данные</h5>
    <table class="table table-th-block">
    <tbody>
    <tr><td class="active">Имя</td><td><?=$result['fio']?></td></tr>
    <tr><td class="active">Логин</td><td><?=$result['nickname']?></td></tr>
    <tr><td class="active">Email</td><td><?=$result['email']?></td></tr>
    </tbody>
    </table>
    <?php } ?>

    <table class="table table-th-block">
        <h5>Мои тесты</h5>

    <tbody>
    <tr>
        <?php
        $tests =  mysqli_query($link, "SELECT * FROM `result` WHERE `id_user`={$_SESSION['user']['id']}");
    
    while($result= mysqli_fetch_array($tests)){
    ?>
    <td class="active">Упражнение <?=$result['id_test']?>
    <br>
    <?php

if($result['status']==1){
  
    echo "<a class='result' style='color:#11bf3f'  href='tasks/trainer".$result['id_test'].".php'>Пройден</a>";
}
else{
    echo "<a class='result' style='color:red'  href='tasks/trainer".$result['id_test'].".php'>Не пройден</a>";
}

?>
    
<?php }?>
</tr>
    </tbody>
    </table>
    </div>
</body>

</html>