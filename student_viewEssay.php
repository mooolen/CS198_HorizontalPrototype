<?php
	$active_nav = 'ESSAYS';
	include 'student_header.php'; 
	include 'student_sidebar.php';
?>
	<div class="page-content">
		<div class="span8">
			<div class="row-fluid">
				<div class="span12 content">
					<img class="title-icons" src="images/icons/Clipboard@2x.png">
					<h3>View Essay</h3>
					<table class="table table-striped span8">
						<thead>
							<tr>
								<th width="55%">Essay</th>
								<th width="30%">Date Ended</th>
								<th width="10%">Score</th>
								<th width="15%"></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>My Summer Vacation</td>
								<td>July 19, 2013</td>
								<td>92%</td>
								<td><center><a href="student_viewSingleEssay.php">View</a></center></td>
							</tr>
							 <tr>
								<td>My Summer Vacation</td>
								<td>July 19, 2013</td>
								<td>90%</td>
								<td><center><a href="student_viewSingleEssay.php">View</a></center></td>
							</tr>
							<tr>
								<td>Status of Philippine Economy</td>
								<td>July 19, 2013</td>
								<td>82%</td>
								<td><center><a href="student_viewSingleEssay.php">View</a></center></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div><!--/span-->
	</div><!--/row-->
</div>
<?php include 'footer.php'; ?>
