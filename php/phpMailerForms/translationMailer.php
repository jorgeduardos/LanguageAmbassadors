
<?php

$msg = '';
if (array_key_exists('file', $_FILES)) {
    // First handle the upload
    // Don't trust provided filename - same goes for MIME types
    // See http://php.net/manual/en/features.file-upload.php#114004 for more thorough upload validation
    $uploadfile = tempnam(sys_get_temp_dir(), sha1($_FILES['file']['name']));
    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
        // Upload handled successfully
        // Now create a message
        // This should be somewhere in your include_path
        require '../PHPMailerAutoload.php';
        $mail = new PHPMailer;

        $name = strip_tags(trim($_POST["name"]));
        $name = str_replace(array("\r","\n"),array(" "," "),$name);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $phone = trim($_POST["number"]);
        $sub = trim($_POST["subject"]);
        $source = trim($_POST["source"]);
        $target = trim($_POST["target"]);


        $mail->setFrom($email, $name);
        $mail->addAddress('jorgeduardo.1994@gmail.com', 'Jorge Sosa');
        $mail->Subject = 'PHPMailer file sender';
        $mail->Body = 'My message body';
        // Attach the uploaded file
        $mail->addAttachment($uploadfile, 'My uploaded file');
        if (!$mail->send()) {
            $msg .= "Mailer Error: " . $mail->ErrorInfo;
        } else {
            $msg .= "Message sent!";
        }
    } else {
        $msg .= 'Failed to move file to ' . $uploadfile;
    }
}