 <?php 
	// session_start();
	// $db=mysqli_connect('localhost','root','','griv');
	
	
	// if (isset($_POST['submit']))
	// {
		// $gid=$_SESSION['gid'];
		// $status=$_POST['status'];
		// $action=$_POST['action'];
		
	// $gid=$_POST['GID'];	
	// $status=$_POST['status'];
	// $action=$_POST['action'];	
	// $query1="update g_form set status='$status' and action='$action' where gid='$gid";
	// echo $query1;
	// if(mysqli_query($db,$query1))
	// {}
// else{echo mysqli_error($query1);}
	
	// mysqli_query($db,$query1);
	// header("Location:index3.php");
	// }
 
 ?>
   <?php 
	session_start();
	$db=mysqli_connect('localhost','root','','griv');
	if (isset($_POST['submit']))
	{
		$status=$_POST['status'];
		$action=$_POST['action'];
		$gid=$_POST['gid11'];
		
	$query1="update g_form set status='$status' , action='$action' where gid=$gid";
	// echo $query1;
	mysqli_query($db,$query1);
	
	header("Location: index3.php");
	}
 
 ?>