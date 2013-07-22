<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<head>
	<style type="text/css">
	   .demo-text-box{
		color: #000;
		padding: 7px;
		border:2px solid;
		border-radius:0px;
		border-color:#1abc9c;
		}
	
  </style>
</head>
<body>
<div class="page-content">
	<div class="span8">
		<div class="row-fluid">
			<div class="span12 content">
			<form class="form-horizontal">  
				<fieldset>	
					<img class="title-icons" src="images/icons/Retina-Ready@2x.png">
					<h3 class="title">Review Essay Score</h3>
					<div class="control-group"> 
				  <div class="palette-turquoise">
				   <button class="btn btn-primary"><b>Spelling Error</b> <i class="fui-cross"></i></button>
					<button class="btn btn-primary"><b>Grammar Error</b> <i class="fui-cross"></i></button> 
					<button class="btn btn-primary"><b>Content Error</b> <i class="fui-cross"></i></button> 
					<button class="btn btn-primary"><b>Add note</b>  <i class="fui-chat"></i></button>
				   </div>
				  <div class="demo-text-box prl">
				   <h4><center><strong> Lorem Ipsum </strong></center> </h4>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.   Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
					<p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
					<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
					<p> Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
					
				   <p> Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. </p>
				  </div><!-- text box , di dapat ganito to, dapat may border and "tools"-->
				</div>
				  <div class="control-group">
					  <label class="control-label" for="inputfeedback">Rating</label>
					  <div class="controls" id= "inputfeedback">
						<br>
						<div class="row-fluid">
							<div class="span2">Content</div>
							<div class="span2 control-group">
								<input type="text" class="span3" id="criteria1" required> 
							 	<i class= "input-icon">%</i>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span2">Creativity</div>
							<div class="span2 control-group">
								<input type="text" class="span3" id="criteria1" required> 
							 	<i class= "input-icon">%</i>
							</div>
						</div>
					</div>
				  </div> 
				  
				  <div class="control-group">  
					<label class="control-label" for="inputinst">General Feedback</label>  
					<div class="controls">  
					  <textarea class="input-xlarge" id="inputinst" rows="3"></textarea>  
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
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>