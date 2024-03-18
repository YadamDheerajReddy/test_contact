<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recaptchaResponse = $_POST['g-recaptcha-response'];
    $secretKey = "6LfAP5wpAAAAAFd3shLwRmI18fVGgcipzfKlMlX0";
    $remoteIP = $_SERVER['REMOTE_ADDR'];

    // Make a POST request to the Google reCAPTCHA Server
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$recaptchaResponse&remoteip=$remoteIP");

    $responseKeys = json_decode($response, true);

    if ($responseKeys["success"]) {
        // CAPTCHA was successfully completed
        // Your code to process the form here
    } else {
        // CAPTCHA failed or was not completed
        // Handle the error accordingly
    }
}
?>
