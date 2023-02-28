<?php
    include("dataconnection.php");

    if(isset($_GET['view'])) 
        {
            $id = $_GET["proid"];
            $resultcat = mysqli_query($connect, "SELECT * FROM category WHERE category_name = '$id' ");
            $rowcat=mysqli_fetch_assoc($resultcat);

        }
        
            session_start();
            $sess_user = $_SESSION["id"];
            $sql1 = "SELECT * FROM users WHERE id = '$sess_user'";
            $result1 = mysqli_query($connect,$sql1);
            $row1 = mysqli_fetch_assoc($result1);

$resultc=mysqli_query($connect,"SELECT COUNT(cart_id) from cart where cart_user_id ='$sess_user' ");
$rowc = mysqli_fetch_assoc($resultc);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>FONEY</title>
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
<style>

.register_container{

     width: 500px;
  clear: both;
}

.register_container input{
    float: right;
  clear: both;
  width: 280px;
}
.register_container select{
    float: right;
  clear: both;
}
.sorting_bar {
    width: 100%;
    padding-top: 88px;
    padding-bottom: 00px;
}
.home {
    width: 100%;
    height: 325px;
    background: #FFFFFF;
    z-index: 2;
    padding-top: 130px;
    padding-left: 60px;
    padding-right: 60px;
  }

  
  .button {
    width: 198px;
    height: 61px;
    background: none;
    text-align: center;
    border: solid 2px #1b1b1b;
    overflow: hidden;
    cursor: pointer;
    margin-top: 100px;
    margin-left: 400px;
}
</style>
<body>
<div class="super_container">

  <!-- Header -->

   <header class="header">
        <div class="header_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="header_content d-flex flex-row align-items-center justify-content-start">
                            <div class="logo"><a href="index.html">Foney</a></div>
                            <nav class="main_nav">
                                <ul>
                                    <li>
                                        <a href="index.html">Home</a>
                                
                                    </li>
                                    <li>
                                        <a href="category.php">Categories</a>
                                    
                                    </li>
                                   
                                    <li><a href="login.php">Login</a></li>
                                    <li><a href="register.php">Register</a></li>
                                </ul>
                            </nav>
                            <div class="header_extra ml-auto">
                                
                                
                                <div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    <!-- Search Panel -->
    <div class="search_panel trans_300">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="search_panel_content d-flex flex-row align-items-center justify-content-end">
              <form action="#">
                <input type="text" class="search_input" placeholder="Search" required="required">
              </form>
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

   <div class="home">
    <div class="home_container">
      <div class="home_background" style="background-image:url(images/categories.jpg)"></div>
      <div class="home_content_container">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="home_content">
                <div class="home_title"><?php echo $rowcat['category_name'] ?><span>.</span></div>
                <!-- <div class="home_slider_title"style="font-size: 25px;"><a href="smartphones.html">Brands</a> / Apple</div> -->
                
                <!-- <div class="home_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viverra velit venenatis fermentum luctus.</p></div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<div class="limiter">
<?php 

$resultcat=mysqli_query($connect,"SELECT * from category where category_status ='Available' ");
while($rowcat = mysqli_fetch_assoc($resultcat))
{




 ?>      

          <a href="catproduct.php?view&proid=<?php echo $rowcat['category_name'] ?>"><input class="button contact_button1" type="button" name="pending" value="<?php echo $rowcat["category_name"];?>"></a>
<?php 
}
?>
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
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          
          <div class="product_grid">
            <?php   
  $result=mysqli_query($connect,"SELECT * FROM products WHERE (product_id, product_name) in ( SELECT MIN(product_id), product_name FROM products GROUP BY product_name  )AND product_category='$id' AND product_status='Available'");
  
                while($row=mysqli_fetch_assoc($result))  { 

                  ?>


            <!-- Product -->
            <div class="product">
              <div class="product_image"><img src="images/<?php echo $row['product_img'];?>" alt="" style="height:261px;width:263px;"></div>

              
              <div class="product_content">
                <div class="product_title"><a href="productexample.php?view&proid=<?php echo $row['product_id'] ?>"><?php echo "".$row['product_name']; ?></a></div>
                
                <div class="product_price">From RM<?php echo "".$row['product_price']; ?></div>
              </div>
            </div>
            
            <?php

            
                }


?>

            

            
          </div>
          <!-- <div class="product_pagination">
            <ul>
              <li class="active"><a href="#">01.</a></li>
              <li><a href="#">02.</a></li>
              <li><a href="#">03.</a></li>
            </ul>
          </div> -->
            
        </div>
      </div>
    </div>
  </div>

  <!-- Icon Boxes -->

  <<!-- div class="icon_boxes">
    <div class="container">
      <div class="row icon_box_row"> -->
        
        

        <!-- Icon Box -->
        <!-- <div class="col-lg-4 icon_box_col">
          <div class="icon_box">
            <div class="icon_box_image"><img src="images/icon_2.svg" alt=""></div>
            <div class="icon_box_title">Free Returns</div>
            <div class="icon_box_text">
              <p>If you are not satisfied with an item, you have 30 days after receiving your order to exchange it.</p>
            </div>
          </div>
        </div> -->

        <!-- Icon Box -->
        <!-- <div class="col-lg-4 icon_box_col">
          <div class="icon_box">
            <div class="icon_box_image"><img src="images/icon_3.svg" alt=""></div>
            <div class="icon_box_title">24h Availability</div>
            <div class="icon_box_text">
              <p>Order anytime, anywhere.</p>
            </div>
          </div>
        </div> -->

        <!-- Icon Box -->
        <!-- <div class="col-lg-4 icon_box_col">
          <div class="icon_box">
            <div class="icon_box_image"><img src="images/icon_1.svg" alt=""></div>
            <div class="icon_box_title">Free Shipping For Orders Above RM100 </div>
            <div class="icon_box_text">
              <p>East or West Malaysia, shipping will be free for orders worth RM 100 and Above.</p>
            </div>
          </div>
        </div> -->

        

      <!-- </div>
    </div>
  </div> -->

  <!-- Newsletter -->
<!-- 
  <div class="newsletter">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="newsletter_border"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 offset-lg-2">
          <div class="newsletter_content text-center">
            <div class="newsletter_title">Subscribe to our Newsletter</div>
            <div class="newsletter_text"><p>You can subscribe to our Newsletter to hear about all the latest promotions, get updates on the hottest new arrivals and enjoy exclusive voucher offers.</p></div>
            <div class="newsletter_form_container">
              <form action="#" id="newsletter_form" class="newsletter_form">
                <input type="email" class="newsletter_input" required="required">
                <button class="newsletter_button trans_200"><span>Subscribe</span></button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->

  <!-- Footer -->
  
  <div class="footer_overlay"></div>
  <footer class="footer">
    <div class="footer_background" style="background-image:url(images/footer.jpg)"></div>
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="footer_content d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
            <div class="footer_logo"><a href="#">Foney.</a></div>
            <div class="copyright ml-auto mr-auto">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> FONEY. All rights reserved.
</div>
            <div class="footer_social ml-lg-auto">
              <ul>
                
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
</div>

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
</body>
</html>