<?php $con = mysqli_connect('127.0.0.1', 'root', '', 'proect_ivan');
$query = mysqli_query($con, "DELETE FROM posts WHERE id='" . $_GET['id'] . "'" );
header("Location: http://BAHR/admin.php?id=" . $_GET[idd]);
 ?>