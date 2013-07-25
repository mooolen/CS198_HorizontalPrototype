<?php
	$active_nav = 'EXAMS';
	include 'teacher_header.php'; 
	include 'teacher_sidebar.php';
?>			
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
							<div class="span2"><center>Content</center></div>
							<div class="span2 control-group">
								<input type="text" class="span3" id="criteria1" required> 
							 	<i class= "input-icon">%</i>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span2"><center>Creativity</center></div>
							<div class="span2 control-group">
								<input type="text" class="span3" id="criteria1" required> 
							 	<i class= "input-icon">%</i>
							</div>
						</div>
						<div class="row-fluid">
							<div class="span2"><center>Total</center></div>
							<div class="span2 control-group">
								<input type="text" class="span3" id="criteria1" readonly> 
							 	<i class= "input-icon">%</i>
							</div>
						</div>
					</div>
				  </div> 
				   
					<div class="control-group">
					  <label class="control-label" for="inputcomments">Comments</label>
					  <div class="controls" id= "inputcomments" >
						<div id="add_more_div"></div>
					  	<table name="add_more[]">
							<td><p class="span3">From Sentence Number</p></td>
							<td><input type="text" class="span1" id="fromline" required></td>
							<td><p class="span1"> to </p></td>
							<td><input type="text" class="span1" id="toline" required> </td>
							<td><p class="span1"> : </p></td>
							<td><input type="text" class="span5" id="comment" placeholder="Comment" required> </td>
							<td><button type="button" data-toggle="tooltip" data-placement="right" title="Add Comment" onclick="add_more_text_box('add_more_div','add_more[]',child(), 0);" class="btn btn-primary" ><i class="fui-plus"></i></button></td>
						</table>
					  
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

<script>
	function add_more_text_box(parent_id, child_name, child_id, num)
	{
	  var myTable = document.getElementById(parent_id);
	  if( !num ){
	  var oDiv, op1, sss, oInp1, ttt, op2, uuu, oInp2, vvv, op3, www, oInp3, xxx, yyy, del;
	  oDiv = document.createElement('table');
	  sss = document.createElement('td');
	  ttt = document.createElement('td');
	  uuu = document.createElement('td');
	  vvv = document.createElement('td');
	  www = document.createElement('td');
	  xxx = document.createElement('td');
	  yyy = document.createElement('td');
	  oDiv.setAttribute('id', 'part'+ child_id);
	  
	  myTable.appendChild(oDiv);
	
	  op1 = document.createElement('p');
	  oInp1 = document.createElement('input');
	  op2 = document.createElement('p');
	  oInp2 = document.createElement('input');
	  op3 = document.createElement('p');
	  oInp3 = document.createElement('input');
	  del = document.createElement('button');
	  del.setAttribute('type', 'button');
	  del.setAttribute('class', 'btn btn-primary fui-cross removeVar');
	  del.setAttribute('data-toggle', 'tooltip');
	  del.setAttribute('data-placement', 'right');
	  del.setAttribute('title', 'Remove Criterion');
	  yyy.appendChild(del);

	  op1. setAttribute('class', 'span3');
	  op1. setAttribute('name', child_name);
	  op1. setAttribute('id', child_id);
	  op1.innerHTML = 'From Sentence Number';
	  sss.appendChild(op1);

	  oInp1. setAttribute('type', 'text');
	  oInp1. setAttribute('required', true);
	  oInp1. setAttribute('name', child_name);
	  oInp1. setAttribute('id', child_id);
	  oInp1. setAttribute('class', 'span1');
	  ttt.appendChild(oInp1);

	  op2. setAttribute('class', 'span1');
	  op2. setAttribute('name', child_name);
	  op2. setAttribute('id', child_id);
	  op2.innerHTML = 'to';
	  uuu.appendChild(op2);

	  
	  oInp2. setAttribute('type', 'text');
	  oInp2. setAttribute('required', true);
	  oInp2. setAttribute('name', child_name);
	  oInp2. setAttribute('id', child_id);
	  oInp2. setAttribute('class', 'span1');
	  vvv.appendChild(oInp2);

	  op3. setAttribute('class', 'span1');
	  op3. setAttribute('name', child_name);
	  op3. setAttribute('id', child_id);
	  op3.innerHTML = ':';
	  www.appendChild(op3);

	  
	  oInp3. setAttribute('type', 'text');
	  oInp3. setAttribute('required', true);
	  oInp3. setAttribute('placeholder', 'Comment');
	  oInp3. setAttribute('name', child_name);
	  oInp3. setAttribute('id', child_id);
	  oInp3. setAttribute('class', 'span5');
	  xxx.appendChild(oInp3);	  

	oDiv.appendChild(sss);
	oDiv.appendChild(ttt);
	oDiv.appendChild(uuu);
	oDiv.appendChild(vvv);
	oDiv.appendChild(www);
	oDiv.appendChild(xxx);
	oDiv.appendChild(yyy);
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
