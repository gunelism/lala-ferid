<?php
include 'config.php';
$id=$_GET['id'];
//   $a=new Database("localhost","root","","xeber");
//    $lala=$a->select("xeber","id=$id");
// $row=mysqli_fetch_assoc($lala);


// $newquery = $connect -> select("crudoop", "id = $tt");
// var_dump($newquery);
// $row = mysqli_fetch_assoc($newquery);
$newquery = $connect -> select("crudoop2","id = $id");

$row = mysqli_fetch_assoc($newquery)

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <style>
        input{
          display: block;
          padding: 10px 15px;
        }
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Update a Customer</h1>
      <div class="col-md-4 col-md-offset-3">

        <form action="edit.php" method="post" enctype="multipart/form-data">
          <input class="form-control"  type="text" name="id" value="<?= $id?>" >
          <label class="form-control-label">text</label>
          <input type="text" name="text" value=" <?= $row['text'] ?>">
            <label class="form-control-label">img</label>
          <input class="form-control"  type="file" name="img">

          <input type="submit" name="gonder" value="Update"  class="btn btn-success">
            <input type="submit" name="back" value="Back"  class="btn btn-default">
        </form>
      </div>
  </div>

  </body>
</html>
