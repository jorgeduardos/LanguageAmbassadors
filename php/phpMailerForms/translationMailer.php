
<?php

    // Get the form fields, removes html tags and whitespace.
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = trim($_POST["number"]);
    $sub = trim($_POST["subject"]);
    $source = trim($_POST["source"]);
    $target = trim($_POST["target"]);

    

    $message = trim($_POST["comments"]);


if (array_key_exists('file', $_FILES)) {
    $msg = '';
    // First handle the upload
    // Don't trust provided filename - same goes for MIME types
    // See http://php.net/manual/en/features.file-upload.php#114004 for more thorough upload validation
    $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['file']['name']));
    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
        // Upload handled successfully
        // Now create a message
        // This should be somewhere in your include_path
        require '../PHPMailer/PHPMailerAutoload.php';
        $mail = new PHPMailer;

        $mail->isMail();                                      // Set mailer to use SMTP


        $mail->setFrom($email, $name);
        $mail->addAddress('jorgeduardo.1994@gmail.com', 'Jorge Sosa');
        $mail->Subject = 'PHPMailer file sender';
        $mail->Body = 'My message body';
        // Attach the uploaded file
        $mail->addAttachment($uploadfile, 'File');
        if (!$mail->send()) {
            $msg .= "Mailer Error: " . $mail->ErrorInfo;
            echo $msg;
        } else {
            $msg .= "Message sent!";
            echo $msg;
        }
    } else {
        $msg .= 'Failed to move file to ' . $uploadfile;
        echo $msg;
    }
}else{

    // Check the data.
    if (empty($name) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: /index.php?success=-1#form");
        exit;
    }

    // Set the recipient email address. Update this to YOUR desired email address.
    $recipient = "jorgeduardo.1994@gmail.com";

    // Set the email subject.
    $subject = "New contact from $name";

    // Build the email content.
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Phone Number: $phone\n";
    $email_content .= "Subject: $sub\n";
    $email_content .= "Source Language: $source\n";
    $email_content .= "Target Language: $target\n\n";
    $email_content .= "Message:\n$message\n";

    // Build the email headers.
    $email_headers = "From: $name <$email>";

    // Send the email.
    mail($recipient, $subject, $email_content, $email_headers);
    
    // Redirect to the index.html page with success code
    header("Location: /index.php?tsuccess=1#translation");

}

?>