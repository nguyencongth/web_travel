<?php
session_start();
include('utils/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="shortcut icon"
    href="https://cdn-icons-png.flaticon.com/512/1257/1257385.png?w=740&t=st=1670319127~exp=1670319727~hmac=3df5cfb7b4b4084477c31021f476ce730b54abf3c78aacf2ff06db0c21295839"
    type="image/x-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
  <link rel="stylesheet" href="./css/reset.css?v=<?php echo time(); ?>" type='text/css'>
  <link rel="stylesheet" href="./css/utils.css?v=<?php echo time(); ?>" type='text/css'>
  <link rel="stylesheet" href="./css/global.css?v=<?php echo time(); ?>" type='text/css'>
  <link rel="stylesheet" href="./css/main.css?v=<?php echo time(); ?>" type='text/css'>
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
              class="fa-solid fa-chevron-right"></i>Dashboard
          </div>
        </div>
        <div class="main-content">
          <div class="main-list">
            <div class="main-item">
              <i class="fa-solid fa-user"></i>
              <div class="main-item__content">
                <h3 class="main-title">User</h3>
                <?php $sql = "SELECT id from tblusers";
                    $query = $dbh -> prepare($sql);
                    $query->execute();
                    $results=$query->fetchAll(PDO::FETCH_OBJ);
                    $cnt=$query->rowCount();
					        ?>
                <span class="main-total"><?php echo htmlentities($cnt);?> </span>
              </div>
            </div>
            <div class="main-item">
              <i class="fa-solid fa-rectangle-list"></i>
              <div class="main-item__content">
                <h3 class="main-title">Bookings</h3>
                <?php $sql1 = "SELECT BookingId from tblbooking";
                    $query1 = $dbh -> prepare($sql1);
                    $query1->execute();
                    $results1=$query1->fetchAll(PDO::FETCH_OBJ);
                    $cnt1=$query1->rowCount();
                  ?>
                <span class="main-total"><?php echo htmlentities($cnt1);?></span>
              </div>
            </div>
            <div class="main-item">
              <i class="fa-solid fa-code-pull-request"></i>
              <div class="main-item__content">
                <h3 class="main-title">Enquiries</h3>
                <?php $sql2 = "SELECT id from tblenquiry";
                  $query2= $dbh -> prepare($sql2);
                  $query2->execute();
                  $results2=$query2->fetchAll(PDO::FETCH_OBJ);
                  $cnt2=$query2->rowCount();
					        ?>
                <span class="main-total"><?php echo htmlentities($cnt2);?></span>
              </div>
            </div>
            <div class="main-item">
              <i class="fa-solid fa-box-archive"></i>
              <div class="main-item__content">
                <h3 class="main-title">Total packages</h3>
                <?php $sql3 = "SELECT PackageId from tbltourpackages";
                  $query3= $dbh -> prepare($sql3);
                  $query3->execute();
                  $results3=$query3->fetchAll(PDO::FETCH_OBJ);
                  $cnt3=$query3->rowCount();
					        ?>
                <span class="main-total"><?php echo htmlentities($cnt3);?></span>
              </div>
            </div>
            <div class="main-item">
              <i class="fa-regular fa-message"></i>
              <div class="main-item__content">
                <h3 class="main-title">Issues</h3>
                <?php $sql5 = "SELECT id from tblissues";
                    $query5= $dbh -> prepare($sql5);
                    $query5->execute();
                    $results5=$query5->fetchAll(PDO::FETCH_OBJ);
                    $cnt5=$query5->rowCount();
					        ?>
                <span class="main-total"><?php echo htmlentities($cnt5);?></span>
              </div>
            </div>
          </div>
        </div>
        <div class="main-footer">
          <?php include('utils/footer.php');?>
        </div>
      </div>
    </div>
  </div>
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
    info(mess) {
      Toastify({
        text: mess,
        duration: 5000,
        close: true,
        gravity: 'top',
        position: 'right',
        style: {
          background: '#03a9f4',
        },
      }).showToast()
    },
  }
  <?php $noti = 'Website còn nhiều sai sót. Mong mọi người phản hồi lại để chúng tôi phát triển hơn'; ?>
  <?php if(isset($_SESSION['notiadmin'])) {?>
  toast.success("<?php echo $_SESSION['notiadmin'];?>");
  <?php unset($_SESSION['notiadmin']); } else {?>
  toast.info("<?php echo $noti;?> ");
  <?php }?>
  </script>
</body>

</html>
<?php } ?>