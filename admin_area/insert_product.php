<?php
include('../includes/connect.php');
if(isset($_POST['insert_product'])){

    $product_title = $_POST['product_title'];
    $product_description = $_POST['product_description'];
    $product_price = $_POST['product_price'];
    $product_quantity = $_POST['product_quantity'];
    $product_category = $_POST['product_category'];
    $product_brand = $_POST['product_brand'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .container{
        width:90%;
        margin:auto;
        padding:20px;
        /* justify-content:center;
        align-items:center; */
        /* background-color:black; */
      
    }
   form .subcont{
        padding:5px;
        margin:3px;
    }
 
</style>
<body>
    
   <div class="container">
    <h1> insert products</h1>

    <form action="" method ="post" enctype = "multipart/form-data">
        <div class="subcont">
            <label for="product_title">Product title</label>
            <br>
            <input type="text" name="product_title" id ="product_title" placeholder = "Enter product detail" required = "required" >
        </div>
        <div class="subcont">
            <label for="description">Product description</label>
            <br>
            <input type="text" name="product_description" id ="description" placeholder = "Enter product description" required = "required" >
        </div>

        <div class="subcont">
            <label for="Product_keywords"> Product keywords</label>
            <br>
            <input type="text" name="product_keywords" id ="Product_keywords" placeholder = "Enter Product keywords" required = "required" >
        </div>
          
        <div class="subcont"> <label for="description">Product Category</label>
            <select name="product_category" id="" class="product_category">
                <option value="">Select product category</option>
                <?php
                $selectcategory = "Select * from `category`";
                $result_category = mysqli_query($con,$selectcategory);
                while($row_data = mysqli_fetch_assoc($result_category)){
                    $category_title = $row_data['category_title'];
                    $category_id = $row_data['category_id'];
                    echo"<option value='$category_id'>$category_title</option>";
                }
?>
            </select>
        </div>
        <div class="subcont"> <label for="description">Product Brand</label>
            <select name="product_brands" id="" class="product_brands">
                <option value="">Select product brand</option>
                <?php
                $selectcategory = "Select * from `brand`";
                $result_category = mysqli_query($con,$selectcategory);
                while($row_data = mysqli_fetch_assoc($result_category)){
                    $brand_title = $row_data['brand_title'];
                    $brand_id = $row_data['brand_id'];
                    echo"<option value='$brand_id'>$brand_title</option>";
                }
?>
            </select>
        </div>
         
        <div class="subcont">
            <label for="Product_Image1"> Product Image1</label>
            <br>
            <input type="file" name="product_image1" id ="Product_Image1" placeholder = "Enter Product Image1" required = "required" >
        </div>

        <div class="subcont">
            <label for="Product_Image2"> Product Image2</label>
            <br>
            <input type="file" name="product_image2" id ="Product_Image1" placeholder = "Enter Product Image1" required = "required" >
        </div>

        <div class="subcont">
            <label for="Product_price"> Product Price</label>
            <br>
            <input type="text" name="product_price" id ="Product_price" placeholder = "Enter Product Price" required = "required" >
        </div>
        <div class="subcont">
         
            <br>
            <input type="submit" name="insert_product" id ="Product_price"  value="Insert Products" >
        </div>
    </form>
   </div>
</body>
</html>