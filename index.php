<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Ryan Whitney" />
	<title>Easily Share Phone Numbers Between a Group</title>
	<meta name="description" content="Share phone numbers between group members in a snap. Just enter each member's name & number, click send, and everyone recieves the info!" />
	<link rel="icon" type="image/png" href="images/favicon.png" /> <!-- ADD THIS. -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript"></script>
	<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<header><h1>Easily share phone numbers between group members.</h1></header>
	<section id="main">
		<div id="instructions"><img src="images/instructions.png" alt="Enter names, enter phone numbers, click send." width="484" height="25" /></div>
		<div id="form1">
			<form action="send.php"  method="POST">
				<ul>
					<li>Name: <input type="text" name="name[]" /> Phone Number: <input type="text" name="number[]" /></li>
					<li>Name: <input type="text" name="name[]" /> Phone Number: <input type="text" name="number[]" /></li>
					<li>Name: <input type="text" name="name[]" /> Phone Number: <input type="text" name="number[]" /></li>
					<li>Name: <input type="text" name="name[]" /> Phone Number: <input type="text" name="number[]" /></li>
				</ul>
				<input type="submit">
			</form>
		</div>
	</section>
</body>
</html>





<!-- <input type="text" name="name[]" /> -->
<!-- <input type="text" name="number[]" /> -->