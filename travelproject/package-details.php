<?php
session_start();
error_reporting(0);
include('utils/config.php');
if(isset($_POST['submit']))
{
$pid=intval($_GET['pkgid']);
$useremail=$_SESSION['login'];
$fromdate=$_POST['fromdate'];
$todate=$_POST['todate'];
$comment=$_POST['comment'];
$status=0;
$sql="INSERT INTO tblbooking(PackageId,UserEmail,FromDate,ToDate,Comment,status) VALUES(:pid,:useremail,:fromdate,:todate,:comment,:status)";
$query = $dbh->prepare($sql);
$query->bindParam(':pid',$pid,PDO::PARAM_STR);
$query->bindParam(':useremail',$useremail,PDO::PARAM_STR);
$query->bindParam(':fromdate',$fromdate,PDO::PARAM_STR);
$query->bindParam(':todate',$todate,PDO::PARAM_STR);
$query->bindParam(':comment',$comment,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Booked Successfully";
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
  <title>Package Details</title>
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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <link rel="stylesheet" href="./css/reset.css?v=<?php echo time(); ?>" type='text/css'>
  <link rel="stylesheet" href="./css/utils.css?v=<?php echo time(); ?>" type='text/css'>
  <link rel="stylesheet" href="./css/global.css?v=<?php echo time(); ?>" type='text/css'>
  <link rel="stylesheet" href="./css/modal.css?v=<?php echo time(); ?>" type='text/css'>
  <link rel="stylesheet" href="./css/detail.css?v=<?php echo time(); ?>" type='text/css'>

</head>

<body>
  <div class="detail">
    <div class="detail-top">
      <?php include('utils/header.php');?>
    </div>
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img
            src="https://img.freepik.com/free-vector/empty-nature-beach-ocean-coastal-landscape_1308-32585.jpg?w=1380&t=st=1670385769~exp=1670386369~hmac=af1716d3ab970c989a1df7c29c7c7df8122246be65dd88e2e564bf3503f1e50c"
            alt="" />
          <h3 class="swiper-title">Data Travel</h3>
          <p class="swiper-desc">Giá Thành Rẻ</p>
        </div>
        <div class="swiper-slide">
          <img
            src="https://images.unsplash.com/photo-1561350409-e16d46acca4d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
            alt="" />
          <h3 class="swiper-title">Data Travel</h3>
          <p class="swiper-desc">Chuyến đi nhanh chóng</p>
        </div>
        <div class="swiper-slide">
          <img src="https://img.freepik.com/premium-vector/illustration-singapore-city-skyline_249011-976.jpg?w=996"
            alt="" />
          <h3 class="swiper-title">Data Travel</h3>
          <p class="swiper-desc">Hạnh phúc</p>
        </div>
        <div class="swiper-slide">
          <img
            src="https://img.freepik.com/free-vector/flat-singapore-national-day-illustration_52683-65933.jpg?w=1380&t=st=1670385794~exp=1670386394~hmac=54fbf80f9421c95a14d213fa50f22784a3ec3e1aa27a536298f39b5efa57a887"
            alt="" />
          <h3 class="swiper-title">Data Travel</h3>
          <p class="swiper-desc">Tiện Lợi</p>
        </div>
        <div class="swiper-slide">
          <img
            src="https://img.freepik.com/free-vector/thailand-cities-skyline-silhouette-vector-illustration-white-background-business-travel-tourism-concept-with-famous-thailand-landmarks-image-presentation-banner-web-site_596401-497.jpg?w=1380&t=st=1670385823~exp=1670386423~hmac=b8ada78cb2cc2590b6dd883a9dfac6bd5132f12e74b8cc15623d889787e3aa91"
            alt="" />
          <h3 class="swiper-title">Data Travel</h3>
          <p class="swiper-desc">Good</p>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
    <main>
      <div class="detail-container">
        <?php if($error){?><div class="notify notify--error"><strong>ERROR</strong>:<?php echo htmlentities($error); ?>
        </div><?php } 
				else if($msg){?><div class="notify notify--success"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?>
        </div><?php }?>

        <?php 
$pid=intval($_GET['pkgid']);
$sql = "SELECT * from tbltourpackages where PackageId=:pid";
$query = $dbh->prepare($sql);
$query -> bindParam(':pid', $pid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>

        <form action="" method="post" name="details">
          <div class="detail-container__top">
            <div class="detail__left">
              <div class="detail__media">
                <img src="admin/packageimages/<?php echo htmlentities($result->PackageImage);?>" alt=""
                  class="detail-img">
              </div>
            </div>
            <div class="detail__right">
              <div class="detail__header">
                <h3 class="detail__title"><?php echo htmlentities($result->PackageName);?></h3>
                <span class="detail__code">[#PKG-<?php echo htmlentities($result->PackageId);?>]</span>
              </div>
              <div class="detail__content">
                <div class="detail__rating">
                  <span class="detail__rating-icon"><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M4.13326 15.491L7.99996 13.366L11.8667 15.491C12.4232 15.7968 13.0716 15.2989 12.9648 14.6476L12.2275 10.1543L15.3516 6.97107C15.8043 6.50981 15.5561 5.70233 14.9325 5.60761L10.6108 4.95117L8.67898 0.85962C8.40014 0.269043 7.59978 0.269043 7.32094 0.85962L5.38916 4.95117L1.06741 5.60761C0.44384 5.70233 0.195647 6.50981 0.648336 6.97107L3.77242 10.1543L3.03515 14.6476C2.92829 15.2989 3.57668 15.7968 4.13326 15.491Z"
                        fill="#FFC542" />
                    </svg>
                  </span>
                  <p class="detail__rating-desc">
                    <span>4.8</span>
                    <span>(122 reviews)</span>
                  </p>
                </div>
                <div class="detail__desc">
                  <div class="detail__desc-item">
                    <h4 class="detail-heading">Package Type : </h4>
                    <p class="detail-text"><?php echo htmlentities($result->PackageType);?></p>
                  </div>
                  <div class="detail__desc-item">
                    <h4 class="detail-heading">Package Location : </h4>
                    <p class="detail-text"><?php echo htmlentities($result->PackageLocation);?></p>
                  </div>
                  <div class="detail__desc-item">
                    <h4 class="detail-heading">Features : </h4>
                    <p class="detail-text"> <?php echo htmlentities($result->PackageFetures);?></p>
                  </div>
                  <div class="detail__desc-item">
                    <h4 class="detail-heading">Package Details : </h4>
                    <p class="detail-text"><?php echo htmlentities($result->PackageDetails);?></p>
                  </div>
                </div>
                <div class="detail-total">
                  <span class="detail-heading">Total Price</span>
                  <div>
                    <i class="fa-solid fa-dollar-sign"></i>
                    <span class="detail-total__price"><?php echo htmlentities($result->PackagePrice);?>.</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="detail-form">
            <div class="detail-form__row">
              <div class="detail-form__group">
                <label for="input-password" class="form-label">From Date</label>
                <input class="myID" type="text" placeholder="From Date" name="fromdate" required>
              </div>
              <div class="detail-form__group">
                <label for="input-name" class="form-label">To Date</label>
                <input class="myID" type="text" placeholder="To Date" name="todate" required>
              </div>
            </div>
            <div class="detail-form__group">
              <label for="input-name" class="form-label">Comment</label>
              <input type="text" name="comment" placeholder="Comment" required>
            </div>
            <?php if($_SESSION['login'])
					{?>
            <button type="submit" name="submit" class="btn--medium btn">Book</button>
            <?php } else {?>
            <a id="BookSign" class="btn--medium btn"> Book</a>
            <?php } ?>
          </div>
        </form>
        <?php }} ?>
        <?php include('utils/footer.php');?>
      </div>
    </main>
  </div>
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
  <script type="text/javascript">
  flatpickr(".myID", {
    altInput: true,
    altFormat: "F j, Y",
    dateFormat: "Y-m-d",
    minDate: "today",
    enableTime: false,
  });
  </script>
  <?php include('utils/signin.php');?>
  <?php include('utils/signup.php');?>
  <?php include('utils/write-us.php');?>
  <script src="./js/modal.js"></script>
</body>

</html>