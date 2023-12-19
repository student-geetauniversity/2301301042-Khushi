<?php

include("../../config/config.php");

if(isset($_POST['title']) && trim($_POST['title'])!=''){
    //insert
   // echo 'here';  
   $title = $_POST['title'];
   $description = $_POST['description'];
   //$query = "INSERT INTO 'role'('name','description') VALUES ('$title','$description')";
   $query="INSERT INTO `role` (`name`, `description`) VALUES ('$title', '$description')";
   $checkResult = $conn->query($query);

    if($checkResult){
        $_SESSION['status']='success';
        header("location:../role.php");
        
    }
    else{
        $_SESSION['status']='fail';
       // header("location:../role.php");
    
    }
}
//update


//delete

?>