<?php
session_start();
error_reporting(0);
include('utils/config.php');
if(isset($_POST['submit']))
	{
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$newpassword=$_POST['newpassword'];
$sql ="SELECT EmailId FROM tblusers WHERE EmailId=:email and MobileNumber=:mobile";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':mobile', $mobile, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query -> rowCount() > 0)
{
$con="update tblusers set Password=:newpassword where EmailId=:email and MobileNumber=:mobile";
$chngpwd1 = $dbh->prepare($con);
$chngpwd1-> bindParam(':email', $email, PDO::PARAM_STR);
$chngpwd1-> bindParam(':mobile', $mobile, PDO::PARAM_STR);
$chngpwd1-> bindParam(':newpassword', $newpassword, PDO::PARAM_STR);
$chngpwd1->execute();
$msg="Your Password succesfully changed";
}
else {
$error="Email id or Mobile no is invalid";	
}
}

?>
<!DOCTYPE HTML>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Password</title>
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
  <link rel="stylesheet" href="./css/main.css?v=<?php echo time(); ?>" type='text/css'>
  <script type="text/javascript">
  function validate() {
    if (document.chngpwd.newpassword.value != document.chngpwd.confirmpassword.value) {
      alert("New Password and Confirm Password Field do not match  !!");
      document.chngpwd.confirmpassword.focus();
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
          <img src="https://img.freepik.com/premium-vector/background-urban-landscape-hanoi_207954-519.jpg?w=1060"
            alt="" />
          <h3 class="swiper-title">Data Travel</h3>
          <p class="swiper-desc">Bạn quên mật khẩu</p>
        </div>
        <div class="swiper-slide">
          <img
            src="https://img.freepik.com/free-vector/vietnamese-girl-boy-red-costume_1308-20597.jpg?w=826&t=st=1670385555~exp=1670386155~hmac=eca83163942155469bf2203ad3cc1b37ac6023f6d53105e35d931a64fdf4bedb"
            alt="" />
          <h3 class="swiper-title">Data Travel</h3>
          <p class="swiper-desc">Hãy nhớ kỹ lại nó</p>
        </div>
        <div class="swiper-slide">
          <img
            src="https://img.freepik.com/premium-vector/vietnamese-woman-hold-bicycle-walk-pass-rice-field_11700-171.jpg?w=1380"
            alt="" />
          <h3 class="swiper-title">Data Travel</h3>
          <p class="swiper-desc">Bạn phải điền đúng thông tin mới có thể khôi phục</p>
        </div>
        <div class="swiper-slide">
          <img
            src="https://img.freepik.com/premium-vector/vietnamese-woman-man-ride-bicycle-pass-landmark_11700-257.jpg?w=1380"
            alt="" />
          <h3 class="swiper-title">Data Travel</h3>
          <p class="swiper-desc">Mật khẩu sẽ trả về tài khoản của bạn</p>
        </div>
        <div class="swiper-slide">
          <img
            src="https://img.freepik.com/free-vector/welcome-vietnam-landing-page-web-template_1284-24482.jpg?w=900&t=st=1670385597~exp=1670386197~hmac=32cc8026a2214dd3a65795517e30aeec4c98b6aca8270e19d53e35542d755e20"
            alt="" />
          <h3 class="swiper-title">Data Travel</h3>
          <p class="swiper-desc">Tạm biệt</p>
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
        <h3 class="form-title">Forgot Password</h3>
        <form action="" name="profile" method="post" class="form">
          <?php if($error){?><div class="notify notify--error">
            <strong>ERROR</strong>:<?php echo htmlentities($error); ?>
          </div><?php } 
          else if($msg){?><div class="notify notify--success">
            <strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?>
          </div><?php }?>

          <div class="form-group">
            <label for="" class="form-label">Email: </label>
            <input type="email" name="email" id="email" class="form-input" placeholder="Reg Email" required>
          </div>
          <div class="form-group">
            <label for="" class="form-label">Mobile: </label>
            <input type="text" name="mobile" id="mobile" class="form-input" placeholder="Mobile" required>
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

          <button type="submit" name="submit" class="btn btn--primary">Change</button>
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