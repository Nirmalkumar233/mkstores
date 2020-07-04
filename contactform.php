<?php 

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mailFrom = $_POST['mail'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];	

	$mailTo = "nirmal.16400@gmail.com";
	$headers = "From: ".$mailFrom;
	$txt = "You have received an e-mail from ".$name.".\n\n".$message;





	mail($mailTo, $subject, $txt, $headers, $phone);
	header("Location: nirmal.html?mailsend");

}




<?