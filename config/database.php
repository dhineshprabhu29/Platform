<?php

/**
 * Copyright (c) 2017 - present, DocsPen, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */
 
// REDIS - Split out configuration into an array
if (env('REDIS_SERVERS', false)) {
    $redisServerKeys = ['host', 'port', 'database'];
    $redisServers = explode(',', trim(env('REDIS_SERVERS', '127.0.0.1:6379:0'), ','));
    $redisConfig = [
        'cluster' => env('REDIS_CLUSTER', false),
    ];
    foreach ($redisServers as $index => $redisServer) {
        $redisServerName = ($index === 0) ? 'default' : 'redis-server-'.$index;
        $redisServerDetails = explode(':', $redisServer);
        if (count($redisServerDetails) < 2) {
            $redisServerDetails[] = '6379';
        }
        if (count($redisServerDetails) < 3) {
            $redisServerDetails[] = '0';
        }
        $redisConfig[$redisServerName] = array_combine($redisServerKeys, $redisServerDetails);
    }
}

$mysql_host = env('DB_HOST', 'localhost');
$mysql_host_exploded = explode(':', $mysql_host);
$mysql_port = env('DB_PORT', 3306);
if (count($mysql_host_exploded) > 1) {
    $mysql_host = $mysql_host_exploded[0];
    $mysql_port = intval($mysql_host_exploded[1]);
}

return [

    /*
    |--------------------------------------------------------------------------
    | PDO Fetch Style
    |--------------------------------------------------------------------------
    |
    | By default, database results will be returned as instances of the PHP
    | stdClass object; however, you may desire to retrieve records in an
    | array format for simplicity. Here you can tweak the fetch style.
    |
    */

    'fetch' => PDO::FETCH_CLASS,

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */

    'default' => env('DB_CONNECTION', 'mysql'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */

    'connections' => [

        'sqlite' => [
            'driver'   => 'sqlite',
            'database' => storage_path('database.sqlite'),
            'prefix'   => '',
        ],

        'mysql' => [
            'driver'    => 'mysql',
            'host'      => $mysql_host,
            'database'  => env('DB_DATABASE', 'forge'),
            'username'  => env('DB_USERNAME', 'forge'),
            'password'  => env('DB_PASSWORD', ''),
            'port'      => $mysql_port,
            'charset'   => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ],

        'mysql_testing' => [
            'driver'    => 'mysql',
            'host'      => '127.0.0.1',
            'database'  => 'docspen-test',
            'username'  => env('MYSQL_USER', 'docspen-test'),
            'password'  => env('MYSQL_PASSWORD', 'docspen-test'),
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict'    => false,
        ],

        'pgsql' => [
            'driver'   => 'pgsql',
            'host'     => env('DB_HOST', 'localhost'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset'  => 'utf8',
            'prefix'   => '',
            'schema'   => 'public',
        ],

        'sqlsrv' => [
            'driver'   => 'sqlsrv',
            'host'     => env('DB_HOST', 'localhost'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset'  => 'utf8',
            'prefix'   => '',
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run in the database.
    |
    */

    'migrations' => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer set of commands than a typical key-value systems
    | such as APC or Memcached. Laravel makes it easy to dig right in.
    |
    */

    'redis' => env('REDIS_SERVERS', false) ? $redisConfig : [],

];
