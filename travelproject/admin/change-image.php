<?php
session_start();
error_reporting(0);
include('utils/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
	$imgid=intval($_GET['imgid']);
if(isset($_POST['submit']))
{

$pimage=$_FILES["packageimage"]["name"];
move_uploaded_file($_FILES["packageimage"]["tmp_name"],"packageimages/".$_FILES["packageimage"]["name"]);
$sql="update TblTourPackages set PackageImage=:pimage where PackageId=:imgid";
$query = $dbh->prepare($sql);

$query->bindParam(':imgid',$imgid,PDO::PARAM_STR);
$query->bindParam(':pimage',$pimage,PDO::PARAM_STR);
$query->execute();
$msg="Package Created Successfully";
}
	?>
<!DOCTYPE HTML>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Images Change</title>
  <link rel="shortcut icon"
    href="https://cdn-icons-png.flaticon.com/512/1257/1257385.png?w=740&t=st=1670319127~exp=1670319727~hmac=3df5cfb7b4b4084477c31021f476ce730b54abf3c78aacf2ff06db0c21295839"
    type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./css/reset.css?v=<?php echo time(); ?>" type='text/css'>
  <link rel="stylesheet" href="./css/global.css ?v=<?php echo time(); ?>" type='text/css'>
  <link rel="stylesheet" href="./css/main.css ?v=<?php echo time(); ?>" type='text/css'>
  <link rel="stylesheet" href="./css/utils.css ?v=<?php echo time(); ?>" type='text/css'>
  <link rel="stylesheet" href="./css/formgroupglb.css ?v=<?php echo time(); ?>" type='text/css'>

</head>

<body>
  <div class="wrapper">
    <?php include('utils/header.php');?>
    <div class="main-container">
      <div class="main-left">
        <?php include('utils/navbar.php');?>
      </div>
      <div class="main-right">
        <div class="main-navigation">
          <div class="main-navigation__item"><a href="dashboard.php">Home</a><i
              class="fa-solid fa-chevron-right"></i>Update Package Image
          </div>
        </div>
        <div class="main-content">
          <h3 class="main-heading">Update Package Image</h3>
          <?php if($error){?><div class="notify notify--error">
            <strong>ERROR</strong>:<?php echo htmlentities($error); ?>
          </div><?php } 
				else if($msg){?><div class="notify notify--success"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?>
          </div><?php }?>
          <div class="main-form">
            <form class="form-control" name="package" action="" method="post" enctype="multipart/form-data">
              <?php 
$imgid=intval($_GET['imgid']);
$sql = "SELECT PackageImage from TblTourPackages where PackageId=:imgid";
$query = $dbh -> prepare($sql);
$query -> bindParam(':imgid', $imgid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>
              <div class="form-row" style="justify-content: unset; column-gap:10px ; margin-bottom: 20px">
                <label for="packagename" class="form-label">Package Name</label>
                <img src="packageimages/<?php echo htmlentities($result->PackageImage);?>" width="200">
              </div>
              <div class="form-row form-file" style="justify-content: unset; column-gap:10px ; margin-bottom: 50px">
                <label for="packageimage" class="form-label"><i class="fa-solid fa-upload"></i></label>
                <input type="file" class="form-input" name="packageimage" id="packageimage" required>
              </div>
              <?php }} ?>
              <div class="form-group form-btn">
                <button type="submit" name="submit" class="btn--primary btn">Update</button>
              </div>
            </form>
          </div>
        </div>
        <div class="main-footer">
          <?php include('utils/footer.php');?>
        </div>
      </div>
    </div>
  </div>

</body>

</html>
<?php } ?>