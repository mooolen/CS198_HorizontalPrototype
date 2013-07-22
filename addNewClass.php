<?php $active_nav = 'CLASSES'?>
<?php include 'header.php'; ?>
<?php include 'sidebar.php'; ?>
<script src="bootstrap/js/jquery-1.7.2.min.js"></script>
<div class="page-content">
	<div class="span8">
		<div class="row-fluid">
			<div class="span12 content">
				<img class="title-icons" src="images/icons/plus.png">
				<h3 class="title">Add New Class</h3>
				<div class="row-fluid">
					<form class="form-horizontal">	
						<fieldset>	
								<div class="control-group">
									<label class="control-label" for="className">Class Name</label>
									<div class="controls">
										<div class="span5">
											<input type="text" placeholder="Required" class="span3" name="className" id="className" required />
										</div>
									</div>	
								</div> 
								<div class="control-group">
									<label class="control-label" for="level">Year Level</label>
									<div class="controls">
										<div class="span5">
											<input type="text" placeholder="Required" class="span3" name="level" id="level" required />
										</div>
									</div>	
								</div> 					
								<div class="control-group">
									<label class="control-label" for="className">Section</label>
									<div class="controls">
										<div class="span5">
											<input type="text" placeholder="Required" class="span3" name="className" id="className" required />
										</div>
									</div>
								</div> 
								<div class="control-group">  
									<label class="control-label" for="classKey">Student Email Address</label>  
									<div class="controls">
										<div id="add_more_div"></div>
										<div class="span5">
											<tr><input class="span1" style="color: #099" name="add_more[]" type="text" id="part0" placeholder="Required" required /></tr>				
											<tr><button type="button" data-toggle="tooltip" data-placement="right" title="Add Student" onclick="add_more_text_box('add_more_div','add_more[]',child());" class="btn btn-primary mtm" ><i class="fui-plus"></i></button></tr>	
										</div>
									</div>
							  	</div>		
								<div class="form-actions">	
									<button type="submit" class="btn btn-primary"><b>Save</b><i class="fui-check"></i></button> 
									<button type="reset" class="btn btn-warning"><b>Reset</b><i class="fui-replay"></i></button> 
									<a href="class.php" type="button" class="btn btn-danger"><b>Cancel</b>	<i class="fui-cross"></i></a>	
								</div>	 
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	function generateKey(parent_id)
	{
		var myField = document.getElementById(parent_id);
		var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";
		var string_length = 15;
		var randomstring = '';
		for (var i=0; i<string_length; i++) {
			var rnum = Math.floor(Math.random() * chars.length);
			randomstring += chars.substring(rnum,rnum+1);
		}
		myField.value=randomstring;
	} 	
</script>

<script>
	function add_more_text_box(parent_id, child_name, child_id)
	{
	  var myTable = document.getElementById(parent_id);
	  var oDiv, oInput, sss, del, min, oo;
	  oDiv = document.createElement('div');
	  sss = document.createElement('div');
	  min = document.createElement('i');
	  oo = document.createTextNode( "\u00A0" );
	  oDiv.setAttribute('id', 'part'+ child_id);

	  min.setAttribute('class', 'fui-plus');
	  oDiv.setAttribute('class', 'control-group');
	  sss.setAttribute('class', 'span5');
	  myTable.appendChild(oDiv);

	  //del.innerHTML = 'Element Number '+num+' has been added! <a href=\'#\' onclick=\'removeElement('+child_id+')\'>Remove the div "'+divIdName+'"</a>';
	  del = document.createElement('input');
	  del.setAttribute('type', 'button');
	  del.setAttribute('class', 'btn btn-primary fui-plus removeVar');
	  del.setAttribute('value', '-');

	  oInput = document.createElement('input');
	  oInput.setAttribute('type', 'text');
	  oInput.setAttribute('style', 'color: #099');
	  oInput.setAttribute('required', true);
	  oInput.setAttribute('name', child_name);
	  oInput.setAttribute('id', child_id);
	  oInput.setAttribute('placeholder', 'Required');
	  oInput.setAttribute('class', 'span3');
	  sss.appendChild(oInput);
	  del.appendChild(min);
	  oDiv.appendChild(sss);
	  oDiv.appendChild(oo);
	  oDiv.appendChild(del);
	} 
	
	var child_id = 1;
	function child()
	{ 
		return child_id++;
	}	

	$(document).ready(function() 
    { 
		$('form').on('click', '.removeVar', function(){
			$(this).parent().remove();
		});
    } );
</script>

<?php include 'footer.php'; ?>