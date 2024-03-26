<?php
include('../includes/connect.php');
if(isset($_POST['insert_brand'])){
    $brand_title = $_POST['brand_title'];
    $select_query = "SELECT * FROM `brand` WHERE brand_title = '$brand_title'";
    $result_select = mysqli_query($con,$select_query);
    $number = mysqli_num_rows($result_select);

    if($number>0){
        echo "<script>alert('brand Already Exists');</script>";
    }
    else {
    $insert_query = "insert into`brand` (brand_title) values ('$brand_title')";
    $result = mysqli_query($con,$insert_query);
    if($result){
        echo "<script>  alert('brand Inserted');</script>";
    }
}

}
?> 
<form action="" method="post"  >
    <div class="input-group">
        <span><i class = "fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name="brand_title" placeholder="Insert Brands" aria-label="brands">
    </div>
    <div class="input-group">
        <input type="submit" name="insert_brand" value="Insert Brands" >
    </div>
</form>