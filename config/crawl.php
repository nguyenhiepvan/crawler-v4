<?php
/**
 *
 * Created by PhpStorm.
 * User: Hiệp Nguyễn
 * Filename: crawl.php
 * Date: 17/04/2021
 * Time: 16:35
 */
return [
    "browers" => [
        // Guzzle default config
        'guzzle' => [
            'verify'          => false,
            'connect_timeout' => 15, // 15 seconds
            'headers'         => [
                'User-Agent' => 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:64.0) Gecko/20100101 Firefox/64.0',
            ],
            'http_errors'     => false,
            'allow_redirects' => [
                'track_redirects' => true
            ],
            'cookies'         => true,
        ],
    ]
];
