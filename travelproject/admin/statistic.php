<?php
session_start();
error_reporting(0);
include('utils/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{ 
  function calcDate($startday,$endday){
    include('utils/config.php');
    $sql = "SELECT count(*) FROM tblbooking WHERE  YEAR(RegDate) BETWEEN '$startday' AND '$endday'";
    $query = $dbh->prepare($sql);
    $query -> execute();
    $month = $query->fetchAll();
    return $month[0]['count(*)'];
  }
  
  function calcCancel($startday,$endday){
    include('utils/config.php');
    $sql = "SELECT count(CancelledBy) FROM tblbooking WHERE YEAR(RegDate) BETWEEN '$startday' AND '$endday'";
    $query = $dbh->prepare($sql);
    $query -> execute();
    $month = $query->fetchAll();
    return $month[0]['count(CancelledBy)'];
  }
	?>

<!DOCTYPE HTML>
<html>

<head>
  <title>Travel Admin Manager Statistical</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <link rel="shortcut icon"
    href="https://cdn-icons-png.flaticon.com/512/1257/1257385.png?w=740&t=st=1670319127~exp=1670319727~hmac=3df5cfb7b4b4084477c31021f476ce730b54abf3c78aacf2ff06db0c21295839"
    type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  <link rel="stylesheet" href="./css/reset.css?v=<?php echo time(); ?>" type='text/css'>
  <link rel="stylesheet" href="./css/utils.css ?v=<?php echo time(); ?>" type='text/css'>
  <link rel="stylesheet" href="./css/global.css ?v=<?php echo time(); ?>" type='text/css'>
  <link rel="stylesheet" href="./css/main.css ?v=<?php echo time(); ?>" type='text/css'>
</head>

<body>
  <?php include('utils/header.php');?>
  <div class="main-container">
    <div class="main-left">
      <?php include('utils/navbar.php');?>
    </div>
    <div class="main-right">
      <div class="main-navigation">
        <div class="main-navigation__item"><a href="dashboard.php">Home</a><i
            class="fa-solid fa-chevron-right"></i>Statistical
        </div>
      </div>
      <div class="main-content">
        <h3 class="main-heading">Statistical Bookings</h3>
        <div id="myfirstchart" style="min-height: 100%;"></div>
      </div>
      <div class="main-footer">
        <?php include('utils/footer.php');?>
      </div>
    </div>
  </div>
  <script src="../js/modal.js"></script>
  <script>
  var data = [{
        y: '2018',
        a: <?php print_r(calcDate('2018-01-01 00:00:00', '2019-01-01 23:59:59'));?>,
        b: <?php print_r(calcCancel('2018-01-01 00:00:00', '2019-01-01 23:59:59'));?>
      },
      {
        y: '2019',
        a: <?php print_r(calcDate('2019-01-01 00:00:00', '2020-01-01 23:59:59'));?>,
        b: <?php print_r(calcCancel('2019-01-01 00:00:00', '2020-01-01 23:59:59'));?>
      },
      {
        y: '2020',
        a: <?php print_r(calcDate('2020-01-01 00:00:00', '2021-01-01 23:59:59'));?>,
        b: <?php print_r(calcCancel('2020-01-01 00:00:00', '2021-01-01 23:59:59'));?>
      },
      {
        y: '2021',
        a: <?php print_r(calcDate('2021-01-01 00:00:00', '2022-01-01 23:59:59'));?>,
        b: <?php print_r(calcCancel('2021-01-01 00:00:00', '2022-01-01 23:59:59'));?>
      },
      {
        y: '2022',
        a: <?php print_r(calcDate('2022-01-01 00:00:00', '2023-01-01 23:59:59'));?>,
        b: <?php print_r(calcCancel('2021-01-01 00:00:00', '2022-01-01 23:59:59'));?>
      },
      {
        y: '2023',
        a: <?php print_r(calcDate('2023-01-01 00:00:00', '2024-01-01 23:59:59'));?>,
        b: <?php print_r(calcCancel('2023-01-01 00:00:00', '2024-01-01 23:59:59'));?>
      },
      {
        y: '2024',
        a: <?php print_r(calcDate('2024-01-01 00:00:00', '2025-01-01 23:59:59'));?>,
        b: <?php print_r(calcCancel('2024-01-01 00:00:00', '2025-01-01 23:59:59'));?>
      },
      {
        y: '2025',
        a: <?php print_r(calcDate('2025-01-01 00:00:00', '2026-01-01 23:59:59'));?>,
        b: <?php print_r(calcCancel('2025-01-01 00:00:00', '2026-01-01 23:59:59'));?>
      },
      {
        y: '2026',
        a: <?php print_r(calcDate('2026-01-01 00:00:00', '2027-01-01 23:59:59'));?>,
        b: <?php print_r(calcCancel('2026-01-01 00:00:00', '2027-01-01 23:59:59'));?>
      },
      {
        y: '2027',
        a: <?php print_r(calcDate('2027-01-01 00:00:00', '2028-01-01 23:59:59'));?>,
        b: <?php print_r(calcCancel('2027-01-01 00:00:00', '2028-01-01 23:59:59'));?>
      },
      {
        y: '2028',
        a: <?php print_r(calcDate('2028-01-01 00:00:00', '2029-01-01 23:59:59'));?>,
        b: <?php print_r(calcCancel('2028-01-01 00:00:00', '2029-01-01 23:59:59'));?>
      }
    ],
    config = {
      data: data,
      xkey: 'y',
      ykeys: ['a', 'b'],
      labels: ['Total Bookings', 'Total Cancel Bookings'],
      fillOpacity: 0.6,
      hideHover: 'auto',
      behaveLikeLine: true,
      resize: true,
      pointFillColors: ['#3862e9'],
      pointStrokeColors: ['#ffffff'],
      lineColors: ['#7290d7', '#fa597f'],
    };
  config.element = 'myfirstchart';
  Morris.Area(config);
  </script>
</body>

</html>
<?php } ?>