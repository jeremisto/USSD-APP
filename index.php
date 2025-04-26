<?php
$sessionId = $_POST["session"] ?? '';
$service = $_POST["serviceCode"] ?? '';
$phoneNumber = $_POST["phoneNumber"] ?? '';
$text = $_POST["text"] ?? '';

// USSD logic
if ($text == "") {
    $response = "CON What would you want to check \n";
    $response .= "1. My Account No \n";
    $response .= "2. My phone Number";    
} else if ($text == "1") {
    $response = "CON Choose account information you want to view\n";
    $response .= "1. Account Number \n";
    $response .= "2. Account Balance"; 
} else if ($text == "2") {
    $response = "END Your number is $phoneNumber";
} else if ($text == "1*1") {
    $accountNumber = "ACC1001";
    $response = "END Your account number is $accountNumber";
} else if ($text == "1*2") {
    $balance = "RWF 10,000";
    $response = "END Your balance is $balance";
} else {
    $response = "END Invalid input.";
}

// Output response
header('Content-Type: text/plain');
echo $response;
?>

