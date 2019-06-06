<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<style type="text/css">
	button{
		margin: 3px;
	}

	</style>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<?php $connect = mysqli_connect('127.0.0.1', 'root', '', 'proect_ivan');
	$query1 = mysqli_query($connect, "SELECT * FROM users INNER JOIN posts ON posts.user_id = users.id");
	$query2 = mysqli_query($connect, "SELECT * FROM users WHERE id = '" . $_GET['id'] . "' ");
	$logo1 = $query2->fetch_assoc();
	?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">ALLNEWS</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="login.php">Страница авторизации <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
<?php echo 'Добро пожаловать ' . $logo1['name'] ?>
	<?php for($i = 0; $i < $query1->num_rows; $i++) { ?>
	<div>
		<div>
			<?php $logo = $query1->fetch_assoc();?>
			<?php  echo '<img src="images/' . $logo['img'] . ' ">'; ?>
		</div>
		<div>
			<?php  echo '<h5>' . $logo['theme'] . '</h5>'; ?>
		</div>
		<div>
			<?php  echo '<h5>' . $logo['text'] . '</h5>'; ?>
		</div>
		<div>

		</div>
	</div>	
	<?php } ?>

</body>
</html>
