
<?php
session_start();
error_reporting(0);
include('dbcon.php');

$centreRegId = $_GET['centreRegId'];
$_SESSION['centreRegId'] = $centreRegId ;

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

$querys = mysqli_query("delete from tblcentre where centreId='$_SESSION[centreRegId]'") or die(mysqli_error());
if ($querys)
{	
    
	echo '<script type="text/javascript">alert("Centre Registration Deleted Succesfully");window.location=\'CentreReports.php\';</script>';
}
?>
</body>
</html>
