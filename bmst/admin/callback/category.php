<?php

include("../../config/config.php");

if(isset($_POST['title']) && trim($_POST['title'])!=''){
    //insert
   // echo 'here';  
   $title = $_POST['title'];
   $description=$_POST('description');
    $query = "INSERT INTO `category` ( `name`, `status`, `created_by`, `created_date`, `updated_by`, `updated_date`, `image`) VALUES ('98', 'fuyghj', 'jhgg', '1', '87', current_timestamp(), '576', current_timestamp(), 'jjhvjv')";
    $checkResult = $conn->query($query);

    if($checkResult){
        $_SESSION['status']='success';
        header("location:../category.php");
        
    }
    else{
        $_SESSION['status']='fail';
        header("location:../category.php");
        
    }
}
//update
//delete

?>