<?php

// +----------------------------------------------------------------------
// | Redis
// +----------------------------------------------------------------------

return [
    //公共数据
    'common_data' => [
        'host'   => '47.94.154.10',
        'port'   => '6380',
        'password'=> "redis1qa",
        'timeout' => 86400,
        'select' => 0,
    ],
    //用户登陆使用
    'user_login' => [
        'host'   => '47.94.154.10',
        'port'   => '6380',
        'password'=> "redis1qa",
        'timeout' => 86400,
        'select' => 1,
    ],
    //场所使用
    'place' => [
        'host'   => '47.94.154.10',
        'port'   => '6380',
        'password'=> "redis1qa",
        'timeout' => 86400,
        'select' => 2,
    ],
];