<?php
	$active_nav = 'EXAMS';
	include 'student_header.php'; 
	include 'student_sidebar.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Answer Exam</title>

    <link href="bootstrap/css/prettify.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
    <script src="bootstrap/js/jquery.min.js"></script>
	<script src="bootstrap/js/jquery.hotkeys.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/prettify.js"></script>
	<link rel="stylesheet" href="css/jquery.countdown.css">	
    <link href="css/flat-ui.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap-wysiwyg.js"></script>
    <script src="bootstrap/js/ckeditor.js"></script>
	<script type="text/javascript" src="js/jquery.countdown.js"></script>
	

    <style>
		.noDays { 		
			width: 240px; 
			height: 45px; 			
			position: absolute;
			top: 5em;
			right: 14.3em;
			z-index: 9999;
			}
		#editor {
			max-height: 250px;
			height: 250px;
			background-color: white;
			border-collapse: separate; 
			border: 1px solid rgb(204, 204, 204); 
			padding: 4px; 
			box-sizing: content-box; 
			-webkit-box-shadow: rgba(0, 0, 0, 0.0745098) 0px 1px 1px 0px inset; 
			box-shadow: rgba(0, 0, 0, 0.0745098) 0px 1px 1px 0px inset;
			border-top-right-radius: 3px; border-bottom-right-radius: 3px;
			border-bottom-left-radius: 3px; border-top-left-radius: 3px;
			overflow: scroll;
			outline: none;
		}

		#wcount{
		  	color: #34495e;
		  	font-family: "Lato", sans-serif;
		  	font-size: 14px;
			padding: 8px 5px;
			height: 21px;
			text-indent: 6px;
		}
		
		#myModal {    
		    width: 50%;
		    margin-left: -30%;
		    left: 55%;
		}
	</style>

  </head>
  <body>

<div class="page-content">
	<div id="myModal" data-backdrop="static" data-keyboard="false" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-body" style="background-color: rgb(241, 196, 15); ">
		         <h3>Log-in to resume taking the exam.</h3>
		          <div class="login-form">
		            <div class="control-group">
		              <input type="text" class="login-field span4" value="" placeholder="Enter your username" id="login-name" />
		              <label class="login-field-icon fui-user" for="login-name"></label>
		            </div>

		            <div class="control-group">
		              <input type="password" class="login-field span4" value="" placeholder="Password" id="login-pass" />
		              <label class="login-field-icon fui-lock" for="login-pass"></label>
		            </div>

		            <a class="btn btn-inverse btn-large btn-block" data-dismiss="modal" aria-hidden="true" >Login</a>
		            <a class="login-link" href="#">Forgot your password?</a>
		          </div>
		  </div>
	</div>
	<div class="span8">
		<div class="row-fluid">
			<div class="span12 content">

					  <div class="noDays btn btn-danger row-fluid"></div>
			<form class="form-horizontal">  
				<fieldset>	
					<img class="title-icons" src="images/icons/Pensils@2x.png">
					<h3 class="title">Answer Exam</h3>
					
					  <div class="control-group">  
						<label class="control-label" for="title">Exam Title</label>  
						<div class="controls">  
						  <p id = "title">My Summer Vacation</p>
						</div>  
					  </div>  
					  					  
					  <div class="control-group">  
						<label class="control-label" for="inst">Instructions</label>  
						<div class="controls">  
						  <p id ="inst">Write a 200-word essay about your summer vacation. Focus and elaborate on the things you have learned and what makes it memorable.</p> 
						</div>  
					  </div>
					  
					<div class="control-group">
					  <label class="control-label" for="grading">Grading System</label>
					  <div class="controls" id= "grading">
						<br>
						<div class="row-fluid">
							<div class="span2">Content</div>
							<div class="span2 control-group">
								70%
							</div>
						</div>
						<div class="row-fluid">
							<div class="span2">Creativity</div>
							<div class="span2 control-group">
								30%
							</div>
						</div>
					</div>
				  </div> 	
						
					<div class="control-group">  
						<label class="control-label" for="inputduration">Duration</label>
						<div class="controls">  
						  2 hrs
						</div>  
					  </div> 
					  					  
					 <!--wysiwyg editor-->
					<div class="control-group"> 
						<div id="alerts"></div>
						<div class="btn-toolbar" data-role="editor-toolbar" data-target=".editor">
						  <div class="btn-group">
							<a class="btn btn-warning dropdown-toggle" data-toggle="dropdown" title="Font"><i class="icon-font"></i><b class="caret"></b></a>
							  <ul class="dropdown-menu">
							  </ul>
							</div>
						  <div class="btn-group">
							<a class="btn btn-warning dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="icon-text-height"></i>&nbsp;<b class="caret"></b></a>
							  <ul class="dropdown-menu">
							  <li><a data-edit="fontSize 5"><font size="5">Huge</font></a></li>
							  <li><a data-edit="fontSize 3"><font size="3">Normal</font></a></li>
							  <li><a data-edit="fontSize 1"><font size="1">Small</font></a></li>
							  </ul>
						  </div>
						  <div class="btn-group">
							<a class="btn btn-warning" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="icon-bold"></i></a>
							<a class="btn btn-warning" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="icon-italic"></i></a>
							<a class="btn btn-warning" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="icon-underline"></i></a>
						  </div>
						  <div class="btn-group">
							<a class="btn btn-warning" data-edit="insertunorderedlist" title="Bullet list"><i class="icon-list-ul"></i></a>
							<a class="btn btn-warning" data-edit="insertorderedlist" title="Number list"><i class="icon-list-ol"></i></a>
							<a class="btn btn-warning" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="icon-indent-left"></i></a>
							<a class="btn btn-warning" data-edit="indent" title="Indent (Tab)"><i class="icon-indent-right"></i></a>
						  </div>
						  <div class="btn-group">
							<a class="btn btn-warning" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="icon-align-left"></i></a>
							<a class="btn btn-warning" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="icon-align-center"></i></a>
							<a class="btn btn-warning" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="icon-align-right"></i></a>
							<a class="btn btn-warning" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="icon-align-justify"></i></a>
						  </div>
						  
						  <div class="btn-group">
							<a class="btn btn-warning" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="icon-picture"></i></a>
							<input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
						  </div>
						  <div class="btn-group">
							<a class="btn btn-warning" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="icon-undo"></i></a>
							<a class="btn btn-warning" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="icon-repeat"></i></a>
						  </div>
						  <div class="btn-group">
						  	<input class = 'wcount span3' type='text' id='word_count' disabled />
						  </div>
						</div>

						<div id="editor" class="wysiwyg">
						</div>


  
				  </div>
                  
				  
				  <div class="form-actions">  
					<button type="submit" class="btn btn-primary"><b>Save Draft</b> <i class="fui-new"></i></button> 
					<button type="button" onClick="confirmation()" class="btn btn-warning"><b>Submit</b> <i class="fui-check"></i></button> 
					<a href="#myModal" role="button" data-toggle="modal" class="btn btn-danger"><b>Lock</b><i class="fui-lock"></i></a>
				  </div>   
				</fieldset>
			</form> 
			</div>
		</div>
	</div>
</div>

</body>
<script>
	function confirmation(){
		var r=confirm("Are you sure you want to submit? You can no longer edit your essay if you click 'OK'.");
		if (r==true){
		  x="You pressed OK!"; //go to home
		}
	}
</script>

<script type="text/javascript">
$(function () {
	//var austDay = new Date();
	//austDay = new Date(austDay.getFullYear() + 1, 1 - 1, 26);
	//$('#noDays').countdown({until: austDay});
	var liftoffTime = 7200;
	$('.noDays').countdown({until: liftoffTime, format: 'HMS'});
});
</script>

<script>
  $(function(){
    function initToolbarBootstrapBindings() {
      var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier', 
            'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
            'Times New Roman', 'Verdana'],
            fontTarget = $('[title=Font]').siblings('.dropdown-menu');
      $.each(fonts, function (idx, fontName) {
          fontTarget.append($('<li><a data-edit="fontName ' + fontName +'" style="font-family:\''+ fontName +'\'">'+fontName + '</a></li>'));
      });
      $('a[title]').tooltip({container:'body'});
    	$('.dropdown-menu input').click(function() {return false;})
		    .change(function () {$(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');})
        .keydown('esc', function () {this.value='';$(this).change();});

      $('[data-role=magic-overlay]').each(function () { 
        var overlay = $(this), target = $(overlay.data('target')); 
        overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
      });
      if ("onwebkitspeechchange"  in document.createElement("input")) {
        var editorOffset = $('#editor').offset();
        $('#voiceBtn').css('position','absolute').offset({top: editorOffset.top, left: editorOffset.left+$('#editor').innerWidth()-35});
      } else {
        $('#voiceBtn').hide();
      }
	};
	function showErrorAlert (reason, detail) {
		var msg='';
		if (reason==='unsupported-file-type') { msg = "Unsupported format " +detail; }
		else {
			console.log("error uploading file", reason, detail);
		}
		$('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>'+ 
		 '<strong>File upload error</strong> '+msg+' </div>').prependTo('#alerts');
	};
    initToolbarBootstrapBindings();  
	$('#editor').wysiwyg({ fileUploadError: showErrorAlert} );
    window.prettyPrint && prettyPrint();
  });
</script>

<script>
var output = document.getElementById('word_count');
var count =0;

function wordcount(inputwords) {
	console.log(('#editor').value);
	inputwords = ('#editor').value;
	var essay = inputwords.split(/\s/);
	count = essay.length;
	alert(count);
};
	output.setAttribute('value', 'Word Count: '+count);

</script>

<script>
	function count(){
	  var txtVal = $('#editor').text();
	  var words = txtVal.trim().replace(/\s+/gi, ' ').split(' ').length;
	  var chars = txtVal.length;
	  if(chars===0){words=0;}
	  output.setAttribute('value', 'Word Count: '+words);
	}

	$('#editor').on('keyup propertychange', function(){ 
	    count();
	});
</script>

<script src="bootstrap/js/bootstrap-transition.js"></script>

<div id="fb-root"></div>

</html>
