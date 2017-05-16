<?php

    require '../PHPMailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;

    // Get the form fields, removes html tags and whitespace.

    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = trim($_POST["number"]);


    $type = $_POST["interpType"];
    $sub = trim($_POST["interp_subject"]);
    $lan = trim($_POST["language_pairs"]);
    $location = trim($_POST["location"]);
    $date = $_POST["date"];
    $sDate = $_POST["startingDate"];
    $eDate = $_POST["endingDate"];

    $message = trim($_POST["comments"]);

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

    // Build the email content.

    if($type == "simultaneous"){
        $email_content = "Name: $name\n";
        $email_content .= "Email: $email\n";
        $email_content .= "Phone Number: $phone\n";
        $email_content .= "Type: $type\n";
        $email_content .= "Subject: $sub\n";
        $email_content .= "Language Pairs: $lan\n";
        $email_content .= "Location: $location\n";
        $email_content .= "Starting Date: $sDate\n";
        $email_content .= "Ending Date: $eDate\n\n";
        $email_content .= "Message:\n$message\n";
    }else{
        $email_content = "Name: $name\n";
        $email_content .= "Email: $email\n";
        $email_content .= "Phone Number: $phone\n";
        $email_content .= "Type: $type\n";
        $email_content .= "Subject: $sub\n";
        $email_content .= "Language Pairs: $lan\n";
        $email_content .= "Location: $location\n";
        $email_content .= "Date: $date\n\n";
        $email_content .= "Message:\n$message\n"; 
    }

    $mail->Subject = $sub;

    $mail->Body    = $email_content;
    
    if(!$mail->send()) {
        header("Location: /index.php?success=-1#interpretation");
        exit;
    } else {
        header("Location: /index.php?isuccess=1#interpretation");
    }

?>