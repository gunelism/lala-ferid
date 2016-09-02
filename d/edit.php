<?php
if (isset($_POST['gonder'])) {

  include 'config.php';
  $id=$_POST['id'];
  $text=$_POST['text'];
  // $src=$_FILES['img']['name'];

 $target_dir = "../images/";
  $target_file = date('dmYgis') . basename($_FILES['img']['name']);
  // $target_type = pathinfo($target_file , PATHINFO_EXTENSION);
  move_uploaded_file($_FILES['img']['tmp_name'], $target_dir . $target_file);

  // var_dump($_FILES['img']['name']);
  
 $connect->update("crudoop2", "$text", "$target_file", "$id");
  header('Location:show.php');


}
 ?>
