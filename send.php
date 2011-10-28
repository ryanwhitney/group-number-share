<?php
	// Pull in variables, make an associative array of names & numbers
	$names = $_POST['name'];
	$numbers =  $_POST['number'];
	$names_numbers = array_combine($names, $numbers);

	// Include the PHP TwilioRest library
	require "Services/Twilio.php";
	
	// Set our AccountSid and AuthToken
	$AccountSid = "##############################";
	$AuthToken = "###############################";
	
	// Instantiate a new Twilio Rest Client
	$client = new Services_Twilio($AccountSid, $AuthToken);
	
	/* Your Twilio Number*/
	$from= '2486314921';

	foreach ($names_numbers as $name => $number) {
		$message .= "[".$name.": ".$number."]\n";
	}

	// Send out the messages to each number
	foreach ($names_numbers as $name => $to) {
		$body = $message;
		$client->account->sms_messages->create($from, $to, $body);
		echo "Sent message to $name \n";
	}



?>