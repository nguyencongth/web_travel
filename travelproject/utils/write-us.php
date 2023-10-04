<?php
error_reporting(0);
if(isset($_POST['submitus']))
{
$issue=$_POST['issue'];
$description=$_POST['description'];
$email=$_SESSION['login'];
$sql="INSERT INTO  tblissues(UserEmail,Issue,Description) VALUES(:email,:issue,:description)";
$query = $dbh->prepare($sql);
$query->bindParam(':issue',$issue,PDO::PARAM_STR);
$query->bindParam(':description',$description,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$_SESSION['msgok']="Info successfully submitted ";
echo "<script type='text/javascript'> document.location = 'thankyou.php'; </script>";
}
else 
{
$_SESSION['msgfa']="Something went wrong. Please try again.";
echo "<script type='text/javascript'> document.location = 'thankyou.php'; </script>";
}
}
?>

<div class="modal" tabindex="-1" id="support">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Can I Help You</p>
        <div class="modal-container">
          <form action="" method="post" class="help">
            <div class="form-group">
              <select id="country" name="issue" class="form-select">
                <option value="">Select Issue</option>
                <option value="Booking Issues">Booking Issues</option>
                <option value="Cancellation"> Cancellation</option>
                <option value="Refund">Refund</option>
                <option value="Other">Other</option>
              </select>
            </div>
            <div class="form-group">
              <label for="input-name" class="form-label">Username</label>
              <input type="text" name="description" id="description" placeholder="Description">
            </div>
            <button type="submit" class="form-submit" name="submitus">Submit</button>
          </form>
        </div>

      </div>
    </div>
  </div>