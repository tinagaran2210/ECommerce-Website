<?php
    session_start();   
    include("dataconnection.php");
    $sess_user = $_SESSION["id"];


    //
    $check=mysqli_query($connect,"SELECT * FROM cart WHERE cart_user_id ='$sess_user' ");
    if(mysqli_num_rows($check)<1)
    {
        echo "<script type='text/javascript'>alert('Shopping Cart is Empty');</script>";
        echo "<script> window.location.assign('login-smartphones.php'); </script>"; 
    }
    //
    $qty   = 0;
    $cpro  = mysqli_query($connect,"SELECT * FROM products WHERE product_qty='$qty'");
    
    
    $checknum =mysqli_num_rows($cpro);
    while($fetch = mysqli_fetch_assoc($cpro))
    {
        $fid  = $fetch["product_id"];
        $fqty = $fetch["product_qty"]; 
        $checknum = mysqli_num_rows($cpro);
        if($checknum >=1)
        {
        
         mysqli_query($connect,"DELETE FROM cart WHERE cart_productid='$fid' AND cart_user_id ='$sess_user' ");
         
          
         
        }
    }
   
    $resultc=mysqli_query($connect,"SELECT COUNT(cart_id) from cart where cart_user_id ='$sess_user' ");
   $rowc = mysqli_fetch_assoc($resultc);
    
  

?>

<style>


  </style>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Apple</title>
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

</head>
<style>

  .clearfix {
    width: 178px;
    height: 61px;
    background: none;
    text-align: center;
    border: solid 2px #1b1b1b;
    overflow: hidden;
    cursor: pointer;
    margin-left: 1000px;
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
                <div class="home_title">Shopping Cart<span>.</span></div>
                <!-- <div class="home_slider_title"style="font-size: 25px;"><a href="smartphones.html">Brands</a> / Apple</div> -->
                
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
                 $sess_user = $_SESSION["id"];
     
                //
                $_SESSION["result"]=mysqli_query($connect,"SELECT * FROM cart WHERE cart_user_id ='$sess_user' "); 
                while($row=mysqli_fetch_assoc($_SESSION["result"]))  { 
                  $deID = $row['cart_id'] ;  

                  ?>


            <!-- Product -->
            <div class="product">
              <div class="product_image"><img src="images/<?php echo $row['cart_product_img'];?>" alt="" style="height:261px;width:263px;"></div>

              
              <div class="product_content">
                <div class="product_price">Name:  <?php echo "".$row['cart_product_name']; ?></a>&nbsp; <a  href="cart.php?del&cid=<?php echo $row['cart_id']?>" onclick="return confirmation();"><input class="button contact_button" style="width:20px;height:20px;"type="submit" name="delete" value="X"></a></div>
                <div class="product_price">Quantity:  <?php echo "".$row['cart_product_qty']; ?></div>
    
                <div class="product_price">Price:  RM<?php echo "".$row['cart_product_price']; ?></div>
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
              
           <div class="clearfix">
    <a  href="checkout.php" ><input class="button contact_button" type="submit" name="delete" value="Checkout"></a>
             <?php
                      
                $sess_user = $_SESSION["id"];
                $result=mysqli_query($connect,"SELECT * FROM cart WHERE cart_user_id ='$sess_user' "); 
                $proPrice   = 0.0;
                $total      = 0.0;
                $grandtotal = 0.0;
                $totalQTY =0;
                $delivery   = 0.0;
                while($row=mysqli_fetch_assoc($result))  
                {
                    $p = $row["cart_product_price"];
                    $q = $row["cart_product_qty"];
                    $totalQTY += $q;
                    $proPrice =  $p * $q;
                    $total+=$proPrice;
                }
             
                //Delivery price
                if($totalQTY<=3) // 3
                {
                    $delivery = 13.00;
                }
                else if ($totalQTY >3 && $totalQTY<7) //More than 4-6
                {
                    $delivery = 6.00;
                }
                else
                {
                    $delivery = 0.0;
                }
                //Grand Total
                $_SESSION["grandtotal"]= $total + $delivery;
                //set value to 0
                if(mysqli_num_rows($result)==0)
                {
                    $delivery   = 0;
                    $grandtotal = 0;
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

<script>
function confirmation()
{
  $option=confirm("Do you want to remove this product from cart ?");
  return $option;
}
</script>
<?php
if(isset($_GET['del']) ){
   
    $id=$_GET['cid'];
    mysqli_query($connect,"DELETE FROM cart WHERE cart_ID='$id'");
     echo "<script> window.location.assign('cart.php'); </script>";
    
}    
    
?>

<?php
 
?>