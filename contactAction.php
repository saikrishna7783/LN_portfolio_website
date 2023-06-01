<?php

// form data
$name = $_POST['full_name'];
$mail = $_POST['email'];
$query = $_POST['query'];
$comment = $_POST['comments'];

// creating custom variables based on requirement
$to = "saikrishna7783@outlook.com";
$subject = "MAIL FROM PORTFOLIO WEBSITE";
$message = "Name: " . htmlspecialchars($name) .
    "\r\nEmail: " . htmlspecialchars($mail) .
    "\r\nQuery: " . htmlspecialchars($query) .
    "\r\nComments: " . htmlspecialchars($comment);
$headers = "From: noreply@codeconia.com";

// making necessary checks
if ($mail != NULL && $name != NULL && $query != NULL && $comment != NULL) {
    if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        mail($to, $subject, $message, $headers);
        echo "Form submitted successfully!";
    } else {
        echo "$mail is not a valid email address";
    }
} else {
    echo "Please enter all the fields";
}

// redirect
header("Location: contactMe.html");

?>