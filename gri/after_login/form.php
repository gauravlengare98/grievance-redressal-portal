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
	 <link rel="stylesheet" type="text/css" href="../css/form1.css">
  </head>
  
  <?php
  session_start();
  
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	//primary validate function
	
	// $fname=$lname=$rno=$div=$batch=$email='';
	$count=0;
	//type
	if (empty($_POST["type"])) {
		$typeError = 'Grievance Type should be filled';
		$count++;
	 }
	 if (empty($_POST["description"])) {
		$descriptionError = 'Description should be filled';
		$count++;
	}
	if($count==0){
		include('../php/form_db.php');
	}
	
  }
   
  ?>
  
  <body>

	<div id="d1" class="container-fluid">
	<br><br><br><br>
	<i><b id="bd2">Ramrao Adik Institute of Technology</b><br>
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
	<font size="8px" align="center"><p class="text-primary"> Welcome <button class="btn btn-link">
		<font size="5px" align="center">
		<?php echo $_SESSION['fname']." ".$_SESSION['lname'];?><br><?php echo $_SESSION['rno'];?></button></font>
		!!</p></font>
	<div id="d2" class="container-fluid">
		<div id="d22">
			<center><b><p id="pd22">Instruction to be Followed!</p></b></center><br>
			<ol style="1">
			<li>Fill in the proper details according to the format of the form.</li>
			<li>Any illegal action or fake grievance will not be entertained and strict action will be taken.</li>
			<li>Once submitted cannot be changed so please fill accordingly.</li>
			<li>Please provide proper proofs/evidence for the same grievance.</li>
			<li>Give description regarding the same grievance field choosed.</li>
			
			
			</ol>
		</div>
		<br><br>
	<div id="d3" class="container-fluid">
	<center><b><p id="pd3">Student Grievance Appeal Form</p></b></center>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
		<table class="table table-striped" id="tfd3">
		<tr>
			<th>Division & Batch:</th>
		</tr>
		<tr><td>
			<input type="text" name="div_batch" value="<?php echo $_SESSION['branch']."-".$_SESSION['year']."-".$_SESSION['division']."".$_SESSION['batch']?>" readonly />
		</td></tr>
		
		<tr>
			<th>Grievance Type:</th>
		</tr>
		<tr><td>
			<input list='type' name='type'>
				<datalist id='type'>
					<option value='Academics'>
					<option value='Faculty Related'>
					<option value='Office Related'>
					<option value='Examination Section'>
					<option value='Labs(computer/other)'>
					<option value='Electrical Services (fan/ac...)'>
					<option value='Stationary'>
					<option value='Cleanliness'>
					<option value='Canteen'>
					<option value='Other'>
				</datalist>
		<span class="error"><?php if(isset($typeError)) echo $typeError ?></span>
		</td></tr>
		<tr>
			<th>Description:&nbsp;&nbsp;</th>
		</tr>
		<tr><td><sub>Maxmium 100 words</sub><br>
			<textarea rows="6" cols="40" maxlength="100" name="description" ></textarea>
			<span class="error"><?php if(isset($descriptionError)) echo $descriptionError ?></span>
		</td></tr>
		<tr>
			<th>Attachment:</th>
		</tr>
		<tr><td>
			<input type="file" accept="image/*,.pdf" title="Only Images and PDF files"/>
		</td></tr>
		<tr><td><center>
				<input type="Reset" name="reset" value="Reset" />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="Submit" name="submit" value="Submit"/></center></td></tr>
		</table>
		
		
	</form>
	
	
	</div>
	</div>
	
	</body>
	</html>