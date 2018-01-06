<?php
	$pageTitle = "Contact Us";
    $section = "Contact";
	
	include('inc/header.php');
		
?>

	<div class="wrapper">
           <section class="container">
		     <h2>Contact Us</h2>
		

		<?php
	
		// Check for Header Injections
		function has_header_injection($str) {
			return preg_match( "/[\r\n]/", $str );
		}
		
		
		if (isset($_POST['contact_submit'])) {
			
			
			
			$name	= trim($_POST['name']);
			$email	= trim($_POST['email']);
			$msg	= $_POST['message']; 
		
			
			if (has_header_injection($name) || has_header_injection($email)) {
				
				die(); 
				
			}
			
			if (!$name || !$email || !$msg) {
				echo '<h4 class="message">All fields required.</h4><a href="contact.php" class="button block">Please go back and try again</a>';
				exit;
			}
			
			
			$to	= "hadevelopment@hasinaakhter.com";
			
			
			$subject = "$name sent a message via your contact form";
			
			
			$message .= "Name: $name\r\n";
			$message .= "Email: $email\r\n\r\n";
			$message .= "Message:\r\n$msg";
			
			
		
			$message = wordwrap($message, 72); 
		
			
			$headers = "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
			$headers .= "From: " . $name . " <" . $email . ">\r\n";
			$headers .= "X-Priority: 1\r\n";
			$headers .= "X-MSMail-Priority: High\r\n\r\n";
		
			
			
			mail($to, $subject, $message, $headers);
		?>
		
		
		<p>Thanks for contacting us!<br>We will get back to you soon.</p>
		<p><a href="index.php">&laquo; Go back to Home Page</a></p>
		
		<?php
			} else {
		?>

		<form method="post" action="" id="contact-form">
			<label for="name">Name</label>
			<input type="text" id="name" name="name">
			
			<label for="email">Email</label>
			<input type="email" id="email" name="email">
			
			<label for="message">Your message</label>
			<textarea id="message" name="message"></textarea>
			
			
			
			<input type="submit" class="button next" name="contact_submit" value="Send">
		</form>
		
		<?php }?>
		
	</section>
</div><!--/content-->
			
<?php include('inc/footer.php'); ?>
