<!DOCTYPE html>
<html>
<head>
  <style type="text/css">

  </style>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<title>fas</title> 
</head>
<body>
<div class="col-4 mx-auto">
  <h1 class="display-1">ALLNEWS</h1>
  <form method="POST" action="reg2.php">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input name="email" type="email" class="shadow-sm p-3 bg-white rounded form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Электронная почта">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="password" type="password" class="shadow-sm p-3 bg-white rounded form-control" id="exampleInputPassword1" placeholder="Пароль">
  </div>
   <div class="form-group">
    <label for="exampleInputPassword1">Login</label>
    <input name="login" class="shadow-sm p-3 bg-white rounded form-control" id="exampleInputPassword1" placeholder="Логин">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Name</label>
    <input name="name" class="shadow-sm p-3 bg-white rounded form-control" id="exampleInputPassword1" placeholder="Имя">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Surname</label>
    <input name="surname" class="shadow-sm p-3 bg-white rounded form-control" id="exampleInputPassword1" placeholder="Фамилия">
  </div>
  <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
   
  </form>
  <a href="login.php" class="text-primary">Уже зарегистрированы?</a>

</div>
</body>
</html>