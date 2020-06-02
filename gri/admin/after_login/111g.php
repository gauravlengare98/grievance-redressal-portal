 <?php 
	session_start();
	$db=mysqli_connect('localhost','root','','griv');
	if (isset($_POST['submit']))
	{
		$status="Solved";
		$action=$_POST['action'];
		$gid=$_POST['gid11'];
		
	$query1="update g_form set status='$status' , action='$action' where gid=$gid";
	echo $query1;
	// if(mysqli_query($db,$query1))
	// {}
//else{echo "<br>".mysqli_error($query1);}
	
	 // $result=mysqli_query($db,$query1);
	 // echo $result;
	//header("Location:griv-pend.php");
	// mysqli_query($db,$query1);
	
	// header("Location:griv-pend.php");
	}
 
 ?>