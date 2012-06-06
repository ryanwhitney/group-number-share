<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Ryan Whitney" />
	<title>Group Phone Number Exchange</title>
	<meta name="description" content="Save time exchanging phone numbers between a group." />
	<link rel="icon" type="image/png" href="images/favicon.png" /> <!-- ADD THIS. -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="js/jquery-1.6.4.min.js"></script>
	<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<header>
		<h1><a href="./">Save time exchanging phone numbers between a group.</a></h1>
	</header>
	<section id="main">
		<div id="instructions">
		</div>
		<div style="position: absolute; right: -42px; top: 122px; height: 25px; overflow: hidden;">
			<img src="images/directions.png"  alt="Enter a name and phone number for each person, click send, and each recieves a text with all names and numbers." width="654" style="margin-top: -128px;">
		</div>
		<div id="form1">
			<p>This group has <span id="size">4</span> members.
			<a href="" id="add"> More</a> 
			<a href="" id="remove"> Less</a></p>
			<form action="send.php"  method="POST">
				<table id="inputs" border="0">
					<thead>
						<tr>
							<th></th>
							<th>Name</th>
							<th>Phone Number</th>
						</tr>
					</thead>
					<tbody>
					<tr>
						<th scope="row">1.</th>
						<td><input type="text" name="name[]" /></td>
						<td><input type="text" name="number[]" /></td>
					</tr>
					<tr>
						<th scope="row">2.</th>
						<td><input type="text" name="name[]" /></td>
						<td><input type="text" name="number[]" /></td>
					</tr>
					<tr>
						<th scope="row">3.</th>
						<td><input type="text" name="name[]" /></td>
						<td><input type="text" name="number[]" /></td>
					</tr>
					<tr>
						<th scope="row">4.</th>
						<td><input type="text" name="name[]" /></td>
						<td><input type="text" name="number[]" /></td>
					</tr>
					</tbody>
				</table>
				<input type="submit" value="Send">
			</form>
		</div>
		<p id="excuse">Note: This was a day project to check out the Twilio API. There be bugs in these parts.</p>
		<p id="signature" >Ryan Whitney 2011</p>
	</section>
	<script type="text/javascript">	
	var size = 4;
	$("#add").click(function(){
		$("#inputs").append("<tr><th scope='row'>"+ (size+1) +".</th><td><input type='text' name='name[]' /></td><td><input type='text' name='number[]' /></td></tr>");
		size++;
		$("#size").text(size);
		return false;	
	});	
	$("#remove").click(function(){		
		if (size > 2){	
			$('#inputs tbody tr:last-child').remove();
			size--;
			$("#size").text(size);
			return false;
		}else{
			return false;
		}
	});
	</script>
</body>
</html>