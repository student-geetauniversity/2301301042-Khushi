<?php
include("../config/config.php");
include("header.php");

if(isset($_SESSION['status']) && $_SESSION['status']!=''){
    $message= '<p>'.$_SESSION['status'].'</p>';
    unset($_SESSION['status']);
}
 $employeeHtml='';
 $result=$conn->query("select*from employee");
 if($result->num_rows>0){

    while($row = $result->fetch_assoc()){
        $id = $row['id'];
        $employeeHtml.='
        <tr>   
        <td>'.$row['id'].'</td>
        <td>'.$row['name'].'</td>
        <td>'.$row['description'].'</td>
        <td><a href="employee_manage.php?id='.$id.'"> Edit</a>/<button>Delete</button></td>
       </tr>' ;
    }
 }
?>
<h2>Employee</h2>
<a href="employee_manage.php">Add New Employee</a>
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
        <?php echo $employeeHtml
        ?>
</tbody> 
<?php
include("footer.php");
?>