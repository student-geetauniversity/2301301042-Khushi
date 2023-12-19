<?php
include("../config/config.php");
include("header.php");

$title='';
$password='';
$email_id='';
if(isset($_GET['id']) && $_GET['id']>0){
//edit
$result = $conn->query("select * from employee where id=".$_GET['id']);
if($result->num_rows>0){
$row = $result->fetch_assoc();
print_r($row);
$title=$row['name'];
$password=$row['password'];
$email_id=$row['email_id'];

}
}
?>
<h2>Employee Manage</h2>

<form method='POST'action='callback/employee.php'enctype="multipart/form-date">
    <input type='text'name='name' value="<?php echo $title;?>"required>
    <input type='email_id'name='email_id'value="<?php echo $email_id;?>">
    <input type='password'name='password' value="<?php echo $password;?>">
    <input type='submit'>
</form>
<?php
include("footer.php");
?>