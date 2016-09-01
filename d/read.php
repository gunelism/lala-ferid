<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .create{
      background: green;
      border-radius:5px;
      color:white;
      padding: 10px 15px;
    }
    .update{
      background: green;
    color: white;
    background: green;
      color: white;
      padding: 5px 10px;
      border-radius: 5px;

    }
    .col-md-5 {
      margin:5px;
      border:1px solid black;
    }

    </style>
  </head>
  <body>
    <div class="container">
        <h1>PHP CRUD Grid</h1>
    <a href="show.php" class="btn btn-default">Back</a>
    <form  action="search.php" method="post">
      <input type="search" name="search" placeholder="search">
    </form>
        <div class="row">

      <?php
      include 'config.php';
      // $a=new Database("localhost","root","","xeber");
      //  $lala=$a->select('xeber');
      // if ($lala) {
      //    while($row=mysqli_fetch_assoc($lala)){  
      $newquer = $connect -> select("crudoop2");
  while ($row = mysqli_fetch_assoc($newquer)) {   
    


    
  
      ?>

           <?php foreach ($row as $key => $value) {  ?>
           <div class="col-md-5"><?=$row['title']?></div>
            <div class="col-md-5"><?=$row['text']?></div>
      <?php   } 


       }
      
    ?>
  </div>
</div>
  </body>
</html>
