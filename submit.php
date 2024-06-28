<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $mobileNumber = $_POST['mobileNumber'];
    $emailSubject = $_POST['emailSubject'];
    $message = $_POST['message'];

    // Constructing the data to be stored
    $data = "Full Name: $fullName\nEmail: $email\nMobile Number: $mobileNumber\nEmail Subject: $emailSubject\nMessage: $message\n\n";

    // Path to the file relative to server root directory
    $filePath = 'data/form_data.txt';

    // Ensuring the data directory exists
    if (!file_exists('data')) {
        if (!mkdir('data', 0777, true)) {
            die('Failed to create directories...');
        }
    }

    // Writing data to the file
    $result = file_put_contents($filePath, $data, FILE_APPEND | LOCK_EX);

    if ($result === false) {
        echo "There was an error submitting the form.";
    } else {
        echo "Form submitted successfully! Data written: $result bytes";
    }
} else {
    echo "Invalid request method.";
}
?>
