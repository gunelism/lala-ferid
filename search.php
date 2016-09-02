<?php 
	include 'd/config.php';
	if (isset($_POST['submit'])) {
		$searchText = $_POST['search'];
		$sql = "SELECT text FROM crudoop2  like '%$searchText%'";
      $query = mysqli_query($connect->conn,$sql);
      header('Location:single.php');
	}
 ?>