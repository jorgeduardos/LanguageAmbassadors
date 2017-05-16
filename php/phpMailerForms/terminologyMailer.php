<?php
    
    require '../PHPMailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;

    // Get the form fields, removes html tags and whitespace.
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = trim($_POST["number"]);  

    $message = trim($_POST["terminology"]);

    $mail->isMail();                               
    $mail->Host = gethostbyname("smtp.gmail.com");
    $mail->SMTPAuth = false;                               // Enable SMTP authentication
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    $mail->setFrom($email, $name);
    $mail->addAddress('rosannandreolis@gmail.com', 'Rosanna Andreoli');     // Add a recipient

    // Check the data.
    if (empty($name) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: /index.php?success=-1#form");
        exit;
    }

    $mail->Subject = 'Terminology Request';

    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Phone Number: $phone\n\n";
    $email_content .= "Message:\n$message\n";

    $mail->Body = $email_content;

    if(!$mail->send()) {
        header("Location: /index.php?success=-1#form");
        exit;
    } else {
        header("Location: /index.php?tersuccess=1#terminology");
    }

?>

?>