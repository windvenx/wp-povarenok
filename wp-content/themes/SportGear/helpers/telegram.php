<?php

class Telegram
{
    private string $token;
    private array $info;


    public function __construct()
    {
        $this->token = '7991190685:AAEJalXTfUYQ6jPlUVhH_9EDwCMH1oelJMs';
        $this->info = [
            'info_chat_id_default' => '-1002424380772'
        ];

    }





    public function send_text_to_telegram(string $message): void
    {
        $api_url = "https://api.telegram.org/bot{$this->token}/sendMessage";

        $args = [
            'body' => [
                'chat_id' => $this->info["info_chat_id_default"],
                'text' => $message,
            ],
            'headers' => ['Content-Type' => 'application/x-www-form-urlencoded']
        ];

        $response = wp_remote_post($api_url, $args);

        if (is_wp_error($response)) {
            error_log('Telegram API request failed: ' . $response->get_error_message());
        }
    }

    private function send_image_to_telegram_curl(string $file_path, string $chat_id): void
    {
        $bot_url = "https://api.telegram.org/bot{$this->token}/sendPhoto";

        $post_fields = [
            'chat_id' => $chat_id,
            'photo' => new CURLFile(realpath($file_path)),
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type:multipart/form-data']);
        curl_setopt($ch, CURLOPT_URL, $bot_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields);
        $output = curl_exec($ch);
        if (curl_errno($ch)) {
            error_log('Curl error: ' . curl_error($ch));
        }
        curl_close($ch);
    }

    private function verify_recaptcha($recaptcha_response): array
    {
        $recaptcha_secret = get_option('secret_key');

        $url = "https://www.google.com/recaptcha/api/siteverify";
        $args = [
            'secret' => $recaptcha_secret,
            'response' => $recaptcha_response,
            'remoteip' => $_SERVER['REMOTE_ADDR']
        ];

        $response = wp_remote_post($url, ['body' => $args]);

        if (is_wp_error($response)) {
            return ['Ошибка при проверке reCAPTCHA', false];
        }

        $response_body = wp_remote_retrieve_body($response);
        $result = json_decode($response_body, true);

        if ($result['success'] === true) {
            return ['Проверка reCAPTCHA пройдена', true];
        } else {
            return ['Проверка reCAPTCHA не пройдена', false];
        }
    }
}
