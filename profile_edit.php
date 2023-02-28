<?php
  session_start();    
  include("dataconnection.php");
  if (isset($_SESSION['loggedin'])==1)
  {
      
  }
    $sess_user = $_SESSION["id"];
    $sql = "SELECT * FROM users WHERE id = '$sess_user'";
    $result = mysqli_query($connect,$sql);
    $row = mysqli_fetch_assoc($result);
    $user = $row['user_id'];

     //Back to profile page
    if(isset($_POST['back'])) 
    {
            header("location:profile.php");
    }

    //Update user profile
    if(isset($_POST['edit']))
    {
        $username = $_POST["user_name"];
        $email = $_POST["user_email"];
        $phone = $_POST["user_phone"];
        // $password = $_POST["user_password"];
        // $conpass = $_POST["repeat_password"];
        $postcode = $_POST["user_postcode"];
        $address = $_POST["user_address"];
        $state = $_POST["state"]; 
        
        mysqli_query($connect,"UPDATE users SET user_postcode='$postcode',user_address='$address',user_name='$username',user_email='$email',user_phone='$phone',user_state='$state' WHERE user_id='$user' ");
        header("location:profile.php");
    }
      $resultc=mysqli_query($connect,"SELECT COUNT(cart_id) from cart where cart_user_id ='$sess_user'");
    $rowc = mysqli_fetch_assoc($resultc);
   

?>w
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

</style>
<html lang="en">
<head>
<title>Login</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Sublime project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
<body style="font-size:20px;">

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
            <div class="home_background" style="background-image:url(images/contact.jpg)"></div>
            <div class="home_content_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content">
                                <div class="breadcrumbs">
                                    <ul>
                                        <li><a href="index.html">Home</a></li>
                                        <li>Profile</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


        
  <div class="register" style="margin-top:50px;">
        <div class="container">
            <div class="row">

                <!-- Form -->
                <div class="col-lg-8 contact_col">
                    <div class="creat-account">
                        <div class="section_title" style="padding-left:0px;">My Profile</div><br>
                        <div class="register_container">
                            <form method="post">
            <div style="padding-bottom:20px;">   
                <span>User ID </span>
                 <input type="text" style="border: none;border-color: transparent;" name="username" readonly="readonly" value="<?php echo $row['user_id']; ?>">

            </div>
            <div style="padding-bottom:20px;"> 
                <span>Full Name</span>
                 <input input type="text" name="user_name" id="user_name" class="name_input" value="<?php echo $row['user_name']; ?>"> 
            </div>
            <div style="padding-bottom:20px;"> 
                <span>Email Address</span>
                 <input type="email" name="user_email" id="user_email" class="email_input" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="<?php echo $row['user_email']; ?>" >
            </div> 
            
            <div style="padding-bottom:20px;"> 
                <span>Phone Number</span>
                 <input type="text" name="user_phone" id="user_phone" class="phone_input" pattern="[0-9]{10,11}" value="<?php echo $row['user_phone']; ?>">

            <div style="padding-bottom:20px;"> 
                <span>Postcode</span>
                 <input type="text"  name="user_postcode"  pattern="[0-9]{5}" minlength="1" maxlength="5" value="<?php echo $row['user_postcode']; ?>">
            </div> 
            <div style="padding-bottom:20px;"> 
                <span>Address</span>
                 <input type="text" name="user_address" id="user_address" class="address_input" value="<?php echo $row['user_address']; ?>" >
            </div> 
            <div style="padding-bottom:20px;"> 
                <span>State</span>
                 <select name= "state" style="width:280px;" value="<?php echo $row['user_state']; ?>">
                                        <option value="Johor">Johor</option>
                                        <option value="Kedah">Kedah</option>
                                        <option value="Kelantan">Kelantan</option>
                                        <option value="Kuala Lumpur">Kuala Lumpur</option>
                                        <option value="Labuan">Labuan</option>
                                        <option value="Malacca">Malacca</option>
                                        <option value="Negeri Sembilan">Negeri Sembilan</option>
                                        <option value="Pahang">Pahang</option>
                                        <option value="Perak">Perak</option>
                                        <option value="Perlis">Perlis</option>
                                        <option value="Penang">Penang</option>
                                        <option value="Sabah">Sabah</option>
                                        <option value="Sarawak">Sarawak</option>
                                        <option value="Selangor">Selangor</option>
                                        <option value="Terengganu">Terengganu</option>
                                        </select>
            </div>               
                <button class="button contact_button" type="submit" name="back" value="back"><span>Back</span></button>
                  <button class="button contact_button" type="submit" name="edit" value="edit"><span>Update</span></button>
               <!-- <input type="submit" name="login" value="login"> -->

            </div>
                            </form>
                        </div>
                    </div>
                </div>
        
        <div class="footer" ></div>
        <div class="container" style="margin-top:100px;margin-bottom:-200px;">
            <div class="row">
                <div class="col">
                    <div class="footer_content d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
                        <div class="footer_logo"><a href="#"><img  style ="width: 50%;"src="images/logo.png" ></a></div>
                        <div class="copyright ml-auto mr-auto"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> FONEY. All rights reserved.</div>
                        <div class="footer_social ml-lg-auto">
                            <ul>
                                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

</div>
</div>

 
</body>
</html> 