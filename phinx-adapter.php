<?php

/**
 * Ease APP Template - Phinx database adapter.
 *
 * @author Vítězslav Dvořák <info@vitexsoftware.cz>
 * @copyright  2020 Vitex Software
 */
if (file_exists('./vendor/autoload.php')) {
    include_once './vendor/autoload.php';
} else {
    include_once '../vendor/autoload.php';
}

include 'includes/configure.php';

$prefix = file_exists('./db/') ? './db/' : '../db/';

$sqlOptions = [
    'dbType' => constant('DB_CONNECTION'),
    'server' => constant('DB_SERVER'),
    'username' => constant('DB_SERVER_USERNAME'),
    'password' => constant('DB_SERVER_PASSWORD'),
    'database' => constant('DB_DATABASE'),
    'port' => constant('DB_SERVER_PORT')
];

if (strstr(Ease\Functions::cfg('DB_CONNECTION'), 'sqlite')) {
    $sqlOptions['database'] = $prefix . basename(Ease\Functions::cfg('DB_DATABASE'));
}
$engine = new \Ease\SQL\Engine(null, $sqlOptions);
$cfg = [
    'paths' => [
        'migrations' => [$prefix . 'migrations'],
        'seeds' => [$prefix . 'seeds']
    ],
    'environments' =>
    [
        'default_database' => 'development',
        'development' => [
            'adapter' => Ease\Functions::cfg('DB_CONNECTION'),
            'name' => $engine->database,
            'connection' => $engine->getPdo($sqlOptions)
        ],
        'default_database' => 'production',
        'production' => [
            'adapter' => Ease\Functions::cfg('DB_CONNECTION'),
            'name' => $engine->database,
            'connection' => $engine->getPdo($sqlOptions)
        ],
    ]
];

return $cfg;
