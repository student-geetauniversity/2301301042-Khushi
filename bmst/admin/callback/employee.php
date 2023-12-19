<?php


include("../../config/config.php");

if(isset($_POST['title']) && trim($_POST['title'])!=''){
    //insert
   // echo 'here';  
   $title = $_POST['title'];
   $password = $_POST['password'];
   $email_id = $_POST['email_id'];
   
   $query= "INSERT INTO `employee` ( `name`, `email_id`, `password`) VALUES ('$title','$email_id','$password')";
   //$checkResult = $conn->query($query);

    //if($checkResult){
        $_SESSION['status']='success';
        header("location:../employee.php");
        
    }
    else{
        $_SESSION['status']='fail';
        header("location:../employee.php");
    
    }
//update


//delete


?>