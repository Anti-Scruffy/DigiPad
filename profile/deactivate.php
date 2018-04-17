<?php
session_start();
include_once '../dbconnect.php';

if (!isset($_SESSION['userSession'])) {
	header("Location: index.php");
}

$query = $DBcon->query("SELECT * FROM tbl_users WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();

$id = $userRow['user_id'];

 $sqlquery =$DBcon->query("DELETE FROM tbl_users WHERE user_id=".$_SESSION['userSession']);
	  if (!$sqlquery) {
      printf("Error: %s\n", mysqli_error($DBcon));
      exit();
     }
else {
    
    session_destroy();
	unset($_SESSION['userSession']);
	header("Location: ../index.php");
}

?>
