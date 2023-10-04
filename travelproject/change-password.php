<?php
session_start();
error_reporting(0);
include('utils/config.php');
if(strlen($_SESSION['login'])==0)
	{	
header('location:index.php');
}
else{
if(isset($_POST['submit']))
	{
$password=$_POST['password'];
$newpassword=$_POST['newpassword'];
$email=$_SESSION['login'];
	$sql ="SELECT Password FROM tblusers WHERE EmailId=:email and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
$con="update tblusers set Password=:newpassword where EmailId=:email";
$changepass = $dbh->prepare($con);
$changepass-> bindParam(':email', $email, PDO::PARAM_STR);
$changepass-> bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
$changepass->execute();
$msg="Your Password succesfully changed";
}
else {
$error="Your current password is wrong";	
  }
}

?>
<!DOCTYPE HTML>
<html>

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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
  </script>
  <link rel="stylesheet" href="./css/reset.css?v=<?php echo time(); ?>" type='text/css'>
  <link rel="stylesheet" href="./css/utils.css?v=<?php echo time(); ?>" type='text/css'>
  <link rel="stylesheet" href="./css/global.css?v=<?php echo time(); ?>" type='text/css'>
  <link rel="stylesheet" href="./css/modal.css?v=<?php echo time(); ?>" type='text/css'>
  <script>
  function validate() {
    if (document.changePass.newpassword.value != document.changePass.confirmpassword.value) {
      alert("New Password and Confirm Password Field do not match  !!");
      document.changePass.confirmpassword.focus();
      return false;
    }
    return true;
  }
  </script>
</head>

<body>
  <div class="main">
    <div class="main-top"><?php include('utils/header.php');?></div>
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img
            src="https://img.freepik.com/free-vector/happy-family-travelling-by-car-with-camping-equipment-top_74855-10751.jpg?w=1060&t=st=1670385339~exp=1670385939~hmac=e05d0b62a6fcc088644931feba527fd2211c76940e24deb7a2d664082871894b"
            alt="" />
          <h3 class="swiper-title">Data Travel</h3>
          <p class="swiper-desc">Bạn đang thay đổi password</p>
        </div>
        <div class="swiper-slide">
          <img
            src="https://img.freepik.com/free-vector/asian-rice-field-terraces-morning-mountains-landscape-paddy-plantation-cascades-farm-mount-water-channel-with-growing-plants-scenery-meadow-with-green-grass-cartoon-vector-illustration_107791-10452.jpg?w=1380&t=st=1670385360~exp=1670385960~hmac=4ddb7e53a2fc5980fe81914845bbdcf65397a13cdb6c8c2375550f5f14a1b483"
            alt="" />
          <h3 class="swiper-title">Data Travel</h3>
          <p class="swiper-desc">Hãy nhập mật khẩu chính xác</p>
        </div>
        <div class="swiper-slide">
          <img
            src="https://img.freepik.com/free-vector/rice-field-terraces-illustration_107791-5424.jpg?w=1380&t=st=1670385371~exp=1670385971~hmac=9827c6f83d19b429aeb4096ab2392a3a65cffcdb6b6e86490837e8e54d77e4bc"
            alt="" />
          <h3 class="swiper-title">Data Travel</h3>
          <p class="swiper-desc">Bảo mật tài khoản của chính mình</p>
        </div>
        <div class="swiper-slide">
          <img
            src="https://img.freepik.com/free-vector/ocean-sea-beach-nature-tranquil-landscape_33099-2248.jpg?w=1380&t=st=1670385402~exp=1670386002~hmac=4ffe88724453ee8c9cc194f4fedded8f8b24d23bdfe1681153df01d6d56a6e45"
            alt="" />
          <h3 class="swiper-title">Data Travel</h3>
          <p class="swiper-desc">Chúc bạn thành công</p>
        </div>
        <div class="swiper-slide">
          <img
            src="https://img.freepik.com/free-vector/beautiful-green-meadow-mountain-valley-cartoon_107791-15774.jpg?w=1380&t=st=1670385413~exp=1670386013~hmac=d1c59bc0537c13dcd00b286fd827183dc5b390a12d0bfd7207da71be5456d06c"
            alt="" />
          <h3 class="swiper-title">Data Travel</h3>
          <p class="swiper-desc">Bảo mật uy tín</p>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
  <main>
    <div class="form">
      <div class="form-container">
        <h3 class="form-title">Change Password</h3>
        <form action="" name="changePass" method="post" class="form" onSubmit="return validate();">
          <?php if($error){?><div class="notify notify--error">
            <strong>ERROR</strong>:<?php echo htmlentities($error); ?>
          </div><?php } 
          else if($msg){?><div class="notify notify--success">
            <strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?>
          </div><?php }?>
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
    <?php include('utils/footer.php');?>
  </main>
  <script>
  var swiper = new Swiper('.mySwiper', {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  })
  </script>
  <?php include('utils/signin.php');?>
  <?php include('utils/signup.php');?>
  <?php include('utils/write-us.php');?>
  <script src="./js/modal.js"></script>
</body>

</html>
<?php } ?>