<?php
	$active_nav = 'DASHBOARD';
	include 'teacher_header.php'; 
	include 'teacher_sidebar.php';
?>
	<div class="page-content">
		<div class="span8">
			<div class="row-fluid">
				<div class="span12 content">
					<p class="pull-right">
						<a href="teacher_addExam.php" class="btn btn-large btn-primary"><i class="icon-white icon-plus"></i> New Exam</a>
					</p>
					<img class="title-icons" src="images/icons/Pensils@2x.png">
					<h3>On-going Exams</h3>
					<table class="table table-striped">
						<thead>
							<tr>
								<th width="20%">Class</th>
								<th width="30%">Essay</th>
								<th width="15%">Start</th>
								<th width="15%">Deadline</th>
								<th width="10%"></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>I - Amethyst</td>
								<td>My Summer Vacation</td>
								<td>July 15, 2013</td>
								<td>July 19, 2013</td>
								<td><center><a href="teacher_submissions.php">View</a></center></td>
							</tr>
							 <tr>
								<td>I - Opal</td>
								<td>My Summer Vacation</td>
								<td>July 15, 2013</td>
								<td>July 19, 2013</td>
								<td><center><a href="teacher_submissions.php">View</a></center></td>
							</tr>
							<tr>
								<td>II - Constantine</td>
								<td>Status of Philippine Economy</td>
								<td>July 15, 2013</td>
								<td>July 19, 2013</td>
								<td><center><a href="teacher_submissions.php">View</a></center></td>
							</tr>
							<tr>
								<td>II - Zeus</td>
								<td>Status of Philippine Economy</td>
								<td>July 15, 2013</td>
								<td>July 19, 2013</td>
								<td><center><a href="teacher_submissions.php">View</a></center></td>
							</tr>
							<tr>
								<td>III - Wisdom</td>
								<td>Ancient Civilization</td>
								<td>July 15, 2013</td>
								<td>July 19, 2013</td>
								<td><center><a href="teacher_submissions.php">View</a></center></td>
							</tr>
							<tr>
								<td>III - Hope</td>
								<td>Ancient Civilization</td>
								<td>July 15, 2013</td>
								<td>July 19, 2013</td>
								<td><center><a href="teacher_submissions.php">View</a></center></td>
							</tr>
						</tbody>
					</table>
					<hr>
					<img class="title-icons" src="images/icons/Retina-Ready@2x.png">
					<h3>Grade Essay</h3>
					<table class="table table-striped">
						<thead>
							<tr>
								<th width="20%">Class</th>
								<th width="30%">Essay</th>
								<th width="15%">Date Ended</th>
								<th width="10%"></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>I - Amethyst</td>
								<td>My Summer Vacation</td>
								<td>July 19, 2013</td>
								<td><center><a href="teacher_manualChecking.php">Grade</a></center></td>
							</tr>
							 <tr>
								<td>I - Opal</td>
								<td>My Summer Vacation</td>
								<td>July 19, 2013</td>
								<td><center><a href="teacher_manualChecking.php">Grade</a></center></td>
							</tr>
							<tr>
								<td>II - Constantine</td>
								<td>Status of Philippine Economy</td>
								<td>July 19, 2013</td>
								<td><center><a href="teacher_manualChecking.php">Grade</a></center></td>
							</tr>
							<tr>
								<td>II - Zeus</td>
								<td>Status of Philippine Economy</td>
								<td>July 19, 2013</td>
								<td><center><a href="teacher_manualChecking.php">Grade</a></center></td>
							</tr>
							<tr>
								<td>III - Wisdom</td>
								<td>Ancient Civilization</td>
								<td>July 19, 2013</td>
								<td><center><a href="teacher_manualChecking.php">Grade</a></center></td>
							</tr>
							<tr>
								<td>III - Hope</td>
								<td>Ancient Civilization</td>
								<td>July 19, 2013</td>
								<td><center><a href="teacher_manualChecking.php">Grade</a></center></td>
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
