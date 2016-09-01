<?php

include 'config.php';


		if ($connect->delete("crudoop2", $_GET['id'])){
			header('Location:show.php');
		}else{
			echo "error";
		}


?>
