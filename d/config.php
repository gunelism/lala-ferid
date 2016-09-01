<?php

class Database
  {   public $host;
      public $username;
      public  $pass;
      public $dbName;
      public $conn;
      
 function __construct($host,$username,$pass,$dbName)
      {     $this->host=$host;
            $this->username=$username;
            $this->pass=$pass;
            $this->dbName=$dbName;

     $this->conn=mysqli_connect($this->host,$this->username,$this->pass,$this->dbName);
           if ($this->conn) {
             echo "yes";
           }
           else {
             echo "no";
           }
        }

      public  function select ($tname, $where = null){
          $sql="SELECT * FROM $tname";
          if ($where != null) {
        				$sql .= ' WHERE '.$where;
        			}
          $query=mysqli_query($this->conn,$sql);
          return $query;
        }

        public function insert($tname,$text,$src){
          $sql="INSERT INTO $tname(`text`,`src`) VALUES ('$text' , '$src')";
          $query=mysqli_query($this->conn,$sql);
          return $query;
        }
        public function delete($tname,$id){
          $sql="DELETE FROM $tname WHERE id=$id";
          $query=mysqli_query($this->conn,$sql);
          return $query;
        }
        public function update($tname,$text,$src, $id=null){

            $sql="UPDATE $tname SET `text`='$text', `src`='$src' WHERE id=$id";


          $query=mysqli_query($this->conn,$sql);
          return $query;
        }
      }

$connect = new Database("localhost","root","","crudoop2");

 ?>
