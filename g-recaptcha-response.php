<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recaptchaResponse = $_POST['g-recaptcha-response'];
    $secretKey = "6LeiTpwpAAAAAPxwteyVSZkdE1OJoCUFpr8otbft";
    $remoteIP = $_SERVER['REMOTE_ADDR'];

    if (empty($captchaResponse)) {
        // Handle the error accordingly. For example, redirect back with an error message.
        echo "<p>CAPTCHA not verified. Please go back and verify you are not a robot.</p>";
        return; // Stop executing further code.
    }

    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$recaptchaResponse&remoteip=$remoteIP");

    $responseKeys = json_decode($response, true);

    if ($responseKeys["success"]) {
    } else {
    }
}
?>
