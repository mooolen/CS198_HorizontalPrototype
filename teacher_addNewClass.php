<?php
	$active_nav = 'CLASSES';
	include 'teacher_header.php'; 
	include 'teacher_sidebar.php';
?>	
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
					<div style=" font-size: 25px; color: #b94a48; font-weight: bold;" >You have been invited to join this class!</div>
					</center>
				</th>
			</div>
			<div class="alert alert-success">	
		  		
		  			<b>From:</b> &nbsp; &nbsp; tecs moderator<br/>
		  			<b>Subject:</b> Invitation to join the <b>II-Sampaguita</b><br/><br/>
			  		This invitation expires in 30 days.<br/><br/>
					<button style="margin-left: 89%" class="btn btn-success" >Join this Class</button>
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
				<img class="title-icons" src="images/icons/plus.png">
				<h3 class="title">Add New Class</h3>
				<div class="row-fluid">
					<form class="form-horizontal">	
						<fieldset>	
								<div class="control-group">
									<label class="control-label" for="level">Year Level</label>
									<div class="controls">
										<div class="span7">
											<input type="text" placeholder="Required" class="span4" name="level" id="level" required  />
										</div>
									</div>	
								</div> 					
								<div class="control-group">
									<label class="control-label" for="className">Section</label>
									<div class="controls">
										<div class="span7">
											<input type="text" placeholder="Required" class="span4" name="className" id="className" required />
										</div>
									</div>
								</div> 
								<div class="control-group">  
									<label class="control-label" for="classKey">Student Email Address</label>  
									<div class="controls">
										<div>
											<p><em>Please enter one person per line. For example:</em></p>
											<div style="padding-left: 25px">
												<i>cheryleighverano@gmail.com<br/>master@yahoo.com</i>
											</div>
										</div><br/>
										<div class="span7">
											<textarea class="input-xlarge span4" id="q1" rows="2" placeholder="Emails"></textarea>
										</div>
									</div>
							  	</div>		
								<div class="form-actions">	
									<a href="#myModal" role="button" data-toggle="modal" class="btn btn-primary"><b>Save</b><i class="fui-check"></i></a> 
									<button type="reset" class="btn btn-warning"><b>Reset</b><i class="fui-play"></i></button> 
									<a href="class.php" type="button" class="btn btn-danger"><b>Cancel</b>	<i class="fui-cross"></i></a>	
								</div>	 
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="bootstrap/js/bootstrap-transition.js"></script>
<script src="bootstrap/js/bootstrap-modal.js"></script>
<script src="bootstrap/js/application.js"></script>

<script>
	function redirect () {
		window.location = "class.php";
	}
</script>

<?php include 'footer.php'; ?>