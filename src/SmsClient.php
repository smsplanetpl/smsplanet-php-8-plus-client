<?php
namespace Smsplanet;

class SmsClient
{
    /**
     * Wysyła SMS za pomocą metody POST 
     */
   public function sendSms(array $params, ?string $token = null): array {
    $endpoint = 'https://api2.smsplanet.pl/sms';

    $ch = curl_init($endpoint);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));

    $headers = [
        'Content-Type: application/x-www-form-urlencoded'
    ];

    if ($token) {
        $headers[] = 'Authorization: Bearer ' . $token;
    }

    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $response = curl_exec($ch);
    $error = curl_error($ch);
    curl_close($ch);

    if ($response === false) {
        return [
            'success' => false,
            'error' => $error ?: 'Unknown cURL error'
        ];
    }

    $decoded = json_decode($response, true);
    if (!is_array($decoded)) {
        return [
            'success' => false,
            'error' => 'Invalid JSON response from API',
            'raw_response' => $response
        ];
    }

    return $decoded;
}

}
