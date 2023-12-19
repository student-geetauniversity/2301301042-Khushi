<?php

   ini_set("display_errors",1);
   //session_start();
   $hostname="localhost";//127:0:0:1
   $username="root";
   $password="";
   $database="bmst";
   
   $conn = new mysqli( "localhost","root","","bmst");
   if($conn->connect_error){
   echo'failed';
   }else{
   echo'pass';
}

?>