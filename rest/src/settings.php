<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'vowme-rest',
            'path' => __DIR__ . '/../logs/vowme.log',
            'level' => \Monolog\Logger::DEBUG,
        ],
        'db' => [
            // Eloquent configuration
            'driver'    => 'mysql',
            'host'      => 'localhost',
            'database'  => 'vowme',
            'username'  => 'root',
            'password'  => 'jibran',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'database.connections' => 30,
            'prefix'    => '',
        ],
    ],
];
