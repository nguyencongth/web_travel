<?php
session_start();
error_reporting(0);
include('utils/config.php');
if(isset($_POST['submit']))
{
$fname=$_POST['name'];
$email=$_POST['email'];	
$mobile=$_POST['mobile'];
$subject=$_POST['category'];	
$description=$_POST['description'];
$sql="INSERT INTO  tblenquiry(FullName,EmailId,MobileNumber,Subject,Description) VALUES(:fname,:email,:mobile,:subject,:description)";
$query = $dbh->prepare($sql);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
$query->bindParam(':subject',$subject,PDO::PARAM_STR);
$query->bindParam(':description',$description,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Enquiry  Successfully submitted";
}
else 
{
$error="Something went wrong. Please try again";
}

}

?>
<!DOCTYPE HTML>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Enquiry</title>
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

</head>

<body>
  <div class="main">
    <div class="main-top"><?php include('utils/header.php');?></div>
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img
            src="https://img.freepik.com/free-vector/spring-landscape_23-2148848484.jpg?w=996&t=st=1670385455~exp=1670386055~hmac=9a5b63972241c7d405ee0a49f58600a408929bff2a88e8cad2c1ba95bff7dbbe"
            alt="" />
          <h3 class="swiper-title">Data Travel</h3>
          <p class="swiper-desc">Bạn đang có thắc mắc</p>
        </div>
        <div class="swiper-slide">
          <img
            src="https://img.freepik.com/premium-vector/illustration-fuji-mountain-japan-beautiful-nature-snowy-mountain-with-sakura-blossoms-japanese-romantic-place-illustration-any-design-decoration_306119-1388.jpg?w=1380"
            alt="" />
          <h3 class="swiper-title">Data Travel</h3>
          <p class="swiper-desc">Bạn hãy yêu cầu cho chúng tôi</p>
        </div>
        <div class="swiper-slide">
          <img src="https://img.freepik.com/premium-vector/travel-japan-famous-landmarks-asian_49537-44.jpg?w=1380"
            alt="" />
          <h3 class="swiper-title">Data Travel</h3>
          <p class="swiper-desc">Chúng tôi sẽ phản hồi bạn sớm nhất có thể</p>
        </div>
        <div class="swiper-slide">
          <img
            src="https://img.freepik.com/premium-vector/cartoon-forest-animals-wild-bear-funny-squirrel-cute-birds-forests-trees-kids-vector-background-illustration_102902-1535.jpg?w=1380"
            alt="" />
          <h3 class="swiper-title">Data Travel</h3>
          <p class="swiper-desc">Hãy nêu những thắc mắc của bạn</p>
        </div>
        <div class="swiper-slide">
          <img
            src="https://img.freepik.com/free-vector/flat-jungle-composition-birds-fly-dense-jungle-pink-flamingos-large-parrots-vector-illustration_1284-74327.jpg?w=1380&t=st=1670385504~exp=1670386104~hmac=93182d36d627a9b2beea54947601784f09e33e349d75ef053e1aaa44d30d9cf5"
            alt="" />
          <h3 class="swiper-title">Data Travel</h3>
          <p class="swiper-desc">Cảm ơn bạn đã gửi yêu cầu</p>
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
        <h3 class="form-title">Enquiry Form</h3>
        <form action="" name="changePass" method="post" class="form" onSubmit="return validate();">
          <?php if($error){?><div class="notify notify--error">
            <strong>ERROR</strong>:<?php echo htmlentities($error); ?>
          </div><?php } 
          else if($msg){?><div class="notify notify--success">
            <strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?>
          </div><?php }?>

          <div class="form-group">
            <label for="" class="form-label">Full name: </label>
            <input type="text" name="name" id="name" class="form-input" placeholder="Full Name" required>
          </div>
          <div class="form-group">
            <label for="" class="form-label">Email: </label>
            <input type="text" name="email" id="email" class="form-input" placeholder="Email" required>
          </div>
          <div class="form-group">
            <label for="" class="form-label">Mobile: </label>
            <input type="text" name="mobile" id="mobile" class="form-input" placeholder="Mobile" required>
          </div>
          <div class="form-group">
            <label for="" class="form-label">Category: </label>
            <input type="text" name="category" id="category" class="form-input" placeholder="Category" required>
          </div>
          <div class="form-group">
            <label for="" class="form-label">Description: </label>
            <textarea name="description" id="description" cols="6" rows="7" placeholder="Description"></textarea>
          </div>
          <button type="submit" name="submit" class="btn btn--primary">Send</button>
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