<?php
return [
    'name' => "Boris blog",
    'title' => "Boris blog",
    'subtitle' => 'A clean blog written in Laravel 5.1',
    'description' => 'This is my meta description',
    'author' => 'Boris Chen',
    'page_image' => '11130f096dbec743756b69cbb22f9.jpg',
    'posts_per_page' => 10,
    'rss_size' => 25,
    'contact_email' => env('MAIL_FROM'),
    'uploads' => [
//        'storage' => 'local',
//        'webpath' => '/uploads/',
        'storage' => 's3',
        'webpath' => 'https://s3-ap-southeast-2.amazonaws.com/boris-blog',
    ],
];

