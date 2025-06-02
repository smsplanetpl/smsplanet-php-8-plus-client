# SMSPlanet PHP Client

Prosty klient PHP do wysyłania SMS-ów przez API SMSPLANET z obsługą tokenów autoryzacyjnych.

---

## Wymagania

- PHP 8.0 lub nowsze
- Włączone rozszerzenie cURL w PHP
- Token API SMSPlanet (dostępny w panelu klienta https://panel.smsplanet.pl/s/api)

---

## Instalacja

1. Skopiuj katalog projektu do swojego serwera 
2. Upewnij się, że masz włączone rozszerzenie cURL (`php_curl`)
3. (Opcjonalnie) Skonfiguruj certyfikaty SSL, jeśli pojawią się błędy SSL (https://curl.se/ca/cacert.pem)
---

## Konfiguracja

W pliku `examples/send_sms_with_token.php` wpisz swój token API:

```php
$token = 'TWÓJ_TOKEN_TUTAJ';

# Instrukcja odbierania SMS-ów przez webhook SMSPlanet

---

## Odbieranie wiadomości SMS

Platforma umożliwia skonfigurowanie przekierowania wiadomości SMS, które otrzymaliśmy z numeru dwukierunkowego (2WAY). Wszystkie odebrane wiadomości trafiają do panelu klienta, również po przekierowaniu. Przekierowanie może odbywać się na 3 sposoby:

- przekierowanie na numer telefonu
- przekierowanie na adres email
- przekierowanie na adres URL

Przekierowanie należy skonfigurować w panelu klienta:
https://panel.smsplanet.pl/s/receive/settings

