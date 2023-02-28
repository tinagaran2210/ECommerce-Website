<?php
  include("dataconnection.php");
?>

<script >
    

     function Checkid()
        {
            var id = document.getElementById("user_id");
            if(id.value != '')
            {
                document.getElementById("userid_error").innerHTML = '';
            }
        }

    function Checkname()
        {
            var name = document.getElementById("user_name");
            if(name.value != '')
            {
                document.getElementById("username_error").innerHTML = '';
            }
        }
    
    function Checkemail()
        {
            var email = document.getElementById("user_email");
            if(email.value != '')
            {
                document.getElementById("useremail_error").innerHTML = '';
            }
        }
    
     function Checkphone()
        {
            var phone = document.getElementById("user_phone");
            if(phone.value != '')
            {
                document.getElementById("userphone_error").innerHTML = '';
            }
        }
    function Checkpass()
        {
            var pass = document.getElementById("user_password");
            if(pass.value != '')
            {
                document.getElementById("userpassword_error").innerHTML = '';
            }
        }
    
    function Checkconpass()
        {
            var reppass = document.getElementById("repeat_password");
            if(reppass.value != '')
            {
                document.getElementById("reppassword_error").innerHTML = '';
            }
        }
    
   
     function Checkaddress()
        {
            var address = document.getElementById("user_address");
            if(address.value != '')
            {
                document.getElementById("useraddress_error").innerHTML = '';
            }
        }
    
     function Checkpostcode()
        {
            var postcode = document.getElementById("user_postcode");
            if(postcode.value != '')
            {
                document.getElementById("userpostcode_error").innerHTML = '';
            }
       }
        
    
//
    window.history.forward();              

  </script>

<style>

.register_container{

     width: 800px;
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


}
</style>
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
                <div class="home_title">Register<span>.</span></div>
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


    <!-- Register -->
    
    <div class="register" style="margin-top:50px;">
        <div class="container">
            <div class="row">

                <!-- Form -->
                <div class="col-lg-8 contact_col">
                    <div class="creat-account">
                        <div class="section_title" style="padding-left:0px;">Get Started</div><br>
                        <div class="register_container" style="padding-left:0px;">
                            <form method="post">
                                
                                <div style="padding-bottom:20px;">
                                        <!-- User ID -->
                                        <span>User ID  <label><span style="color:red; font-style:italic; " id="userid_error"></span></label></span>
                                        <input type="text" name="user_id" id="user_id" class="id_input" required="required" pattern="^[A-Za-z0-9_]{1,15}$" onchange="Checkid()" value="<?php if(isset($_POST["user_id"])){echo htmlentities($_POST["user_id"]);} ?>"> 
                                    </div>
                                    <div style="padding-bottom:20px;">
                                        <!-- Name -->
                                        <span>Full Name  <label><span style="color:red; font-style:italic;" id="username_error"></span></label></span>
                                        <input type="text" name="user_name" id="user_name" class="name_input" onchange="Checkname()" value="<?php if(isset($_POST["user_name"])){echo htmlentities($_POST["user_name"]);} ?>">
                                    </div>
                                    <div style="padding-bottom:20px;">
                                        <!-- Email -->
                                        <span>Email Address  <label><span style="color:red; font-style:italic;" id="useremail_error"></span></label></span>
                                        <input type="email" name="user_email" id="user_email" class="email_input" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" onchange="Checkemail()" value="<?php if(isset($_POST["user_email"])){echo htmlentities($_POST["user_email"]);} ?>" >
                                    </div>

                                    <div style="padding-bottom:20px;">
                                        <!-- Email -->
                                        <span>Phone Number  <label><span style="color:red; font-style:italic;" id="userphone_error"></span></label></span>
                                        <input type="text" name="user_phone" id="user_phone" class="phone_input" pattern="[0-9]{10,11}" onchange="Checkphone()" value="<?php if(isset($_POST["user_phone"])){echo htmlentities($_POST["user_phone"]);} ?>" >
                                    </div>
                                
                                <div style="padding-bottom:20px;">
                                        <!-- Password -->
                                        <span>Password  <label><span style="color:red; font-style:italic;" id="userpassword_error"></span></label></span>
                                        <input type="password" name="user_password" id="user_password" class="password_input" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><div id="message">
                                          <h3>Password must contain the following:</h3>
                                          <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                                          <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                                          <p id="number" class="invalid">A <b>number</b></p>
                                          <p id="length" class="invalid">Minimum <b>8 characters</b></p>
                                        </div>
                                    </div>
                                    
                                
                                <div style="padding-bottom:20px;">
                                        <!--Repeat Password -->
                                        <span>Repeat Password  <label><span style="color:red; font-style:italic;" id="reppassword_error"></span></label></span>
                                        <input type="password" name="repeat_password" id="repeat_password" class="repeat_input" onchange="Checkconpass()" value="" >
                                    </div>
                                
                                <div style="padding-bottom:20px;">
                                        <!-- Address -->
                                        <span>Address  <label><span style="color:red; font-style:italic;" id="address_error"></span></label></span>
                                        <input type="text" name="user_address" id="user_address" class="address_input" onchange="Checkaddress()" value="<?php if(isset($_POST["user_address"])){echo htmlentities($_POST["user_address"]);} ?>" >
                                    </div>
                                
                                <div style="padding-bottom:20px;">
                                        <!-- Postcode -->
                                        <span>Postcode  <label><span style="color:red; font-style:italic;" id="postcode_error"></span></label></span>
                                        <input type="text" name="user_postcode" id="user_postcode" class="postcode_input" pattern="[0-9]{5}" maxlength="5" onchange="Checkpostcode()" value="<?php if(isset($_POST["user_postcode"])){echo htmlentities($_POST["user_postcode"]);} ?>" >
                                    </div>
                                
                                <div style="padding-bottom:20px;">
                                        <!-- State -->
                                        <span>State  <label><span style="color:red; font-style:italic;" id="userstate_error"></span></label></span>

                                        <select name= "state" style="width:280px;">
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

                                
                                <div style="padding-bottom:20px;">
                                <button class="button contact_button" type="submit" name="register" value="Register"><span>Register</span></button>
                                <div class="clearfix"> </div>
              
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

                

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact.js"></script>

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
</body>
</html>



<?php
  if(isset($_POST['register']) )
    {
    $userid = $_POST["user_id"];
    $username = $_POST["user_name"];
    $email = $_POST["user_email"];
    $phone = $_POST["user_phone"];
    $password = $_POST["user_password"];
    $conpass = $_POST["repeat_password"];
    $postcode = $_POST["user_postcode"];
    $address = $_POST["user_address"];
    $state = $_POST["state"];
    $user_idvalid = 0;
    $user_namevalid = 0;
    $user_emailvalid = 0;
    $user_phonevalid = 0;
    $user_passvalid = 0;
    $user_conpassvalid = 0;
    $user_postcodevalid = 0;
    $user_address = 0;
    
    $sql = "SELECT * FROM users WHERE user_email = '$email' ";
    $result = mysqli_query($connect,$sql);
    $sql1 = "SELECT * FROM users WHERE user_id = '$userid'";
    $result1 = mysqli_query($connect,$sql1);
    
    //Check userid  
    if($userid == '')
    {
    ?>
    <script type="text/javascript">
        document.getElementById("userid_error").innerHTML = 'Please Enter User ID';
    </script>
    <?php
    }
    else
    {
    ?>
    <script type="text/javascript">
        document.getElementById("userid_error").innerHTML = ''; //&#9989;
    </script>
    <?php
    $user_idvalid = 1;     
    }

    //Check username  
    if($username == '')
    {
    ?>
    <script type="text/javascript">
        document.getElementById("username_error").innerHTML = 'Please Enter username';
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
    $user_namevalid = 1;     
    }
    //Check email
    if($email == '')
    {
    ?>
    <script type="text/javascript">
        document.getElementById("useremail_error").innerHTML = 'Please Enter Email';
    </script>
    <?php
    }
    else
    {
    ?>
    <script type="text/javascript">
        document.getElementById("useremail_error").innerHTML = '';
    </script>
    <?php
    $user_emailvalid = 1;     
    }
    //Check password
    if($password == '')
    {
    ?>
    <script type="text/javascript">
        document.getElementById("userpassword_error").innerHTML = 'Please Enter Password';
    </script>
    <?php
    }
    else
    {
    ?>
    <script type="text/javascript">
        document.getElementById("userpassword_error").innerHTML = '';
    </script>
    <?php
    $user_passvalid = 1;     
    }
    //Check confirm-password
    if($conpass ==(''))
    {
    ?>
    <script type="text/javascript">
        document.getElementById("reppassword_error").innerHTML = 'Please Enter Your Confirm Password';
    </script>
    <?php
    }
    else
    {
        if($conpass != $password)
        {
        ?>
        <script type="text/javascript">
        document.getElementById("reppassword_error").innerHTML = 'Password is not the same, Please re-enter Your Password';
        </script>
        <?php
        }
        else
        {
        ?>
        <script type="text/javascript">
        document.getElementById("reppassword_error").innerHTML = '';
        </script>
        <?php
            $user_conpassvalid = 1;
        }
    }
    //Check postcode
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
    $user_postcodevalid = 1;     
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
    $user_address = 1;     
    }

    //Check Phone
    if($phone == '')
    {
    ?>
    <script type="text/javascript">
        document.getElementById("userphone_error").innerHTML = 'Please Enter Phone Number';
    </script>
    <?php
    }
    else
    {
    ?>
    <script type="text/javascript">
        document.getElementById("userphone_error").innerHTML = '';
    </script>
    <?php
    $user_phone = 1;     
    }


    
    if($user_namevalid == 1 && $user_emailvalid == 1 && $user_passvalid == 1 && $user_conpassvalid == 1 && $user_postcodevalid == 1 && $user_address == 1 &&    $user_idvalid == 1 &&  $user_phone = 1  )  
    {
        
        if(mysqli_num_rows($result) != 0)
        {
        ?>
        <script type="text/javascript">
            alert("Email already taken.");
            //document.getElementById("username_error").innerHTML = 'Username is already existed';
        </script>
        <?php
        }
        else if(mysqli_num_rows($result1) != 0 )
        {
        ?>
        <script type="text/javascript">
            alert("User ID already taken.");
            //document.getElementById("useremail_error").innerHTML = 'Email is already existed';
        </script>
        <style>
            .user{border: 3px solid green;}
        </style>
        <?php
        }
         else
        {
               
                mysqli_query($connect,"INSERT INTO
                            users(user_id, user_name, user_pass, user_email, user_phone, user_address, user_postcode, user_state)
                            VALUES('$userid','$username','$password','$email','$phone','$address','$postcode','$state')");

             
       
             
       
        ?>
           
          <script type="text/javascript">
             alert("<?php echo 'Thank you '.$username.'.Your registration is successful';?>");
             window.location.assign('login.php'); 
          </script>
        <?php
         // $to = "$email";
         //        $subject = "EZWATCH - Registration";
         //        $message = "Dear $username \n\nThank you for registering at EZWATCH. Your Registration Email is $email. \n\nYou may log in your account with your username at EZWATCH. \n\nBest Regards,\nadmin@ezwatch.com";
         //        $headers = "From: 1161204398@student.mmu.edu.my\r\n";
                
         //        mail($to, $subject, $message, $headers);
             //echo "<script> window.location.assign('login1.php'); </script>";
        }
        
        
       mysqli_close($connect);                
    }   
   
        
     
      
      
      

      
      
  }//for submit button
?>