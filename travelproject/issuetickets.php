<?php
session_start();
error_reporting(0);
include('utils/config.php');
if(strlen($_SESSION['login'])==0)
	{	
header('location:index.php');
}
else{
?>
<!DOCTYPE HTML>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Issue</title>
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
  <link rel="stylesheet" href="./css/table.css?v=<?php echo time(); ?>" type='text/css'>
</head>

<body>
  <div class="main">
    <div class="main-top"><?php include('utils/header.php');?></div>
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img
            src="https://img.freepik.com/premium-vector/loy-krathong-festival-travel-thailand-poster-design-background-vector-illustration_354831-1116.jpg?w=996"
            alt="" />
          <h3 class="swiper-title">Data Travel</h3>
          <p class="swiper-desc">Bạn hãy thực hiện đúng thao tác</p>
        </div>
        <div class="swiper-slide">
          <img
            src="https://img.freepik.com/premium-vector/loy-krathong-festival-banner-concept-with-cute-thai-couple-national-costume-holding-krathong-full-moon-night-lanterns-celebration-culture-thailand-poster-template-background-vector_83111-1244.jpg?w=996"
            alt="" />
          <h3 class="swiper-title">Data Travel</h3>
          <p class="swiper-desc">Chọn yêu cầu bạn muốn</p>
        </div>
        <div class="swiper-slide">
          <img
            src="https://img.freepik.com/free-vector/hong-kong-city-skyline-silhouette-background-vector-illustration_596401-34.jpg?w=1380&t=st=1670385704~exp=1670386304~hmac=e69384e82a09f712123949123577dbae2b4f0069e05ce75709f4bb435cd1681b"
            alt="" />
          <h3 class="swiper-title">Data Travel</h3>
          <p class="swiper-desc">Gửi cho chúng tôi</p>
        </div>
        <div class="swiper-slide">
          <img
            src="https://img.freepik.com/premium-vector/flight-ticket-advertising-template-with-travel-hong-kong-china-concept-famous-landmarks-paper-cut-style_41327-900.jpg?w=1380"
            alt="" />
          <h3 class="swiper-title">Data Travel</h3>
          <p class="swiper-desc">Cảm ơn bạn</p>
        </div>
        <div class="swiper-slide">
          <img
            src="https://img.freepik.com/free-vector/singapore-national-day-font-banner-with-merlion-landmark-singapore_1308-65355.jpg?w=1380&t=st=1670385742~exp=1670386342~hmac=27c2a355f67f78e7d942230a451f1cff26d94af9193d5c900d4b2ed41ab77148"
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
    <div class="issue">
      <div class="issue-container">
        <h3 class="form-title">Issue Tickets</h3>
        <form action="" name="issue" method="post" class="form">
          <?php if($error){?><div class="notify notify--error">
            <strong>ERROR</strong>:<?php echo htmlentities($error); ?>
          </div><?php } 
          else if($msg){?><div class="notify notify--success">
            <strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?>
          </div><?php }?>
          <table class="sticky-table">
            <tr>
              <th>#</th>
              <th>Ticket Id</th>
              <th>Issue</th>
              <th>Description</th>
              <th>Admin Remark</th>
              <th>Reg Date</th>
              <th>Remark date</th>
            </tr>
            <?php 

$uemail=$_SESSION['login'];
$sql = "SELECT * from tblissues where UserEmail=:uemail";
$query = $dbh->prepare($sql);
$query -> bindParam(':uemail', $uemail, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>
            <tr>
              <td><?php echo htmlentities($cnt);?></td>
              <td>#TKT-<?php echo htmlentities($result->id);?></td>
              <td><?php echo htmlentities($result->Issue);?></td>
              <td><?php echo htmlentities($result->Description);?></td>
              <td><?php echo htmlentities($result->AdminRemark);?></td>
              <td><?php echo htmlentities($result->PostingDate);?></td>
              <td><?php echo htmlentities($result->AdminremarkDate);?></td>
            </tr>
            <?php $cnt=$cnt+1; }} ?>
          </table>
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