<?php
session_start();
error_reporting(0);
include('utils/config.php');
?>
<!DOCTYPE HTML>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thank-you</title>
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
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
  <link rel="stylesheet" href="./css/reset.css?v=<?php echo time(); ?>" type='text/css'>
  <link rel="stylesheet" href="./css/utils.css?v=<?php echo time(); ?>" type='text/css'>
  <link rel="stylesheet" href="./css/global.css?v=<?php echo time(); ?>" type='text/css'>
  <link rel="stylesheet" href="./css/modal.css?v=<?php echo time(); ?>" type='text/css'>
</head>

<body>
  <div class="main">
    <div class="main-top"><?php include('utils/header.php');?></div>
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img
            src="https://img.freepik.com/free-photo/traveler-asian-couple-direction-location-map-bangkok-thailand_7861-1458.jpg?w=996&t=st=1670386252~exp=1670386852~hmac=d094015542b3313ea752284a3400b617daaf9c9114b57ad78880d9c6d84871ba"
            alt="" />
          <h3 class="swiper-title">Data Travel</h3>
          <p class="swiper-desc">Cảm ơn bạn đã đăng ký tài khoản</p>
        </div>
        <div class="swiper-slide">
          <img
            src="https://img.freepik.com/free-photo/traveler-asian-woman-traveling-walking-bangkok-thailand_7861-1292.jpg?w=996&t=st=1670386265~exp=1670386865~hmac=704a477a2c09feed4e88e29200b2fd94ca25a73bb3dd8aa8be41ef4cf8b01d90"
            alt="" />
          <h3 class="swiper-title">Data Travel</h3>
          <p class="swiper-desc">Cảm ơn bạn đã tin tưởng</p>
        </div>
        <div class="swiper-slide">
          <img
            src="https://img.freepik.com/free-photo/asian-blogger-couple-travel-bangkok-thailand_7861-1306.jpg?w=996&t=st=1670386280~exp=1670386880~hmac=5185109c072ec5b96f6abac06606b96869430f5fe1ab3ea653b4e62cc3eda3dc"
            alt="" />
          <h3 class="swiper-title">Data Travel</h3>
          <p class="swiper-desc">Xin chào quý khách</p>
        </div>
        <div class="swiper-slide">
          <img
            src="https://img.freepik.com/free-photo/traveler-asian-woman-traveling-walking-bangkok-thailand_7861-1291.jpg?w=996&t=st=1670386299~exp=1670386899~hmac=07a9f3f5192af0bb5b5d624884330f7c6240014551e5af4bf9f77e86c15cbed6"
            alt="" />
          <h3 class="swiper-title">Data Travel</h3>
          <p class="swiper-desc">Tạm biệt quý khách</p>
        </div>
        <div class="swiper-slide">
          <img
            src="https://img.freepik.com/free-photo/traveler-asian-couple-using-camera-take-picture-while-spending-holiday-trip-bangkok-thailand_7861-1316.jpg?w=996&t=st=1670386290~exp=1670386890~hmac=479561d92a0f5b670a93cd94ee926de6467a5fa002a680dbc0a9c5e5b348d570"
            alt="" />
          <h3 class="swiper-title">Data Travel</h3>
          <p class="swiper-desc">Hẹn gặp lại</p>
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
        <h3 class="form-title">Confirmation</h3>
        <?php if(isset($_SESSION['msgok'])){ ?>
        <p class="form-notification"> <?php echo htmlentities($_SESSION['msgok']);?></p>
        <?php } else { ?>
        <p style="font-size: 30px; color: red;"> <?php echo htmlentities($_SESSION['msgfa']);?></p>
        <?php
         unset($_SESSION['msgfa']);
         unset($_SESSION['msgok']);
        }
        ?>
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
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
  <script type="text/javascript">
  const toast = {
    success(mess) {
      Toastify({
        text: mess,
        duration: 5000,
        close: true,
        gravity: 'top',
        position: 'right',
        style: {
          background: '#4caf50',
        },
      }).showToast()
    },
    error(mess) {
      Toastify({
        text: mess,
        duration: 5000,
        close: true,
        gravity: 'top',
        position: 'right',
        style: {
          background: '#ef5350',
        },
      }).showToast()
    },
  }
  <?php if($_SESSION['msgsssu']) {?>
  toast.success("<?php echo $_SESSION['msgsssu'];?>");
  <?php unset($_SESSION['msgsssu']); } else if($_SESSION['msgersu']) {?>
  toast.error("<?php echo $_SESSION['msgersu'];?> ");
  <?php } unset($_SESSION['msgersu']); ?>
  </script>
</body>

</html>