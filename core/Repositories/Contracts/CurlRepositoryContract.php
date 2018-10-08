<?php

namespace Core\Repositories\Contracts;

interface CurlRepositoryContract
{
    public function exec(string $url, array $params) : string;
}
