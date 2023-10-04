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
$password=$_POST['password'];
$newpassword=$_POST['newpassword'];
$username=$_SESSION['alogin'];
	$sql ="SELECT Password FROM admin WHERE UserName=:username and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':username', $username, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
  $con="update admin set Password=:newpassword where UserName=:username";
  $changepass = $dbh->prepare($con);
  $changepass-> bindParam(':username', $username, PDO::PARAM_STR);
  $changepass-> bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
  $changepass->execute();
  $msg="Your Password succesfully changed";
}
else {
  $error="Your current password is wrong";	
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Change PassWord</title>
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
  <script type="text/javascript">
  function validate() {
    if (document.package.newpassword.value != document.package.confirmpassword.value) {
      alert("New Password and Confirm Password Field do not match  !!");
      document.package.confirmpassword.focus();
      return false;
    }
    return true;
  }
  </script>
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
              class="fa-solid fa-chevron-right"></i>Change Password
          </div>
        </div>
        <div class="main-content">
          <h3 class="main-heading">Change Password</h3>
          <?php if($error){?><div class="notify notify--error">
            <strong>ERROR</strong>: <?php echo htmlentities($error); ?>
          </div><?php } 
				else if($msg){?><div class="notify notify--success"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?>
          </div><?php }?>
          <div class="main-form">
            <form class="form-control" name="package" action="" method="post" enctype="multipart/form-data">
              <div class="form-group">
                <label for="" class="form-label">Current Password: </label>
                <input type="password" name="password" id="password" class="form-input" placeholder="Current Password"
                  required>
              </div>
              <div class="form-group">
                <label for="" class="form-label">New Password: </label>
                <input type="password" name="newpassword" id="newpassword" class="form-input" placeholder="New Password"
                  required>
              </div>
              <div class="form-group">
                <label for="" class="form-label">Confirm Password: </label>
                <input type="password" name="confirmpassword" id="confirmpassword" class="form-input"
                  placeholder="Confirm Password" required>
              </div>
              <button type="submit" name="submit" class="btn btn--primary">Update</button>
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