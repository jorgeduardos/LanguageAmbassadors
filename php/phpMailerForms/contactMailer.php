<?php

    require '../PHPMailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;

    // Get the form fields, removes html tags and whitespace.
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $sub = trim($_POST["subject"]);


    $message = trim($_POST["message"]);


    $mail->isMail();                               
    $mail->Host = gethostbyname("smtp.gmail.com");
    $mail->SMTPAuth = false;                               // Enable SMTP authentication
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    // Check the data.
    if (empty($name) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: /index.php?csuccess=-1#contact");
        exit;
    }

    $mail->setFrom($email, $name);
    $mail->addAddress('rosannandreolis@gmail.com', 'Rosanna Andreoli');     // Add a recipient

    $mail->Subject = $sub;

    // Build the email content.
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Subject: $sub\n\n";
    $email_content .= "Message:\n$message\n";

    $mail->Body    = $email_content;

    if(!$mail->send()) {
        header("Location: /index.php?csuccess=-1#contact");
        exit;
    } else {
        header("Location: /index.php?csuccess=1#contact");
    }


    
    // Redirect to the index.html page with success code
    header("Location: /index.php?csuccess=1#contact");

?>