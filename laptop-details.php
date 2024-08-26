<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(isset($_POST['submit'])) 
{
$booking_FromDate=$_POST['fromdate'];
$booking_ToDate=$_POST['todate'];
$booking_Message=$_POST['message'];
$user_Email=$_SESSION['login'];
$booking_Status=0;
$laptop_Id=$_GET['lpid'];
$sql="INSERT INTO  tblbooking(user_Email,laptop_Id,booking_FromDate,booking_ToDate,booking_Message,booking_Status) VALUES(:useremail,:lpid,:fromdate,:todate,:message,:status)";
$query = $dbh->prepare($sql);
$query->bindParam(':useremail',$user_Email,PDO::PARAM_STR);
$query->bindParam(':lpid',$laptop_Id,PDO::PARAM_STR);
$query->bindParam(':fromdate',$booking_FromDate,PDO::PARAM_STR);
$query->bindParam(':todate',$booking_ToDate,PDO::PARAM_STR);
$query->bindParam(':message',$booking_Message,PDO::PARAM_STR);
$query->bindParam(':status',$booking_Status,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script>alert('Booking successfull.');</script>";
}
else
{
echo "<script>alert('Something went wrong. Please try again');</script>";
}

}

?>


<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Laptop Rental Portal | Laptop Details</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<!--Custome Style -->
<link rel="stylesheet" href="assets/css/styles.css" type="text/css">
<!--OWL Carousel slider-->
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<!--slick-slider -->
<link href="assets/css/slick.css" rel="stylesheet">
<!--bootstrap-slider -->
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<!--FontAwesome Font Style -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet">

<!-- SWITCHER -->
		<link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/24x24.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
</head>
<body>

<!-- Start Switcher -->
<?php include('includes/colorswitcher.php');?>
<!-- /Switcher -->

<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header -->

<!--Listing-Image-Slider-->

<?php
$laptop_Id=intval($_GET['lpid']);
$sql = "SELECT tbllaptops.*,tblbrands.brand_Name,tblbrands.brand_Id as bid  from tbllaptops join tblbrands on tblbrands.brand_Id=tbllaptops.laptop_Brand where tbllaptops.laptop_Id=:lpid";
$query = $dbh -> prepare($sql);
$query->bindParam(':lpid',$laptop_Id, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{
$_SESSION['brndid']=$result->bid;
?>

<section id="listing_img_slider">
  <div><img src="admin/img/laptopimages/<?php echo htmlentities($result->laptop_Vimage1);?>" class="img-responsive" alt="image" width="900" height="560"></div>
  <div><img src="admin/img/laptopimages/<?php echo htmlentities($result->laptop_Vimage2);?>" class="img-responsive" alt="image" width="900" height="560"></div>
  <div><img src="admin/img/laptopimages/<?php echo htmlentities($result->laptop_Vimage3);?>" class="img-responsive" alt="image" width="900" height="560"></div>
  <div><img src="admin/img/laptopimages/<?php echo htmlentities($result->laptop_Vimage4);?>" class="img-responsive"  alt="image" width="900" height="560"></div>
  <?php if($result->laptop_Vimage5=="")
{

} else {
  ?>
  <div><img src="admin/img/laptopimages/<?php echo htmlentities($result->laptop_Vimage5);?>" class="img-responsive" alt="image" width="900" height="560"></div>
  <?php } ?>
</section>
<!--/Listing-Image-Slider-->


<!--Listing-detail-->
<section class="listing-detail">
  <div class="container">
    <div class="listing_detail_head row">
      <div class="col-md-9">
        <h2><?php echo htmlentities($result->brand_Name);?> , <?php echo htmlentities($result->laptop_Title);?></h2>
      </div>
      <div class="col-md-3">
        <div class="price_info">
          <p>$<?php echo htmlentities($result->laptop_PricePerDay);?> </p>Per Day

        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-9">
        <div class="main_features">
          <ul>

            <li> <i class="fa fa-calendar" aria-hidden="true"></i>
              <h5><?php echo htmlentities($result->laptop_ModelYear);?></h5>
              <p>Year</p>
            </li>
            <li> <i class="fa fa-cogs" aria-hidden="true"></i>
              <h5><?php echo htmlentities($result->laptop_OperatingSystem);?></h5>
              <p>Operating System</p>
            </li>

            <li> <i class="fa fa-user-plus" aria-hidden="true"></i>
              <h5><?php echo htmlentities($result->laptop_Storage);?></h5>
              <p>storage</p>
            </li>
          </ul>
        </div>
        <div class="listing_more_info">
          <div class="listing_detail_wrap">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs gray-bg" role="tablist">
              <li role="presentation" class="active"><a href="#laptop-overview " aria-controls="laptop-overview" role="tab" data-toggle="tab">Laptop Overview</a></li>

              <li role="presentation"><a href="#accessories" aria-controls="accessories" role="tab" data-toggle="tab">Accessories</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <!-- laptop-overview -->
              <div role="tabpanel" class="tab-pane active" id="laptop-overview">

                <p><?php echo htmlentities($result->laptop_Overview);?></p>
              </div>


              <!-- Accessories -->
              <div role="tabpanel" class="tab-pane" id="accessories">
                <!--Accessories-->
                <table>
                  <thead>
                    <tr>
                      <th colspan="2">Accessories</th>
                    </tr>
                  </thead>
                  <tbody>


<tr>
<td>Lock Screen Type (LST)</td>
<?php if($result->laptop_LockScreenType==1)
{
?>
<td><i class="fa fa-check" aria-hidden="true"></i></td>
<?php } else {?>
<td><i class="fa fa-close" aria-hidden="true"></i></td>
<?php } ?>
                    </tr>

<tr>
<td>Smooth Handling</td>
<?php if($result->laptop_PowerSafeMode==1)
{
?>
<td><i class="fa fa-check" aria-hidden="true"></i></td>
<?php } else { ?>
<td><i class="fa fa-close" aria-hidden="true"></i></td>
<?php } ?>
</tr>





<tr>
<td>Mouse</td>
<?php if($result->laptop_Mouse==1)
{
?>
<td><i class="fa fa-check" aria-hidden="true"></i></td>
<?php } else { ?>
<td><i class="fa fa-close" aria-hidden="true"></i></td>
<?php } ?>
</tr>

<tr>
<td>Bitlocker</td>
<?php if($result->laptop_Bitlocker==1)
{
?>
<td><i class="fa fa-check" aria-hidden="true"></i></td>
<?php } else { ?>
<td><i class="fa fa-close" aria-hidden="true"></i></td>
<?php } ?>
</tr>

<td>Antivirus</td>
<?php if($result->laptop_Antivirus==1)
{
?>
<td><i class="fa fa-check" aria-hidden="true"></i></td>
<?php  } else { ?>
<td><i class="fa fa-close" aria-hidden="true"></i></td>
<?php } ?>
</tr>


<tr>
<td>Crash Sensor</td>
<?php if($result->laptop_Webcam==1)
{
?>
<td><i class="fa fa-check" aria-hidden="true"></i></td>
<?php } else { ?>
<td><i class="fa fa-close" aria-hidden="true"></i></td>
<?php } ?>
</tr>

                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
<?php }} ?>

      </div>

      <!--Side-Bar-->
      <aside class="col-md-3">

        <div class="share_laptop">
          <p>Share: <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a> </p>
        </div>
        <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-envelope" aria-hidden="true"></i>Book Now</h5>
          </div>
          <form method="post">
            <div class="form-group">
              <input type="text" class="form-control" name="fromdate" placeholder="From Date(dd/mm/yyyy)" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="todate" placeholder="To Date(dd/mm/yyyy)" required>
            </div>
            <div class="form-group">
              <textarea rows="4" class="form-control" name="message" placeholder="Message" required></textarea>
            </div>
          <?php if($_SESSION['login'])
              {?>
              <div class="form-group">
                <input type="submit" class="btn"  name="submit" value="Book Now">
              </div>
              <?php } else { ?>
<a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Login For Book</a>

              <?php } ?>
          </form>
        </div>
      </aside>
      <!--/Side-Bar-->
    </div>

    <div class="space-20"></div>
    <div class="divider"></div>

    <!--Similar-Laptops-->
    <div class="similar-laptops">
      <h3>Similar Laptops</h3>
      <div class="row">
<?php
$bid=$_SESSION['brndid'];
$sql="SELECT tbllaptops.laptop_Title,tblbrands.brand_Name,tbllaptops.laptop_PricePerDay,tbllaptops.laptop_OperatingSystem,tbllaptops.laptop_ModelYear,tbllaptops.laptop_Id,tbllaptops.laptop_Storage,tbllaptops.laptop_Overview,tbllaptops.laptop_Vimage1 from tbllaptops join tblbrands on tblbrands.brand_Id=tbllaptops.laptop_Brand where tbllaptops.laptop_Brand=:bid";
$query = $dbh -> prepare($sql);
$query->bindParam(':bid',$bid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result) 
{ ?>
        <div class="col-md-3 grid_listing">
          <div class="product-listing-m gray-bg">
            <div class="product-listing-img"> <a href="laptop-details.php?lpid=<?php echo htmlentities($result->laptop_Id);?>"><img src="admin/img/laptopimages/<?php echo htmlentities($result->laptop_Vimage1);?>" class="img-responsive" alt="image" /> </a>
            </div>
            <div class="product-listing-content">
              <h5><a href="laptop-details.php?lpid=<?php echo htmlentities($result->laptop_Id);?>"><?php echo htmlentities($result->brand_Name);?> , <?php echo htmlentities($result->laptop_Title);?></a></h5>
              <p class="list-price">$<?php echo htmlentities($result->laptop_PricePerDay);?></p>

              <ul class="features_list">

             <li><i class="fa fa-user" aria-hidden="true"></i><?php echo htmlentities($result->laptop_Storage);?> storage</li>
                <li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo htmlentities($result->laptop_ModelYear);?> model</li>
                <li><i class="fa fa-car" aria-hidden="true"></i><?php echo htmlentities($result->laptop_OperatingSystem);?></li>
              </ul>
            </div>
          </div>
        </div>
 <?php }} ?>

      </div>
    </div>
    <!--/Similar-Laptops-->

  </div>
</section>
<!--/Listing-detail-->

<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer-->

<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top-->

<!--Login-Form -->
<?php include('includes/login.php');?>
<!--/Login-Form -->

<!--Register-Form -->
<?php include('includes/registration.php');?>

<!--/Register-Form -->

<!--Forgot-password-Form -->
<?php include('includes/forgotpassword.php');?>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/interface.js"></script>
<script src="assets/switcher/js/switcher.js"></script>
<script src="assets/js/bootstrap-slider.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>

</body>
</html>
