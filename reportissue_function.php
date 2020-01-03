<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php

		error_reporting(-1);
		ini_set('display_errors', 'On');
		set_error_handler("var_dump");

		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$subject = $_POST['topic'];
		$description = $_POST['description'];
		$isUrgent = $_POST['isUrgent'];
		$email = $_POST['email'];
		$to = "lkielbasa87@gmail.com";
		$outputForm = false;

		if((!empty($firstName)) && (!empty($lastName)) && (!empty($subject)) && (!empty($description)) && (!empty($email)) && (!empty($isUrgent))) {
			
			//The code responsible for displaying the message to the user and for sending the notification to the administrator 

				$message = "Notification added, \n" .
					"You have received message from user: $firstName $lastName \n\n" .
					"Message subject: $subject \n" .
					"Problem description: $description \n" .
					"Does problem require immediate action? - $isUrgent";

				$headers = 'From:  ' . 'Users Support App - ' . $firstName . ' ' . $lastName . ' <' . $email .'>' . " \r\n" .
		            		'Reply-To: '.  $email . "\r\n";
				
				if (mail($to, $subject, $message, $headers))
					{
						echo "Message has been properly sent to administrator.<br><br>";
					}
					else
					{
						echo "Error: Oooops...! Something went wrong! Message has not been properly sent to administrator.<br><br>";
					}

				echo "Hello " . $firstName . "," . "<br><br>";
				echo "Your message has been sent, here is it's content:" . "<br><br>";
				echo "Subject: " . $subject . "<br><br>";
				echo "Problem description: " . $description . "<br><br>";
				echo "Does problem require immediate action? - " . $isUrgent; 
			
			/* The code responsible for saving data from the form to the MySQL database */

				$dbc = mysqli_connect('localhost', 'root', 'database_password', 'support')
				or die('No connection with MySQL server.');

				$query = "INSERT INTO issues (first_name, last_name, subject, description, is_urgent, email, to_email)
				VALUES ('$firstName', '$lastName', '$subject', '$description', '$isUrgent', '$email', '$to') ";

				$result = mysqli_query($dbc, $query)
				or die('Error in database query.');

				mysqli_close($dbc);
			
		} else {
			echo "Oooops! Looks like one of required fields is empty - please fill all required fields.";
			$outputForm = true;
		}
		if($outputForm) {	
	?>

		<br>
		<h1>Users Support App</h1>
		<p>Describe your problem:</p>
		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<label for="firstName">First name: (field required)</label>
			<input type="text" id="firstName" name="firstName" value="<?php echo $firstName; ?>"><br>
			<label for="lastName">Last Name: (field required)</label>
			<input type="text" id="lastName" name="lastName" value="<?php echo $lastName; ?>"><br>
			<label for="email">E-mail address: (field required)</label>
			<input type="text" id="email" name="email" value="<?php echo $email; ?>"><br>
			<label for="topic">Problem topic: (field required)</label>
			<input type="text" id="topic" name="topic" value="<?php echo $subject; ?>"><br>
			<label for="description">Problem description: (field required)</label><br>
			<textarea id="description" name="description" value="<?php echo $description; ?>"></textarea><br>
			<label for="isUrgent">Is the problem urgent? (field required)</label><br>
			<input type="radio" id="isUrgent" name="isUrgent" value="tak">Tak<br>
			<input type="radio" id="isUrgent" name="isUrgent" value="nie" checked="checked">Nie<br>
			<input type="submit" name="submit" value="Report problem">
		</form>
	<?php
		}
	?>
</body>
</html>