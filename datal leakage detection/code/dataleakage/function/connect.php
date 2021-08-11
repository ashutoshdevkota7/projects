<?php 
function connect(){
  $server="localhost";
  $user="root";
  $password="";
  $database="dataleakage";
  $conn=mysqli_connect($server,$user,$password,$database);
  if($conn){
  	return $conn;
  }
  else{
  	echo "connection error:";
  }
}
 ?>
