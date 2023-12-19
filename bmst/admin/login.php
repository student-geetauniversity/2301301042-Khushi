<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .sidebar{
            width: 20%;
            height: 100%;
            background-color: rgb(5,68,104);
            position: fixed;
            top: 0;
            left: 0;
            border-right: 2px solid black;
        
        }
        .sidebar ul{
            list-style: none;
            padding: 0;
            margin: 30px;
        }
        .sidebar ul li{
            padding: 10px;
            border-bottom: 5px solid black;
            font-weight: 700;
        }
        .sidebar ul li a{
            color: white;
            font: optional;
            text-decoration: none;
        }
        .sidebar ul li a:hover{
            color: blue;
        }
        .sidebar h1{
            text-align: center;
            padding: 10px;
            margin: 0;
            color: blue;
            border-bottom: 2px blue;
        }
        .main{
            font-size:40px;
            text-align:center;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <h1>Admin Page</h1>
        <ul>
        
            <li><a href="dashboard.php">Dashboard </a></li>
            <li><a href="category.php">Category </a></li>
            <li><a href="book.php">book </a></li>
            <li><a href="book_manage.php">manage book </a></li>
            <li><a href="role.php">role </a></li>
            <li><a href="manage_role.php">manage role </a></li>
            <li><a href="login.php">login  </a></li>

        </ul>
    </div>
    <div class="main">
     <h1>WELCOME!</h1>

    </div>


</body>
</html>
