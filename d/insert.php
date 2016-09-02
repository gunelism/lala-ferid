<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form  action="" method="post" enctype="multipart/form-data">
      <!-- <input type="text" name="title" value=""> -->
      <textarea name="word"></textarea>
      <input type="file" name="img">
      <input type="submit" name="name" value="submit">
    </form>
  </body>
</html>
<?php
include 'config.php';
// $a=new Database("localhost","root","","xeber");
// if (isset($_POST['name'])) {
// if (  $a->insert('xeber',$_POST['title'],$_POST['text'])) {
//     header('Location:show.php');
// }
// else {
//   echo "error";
// }
// }

if (isset($_POST['name'])) { 
  $target_dir = "../images/";
  $target_file = date('dmYgis') . basename($_FILES['img']['name']);
  $target_type = pathinfo($target_file , PATHINFO_EXTENSION);
  move_uploaded_file($_FILES['img']['tmp_name'], $target_dir . $target_file);
 // echo $target_file;
  if ($connect->insert("crudoop2", $_POST['word'], $target_file )) {
    header('Location:show.php');
  }else{
    echo "error";
  }
}
 ?>
