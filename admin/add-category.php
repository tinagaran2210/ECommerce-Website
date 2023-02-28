<?php 
include("dataconnection.php");
session_start();
?>

<html lang="en">
<head>
<title>Admin Login</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Sublime project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
<body style="font-size:20px">

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
                                        <li style="font-size: 40px;">Add Category</li>
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

                            <form method="post">
<div style="padding-bottom:20px;">   
                <span>Category Name </span>
                 <input type="text"  name="productname" value="">
            </div>

            <div style="padding-bottom:20px;"> 
                <span class="pass">Category Status</span>
                <select name ="availability">
                  <option name ="Available" value="Available">Available</option>
                  <option name ="Unavailable" value="Unavailable">Unavailable</option>
                </select>
            </div>
           

                <button class="button contact_button" type="submit" name="add" value="add"><span>Add</span></button>
                <a href="admin-dashboard.php"><button class="button contact_button" type="button" name="back" value="back"><span>Back</span></button></a>
              <p>&nbsp;</p>

            </div>
                            </form>
                        </div>
                    </div>
                </div>
</body>
</html> 
<?php 
      
    

    //  if(isset($_POST['back'])) 
    // {
    //         header("location:admin-dashboard.php");
    // }

    
    if(isset($_POST['add']) ){
        
    $name=$_POST["productname"];
    $avai=$_POST["availability"];
        
    $result1 = mysqli_query($connect,"SELECT * from category where category_name = '$name'"); 
    
    $count1=mysqli_num_rows($result1);


    
    if($count1 !=0)
    {
    ?>
        <script>
            alert("Category already exists.");
        </script>
    <?php
    }

    else if(empty($name))
    {
    ?>
        <script>
            alert("Category name cannot be empty.");
        </script>
    <?php
    }

   
    
    else
    {
        mysqli_query($connect,"INSERT INTO category(category_name,category_status)VALUES('$name','$avai')");
?>
        <script>
    alert("Record saved!");
    </script>
    
<?php
    }
}
?>
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
      
    
    if(isset($_POST['login']) ){
        
    $username = $_POST['username'];
    $password = $_POST['password'];
        
    $sql = "SELECT * FROM admin WHERE admin_name = '$username' AND admin_password='$password'";
    $result = mysqli_query($connect,$sql);
    $row = mysqli_fetch_assoc($result);
    //
  
    
        if(mysqli_num_rows($result)!=1)
        {
             echo "<script type='text/javascript'>alert('Invalid Username or Password.');</script>";
            
        }
        else{
              session_start();      
                $_SESSION["id"] = $row["admin_id"];
                $_SESSION["loggedin"] = 1;
          
         
       
                echo "<script> window.location.assign('admin-dashboard.php'); </script>";
                header('Location: admin-dashboard.php');

        
                
                
        }
    
    
        mysqli_close($connect);
        
    }

    
?>