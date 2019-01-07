<?php

namespace ViecNgay\LaraSignal;

use \Exception;

class LaraSignal
{
    private $createNotificationUrl = 'https://onesignal.com/api/v1/notifications';

    public function sendToDevice($deviceIds = [], $title = 'Title', $subTitle = 'Default Subtitle', $payload = [], $options = [])
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
        $json = [
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
        ];
        $json = array_merge($json, $options);
        $data = [
            'headers' => [
                'Authorization' => 'Basic ' . config('larasignal.one_signal_rest_api_key'),
                'Content-Type'     => 'application/json',
            ],
            'json' => $json
        ];


        $res = $client->request('POST', $this->createNotificationUrl, $data);
        return true;
    }

    public function sendToSegments($segments = [], $title = 'Title', $subTitle = 'Default Subtitle', $payload = [], $options = [])
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

        $json = [
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
            "included_segments" => $segments,
        ];
        $json = array_merge($json, $options);
        $data = [
            'headers' => [
                'Authorization' => 'Basic ' . config('larasignal.one_signal_rest_api_key'),
                'Content-Type' => 'application/json',
            ],
            'json' => $json
        ];

        $res = $client->request('POST', $this->createNotificationUrl, $data);
        return true;
    }
}
