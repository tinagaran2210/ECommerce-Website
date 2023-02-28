<?php
  session_start();    
 
  include("dataconnection.php");
  if (isset($_SESSION['loggedin'])==1)
  {
      
  }
   
    
    
    
      
    if(isset($_POST["confirm"]))
    {
        $email       = $_POST["email"];
        $code        = $_POST["code"];
        $pass1       = $_POST["pass1"];
        $pass2       = $_POST["pass2"];
        $sql         = "SELECT * FROM users WHERE user_email='$email' ";
        $result      = mysqli_query($connect,$sql);
        $row         = mysqli_fetch_assoc($result);
        $emailCheck  = $row["user_email"];
        $codeCheck   = $row["reset_code"]; 
        //
        $validEmail  = 0;
        $validCode   = 0;
        $validPass   = 0;
       
 
        //Check Email
        if( $email != $emailCheck)
        {
	         echo "<script type='text/javascript'>alert('Invalid Email.');</script>";
        }
        else
        {
             $validEmail = 1;
             //Check Security Code
            if( $code != $codeCheck)
            {
                echo "<script type='text/javascript'>alert('Invalid Security Code.');</script>";
            }
            else
            {
                $validCode = 1;
            }
            
        }
       
        
       
        
      
        if($pass1 != $pass2 || $pass1 =='')
        {
             echo "<script type='text/javascript'>alert('New Password Does Not Matched.');</script>";
        }
        else
        {
             $validPass   = 1;
           
        }
 
        
        if($validEmail == 1 && $validCode == 1 && $validPass == 1)
        {
           
               mysqli_query($connect,"UPDATE users SET user_pass = '$pass1' WHERE user_email='$email' ");
                echo "<script type='text/javascript'>alert('Password Updated, You May Log In Now.');</script>";
               echo "<script> window.location.assign('login.php'); </script>";

        }
        
        
        
        
     
    }

?>
<script>
 function Checkname()
    {
        var name = document.getElementById("security");
        if(name.value != '')
        {
            document.getElementById("security_error").innerHTML = '';
        }
    }    
</script>

<style>

/* The message box is shown when the user clicks on the password field */
#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  padding: 20px;
  margin-top: 10px;
  width:100%;

}

#message p {
  padding: 10px 35px;
  font-size: 15px;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" icon when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 300px;
  font-size: 18px;
  margin-left:0px;
    
}



.button:hover, a:hover {
  opacity: 0.7;
}
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
    
    <!-- Home -->

     <div class="home">
    <div class="home_container">
      <div class="home_background" style="background-image:url(images/categories.jpg)"></div>
      <div class="home_content_container">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="home_content">
                <div class="home_title">Reset Password<span>.</span></div>
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
                        <div class="section_title" style="padding-left:0px;">Security Code</div><br>
                        <div class="section_title" style="padding-left:0px;">Please enter the security code</div><br>
                        <div class="register_container">
                            <form method="post">
                  <div style="padding-bottom:20px;">   
                <span>Email </span>
                 <input type="email"  name="email" value="">
            </div>
            <div style="padding-bottom:20px;">   
                <span>Security Code </span>
                 <input type="text"  name="code" value="">
            </div>
            <div style="padding-bottom:20px;">   
                <span>New Password  <label><span style="color:red; font-style:italic;" id="userpassword_error"></span></label></span>
                 <input type="password" name="pass1" id="user_password" class="password_input" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                 <div id="message">
                 <h3>Password must contain the following:</h3>
                <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                <p id="number" class="invalid">A <b>number</b></p>
                <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                </div>
            </div>
            <div style="padding-bottom:20px;">   
                <span>Confirm New Password </span>
                 <input type="password"  name="pass2" value="">
            </div>
           <!--  <div style="padding-bottom:20px;"> 
                <span class="pass">Password</span>
                <input type="password"  name="password" value="">
            </div>               -->
                <button class="button contact_button" type="submit" name="confirm" value="confirm"><span>Confirm</span></button>
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
                               
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

</div>
</div>

 
</body>
</html> 

<script>
var myInput = document.getElementById("user_password");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) { 
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
}

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) { 
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) { 
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }

  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>