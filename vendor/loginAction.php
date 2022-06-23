<?php
session_start();
require "connectDB.php";
$username = $_POST['username'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];


if(isset($_POST['submit_reg'])){
$checklogin = mysqli_query($link,"SELECT `nickname` FROM `users`  WHERE `nickname` = '$login'");
$checkemail = mysqli_query($link,"SELECT `email` FROM `users`  WHERE `email` = '$email'");
if(mysqli_num_rows($checklogin)>0){
    $_SESSION['warning'] ="Пользователь с логином: ".$login ." уже существует!";
    header("Location:".$_SERVER["HTTP_REFERER"]);

}
else if(mysqli_num_rows($checkemail)>0){
    $_SESSION['warning'] =$email." уже используется, пожалуйста воспользуйтесь другим e-mail";
    header("Location:".$_SERVER["HTTP_REFERER"]);

}
else if($password !== $confirmpassword){
    $_SESSION['warning'] ="Пароли не совпадают!";
    header("Location:".$_SERVER["HTTP_REFERER"]);
}
else{
$adduser = mysqli_query($link,"INSERT INTO `users`( `fio`, `nickname`, `email`, `password`) VALUES ('$username','$login','$email','$password')");


 if($adduser){
    $lastid = mysqli_insert_id($link);
    mysqli_query($link,"INSERT INTO `result` (`id_user`,`id_test`,`status`) VALUES ('$lastid',1,0), ('$lastid',2,0), ('$lastid',3,0), ('$lastid',4,0),('$lastid',5,0) ");
    mkdir("../profile/".$login);
    $_SESSION['warning'] ="Пользователь успешно зарегистрирован!";
    exit("<meta http-equiv='refresh' content='0; url= ../aut.php'>");
 }   
}
}





// Авторизация
if(isset($_POST['loginsubmit'])){
    $getuser = mysqli_query($link,"SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'");
    // var_dump($getuser);
    if(mysqli_num_rows($getuser)>0){
        $user = mysqli_fetch_assoc($getuser);
        $_SESSION['user']=[
            'id'=>$user['id'],
            'fio'=>$user['fio'],
            'login'=>$user['nickname'],
            'email'=>$user['email'],
            'status'=>$user['status']
        ];
        header("Location:../index.php");
    }
    else{
        $_SESSION['warning'] = "Пользователь не найден!";
        header("Location:".$_SERVER["HTTP_REFERER"]);
       
    }
}



?>