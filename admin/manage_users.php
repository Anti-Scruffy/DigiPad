<?php 
$q=mysqli_query($conn,"select * from tbl_users ");
$rr=mysqli_num_rows($q);
if(!$rr)
{
echo "<h2 style='color:red'>No user exists !!!</h2>";
}
else
{
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Admin Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 

<script>
	function DeleteUser(id)
	{
		if(confirm("Do you want to delete this record ?"))
		{
		window.location.href="delete_user.php?id="+id;
		}
	}
</script>
       </head>

  <body>
      
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Welcome Admin !</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
           
            <li><a href="logout.php">Logout</a></li>
          </ul>
          <!--<form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>-->
        </div>
      </div>
    </nav>

<h2 style="color:#000   ;position:relative;float:left;">All Users</h2>

<table class="table table-bordered">
    <tr>
		<th colspan="7"><a href="add_user.php">Add New User</a></th>
	</tr>
	<Tr class="success">
		<th>Sr.No</th>
		<th>User Name</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Mail ID</th>
         <th>Update</th>
		<th>Delete</th>
       
	</Tr>
		<?php 


$i=1;
while($row=mysqli_fetch_assoc($q))
{

echo "<tr>";
echo "<td>".$i."</td>";
echo "<td>".$row['username']."</td>";
echo "<td>".$row['fname']."</td>";
echo "<td>".$row['lastname']."</td>";
echo "<td>".$row['email']."</td>";

    ?>
<td>
    <a href="edit_customer.php?customer_id=&operation=edit" class="btn btn-primary" style="margin-right: 8px;"><span class="glyphicon glyphicon-edit"></span></a></td>
    <td><a href=""  class="btn btn-danger delete_btn" data-toggle="modal" data-target="#confirm-delete-" style="margin-right: 8px;"><span class="glyphicon glyphicon-trash"></span></a></td>
    <?php 

echo "</tr>";
$i++;
}
		?>


    
</table>
<?php }?>