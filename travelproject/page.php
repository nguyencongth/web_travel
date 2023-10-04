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
  <title>Page</title>
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

</head>

<body>
  <div class="main">
    <div class="main-top"><?php include('utils/header.php');?></div>
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img
            src="https://img.freepik.com/free-vector/kitchen-asian-style-chinese-japanese-room_33099-1872.jpg?w=996&t=st=1670385989~exp=1670386589~hmac=f92f5c265b3f50f7dfe600ac0bfcd85ef6fc3402dd5decbe508e503451fbe4d2"
            alt="" />
          <h3 class="swiper-title">Data Travel</h3>
          <p class="swiper-desc">Phong Cảnh Hữu Tình</p>
        </div>
        <div class="swiper-slide">
          <img
            src="https://img.freepik.com/premium-vector/summer-cartoon-illustration-modern-cottage-house-among-trees-green-countryside-field-outside-town_134830-236.jpg?w=1380"
            alt="" />
          <h3 class="swiper-title">Data Travel</h3>
          <p class="swiper-desc">Lãng Mạn</p>
        </div>
        <div class="swiper-slide">
          <img
            src="https://img.freepik.com/free-vector/travel-facebook-ad-design-template_23-2149087051.jpg?w=1060&t=st=1670386039~exp=1670386639~hmac=155411190447e9cfe8e52599d317c963287abee1eb4bfecbeeb318cf434ff226"
            alt="" />
          <h3 class="swiper-title">Data Travel</h3>
          <p class="swiper-desc">Chất</p>
        </div>
        <div class="swiper-slide">
          <img
            src="https://img.freepik.com/free-vector/flat-tanabata-background-with-city-bamboo_23-2149432013.jpg?w=996&t=st=1670386090~exp=1670386690~hmac=fe5a627ec0a6bc0011b7a4b5a0b19c0c6ad99713386b3a4781b55d4a92eb2c91"
            alt="" />
          <h3 class="swiper-title">Data Travel</h3>
          <p class="swiper-desc">Tuyệt Đẹp</p>
        </div>
        <div class="swiper-slide">
          <img
            src="https://img.freepik.com/free-vector/flat-international-cat-day-background_23-2149484383.jpg?w=996&t=st=1670386105~exp=1670386705~hmac=cc9d50f14f2927cec162a42d3c68a8e41da2c0ffe942173341b61f2f92306afd"
            alt="" />
          <h3 class="swiper-title">Data Travel</h3>
          <p class="swiper-desc">Sống Động</p>
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
        <?php 
$pagetype=$_GET['type'];
$sql = "SELECT type,detail from tblpages where type=:pagetype";
$query = $dbh -> prepare($sql);
$query->bindParam(':pagetype',$pagetype,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{		
?>
        <h3><?php echo $_GET['type'] ?></h3>
        <p>
          <?php echo $result->detail; ?>
        </p>
        <?php } }?>
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