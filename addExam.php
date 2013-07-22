<?php $active_nav = 'EXAMS'?>
<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
		
			<div class="page-content">
				<div class="span8">
					<div class="row-fluid">
						<div class="span12 content">
							<img class="title-icons" src="images/icons/Watches@2x.png">
							<h3 class="title">New Exam</h3>
							<div class="span11">
								<form class="form-horizontal">  
									<fieldset>
									  <div class="control-group">  
										<label class="control-label" for="inputtitle">Exam Title</label>  
										<div class="controls">  
										  <input type="text" class="input-xlarge" id="inputtitle" required>   
										</div>  
									  </div>  
									  
									  <div class="control-group">  
										<label class="control-label" for="inputkey">Exam Key</label>  
										<div class="controls">  
										  <input type="password" class="input-xlarge" id="inputkey" required>   
										</div>  
									  </div>  
									  
									  <div class="control-group">  
										<label class="control-label" for="inputkey2">Re-enter Exam Key</label>              
										<div class="controls">  
										  <input type="password" class="input-xlarge" id="inputkey2" required>   
										</div>  
									  </div>  
									  
									  <div class="control-group">  
										<label class="control-label" for="inputinst">Instructions</label>  
										<div class="controls">  
										  <textarea class="input-xlarge" id="inputinst" rows="3"></textarea>  
										</div>  
									  </div>
									  									  
									<div class="control-group">
									  <label class="control-label" for="inputgradingsys">Grading System</label>
									  <div class="controls" id= "inputgradingsys" >
											<select name="gradingsys" value = "0" class="select-block">
												<option value="0" selected="selected">Number System (1.0-5.0)</option>
												<option value="1">Letter System (A-F)</option>
												<option value="2">Raw Score (0%-100%)</option>
												<option value="3">Create your own</option>
											</select>											
										</div>
									</div>								  
									<div class="control-group">
									  <label class="control-label" for="inputequivalence">Grading System</label>
									  <div class="controls" id= "inputequivalence" >
										<input type="text" class="input-xlarge" id="inputeq" rows = "3" placeholder = "grade = equivalent range;">										
										</div>
									</div>
									 
									<div class="control-group">
									  <label class="control-label" for="inputcriteria">Criteria for Grading</label>
									  <div class="controls" id= "inputcriteria" >
										<div id="add_more_div"></div>
									  <div style="display:inline-block" name="add_more[]">
										<input type="text" class="span3" id="criteria1" placeholder="Criterion" required>
										<input type="text" class="span1" id="criteria1" placeholder = "%" required> 
										</div>
									  
										<button type="button" data-toggle="tooltip" data-placement="right" title="Add Criterion" onclick="add_more_text_box('add_more_div','add_more[]',child(), 0);" class="btn btn-primary" ><i class="fui-plus"></i></button>
									</div>
									</div>
										
										<div class="control-group">  
										<label class="control-label" for="inputduration">Duration</label>
										<div class="controls">  
										  <input type="text" class="input-xlarge" id="inputduration" placeholder="hh:mm">   
										</div>  
									  </div> <!--slider? dropdown? picker?-->
									  
									<div class="control-group"> 
										<label class="control-label" for="q1">Question</label>  
										<div class="controls"> 
										  <div id="table"></div>
										   <textarea class="input-xlarge" id="q1" rows="2"></textarea>  
										</div>  
									</div>
									
									 <div class="form-actions">  
										<button type="submit" class="btn btn-primary"><b>Save</b> <i class="fui-check"></i></button> 
										<button type="reset" class="btn btn-warning"><b>Reset</b> <i class="fui-play"></i></button> 
										<button class="btn btn-danger"><b>Cancel</b>  <i class="fui-cross"></i></button>  
									  </div>    
									</fieldset>
								</form> 
							</div>
						</div> <!--span12-->
					</div>
				</div>
			</div>
		</div>

<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-select.js"></script>
<script src="js/application.js"></script>

<script>
	function add_more_text_box(parent_id, child_name, child_id, num)
	{
	  var myTable = document.getElementById(parent_id);
	  if( !num ){
	var oDiv, oInput, sss, onemore;
	  oDiv = document.createElement('div');
	  oDiv.setAttribute('id', 'part'+ child_id);
	  
	  oDiv.setAttribute('class', 'control-group');
	  myTable.appendChild(oDiv);
	
	  oInput = document.createElement('input');
	  oInput.setAttribute('type', 'text');
	  oInput.setAttribute('required', true);
	  oInput.setAttribute('name', child_name);
	  oInput.setAttribute('id', child_id);
	  oInput.setAttribute('placeholder', 'Criterion');
	  oInput.setAttribute('class', 'span3');

	onemore = document.createElement('input');
	onemore.setAttribute('type', 'text');
	onemore.setAttribute('required', true);
	onemore.setAttribute('name', child_name);
	onemore.setAttribute('id', child_id);
	onemore.setAttribute('class', 'span1');
	onemore.setAttribute('placeholder', '%');

	  oDiv.appendChild(oInput);
	oDiv.appendChild(onemore);
  } else{
	  var oDiv, att;
	  oDiv = document.createElement('div');
	  oDiv.setAttribute('class', 'control-group');

	  att = document.createElement('textarea');
	  att.setAttribute('class', 'control-group');
	  att.setAttribute('id', 'part'+ child_id);
	  att.setAttribute('name', child_name);
	  att.setAttribute('class', 'input-xlarge');
	  att.setAttribute('row', '2');
	  
	  oDiv.appendChild(att);
	  myTable.appendChild(oDiv);
  }
	} 
	
	var child_id = 1;
	function child()
	{ 
		return child_id++;
	}	


</script>

<?php include 'footer.php'; ?>