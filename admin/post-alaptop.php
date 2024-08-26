<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
	{
header('location:index.php');
}
else{

if(isset($_POST['submit']))
  {
$laptop_Title=$_POST['laptoptitle'];
$laptop_Brand=$_POST['laptopbrand'];
$laptop_Overview=$_POST['laptopoverview'];
$laptop_PricePerDay=$_POST['laptoppriceperday'];
$laptop_OperatingSystem=$_POST['laptopoperatingsystem'];
$laptop_ModelYear=$_POST['laptopmodelyear'];
$laptop_Storage=$_POST['laptopstorage'];
$laptop_Vimage1=$_FILES["img1"]["name"];
$laptop_Vimage2=$_FILES["img2"]["name"];
$laptop_Vimage3=$_FILES["img3"]["name"];
$laptop_Vimage4=$_FILES["img4"]["name"];
$laptop_Vimage5=$_FILES["img5"]["name"];
$laptop_Fan=$_POST['laptopfan'];
$laptop_SecureBoot=$_POST['laptopsecureboot'];
$laptop_LockScreenType=$_POST['laptoplockscreentype'];
$laptop_Antivirus=$_POST['laptopantivirus'];
$laptop_PowerSafeMode=$_POST['laptoppowersafemode'];
$laptop_UserAccount=$_POST['laptopuseraccount'];
$laptop_AdministratorAcc=$_POST['laptopadministratoracc'];
$laptop_Touchscreen=$_POST['laptoptouchscreen'];
$laptop_CDplayer=$_POST['laptopcdplayer'];
$laptop_Bitlocker=$_POST['laptopbitlocker'];
$laptop_Webcam=$_POST['laptopwebcam'];
$laptop_Mouse=$_POST['laptopmouse'];
move_uploaded_file($_FILES["img1"]["tmp_name"],"img/laptopimages/".$_FILES["img1"]["name"]);
move_uploaded_file($_FILES["img2"]["tmp_name"],"img/laptopimages/".$_FILES["img2"]["name"]);
move_uploaded_file($_FILES["img3"]["tmp_name"],"img/laptopimages/".$_FILES["img3"]["name"]);
move_uploaded_file($_FILES["img4"]["tmp_name"],"img/laptopimages/".$_FILES["img4"]["name"]);
move_uploaded_file($_FILES["img5"]["tmp_name"],"img/laptopimages/".$_FILES["img5"]["name"]);

$sql="INSERT INTO tbllaptops(LaptopTitle,LaptopBrand,LaptopOveview,PricePerDay,OperatingSystem,ModelYear,Storage,Vimage1,Vimage2,Vimage3,Vimage4,Vimage5,Fan,SecureBoot,LockScreenType,Antivirus,PowerSafeMode,UserAccount,AdministratorAcc,Touchscreen,CDPlayer,Bitlocker,Webcam,Mouse) VALUES(:laptoptitle,:brand,:laptopoverview,:priceperday,:operatingsystem,:modelyear,:storage,:vimage1,:vimage2,:vimage3,:vimage4,:vimage5,:fan,:secureboot,:lockscreentype,:antivirus,:powersafemode,:useraccount,:administratoracc,:touchscreen,:cdplayer,:bitlocker,:webcam,:mouse)";
$query = $dbh->prepare($sql);
$query->bindParam(':laptoptitle',$laptop_Title,PDO::PARAM_STR);
$query->bindParam(':laptopbrand',$laptop_Brand,PDO::PARAM_STR);
$query->bindParam(':laptopoverview',$laptop_Overview,PDO::PARAM_STR);
$query->bindParam(':laptoppriceperday',$laptop_PricePerDay,PDO::PARAM_STR);
$query->bindParam(':laptopoperatingsystem',$laptop_OperatingSystem,PDO::PARAM_STR);
$query->bindParam(':laptopmodelyear',$laptop_ModelYear,PDO::PARAM_STR);
$query->bindParam(':laptopstorage',$laptop_Storage,PDO::PARAM_STR);
$query->bindParam(':laptopvimage1',$laptop_Vimage1,PDO::PARAM_STR);
$query->bindParam(':laptopvimage2',$laptop_Vimage2,PDO::PARAM_STR);
$query->bindParam(':laptopvimage3',$laptop_Vimage3,PDO::PARAM_STR);
$query->bindParam(':laptopvimage4',$laptop_Vimage4,PDO::PARAM_STR);
$query->bindParam(':laptopvimage5',$laptop_Vimage5,PDO::PARAM_STR);
$query->bindParam(':laptopfan',$laptop_Fan,PDO::PARAM_STR);
$query->bindParam(':laptopsecureboot',$laptop_Secureboot,PDO::PARAM_STR);
$query->bindParam(':laptoplockscreentype',$laptop_LockScreenType,PDO::PARAM_STR);
$query->bindParam(':laptopantivirus',$laptop_Antivirus,PDO::PARAM_STR);
$query->bindParam(':laptoppowersafemode',$laptop_PowerSafeMode,PDO::PARAM_STR);
$query->bindParam(':laptopuseraccount',$laptop_UserAccount,PDO::PARAM_STR);
$query->bindParam(':laptopadministratoracc',$laptop_AdministratorAcc,PDO::PARAM_STR);
$query->bindParam(':laptoptouchscreen',$laptop_Touchscreen,PDO::PARAM_STR);
$query->bindParam(':laptopcdplayer',$laptop_CDplayer,PDO::PARAM_STR);
$query->bindParam(':laptopbitlocker',$laptop_Bitlocker,PDO::PARAM_STR);
$query->bindParam(':laptopwebcam',$laptop_Webcam,PDO::PARAM_STR);
$query->bindParam(':laptopmouse',$laptop_Mouse,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Laptop posted successfully";
}
else
{
$error="Something went wrong. Please try again";
}

}


	?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">

	<title>Laptop Rental Portal | Admin Post Laptop</title>

	<!-- Font awesome -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- Sandstone Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Bootstrap Datatables -->
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<!-- Bootstrap social button library -->
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<!-- Bootstrap select -->
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<!-- Bootstrap file input -->
	<link rel="stylesheet" href="css/fileinput.min.css">
	<!-- Awesome Bootstrap checkbox -->
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<!-- Admin Stye -->
	<link rel="stylesheet" href="css/style.css">
<style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>

</head>

<body>
	<?php include('includes/header.php');?>
	<div class="ts-main-content">
	<?php include('includes/leftbar.php');?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12">

						<h2 class="page-title">Post A Laptop</h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Basic Info</div>
<?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php }
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>

									<div class="panel-body">
<form method="post" class="form-horizontal" enctype="multipart/form-data">
<div class="form-group">
<label class="col-sm-2 control-label">Laptop Title<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="laptoptitle" class="form-control" required>
</div>
<label class="col-sm-2 control-label">Select Brand<span style="color:red">*</span></label>
<div class="col-sm-4">
<select class="selectpicker" name="brandname" required>
<option value=""> Select </option>

<?php $ret="select brand_Id,brand_Name from tblbrands";
$query= $dbh -> prepare($ret);
//$query->bindParam(':id',$id, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
foreach($results as $result)
{
?>
<option value="<?php echo htmlentities($result->id);?>"><?php echo htmlentities($result->brand_Name);?></option>
<?php }} ?>

</select>
</div>
</div>

<div class="hr-dashed"></div>
<div class="form-group">
<label class="col-sm-2 control-label">Laptop Overview<span style="color:red">*</span></label>
<div class="col-sm-10">
<textarea class="form-control" name="laptopoverview" rows="3" required></textarea>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Price Per Day(in USD)<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="priceperday" class="form-control" required>
</div>
<label class="col-sm-2 control-label">Select Operating System<span style="color:red">*</span></label>
<div class="col-sm-4">
<select class="selectpicker" name="operatingsystem" required>
<option value=""> Select </option>

<option value="Windows">Windows</option>
<option value="macOS Monterey">macOS Monterey</option>
<option value="Ubuntu">Ubuntu</option>
</select>
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Model Year<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="modelyear" class="form-control" required>
</div>
<label class="col-sm-2 control-label">Storage<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="storage" class="form-control" required>
</div>
</div>
<div class="hr-dashed"></div>


<div class="form-group">
<div class="col-sm-12">
<h4><b>Upload Images</b></h4>
</div>
</div>


<div class="form-group">
<div class="col-sm-4">
Image 1 <span style="color:red">*</span><input type="file" name="img1" required>
</div>
<div class="col-sm-4">
Image 2<span style="color:red">*</span><input type="file" name="img2" required>
</div>
<div class="col-sm-4">
Image 3<span style="color:red">*</span><input type="file" name="img3" required>
</div>
</div>


<div class="form-group">
<div class="col-sm-4">
Image 4<span style="color:red">*</span><input type="file" name="img4" required>
</div>
<div class="col-sm-4">
Image 5<input type="file" name="img5">
</div>

</div>
<div class="hr-dashed"></div>
</div>
</div>
</div>
</div>


<div class="row">
<div class="col-md-12">
<div class="panel panel-default">
<div class="panel-heading">Accessories</div>
<div class="panel-body">



<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="lockscreentype" name="lockscreentype" value="1">
<label for="lockscreentype"> Lock Screen Type </label>
</div></div>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="antivirus" name="antivirus" value="1">
<label for="antivirus"> Antivirus </label>
</div>
</div>



<div class="form-group">
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="powersafemode" name="powersafemode" value="1">
<input type="checkbox" id="powersafemode" name="powersafemode" value="1">
<label for="inlineCheckbox5"> Power Safe Mode </label>
</div>
</div>


<div class="col-sm-3">
<div class="checkbox h checkbox-inline">
<input type="checkbox" id="bitlocker" name="bitlocker" value="1">
<label for="bitlocker">Bitlocker</label>
</div></div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="webcam" name="webcam" value="1">
<label for="webcam"> Webcam </label>
</div></div>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="mouse" name="mouse" value="1">
<label for="mouse"> Mouse </label>
</div>
</div>
</div>




											<div class="form-group">
												<div class="col-sm-8 col-sm-offset-2">
													<button class="btn btn-default" type="reset">Cancel</button>
													<button class="btn btn-primary" name="submit" type="submit">Save changes</button>
												</div>
											</div>

										</form>
									</div>
								</div>
							</div>
						</div>



					</div>
				</div>



			</div>
		</div>
	</div>

	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
<?php } ?>
