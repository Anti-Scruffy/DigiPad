<?php 
include('connection.php');
$nid=$_GET['user_id'];

$q=mysqli_query($conn,"delete from tbl_users where id='$nid'");

header('location:index.php?page=manage_users');

?>