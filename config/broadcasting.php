<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Broadcaster
    |--------------------------------------------------------------------------
    |
    | This option controls the default broadcaster that will be used by the
    | framework when an event needs to be broadcast. You may set this to
    | any of the connections defined in the "connections" array below.
    |
    | Supported: "reverb", "pusher", "ably", "redis", "log", "null"
    |
    */

    'default' => env('BROADCAST_CONNECTION', 'null'),

    /*
    |--------------------------------------------------------------------------
    | Broadcast Connections
    |--------------------------------------------------------------------------
    |
    | Here you may define all of the broadcast connections that will be used
    | to broadcast events to other systems or over WebSockets. Samples of
    | each available type of connection are provided inside this array.
    |
    */

    // 'connections' => [

    //     'pusher' => [
    //         'driver' => 'pusher',
    //         'key' => env('PUSHER_APP_KEY', 'local'),
    //         'secret' => env('PUSHER_APP_SECRET', 'local'),
    //         'app_id' => env('PUSHER_APP_ID', 'local'),
    //         'options' => [

    //             'host' => env('REVERB_HOST', '127.0.0.1'),
    //             'port' => env('REVERB_PORT', 6001),
    //             'scheme' => env('REVERB_SCHEME', 'http'),
    //             'useTLS' => true,
    //             'encrypted' => false,
    //         ],
    //     ],
    
    //     // KHÔNG cần 'reverb' connection ở đây
    // ],
    

];
