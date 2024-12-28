<?php
   include('dbcon.php');
   session_start();

   $username = htmlentities($_POST['username']);
   $password = htmlentities($_POST['password']);
   
   
   $usernameSeguro = mysqli_real_escape_string($conn, $username);
   $passwordSeguro = mysqli_real_escape_string($conn, $password);

   
  
	if(!filter_var($usernameSeguro, FILTER_VALIDATE_EMAIL))
   {
   	//Evita Inyecciones SQL
	//$query = "SELECT * FROM Users WHERE UserName='".mysql_real_escape_string($username)."' AND Password='".mysql_real_escape_string($password)."' AND Active = 1";
	$query = "SELECT * FROM Users WHERE UserName='$usernameSeguro' AND Password='$passwordSeguro' AND Active = 1";
   }
   else
   {
   	//Evita Inyecciones SQL
	//$query = "SELECT * FROM Users WHERE EMAIL='".mysql_real_escape_string($username)."' AND Password='".mysql_real_escape_string($password)."' AND Active = 1";
   	$query = "SELECT * FROM Users WHERE EMAIL='$usernameSeguro' AND Password='$passwordSeguro' AND Active = 1";
   }	   
    
   	$result = mysqli_query($conn, $query)or die(mysql_error());
   	$row = mysqli_fetch_array($result);
   	$num_row = mysqli_num_rows($result);
	
   if( $num_row > 0 ) 
   { 
     $_SESSION['id'] = $row['NPK_USUARIO'];
    	 
	 if(!empty($_POST["remember"])) {
				setcookie ("member_login",$_POST["username"],time()+ (10 * 365 * 24 * 60 * 60));
				setcookie ("member_password",$_POST["password"],time()+ (10 * 365 * 24 * 60 * 60));
				
			} else {
				if(isset($_COOKIE["member_login"])) {
					setcookie ("member_login","");					
				}
				if(isset($_COOKIE["member_password"])) {
					setcookie ("member_password","");					
				}
			}
	 
     echo 'true';	
   }
   else
   { 
	$message = "Invalid Login";
     echo 'false';
   }
   
   
   ?>			