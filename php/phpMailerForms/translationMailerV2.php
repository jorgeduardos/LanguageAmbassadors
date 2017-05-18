<?php


	require '../PHPMailer/PHPMailerAutoload.php';

	$mail = new PHPMailer;


	$name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = trim($_POST["number"]);
    $sub = trim($_POST["subject"]);
    $source = trim($_POST["source"]);
    $target = trim($_POST["target"]);
    $message = trim($_POST["comments"]);

	//$mail->SMTPDebug = 2;                               // Enable verbose debug output

	$mail->isMail();                               
	$mail->Host = gethostbyname("smtp.gmail.com");
	$mail->SMTPAuth = false;                               // Enable SMTP authentication
	$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 465;                                    // TCP port to connect to

	$mail->setFrom($email, $name);
	$mail->addAddress('rosannandreolis@gmail.com', 'Rosanna Andreoli');     // Add a recipient


	if (empty($name) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: /index.php?success=-1#translation");
        exit;
    }

	if (file_exists($_FILES['file']['tmp_name'])) {
	    // First handle the upload
	    // Don't trust provided filename - same goes for MIME types
	    // See http://php.net/manual/en/features.file-upload.php#114004 for more thorough upload validation
	    $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['file']['name']));
	    $mail->addAttachment($uploadfile, $_FILES['file']['name']);
	}


	$mail->Subject = $sub;

	$email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Phone Number: $phone\n";
    $email_content .= "Subject: $sub\n";
    $email_content .= "Source Language: $source\n";
    $email_content .= "Target Language: $target\n\n";
    $email_content .= "Message:\n$message\n";

	$mail->Body    = $email_content;

	if(!$mail->send()) {
		header("Location: /index.php?tsuccess=-1#translation");
        exit;
	} else {
	    header("Location: /index.php?tsuccess=1#translation");
	}

?>