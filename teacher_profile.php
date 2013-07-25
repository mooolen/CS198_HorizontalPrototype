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
				<h3 class="title">My Profile</h3>
				<form class="form-horizontal">
					<fieldset>
						<div class="control-group">
							<label class="control-label" for="email">Last Name</label>
							<div class="controls">
								<input type="text" style="color: #099" placeholder="Required" class="span3" name="email" id="email" value="Dimagiba" required /> 
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="email">First Name</label>
							<div class="controls">
								<input type="text" style="color: #099" placeholder="Required" class="span3" name="email" id="email" value="Elena" required /> 
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="email">Email Address</label>
							<div class="controls">
								<input type="text" style="color: #099" placeholder="Required" class="span3" name="email" id="email" value="elenadimagiba@gmail.com" required /> 
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="address">Mailing Address</label>
							<div class="controls">
								<textarea row="4" class="span3" name="address" id="address" required >2122 B, Concha, San Andres, Malate Manila</textarea>
							</div>	
						</div>
						<div class="control-group">
							<label class="control-label" for="mobile">Mobile number</label>
							<div class="controls">
								<input type="text" placeholder="Required" class="span3" name="mobile" id="mobile" value="09164632369" required /> 
							</div>	
						</div>
						<div class="form-actions">	
							<a href="teacher_editProfile.php" type="button" class="btn btn-warning"><b>Edit Profile</b> <i class="fui-user"></i></a> 
							<a href="changePassword.php" type="button" class="btn btn-warning"><b>Change Password</b> <i class="fui-lock"></i></a>	
						</div>	 
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>