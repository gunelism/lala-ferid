<?php
if (isset($_POST['gonder'])) {

  include 'config.php';
  // $id=$_POST['id'];
  // $title=$_POST['title'];
  // $text=$_POST['text'];


  
 $connect->update("crudoop2", $_POST['text'], $_FILES['src'], $_POST['id']);
  header('Location:show.php');


}
 ?>
