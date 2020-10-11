<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../vendor/autoload.php';
require_once("../Auth/authController.php");
require_once("../config.php");

$mail = new PHPMailer(true);                             

if (isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['body']) && isset($_POST['token'])) {

	    $token = $_SESSION["user"]["token"];

		if ($_POST['token'] == $token) {

		    $email = $_POST['email'];
		    $subject = $_POST['subject'];
		    $body = $_POST['body'];
		    $sender = $_SESSION["user"]["name"];
	    
			try {

			    $mail->SMTPDebug = 0;                                 
			    $mail->isSMTP();                                      
			    $mail->Host = 'smtp.gmail.com';                       
			    $mail->SMTPAuth = true;                               
			    $mail->Username = 'timeduro@gmail.com';           
			    $mail->Password = '9876xyz!!';                        
			    $mail->SMTPSecure = 'ssl';                           
			    $mail->Port = 465;                                   

			    $mail->setFrom('timeduro@gmail.com', 'Diwa');
			    $mail->addAddress($email);     

			    $mail->isHTML(true);                                  
			    $mail->Subject = $subject;
			    $mail->Body    = $body;

			    $mail->send(); 

			    $sql = "INSERT INTO list_email (email, sender ) VALUES (:email, :sender)";
		    	$stmt = $connect->prepare($sql);

		    	$params = array(
			        ":email" => $email,
			        ":sender" => $sender
		    	);

		    	$saved = $stmt->execute($params);

		    	$_SESSION['Message'] = "Email has been sent!";
				header("Location:../home.php");
				
			    echo json_encode(array('response' => 'success'), 200);
			    
			} catch (Exception $e) {
			    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
			}
		
		}else {
			$_SESSION['Message'] = "Token Not Valid!";
			header("Location:../View/sendmail.php");
		}
	} else {
	echo "Invalid!";
}