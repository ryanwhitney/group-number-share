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
	<section id="main">
		<form action="send.php"  method="POST">
			<ul>
				<li>Name: <input type="text" name="name[]" /> Number: <input type="text" name="number[]" /></li>
				<li>Name: <input type="text" name="name[]" /> Number: <input type="text" name="number[]" /></li>
				<li>Name: <input type="text" name="name[]" /> Number: <input type="text" name="number[]" /></li>
				<li>Name: <input type="text" name="name[]" /> Number: <input type="text" name="number[]" /></li>
			</ul>
			<input type="submit">
		</form>
	</section>
</body>
</html>





<!-- <input type="text" name="name[]" /> -->
<!-- <input type="text" name="number[]" /> -->