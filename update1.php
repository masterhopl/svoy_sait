<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'proect_ivan');
mysqli_query($connect, "UPDATE posts SET text = '" . $_POST['text'] . "', theme = '" . $_POST['theme'] . "' WHERE id='". $_POST['id'] ."'");
header('Location: http://BAHR/admin.php');
?>