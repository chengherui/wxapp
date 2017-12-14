<?php
/**
 * Wafer php demo 配置文件
 */

$config = [
    'rootPath' => '',

    // 微信小程序 AppID
    'appId' => 'wx31e349a1b30d8269',

    // 微信小程序 AppSecret
    'appSecret' => 'cc085eb7b04fe4446f6a97c2637d9302',

    // 使用腾讯云代理登录
    'useQcloudLogin' => true,

    /**
     * MySQL 配置，用来存储 session 和用户信息
     * 若使用了腾讯云微信小程序解决方案
     * 开发环境下，MySQL 的初始密码为您的微信小程序 AppID
     */
    'mysql' => [
       // 'host' => 'localhost',
        'host' => '172.16.154.124',
       
        'port' => 3306,
        'user' => 'root',
        'db'   => 'cAuth',
        //'pass' => 'wx31e349a1b30d8269',
        
        'pass' => 'a6nDJt2k42900',
        'char' => 'utf8mb4'
    ],

    'cos' => [
        /**
         * 区域
         * 上海：cn-east
         * 广州：cn-sorth
         * 北京：cn-north
         * 广州二区：cn-south-2
         * 成都：cn-southwest
         * 新加坡：sg
         * @see https://www.qcloud.com/document/product/436/6224
         */
        'region' => 'cn-sorth',
        // Bucket 名称
        'fileBucket' => 'wafer',
        // 文件夹
        'uploadFolder' => ''
    ],

    // 微信登录态有效期
    'wxLoginExpires' => 7200,
    'wxMessageToken' => 'abcdefgh'
];
