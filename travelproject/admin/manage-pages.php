<?php
session_start();
error_reporting(0);
include('utils/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
if($_POST['submit']=="Update")
{
	$pagetype=$_GET['type'];
	$pagedetails=$_POST['packagedetails'];
$sql = "UPDATE tblpages SET detail=:pagedetails WHERE type=:pagetype";
$query = $dbh->prepare($sql);
$query -> bindParam(':pagetype',$pagetype, PDO::PARAM_STR);
$query-> bindParam(':pagedetails',$pagedetails, PDO::PARAM_STR);
$query -> execute();
$msg="Page data updated successfully";
}
	?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manage Page</title>
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
  <link rel="stylesheet" href="./css/utils.css ?v=<?php echo time(); ?>" type='text/css'>
  <link rel="stylesheet" href="./css/main.css ?v=<?php echo time(); ?>" type='text/css'>
  <link rel="stylesheet" href="./css/formgroupglb.css ?v=<?php echo time(); ?>" type='text/css'>
  <script src="https://cdn.ckeditor.com/ckeditor5/35.3.0/classic/ckeditor.js"></script>
  <script type="text/JavaScript">
    function MM_jumpMenu(targ,selObj,restore){ 
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
  }
  </script>
</head>

<body>
  <?php include('utils/header.php');?>
  <div class="main-container">
    <div class="main-left">
      <?php include('utils/navbar.php');?>
    </div>
    <div class="main-right">
      <div class="main-navigation">
        <div class="main-navigation__item"><a href="dashboard.php">Home</a><i class="fa-solid fa-chevron-right"></i>Update
          Page Data
        </div>
      </div>
      <div class="main-content">
        <h3 class="main-heading">Update Page Data</h3>
        <?php if($error){?><div class="notify notify--error">
          <strong>ERROR</strong>:<?php echo htmlentities($error); ?>
        </div><?php } 
				else if($msg){?><div class="notify notify--success"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?>
        </div><?php }?>
        <div class="main-form">
          <form class="form-control" name="package" action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <div class="form-row">
                <label for="" class="form-label form-label--select">Select page: </label>
                <div class="col-sm-8">
                  <select name="selectitem" onChange="MM_jumpMenu('parent',this,0)">
                    <option value="" selected="selected" class="form-control">Select One</option>
                    <option value="manage-pages.php?type=terms">Terms and condition</option>
                    <option value="manage-pages.php?type=privacy">Privacy and policy</option>
                    <option value="manage-pages.php?type=aboutus">About us</option>
                    <option value="manage-pages.php?type=contact">Contact us</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <label for="" class="form-label form-label--select">The page you selected: </label>
                <div class="form-select">
                  <?php
                    switch($_GET['type'])
                    {
                      case "terms" :
                                echo "Terms and Conditions";
                                break;
                
                      case "privacy" :
                                echo "Privacy And Policy";
                                break;
                
                      case "aboutus" :
                                echo "About US";
                                break;
                      case "software" :
                                echo "Offers";
                                break;
                      case "aspnet" :
                                echo "Vission And MISSION";
                                break;
                      case "objectives" :
                                echo "Objectives";
                                break;
                      case "disclaimer" :
                                echo "Disclaimer";
                                break;
                      case "vbnet" :
                                echo "Partner With Us";
                                break;
                      case "candc" :
                                echo "Super Brand";
                                break;
                      case "contact" :
                                echo "Contact Us";
                                break;
                      default :
                              echo "";
                              break;
                    }
                  ?>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="packagedetails" class="form-label">Package Details</label>
              <textarea rows="5" cols="50" name="packagedetails" id="packagedetails" placeholder="Package Details"><?php 
$pagetype=$_GET['type'];
$sql = "SELECT detail from tblpages where type=:pagetype";
$query = $dbh -> prepare($sql);
$query->bindParam(':pagetype',$pagetype,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{		
echo htmlentities($result->detail);
}}
?>
</textarea>
            </div>
            <div class="form-group form-btn">
              <button type="submit" name="submit" value="Update" id="submit" class="btn--primary btn">Update</button>
            </div>
          </form>
        </div>
      </div>
      <div class="main-footer">
        <?php include('utils/footer.php');?>
      </div>
    </div>
  </div>

  <script>
  ClassicEditor
    .create(document.querySelector('#packagedetails'))
    .catch(error => {
      console.error(error);
    });
  </script>
</body>

</html>
<?php } ?>