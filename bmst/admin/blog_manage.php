<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a Book</title>
    <style>
        .title{
            border: 1px solid #cdcdcd;
            margin: -9px -8px;
            padding: 0px 0px;
             background-color: #cdcdcd;
        }
        h2{
       
            margin: 16px 6px;
            padding: 0px 0px;
        }
        .buttons{
            margin: 0px 0px;
            padding: 0px 0px;
        }
        .one{
            text-align: center;
            border: 1px solid #efefef;
            width: 7%;
            margin: 0px auto;
            margin-top: 40px;
            margin-bottom: 10px;
            border-radius: 10px;
            background-color: #efefef;

        }
         .text{
           display: block;
            text-align: center;
            width: 20%;
            margin: 0px auto;
            border-radius: 4px;
            font-size: 25px;
         }
         .b2{
            float: right;
            margin-right: 10px;
            padding: 5px 6px;
            border: 1px solid white;
            border-radius: 10px;
            background-color: rgb(38, 190, 38);
            color: white;
         }
         .details-title{
            margin-top: 70px;
         }
         .images{
           
         }
         .front-image{
            display: inline-block;
            margin: 50px;
            border: 1px dotted black;
            padding: 20px;
            margin-left: 100px;
         }
         .other-images{
            display: inline-block;
            float: right;
            margin: 50px;
            border: 1px dotted black;
            padding: 20px;
            margin-right: 100px;
         }
         .book-name{
            margin-left: 10px;
            display: inline-block;
            width: 10%;
         }
         .isbn-code{
           text-align: center;
           display: inline-block;
           width: 10%;
           margin: 0px 400px;

         }
         .inventory{
            float: right;
            margin-right: 10px;
         }
         .sdf_price{
            margin-top: 10px;
            margin-left: 10px;
            display: inline-block;
            width: 10%;
         }
         .mrp_price{
           text-align: center;
           display: inline-block;
           width: 10%;
           margin: 0px 400px;

         }
         .gst{
            float: right;
            margin-top: 10px;
            margin-right: 10px;
         }
         .hsn_code{
            margin-top: 10px;
            margin-left: 10px;
            display: inline-block;
            width: 10%;
         }
         .book_weight{
           text-align: center;
           display: inline-block;
           width: 10%;
           margin: 0px 400px;

         }
         .size{
            float: right;
            margin-top: 10px;
            margin-right: 10px;
         }
    </style>
</head>
<body>
    <div class="container1">
        <div class="title">
            <h2>
                Add Product
            </h2>
        </div>
        <div class="one">
            <h2>1</h2>
        </div>
        <div class="text">
            select category
        </div>
        <div class="buttons">

                <button class="b2">
                    Add new varient
                </button>
            </div>
        </div>
        <div class="details-title">
            <select name="book_no" id="book_no">
                <option value="1">
                    Book 1
                </option>
            </select>
            <br>
            <input type="checkbox" name="copy" id="copy">
            <label for="copy" class="copy">Copy input details to all product</label>
            <br>
            If you want to change specific fields for particular books like Name, Author, etc. you can change it by selecting the book.
        </div>
        <div class="images">
            <div class="front-image">
                <h3>
                    Front Image
                </h3>
                <div class="f-image-container">
                    <div class="browse-files">
                        <input type="file" name="f-image" id="f-image">
                    </div>
                </div>
            </div>
            <div class="other-images">
                <h3>
                    Other Images
                </h3>
                <div class="other-images-container">
                    <div class="browse-files">
                        <input type="file" name="o-image" id="o-image">
                    </div>
                </div>
            </div>
        </div>
        <div class="details-content">
            <div class="book-name">
                <label for="book_name">
                    <b>Book Name *</b>
                </label>
                <br>
                <input type="text" name="book_name" id="book_name" placeholder="book name">
            </div>
            <div class="isbn-code">
                <label for="isbn_code">
                    <b>ISBN Code</b>
                </label>
                <br>
                <input type="text" name="isbn_code" id="isbn_code" placeholder="Isbn Code">
            </div>
            <div class="inventory">
                <label for="quantity">
                    <b>
                        Inventory(Quantity)
                    </b>
                </label>
                <br>
                <input type="text" name="quantity" id="quantity" placeholder="Quantity">
            </div>
            <div class="sdf_price">
                <label for="sdf-price">
                    <b>
                        SDF Price *
                    </b>
                </label>
                <br>
                <input type="text" name="sdf-price" id="sdf-price" placeholder="SDF Price">
            </div>
            <div class="mrp_price">
                <label for="mrp-price">
                    <b>
                        MRP Price *
                    </b>
                </label>
                <br>
                <input type="text" name="mrp-price" id="mrp-price" placeholder="MRP Price">
            </div>
            <div class="gst">
                <label for="gst_">
                    <b>
                        GST % *
                    </b>
                </label>
                <br>
                <input type="text" name="gst_" id="gst_" value="1">
            </div>
            <div class="hsn_code">
                <label for="hsn-code">
                    <b>
                        HSN Code *
                    </b>
                </label>
                <br>
                <input type="text" name="hsn-code" id="hsn-code" placeholder="HSN Code">
            </div>
            <div class="book_weight">
                <label for="book-weight">
                    <b>
                        Book Weight
                    </b>
                </label>
                <br>
                <input type="text" name="book-weight" id="book-weight" placeholder="Book Weight">
            </div>
            <div class="size">
                <label for="size_">
                    <b>
                        Size
                    </b>
                </label>
                <br>
                <input type="text" name="size_" id="size_" placeholder="size">
            </div>
        </div>
    </div>
</body>
</html>-->
<?php
include("header.php");
include("../config/config.php");



//add
$title='';
$description='';
if(isset($_GET['id']) && $_GET['id']>0){
//edit
$result = $conn->query("select * from blog where id=".$_GET['id']);
if($result->num_rows>0){
$row = $result->fetch_assoc();
print_r($row);
$title=$row['blog_name'];
$description=$row['description'];

}
}

?>
<h2>Blog Manage</h2>
<a href="blog_manage.php">Add new blog</a>
<form method='POST'action='callback/blog.php'enctype="multipart/form-date">
    <input type='text'name='title'required>
   <input type='email' name='email'>
   <input type='password' name='password'>
    <input type='submit'>
</form>
<?php
include("footer.php");
?>