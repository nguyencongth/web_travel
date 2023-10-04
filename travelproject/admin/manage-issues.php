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
  <title>Travel Admin manage Users</title>
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
        <div class="main-navigation__item"><a href="dashboard.php">Home</a><i class="fa-solid fa-chevron-right"></i>Manage
          Issues
        </div>
      </div>
      <div class="main-content">
        <h3 class="main-heading">Manage Issues</h3>
        <?php if($error){?><div class="notify notify--error"><strong>ERROR</strong>:<?php echo htmlentities($error); ?>
        </div><?php } 
				else if($msg){?><div class="notify notify--success"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?>
        </div><?php }?>
        <div class="sticky-table">
          <table id="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Mobile No.</th>
                <th>Email Id</th>
                <th>Issues </th>
                <th>Description </th>
                <th>Posting date </th>
                <th>Action </th>
              </tr>
            </thead>
            <tbody>
              <?php $sql = "SELECT tblissues.id as id,tblusers.FullName as fname,tblusers.MobileNumber as number,tblusers.EmailId as email,tblissues.Issue as issue,tblissues.Description as Description,tblissues.PostingDate as PostingDate from tblissues join tblusers on tblusers.EmailId=tblissues.UserEmail";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

if($query->rowCount() > 0)
{
foreach($results as $result)
{				?>
              <tr>
                <td><?php echo htmlentities($result->id);?></td>
                <td><?php echo htmlentities($result->fname);?></td>
                <td><?php echo htmlentities($result->number);?></td>
                <td><?php echo htmlentities($result->email);?></td>
                <td><?php echo htmlentities($result->issue);?></a></td>
                <td><?php echo htmlentities($result->Description);?></td>
                <td><?php echo htmlentities($result->PostingDate);?></td>
                <td><a href="javascript:void(0);"
                    onClick="popUpWindow('update-issue.php?iid=<?php echo ($result->id);?>');">View </a>
                </td>
              </tr>
              <?php } }?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="main-footer">
        <?php include('utils/footer.php');?>
      </div>
    </div>
  </div>
  <script language="javascript" type="text/javascript">
  const features =
    'toolbar=no,location=no,menubar=no,scrollbars=yes,resizable=no,width=600,height=600,screenX=100,screenY=100';

  function popUpWindow(URLStr) {
    var issue = window.open(URLStr, 'issue', features);
  }
  </script>
</body>

</html>
<?php } ?>