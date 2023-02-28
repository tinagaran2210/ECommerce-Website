<?php
  session_start();    
  include("dataconnection.php");
  if (isset($_SESSION['loggedin'])==1)
  {
      
  }
    $sess_user = $_SESSION["id"];
    $sql = "SELECT * FROM users WHERE user_id = '$sess_user'";
    $result = mysqli_query($connect,$sql);
    $row = mysqli_fetch_assoc($result);
    $user = $row['user_id'];
    $pass = $row['user_pass'];

     //Back to profile page
    if(isset($_POST['back'])) 
    {
            header("location:profile.php");
    }

    //Update user profile
    if(isset($_POST['edit']))
    {
       $cpass = $_POST["current_pass"];
        $pass1 = $_POST["new_pass"];
        $pass2 = $_POST["newrepeat_pass"];
     if($cpass!=$pass)
     {
               echo "<script type='text/javascript'>alert('Invalid Current Password.');</script>";
     }
     else
     {
         
         if($pass1==$pass )
         {
              echo "<script type='text/javascript'>alert('New Password Can Not Be Same As Current Password.');</script>";
         }
         else if( $pass1=='' || $pass2=='')
         {
               echo "<script type='text/javascript'>alert('Please Re-Enter New Password.');</script>";
         }
         else
         {
             if($pass1!=$pass2)
             {
                  echo "<script type='text/javascript'>alert('Please Re-Enter New Password.');</script>";
             }
             else
             {
                   mysqli_query($connect,"UPDATE users SET user_pass='$pass1' WHERE user_id='$user' ");
                  echo "<script type='text/javascript'>alert('Password Updated.');</script>";
                  echo "<script> window.location.assign('profile.php'); </script>";
             }
         }
         
        
     }
        
       
      
    }
    
      
   

?>
<style>

.register_container{

     width: 50%;
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
}
</style>
<html lang="en">
<head>Change Password</title>
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

        <div class="menu_social">
            <ul>
                <li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
           
   
  <div class="men_banner">
 <div class="container"  style="margin-top: 150px;margin-left: 400px;">
      <div class="header_top">
    <div class="account-in ">
      <div class="register_container">
       <form method="post"> 
       <div class="register-top-grid" style="width:100%;text-align: center;">
      <h2 style="padding-bottom:20px;">Change Password</h2>

       <div style="padding-bottom:20px;">
                 <span>Current Password </span>
                 <input type="password" name="current_pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
       </div>
            <div style="clear:both;padding-bottom:20px;">
                 <span>New Password</span> 
                 <input type="password" name="new_pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">

            </div>
            <div style="clear:both;padding-bottom:20px;">
                 <span>Repeat New Password :</span>
                 <input type="password" name="newrepeat_pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">

                  
               
               
       <div class="clearfix" style="clear:both"> </div>
         <a class="news-letter" href="#">
        
         </a>
       </div>
       
           <div class="clearfix"> </div>
        <div >
                  <button class="button contact_button" type="submit" name="back" value="back"><span>Back</span></button>
                  <button class="button contact_button" type="submit" name="edit" value="edit"><span>Update</span></button>
                  <div class="clearfix"> </div>
          
            </div>
          
 </div>              
</form>
</div>
</div>
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

</body>
</html> 
<?php
   

?>


