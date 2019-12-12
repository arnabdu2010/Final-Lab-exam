<?php

   include('connection.php');
   error_reporting(0);
   ?>






<!DOCTYPE html>



<html>
<head>
   <title> Registration </title>
</head>
 <body>
   <fieldset> 
      <legend> Registration </legend>
	  <form action=" " method="$_GET">
       	  
	  Id:
	  <input type="number" name="number" value=""/><br><br>
	  Password:
	  <input type="password" name="password" value=""/><br><br>
	  Confirm Password:
	  <input type="password" name="password" value=""/><br><br>
	  Name:
	  <input type="text" name="name" value=""/><br><br>
	  Email:
	  <input type="text" name="email" value=""/><br><br>
	  <select id="type" name="type">
	     <option value="user">User</option>
		 <option value="Admin"> Admin </option>
		 </select>
		 
		 <input type="submit" name="submit" value="Register">
		 
	  
	  
	  
	  <?php
	     if($_GET['submit']){
		     $id =$_GET['Id'];
		     $pass =$_GET['Password'];
		     $pwd =$_GET['Confirm Password'];
			 
		     $na =$_GET['name'];
			 $em =$_GET['email'];
			 
			 if($id!=""&&$pass!=""&&$pwd!=""&&$na!=""&&$em!=""){
				 
				 $query ="Insert INTO REGISTRATION VALUES('$id','$pass','$pwd','$na','$em')";
				 $data =mysqli_query($conn,$query);
			 
			 if($data){
				 echo "connection okay";
				 
			 }
			 }
		 }
			else{
				echo "Connection not Okay";
			} 

	  ?>
	  </form>
	  </fieldset>
	  </body>
	  </html>
	  
	  