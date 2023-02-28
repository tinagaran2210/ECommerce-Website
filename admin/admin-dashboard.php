<?php
  session_start();    
  include("dataconnection.php");
  if (isset($_SESSION['loggedin'])==1)
  {
      $sess_admin = $_SESSION["id"];
       $sql = "SELECT * FROM admin WHERE admin_id = '$sess_admin'";
    $result = mysqli_query($connect,$sql);
    $row = mysqli_fetch_assoc($result);
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
<title>Admin Login</title>
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
<body style="font-size:20px">

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
                                        <a href="vieworder.php">Manage Orders</a>
                                
                                    </li>
                                    <li><a href="add-product.php">Add Product</a></li>
                                    <li><a href="edit-product.php" >Edit Product</a></li>
                                    <li><a href="add-category.php" >Edit Category</a></li>
                                    
                                </ul>
                            </nav>
                           
                                
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
                                        <li style="font-size: 40px;">Admin</li>
                                        <!-- <li>Login</li> -->
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
                        <div class="section_title" style="padding-left:0px;"><span>Welcome,</span>
                 <span><?php echo $row["admin_name"];?><span></div><br>
                        <div class="register_container">
                            <form method="post">

            <!-- <div style="padding-bottom:20px;"> 
                <span class="pass">Password</span>
                <input type="password"  name="password" value="">
            </div>     -->          
                <!-- <button class="button contact_button" type="submit" name="login" value="login"><span>Login</span></button> -->
               <!-- <input type="submit" name="login" value="login"> -->
       <!--        <p>&nbsp;</p>
           <p >   <a style="color:blue" href="forgotpass.php">Forgot Password?</a></p> -->
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
                           
                        </div>
                    </div>
                </div>
            </div>

</div>
</div>
</body>
</html> 
