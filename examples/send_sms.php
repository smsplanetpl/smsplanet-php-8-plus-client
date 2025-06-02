<?php
require_once __DIR__ . '/../src/SmsClient.php';

use Smsplanet\SmsClient;

$client = new SmsClient();

$params = [
    'from' => 'TEST', // Zgłoś pole nadawcy na https://panel.smsplanet.pl/s/sender
    'to' => '555666777', // Numer telefonu
    'msg' => 'Wiadomość testowa z tokenem!'
];

$token = '12345678901234567890'; // Wstaw tutaj swój token

$response = $client->sendSms($params, $token);

print_r($response);
