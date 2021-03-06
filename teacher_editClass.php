<?php
	$active_nav = 'CLASSES';
	include 'teacher_header.php'; 
	include 'teacher_sidebar.php';
?>		
<body>
<div class="page-content">
	<div class="span8">
		<div class="row-fluid">
			<div class="span12 content">
				<img class="title-icons" src="images/icons/user.png">
				<h3 class="title">Edit Class Information</h3>
				<form class="form-horizontal span8"> 
					<fieldset>	
						<div class="control-group">
							<label class="control-label" for="level">Year Level</label>
							<div class="controls">
								<input type="text" placeholder="Required" class="span3" name="level" id="level" required value="1" />
							</div>	
						</div> 					
						<div class="control-group">
							<label class="control-label" for="className">Section</label>
							<div class="controls">
								<input type="text" placeholder="Required" class="span3" name="className" id="className" value="Amethyst" required />
							</div>
						</div> 
					 	<div class="control-group">  
							<label class="control-label" for="classKey">Student Name</label>  
							<div class="controls">
								<div id="add_more_div"></div>
								<div>
									<br>
									<ul class="unstyled">
										<li>Cruz, Juana O.</li>
										<li>De Leon, Juana R.</li>
										<li>Mapalo, Danica C.</li>
										<li>Sia, Efren Ver M.</li>
										<li>Tolentino, Pedro K.</li>
									</ul>
									<input class="span3" name="add_more[]" type="text" id="part0" placeholder="Required" value="" required />		
									<button type="button" data-toggle="tooltip" data-placement="right" title="Add Student" onclick="add_more_text_box('add_more_div','add_more[]',child());" class="btn btn-primary mtm" ><i class="fui-plus"></i></button>	
								</div>
							</div>
					  	</div>
						<div class="form-actions">  
							<button type="submit" class="btn btn-primary"><b>Save</b> <i class="fui-check"></i></button> 
							<button type="reset" class="btn btn-warning"><b>Reset</b> <i class="fui-play"></i></button> 
							<a href="class.php" type="button" class="btn btn-danger"><b>Cancel</b>  <i class="fui-cross"></i></a>  
						</div>   
		  			</fieldset>
				</form>
			</div>
		</div>
	</div>
</div>
<script>
	function add_more_text_box(parent_id, child_name, child_id)
	{
	  var myTable = document.getElementById(parent_id);
	  var oDiv, oInput, sss;
	  oDiv = document.createElement('div');
	  oDiv.setAttribute('id', 'part'+ child_id);
	  
	  oDiv.setAttribute('class', 'control-group');
	  myTable.appendChild(oDiv);
	
	  oInput = document.createElement('input');
	  oInput.setAttribute('type', 'text');
	  oInput.setAttribute('required', true);
	  oInput.setAttribute('name', child_name);
	  oInput.setAttribute('id', child_id);
	  oInput.setAttribute('placeholder', 'Required');
	  oInput.setAttribute('class', 'span3');
	  oDiv.appendChild(oInput);
	} 
	
	var child_id = 1;
	function child()
	{ 
		return child_id++;
	}	
</script>
<?php include 'footer.php'; ?>