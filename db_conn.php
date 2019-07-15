<?php
  $conn = mysqli_connect('localhost', 'root', '', 'IBM');
  
  if(!$conn){
      exit('Database not connected'.mysqli_error($conn));
  }
  
  else{
     $select_db = mysqli_select_db($conn, 'IBM'); 
     
     if(!$select_db){
         exit('Database not selected'. mysqli_error($conn));
     }
  }
  
  
  
  
?>
