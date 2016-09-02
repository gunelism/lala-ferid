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
             // echo "yes";
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

        public function select2($tname, $view =null, $time = null )
        {
           $sql = " SELECT * FROM $tname ";
          if ($time !=null){
            $sql2 .= " ORDER BY $time DESC LIMIT 5";
           $query2=mysqli_query($this->conn,$sql2);
            return $query2;
          }
          if ($view != null){
           $sql .= " ORDER BY $view DESC LIMIT 5";
           $query=mysqli_query($this->conn,$sql);
            return $query;
          }
        }

        public function insert($tname,$text,$src){
          $sql="INSERT INTO $tname(`text`, `src`) VALUES ('$text', '$src')";
          $query=mysqli_query($this->conn,$sql);
          return $query;
        }
        public function delete($tname,$id){
          $sql="DELETE FROM $tname WHERE id=$id";
          $query=mysqli_query($this->conn,$sql);
          return $query;
        }
        public function update($tname,$text,$src1,$view=null, $id=null){

            $sql="UPDATE $tname SET `text`='$text', `src`='$src1', `view`=$view WHERE id=$id";
          $query=mysqli_query($this->conn,$sql);
          return $query;
        }
        public function view($tname,$view,$id){

            $sql="UPDATE $tname SET `view`=$view  WHERE id=$id";
          $query=mysqli_query($this->conn,$sql);
          return $query;
            if ($query) {
              
            }else {
                
                echo "error";
                        }
        }
      }

$connect = new Database("localhost","root","","crudoop2");

 ?>
