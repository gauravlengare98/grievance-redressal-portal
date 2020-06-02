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

	if ($_SERVER['REQUEST_METHOD'] == 'POST') 
	{
		//$rno=$pass='';
		$count=0;
		if(empty($_POST["ssr"])) {
			$ssrError="Admin Pin should be filled";
			$count++;
		}	
	
		if(empty($_POST["pass"])) {
			$passError="Password should be filled";
			$count++;
		}

	if($count==0){
		include('log_db_b.php');
	}	
	}
?>
  
  <body>
  <div id="d1" class="container-fluid">
	<br>
	<center><i><b id="bd2">Ramrao Adik Institute of Technology</b><br><br></center>
	<center><b id="bd1">Grievance Redressal Portal</b></i></center>
	<center><b id="bd3">Admin</b></center>
	
	</div>
	<table class="table" id="td1">
		<tr class="active">
			<th><a id="ad1" href=""><button id="btd1"></button></a></th>
			<th><a id="ad1" href=""><button id="btd1"></button></a></th>
			<th><a id="ad1" href=""><button id="btd1"></button></a></th>
			<th><a id="ad1" href=""><button id="btd1"></button></a></th>
		</tr>
	</table>
	<div id="d2" class="container-fluid"><br>
	<div id="d3" class="container-fluid">
		<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
		<table id="tfdd2" class="table table-striped">
			<tr>
				<th>Admin Number:</th>
			</tr>
			<tr><td>
				<input type="text" name="ssr" maxlength="3"  />
				<span class="error"><?php if(isset($ssrError)) echo $ssrError ?></span>
			</td></tr>
			<tr>
				<th>Password:</th>
			</tr>
			<tr><td>
				<input type="password" name="pass"/>
				<span class="error"><?php if(isset($passError)) echo $passError ?></span>
			</td></tr>
			<tr><td><center>
				<input type="Reset" name="reset" value="Reset" />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="Submit" name="submit" value="Submit"/></center>
			</td></tr>
		</table>
		</form>
		</div><br>
	</div><br>
	
	</body>
</html>