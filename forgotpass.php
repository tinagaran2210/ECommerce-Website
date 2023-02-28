<?php 
include("dataconnection.php");
session_start();
  if (isset($_SESSION['loggedin'])==1)
  {
      
  }

  if(isset($_POST["search"]))
    {
        $valid_User = 0;
        $user       = $_POST["username"];
        $sql        = "SELECT * FROM users WHERE user_id = '$user'  ";
        $result     = mysqli_query($connect,$sql);
        $row        = mysqli_fetch_assoc($result);
        $userCheck  = $row["user_id"];
        $email      = $row["user_email"];
        if( $user=='')
        {
              echo "<script type='text/javascript'>alert('Please Enter Username.');</script>";
        }
        else
        {
            if( $userCheck == $user )
            {
               $securityCode = getSecurityCode();
               $result       = mysqli_query($connect,"UPDATE users SET reset_code = '$securityCode' WHERE user_id = '$user' ");
              
                
                $to = "$email";
                $subject = "FONEY - Forgot Password";
                $message = "Dear $user \n\nHere is your security code - $securityCode \n\nClick here to reset your password -  \n*The security code only available within 1 hour.* \n\nBest Regards,\nfoneyetp@gmail.com";
                $headers = "From: foneyetp@gmail.com\r\n";
                
                mail($to, $subject, $message, $headers);
               
                 echo "<script type='text/javascript'>alert('Reset Code Have Been Sent To Your Email,You May Now Reset Your Password.');</script>";
                echo "<script> window.location.assign('security.php'); </script>";
            }
            else
            {
                echo "<script type='text/javascript'>alert('Invalid Username.');</script>";
            }
        }
        
     
    }

?>
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
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/categories.css">
<link rel="stylesheet" type="text/css" href="styles/categories_responsive.css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
<body style="font-size:20px;">

<div class="super_container">

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
      <div class="home_background" style="background-image:url(images/categories.jpg)"></div>
      <div class="home_content_container">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="home_content">
                <div class="home_title">Forgot Password<span>.</span></div>
                <!-- <div class="home_slider_title"style="font-size: 25px;"><a href="smartphones.html">Brands</a> / Apple</div> -->
                
                <!-- <div class="home_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a ultricies metus. Sed nec molestie eros. Sed viverra velit venenatis fermentum luctus.</p></div> -->
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
                        <div class="section_title" style="padding-left:0px;">Forgot Password?</div><br>
                        <div class="section_title" style="padding-left:0px;">Please enter you username</div><br>
                        <div class="register_container">
                            <form method="post">
            <div style="padding-bottom:20px;">   
                <span>User ID </span>
                 <input type="text"  name="username" value="">
            </div>
           <!--  <div style="padding-bottom:20px;"> 
                <span class="pass">Password</span>
                <input type="password"  name="password" value="">
            </div>               -->
                <button class="button contact_button" type="submit" name="search" value="search"><span>Search</span></button>
               <!-- <input type="submit" name="login" value="login"> -->
              <p>&nbsp;</p>
         <!--   <p >   <a style="color:blue" href="forgotpass.php">Forgot Password?</a></p> -->
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
<?php
        function getSecurityCode()
        {
            $securityCode = array();
            $securityCode[] = array('count' => 3, 'characters' => 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');
            $securityCode[] = array('count' => 3, 'characters' => '0123456789');
            $securityCodes_array = array();

            foreach ($securityCode as $securityCodes) 
            {
                for ($i = 0; $i < $securityCodes['count']; $i++) 
                {
                    $securityCodes_array[] = $securityCodes['characters'][rand(0, strlen($securityCodes['characters']) - 1)];
                }
            }

            shuffle($securityCodes_array);

            return implode('', $securityCodes_array);
        }
    ?>