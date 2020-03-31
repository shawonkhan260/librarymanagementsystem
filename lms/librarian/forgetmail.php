<?php
require_once "forgetfunctions.php";
include"connection.php";
error_reporting(0);
$email=mysqli_real_escape_string($connect,$_REQUEST["email"]);
//echo $email; die();
$query="select * from librarian_reg where email='$email'";
$d=mysqli_query($connect,$query);
$row=mysqli_fetch_array($d);
        if ($row > 0) {

            $token = generateNewString();

	        $q="UPDATE librarian_reg SET token='$token', 
                      tokenExpire=DATE_ADD(NOW(), INTERVAL 5 MINUTE)
                      WHERE email='$email'";
			mysqli_query($connect,$q) or die ('Unable to execute query. '. mysqli_error(connect));
require 'PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer();
  
  //Enable SMTP debugging.
  $mail->SMTPDebug = 0;
  Set PHPMailer to use SMTP.
  //$mail->isSMTP();
  //Set SMTP host name
  $mail->Host = "smtp.gmail.com";
  $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );
  //Set this to true if SMTP host requires authentication to send email
  $mail->SMTPAuth = TRUE;
  //Provide username and password
  $mail->Username = "your mail";
  $mail->Password = "your password";
  //If SMTP requires TLS encryption then set it
  $mail->SMTPSecure = "false";
  $mail->Port = 587;
  //Set TCP port to connect to
  
  $mail->From = "your mail";
  $mail->FromName = "shawon";
  
  $mail->addAddress($row["email"]);
  
  $mail->isHTML(true);
 
  $mail->Subject = "reset password";
  	        $mail->Body = "
	            Hi,<br><br>
	            
	            In order to reset your password, please 
	            <a href='http://localhost/librarymanagement/librarian/forgetupdate.php?token=$token'><h2>click here</h2></a><br><br>
	            <h1>Or use this token : $token</h1>
				
	            Kind Regards,<br>
	            Tufail Ahamed Shawan Khan
	        ";
  //$mail->Body = "<i>this is your password of system account:</i>".$row["pass"];
  $mail->AltBody = "This is the plain text version of the email content";
    if(!$mail->send())
  {
   echo "Mailer Error: " . $mail->ErrorInfo;
   header("location:forget.php?email=");
  }
  else
  {
   echo "Message has been sent successfully check mail and click on given link or use given token ";
  ?>
  <a href="index.php">here</a>
  <?php
   header("location:forgettoken.php");
  }
		}
		else{
			echo "address not found";
			header("location:forget.php?email=");
		}

  //header("location:index.php");
  ?>