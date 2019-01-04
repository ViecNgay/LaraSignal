<?php

namespace ViecNgay\LaraSignal;

use \Exception;

class LaraSignal
{
    private $createNotificationUrl = 'https://onesignal.com/api/v1/notifications';

    public function sendToDevice($deviceIds = [], $title = 'Title', $subTitle = 'Default Subtitle', $payload = [], $url = [
        'web_url' => '',
        'app_url' => ''
    ], $imageUrl = null, $options = [])
    {
        if (empty($title)) {
            throw new Exception("Title không được để trống");
        }
        if (empty($deviceIds)) {
            throw new Exception("Device ID không được để trống");
        }
        if (empty($subTitle)) {
            throw new Exception("Subtitle không được để trống");
        }
        if (empty($payload)) {
            throw new Exception("Payload không được để trống");
        }
        $deviceIds = (array) $deviceIds;
        $client = new \GuzzleHttp\Client();

        $data = [
            'headers' => [
                'Authorization' => 'Basic ' . config('larasignal.one_signal_rest_api_key'),
                'Content-Type'     => 'application/json',
            ],
            'json' => [
                "app_id" => config('larasignal.one_signal_app_id'),
                "contents" => [
                    "en" => $subTitle,
                    "vi" => $subTitle
                ],
                "headings" => [
                    "en" => $title,
                    "vi" =>  $title
                ],
                "data" => $payload,
                "include_player_ids" => $deviceIds,
                "web_url" => $url['web_url'],
                "app_url" => $url['app_url'],
                "android_led_color" => "FF0000FF",
                "big_picture" => $imageUrl,
                "chrome_big_picture" => $imageUrl
            ]
        ];

        $data = array_merge($data, $options);
        $res = $client->request('POST', $this->createNotificationUrl, $data);
        return true;
    }

    public function sendToSegments($segments = [], $title = 'Title', $subTitle = 'Default Subtitle', $payload = [], $url = [
        'web_url' => '',
        'app_url' => ''
    ], $imageUrl = null)
    {
        if (empty($title)) {
            throw new Exception("Title không được để trống");
        }
        if (empty($segments)) {
            throw new Exception("Device ID không được để trống");
        }
        if (empty($subTitle)) {
            throw new Exception("Subtitle không được để trống");
        }
        if (empty($payload)) {
            throw new Exception("Payload không được để trống");
        }
        $segments = (array) $segments;
        $client = new \GuzzleHttp\Client();

        $data = [
            'headers' => [
                'Authorization' => 'Basic ' . config('larasignal.one_signal_rest_api_key'),
                'Content-Type'     => 'application/json',
            ],
            'json' => [
                "app_id" => config('larasignal.one_signal_app_id'),
                "contents" => [
                    "en" => $subTitle,
                    "vi" => $subTitle
                ],
                "headings" => [
                    "en" => $title,
                    "vi" =>  $title
                ],
                "data" => $payload,
                "include_player_ids" => $deviceIds,
                "web_url" => $url['web_url'],
                "app_url" => $url['app_url'],
                "android_led_color" => "FF0000FF",
                "big_picture" => $imageUrl,
                "chrome_big_picture" => $imageUrl
            ]
        ];

        $data = array_merge($data, $options);
        $res = $client->request('POST', $this->createNotificationUrl, $data);
        return true;
    }
}
