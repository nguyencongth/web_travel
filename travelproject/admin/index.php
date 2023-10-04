<?php
session_start();
include('utils/config.php');
if(isset($_POST['form-submit']))
{
$uname=$_POST['username'];
$password=$_POST['password'];
$sql ="SELECT UserName,Password FROM admin WHERE UserName=:uname and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':uname', $uname, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['username'];
$_SESSION['notiadmin'] = "Chào mừng Admin đã đăng nhập trang quản lý";
echo "<script type='text/javascript'> document.location = 'dashboard.php'; </script>";
} else{
  $noti = 'Bạn đã nhập sai tài khoản hoặc mật khẩu admin';
	echo "<script>alert('Invalid Details');</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login</title>
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
  <link rel="stylesheet" href="./css/index.css?v=<?php echo time(); ?>" type='text/css'>
</head>

<body>
  <div class="wrapper">
    <div class="main">
      <div class="main-container">
        <h1 class="main-heading">Get’s started.</h1>
        <div class="main-social">
          <a class="main-social__item" href="">
            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M10 20.0114C10 20.2877 10.2241 20.513 10.4999 20.4994C15.7905 20.2388 20 15.8642 20 10.5059C20 4.97977 15.5228 0.5 10 0.5C4.47715 0.5 0 4.97977 0 10.5059C0 15.1337 3.13989 19.0277 7.40433 20.1713C7.70966 20.2533 8 20.0158 8 19.6995V12.507H7C6.44771 12.507 6 12.0591 6 11.5064C6 10.9538 6.44772 10.5059 7 10.5059H8V8.50469C8 6.84687 9.3431 5.50293 11 5.50293H12C12.5523 5.50293 13 5.95091 13 6.50352C13 7.05613 12.5523 7.5041 12 7.5041H11C10.4477 7.5041 10 7.95208 10 8.50469V10.5059H12C12.5523 10.5059 13 10.9538 13 11.5064C13 12.0591 12.5523 12.507 12 12.507H10V20.0114Z"
                fill="#4776D0" />
            </svg>

          </a>
          <a class="main-social__item" href="">
            <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
              <mask id="mask0_1584_21351" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="20"
                height="21">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M19.7674 8.68182H10.2326V12.5455H15.7209C15.2093 15 13.0698 16.4091 10.2326 16.4091C6.88372 16.4091 4.18605 13.7727 4.18605 10.5C4.18605 7.22727 6.88372 4.59091 10.2326 4.59091C11.6744 4.59091 12.9767 5.09091 14 5.90909L16.9767 3C15.1628 1.45455 12.8372 0.5 10.2326 0.5C4.55814 0.5 0 4.95455 0 10.5C0 16.0455 4.55814 20.5 10.2326 20.5C15.3488 20.5 20 16.8636 20 10.5C20 9.90909 19.907 9.27273 19.7674 8.68182Z"
                  fill="white" />
              </mask>
              <g mask="url(#mask0_1584_21351)">
                <path d="M-0.930176 16.409V4.59082L6.9768 10.4999L-0.930176 16.409Z" fill="#FBBC05" />
              </g>
              <mask id="mask1_1584_21351" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="20"
                height="21">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M19.7674 8.68182H10.2326V12.5455H15.7209C15.2093 15 13.0698 16.4091 10.2326 16.4091C6.88372 16.4091 4.18605 13.7727 4.18605 10.5C4.18605 7.22727 6.88372 4.59091 10.2326 4.59091C11.6744 4.59091 12.9767 5.09091 14 5.90909L16.9767 3C15.1628 1.45455 12.8372 0.5 10.2326 0.5C4.55814 0.5 0 4.95455 0 10.5C0 16.0455 4.55814 20.5 10.2326 20.5C15.3488 20.5 20 16.8636 20 10.5C20 9.90909 19.907 9.27273 19.7674 8.68182Z"
                  fill="white" />
              </mask>
              <g mask="url(#mask1_1584_21351)">
                <path d="M-0.930176 4.59082L6.9768 10.4999L10.2326 7.72718L21.3954 5.95446V-0.40918H-0.930176V4.59082Z"
                  fill="#EA4335" />
              </g>
              <mask id="mask2_1584_21351" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="20"
                height="21">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M19.7674 8.68182H10.2326V12.5455H15.7209C15.2093 15 13.0698 16.4091 10.2326 16.4091C6.88372 16.4091 4.18605 13.7727 4.18605 10.5C4.18605 7.22727 6.88372 4.59091 10.2326 4.59091C11.6744 4.59091 12.9767 5.09091 14 5.90909L16.9767 3C15.1628 1.45455 12.8372 0.5 10.2326 0.5C4.55814 0.5 0 4.95455 0 10.5C0 16.0455 4.55814 20.5 10.2326 20.5C15.3488 20.5 20 16.8636 20 10.5C20 9.90909 19.907 9.27273 19.7674 8.68182Z"
                  fill="white" />
              </mask>
              <g mask="url(#mask2_1584_21351)">
                <path d="M-0.930176 16.409L13.0233 5.95446L16.6977 6.409L21.3954 -0.40918V21.409H-0.930176V16.409Z"
                  fill="#34A853" />
              </g>
              <mask id="mask3_1584_21351" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="20"
                height="21">
                <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M19.7674 8.68182H10.2326V12.5455H15.7209C15.2093 15 13.0698 16.4091 10.2326 16.4091C6.88372 16.4091 4.18605 13.7727 4.18605 10.5C4.18605 7.22727 6.88372 4.59091 10.2326 4.59091C11.6744 4.59091 12.9767 5.09091 14 5.90909L16.9767 3C15.1628 1.45455 12.8372 0.5 10.2326 0.5C4.55814 0.5 0 4.95455 0 10.5C0 16.0455 4.55814 20.5 10.2326 20.5C15.3488 20.5 20 16.8636 20 10.5C20 9.90909 19.907 9.27273 19.7674 8.68182Z"
                  fill="white" />
              </mask>
              <g mask="url(#mask3_1584_21351)">
                <path d="M21.3953 21.409L6.97668 10.4999L5.11621 9.13627L21.3953 4.59082V21.409Z" fill="#4285F4" />
              </g>
            </svg>

          </a>
          <a class="main-social__item" href="">
            <svg width="20" height="17" viewBox="0 0 20 17" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M20 2.39415C19.2563 2.71538 18.4637 2.92831 17.6375 3.03169C18.4875 2.532 19.1363 1.74677 19.4412 0.800308C18.6488 1.26554 17.7738 1.59415 16.8412 1.77754C16.0887 0.988616 15.0162 0.5 13.8462 0.5C11.5763 0.5 9.74875 2.31415 9.74875 4.53815C9.74875 4.85815 9.77625 5.16585 9.84375 5.45877C6.435 5.29508 3.41875 3.68646 1.3925 1.236C1.03875 1.84031 0.83125 2.532 0.83125 3.27662C0.83125 4.67477 1.5625 5.91415 2.6525 6.63169C1.99375 6.61938 1.3475 6.43108 0.8 6.13446C0.8 6.14677 0.8 6.16277 0.8 6.17877C0.8 8.14062 2.22125 9.77015 4.085 10.1455C3.75125 10.2354 3.3875 10.2785 3.01 10.2785C2.7475 10.2785 2.4825 10.2637 2.23375 10.2095C2.765 11.8083 4.2725 12.9837 6.065 13.0218C4.67 14.0963 2.89875 14.7437 0.98125 14.7437C0.645 14.7437 0.3225 14.7289 0 14.6883C1.81625 15.8415 3.96875 16.5 6.29 16.5C13.835 16.5 17.96 10.3462 17.96 5.012C17.96 4.83354 17.9538 4.66123 17.945 4.49015C18.7588 3.92154 19.4425 3.21138 20 2.39415Z"
                fill="#01AEEF" />
            </svg>

          </a>
        </div>
        <div class="line">
          <span class="line-text">or login with username</span>
        </div>
        <form action="" method="post" class="form">
          <div class="form-group">
            <label for="input-name" class="form-label">Username</label>
            <input type="text" name="username" class="username" id="input-name" required="">
          </div>
          <div class="form-group">
            <label for="input-password" class="form-label">Password</label>
            <input type="password" name="password" class="password" id="input-password" required="">
            <!-- <i class="fa-regular fa-eye-slash"></i>
            <i class="fa-regular fa-eye"></i> -->
          </div>
          <div class="form-group">
            <a href="#" class="form-group__link">Forgot your password?</a>
          </div>
          <button type="submit" class="form-submit" name="form-submit">Sign in</button>
        </form>
        <a href="../index.php" class="form-group__link">Back To Home</a>
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
  <?php if(isset($noti)) {?>
  toast.error("<?php echo $noti;?>");
  <?php unset($noti); }?>
  </script>
</body>

</html>