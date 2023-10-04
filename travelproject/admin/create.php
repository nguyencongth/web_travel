<?php
session_start();
error_reporting(0);
include('utils/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
if(isset($_POST['submit']))
{
$pname=$_POST['packagename'];
$ptype=$_POST['packagetype'];	
$plocation=$_POST['packagelocation'];
$pprice=$_POST['packageprice'];	
$pfeatures=$_POST['packagefeatures'];
$pdetails=$_POST['packagedetails'];	
$pimage=$_FILES["packageimage"]["name"];
move_uploaded_file($_FILES["packageimage"]["tmp_name"],"packageimages/".$_FILES["packageimage"]["name"]);
$sql="INSERT INTO TblTourPackages(PackageName,PackageType,PackageLocation,PackagePrice,PackageFetures,PackageDetails,PackageImage) VALUES(:pname,:ptype,:plocation,:pprice,:pfeatures,:pdetails,:pimage)";
$query = $dbh->prepare($sql);
$query->bindParam(':pname',$pname,PDO::PARAM_STR);
$query->bindParam(':ptype',$ptype,PDO::PARAM_STR);
$query->bindParam(':plocation',$plocation,PDO::PARAM_STR);
$query->bindParam(':pprice',$pprice,PDO::PARAM_STR);
$query->bindParam(':pfeatures',$pfeatures,PDO::PARAM_STR);
$query->bindParam(':pdetails',$pdetails,PDO::PARAM_STR);
$query->bindParam(':pimage',$pimage,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Package Created Successfully";
}
else 
{
$error="Something went wrong. Please try again";
}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create Package</title>
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
              class="fa-solid fa-chevron-right"></i>Create
          </div>
        </div>
        <div class="main-content">
          <h3 class="main-heading">Create Package</h3>
          <?php if($error){?><div class="notify notify--error">
            <strong>ERROR</strong>:<?php echo htmlentities($error); ?>
          </div><?php } 
				else if($msg){?><div class="notify notify--success"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?>
          </div><?php }?>
          <div class="main-form">
            <form class="form-control" name="package" action="" method="post" enctype="multipart/form-data">
              <div class="form-row">
                <div class="form-group form-column">
                  <label for="packagename" class="form-label">Package Name</label>
                  <input type="text" class="form-input" name="packagename" id="packagename" placeholder="Create Package"
                    required>
                </div>
                <div class="form-group form-column">
                  <label for="packagetype" class="form-label">Package Type</label>
                  <input type="text" class="form-input" name="packagetype" id="packagetype" placeholder="Package Type"
                    required>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group form-column">
                  <label for="packagelocation" class="form-label">Package Location</label>
                  <input type="text" class="form-input" name="packagelocation" id="packagelocation"
                    placeholder="Package Location" required>
                </div>
                <div class="form-group form-column">
                  <label for="packageprice" class="form-label">Package Price in USD</label>
                  <input type="text" class="form-input" name="packageprice" id="packageprice"
                    placeholder="Package Price is USD" required>
                </div>
              </div>
              <div class="form-group">
                <label for="" class="form-label">Package Features</label>
                <input type="text" class="form-input" name="packagefeatures" id="packagefeatures"
                  placeholder="Package Features" required>
              </div>
              <div class="form-group">
                <label for="packagedetails" class="form-label">Package Details</label>
                <textarea name="packagedetails" id="packagedetails" rows="10" placeholder="Package Details"></textarea>
              </div>
              <div class="form-group form-file">
                <label for="packageimage" class="form-label"><i class="fa-solid fa-upload"></i></label>
                <input type="file" class="form-input" name="packageimage" id="packageimage" required>
              </div>
              <div class="form-group form-btn">
                <button type="submit" name="submit" class="btn--primary btn">Create</button>
                <button type="reset" class="btn--inverse btn">Reset</button>
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