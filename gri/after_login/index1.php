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
	 <link rel="stylesheet" type="text/css" href="../css/index.css">
  </head>
  <?php
  session_start();
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
			<th><a id="ad1"  href="logout.php"><button id="btd1">Logout</button></a></th>
		</tr>
	</table>
	
	<div id="main_div" class="container-fluid">
		<font size="8px" align="center"><p class="text-primary"> Welcome <button class="btn btn-link">
		<font size="5px" align="center">
		<?php echo $_SESSION['fname']." ".$_SESSION['lname'];?><br><?php echo $_SESSION['rno'];?></button></font>
		!!</p></font>
	
	
	
	
	</div>
	
	<div id="dright" class="container-fluid">
		<div id="p1" class="container">
	<p id="p1"><b id="topic">Student Grievance:</b></p>
	<p>
	&nbsp;Strength of the university is the wealth of the student. D Y Patil to be University offering an effective mechanism for student grievances. Grievance redressel cell was constituted in the university as per the regulations of university grants commission. A Grievance is any discontent or dissatisfaction, whether expressed or not, whether valid or not, arising out of anything connected with the Institute that a student thinks, believes, or even feels, is unfair, unjust or inequitable.
</p><p>
	&nbsp;In D Y Patil to be University grievance and redressel cell established to resolve all day by day grievance of the student through single window, any student with a genuine grievance may approach Associate Dean Grievances to submit his/her grievance in proper format.Grievance redressed in systematic way by involving the respective Department/person connected to that issue.
	</p>
	</div>
	
	<div id="p2" class="container">
		<p id="p2"><b id="topic">Objective Of Grievance Redressal:</b></p>
	<p>
		<ol type="a">
		<li>Linking with a well defined Disciplinary System to make it acceptable to all.</li>
		<li>All actions should be prompt for better redressal of Grievance.</li>
		<li>To make the redressal process fair, impartial, consistent, with prior warnings and commensurate with gravity of misconduct.</li>
		<li>Aim should be on prevention of misconduct rather than controlling through punitive measures.</li>
		</ol>
	</p>
	</div>
	<br><br>
	<div id="p3" class="container">
		<p id="p3"><b id="topic">Nature Of Grievance:</b></p>
	<p>
	<ol style="1">
			<li><b>Academic Grievance</b>
				<ol style="a">
					<li>Issue related to course Registration</li>
					<li>Any issues about change of Specialization</li>
					<li>Issues regarding Course requirement and course content</li>
					<li>Examinations related issues</li>
					<li>Issues regarding Applying for certificates</li>
				</ol></li><br>
			<li><b>Administrative Decisions, Services or Facilities</b>
				<ol style="a">
					<li>Issues related to Transport facility</li>
					<li>Issues about Hostels</li>
					<li>Any issues of Canteen</li>
					<li>Issues related to Sports</li>
					<li>Issues related to Post office and banks</li>
					<li>Issues about other facilities provided by the university(water etc.. )</li>
				</ol></li><br>
			<li><b>Unfair Treatment</b>
					<ol style="a">
						<li>Grievances about student behaviour towards other students</li>
						<li>Grievances about Faculty & staff behaviour towards other students</li>
					</ol></li><br>
			<li><b>Harassment and Discrimination</b>
				<ol style="a">
					<li>Issues related to harassment (sexual)</li>
					<li>Issues about Discrimination or racial treatment</li>
				</ol></li>
		</ol>
	</p>
	</div>
	<br><br>
	<div id="p4" class="container">
		<b id="topic" id="p4"><p>Grievance Handling Procedure:</b></p>
	<ol type="i">
	<li>Verification/validation and approval of grievance by the administrator</li>
	<li>Approved grievance passed on to mentor and mentor takes required action</li>
	<li>Found more serious grievance passed to higher authority by the mentor</li>
	<li>Further investigation is conducted.</li>
	<li>A decision is made and communicated to the student.</li>
	<li>If the grievance is rejected, or it was resolved but the student was not satisfied with the resolution, the grievance may be taken to the next level in the management hierarchy.</li>
	
	</ol>
	</div>
	<br><br>
	<div id="p5" class="container">
		<p id="p5"><b id="topic">Steps:</b></p>
	<p>
		<table id="step1" class="table table-bordered">
			<tr>
			<td>
				<table class="table table-condensed">
				<tr >
					<th id="step2">1<sup>st</sup> Step</th>
					<th id="step">File Grievance</th>
					<tr><td colspan="2"><br>Provide an online platform for college to receive and dispose grievances.</td>
				</tr></tr>
				
				</table>
			</td>
			
			<td>
				<table class="table table-condensed">
				<tr >
					<th id="step2"> 2<sup>nd</sup> Step</th>
					<th id="step">Action Taken</th>
					<tr><td colspan="2"><br>Admin level access to Management to check and act on the complaint logged.</td>
				</tr></tr>
				
				</table>
			</td>
			<td>
				<table class="table table-condensed">
				<tr >
					<th id="step2">3<sup>th</sup> Step</th>
					<th id="step">Check Report</th>
					<tr><td colspan="2"><br>Generate monthly status reports regarding the number of grievances received, disposed of and pending to send it to AICTE</td>
				</tr></tr>
				
				</table>
			</td>
			</tr>
	
		</table>
		
	</p>
	</div>
	<br><br>
	<div id="p6" class="container">
		<p id="p6"><b id="topic">Important Features:</b></p>
	<table class="table" id="tif">
	<p>
		<tr>
			<td>
				<table class="table table-condensed">
				<tr >
					<td > <img src="../img/1.jpg" class="img-thumbnail"/></td>
					<th id="if1">100% Responsive and Fast</th>
					<tr><td colspan="2"><br>Allows Instant complaint register and replies.</td>
				</tr></tr>
				
				</table>
			</td>
			
			<td>
				<table class="table table-condensed">
				<tr >
					<td > <img src="../img/2.png" class="img-thumbnail"/></td>
					<th id="if1">User Friendly</th>
					<tr><td colspan="2"><br>Minimal fields to start and can accept future integrations.</td>
				</tr></tr>
				
				</table>
			</td>
			
			<td>
				<table class="table table-condensed">
				<tr >
					<td > <img src="../img/3.png" class="img-thumbnail"/></td>
					<th id="if1">Categorization</th>
					<tr><td colspan="2"><br>Store data as per varied categories.</td>
				</tr></tr>
				
				</table>
			</td>
		</tr>
		<tr>
			<td></td><td></td>
		</tr>
		<tr>
			<td>
				<table class="table table-condensed">
				<tr >
					<td > <img src="../img/4.png " class="img-thumbnail"/></td>
					<th id="if1">Attachments</th>
					<tr><td colspan="2"><br>Upload screenshots and attachments to replies.</td>
				</tr></tr>
				
				</table>
			</td>
			
			<td>
				<table class="table table-condensed">
				<tr >
					<td > <img src="../img/5.png" class="img-thumbnail"/></td>
					<th id="if1">Notifications</th>
					<tr><td colspan="2"><br>Email notifications and Email piping.</td>
				</tr></tr>
				
				</table>
			</td>
			
			<td>
				<table class="table table-condensed">
				<tr >
					<td > <img src="../img/6.jpg" class="img-thumbnail"/></td>
					<th id="if1">Statistics</th>
					<tr><td colspan="2"><br>Analytics dashboard with many informative reports.</td>
				</tr></tr>
				
				</table>
			</td>
		
		</tr>
		<tr>
			<td></td><td></td>
		</tr>
		<tr>
			<td>
				<table class="table table-condensed">
				<tr >
					<td > <img src="../img/7.png" class="img-thumbnail"/></td>
					<th id="if1">Secure</th>
					<tr><td colspan="2"><br>Secure fields for sensitive information.</td>
				</tr></tr>
				
				</table>
			</td>
			
			<td>
				<table class="table table-condensed">
				<tr >
					<td > <img src="../img/8.png" class="img-thumbnail"/></td>
					<th id="if1">Customization</th>
					<tr><td colspan="2"><br>Branding & data customized as per college.</td>
				</tr></tr>
				
				</table>
			</td>
			
			<td>
				<table class="table table-condensed">
				<tr >
					
				</tr>
				
				</table>
			</td>
		
		</tr>
	</p>
	</table>
	
	
	</div>
	
	</div>
	<div id="dleft" class="container">
	<ul type="none" id="li1" >
	<li><b><a href="#d1" id="ali">Top ^</a></b></li>
	</ul></div>
	<br><br>
	</div>
  </body>