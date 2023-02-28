<?php 
include("dataconnection.php");
session_start();
//generate report
function fetch_data()
{
  $output = '';
  
  include("dataconnection.php");
  
  $sql="SELECT * FROM userorder ORDER BY Order_ID desc"; 
  $result= mysqli_query($connect,$sql);
  
  
  while($row=mysqli_fetch_array($result))
  {
    $output .= '<tr>
      
      <td>'.$row["Order_ID"].'</td>
      <td>'.$row["Full_Name"].'</td>
      <td>'.$row["Ship_Address"].'</td>
      <td>'.$row["Order_Date"].'</td>
      <td>'.$row["Order_Price"].'</td>
      </tr>
        ';
  }
  return $output;
}
if(isset($_POST["generate_pdf"]))  
{  
      require_once('tcpdf/tcpdf.php');  
      $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
      $obj_pdf->SetCreator(PDF_CREATOR);  
      $obj_pdf->SetTitle("Generate Report");  
      $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
      $obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
      $obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
      $obj_pdf->SetDefaultMonospacedFont('helvetica');  
      $obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
      $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
      $obj_pdf->setPrintHeader(false);  
      $obj_pdf->setPrintFooter(false);  
      $obj_pdf->SetAutoPageBreak(TRUE, 10);  
      $obj_pdf->SetFont('helvetica', '', 11);  
      $obj_pdf->AddPage();  
      $content = '';  
      $content .= '  
      <h3 align="center">Report of EZWATCH SALES</h3><br /> 
      <table border="1" cellspacing="0" cellpadding="3">  
           <tr>  
                <th width="10%">Order ID</th>  
                <th width="20%">Full Name</th>    
                <th width="30%">Ship Address</th>
        <th width="10%">Order Date</th>
        <th width="30%">Grand Total</th>
           </tr>      
      '; 
    $content .= fetch_data();
      $content .= '</table>';
      $obj_pdf->writeHTML($content); 
      $obj_pdf->Output('report.pdf', 'I');
  
    
}
?>
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
<link rel="stylesheet" type="text/css" href="css/vieworder.css">
<link rel="stylesheet" type="text/css" href="css/main-viewuserorder.css">
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
                                        <li style="font-size: 40px;"View Order></li>
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

<form name="updatestatus" method="post" action="">
            
  <div class="limiter">

          
    <div class="container-table100">
      <div class="wrap-table100">
        <div class="table100">
          <table>
            <thead>
              <tr class="table100-head">
                <th class="column1">Order Detail ID</th>
                <th class="column2">Product Name</th>
                <th class="column3">Product Price</th>
                <th class="column4">Product Quantity</th>
                <th class="column5">Total Price</th>
              </tr>
            </thead>
       
            <tbody>
                        <?php
                     if(isset($_GET["view"]))
                             {
                                 
                                 $id=$_GET["orderid"];
                                 $result=mysqli_query($connect,"SELECT * FROM orderdetail WHERE Order_ID=$id"); 
                                 $d=mysqli_query($connect,"SELECT * FROM userorder WHERE Order_ID='$id'"); 
                             }
                            //Get GrandTotal
                            
                            $total=0.0;
                       
                                   
              $totalprice=0.0;
                            $num=0;    
                            while($row=mysqli_fetch_assoc($result))
                       {
                               $num++;
                                //Total Price
                                $qty=$row['detail_Product_Quantity'];
                                $price=$row['detail_Product_Price'];
                                $totalprice=$qty*$price;
                                //Grand Total
                               $ship=$row['detail_Ship_Fee'];
                                $total+=$totalprice;
                                $grand = $total +$ship;
                       ?>     

                       <tr>
                     <td class="column1"><?php echo "".$row['Order_Detail_ID']; ?></td>
                     <td class="column2"><?php echo "".$row['detail_Product_Name']; ?></td>
                     <td class="column3"><?php echo "".$row['detail_Product_Price']; ?></td>
                             <td class="column4"><?php echo "".$row['detail_Product_Quantity']; ?></td>
                             <td class="column5"><?php echo $totalprice; ?></td>
                       </tr>
                            
                 <?php
      
                       }
                 ?>
                            <tr>
                                <td class="column5" colspan="4" style="text-align:right;">Shipping Fee</td>
                                <td class="column5"><?php echo $ship;?></td>
                            </tr>
                            <tr>
                                <td class="column5" colspan="4" style="text-align:right;">Grand Total</td>
                                <td class="column5"><?php echo $grand;?></td>
                            </tr>
            </tbody>
          </table>
                    <a href="vieworder.php"><input class="backbutton" type="button" name="back" value="Back"></a>
          
            
          
        </div>
      </div>
    </div>
  </div>
        
</form>
     
</body>
</html> 
<?php 
      
    

    //  if(isset($_POST['back'])) 
    // {
    //         header("location:admin-dashboard.php");
    // }

    
    if(isset($_POST['add']) ){
        
    $name=$_POST["productname"];
    $category=$_POST["productcategory"];
    $desc=$_POST["productdesc"];
    $price=$_POST["productprice"];
    $img=$_POST["productimg"];
    $productqty=$_POST["productqty"];
    $avai=$_POST["availability"];
        
    $result1 = mysqli_query($connect,"SELECT * from products where product_name = '$name'"); 
    
    $count1=mysqli_num_rows($result1);


    
    if($count1 !=0)
    {
    ?>
        <script>
            alert("Product already exists.");
        </script>
    <?php
    }

    else if(empty($name))
    {
    ?>
        <script>
            alert("Product name cannot be empty.");
        </script>
    <?php
    }

    else if(empty($price))
    {
    ?>
        <script>
            alert("Product price cannot be empty.");
        </script>
    <?php
    }

    else if(empty($desc))
    {
    ?>
        <script>
            alert("Product description cannot be empty.");
        </script>
    <?php
    }

    else if(empty($img))
    {
    ?>
        <script>
            alert("Product image cannot be empty.");
        </script>
    <?php
    }

    else if(empty($productqty))
    {
    ?>
        <script>
            alert("Product quantity cannot be empty.");
        </script>
    <?php
    }

    
    else
    {
        mysqli_query($connect,"INSERT INTO products(product_name,product_category,product_desc,product_price,product_img,product_qty,product_status)VALUES('$name','$category','$desc','$price','$img','$productqty','$avai')");
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