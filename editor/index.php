<?php
session_start();
include_once 'dbconnect.php';

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
		<title>Write Story</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
         <script src="ckeditor/ckeditor.js"> </script>

        <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body style="overflow-x:hidden;">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Wrapper -->
					<div id="wrapper">

						<!-- Panel (Banner) -->
							<section class="panel banner right">
								
								<div class="image filtered span-1-75" data-position="25% 25%">
									<img src="images/pic01.png" alt="" />
								</div>
							</section>

						<!-- Panel (Spotlight) -->
							 

						
						<!-- Panel -->
							<section class="panel color2-alt" id="write">

								 <div class="inner columns aligned">
									  <div class="span-4-5">
										
										<form method="post" action="">
				<div class="field">
												<label for="demo-message">Write your <i>Story</i></label>
												<textarea name="editor" id="editor1" placeholder="Enter the Description" rows="5"></textarea>
											</div>
            
           	<ul class="actions">
												<li><input type="submit" value="Publish" class="special color2" onclick="function1();"/></li>
												
											</ul>
                                            
                                              
           	<ul class="actions">
												<li><a href="http://localhost/public/home.php"><input type="button" value="Go Back" class="special color2"  /></a></li>
												
											</ul>
                                         
            <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1');
            </script>
										</form>
										 

									</div>
								</div>
                                
							</section>

						<!-- Copyright -->
							<div class="copyright">&copy; StoryBoat 2018.</div>

					</div>

			</div>

       
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/main.js"></script>
        <script>
        function function1()
            {
                alert ("Story Published");
                document.getElementById('editor1').value = "";
            }</script>
			

	</body>
</html>


    
<?php
    if(isset($_POST['editor']))
    {
        $text = $_POST['editor'];
       
        $con = mysqli_connect('localhost','root','','mysqli_login') or die("error!");
        
        //insert
        $query = mysqli_query($con, "INSERT INTO story (story,uname) VALUES ('$text','$uname')");
       
         if($query)
    {
        $_SESSION['success'] = "Story Published";
        //Redirect to the listing page,
        header('location: ../story/YourStory.php');
        //Important! Don't execute the rest put the exit/die. 
        exit();
    }
}
    
    

?>