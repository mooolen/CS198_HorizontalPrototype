<?php
	$active_nav = 'CLASSES';
	include 'teacher_header.php'; 
	include 'teacher_sidebar.php';
?>		
<div class="page-content">
	<div class="span8">
		<div class="row-fluid">
			<div class="span12 content">
				<div class="row-fluid">
					<img class="title-icons" src="images/icons/Clipboard@2x.png">
					<h3 class="title">My Classes</h3>
					Essay Topic:<p class="lead">My Summer Vacation</p>
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th><center>#</center></th>
							<th><center>Student Name</center></th>
							<th><center>Essay Title</center></th>
							<th><center>Date Submitted</center></th>
							<th><center></center></th>
						</tr>
					</thead>
					<tbody>						
						<tr>
							<td><center>1</center></td>
							<td><center>Abra, Patrick</center></td>
							<td><center>I'll Come Again in Camiguin</center></td>
							<td><center>July 15 3:02 PM</center></td>
							<td><center><p class="text-error">Graded</p></center></td>
						</tr>
						<tr>
							<td><center>2</center></td>
							<td><center>Cortez, Jan</center></td>
							<td><center>Summer Life is Gaming Life</center></td>
							<td><center>July 15 6:32 PM</center></td>
							<td><center><a href="teacher_manualChecking.php">Grade</a></center></td>
						</tr>
						<tr>
							<td><center>1</center></td>
							<td><center>Gonzales, Kimi</center></td>
							<td><center>Spending my Summer with Lola</center></td>
							<td><center>July 16 8:00 AM</center></td>
							<td><center><a href="teacher_manualChecking.php">Grade</a></center></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>