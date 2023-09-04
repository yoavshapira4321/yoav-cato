<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $cv = $_FILES['cv'];

    // Compose email
    $to = 'yoavshapira@gmail.com';
    $subject = 'New application submitted';
    $headers = 'From: ' . $name . ' <' . $to . '>' . "\r\n";
    $headers .= 'Content-Type: text/html; charset=UTF-8' . "\r\n";
    $body = '<html><body>';
    $body .= '<p><b>Name:</b> ' . $name . '</p>';
    $body .= '<p><b>CV:</b> ' . $cv['name'] . '</p>';
    $body .= '</body></html>';

    // Send email
    if (move_uploaded_file($cv['tmp_name'], $cv['name']) && mail($to, $subject, $body, $headers)) {
        echo 'Thank you for your application.';
    } else {
        echo 'An error occurred while processing your application.';
    }
}
?>
