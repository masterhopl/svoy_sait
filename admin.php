<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
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
  <a class="navbar-brand">ALLNEWS</a>
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
<form method="POST" enctype="multipart/form-data" action="insert.php">
			<button>
				добавить пост
			</button>
			<input placeholder="заголовок" name="theme">
			<input placeholder="текcт" name="text">
			<input type="file" name="img" placeholder="картинка">
			<?php echo '<input type="hidden" name="id" value="' . $logo1['id'] . '"> '; ?>
</form>
<div>
	<?php echo 'Добро пожаловать ' . $logo1['name'] ?>
</div>

	<?php for($i = 0; $i < $query1->num_rows; $i++) { ?>
	



<div class="row">
    <div class="col-6 mx-auto">
     	<div>
     		<div>
				<?php $logo = $query1->fetch_assoc(); ?>
			</div>
			<div>
				<?php  echo '<img class="w-100" src="images/' . $logo['img'] . ' ">'; ?>
			</div>
			<div>
				<?php  echo '<h1 class="text-center">' . $logo['theme'] . '</h5>'; ?>
			</div>
			<div>
				<?php  echo '<p class="text-center">' . $logo['text'] . '</p>'; ?>
			</div>
			
			<form action="delete.php" method="GET">
				<button class="btn btn-danger">удалить</button>
				<?php echo '<input name="id" type="hidden" value="' . $logo['id'] . '">'; ?>
				<?php echo '<input name="idd" type="hidden" value="' . $_GET['id'] . '">'; ?>

			</form>
			<form action="update.php" method="POST">
				<button class="btn btn-warning">редактировать</button>
				<?php echo '<input type="hidden" name="id" value="' . $logo['id'] . '"">'; ?>
				<?php echo '<input name="text" value="' . $logo['text'] . '" style="display: none">'; ?>
				<?php echo '<input type="hidden" name="theme" value="'. $logo['theme'] .'">'; ?> 
			</form>
		</div>

    </div>
</div>





		
		
	
	<?php } ?>

</body>
</html>
