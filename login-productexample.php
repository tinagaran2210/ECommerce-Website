<?php
    include("dataconnection.php");

    if(isset($_GET['view'])) 
        {
            $id = $_GET["proid"];
            $result = mysqli_query($connect, "SELECT * FROM products WHERE product_id = '$id' ");
            $row=mysqli_fetch_assoc($result);
             $check = mysqli_query($connect, "SELECT * FROM products WHERE product_id=$id");
            if(mysqli_num_rows($check)==0)
            {
                    echo "<script type='text/javascript'>alert('This product is currently out of stock.');</script>";
                    echo "<script> window.location.assign('login-smartphones.php'); </script>";
            
            }

        }
        
            session_start();
            $sess_user = $_SESSION["id"];
            $sql1 = "SELECT * FROM users WHERE id = '$sess_user'";
            $result1 = mysqli_query($connect,$sql1);
            $row1 = mysqli_fetch_assoc($result1);

$resultc=mysqli_query($connect,"SELECT COUNT(cart_id) from cart where cart_user_id ='$sess_user' ");
$rowc = mysqli_fetch_assoc($resultc);

?>
<style>
  /* Basic Styling */
html, body {
  height: 100%;
  width: 100%;
  margin: 0;
  font-family: 'Roboto', sans-serif;
}


.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 15px;
  display: flex;
}

/* Columns */
.left-column {
  width: 65%;
  position: relative;
}

.right-column {
  width: 35%;
  margin-top: 60px;
}


/* Left Column */
.left-column img {
  width: 100%;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
  transition: all 0.3s ease;
}

.left-column img.active {
  opacity: 1;
}


/* Right Column */

/* Product Description */
.product-description {
  border-bottom: 1px solid #E1E8EE;
  margin-bottom: 20px;
}
.product-description span {
  font-size: 12px;
  color: #358ED7;
  letter-spacing: 1px;
  text-transform: uppercase;
  text-decoration: none;
}
.product-description h1 {
  font-weight: 300;
  font-size: 52px;
  color: #43484D;
  letter-spacing: -2px;
}
.product-description p {
  font-size: 16px;
  font-weight: 300;
  color: #86939E;
  line-height: 24px;
}

/* Product Configuration */
.product-color span,
.cable-config span {
  font-size: 14px;
  font-weight: 400;
  color: #86939E;
  margin-bottom: 20px;
  display: inline-block;
}

/* Product Color */
.product-color {
  margin-bottom: 30px;
}

.color-choose div {
  display: inline-block;
}

.color-choose input[type="radio"] {
  display: none;
}

.color-choose input[type="radio"] + label span {
  display: inline-block;
  width: 40px;
  height: 40px;
  margin: -1px 4px 0 0;
  vertical-align: middle;
  cursor: pointer;
  border-radius: 50%;
}

.color-choose input[type="radio"] + label span {
  border: 2px solid #FFFFFF;
  box-shadow: 0 1px 3px 0 rgba(0,0,0,0.33);
}
<?php $result3 = mysqli_query($connect, "SELECT DISTINCT product_col FROM products WHERE product_name='$name' "); 
while($row3=mysqli_fetch_assoc($result3))  {
  ?>


.color-choose input[type="radio"]#<?php echo $row3['product_col'] ?> + label span {
  background-color: <?php echo $row3['product_col'] ?>;
}
<?php 
}
?>

.color-choose input[type="radio"]:checked + label span {
  background-image: url(images/check-icn.svg);
  background-repeat: no-repeat;
  background-position: center;
}

/* Cable Configuration */
.cable-choose {
  margin-bottom: 20px;
}

.cable-choose button {
  border: 2px solid #E1E8EE;
  border-radius: 6px;
  padding: 13px 20px;
  font-size: 14px;
  color: #5E6977;
  background-color: #fff;
  cursor: pointer;
  transition: all .5s;
}

.cable-choose button:hover,
.cable-choose button:active,
.cable-choose button:focus {
  border: 2px solid #86939E;
  outline: none;
}

.cable-config {
  border-bottom: 1px solid #E1E8EE;
  margin-bottom: 20px;
}

.cable-config a {
  color: #358ED7;
  text-decoration: none;
  font-size: 12px;
  position: relative;
  margin: 10px 0;
  display: inline-block;
}
.cable-config a:before {
  content: "?";
  height: 15px;
  width: 15px;
  border-radius: 50%;
  border: 2px solid rgba(53, 142, 215, 0.5);
  display: inline-block;
  text-align: center;
  line-height: 16px;
  opacity: 0.5;
  margin-right: 5px;
}

/* Product Price */
.product-price {
  display: flex;
  align-items: center;
}

.product-price span {
  font-size: 26px;
  font-weight: 300;
  color: #43474D;
  margin-right: 20px;
}

.cart-btn {
  display: inline-block;
  background-color: #7DC855;
  border-radius: 6px;
  font-size: 16px;
  color: #FFFFFF;
  text-decoration: none;
  padding: 12px 30px;
  transition: all .5s;
}
.cart-btn:hover {
  background-color: #64af3d;
}

/* Responsive */
@media (max-width: 940px) {
  .container {
    flex-direction: column;
    margin-top: 60px;
  }

  .left-column,
  .right-column {
    width: 100%;
  }

  .left-column img {
    width: 300px;
    right: 0;
    top: -65px;
    left: initial;
  }
}

@media (max-width: 535px) {
  .left-column img {
    width: 220px;
    top: -85px;
  }
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Galaxy S10e</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Sublime project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/categories.css">
<link rel="stylesheet" type="text/css" href="styles/categories_responsive.css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
<body>
<div class="super_container">

 
  <header class="header">
    <div class="header_container">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="header_content d-flex flex-row align-items-center justify-content-start">
              <div class="logo"><a href="login-home.php">Foney</a></div>
              <nav class="main_nav">
                <ul>
                  <li>
                    <a href="login-home.php">Home</a>
                
                  </li>
                  <li>
                    <a href="login-category.php">Categories</a>

                  </li>
                  
                  <li class="hassubs">
                    <a href="profile.php">My Account</a>
                    <ul>
                      <li><a href="profile.php">My Profile</a></li>
                      <li><a href="order.php">My Orders</a></li><li><a href="index.html">Logout</a></li>
                    </ul>
              </nav>
              <div class="header_extra ml-auto">
                <div class="shopping_cart" style="margin-left: 230px;">
                  <a href="cart.php">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         viewBox="0 0 489 489" style="enable-background:new 0 0 489 489;" xml:space="preserve">
                      <g>
                        <path d="M440.1,422.7l-28-315.3c-0.6-7-6.5-12.3-13.4-12.3h-57.6C340.3,42.5,297.3,0,244.5,0s-95.8,42.5-96.6,95.1H90.3
                          c-7,0-12.8,5.3-13.4,12.3l-28,315.3c0,0.4-0.1,0.8-0.1,1.2c0,35.9,32.9,65.1,73.4,65.1h244.6c40.5,0,73.4-29.2,73.4-65.1
                          C440.2,423.5,440.2,423.1,440.1,422.7z M244.5,27c37.9,0,68.8,30.4,69.6,68.1H174.9C175.7,57.4,206.6,27,244.5,27z M366.8,462
                          H122.2c-25.4,0-46-16.8-46.4-37.5l26.8-302.3h45.2v41c0,7.5,6,13.5,13.5,13.5s13.5-6,13.5-13.5v-41h139.3v41
                          c0,7.5,6,13.5,13.5,13.5s13.5-6,13.5-13.5v-41h45.2l26.9,302.3C412.8,445.2,392.1,462,366.8,462z"/>
                      </g>
                    </svg>
                    <div>Cart <span>(<?php echo $rowc['COUNT(cart_id)']; ?>)</span></div>
                  </a>
                </div>
                <div class="search">
                  
                  </div>
                </div>
                <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Social -->
    <div class="header_social">
      <ul>
        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
      </ul>
    </div>
  </header>
  <!-- Menu -->

  <div class="menu menu_mm trans_300">
    <div class="menu_container menu_mm">
      <div class="page_menu_content">
              
        <div class="page_menu_search menu_mm">
          <form action="#">
            <input type="search" required="required" class="page_menu_search_input menu_mm" placeholder="Search for products...">
          </form>
        </div>
        <ul class="page_menu_nav menu_mm">
          <li class="page_menu_item has-children menu_mm">
            <a href="index.html">Home<i class="fa fa-angle-down"></i></a>
            <ul class="page_menu_selection menu_mm">
              <li class="page_menu_item menu_mm"><a href="categories.html">Categories<i class="fa fa-angle-down"></i></a></li>
              <li class="page_menu_item menu_mm"><a href="product.html">Product<i class="fa fa-angle-down"></i></a></li>
              <li class="page_menu_item menu_mm"><a href="cart.php">Cart<i class="fa fa-angle-down"></i></a></li>
              <li class="page_menu_item menu_mm"><a href="checkout.html">Checkout<i class="fa fa-angle-down"></i></a></li>
              <li class="page_menu_item menu_mm"><a href="contact.html">Contact<i class="fa fa-angle-down"></i></a></li>
            </ul>
          </li>
          <li class="page_menu_item has-children menu_mm">
            <a href="categories.html">Categories<i class="fa fa-angle-down"></i></a>
            <ul class="page_menu_selection menu_mm">
              <li class="page_menu_item menu_mm"><a href="categories.html">Category<i class="fa fa-angle-down"></i></a></li>
              <li class="page_menu_item menu_mm"><a href="categories.html">Category<i class="fa fa-angle-down"></i></a></li>
              <li class="page_menu_item menu_mm"><a href="categories.html">Category<i class="fa fa-angle-down"></i></a></li>
              <li class="page_menu_item menu_mm"><a href="categories.html">Category<i class="fa fa-angle-down"></i></a></li>
            </ul>
          </li>
          <li class="page_menu_item menu_mm"><a href="index.html">Accessories<i class="fa fa-angle-down"></i></a></li>
          <li class="page_menu_item menu_mm"><a href="#">Offers<i class="fa fa-angle-down"></i></a></li>
          <li class="page_menu_item menu_mm"><a href="contact.html">Contact<i class="fa fa-angle-down"></i></a></li>
        </ul>
      </div>
    </div>

    <div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>

    <div class="menu_social">
      <ul>
        <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
      </ul>
    </div>
  </div>
  
  <!-- Home -->

  <div class="home" style="height: 50%;">
    <div class="home_container">
      <div class="home_background" style="background-image:url(images/categories.jpg);"></div>
      <div class="home_content_container" >
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="home_content">
                <div class="home_title"style=>Products<span>.</span></div>
                <!-- <div class="home_slider_title"style="font-size: 25px;"><a href="smartphones.html">Brands</a> / Samsung</div> -->
                
                <!-- <div class="home_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viverra velit venenatis fermentum luctus.</p></div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Products -->

  <div class="products">
    <div class="container">
      <div class="row">
        <div class="col">
          
          <!-- Product Sorting -->
          <div class="sorting_bar d-flex flex-md-row flex-column align-items-md-center justify-content-md-start">
          <!--  <div class="results">Showing <span>12</span> results</div> -->
            <div class="sorting_container ml-md-auto">
              <div class="sorting">
                <ul class="item_sorting">
                  <!-- <li>
                    <span class="sorting_text">Sort by</span>
                    <i class="fa fa-chevron-down" aria-hidden="true"></i>
                    <ul>
                      <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>Default</span></li>
                      <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "price" }'><span>Price</span></li>
                      <li class="product_sorting_btn" data-isotope-option='{ "sortBy": "stars" }'><span>Name</span></li>
                    </ul>
                  </li> -->
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>  
    <main class="container">

      <!-- Left Column / Headphones Image -->
      <?php $result2 = mysqli_query($connect, "SELECT DISTINCT product_img FROM products WHERE product_id='$id' ");  ?>
      <div class="left-column">
        <?php while($row2=mysqli_fetch_assoc($result2))  { 
                    ?>

        <img data-image="<?php echo $row2['product_col'] ?>"  class="active" src="images/<?php echo $row2['product_img'] ?>" alt="" style="height:400px; width:400px;margin-left: 130px;margin-top: 100px;">
        <?php     }      ?>
      </div>


      <!-- Right Column -->
      <div class="right-column" style="padding-bottom: 300px;">

        <!-- Product Description -->
        <div class="product-description">
          <span><?php echo $row['product_category'] ?></span>
          <h1><?php echo $row['product_name'] ?></h1>
          <p><?php echo $row['product_desc'] ?></p>
        </div>


  

          <?php $result6 = mysqli_query($connect, "SELECT DISTINCT product_price FROM products WHERE product_id='$id' ");  ?>

          <div class="cable-config" style="font-size: 20px;">
            <span style="font-size: 20px;">Price RM</span><?php   

           echo $row['product_price'];
           ?>
         </div>

         <div class="cable-config" style="font-size: 20px;">
            <span style="font-size: 20px;">Quantity:  </span><?php   

           echo $row['product_qty'];
           ?>
         </div>



<!-- <input type="button" value="Add Students" onclick="<p>jdjdjd</p>"/> -->
        <!-- Product Pricing -->
        <form method="post" >
          <span><input type="number" value="1" name="qty" min="1" max="<?php  echo $row['product_qty']; ?>"></span> 
        <button class="button contact_button" type="submit" name="add" value="add"><span>Add to Cart</span></button>
        </form>
    </main>

    <!-- Scripts -->
 

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
    <script src="script.js" charset="utf-8"></script>
</body>
</html>
<?php
    if(isset($_POST["add"]))
    {    
        // header("Location:login-smartphones.php");
        //$userID   = $row1["User_Id"];
        $cid      = $_SESSION["id"];
        $proID    = $row["product_id"];
        $proName  = $row["product_name"];
        $proPrice = $row["product_price"];
        $proQty   = $_POST["qty"];
        $proImage = $row["product_img"];
        
        $check    = mysqli_query($connect,"SELECT * FROM cart WHERE cart_product_id='$proID' AND cart_user_id='$cid'");
        $cow      = mysqli_fetch_assoc($check);
        if(mysqli_num_rows($check)>=1)
        {
            $q    = $cow["cart_product_qty"];
            $all  = $proQty + $q;
            //product qty
            $checkpro = mysqli_query($connect,"SELECT * FROM products WHERE product_id='$proID' ");
            $cow1     = mysqli_fetch_assoc($checkpro);
            $proqty   = $cow1["product_qty"];
            if($proqty<$all)
            {
                 echo "<script type='text/javascript'>alert('Product Stocks Is Not Enough, Please Try Again Later.');</script>";
                 echo "<script> window.location.assign('login-smartphones.php'); </script>";
                 // mysqli_query($connect,"INSERT INTO test(test_Qty,test_qty2) VALUES('$proqty','$all')");
            
            }
            else
            {
                 mysqli_query($connect,"UPDATE cart SET cart_product_qty='$all' WHERE cart_product_id='$proID'");
                 echo "<script type='text/javascript'>alert('Product Successfully Added to Cart.');</script>";
                 echo "<script> window.location.assign('login-category.php'); </script>";
            }
      
        }
        else
        {
             mysqli_query($connect,
                    "INSERT INTO cart(cart_user_id, cart_product_id, cart_product_name, cart_product_price, cart_product_qty, cart_product_img)
                    VALUES
                ('$sess_user','$proID','$proName','$proPrice', '$proQty','$proImage')");
        
        echo "<script> window.location.assign('login-category.php'); </script>";
        }
       
        
    }
    else
        echo"failed";
    
?>