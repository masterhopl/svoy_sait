<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'proect_ivan');
$query = mysqli_query($connect, "INSERT INTO users (email, name, surname, login, password) VALUES ('". $_POST['email'] ."', '". $_POST['name'] ."', '". $_POST['surname'] ."', '". $_POST['login'] ."', '" . $_POST['password'] . "')");
header('Location: http://BAHR/login.php'); ?>