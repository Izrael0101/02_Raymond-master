<?php 
include('dbcon.php');


if(isset($_POST['email'])) 
{ 
	$email = urldecode($_POST['email']);		
	
	$query = "SELECT PASSWORD, USERNAME, EMAIL FROM Users WHERE EMAIL = '$email' "; 
	
	$result = mysqli_query($conn,$query)or die(mysql_error());
   	$row = mysqli_fetch_array($result);
   	$num_row = mysqli_num_rows($result);


	
	if( $num_row > 0 ) 
   {  	
		$password = $row["PASSWORD"]; 
		$user = $row["USERNAME"]; 
		$emailto = $row["EMAIL"]; 		
			
		// Create the email and send the message
		$to = $emailto; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
		$email_subject = "Solicitud de contraseña ECO";
		$email_body = "Se solicito la contraseña para el usuario: $user .\n\n"."Su contraseña es:\n\nContraseña: $password";
		$headers = "From: notificaciones@raymondenglishonthego.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
		mail($to, $email_subject, $email_body, $headers);
		
		
		echo 'ture'; 
	} 
	else  
	{ 
		echo 'false';
	} 
} 
?>