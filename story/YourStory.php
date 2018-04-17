<?php
session_start();
include_once '../dbconnect.php';

if (!isset($_SESSION['userSession'])) {
	header("Location: index.php");
}

$query = $DBcon->query("SELECT * FROM tbl_users WHERE user_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
$DBcon->close();
$uname = $userRow['username'];
?>


<!DOCTYPE HTML>
 
<html>
	<head>
		<title>Your Stories</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>
 
		<!-- Wrapper -->
			<div id="wrapper" class="divided">

 <section class="wrapper style1 align-center">
						<div class="inner">
                            <a href="../home.php"><img src="../assets/css/images/storyboat.png" height="200" width="50%" /></a>
							<h2>Your Stories </h2>
							<p>Read them here... @ <a href="../profile/Profile.php"><?php echo $userRow['username']; ?></a> </p>
							 
							<div class="items style1 medium onscroll-fade-in">
               
    <?php
                    $con = mysqli_connect('localhost','root','','mysqli_login') or die("error!");
                    
                    $query = mysqli_query($con,"SELECT * FROM title where uname='$uname'");
                    while($row = mysqli_fetch_array($query))
    {?>
								<section>
            
									<span class="icon style2 major fa-desktop"></span>
                                        
                                        <form>
                                    <h3><?php echo $row['title']; ?></h3>
                                    <p><?php echo $row['des']; ?></p>
                                          <button>Update</button></form>  
                                    </section>
								           <?php   
 					
   }
    					

        
                    ?>
							</div>
					
				<!-- Five -->
					<section class="wrapper style1 align-center">
						<div class="inner">
							<h2>Your Stories In Augmented Reality</h2>
							<p> As per the credits you have earned, we have rewarded you with your AR Stories to show the people what you have got to show them in real. </p>
						</div>

						<!-- Gallery -->
							<div class="gallery style2 medium lightbox onscroll-fade-in">
								<article>
									<a href="images/gallery/fulls/01.jpg" class="image">
										<img src="images/gallery/thumbs/01.jpg" alt="" />
									</a>
									<div class="caption">
										<h3>Story 0</h3>
										<p>Description about story 0 </p>
										<ul class="actions">
											<li><span class="button small">Details</span></li>
										</ul>
									</div>
								</article>
								<article>
									<a href="images/gallery/fulls/02.jpg" class="image">
										<img src="images/gallery/thumbs/02.jpg" alt="" />
									</a>
									<div class="caption">
										<h3>Story 1</h3>
										<p>Description about story 1</p>
										<ul class="actions">
											<li><span class="button small">Details</span></li>
										</ul>
									</div>
								</article>
								<article>
									<a href="images/gallery/fulls/03.jpg" class="image">
										<img src="images/gallery/thumbs/03.jpg" alt="" />
									</a>
									<div class="caption">
										<h3>Story 2</h3>
										<p>Description about story 2 </p>
										<ul class="actions">
											<li><span class="button small">Details</span></li>
										</ul>
									</div>
								</article>
								<article>
									<a href="images/gallery/fulls/04.jpg" class="image">
										<img src="images/gallery/thumbs/04.jpg" alt="" />
									</a>
									<div class="caption">
										<h3>Story 3</h3>
										<p>Description about story 3</p>
										<ul class="actions">
											<li><span class="button small">Details</span></li>
										</ul>
									</div>
								</article>
								<article>
									<a href="images/gallery/fulls/05.jpg" class="image">
										<img src="images/gallery/thumbs/05.jpg" alt="" />
									</a>
									<div class="caption">
										<h3>Story 4</h3>
										<p>Description about story 4</p>
										<ul class="actions">
											<li><span class="button small">Details</span></li>
										</ul>
									</div>
								</article>
								<article>
									<a href="images/gallery/fulls/06.jpg" class="image">
										<img src="images/gallery/thumbs/06.jpg" alt="" />
									</a>
									<div class="caption">
										<h3>Story 5</h3>
										<p>Description about story 5 </p>
										<ul class="actions">
											<li><span class="button small">Details</span></li>
										</ul>
									</div>
								</article>
								 
							</div>

					</section>
 
						</div>
					</section>

				 
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>