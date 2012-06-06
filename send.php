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
<body id="send-page">
	<header>
		<h1><a href="./">Save time exchanging phone numbers between a group.</a></h1>
	</header>
	<section id="main">
		<div id="instructions">
		</div>
		<div style="position: absolute; right: -42px; top: 122px; height: 25px; overflow: hidden;">
			<img src="images/directions.png" alt="Enter a name and phone number for each person, click send, and each recieves a text with all names and numbers." width="654" style="margin-top: -128px;">
		</div>
		<div id="form1">
			<p>
				<?php error_reporting(0);
				
				// Pull in variables, make an associative array of names & numbers
				$names = $_POST['name'];
				$numbers =  $_POST['number'];
				$names_numbers_dirty = array_combine($names, $numbers);
				$names_numbers = array_filter($names_numbers_dirty);
				
				// Include the PHP TwilioRest library
				require "Services/Twilio.php";
				
				// Set AccountSid and AuthToken
				$AccountSid = "YOUR TWILIO AccountSid";
				$AuthToken = "YOUR TWILIO AuthToken";
				
				// Instantiate a new Twilio Rest Client
				$client = new Services_Twilio($AccountSid, $AuthToken);
				
				// Twilio Number
				$from= 'YOUR TWILIO NUMBER';
				
				// Creates the message body
				foreach ($names_numbers as $name => $number) {
					$message .= "[".$name.": ".$number."]\n";
				}
				$once = 1;
				// Send the message to each number
				foreach ($names_numbers as $name => $to) {
					$body = $message;
					$client->account->sms_messages->create($from, $to, $body);
					if ($once == 1){
						echo("Successfully sent to ");
						$once++;
					} 
					echo "$name, ";
				}?>
			</p>
			<a id="back" href="#" onClick="history.go(-2)">Back</a>
		</div>
		<p id="excuse">Note: This was a day project to check out the Twilio API. There be bugs in these parts.</p>
		<p id="signature" >Ryan Whitney 2011</p>
	</section>
</body>
</html>