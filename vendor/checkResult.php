<?php 
session_start();
require_once 'connectDB.php';
$user= $_SESSION['user']['id'];
$id= $_POST['id'];
mysqli_query($link, "UPDATE `result` SET `status`='1' WHERE `id_user`='{$_SESSION['user']['id']}' AND `id_test`='{$_POST['id']}'")





?>