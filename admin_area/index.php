
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container-fluid">
        <div class="button">
            <button><a href="insert_product.php">Insert Product</a> </button>
            <button><a href="">view Product</a></button>
            <button><a href="index.php?insert_category"> Insert Category</a></button>
            <button>view categories</button>
            <button><a href="index.php?insert_brand"> Insert Brands</a></button>
            <button>View Brands</button>
            <button>All Orders</button>
            <button>All payments</button>
            <button>List Users</button>
            <button>Logout</button>
        </div>
    </div>

    <div class="container">
        <?php
        if(isset($_GET['insert_category'])){
            include ('insert_categories.php');
        }

        if(isset($_GET['insert_brand'])){
            include ('insert_brands.php');
        }
        ?>
    </div>
</body>
</html>