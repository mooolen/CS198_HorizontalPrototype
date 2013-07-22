
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta charset="utf-8">

<title>bootstrap-wysihtml5</title>


<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"></link>
<link href="css/flat-ui.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="bootstrap/css/prettify.css"></link>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-wysihtml5.css"></link>

<style type="text/css" media="screen">
	.btn.jumbo {
		font-size: 20px;
		font-weight: normal;
		padding: 14px 24px;
		margin-right: 10px;
		-webkit-border-radius: 6px;
		-moz-border-radius: 6px;
		border-radius: 6px;
	}
</style>

</head>
<body>
<div class="container">
	<div class="hero-unit" style="margin-top:40px">
		<h1 style="font-size:58px">bootstrap-wysihtml5 <small>Simple, beautiful wysiwyg editors</small></h1>
		<hr/>
		<textarea class="textarea" placeholder="Enter text ..." style="width: 810px; height: 200px"></textarea>
	</div>
	
	<div class="row">
		<div class="span6">
	        <h2>About</h2>
	        <p>
				bootstrap-wysihtml5 is a javascript plugin that makes it easy to create simple, beautiful wysiwyg editors with the help of <a href="https://github.com/xing/wysihtml5">wysihtml5</a> and <a href="http://twitter.github.com/bootstrap/">Twitter Bootstrap</a>
			</p>
			
			<p style="text-align:center; margin-top:20px">
				<a class="btn btn-large btn-primary jumbo" href="https://github.com/jhollingworth/bootstrap-wysihtml5/">View project on Github</a>
			</p>
		</div>
		<div class="span6" >
			<h2>Usage</h2>


		    <p>
				<pre class="prettyprint linenums">$('.textarea').wysihtml5();</pre>     
			</p>
		
			<h3>Dependencies</h3>
	        <p>
				<ul>
					<li><a href="https://raw.github.com/jhollingworth/bootstrap-wysihtml5/master/src/bootstrap-wysihtml5.js">bootstrap-wysihtml5.js</a></li>
					<li><a href="https://raw.github.com/jhollingworth/bootstrap-wysihtml5/master/src/bootstrap-wysihtml5.css">bootstrap-wysihtml5.css</a></li>
					<li><a href="https://github.com/xing/wysihtml5">wysihtml5</a></li>
					<li><a href="http://twitter.github.com/bootstrap/">Twitter Bootstrap</a></li>
				</ul>
	    	</p> 
		</div>
	</div>
</div>


<script src="bootstrap/js/wysihtml5-0.3.0.js"></script>
<script src="bootstrap/js/jquery-1.7.2.min.js"></script>
<script src="bootstrap/js/prettify.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="bootstrap/js/bootstrap-wysihtml5.js"></script>

<script>
	$('.textarea').wysihtml5();
</script>

<script type="text/javascript" charset="utf-8">
	$(prettyPrint);
</script>

</body>
</html>
