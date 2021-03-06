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
					<div class="span11">
						<img class="title-icons" src="images/icons/Clipboard@2x.png">
						<h3 class="title">My Classes</h3>
					</div>
					<div class="span1">
						<a href="teacher_addNewClass.php" data-toggle="tooltip" data-trigger="hover" data-placement="left" title data-original-title="Add New Class" class="btn btn-warning"><i class="fui-plus"></i></a>
					</div>
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th><center>#</center></th>
							<th><center>Class Name</center></th>
							<th><center>Students</center></th>
							<th><center>Edit</center></th>
							<th><center>Delete</center></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><center>1</center></td>
							<td><center>I-Amethyst</center></td>
							<td><center>35</center></td>
							<td><center><a href="

teacher_editClass.php" class="btn btn-primary"><span class=""><i class="fui-new"></i></span></a></center></td>
							<td><center><button onclick="return confirm('Are you sure you want to delete this class?')" class="btn btn-danger"><span class=""><i class="fui-cross"></i></span></button></center></td>
						</tr>
						<tr>
							<td><center>1</center></td>
							<td><center>I-Opal</center></td>
							<td><center>35</center></td>
							<td><center><a href="

teacher_editClass.php" class="btn btn-primary"><span class=""><i class="fui-new"></i></span></a></center></td>
							<td><center><button onclick="return confirm('Are you sure you want to delete this class?')" class="btn btn-danger"><span class=""><i class="fui-cross"></i></span></button></center></td>
						</tr>
						<tr>
							<td><center>2</center></td>
							<td><center>II-Constantine</center></td>
							<td><center>33</center></td>
							<td><center><a href="

teacher_editClass.php" class="btn btn-primary"><span class=""><i class="fui-new"></i></span></a></center></td>
							<td><center><button onclick="return confirm('Are you sure you want to delete this class?')" class="btn btn-danger"><span class=""><i class="fui-cross"></i></span></button></center></td>
						</tr>
						<tr>
							<td><center>3</center></td>
							<td><center>II-Zeus</center></td>
							<td><center>42</center></td>
							<td><center><a href="

teacher_editClass.php" class="btn btn-primary"><span class=""><i class="fui-new"></i></span></a></center></td>
							<td><center><button onclick="return confirm('Are you sure you want to delete this class?')" class="btn btn-danger"><span class=""><i class="fui-cross"></i></span></button></center></td>
						</tr>
						<tr>
							<td><center>4</center></td>
							<td><center>III-Wisdom</center></td>
							<td><center>44</center></td>
							<td><center><a href="

teacher_editClass.php" class="btn btn-primary"><span class=""><i class="fui-new"></i></span></a></center></td>
							<td><center><button onclick="return confirm('Are you sure you want to delete this class?')" class="btn btn-danger"><span class=""><i class="fui-cross"></i></span></button></center></td>
						</tr>
						<tr>
							<td><center>3</center></td>
							<td><center>III-Hope</center></td>
							<td><center>39</center></td>
							<td><center><a href="

teacher_editClass.php" class="btn btn-primary"><span class=""><i class="fui-new"></i></span></a></center></td>
							<td><center><button onclick="return confirm('Are you sure you want to delete this class?')" class="btn btn-danger"><span class=""><i class="fui-cross"></i></span></button></center></td>
						</tr>
						<tr>
							<td><center>3</center></td>
							<td><center>III-Love</center></td>
							<td><center>48</center></td>
							<td><center><a href="

teacher_editClass.php" class="btn btn-primary"><span class=""><i class="fui-new"></i></span></a></center></td>
							<td><center><button onclick="return confirm('Are you sure you want to delete this class?')" class="btn btn-danger"><span class=""><i class="fui-cross"></i></span></button></center></td>
						</tr>
						<tr>
							<td><center>3</center></td>
							<td><center>IV-St. Mary</center></td>
							<td><center>40</center></td>
							<td><center><a href="

teacher_editClass.php" class="btn btn-primary"><span class=""><i class="fui-new"></i></span></a></center></td>
							<td><center><button onclick="return confirm('Are you sure you want to delete this class?')" class="btn btn-danger"><span class=""><i class="fui-cross"></i></span></button></center></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>