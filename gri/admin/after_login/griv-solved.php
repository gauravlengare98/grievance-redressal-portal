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
	 <link rel="stylesheet" type="text/css" href="../css/griv.css">
  </head>

<?php 
session_start();
	$db=mysqli_connect('localhost','root','','griv');

	$ssr=$_SESSION['ssr'];
?>

<body>
  <div id="d1" class="container-fluid">
	<br>
	<center><i><b id="bd2">Ramrao Adik Institute of Technology</b><br><br></center>
	<center><b id="bd1">Grievance Redressal Portal</b></i></center>
	<center><b id="bd3">Mentor</b></center>
	
	</div>
	<table class="table" id="td1">
		<tr class="active">
			<th><a id="ad1" href="griv-pend.php"><button id="btd1">Pending</button></a></th>
			<th><a id="ad1" href="griv-solved.php"><button id="btd1">Solved</button></a></th>
			<th><a id="ad1" href=""><button id="btd1"></button></a></th>
			<th><a id="ad1" href="logout.php"><button id="btd1">Logout</button></a></th>
		</tr>
	</table>
	<div id="d2" class="container-fluid">
			<font size="5px" align="left"><p class="text-primary"> Welcome 
			<font size="5px" align="left">
			<?php echo "SSR ".$_SESSION['ssr'];?></font>
			!!</p></font><br>
		<div id="d22" class="container-fluid"> 
		<table class="active table table-striped" id="tpd22"><tr>
			<th>Gid</th>
			<th>Grievance Type</th>
			<th>Description</th>
			<th>Attachment</th>
			<th>Status</th>
			<th>Action</th>
			<th>Feedback</th>
			<tr>
			<?php
			
			// $query="SELECT gid,gtype,description,attachment,status,action FROM g_form WHERE status='Approved' ";
			$query="SELECT g.gid,g.gtype,g.description,g.attachment,g.status,g.action,g.reaction FROM `g_form` g INNER JOIN student s on g.rno=s.rno INNER JOIN mapping m on s.year=m.year and s.division=m.division and s.batch=m.batch and s.branch=m.department where m.ssr=$ssr and g.status='Solved' and g.action!='In process At Mentor Level'";
			$result=mysqli_query($db, $query);
			if(mysqli_num_rows($result)>0)
			{	
			while($row=mysqli_fetch_array($result))
			{?><form method="POST" action="">
			<tr>
			<td><?php echo $row['gid'];?>
			<td><?php echo $row['gtype'];?>
			<td><?php echo $row['description'];?>
			<td><?php echo $row['attachment'];?>
			<td><?php echo $row['status'];?>
			<td><?php echo $row['action'];?>
			<td><?php echo $row['reaction'];?>
			
			</tr></form>
			<?php
			}
			}
			else
			{
				echo "No Informtion Found";
			}
			?>
	
		</div>
	</div>

</body>


</html>	