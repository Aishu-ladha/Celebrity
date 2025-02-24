<?php
include('includes/connect.php');
include('functions/common_function.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TS Bridge</title>
    <link rel="stylesheet" href="style.css" />
    <script
      src="https://kit.fontawesome.com/5d31275b9d.js"
      crossorigin="anonymous"
    ></script>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
  </head>

  <body class="body_container">
    <!-- index start -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="menu">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
      </div>
      <ul class="menu-options">
        <li><a href="#">Women's Fashion</a></li>
        <li><a href="#">Men's fashion</a></li>
        <li><a href="#">Electronics</a></li>
        <li><a href="#">Home & Electronics</a></li>
      </ul>
      <div class="container-fluid">
        <a class="navbar-brand" href="#" style="font-weight: bolder"
          >Celebrity Store</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a
                class="nav-link"
                aria-current="page"
                href="#"
                style="font-weight: bolder"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href="project1/about.html"
                style="font-weight: bolder"
                >About</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" style="font-weight: bolder"
                >Sign Up</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link enabled"
                href="project1/login.html"
                aria-disabled="true"
                style="font-weight: bolder"
                >Login</a
              >
            </li>
          </ul>

          <form class="d-flex" role="search">
            <input class="form-control me-2" style="font-size: 15px;"search"
            placeholder="What are you looking for?" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">
              Search
            </button>
          </form>
        </div>
      </div>
    </nav>

    <section class="carasoul-section">
      <div id="whites">
        <img id="whiteshirt" src="imageaccess/whitetee.png" />
        <h1
          style="
            color: black;
            margin-top: -180px;
            font-size: larger;
            margin-left: 70px;
            font-weight: bold;
          "
        >
          Design Your Tee
        </h1>
      </div>
      <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              src="imageaccess/outfit1.avif"
              class="d-block w-100"
              alt="..."
            />
          </div>
          <div class="carousel-item">
            <img
              src="imageaccess/outfit2.avif"
              class="d-block w-100"
              alt="..."
            />
          </div>
          <div class="carousel-item">
            <img
              src="imageaccess/outfit3.avif"
              class="d-block w-100"
              alt="..."
            />
          </div>
          <div class="carousel-item">
            <img
              src="imageaccess/outfit4.avif"
              class="d-block w-100"
              alt="..."
            />
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExample"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExample"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
    <!-- index end -->

    <!--  flash sales start -->
    <div class="shopping_card">
      <header class="header_container">
        <div class="categories_title">
          <div class="categories_box"></div>
          <div class="categories">Today's</div>
        </div>
        <div class="header_text">
          <h2 class="header_title">Flash Sales</h2>
          <div class="time_container">
            <div class="time">
              <spam class="text">Days</spam>
              <spam class="digit">03 :</spam>
            </div>
            <div class="time">
              <spam class="text">Hours</spam>
              <spam class="digit">23 :</spam>
            </div>
            <div class="time">
              <spam class="text">Minutes</spam>
              <spam class="digit">19 :</spam>
            </div>
            <div class="time">
              <spam class="text">Seconds</spam>
              <spam class="digit">56 </spam>
            </div>
          </div>
          <!-- <div></div> -->
        </div>
      </header>
      <main class="main_container">
        <!-- shopping card starts -->
        <div class="card">
          <div class="card-img">
            <p class="offer">-40%</p>
            <img
              class="img"
              src="project1/images/image.jpeg"
              alt="Product Image"
            />
            <div class="icons">
              <a href="#"><i class="fas fa-heart"></i></a>
              <a href="#"><i class="fas fa-eye eye_icon"></i></a>
            </div>
          </div>
          <div class="card-info">
            <p class="text-title">HAVIT HV-G92 Gamepad</p>
            <div class="card-footer">
              <div class="prices">
                <span class="new-price">$120</span>
                <span class="old-price">$160</span>
              </div>
              <div class="ratings">
                <span class="stars">⭐⭐⭐⭐⭐</span>
                <span class="rating-count">(88)</span>
              </div>
            </div>
          </div>
        </div>
        <!-- shopping card ends -->

        <!-- shopping card starts -->
        <div class="card">
          <div class="card-img">
            <p class="offer">-35%</p>
            <img
              class="img"
              src="project1/images/image.jpeg"
              alt="Product Image"
            />
            <div class="icons">
              <a href="#"><i class="fas fa-heart"></i></a>
              <a href="#"><i class="fas fa-eye eye_icon"></i></a>
            </div>
          </div>
          <div class="card-info">
            <p class="text-title">Ak-900 Wired Keyboard</p>
            <div class="card-footer">
              <div class="prices">
                <span class="new-price">$960</span>
                <span class="old-price">$1160</span>
              </div>
              <div class="ratings">
                <span class="stars">⭐⭐⭐⭐⭐</span>
                <span class="rating-count">(75)</span>
              </div>
            </div>
          </div>
        </div>
        <!-- shopping card ends -->

        <!-- shopping card starts -->
        <div class="card">
          <div class="card-img">
            <p class="offer">-30%</p>
            <img
              class="img"
              src="project1/images/image.jpeg"
              alt="Product Image"
            />
            <div class="icons">
              <a href="#"><i class="fas fa-heart"></i></a>
              <a href="#"><i class="fas fa-eye eye_icon"></i></a>
            </div>
          </div>
          <div class="card-info">
            <p class="text-title">IPS LCD Gaming Monitor</p>
            <div class="card-footer">
              <div class="prices">
                <span class="new-price">$370</span>
                <span class="old-price">$400</span>
              </div>
              <div class="ratings">
                <span class="stars">⭐⭐⭐⭐⭐</span>
                <span class="rating-count">(99)</span>
              </div>
            </div>
          </div>
        </div>
        <!-- shopping card ends -->

        <!-- shopping card starts -->
        <div class="card">
          <div class="card-img">
            <p class="offer">-25%</p>
            <img
              class="img"
              src="project1/images/image.jpeg"
              alt="Product Image"
            />
            <div class="icons">
              <a href="#"><i class="fas fa-heart"></i></a>
              <a href="#"><i class="fas fa-eye eye_icon"></i></a>
            </div>
          </div>
          <div class="card-info">
            <p class="text-title">S-Series Comfort Chair</p>
            <div class="card-footer">
              <div class="prices">
                <span class="new-price">$375</span>
                <span class="old-price">$400</span>
              </div>
              <div class="ratings">
                <span class="stars">⭐⭐⭐⭐⭐</span>
                <span class="rating-count">(99)</span>
              </div>
            </div>
          </div>
        </div>
        <!-- shopping card ends -->
      </main>
      <div class="view">
        <a href="#">View All Products</a>
      </div>
    </div>
    <!-- flash sales end -->

    <div class="container">
      <header class="header_container">
        <div class="categories_title">
          <div class="categories_box"></div>
          <div class="categories">Categories</div>
        </div>
        <h2 class="header_title">Browse By Category</h2>
      </header>

      <main class="main_container"> 
         <?php
         getcategory();
        ?>
      
      </main>
    <!--  movies Start -->
      <div class="shopping_card">
        <header class="header_container">
          <div class="categories_title">
            <div class="categories_box"></div>
            <div class="categories">Movies</div>
          </div>
          <div class="header_text">
            <h2 class="header_title">Trending in Movies</h2>
            <button class="header_button">View All</button>
          </div>
        </header>
        <main class="main_container">

          <!-- shopping card starts -->
        <?php
        getmovies();
        ?>
          <!-- shopping card ends -->
        </main>
      </div>

      <!-- movies end -->
      <div class="shopping_card">
        <header class="header_container">
          <div class="categories_title">
            <div class="categories_box"></div>
            <div class="categories">This Month</div>
          </div>
          <div class="header_text">
            <h2 class="header_title">Best Selling Products</h2>
            <button class="header_button">View All</button>
          </div>
        </header>
        <main class="main_container">
          <!-- shopping card starts -->
          <div class="card">
            <div class="card-img">
              <img src="project1/images/tshirt.png" alt="Product Image" />
              <div class="icons">
                <a href="#"><i class="fas fa-heart"></i></a>
                <a href="#"><i class="fas fa-eye"></i></a>
              </div>
            </div>
            <div class="card-info">
              <p class="text-title">Tshirt</p>
              <div class="card-footer">
                <div class="prices">
                  <span class="new-price">$499.49</span>
                  <span class="old-price">$599.99</span>
                </div>
                <div class="ratings">
                  <span class="stars">⭐⭐⭐⭐⭐</span>
                  <span class="rating-count">(15)</span>
                </div>
              </div>
            </div>
          </div>
          <!-- shopping card ends -->
          <!-- shopping card starts -->
          <div class="card">
            <div class="card-img">
              <img src="project1/images/tshirt.png" alt="Product Image" />
              <div class="icons">
                <a href="#"><i class="fas fa-heart"></i></a>
                <a href="#"><i class="fas fa-eye"></i></a>
              </div>
            </div>
            <div class="card-info">
              <p class="text-title">Tshirt</p>
              <div class="card-footer">
                <div class="prices">
                  <span class="new-price">$499.49</span>
                  <span class="old-price">$599.99</span>
                </div>
                <div class="ratings">
                  <span class="stars">⭐⭐⭐⭐⭐</span>
                  <span class="rating-count">(15)</span>
                </div>
              </div>
            </div>
          </div>
          <!-- shopping card ends -->
          <!-- shopping card starts -->
          <div class="card">
            <div class="card-img">
              <img src="project1/images/tshirt.png" alt="Product Image" />
              <div class="icons">
                <a href="#"><i class="fas fa-heart"></i></a>
                <a href="#"><i class="fas fa-eye"></i></a>
              </div>
            </div>
            <div class="card-info">
              <p class="text-title">Tshirt</p>
              <div class="card-footer">
                <div class="prices">
                  <span class="new-price">$499.49</span>
                  <span class="old-price">$599.99</span>
                </div>
                <div class="ratings">
                  <span class="stars">⭐⭐⭐⭐⭐</span>
                  <span class="rating-count">(15)</span>
                </div>
              </div>
            </div>
          </div>
          <!-- shopping card ends -->
          <!-- shopping card starts -->
          <div class="card">
            <div class="card-img">
              <img src="project1/images/tshirt.png" alt="Product Image" />
              <div class="icons">
                <a href="#"><i class="fas fa-heart"></i></a>
                <a href="#"><i class="fas fa-eye"></i></a>
              </div>
            </div>
            <div class="card-info">
              <p class="text-title">Tshirt</p>
              <div class="card-footer">
                <div class="prices">
                  <span class="new-price">$499.49</span>
                  <span class="old-price">$599.99</span>
                </div>
                <div class="ratings">
                  <span class="stars">⭐⭐⭐⭐⭐</span>
                  <span class="rating-count">(15)</span>
                </div>
              </div>
            </div>
          </div>
          <!-- shopping card ends -->
        </main>
      </div>
      <!--  explore productss -->
      <section>
        <div class="shopping_card">
          <header class="header_container">
            <div class="categories_title">
              <div class="categories_box"></div>
              <div class="categories">Our Products</div>
            </div>
            <div class="header_text">
              <h2 class="header_title">Explore Our Products</h2>
              <div class="left-right">
                <i class="fas fa-arrow-left"></i>
                <i class="fas fa-arrow-right"></i>
              </div>
            </div>
          </header>
          <main class="main_container">
            <!-- shopping card starts -->
            <!-- <div class="card">
              <div class="card-img">
                <img src="project1/images/product.png" alt="Product Image" />
                <div class="icons">
                  <a href="#"><i class="fas fa-heart"></i></a>
                  <a href="#"><i class="fas fa-eye"></i></a>
                </div>
              </div>
              <div class="card-info">
                <p class="text-title">Tshirt</p>
                <div class="card-footer">
                  <div class="prices">
                    <span class="new-price">$499.49</span>
                    <span class="old-price">$599.99</span>
                  </div>
                  <div class="ratings">
                    <span class="stars">⭐⭐⭐⭐⭐</span>
                    <span class="rating-count">(15)</span>
                  </div>
                </div>
              </div>
            </div>
            shopping card ends
            shopping card starts
            <div class="card">
              <div class="card-img">
                <img src="project1/images/product.png" alt="Product Image" />
                <div class="icons">
                  <a href="#"><i class="fas fa-heart"></i></a>
                  <a href="#"><i class="fas fa-eye"></i></a>
                </div>
              </div>
              <div class="card-info">
                <p class="text-title">Tshirt</p>
                <div class="card-footer">
                  <div class="prices">
                    <span class="new-price">$499.49</span>
                    <span class="old-price">$599.99</span>
                  </div>
                  <div class="ratings">
                    <span class="stars">⭐⭐⭐⭐⭐</span>
                    <span class="rating-count">(15)</span>
                  </div>
                </div>
              </div>
            </div>
            shopping card ends
            shopping card starts
            <div class="card">
              <div class="card-img">
                <img src="project1/images/product.png" alt="Product Image" />
                <div class="icons">
                  <a href="#"><i class="fas fa-heart"></i></a>
                  <a href="#"><i class="fas fa-eye"></i></a>
                </div>
              </div>
              <div class="card-info">
                <p class="text-title">Tshirt</p>
                <div class="card-footer">
                  <div class="prices">
                    <span class="new-price">$499.49</span>
                    <span class="old-price">$599.99</span>
                  </div>
                  <div class="ratings">
                    <span class="stars">⭐⭐⭐⭐⭐</span>
                    <span class="rating-count">(15)</span>
                  </div>
                </div>
              </div>
            </div>
            shopping card ends
            shopping card starts
            <div class="card">
              <div class="card-img">
                <img src="project1/images/product.png" alt="Product Image" />
                <div class="icons">
                  <a href="#"><i class="fas fa-heart"></i></a>
                  <a href="#"><i class="fas fa-eye"></i></a>
                </div>
              </div>
              <div class="card-info">
                <p class="text-title">Tshirt</p>
                <div class="card-footer">
                  <div class="prices">
                    <span class="new-price">$499.49</span>
                    <span class="old-price">$599.99</span>
                  </div>
                  <div class="ratings">
                    <span class="stars">⭐⭐⭐⭐⭐</span>
                    <span class="rating-count">(15)</span>
                  </div>
                </div>
              </div>
            </div>
            shopping card ends
            <div class="card">
              <div class="card-img">
                <img src="project1/images/product.png" alt="Product Image" />
                <div class="icons">
                  <a href="#"><i class="fas fa-heart"></i></a>
                  <a href="#"><i class="fas fa-eye"></i></a>
                </div>
              </div>
              <div class="card-info">
                <p class="text-title">Tshirt</p>
                <div class="card-footer">
                  <div class="prices">
                    <span class="new-price">$499.49</span>
                    <span class="old-price">$599.99</span>
                  </div>
                  <div class="ratings">
                    <span class="stars">⭐⭐⭐⭐⭐</span>
                    <span class="rating-count">(15)</span>
                  </div>
                </div>
              </div>
            </div>
            shopping card ends
            <div class="card">
              <div class="card-img">
                <img src="project1/images/product.png" alt="Product Image" />
                <div class="icons">
                  <a href="#"><i class="fas fa-heart"></i></a>
                  <a href="#"><i class="fas fa-eye"></i></a>
                </div>
              </div>
              <div class="card-info">
                <p class="text-title">Tshirt</p>
                <div class="card-footer">
                  <div class="prices">
                    <span class="new-price">$499.49</span>
                    <span class="old-price">$599.99</span>
                  </div>
                  <div class="ratings">
                    <span class="stars">⭐⭐⭐⭐⭐</span>
                    <span class="rating-count">(15)</span>
                  </div>
                </div>
              </div>
            </div>
            shopping card ends
            <div class="card">
              <div class="card-img">
                <img src="project1/images/product.png" alt="Product Image" />
                <div class="icons">
                  <a href="#"><i class="fas fa-heart"></i></a>
                  <a href="#"><i class="fas fa-eye"></i></a>
                </div>
              </div>
              <div class="card-info">
                <p class="text-title">Tshirt</p>
                <div class="card-footer">
                  <div class="prices">
                    <span class="new-price">$499.49</span>
                    <span class="old-price">$599.99</span>
                  </div>
                  <div class="ratings">
                    <span class="stars">⭐⭐⭐⭐⭐</span>
                    <span class="rating-count">(15)</span>
                  </div>
                </div>
              </div>
            </div>
            shopping card ends
            <div class="card">
              <div class="card-img">
                <img src="project1/images/product.png" alt="Product Image" />
                <div class="icons">
                  <a href="#"><i class="fas fa-heart"></i></a>
                  <a href="#"><i class="fas fa-eye"></i></a>
                </div>
              </div>
              <div class="card-info">
                <p class="text-title">Tshirt</p>
                <div class="card-footer">
                  <div class="prices">
                    <span class="new-price">$499.49</span>
                    <span class="old-price">$599.99</span>
                  </div>
                  <div class="ratings">
                    <span class="stars">⭐⭐⭐⭐⭐</span>
                    <span class="rating-count">(15)</span>
                  </div>
                </div>
              </div>
            </div> -->
            <!-- shopping card ends -->
            <?php
            getproducts();
            ?>
          </main>
          <div class="product_button">
            <button class="header_button">View All Products</button>
          </div>
        </div>
      </section>
    </div>
    <footer>
      <div class="footer_container">
        <div class="footer_column">
          <h3 style="font-size: 27px; font-weight: 500">Exclusive</h3>
          <a href="#">Subscribe</a>
          <a href="#">Get 10% off Your first order</a>
          <input class="placeholder" placeholder="Enter your email " />
        </div>
        <div class="footer_column">
          <h3>Support</h3>
          <a href="#"
            >111 Bijoy sarani,Dhaka <br />
            DH 1515,Bangladesh.</a
          >
          <a href="#">exclusive@gmail.com</a>
          <a href="#">+880015-88888-9999</a>
        </div>

        <div class="footer_column">
          <h3>Account</h3>
          <a href="#">My Account</a>
          <a href="#">Login / Register</a>
          <a href="#">Cart</a>
          <a href="#">Wishlist</a>
          <a href="#">Shop</a>
        </div>

        <div class="footer_column">
          <h3>Quick Link</h3>
          <a href="#">Privacy Policy</a>
          <a href="#">Terms Of Use</a>
          <a href="#">FAQ</a>
          <a href="#">Contact</a>
        </div>

        <div class="footer_column">
          <h3>Download App</h3>
          <a href="#" style="font-size: 12px">save $3 with App New User Only</a>
          <div class="images">
            <img class="barcode" src="project1/images/barcode.jpeg" alt="bar" />
            <div class="stors">
              <img
                class="stor"
                src="project1/images/googleplay.jpeg"
                alt="google"
              />
              <img class="stor" src="project1/images/appstore.jpeg" alt="app" />
            </div>
          </div>
          <div class="icon">
            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#"><i class="fa-brands fa-twitter"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>

      <div class="copyright">@ Copyright Rimel 2022. All rights reserved.</div>
    </footer>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <script src="project1/about.js"></script>
  </body>
</html>
