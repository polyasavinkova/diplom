<?php
session_start();
if($_SESSION['user']['status']!=1){
  header('Location:/index.php');
}
else{
  require 'vendor/connectDB.php';
  $getPost = mysqli_query($link, " SELECT * FROM `users` WHERE `id`");
}


?>


<!DOCTYPE html>
<html lang="ru">

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
    <title>Задание 5</title>

<body>

  <!-- header -->
  <?php
  require_once 'components/header.php';
  ?>
  <!-- / header -->

  <div class="container pt-5">
    <h2 class="mb-4">Список пользователей</h2>
      

        <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Имя</th>
            <th scope="col">Логин</th>
            <th scope="col">Почта</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($post = mysqli_fetch_assoc($getPost)) { ?>
          <tr>
            <th scope="row"><?= $post['id'] ?></th>
            <td><?= $post['fio'] ?></td>
            <td><?= $post['nickname'] ?></td>
            <td><?= $post['email'] ?></td>
          </tr>
        </tbody>
         <?php } ?>
      </table>
      
  
     
      
 
    
  </div>

</body>

</html>