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
	 <link rel="stylesheet" type="text/css" href="index-a.css">
  </head>

  <?php
	session_start();
	$db=mysqli_connect('localhost','root','','griv');
?>
  
  <body>
  <div id="d1" class="container-fluid">
	<br>
	<center><i><b id="bd2">Ramrao Adik Institute of Technology</b><br><br></center>
	<center><b id="bd1">Grievance Redressal Portal</b></i></center>
	<center><b id="bd3">Admin</b></center>
	
	</div><br>
	<table class="table" id="td1">
		<tr class="active">
			<th><a id="ad1" href="index3.php"><button id="btd1">Pending</button></a></th>
			<th><a id="ad1" href="approved.php"><button id="btd1">Approved</button></a></th>
			<th><a id="ad1" href="rejected.php"><button id="btd1">Rejected</button></a></th>
			<th><a id="ad1" href=""><button id="btd1"></button></a></th>
		</tr>
	</table>
	<div id="d2" class="container-fluid"><br><br>
	<div id="d22" class="container-fluid">
		<table class="active table table-striped" id="tpd22"><tr>
			<th>Gid</th>
			<th>Roll No</th>
			<th>Grievance Type</th>
			<th>Description</th>
			<th>Attachment</th>
			<th>Status</th>
			<th>Action</th>
			<th>Submit</th><tr>
			<?php
			
			$query="SELECT gid,rno,gtype,description,attachment FROM g_form WHERE status='Pending'";
			$result=mysqli_query($db, $query);
			if(mysqli_num_rows($result)>0)
			{	?>
			
		
			<?php
			while($row=mysqli_fetch_array($result))
			{
				?>
			<form method="POST" action="pend-up.php">	
			<tr>
			<td><?php echo $row['gid'];// $_SESSION['gid']=$row['gid'];?>
			<input  hidden name="gid11" value=<?php echo $row['gid']?>>
			<td><?php echo $row['rno'];?>
			<td><?php echo $row['gtype'];?>
			<td><?php echo $row['description'];?>
			<td><?php echo $row['attachment'];?>
			<td><input list='status' name='status' required >
				<datalist id='status'>
					<option value='Approved'>
					<option value='Rejected'>
				</datalist>
			<td><input list="action" name="action" required >
				<datalist id="action">
					<option value="In process At Mentor Level">
					<option value="Irrelevant">
					
				</datalist>
			<td><a href="pend-up.php?gid11=$_POST['gid11'] and status=$_POST['status'] and action=_POST['action']">
			<input type="submit" name="submit" value="Submit"></a>
				
			
			
			
			<?php //$_SESSION['gid']= $row['gid'];?>
			<!--<a href="pend-up.php?gid=$row['gid'] and status=$_POST['status'] and action=$_POST['action']">-->
			
			</tr></form>
			<?php
				
			}
			?>
			</table><?php
			}
			?>
	</div>
	</div>
	
</body>
	
</html>