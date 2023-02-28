<?php
   session_start();
    include("dataconnection.php");
        
     if (isset($_SESSION['loggedin'])==1)
  {
      
  }

      $sess_user = $_SESSION["id"];
    $sql = "SELECT * FROM users WHERE id = '$sess_user'";
    $result22 = mysqli_query($connect,$sql);
    $row22 = mysqli_fetch_assoc($result22);
     $resultc=mysqli_query($connect,"SELECT COUNT(cart_id) from cart where cart_user_id ='$sess_user' ");
   $rowc = mysqli_fetch_assoc($resultc);
?>
<style>
.button {
    width: 178px;
    height: 61px;
    background: none;
    text-align: center;
    border: solid 2px #1b1b1b !important;
    overflow: hidden;
    cursor: pointer;
}
body{
  font-size: 18px !important;
  font-family:'Poppins', sans-serif !important;
  font-weight:500 !important;
}

tbody tr{
  font-size: 18px !important;
  font-family:'Poppins', sans-serif !important;
  font-weight:500 !important;
}


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
 ]
  clear: both;
 margin-left: 170px;
}


</style>
<script>
    
    function Checkname()
    {
        var name = document.getElementById("fullname");
        if(name.value != '')
        {
            document.getElementById("username_error").innerHTML = '';
        }
    }
    //ch name
   function Checkch()
    {
        var ch = document.getElementById("cardholder");
        if(name.value != '')
        {
            document.getElementById("ch_error").innerHTML = '';
        }
    }
    
   function Checkaddress()
   {
        var address = document.getElementById("address");
        if(address.value != '')
        {
            document.getElementById("useraddress_error").innerHTML = '';
        }
   }
    
   function Checkpostcode()
    {
        var postcode = document.getElementById("postcode");
        if(postcode.value != '')
        {
            document.getElementById("userpostcode_error").innerHTML = '';
        }
    }
    
   function Checkbank()
    {
        if(document.getElementById('cimb').checked==true)
        {
            document.getElementById("bank_error").innerHTML = '';
        }
        else if(document.getElementById('maybank').checked==true)
        {
            document.getElementById("bank_error").innerHTML = '';
        }
        else if(document.getElementById('hongleong').checked==true)
        {
            document.getElementById("bank_error").innerHTML = '';
        }
        else if(document.getElementById('ocbc').checked==true)
        {
            document.getElementById("bank_error").innerHTML = '';
        }
       
    }
    
    //card number
    function formatCreditCard() 
    {
        var x = document.getElementById("cardnumber");
        var index = x.value.lastIndexOf('-');
        var test = x.value.substr(index + 1);
        
        
        if (test.length == 4 && test.length<16)
        {
            x.value = x.value + '-';
        }
        if(test.length==17)
        {
             x.value = x.value - '-';
        }
        
        if(x.value != '')
        {
            document.getElementById()
        }
    }
    
    function Checkcardnum()
    {
        var num = document.getElementById("cardnumber");
        if(num.value != '')
        {
            document.getElementById()
        }
    }
    
  
    //Expire date
    function Checkexp()
    {
        var exp = document.getElementById("expdate");
        if(exp.value != '')
        {
            document.getElementById("exp_error").innerHTML = '';
        }
    }
    
    function Checkcvv()
    {
        var exp = document.getElementById("cvv");
        if(exp.value != '')
        {
            document.getElementById("cvv_error").innerHTML = '';
        }
    }
    
    
</script>
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
<link rel="stylesheet" type="text/css" href="css/vieworder.css">
<link rel="stylesheet" type="text/css" href="css/main-viewuserorder.css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/jquery.easydropdown.js"></script>
<script src="js/simpleCart.min.js"> </script>
</head>
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
                <div class="home_title">Checkout<span>.</span></div>
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


            <?php
                      
                $sess_user = $_SESSION["id"];
                $result=mysqli_query($connect,"SELECT * FROM cart WHERE cart_user_id ='$sess_user' "); 
                
                //Address
                $d = "SELECT * FROM users WHERE user_id = '$sess_user'";
                $res = mysqli_query($connect,$d);
                $take = mysqli_fetch_assoc($res);
               
                    
                while($row=mysqli_fetch_assoc($result))  
                {
                $deID = $row['cart_id'] ;       
            ?>  
               
            <?php
                }
            ?>
    <div class="account-in">
     <div class="container">
      <div class="check_box">  
              
        <form name="Checkout" method="post">           
    <div class="col-md-9 cart-items">
        
             <!-- Display Products Detail -->
            <?php
                      
                $sess_user = $_SESSION["id"];
                $result=mysqli_query($connect,"SELECT * FROM cart WHERE cart_User_ID ='$sess_user' "); 
                
                //Address
                $d = "SELECT * FROM users WHERE user_id = '$sess_user'";
                $res = mysqli_query($connect,$d);
                $take = mysqli_fetch_assoc($res);
               
                    
                while($row=mysqli_fetch_assoc($result))  
                {
                $deID = $row['cart_id'] ;       
            ?>  
               
            <?php
                }
            ?>
            
            <div class="container-table100">
      <div class="wrap-table100">
        <div class="table100">
          <table>
            <thead>
            <tr class="table100-head">
                    <th><h4 align="center"><b>Billing Address </b></h4></th>
                    <th> <h4 align="center"><b>Payment</b></h4></th>
                </tr>
              </thead>
                <tr>
                    <td>
                         <p>&nbsp;&nbsp;Full Name:<label><span style="color:red; font-style:italic;" id="username_error"></span></label> </p> 
                       &nbsp;&nbsp; <input type="text" class="user" name="fullname" id="fullname"  onchange="Checkname()"  readonly="readonly" value="<?php echo $row22['user_name']; ?>" >
                        <p>&nbsp;</p>
                    </td>
                    <td>
                        <p>&nbsp;&nbsp;Bank:<label><span style="color:red; font-style:italic;" id="bank_error"></span></label> </p>
                     &nbsp;&nbsp;<input type="radio" id="cimb" name="bank" onchange="Checkbank()" value="CIMB" >Cimb
                     <input type="radio" id="maybank" name="bank" onchange="Checkbank()" value="Maybank">Maybank
                     <input type="radio" id="hongleong" name="bank" onchange="Checkbank()" value="HongLeong">Hong Leong
                     <input type="radio" id="ocbc" name="bank" onchange="Checkbank()" value="HongLeong">OCBC
                    <p>&nbsp;</p>    
                    
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>&nbsp;&nbsp;Address:<label><span style="color:red; font-style:italic;" id="useraddress_error"></span></label></p>
                        &nbsp;&nbsp;<input type="text" name="address" id="address" onchange="Checkaddress()" vreadonly="readonly" value="<?php echo $row22['user_address']; ?>" >
                        <p>&nbsp;</p>
                    </td>
                    <td>
                         <p>&nbsp;&nbsp;Card Number:<label><span style="color:red; font-style:italic;" id="cardnum_error"></span></label> </p>
                      &nbsp; &nbsp; <input type="text"  pattern="([0-9]{4}[-]?){4}"  onkeyup="" onchange="Checkcardnum()" placeholder="1234-1234-1234-1234" name="cardnumber" id="cardnumber" value="<?php if(isset($_POST["cardnumber"])){echo htmlentities($_POST["cardnumber"]);} ?>" >
                        <p>&nbsp;</p>
                    
                    </td>
            
                </tr>
                <tr>
                    <td>
                        <p>&nbsp;&nbsp;Postcode:<label><span style="color:red; font-style:italic;" id="userpostcode_error"></span></label></p>
                        &nbsp;&nbsp;<input type="text"  name="postcode" id="postcode" pattern="[0-9]{5}" minlength="1" maxlength="5" onchange="Checkpostcode()"  readonly="readonly" value="<?php echo $row22['user_postcode']; ?>" >
                        <p>&nbsp;</p>  <p>&nbsp;</p>
                    </td>
                    <td>
                          <p>&nbsp;&nbsp;Card Holder Name:<label><span style="color:red; font-style:italic;" id="ch_error"></span></label></p>
                        &nbsp;&nbsp;<input type="text" class="user"  pattern="^[A-Za-zÀ-ÿ ,.'-]+$" placeholder="Jackson Tan"  name="cardholder" id="cardholder"  onchange="Checkch()" value="<?php if(isset($_POST["cardholder"])){echo htmlentities($_POST["cardholder"]);} ?>" >
                        <p>&nbsp;</p>
                    
                    </td>
                
                </tr>
               <tr>
                   <td border="0"></td>
                    <td colspan="">
                        <p>&nbsp;&nbsp;Expire Date:<label><span style="color:red; font-style:italic;" id="exp_error"></span></label></p>
                        &nbsp;&nbsp;<input type="text"   onchange="Checkexp()" placeholder="2/21"  pattern="([0-9]{2}[/]?){2}" name="expdate" id="expdate" value="<?php if(isset($_POST["expdate"])){echo htmlentities($_POST["expdate"]);} ?>" >   
                        <p>&nbsp;</p>
                    </td>
              </tr>
              <tr>
                  <td style="border:0"></td>
                  <td>
                        <p>&nbsp;&nbsp;CVV:<label><span style="color:red; font-style:italic;" id="cvv_error"></span></label></p>  
                     &nbsp; &nbsp;<input type="text"   onchange="Checkcvv()" maxlength="3" pattern="[0-9]{3}" placeholder="321" name="cvv" id="cvv" value="<?php if(isset($_POST["cvv"])){echo htmlentities($_POST["cvv"]);} ?>" >
                       <p>&nbsp;</p>
                  </td>  
              </tr>
            
                 </table>

            
               </div>
                <div>
         
       
     </div>
              
      
     <div class="col-md-3 cart-total">
      
           <?php
                      
                $sess_user = $_SESSION["id"];
                $result=mysqli_query($connect,"SELECT * FROM cart WHERE cart_User_ID ='$sess_user' "); 
                $proPrice   = 0.0;
                $total      = 0.0;
                $grandtotal = 0.0;
                $totalQTY =0;
                $_SESSION["delivery"]   = 0.0;
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
                    $_SESSION["delivery"]  = 13.00;
                }
                else if ($totalQTY >3 && $totalQTY<7) //More than 4-6
                {
                   $_SESSION["delivery"]  = 6.00;
                }
                else
                {
                    $_SESSION["delivery"] = 0.0;
                }
                //Grand Total
                $_SESSION["grandtotal"]= $total + $_SESSION["delivery"] ;
                //set value to 0
                if(mysqli_num_rows($result)==0)
                {
                    $_SESSION["delivery"]    = 0;
                    $grandtotal = 0;
                }
             
            
             
            ?>  
            
             
       <div class="price-details">
        
                 
                 <p>&nbsp;</p>
        
                 <!-- <span>Total Quantity</span>
         <span class="total1"><?php echo $totalQTY;?></span>
         <span>Delivery Charges</span>
         <span class="total1"><?php echo $_SESSION["delivery"]  ?></span>
                 <span>Total</span>
         <span class="total1"><?php echo $total;?></span>
                 
         <div class="clearfix"></div>        
       </div> 
             
       <ul class="total_price">
         <li class="last_price"> <h4> GRAND TOTAL</h4></li> 
         <li class="last_price"><span>RM<?php echo $_SESSION["grandtotal"]; ?></span></li>
         <div class="clearfix"> </div>
       </ul>
       <div class="clearfix"></div>
            
       <a class="order"> 
                 <input class="order" name="smt" type="submit" value="Pay Now">
             </a>
             
      </div>
              </form>
      <div class="clearfix"></div> -->
       </div>
    </div>
   </div>




       <div class="container-table100">
      <div class="wrap-table100">
        <div class="table100">
          <table>
            <thead>
            <tr class="table100-head">

                      <th>Product Name &nbsp; &nbsp;</th>
                      <th>Quantity  &nbsp; &nbsp;</th>     
                      <th>Price  &nbsp; &nbsp;</th>

                     
                   
                     </tr>
                   </thead>

                <?php
                     $_SESSION["result"]=mysqli_query($connect,"SELECT * FROM cart WHERE cart_user_id='$sess_user' ");  
                    while($row=mysqli_fetch_assoc($_SESSION["result"]))  
                    {
                              
                 ?>  
                     <tr>
                        <td><?php echo $row['cart_product_name'];?></td>
                        <td><?php echo $row["cart_product_qty"] ?></td> 
                        <td><?php echo $row['cart_product_price'] ?></td>
 
                     </tr>
                <?php
                }
                ?>
                 </table>
                 <table>
            <thead>
            <tr class="table100-head">

                      <th>Delivery Charges &nbsp; &nbsp;</th>
                      <th>Grand Total &nbsp; &nbsp;</th>
                     
                   
                     </tr>
                   </thead>
                   
                <?php
                     $_SESSION["result"]=mysqli_query($connect,"SELECT * FROM cart WHERE cart_user_id='$sess_user' ");  
                   $row=mysqli_fetch_assoc($_SESSION["result"]);  
                    
                              
                 ?>  
                     <tr>

                        <td>RM<?php echo $_SESSION["delivery"]  ?></td>
                        <td>RM<?php echo $_SESSION["grandtotal"]; ?></td>
                     </tr>
                <?php
                
                ?>
                 </table>

            
               </div>
                <div>
            <form method="post" >
                <input class="button contact_button" type="submit" name="smt" value="Pay Now"><span></span></button>
                </form>
         </div>
             </div>
            
       
            
     </div>
   </form>
              
          
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

<?php
 if(isset($_POST['smt'])){
    //order
    $fullname   = $row22['user_name'];
    $orderDate  = date("Y-m-d H:i:s");
    $address    = $row22['user_address'];
    $postcode   = $row22['user_postcode'];
    $cardnum    = $_POST['cardnumber']; 
    $bank       = $_POST['bank']; 
    $cardholder = $_POST['cardholder'];
    $expdate    = $_POST['expdate']; 
    $cvv        = $_POST['cvv'];
    $userID     = $_SESSION["id"];
    $total      = $_SESSION["grandtotal"];
    $status     = "Pending";
    //
    $valid_Fullname   = 0; 
    $valid_Address    = 0; 
    $valid_Postcode   = 0; 
    $valid_Bank       = 0;
    $valid_Cardnumber = 0; 
    $valid_Cardholder = 0;
    $valid_Expdate    = 0;
    $valid_Cvv        = 0;
     
     
    //Check Fullname
    if($fullname == '')
    {
  ?>
     <script type="text/javascript">
      document.getElementById("username_error").innerHTML = 'Please Enter Fullname';
     </script>
  <?php
  }
  else
  {
  ?>
        <script type="text/javascript">
            document.getElementById("username_error").innerHTML = ''; //&#9989;
        </script>
    <?php
        $valid_Fullname = 1;     
    }
     
    //Check address
    if($address == '')
    {
  ?>
  <script type="text/javascript">
    document.getElementById("useraddress_error").innerHTML = 'Please Enter Address';
  </script>
  <?php
  }
  else
  {
  ?>
    <script type="text/javascript">
        document.getElementById("useraddress_error").innerHTML = '';
    </script>
    <?php
    $valid_Address = 1;     
    }
     
    //Check Postcode
    if($postcode == '')
    {
  ?>
  <script type="text/javascript">
    document.getElementById("userpostcode_error").innerHTML = 'Please Enter Postcode';
  </script>
  <?php
  }
  else
  {
  ?>
    <script type="text/javascript">
        document.getElementById("userpostcode_error").innerHTML = '';
    </script>
    <?php
    $valid_Postcode = 1;     
    }
     
    //Check Bank
    if($bank == '')
    {
  ?>
  <script type="text/javascript">
    document.getElementById("bank_error").innerHTML = 'Please Select Bank';
  </script>
  <?php
  }
  else
  {
  ?>
    <script type="text/javascript">
        document.getElementById("bank_error").innerHTML = '';
    </script>
    <?php
    $valid_Bank = 1;     
    } 
     
    //Check Cardnumber
      if($cardnum == '')
    {
  ?>
     <script type="text/javascript">
      document.getElementById("cardnum_error").innerHTML = 'Please Enter Card Number';
     </script>
  <?php
  }
  else
  {
  ?>
        <script type="text/javascript">
            document.getElementById("cardnum_error").innerHTML = ''; //&#9989;
        </script>
    <?php
        $valid_Cardnumber = 1;     
    }
     
    //Check CardHolder
    if($cardholder == '')
    {
  ?>
     <script type="text/javascript">
      document.getElementById("ch_error").innerHTML = 'Please Enter Card Holder Name';
     </script>
  <?php
  }
  else
  {
  ?>
        <script type="text/javascript">
            document.getElementById("ch_error").innerHTML = ''; //&#9989;
        </script>
    <?php
        $valid_Cardholder = 1;     
    }
     
    //Check Expire Date 
     if($expdate == '')
    {
  ?>
     <script type="text/javascript">
      document.getElementById("exp_error").innerHTML = 'Please Enter Card Expire Date';
     </script>
  <?php
  }
  else
  {
  ?>
        <script type="text/javascript">
            document.getElementById("exp_error").innerHTML = ''; //&#9989;
        </script>
    <?php
        $valid_Expdate= 1;     
    }
    
    //Check CVV
      if($cvv == '')
    {
  ?>
     <script type="text/javascript">
      document.getElementById("cvv_error").innerHTML = 'Please Enter CVV';
     </script>
  <?php
  }
  else
  {
  ?>
        <script type="text/javascript">
            document.getElementById("cvv_error").innerHTML = ''; //&#9989;
        </script>
    <?php
        $valid_Cvv= 1;     
    } 
     
   
   
    
     
   
   
  
    
       
        if($valid_Fullname==1 && $valid_Postcode==1 &&  $valid_Address==1 && $valid_Bank==1 && $valid_Cardnumber==1 && $valid_Cardholder==1 && $valid_Expdate==1 &&  $valid_Cvv==1)
        {
      
           //Update Product Quantity
            $sess_user = $_SESSION["id"];
            $find = mysqli_query($connect,"SELECT * cart FROM WHERE cart_user_id ='$sess_user' ");    
            while( $row3 = mysqli_fetch_assoc($find))
            {
                $cID  = $row3["cart_product_id"];
                $cQTY = $row3["cart_Product_qty"];
                
                //Get Data From Product
                $find1 = mysqli_query($connect,"SELECT * products WHERE product_id ='$cID'");
                while( $row4  = mysqli_fetch_assoc($find1))
                {
                    $pQTY  = $row4["product_qty"];
                    //Update the quantity
                    $totalQTY =  $pQTY - $cQTY;
                }
                //mysqli_query($connect,"UPDATE product SET Quantity = '$totalQTY' WHERE Product ID = '$CID' ");

            }
               
           //users Order
            mysqli_query($connect,"INSERT INTO userorder(Order_Date,Full_Name,Ship_Address,Ship_Postcode,Bank,User_ID,Order_Price,Order_Status ) values('$orderDate','$fullname','$address','$postcode','$bank','$userID','$total','$status')");
            //Order Details
            $orderdetail=mysqli_query($connect,"SELECT * From userorder WHERE  User_ID='$userID' "); 
            while($Row=mysqli_fetch_assoc($orderdetail))
            {
                $orderID = $Row["Order_ID"]; 
            }
            //Insert Order Detail
            $sql123 = "SELECT * FROM cart where cart_user_id='$sess_user'";
            $result123 = mysqli_query($connect,$sql123);
            while($rowder = mysqli_fetch_assoc($result123))
            {
                $pro_ID     = $rowder["cart_product_id"];
                $pro_Name   = $rowder["cart_product_name"];
                $pro_qty    = $rowder["cart_product_qty"];
                $pro_price  = $rowder["cart_product_price"];
                $pro_ship   = $_SESSION["delivery"] ;    
                //
                $pro_qty    = $rowder["cart_product_qty"];
               
                mysqli_query($connect,"INSERT INTO orderdetail(Order_ID, detail_Order_Date, detail_Product_ID, detail_Product_Name, detail_Product_Quantity, detail_Product_Price, detail_Ship_Fee) values('$orderID','$orderDate','$pro_ID','$pro_Name','$pro_qty','$pro_price','$pro_ship')");
                
                
            //Update inventory
              $updateqty=mysqli_query($connect,"SELECT * FROM products WHERE product_id='$pro_ID'");
              while($qtyRow=mysqli_fetch_assoc($updateqty))
              {
                  $holdqty = $qtyRow["product_qty"];
                  $holdqty = $holdqty - $pro_qty;
                  $num =1;
                  mysqli_query($connect,"UPDATE products SET product_qty='$holdqty' WHERE product_id='$pro_ID' ");
              }

            }  
           
            
            //Delete cart item
            mysqli_query($connect,"DELETE  from cart WHERE cart_user_id='$userID' ");
            
              echo "<script type='text/javascript'>alert('Payment Successfull, You May Now View Your Order');</script>";
              echo "<script> window.location.assign('order.php'); </script>";
              //echo "<script> window.location.assign('order.php'); </script>";
            
        }
       
    
  
       
    
} 

?>