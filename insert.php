<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'proect_ivan');
$query = mysqli_query($connect, "INSERT INTO posts (theme, text, user_id, img) VALUES ('" . $_POST['theme'] . "', '" . $_POST['text'] . "', '" . $_POST[id] . "', '" . $_FILES['img']['name'] . "')");
move_uploaded_file($_FILES['img']['tmp_name'], 'images/' . $_FILES['img']['name']);
header("Location: http://BAHR/admin.php?id=" . $_POST[id]);
 ?>
