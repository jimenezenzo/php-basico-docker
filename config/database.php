<?php

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule();

$capsule->addConnection([
    'driver' => 'mysql',
    'host' => 'db',
    'database' => 'MYSQL_DATABASE',
    'username' => 'MYSQL_USER',
    'password' => 'MYSQL_PASSWORD',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => ''
]);

$capsule->bootEloquent();