<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/23
 * Time: 11:05
 */
return [
    /***************MYSQL SERVER***************************/
    'MYSQL' => [
        'host'          => '127.0.0.1',
        'port'          => '3306',
        'user'          => 'root',
        'timeout'       => '0',
        'charset'       => 'utf8mb4',
        'password'      => '19940702yu',
        'database'      => 'easy',
        'POOL_MAX_NUM'  => '20',
        'POOL_TIME_OUT' => '0.1',
    ],
    /*****************REDIS SERVER*******************************/
    'REDIS'=>[
        'host'          => '127.0.0.1',
        'port'          => '6379',
        'auth'          => '19940702yu',
        'POOL_MAX_NUM'  => '20',
        'POOL_MIN_NUM'  => '5',
        'POOL_TIME_OUT' => '0.1',
    ]
];