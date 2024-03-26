<?php
include('./includes/connect.php');

// getting producs
function getproducts() {
    global $con;
    $select_query = "Select * from `products` order by rand() Limit 0,9";
    $result_query = mysqli_query($con,$select_query);
    while($row = mysqli_fetch_assoc($result_query)){
        $product_id = $row['product_id'];
        $product_title = $row['product_title'];
        $product_description = $row['product_description'];
        $product_keyword = $row['product_keyword'];
        $product_quantity = $row['product_quantity'];
        $category_id = $row['category_id'];
        $theme_id = $row['theme_id'];
        $tag_id = $row['tag_id'];
        $product_price = $row['product_price'];
        $product_image1 = $row['product_image1'];
        $product_image2 = $row['product_image2'];
        $product_image3 = $row['product_image3'];
        $discount = $row['discount'];
        $date = $row['date'];
        $status = $row['status'];
        // $product_time = $row['product_time'];
        // $product_view = $row['product_view'];
        // $product_rating = $row['product_rating'];
        // $product_rating_count = $row['product_rating_count'];
        echo" 
        <div class='card'>
        <div class='card-img'>

        
          <img src='./admin_area/product_images/product_images/$product_image1' alt='Product Image'/>
          <div class='icons'>
            <a href='#'><i class='fas fa-heart'></i></a>
            <a href='#'><i class='fas fa-eye'></i></a>
          </div>
        </div>
        

        <div class='card-info'>
          <p class='text-title'>$product_title</p>
          <p class='text-title'>$product_description</p>
          <div class='card-footer'>
            <div class='prices'>
              <span class='new-price'>$product_price Rs</span>
              <span class='new-price'>$discount % off</span>
            </div>
            <div class='ratings'>
              <span class='stars'>⭐⭐⭐⭐⭐</span>
              <span class='rating-count'>(15)</span>
            </div>
          </div>
        </div>
      </div>
      ";
    }
}
function getcategory(){
  global $con;
  $selectcategory = "Select * from `category`";
  $result_category = mysqli_query($con,$selectcategory);
  while($row_data = mysqli_fetch_assoc($result_category)){
    $category_title = $row_data['category_title'];
    $category_id = $row_data['category_id'];
    $icon_class = str_replace(' ', '-', strtolower($category_title));
    echo " <div class='card_container'>
    <a href='index.php?category =$category_id' class='card_image_container'>
      <i
        class='fa-solid fa-$icon_class'
        style='font-size: 55px; color: black'
      ></i>
    </a>
    <div class='card_text_container'> $category_title</div>

  </div>";
  }
}
function getmovies(){
  global $con;
  $select_query = "Select * from `upcoming movies`";
  $result_query = mysqli_query($con,$select_query);
  while($row = mysqli_fetch_assoc($result_query)){
    $movie_id = $row['movie_id'];
    $movie_title = $row['movie_title'];
    $movie_description = $row['movie_description'];
    $image1 = $row['image1'];
    $image2 = $row['image2'];
    $image3 = $row['image3'];
    $image4 = $row['image4'];
    $movie_date = $row['date'];
    $product_price  = $row['product_price'];
    // $movie_time = $row['movie_time'];
    // $movie_view = $row['movie_view'];
    // $movie_rating = $row['movie_rating'];
    // $movie_rating_count = $row['movie_rating_count'];
    echo"  <div class='card'>
    <div class='card-img'>
      <img src='./admin_area/upcoming_images/upcoming_images/$image2' 
      alt='$movie_title' />
    </div>
    <div class='card-info'>
      <p class='text-title'>$movie_title</p>
      <div class='card-footer'>
        <div class='prices'>
          <span class='new-price'> Rs $product_price</span>
          
          </div>
          <span style= 'color:black' class='new-price'>$movie_date</span>
        
     
      </div>
    </div>
  </div>";
  }
}
?>