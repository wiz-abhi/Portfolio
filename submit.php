<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $mobileNumber = $_POST['mobileNumber'];
    $emailSubject = $_POST['emailSubject'];
    $message = $_POST['message'];

    $data = "Full Name: $fullName\nEmail: $email\nMobile Number: $mobileNumber\nEmail Subject: $emailSubject\nMessage: $message\n\n";
    file_put_contents('form_data.txt', $data, FILE_APPEND);

    echo "Form submitted successfully!";
}
?>
