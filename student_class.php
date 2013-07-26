<?php
	$active_nav = 'CLASSES';
	include 'student_header.php'; 
	include 'student_sidebar.php';
?>		
<div class="page-content">
	<div class="span8">
		<div class="row-fluid">
			<div class="span12 content">
				<div class="row-fluid">
					<div class="span11">
						<img class="title-icons" src="images/icons/Clipboard@2x.png">
						<h3 class="title">My Classes</h3>
					</div>
					<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th><center>#</center></th>
							<th><center>Class Name</center></th>
							<th><center>Academic Year</center></th>
							<th><center>Status</center></th>
							<th><center></center></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><center>1</center></td>
							<td><center>English II</center></td>
							<td><center>2011-2012</center></td>
							<td><center>Active</td>
							<td><center><a>View</a></center></td>
						</tr>
						<tr>
							<td><center>2</center></td>
							<td><center>English I</center></td>
							<td><center>2010-2011</center></td>
							<td><center>Inactive</td>
							<td><center><a>View</a></center></td>
						</tr>					
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>