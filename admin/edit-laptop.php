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
$laptop_Id=intval($_GET['id']);

$sql="update tbllaptops set laptop_Title=:laptoptitle,laptop_Brand=:brand,laptop_Overview=:laptopoverview,laptop_PricePerDay=:laptoppriceperday,laptop_OperatingSystem=:laptopoperatingsystem,laptop_ModelYear=:laptopmodelyear,laptop_Storage=:laptopstorage,laptop_Fan=:laptopfan,laptop_SecureBoot=:laptopsecureboot,laptop_LockScreenType=:laptoplockscreentype,laptop_Antivirus=:laptopantivirus,laptop_PowerSafe=:laptoppowersafe,laptop_UserAccount=:laptopuseraccount,laptop_AdministratorAcc=:laptopadministratoracc,laptop_Touchscreen=:laptoptouchscreen,laptop_CDPlayer=:laptopcdplayer,laptop_Bitlocker=:laptopbitlocker,laptop_Webcam=:laptopwebcam,laptop_Mouse=:laptopmouse where laptop_Id=:id ";
$query = $dbh->prepare($sql);
$query->bindParam(':laptoptitle',$laptop_Title,PDO::PARAM_STR);
$query->bindParam(':brand',$laptop_Brand,PDO::PARAM_STR);
$query->bindParam(':laptopoverview',$laptop_Overview,PDO::PARAM_STR);
$query->bindParam(':laptoppriceperday',$laptop_PricePerDay,PDO::PARAM_STR);
$query->bindParam(':laptopoperatingsystem',$laptop_OperatingSystem,PDO::PARAM_STR);
$query->bindParam(':laptopmodelyear',$laptop_ModelYear,PDO::PARAM_STR);
$query->bindParam(':laptopstorage',$laptop_Storage,PDO::PARAM_STR);
$query->bindParam(':laptopfan',$laptop_Fan,PDO::PARAM_STR);
$query->bindParam(':laptopsecureboot',$laptop_SecureBoot,PDO::PARAM_STR);
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
$query->bindParam(':id',$laptop_Id,PDO::PARAM_STR);
$query->execute();

$msg="Data updated successfully";


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

	<title>Laptop Rental Portal | Admin Edit Laptop Info</title>

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

						<h2 class="page-title">Edit Laptop</h2>

						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">Basic Info</div>
									<div class="panel-body">
<?php if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php } ?>
<?php
$id=intval($_GET['id']);
$sql ="SELECT tbllaptops.*,tblbrands.brand_Name,tblbrands.brand_Id as bid from tbllaptops join tblbrands on tblbrands.brand_Id=tbllaptops.laptop_Brand where tbllaptops.brand_Id=:id";
$query = $dbh -> prepare($sql);
$query-> bindParam(':id', $id, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>

<form method="post" class="form-horizontal" enctype="multipart/form-data">
<div class="form-group">
<label class="col-sm-2 control-label">Laptop Title<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="laptoptitle" class="form-control" value="<?php echo htmlentities($result->LaptopTitle)?>" required>
</div>
<label class="col-sm-2 control-label">Select Brand<span style="color:red">*</span></label>
<div class="col-sm-4">
<select class="selectpicker" name="brandname" required>
<option value="<?php echo htmlentities($result->bid);?>"><?php echo htmlentities($bdname=$result->BrandName); ?> </option>
<?php $ret="select brand_Id,brand_Name from tblbrands";
$query= $dbh -> prepare($ret);
//$query->bindParam(':id',$id, PDO::PARAM_STR);
$query-> execute();
$resultss = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
foreach($resultss as $results)
{
if($results->brand_Name==$bdname)
{
continue;
} else{
?>
<option value="<?php echo htmlentities($results->id);?>"><?php echo htmlentities($results->brand_Name);?></option>
<?php }}} ?>

</select>
</div>
</div>

<div class="hr-dashed"></div>
<div class="form-group">
<label class="col-sm-2 control-label">Laptop Overview<span style="color:red">*</span></label>
<div class="col-sm-10">
<textarea class="form-control" name="laptopoverview" rows="3" required><?php echo htmlentities($result->LaptopOverview);?></textarea>
</div>
</div>

<div class="form-group">
<label class="col-sm-2 control-label">Price Per Day(in KSH)<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="priceperday" class="form-control" value="<?php echo htmlentities($result->laptop_PricePerDay);?>" required>
</div>
<label class="col-sm-2 control-label">Select Operating System<span style="color:red">*</span></label>
<div class="col-sm-4">
<select class="selectpicker" name="operatingsystem" required>
<option value="<?php echo htmlentities($results->laptop_OperatingSystem);?>"> <?php echo htmlentities($result->laptop_OperatingSystem);?> </option>

<option value="Windows">Windows</option>
<option value="Ubuntu">Ubuntu</option>
<option value="macOS Monterey">macOS Monterey</option>
</select>
</div>
</div>


<div class="form-group">
<label class="col-sm-2 control-label">Model Year<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="modelyear" class="form-control" value="<?php echo htmlentities($result->laptop_ModelYear);?>" required>
</div>
<label class="col-sm-2 control-label">Storage<span style="color:red">*</span></label>
<div class="col-sm-4">
<input type="text" name="storage" class="form-control" value="<?php echo htmlentities($result->laptop_Storage);?>" required>
</div>
</div>
<div class="hr-dashed"></div>
<div class="form-group">
<div class="col-sm-12">
<h4><b>Laptop Images</b></h4>
</div>
</div>


<div class="form-group">
<div class="col-sm-4">
Image 1 <img src="img/laptopimages/<?php echo htmlentities($result->laptop_Vimage1);?>" width="300" height="200" style="border:solid 1px #000">
<a href="changeimage1.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 1</a>
</div>
<div class="col-sm-4">
Image 2<img src="img/laptopimages/<?php echo htmlentities($result->laptop_Vimage2);?>" width="300" height="200" style="border:solid 1px #000">
<a href="changeimage2.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 2</a>
</div>
<div class="col-sm-4">
Image 3<img src="img/laptopimages/<?php echo htmlentities($result->laptop_Vimage3);?>" width="300" height="200" style="border:solid 1px #000">
<a href="changeimage3.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 3</a>
</div>
</div>


<div class="form-group">
<div class="col-sm-4">
Image 4<img src="img/laptopimages/<?php echo htmlentities($result->laptop_Vimage4);?>" width="300" height="200" style="border:solid 1px #000">
<a href="changeimage4.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 4</a>
</div>
<div class="col-sm-4">
Image 5
<?php if($result->Vimage5=="")
{
echo htmlentities("File not available");
} else {?>
<img src="img/laptopimages/<?php echo htmlentities($result->laptop_Vimage5);?>" width="300" height="200" style="border:solid 1px #000">
<a href="changeimage5.php?imgid=<?php echo htmlentities($result->id)?>">Change Image 5</a>
<?php } ?>
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


<div class="form-group">
<div class="col-sm-3">
<?php if($result->laptop_Fan==1)
{?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="fan" checked value="1">
<label for="inlineCheckbox1"> fan </label>
</div>
<?php } else { ?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="fan" value="1">
<label for="inlineCheckbox1"> fan </label>
</div>
<?php } ?>
</div>
<div class="col-sm-3">
<?php if($result->laptop_SecureBoot==1)
{?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="secureboot" checked value="1">
<label for="inlineCheckbox2"> SecureBoot </label>
</div>
<?php } else {?>
<div class="checkbox checkbox-success checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="secureboot" value="1">
<label for="inlineCheckbox2"> SecureBoot </label>
</div>
<?php }?>
</div>
<div class="col-sm-3">
<?php if($result->laptop_LockScreenType==1)
{?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="lockscreentype" checked value="1">
<label for="inlineCheckbox3"> Lock Screen Type </label>
</div>
<?php } else {?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="lockscreentype" value="1">
<label for="inlineCheckbox3"> Lock Screen Type </label>
</div>
<?php } ?>
</div>
<div class="col-sm-3">
<?php if($result->laptop_Antivirus==1)
{
	?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="Antivirust" checked value="1">
<label for="inlineCheckbox3"> Antivirus </label>
</div>
<?php } else {?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="Antivirust" value="1">
<label  for="inlineCheckbox3"> Antivirus </label>
</div>
<?php } ?>
</div>

<div class="form-group">
<?php if($result->laptop_PowerSafeMode==1)
{
	?>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="powersafemode" checked value="1">
<label for="inlineCheckbox1"> PowerSafeMode </label>
</div>
<?php } else {?>
<div class="col-sm-3">
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="powersafemode" value="1">
<label for="inlineCheckbox1"> PowerSafeMode </label>
</div>
<?php } ?>
</div>
<div class="col-sm-3">
<?php if($result->laptop_UserAccount==1)
{
?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="useraccount" checked value="1">
<label for="inlineCheckbox2">UserAccount</label>
</div>
<?php } else { ?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="useraccount" value="1">
<label for="inlineCheckbox2">UserAccount</label>
<?php } ?>
</div>
<div class="col-sm-3">
<?php if($result->laptop_AdministratorAcc==1)
{
?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="administratoracc" checked value="1">
<label for="inlineCheckbox3"> AdministratorAcc </label>
</div>
<?php } else { ?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="administratoracc" value="1">
<label for="inlineCheckbox3"> AdministratorAcc </label>
</div>
<?php } ?>
</div>
<div class="col-sm-3">
<?php if($result->laptop_TouchScreen==1)
{
?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="touchscreen" checked value="1">
<label for="inlineCheckbox3"> TouchScreen </label>
</div>
<?php } else { ?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="touchscreen" value="1">
<label for="inlineCheckbox3"> TouchScreen </label>
</div>
<?php } ?>
</div>


<div class="form-group">
<div class="col-sm-3">
<?php if($result->laptop_CDPlayer==1)
{
?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="cdplayer" checked value="1">
<label for="inlineCheckbox1"> CD Player </label>
</div>
<?php } else {?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="cdplayer" value="1">
<label for="inlineCheckbox1"> CD Player </label>
</div>
<?php } ?>
</div>
<div class="col-sm-3">
<?php if($result->laptop_Bitlocker==1)
{
?>
<div class="checkbox  checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="bitlocker" checked value="1">
<label for="inlineCheckbox2">Bitlocker</label>
</div>
<?php } else { ?>
<div class="checkbox checkbox-success checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="bitlocker" value="1">
<label for="inlineCheckbox2">Bitlocker</label>
</div>
<?php } ?>
</div>
<div class="col-sm-3">
<?php if($result->laptop_Webcam==1)
{
?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="webcam" checked value="1">
<label for="inlineCheckbox3"> Web Cam </label>
</div>
<?php } else {?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="webcam" value="1">
<label for="inlineCheckbox3"> Web Cam </label>
</div>
<?php } ?>
</div>
<div class="col-sm-3">
<?php if($result->laptop_Mouse==1)
{
?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="mouse" checked value="1">
<label for="inlineCheckbox3"> Mouse </label>
</div>
<?php } else { ?>
<div class="checkbox checkbox-inline">
<input type="checkbox" id="inlineCheckbox1" name="mouse" value="1">
<label for="inlineCheckbox3"> Mouse </label>
</div>
<?php } ?>
</div>
</div>

<?php }} ?>


											<div class="form-group">
												<div class="col-sm-8 col-sm-offset-2" >

													<button class="btn btn-primary" name="submit" type="submit" style="margin-top:4%">Save changes</button>
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
