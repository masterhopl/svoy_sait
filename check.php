<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'proect_ivan');
$query = mysqli_query($connect, "SELECT * FROM users WHERE login = '".$_POST['login']."' AND password = '".$_POST['password']."'");
$user = $query->fetch_assoc();
		if ($query->num_rows == 0) {
			header("Location: http://BAHR/login.php");
		}else{
			if ($_POST['login'] == 'vanya_admin' && $_POST['password'] == 131313) {
				header("Location: http://BAHR/admin.php?id=" . $user['id'] . "");
			}
			else {
				header("Location: http://BAHR/posts.php?id=" . $user['id'] . "");
			}
		}
?>

