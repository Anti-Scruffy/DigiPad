<?php
session_start();
include_once '../dbconnect.php';

if (!isset($_SESSION['userSession'])) {
	header("Location: index.php");
}

$query = $DBcon->query("SELECT * FROM tbl_users WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
$DBcon->close();

?>


<!DOCTYPE html>
<html>
   <head>
      <title>@Profile</title>
      <link rel="stylesheet" type="text/css" href="style.css">
      <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
      <link rel="stylesheet" type="text/css" href="css/animate.css">
      <link rel="shortcut icon" href="img/fav.ico" type="image/x-icon">
      <link href="https://fonts.googleapis.com/css?family=Montserrat:700" rel="stylesheet">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="" />
      <meta name="keywords" content=" "/>
      <meta name="author" content="Shrinath Nayak">
      <meta name="robots" content="index, follow" />
      <script>
function scrollWin(x, y) {
    window.scrollBy(x, y);
}
</script>
   </head>
   <body>
      <!--Card-->
      <div class="card animated fadeIn">
         <center><img class="center animated rollIn" src="img/ava.png" alt="avatar"></center>
         <hr />
         <div class="name" style="color:black;">
            @<?php echo $userRow['username']; ?>
         </div>
        <p class="subtitle">StoryBoat Writer &amp; Reader</p>
         <p class="location"> <a href="../story/YourStory.php">Your Stories</a></p>
		 
		  <p class="location"> <a href=" " target="_blank">Update Your Profile</a></p>
          
          <p class="location"> <a href="deactivate.php">Deactivate Your Account</a></p>
              
		  <p class="location"> <a href="../Support.php"   target="_blank">Ask For Support</a></p>
          
          <p class="location"> <a href="../home.php">Home</a></p>
          
          <p class="location"> <a href=" ../logout.php?logout ">Log Out</a></p>
         
                   <hr />
    
    </div>
      <!--footer-->
      <footer class="animated fadeIn">
         &copy; StoryBoat Inc. 2018
      </footer>
   </body>
</html>
