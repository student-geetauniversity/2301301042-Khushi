
<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Role</title>
</head>
<body>
    <div>
    <div >
        <main>
    <h2>Role</h2> </ul>
     </div>
     <div class="save"  style="text-align:right;">
            <button class="save" style="background-color:green;">
               Add New Role
            </button>
        </div>
     <div class="two">
     
        <main>
            <h>Show 
        <select>
            <option value ="50">50</option>
            <option value ="51">51</option>
            <option value ="52">52</option>
            <option value ="53">53</option>
            <option value ="54">54</option>
            <option value ="55">55</option>
        </select> entries
       </h>
    
    <div class="three" style="text-align:right;">
<h> Search:
<input type ="text" >
</h>
    </div>
</div>
<br>
<div class="four">
    <textarea rows="1" cols="90" name="description" id="description">Name</textarea>
    <textarea rows="1" cols="90" name="description" id="description">Admin</textarea>
</div>
</div>
     
     
     
</body>
</html>-->
<?php
include("../config/config.php");
include("header.php");

if(isset($_SESSION['status']) && $_SESSION['status']!=''){
    $message= '<p>'.$_SESSION['status'].'</p>';
    unset($_SESSION['status']);
}

$roleHtml='';
$result = $conn->query("select * from role");
if($result->num_rows>0){
   
    while($row = $result->fetch_assoc()){
        $id = $row['id'];
        $roleHtml.='
        <tr>   
        <td>'.$row['id'].'</td>
        <td>'.$row['name'].'</td>
        <td>'.$row['description'].'</td>
        <td><a href="manage_role.php?id='.$id.'"> Edit</a>/<button>Delete</button></td>
       </tr>' ;
    }
       // echo $result->num_rows;
      // print_r($finalResult);
}

?>
<h2>Role</h2>
<a href="manage_role.php">Add New Role</a>
<table border="1">
    <thesd>
        <tr>   
        <th>S.no</th>
        <th>Title</th>
        <th>Description</th>
        <th>Action</th>
       </tr>   
</thesd>
<tbody>
        
<?php
 echo $roleHtml;
 ?>
</tbody> 
<?php
include("footer.php");
?> 