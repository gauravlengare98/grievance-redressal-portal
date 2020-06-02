 <?php
 
 $db=mysqli_connect('localhost','root','','griv');
	$errors = array();
	
	if (isset($_POST['submit']))
	{
		$ssr=$_POST['ssr'];
		$pass=$_POST['pass'];
		
	$query = "SELECT * FROM teacher WHERE ssr='$ssr' AND pass='$pass'";

    $results = mysqli_query($db, $query);

    if (mysqli_num_rows($results) < 1) {

	array_push($errors, "Wrong RollNo/password combination");
		echo "<script>alert('Wrong SSR/password combination !!');window.location='index2.php';</script>";exit;
		
    }else {
	  $row = mysqli_fetch_array($results);
      $_SESSION['ssr'] = $row['ssr'];
	  $_SESSION['department'] = $row['department'];
	  $_SESSION['success'] = "You are now logged in";

      header('location: after_login/griv-pend.php');
    }
	}


 ?>