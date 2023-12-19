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
            padding: 30px;
            border: 5px solid black;
            border-radius: 5px;
        }
        input{
            width: 90%;
            padding: 10px;
            margin-bottom: 10px;
        }
        textarea{
            width: 90%;
            padding: 10px;
            margin-bottom: 10px;
        }
        .buttons{
            display: flex;
            justify-content: center;
        }
        input[type="checkbox"]{
            width: 13px;
            height: 13px;
            margin: 0;
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
        <label for="name">Category Name*</label><br>
        <input type="text" name="name" id="name" placeholder="Enter Category name">
        <label for="description">Description</label><br>
        <textarea name="description" id="description" cols="30" rows="10" placeholder="Enter Description"></textarea>
        <label for="image">Image</label><br>
        <input type="file" name="image" id="image">
        <label for="status">Status</label>
        <input type="checkbox" name="status">
        <div class="buttons">
            <button type="reset">CANCEL</button><button type="submit">SAVE</button>
        </div>
    </form>
</body>
</html>-->

<?php

include("../config/config.php");
include("header.php");

if(isset($_SESSION['status']) && $_SESSION['status']!=''){
    $message= '<p>'.$_SESSION['status'].'</p>';
    unset($_SESSION['status']);
}
$categoryHtml='';
$result = $conn->query("select * from category");
if($result->num_rows>0){
   
    while($row = $result->fetch_assoc()){
        $id = $row['id'];
        $categoryHtml.='
        <tr>   
        <td>'.$row['id'].'</td>
        <td>'.$row['name'].'</td>
        <td>'.$row['description'].'</td>
        <td><a href="category_manage.php?id='.$id.'"> Edit</a>/<button>Delete</button></td>
       </tr>' ;
    }
       // echo $result->num_rows;
      // print_r($finalResult);
}

?>
<h2>Category</h2>
<a href="category_manage.php">Add New Category</a>
<table border="1">
    <thead>
        <tr>   
        <th>S.no</th>
        <th>Title</th>
        <th>Description</th>
        <th>Action</th>
       </tr>   
</thead>
<tbody>
        <?php 
          echo $categoryHtml;
          ?>
</tbody> 
<?php
include("footer.php");
?>