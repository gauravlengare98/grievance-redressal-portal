 <?php 
	session_start();
	$db=mysqli_connect('localhost','root','','griv');
	if (isset($_POST['submit']))
	{
		
		$reaction=$_POST['reaction'];
		$gid=$_POST['gid11'];
		
	$query1="update g_form set reaction='$reaction' where gid=$gid";
	//echo $query1;
	// if(mysqli_query($db,$query1))
	// {}
//else{echo "<br>".mysqli_error($query1);}
	
	 // $result=mysqli_query($db,$query1);
	 // echo $result;
	//header("Location:history.php");
	mysqli_query($db,$query1);
	
	header("Location:history.php");
	}
 
 ?>