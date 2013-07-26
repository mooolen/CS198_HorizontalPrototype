<?php
	$active_nav = 'DASHBOARD';
	include 'student_header.php'; 
	include 'student_sidebar.php';
?>
	<div class="page-content">
		<div class="span8">
			<div class="row-fluid">
				<div class="span12 content">
					<img class="title-icons" src="images/icons/Pensils@2x.png">
					<h3>On-going Exams</h3>
					<table class="table table-striped">
						<thead>
							<tr>
								<th width="15%">Class</th>
								<th width="20%">Professor</th>
								<th width="20%">Essay</th>
								<th width="15%">Deadline</th>
								<th width="10%">Duration</th>
								<th width="20%">Status</th>
								<th width="10%"></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>English</td>
								<td>Ms. Elena Dimagiba</td>
								<td>My Summer Vacation</td>
								<td>July 19, 2013</td>
								<td>1 hour</td>
								<td>[Started] 31 mins left</td>
								<td><center><a href="student_takeExam.php">Continue</a></center></td>
							</tr>
							 <tr>
								<td>English</td>
								<td>Ms. Elena Dimagiba</td>
								<td>Who Am I?</td>
								<td>July 25, 2013</td>
								<td>1 hour 30 minutes</td>
								<td>Not yet started</td>
								<td><center><a href="student_takeExam.php">Start</a></center></td>
							</tr>					
						</tbody>
					</table>
					<hr>
					<img class="title-icons" src="images/icons/Watches@2x.png">
					<h3 class="title">Recent Activity</h3>
					<ul>
						<li><small>[10:23 am] Started "My Summer Vacation" essay test for I-Amethyst. </li>
						<li><small>[10:23 am] Started "My Summer Vacation" essay test for I-Opal. </li>
						<li><small>[10:23 am] Started "Status of Philippine Economy" essay test for II-Constantine. </li>
						<li><small>[10:23 am] Started "Status of Philippine Economy" essay test for II-Zeus. </li>
						<li><small>[10:23 am] Started "Ancient Civilization" essay test for III-Wisdom. </li>
						<li><small>[10:23 am] Started "Ancient Civilization" essay test for III-Hope. </li>
					</ul>
				</div>
			</div>
		</div><!--/span-->
	</div><!--/row-->
</div>
<?php include 'footer.php'; ?>
