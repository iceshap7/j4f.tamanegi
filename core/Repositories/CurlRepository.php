<?php

namespace Core\Repositories;

use Core\Repositories\Contracts\CurlRepositoryContract;

class CurlRepository implements CurlRepositoryContract
{
    public function exec(string $url, array $params) : string
    {
        $headers = [];

        if (array_key_exists('cookies', $params)) {
            $cookies = 'Cookie:';
            foreach ($params['cookies'] as $k => $v) {
                $cookies .= $k . '=' . $v . ';';
            }

            $headers []= $cookies;
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLINFO_HEADER_OUT, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($ch);
        curl_close($ch);

        return $response;
    }
}
