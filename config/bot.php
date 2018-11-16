<?php

return [
    'endpoint'  => env('BOT_ENDPOINT', 'http://simsimi.com/getRealtimeReq?lc=' . env('BOT_LANGUAGE_CODE', 'vn') . '&ft=1&normalProb=0&status=W&talkCnt=0&reqText='),
    'params'    => [
        'cookies'   => [
            'dotcom_session_key'    => env('BOT_SESSION_KEY', 's%3AygG-_lAlnlQQQSzGu3DPTzKqC7D8C_fF.1Vv48E6BcCJ%2FB2BraYxokovJKep8OQdNefyhXq1XzO8'),
            'user_displayName'      => env('BOT_USER_DISPLAY_NAME', '%C4%90%C3%ACnh%20Ti%E1%BA%BFn%20Tr%E1%BB%8Bnh'),
            'user_photo'            => 'undefined',
            'normalProb'            => '0',
            'lc'                    => env('BOT_LANGUAGE_CODE', 'vn'),
            'lname'                 => env('BOT_LANGUAGE_NAME', 'Ti%E1%BA%BFng%20Vi%E1%BB%87t'),
            'currentChatCnt'        => '0',
            'bbl_cnt'               => '1',
        ]
    ],

];
