<?php
	$active_nav = 'REPORTS';
	include 'teacher_header.php'; 
	include 'teacher_sidebar.php';
?>	


<script src="bootstrap/js/bootstrap-transition.js"></script>
<script src="bootstrap/js/bootstrap-modal.js"></script>
<script src="bootstrap/js/application.js"></script>

<link href="bootstrap/css/datetimepicker.css" rel="stylesheet"></link>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap-datepicker.min.js"></script>

<div class="page-content">
	<div class="span8">
		<div class="row-fluid">
			<div class="span12 content">
				<div class="row-fluid">
					<div class="span11">
						<img class="title-icons" src="images/icons/Pocket@2x.png">
						<h3 class="title">My Classes</h3>
					</div>
					<div class="span12">
						<form class="form-search">
							<table class="table table-striped">
								<td class="span1">
									<div class="input-prepend span10">
										<button type="submit" class="btn btn-primary">From</button>
										<input type="text" class="span2 search-query form_datetime" readonly />
									</div>
								</td>
								<td class="span1">
									<div class="input-prepend span10">
										<button type="submit" class="btn btn-primary">To</button>
										<input type="text" class="span2 search-query form_datetime" readonly />
									</div>
								</td>
								<td class="span2">
									<select name="herolist" class="select-block">
							          	<option value="Choose Item" selected="selected">Choose Item</option>
							            <option value="Student">Student</option>
							            <option value="Class">Class</option>
							            <option value="Exams">Exams</option>
							          </select>
							    </td>    
								<td class="span2">
									<a href="teacher_genReports.php" type="button" class="btn btn-primary">Search</a>
								</td>	
							</table>	
						</form>
				</div>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript">
	 $(".form_datetime").datetimepicker({format: 'yyyy-mm-dd hh:ii'});
</script>
<?php include 'footer.php'; ?>