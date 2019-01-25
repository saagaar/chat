<?php

use \Illuminate\Container\Container;
use \Illuminate\Database\Capsule\Manager as Capsule;
use \Illuminate\Events\Dispatcher;

$container = new Container;
$capsule = new Capsule;

$capsule->addConnection([
	'driver' => 'mysql',
	'host' => 'localhost',
	'database' => 'guru',
	'username' => 'root',
	'password' => '123456',
	'charset' => 'utf8',
	'collation' => 'utf8_unicode_ci',
	'prefix' => '',
]);

$capsule->setEventDispatcher(new Dispatcher($container));
$capsule->setAsGlobal();
$capsule->bootEloquent();
