<?php
	$active_nav = 'DASHBOARD';
	include 'teacher_header.php'; 
	include 'teacher_sidebar.php';
?>
<body>
<div class="page-content">
	<div class="span8">
		<div class="row-fluid">
			<div class="span12 content">
				<img class="title-icons" src="images/icons/user.png">
				<h3 class="title">Edit Profile</h3>
				<form class="form-horizontal">	
					<fieldset>
						<div class="control-group">
							<label class="control-label" for="lName">Last Name</label>
							<div class="controls">
								<input type="text" placeholder="Required" class="span3" name="lName" id="lName" value="Dimagiba" required /> 
							</div>	
						</div>	
						<div class="control-group">
							<label class="control-label" for="fName">First Name</label>
							<div class="controls">
								<input type="text" placeholder="Required" class="span3" name="fName" id="fName" value="Elena" required /> 
							</div>	
						</div>	
						<div class="control-group">
							<label class="control-label" for="mName">Middle Name</label>
							<div class="controls">
								<input type="text" placeholder="Required" class="span3" name="mName" id="mName" value="Monesit" required /> 
							</div>	
						</div> 
						<div class="control-group">
							<label class="control-label" for="street">Street</label>
							<div class="controls">
								<input type="text" placeholder="Required" class="span3" name="street" id="street" value="2122 B, Concha" required /> 
							</div>	
						</div> 
						<div class="control-group">
							<label class="control-label" for="municipality">Municipality</label>
							<div class="controls">
								<input type="text" placeholder="Required" class="span3" name="municipality" id="municipality" value="San Andres, Malate" required /> 
							</div>	
						</div>
						<div class="control-group">
							<label class="control-label" for="province">Province</label>
							<div class="controls">
								<input type="text" placeholder="Required" class="span3" name="province" id="province" value="Manila" required /> 
								</div>	
						</div> 
						<div class="control-group">
							<label class="control-label" for="mobile">Mobile Number</label>
							<div class="controls">
								<input type="text" placeholder="Required" class="span3" name="mobile" id="mobile" value="09164632369" required /> 
							</div>	
						</div> 
						<div class="form-actions">	
							<button type="submit" class="btn btn-primary"><b>Save</b> <i class="fui-check"></i></button> 
							<button type="reset" class="btn btn-warning"><b>Reset</b> <i class="fui-play"></i></button> 
								<a href="profile.php" type="button" class="btn btn-danger"><b>Cancel</b>	<i class="fui-cross"></i></a>	
						</div>	 
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>