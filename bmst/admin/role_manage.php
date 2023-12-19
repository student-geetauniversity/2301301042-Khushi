
<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            margin: auto;
            margin-top: 50px;
            width: 500px;
            display:;
        }
        input{
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }
        .buttons{
            display: flex;
            justify-content: center;
        }
        button{
            padding: 10px;
            margin: 10px;
            width: 100px;
            border: 1px solid black;
            border-radius: 5px;
            color: white;
            font-weight: 700;
        }
        button[type="reset"]{
            background-color: red;
        }
        button[type="submit"]{
            background-color: green;
        }
    </style>
</head>
<body>
    <form action="">
        <label for="name">Role Name*</label><br>
        <input type="text" name="name" id="name" placeholder="Enter Role name"><br><br>
        <div class="buttons">
            <button type="reset">CANCEL</button><button type="submit">SAVE</button>
        </div>
    </form>
</body>
</html>-->
<?php
include("../config/config.php");
include("header.php");


$id='';
$title='';
$description='';
if(isset($_GET['id']) && $_GET['id']>0){
    $id=$_GET['id'];

    $a = $conn->query("select name,description from role where id=".$id);
    echo $a->num_rows;
    if($a->num_rows){
      $c = $a->fetch_assoc();
      $title=$c['name'];
      $description=$c['description'];
    }
}











//add
/*
$title='';
$description='';
if(isset($_GET['id']) && $_GET['id']>0){
//edit
$result = $conn->query("select * from role where id=".$_GET['id']);
if($result->num_rows>0){
$row = $result->fetch_assoc();
print_r($row);
$title=$row['name'];
$description=$row['description'];

}
}
*/

?>
<h2>Role Manage</h2>

<form method='POST'action='callback/role.php'enctype="multipart/form-date">
    <input type='text'name='title' value="<?php echo $title;  b?>"required>
    <textarea name='description'> <?php echo $description;?></textarea>
    
    <input type='submit'>
</form>
<?php
include("footer.php");
?>