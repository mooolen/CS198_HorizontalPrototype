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