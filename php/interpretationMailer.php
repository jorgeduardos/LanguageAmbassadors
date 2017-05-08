<?php


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

    // Check the data.
    if (empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: /index.php?success=-1#form");
        exit;
    }

    // Set the recipient email address. Update this to YOUR desired email address.
    $recipient = "jorgeduardo.1994@gmail.com";

    // Set the email subject.
    $subject = "New contact from $name";

    // Build the email content.

    if($type == "simultaneous"){
        $email_content = "Name: $name\n";
        $email_content .= "Email: $email\n";
        $email_content .= "Phone Number: $phone\n";
        $email_content .= "Type: $type\n";
        $email_content .= "Subject: $sub\n";
        $email_content .= "Language Pairs: $lan\n";
        $email_content .= "Location: $location\n";
        $email_content .= "Starting Date: $sDate\n\n";
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
    

    // Build the email headers.
    $email_headers = "From: $name <$email>";

    // Send the email.
    mail($recipient, $subject, $email_content, $email_headers);
    
    // Redirect to the index.html page with success code
    header("Location: /index.php?success=1#form");

?>