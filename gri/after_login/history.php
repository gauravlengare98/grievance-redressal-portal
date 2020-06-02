<!doctype html>


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet"> 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	  
      <script src="http://code.jquery.com/jquery-1.10.2.js"></script>  
      <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script> 
	 <link rel="stylesheet" type="text/css" href="../css/history.css">
  </head>
  <?php session_start();?>
  
  
  <body>
  <div id="d1" class="container-fluid">
	<br><br><br><br>
	<center><i><b id="bd2">Ramrao Adik Institute of Technology</b><br><br></center>
	<center><b id="bd1">Grievance Redressal Portal</b></i></center>
	</div>
	<table class="table" id="td1">
		<tr class="active">
			<th><a id="ad1" href="index1.php"><button id="btd1">Home</button></a></th>
			<th><a id="ad1" href="history.php"><button id="btd1">History</button></a></th>
			<th><a id="ad1" href="form.php"><button id="btd1">Grievance Form</button></a></th>
			<th><a id="ad1" href="logout.php"><button id="btd1">Logout</button></a></th>
		</tr>
	</table>
	<div id="main_div" class="container-fluid">
		<font size="8px" align="center"><p class="text-primary"> Welcome <button class="btn btn-link">
		<font size="5px" align="center">
		<?php echo $_SESSION['fname']." ".$_SESSION['lname'];?><br><?php echo $_SESSION['rno'];?></button></font>
		!!</p></font>
	</div>
	<div id="d2" class="container-fluid">
  <?php
	$rno1=$_SESSION['rno'];
	$db=mysqli_connect('localhost','root','','griv');
	$query="SELECT * FROM g_form WHERE rno='$rno1' and reaction=''";
	$result=mysqli_query($db, $query);
	if(mysqli_num_rows($result)>0)
{	?>
	<marquee><font color="red">Note:Give Feedback Only to the Solved Grievance</font></marquee>
	<table id="td2" class="table table-striped">
	<th>GID</th>
	<th>Grievance Type</th>
	<th>Description</th>
	<th>Attachment</th>
	<th>Admin Status</th>
	<th>Action Taken</th>
	<th>Feedback</th>
	<th>Submit</th>
	<?php
	while($row=mysqli_fetch_array($result))
	{?>
	<form method="POST" action="stud-f-update.php">
		<tr>
			<td><?php echo $row['gid'];?>
			<input hidden name="gid11" value="<?php echo $row['gid']?>">
			<td><?php echo $row['gtype'];?>
			<td><?php echo $row['description'];?>
			<td><?php echo $row['attachment'];?>
			<td><?php echo $row['status'];?>
			<td><?php echo $row['action'];?>
			<td><input list='reaction' name='reaction' required >
				<datalist id='reaction'>
					<option value='Satisfied'>
					<option value='Unsatisfied'>
				</datalist>
			<td><a href="stud-f-update.php?gid11=$_POST['gid11'] and reaction=$_POST['reaction']"></a>
			<input type="submit" name="submit" value="Submit">
		</tr></form>
		<?php
	}	?>
		</table><?php
}else{
	echo "No Complaint Submited!!";
}
  ?>
  </div>
  </body>
  
</html>
  
  
  