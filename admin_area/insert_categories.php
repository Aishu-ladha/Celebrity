<?php
include('../includes/connect.php');
if(isset($_POST['insert_cat'])){
    $category_title = $_POST['cat_title'];
    $select_query = "SELECT * FROM `category` WHERE category_title = '$category_title'";
    $result_select = mysqli_query($con,$select_query);
    $number = mysqli_num_rows($result_select);

    if($number>0){
        echo "<script>alert('Category Already Exists');</script>";
    }
    else {
    $insert_query = "insert into`category` (category_title) values ('$category_title')";
    $result = mysqli_query($con,$insert_query);
    if($result){
        echo "<script>  alert('Category Inserted');</script>";
    }
}

}
?>
<form action="" method="post"  >
    <div class="input-group">
        <span><i class = "fa-solid fa-receipt"></i></span>
        <input type="text" class="form-control" name="cat_title" placeholder="Insert Categories" aria-label="Username">
    </div>
    <div class="input-group">
        <input type="submit" name="insert_cat" value="Insert Categories" >
    </div>
</form>