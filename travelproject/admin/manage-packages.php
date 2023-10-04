<?php
session_start();
error_reporting(0);
include('utils/config.php');
if(strlen($_SESSION['alogin'])==0)
	{	
header('location:index.php');
}
else{ 
	?>
<!DOCTYPE HTML>
<html>

<head>
  <title>Manager-Package</title>
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
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
  <link rel="stylesheet" href="./css/reset.css?v=<?php echo time(); ?>" type='text/css'>
  <link rel="stylesheet" href="./css/utils.css ?v=<?php echo time(); ?>" type='text/css'>
  <link rel="stylesheet" href="./css/global.css ?v=<?php echo time(); ?>" type='text/css'>
  <link rel="stylesheet" href="./css/main.css ?v=<?php echo time(); ?>" type='text/css'>
  <link rel="stylesheet" href="./css/table.css ?v=<?php echo time(); ?>" type='text/css'>
</head>

<body>
  <?php include('utils/header.php');?>
  <div class="main-container">
    <div class="main-left">
      <?php include('utils/navbar.php');?>
    </div>
    <div class="main-right">
      <div class="main-navigation">
        <div class="main-navigation__item"><a href="dashboard.php">Home</a><i class="fa-solid fa-chevron-right"></i>Manager
          Packages
        </div>
      </div>
      <div class="main-content">
        <h3 class="main-heading">Manage Packages</h3>
        <div class="sticky-table">
          <table id="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Type</th>
                <th>Location</th>
                <th>Price</th>
                <th>Creation Date</th>
                <th>Action</th>
                <th>Careful</th>
              </tr>
            </thead>
            <tbody>
              <?php $sql = "SELECT * from TblTourPackages";
          $query = $dbh -> prepare($sql);
          $query->execute();
          $results=$query->fetchAll(PDO::FETCH_OBJ);
          $cnt=1;
          if($query->rowCount() > 0)
          {
          foreach($results as $result)
          {				?>
              <tr>
                <td><?php echo htmlentities($cnt);?></td>
                <td><?php echo htmlentities($result->PackageName);?></td>
                <td><?php echo htmlentities($result->PackageType);?></td>
                <td><?php echo htmlentities($result->PackageLocation);?></td>
                <td>$<?php echo htmlentities($result->PackagePrice);?></td>
                <td><?php echo htmlentities($result->Creationdate);?></td>
                <td><a href="update-package.php?pid=<?php echo htmlentities($result->PackageId);?>">
                    <button type="button" class="btn btn--primary">View Details</button></a></td>
                <td><a onclick='return confirm("Bạn có muốn xóa không ?");'
                    href="delete-packages.php?did=<?php echo htmlentities($result->PackageId);?>">
                    <button type="button" class="btn btn--danger">Delete</button></a></td>
              </tr>
              <?php $cnt=$cnt+1;}
                }?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="main-footer">
        <?php include('utils/footer.php');?>
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
  <?php if(isset($_SESSION['notidelete'])) {?>
  toast.success("<?php echo $_SESSION['notidelete'];?>");
  <?php unset($_SESSION['notidelete']);} else if(isset($_SESSION['notideleteer'])) {?>
  toast.error("<?php echo $_SESSION['notideleteer'];?> ");
  <?php unset($_SESSION['notideleteer']);} else {?>
  toast.info("<?php echo $noti;?> ");
  <?php }?>
  </script>
</body>

</html>
<?php } ?>