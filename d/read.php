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
    }
    img{
      width: 150px;
      height: 150px;
    }
    .text{
      overflow: scroll;
      height: 250px;
    }

    </style>
  </head>
  <body>
    <div class="container">
        <h1>PHP CRUD Grid</h1>
    <a href="show.php" class="btn btn-default">Back</a>
        <div class="row">

      <?php
      include 'config.php';
      $newquer = $connect -> select("crudoop2");
  while ($row = mysqli_fetch_assoc($newquer)) {   
    


    
  
      ?>

           <?php
            $target = "../images";
            // foreach ($row as $key => $value) {  
            ?>
           <div class="col-md-5">
           <img src ="../images/<?=$row['src']?>">
           </div>
            <div class="col-md-5 text">
              <?=$row['text']?>
            </div>
      <?php   
    // } 


       }
      
    ?>
  </div>
</div>
  </body>
</html>
