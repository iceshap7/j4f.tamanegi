<?php

namespace Core\Services\Contracts;

interface MessageServiceContract
{
    public function talk(string $message) : array;
}
