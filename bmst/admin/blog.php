<?php
    include("../config/config.php");
    include("header.php");
    $message='';
    if(isset($_SESSION['status']) && $_SESSION['status']!=''){
        $message= '<p>'.$_SESSION['status'].'</p>';
        unset($_SESSION['status']);
    }
    $roleHtml='';
    $result = $conn->query("select * from role");
//    print_r($result);
//     die('fgdffhthtrht'); 
    if($result->num_rows > 0){
       // ech0 $result->num_rows;
       // print_r($finalResult);
       while($row =$result->fetch_assoc()){

        $id = $row['id'];
        $roleHtml .= '
        <tr>
        <td>'.$row['id'].'</td>
        <td>'.$row['name'].'</td>
        <td>'.$row['description'].'</td>
        <td><a href="blog_manage.php?id='.$id.'">Edit</a>/<button>Delete</button></td>
</tr>';
       }
    }
?>
<h2>blog</h2>
<a href="blog_manage.php">Add New blog</a>
<table border="1" style="width:100%;">
    <thead>
        <tr>
            <th>S.no</th>
            <th>Title</th>
            <th>email</th>
            <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php
        echo $roleHtml;
        ?>
        <!-- <tr>
            <td>1</td>
           <td>Admin</td>
            <td>ffd@gmail.com</td>
            <td><button>Edit</button>/<button>Delete</button></td>
     </tr> -->
    </tbody>
    </table>
<?php
include("footer.php");
?>