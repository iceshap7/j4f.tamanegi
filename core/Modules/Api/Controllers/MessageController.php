<?php

namespace Core\Modules\Api\Controllers;

use App\Http\Controllers\Controller;
use Core\Services\MessageService;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    protected $service;

    function __construct(MessageService $message)
    {
        $this->service = $message;
    }

    public function talk(Request $request)
    {
        return $this->service->talk($request->message);
    }
}
