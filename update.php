<meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

<div class="col-3 mx-auto">
<form method="POST" action="update1.php">
   <div class="form-group">
    <label for="exampleInputPassword1">Тема</label>
    <?php echo '<input name="theme"  value="'. $_POST['theme'] .'" class="shadow-sm p-3 bg-white rounded form-control" id="exampleInputPassword1"' ?>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Текст</label>
    <?php echo '<input name="text"  value="'. $_POST['text'] .'" class="shadow-sm p-3 bg-white rounded form-control" id="exampleInputPassword1"' ?>
  </div>
 <?php echo '<input type="hidden" name="id" value="'. $_POST['id'] .'">'; ?> 
  <button type="submit" class="btn btn-primary mt-3">Редактировать</button>
   
</form>
</div>