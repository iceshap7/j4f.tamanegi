<?php

namespace Core\Services;

use Core\Repositories\CurlRepository;
use Core\Services\Contracts\MessageServiceContract;

class MessageService implements MessageServiceContract
{
    protected $curl;
    protected $url;
    protected $params;

    function __construct(CurlRepository $curl)
    {
        $this->curl = $curl;
        $this->url = config('bot.endpoint');
        $this->params = config('bot.params');
    }

    public function talk(string $message) : array
    {
        $response = "...";
        $data = $this->curl->exec($this->url . urlencode($message), $this->params);

        $data = json_decode($data);

        if ($data->status == 200) {
            $response = str_replace('ニュン', '玉ねぎ', $data->respSentence);
        }

        return ['response' => $response];
    }
}
