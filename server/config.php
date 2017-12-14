<?php

$config = [
    'rootPath' => '',

    'appId' => 'wx31e349a1b30d8269',

    'appSecret' => 'cc085eb7b04fe4446f6a97c2637d9302',

    'useQcloudLogin' => true,

    /**
     * MySQL 配置，用来存储 session 和用户信息
     * 若使用了腾讯云微信小程序解决方案
     * 开发环境下，MySQL 的初始密码为您的微信小程序 AppID
     */
    'mysql' => [
        'host' => '172.16.154.124',
        'port' => 3306,
        'user' => 'root',
        'db'   => 'cAuth',
        'pass' => 'a6nDJt2k42900',
        'char' => 'utf8mb4'
    ],

    'cos' => [
        'region' => 'cn-sorth',
        // Bucket 名称
        'fileBucket' => 'woyaomai',
        // 文件夹
        'uploadFolder' => ''
    ],

    // 微信登录态有效期
    'wxLoginExpires' => 7200,
    'wxMessageToken' => 'abcdefgh'
];
