<?php
session_start();
error_reporting(0);
include('utils/config.php');
if(strlen($_SESSION['login'])==0)
	{	
header('location:index.php');
}
else{
if(isset($_REQUEST['bkid']))
	{
		$bid=intval($_GET['bkid']);
    $email=$_SESSION['login'];
	  $sql ="SELECT BookingId FROM tblbooking WHERE UserEmail=:email and BookingId=:bid";
    $query= $dbh -> prepare($sql);
    $query-> bindParam(':email', $email, PDO::PARAM_STR);
    $query-> bindParam(':bid', $bid, PDO::PARAM_STR);
    $query-> execute();
    $results = $query -> fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
{
    $status=2;
    $cancelby='u';
    $sql = "UPDATE tblbooking SET status=:status,CancelledBy=:cancelby WHERE UserEmail=:email and BookingId=:bid";
    $query = $dbh->prepare($sql);
    $query -> bindParam(':status',$status, PDO::PARAM_STR);
    $query -> bindParam(':cancelby',$cancelby , PDO::PARAM_STR);
    $query-> bindParam(':email',$email, PDO::PARAM_STR);
    $query-> bindParam(':bid',$bid, PDO::PARAM_STR);
    $query -> execute();
    $msg="Booking Cancelled successfully";
}
}
}

?>
<!DOCTYPE HTML>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tour History</title>
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
  <link rel="stylesheet" href="./css/table.css?v=<?php echo time(); ?>" type='text/css'>
  <link rel="stylesheet" href="./css/modal.css?v=<?php echo time(); ?>" type='text/css'>


</head>

<body>
  <div class="main">
    <div class="main-top"><?php include('utils/header.php');?></div>
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img
            src="https://img.freepik.com/premium-photo/landmark-pagoda-doi-inthanon-with-mist-fog-during-sunset-timeat-chiang-mai-thailand_33835-815.jpg?w=1060"
            alt="" />
          <h3 class="swiper-title">Data Travel</h3>
          <p class="swiper-desc">Lịch sử</p>
        </div>
        <div class="swiper-slide">
          <img
            src="https://img.freepik.com/free-photo/asian-woman-wearing-chinese-traditional-dress-ban-rak-thai-village-mae-hong-son-province-thailand_335224-1169.jpg?w=996&t=st=1670386327~exp=1670386927~hmac=e6a35200be62e066703d70871e1cc800da6ac71644bb9e4363f34dd3d252643e"
            alt="" />
          <h3 class="swiper-title">Data Travel</h3>
          <p class="swiper-desc">Các chuyến đi</p>
        </div>
        <div class="swiper-slide">
          <img
            src="https://img.freepik.com/premium-photo/asian-couple-with-suitcase-bag-backpack-standing-beach_9083-3241.jpg?w=996"
            alt="" />
          <h3 class="swiper-title">Data Travel</h3>
          <p class="swiper-desc">Lịch trình</p>
        </div>
        <div class="swiper-slide">
          <img
            src="https://img.freepik.com/free-photo/tourist-sitting-phu-sub-lek-viewpoint-sunset-lopburi-thailand_335224-1390.jpg?w=996&t=st=1670386359~exp=1670386959~hmac=add2e098e548206b9293ea8fdd5ea00c9495798b3eef58d01d3197bead05e329"
            alt="" />
          <h3 class="swiper-title">Data Travel</h3>
          <p class="swiper-desc">Chặng khám phá</p>
        </div>
        <div class="swiper-slide">
          <img
            src="https://img.freepik.com/free-photo/turquoise-tropical-beautiful-outdoors-tourism_1258-134.jpg?w=996&t=st=1670386375~exp=1670386975~hmac=0bb3a1155a828b304c0799017e67b7d24d58133cc8d14152c042b511c2550955"
            alt="" />
          <h3 class="swiper-title">Data Travel</h3>
          <p class="swiper-desc">Địa điểm</p>
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
  <main>
    <div class="tour">
      <div class="tour-container">
        <h3 class="form-title">My Tour History</h3>
        <form action="" name="changePass" method="post" class="form" onSubmit="return validate();">
          <?php if($error){?><div class="notify notify--error">
            <strong>ERROR</strong>:<?php echo htmlentities($error); ?>
          </div><?php } 
          else if($msg){?><div class="notify notify--success">
            <strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?>
          </div><?php }?>
          <table class="sticky-table">
            <tr>
              <th>#</th>
              <th>Booking Id</th>
              <th>Package Name</th>
              <th>From</th>
              <th>To</th>
              <th>Comment</th>
              <th>Status</th>
              <th>Booking Date</th>
              <th>Action</th>
            </tr>
            <?php 

$uemail=$_SESSION['login'];;
$sql = "SELECT tblbooking.BookingId as bookid,tblbooking.PackageId as pkgid,tbltourpackages.PackageName as packagename,tblbooking.FromDate as fromdate,tblbooking.ToDate as todate,tblbooking.Comment as comment,tblbooking.status as status,tblbooking.RegDate as regdate,tblbooking.CancelledBy as cancelby,tblbooking.UpdationDate as upddate from tblbooking join tbltourpackages on tbltourpackages.PackageId=tblbooking.PackageId where UserEmail=:uemail";
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
              <td>#BK<?php echo htmlentities($result->bookid);?></td>
              <td><a
                  href="package-details.php?pkgid=<?php echo htmlentities($result->pkgid);?>"><?php echo htmlentities($result->packagename);?></a>
              </td>
              <td><?php echo htmlentities($result->fromdate);?></td>
              <td><?php echo htmlentities($result->todate);?></td>
              <td><?php echo htmlentities($result->comment);?></td>
              <td><?php if($result->status==0)
{
echo "Pending";
}
if($result->status==1)
{
echo "Confirmed";
}
if($result->status==2 and  $result->cancelby=='u')
{
echo "Canceled by you at " .$result->upddate;
} 
if($result->status==2 and $result->cancelby=='a')
{
echo "Canceled by admin at " .$result->upddate;

}
?></td>
              <td><?php echo htmlentities($result->regdate);?></td>
              <?php if($result->status==2)
{
	?><td>Cancelled</td>
              <?php } else {?>
              <td><a href="tour-history.php?bkid=<?php echo htmlentities($result->bookid);?>"
                  onclick="return confirm('Do you really want to cancel booking')">Cancel</a></td>
              <?php }?>
            </tr>
            <?php $cnt=$cnt+1; }} else{?>
            <?php echo "Hiện tại bạn không đặt tour nào cả"; }?>
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