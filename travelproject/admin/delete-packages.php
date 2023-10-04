<?php 
session_start();
include('utils/config.php');

 $did=intval($_GET['did']);
 $sql = "DELETE FROM TblTourPackages WHERE PackageId=:did";
 $query = $dbh -> prepare($sql);
 $query -> bindParam(':did', $did, PDO::PARAM_STR);
 if( $query->execute()){
  echo "<script type='text/javascript'> document.location = 'manage-packages.php'; </script>";
  $_SESSION['notidelete'] = "Bạn đã xóa Package thành công";
 }
 else{
  $_SESSION['notideleteer'] = "Bạn đã xóa Package thất bại";

 }
?>