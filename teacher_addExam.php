<?php
	$active_nav = 'EXAMS';
	include 'teacher_header.php'; 
	include 'teacher_sidebar.php';
?>
		
<div class="page-content">
	<style>
	#myModal {    
	    width: 70%;
	    margin-left: -30%;
	    left: 45%;
	}
	</style>
	<div class="page-content">
		<div id="myModal" data-backdrop="static" data-keyboard="false" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-header">
		    <h3 id="myModalLabel">Send Invitation</h3>
		  </div>
		  <div class="modal-body">
		  		<section>Please review the invitation below carefully. You may not cancel an invitation once it has been submitted. If you wish to make any changes, click <b>"Edit"</b>. 
		  			If you are ready to submit your invitation, click <b>"Send Invitation"</b>.<br/><br/>
		  			Number of people to invite: <b>1</b>
		  		</section><br/>
		    	<div style="margin-top: 10px; padding: 8px 35px 8px 14px; margin-bottom: 10px; text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5); background-color: #f2dede;  -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px;">		
					
					<th style="width: 800px">
						<center>
						<div style=" font-size: 25px; color: #b94a48; font-weight: bold;" >You have been invited to take this exam!</div>
						</center>
					</th>
				</div>
				<div class="alert alert-success">	
			  		
			  			<b>From:</b> &nbsp; &nbsp; tecs moderator<br/>
			  			<b>Subject:</b> Invitation to take the <b>1st Quarter Periodical Exam in English</b><br/><br/>
				  		This invitation expires in 30 days.<br/><br/>
						<button style="margin-left: 89%" class="btn btn-success" >Take this Exam</button>
		  		</div>
		  </div>
		  <div class="modal-footer">
		    <button class="btn btn-success" onClick="redirect()" >Send Invitation <i class="fui-check"></i></button>
		    <button type="button" class="btn btn-warning" data-dismiss="modal" aria-hidden="true">Edit <i class="fui-new"></i></button>
		    <button class="btn btn-danger" onClick="redirect()" >Cancel <i class="fui-cross"></i></button>
		  </div>
		</div>

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
								<a href="#myModal" role="button" data-toggle="modal" class="btn btn-primary"><b>Save</b><i class="fui-check"></i></a> 
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
