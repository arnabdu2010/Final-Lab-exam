<?php

  $servername = "localhost";
  $username ="root";
  $password ="";
  $dbname = "lab";
  
  $conn =mysqli_connect($servername,$username,$password,$dbname);
  
  if($conn){
	  echo "connection ok";
  }
  else{
	  echo "connnection error";
  }
  

?>