
<?php
session_start();
error_reporting(0);
include('dbcon.php');

$adminId = $_GET['adminId'];
$_SESSION['adminId'] = $adminId ;

if (!isset($_SESSION['email']))
{

  echo "<script type = \"text/javascript\">
  window.location = (\"index.php\");
  </script>";

}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

$querys = mysqli_query("delete from tbladmin where adminId='$_SESSION[adminId]'") or die(mysqli_error());
if ($querys)
{	
    
	echo '<script type="text/javascript">alert("Admin/Users Registration Deleted Succesfully");window.location=\'UsersReports.php\';</script>';
}
?>
</body>
</html>
