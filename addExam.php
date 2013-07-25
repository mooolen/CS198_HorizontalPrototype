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
										  <input type="text" class="input-xlarge span4" id="inputtitle" required>   
										</div>  
									  </div>  
									  
									  
									  <div class="control-group">  
										<label class="control-label" for="inputinst">Instructions</label>  
										<div class="controls">  
										  <textarea class="input-xlarge span4" id="inputinst" rows="3"></textarea>  
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
									  <label class="control-label" for="inputequivalence">Equivalence Table</label>
									  <div class="controls" id= "inputequivalence" >
										<input type="text" class="input-xlarge span4" id="inputeq" rows = "3" placeholder = "grade = equivalent range;">										
										</div>
									</div>
									 
									<div class="control-group">
									  <label class="control-label" for="inputcriteria">Criteria for Grading</label>
									  <div class="controls" id= "inputcriteria" >
										<div id="add_more_div"></div>
									  	<table name="add_more[]">
											<td><input type="text" class="span5" id="criteria1" placeholder="Criterion" required></td>
											<td><input type="text" class="span5" id="criteria1" placeholder= "%" required> </td>
											<td><button type="button" data-toggle="tooltip" data-placement="right" title="Add Criterion" onclick="add_more_text_box('add_more_div','add_more[]',child(), 0);" class="btn btn-primary" ><i class="fui-plus"></i></button></td>
										</table>
									  
									</div>
									</div>
										
										<div class="control-group">  
										<label class="control-label" for="inputduration">Duration</label>
										<div class="controls">  
										  <input type="text" class="input-xlarge span4" id="inputduration" placeholder="hh:mm">   
										</div>  
									  </div> <!--slider? dropdown? picker?-->
									  
									<div class="control-group"> 
										<label class="control-label" for="q1">Question</label>  
										<div class="controls"> 
										  <div id="table"></div>
										   <textarea class="input-xlarge span4" id="q1" rows="2"></textarea>  
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
	  var oDiv, oInput, sss, onemore, ttt, uuu, del;
	  oDiv = document.createElement('table');
	  sss = document.createElement('td');
	  ttt = document.createElement('td');
	  uuu = document.createElement('td');
	  oDiv.setAttribute('id', 'part'+ child_id);
	  
	  myTable.appendChild(oDiv);
	
	  oInput = document.createElement('input');
	  del = document.createElement('button');
	  del.setAttribute('type', 'button');
	  del.setAttribute('class', 'btn btn-primary fui-cross removeVar');
	  del.setAttribute('data-toggle', 'tooltip');
	  del.setAttribute('data-placement', 'right');
	  del.setAttribute('title', 'Remove Criterion');
	  uuu.appendChild(del);

	  oInput.setAttribute('type', 'text');
	  oInput.setAttribute('required', true);
	  oInput.setAttribute('name', child_name);
	  oInput.setAttribute('id', child_id);
	  oInput.setAttribute('placeholder', 'Criterion');
	  oInput.setAttribute('class', 'span3');
	  sss.appendChild(oInput);

	onemore = document.createElement('input');
	onemore.setAttribute('type', 'text');
	onemore.setAttribute('required', true);
	onemore.setAttribute('name', child_name);
	onemore.setAttribute('id', child_id);
	onemore.setAttribute('class', 'span1');
	onemore.setAttribute('placeholder', '%');
	ttt.appendChild(onemore);

	oDiv.appendChild(sss);
	oDiv.appendChild(ttt);
	oDiv.appendChild(uuu);
  }
	} 
	
	var child_id = 1;
	function child()
	{ 
		return child_id++;
	}	

	$(document).ready(function() 
    { 
		$('form').on('click', '.removeVar', function(){
			$(this).parent().parent().parent().remove();
		});
    } );

</script>

<?php include 'footer.php'; ?>