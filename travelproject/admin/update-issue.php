<?php
session_start();
error_reporting(0);
include('utils/config.php');
if(strlen($_SESSION['alogin'])==0)
  { 
header('location:index.php');
}
else{ 
  $iid=intval($_GET['iid']);
if(isset($_POST['submitissue']))
  {
$remark=$_POST['remark'];
$sql = "UPDATE tblissues SET AdminRemark=:remark WHERE  id=:iid";
$query = $dbh->prepare($sql);
$query -> bindParam(':remark',$remark, PDO::PARAM_STR);
$query-> bindParam(':iid',$iid, PDO::PARAM_STR);
$query -> execute();
$msg="Remark  successfully Updated";
}
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Issue</title>
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
  <link rel="stylesheet" href="./css/issue.css ?v=<?php echo time(); ?>" type='text/css'>

</head>

<body>
  <div class="wrapper">
    <div class="main-container">
      <div class="main-content">
        <h3 class="main-heading">Update Remark</h3>
        <?php if($error){?><div class="notify notify--error">
          <strong>ERROR</strong>:<?php echo htmlentities($error); ?>
        </div><?php } 
				else if($msg){?><div class="notify notify--success"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?>
        </div><?php }?>
        <div class="main-form">
          <form class="form-control" name="updateissue" action="" method="post">
            <?php 
$sql = "SELECT * from tblissues where id=:iid";
$query = $dbh -> prepare($sql);
$query-> bindParam(':iid',$iid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

if($query->rowCount() > 0)
{
foreach($results as $result)
{ 

  if($result->AdminRemark=="")
  {
?>
            <div class="form-group form-column">
              <label for="packagename" class="form-label">Request:</label>
              <input type="text" class="form-input" readonly value="<?php echo htmlentities($result->Description);?>"
                required>
            </div>
            <div class="form-group">
              <label for="packagedetails" class="form-label">Remark: </label>
              <textarea name="remark" rows="10" placeholder="Package Details"></textarea>
            </div>
            <button type="submit" name="submitissue" class="btn btn--issue">Update</button>
            <?php } else { ?>
            <div class="form-group form-column">
              <label for="packagename" class="form-label">Request:</label>
              <input type="text" class="form-input" readonly value="<?php echo htmlentities($result->Description);?>"
                required>
            </div>
            <div class="form-group form-column">
              <label for="packagename" class="form-label">Remark:</label>
              <input type="text" class="form-input" readonly value="<?php echo htmlentities($result->AdminRemark);?>"
                required>
            </div>
            <div class="form-group form-column">
              <label for="packagetype" class="form-label">Remark Date:</label>
              <input type="text" class="form-input" readonly
                value="<?php echo htmlentities($result->AdminremarkDate);?>" required>
            </div>
            <?php }}}?>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
<?php } ?>