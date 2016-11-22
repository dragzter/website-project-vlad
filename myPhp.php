//this is my issue, the php wont run even when i threw the whole site onto wamp, i get 2 errors one on line 1 and one on line 15, some research 
// revealed that i need to have smtp running? not sure how to do that, also, i know php is not ideal, json might be better for this?
<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    $from = 'From: TangledDemo'; 
    $to = 'vladimir.mujakovic@gmail.com'; 
    $subject = 'Hello';
    $human = $_POST['human'];
			
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
		
    if ($_POST['submit'] && $human == '4') {				 
        if (mail ($to, $subject, $body, $from, $phone)) { 
	    echo '<p>Your message has been sent!</p>';
	} else { 
	    echo '<p>Something went wrong, go back and try again!</p>'; 
	} 
    } else if ($_POST['submit'] && $human != '4') {
	echo '<p>You answered the anti-spam question incorrectly!</p>';
    }
    
?>

  
  
