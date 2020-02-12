<?php
declare(strict_types=1);
ini_set('date.timezone', 'Asia/Riyadh');
use DI\ContainerBuilder;
use Monolog\Logger;

return function (ContainerBuilder $containerBuilder) {
	$rootPath = realpath(__DIR__ . '/..');

	// Global Settings Object
	$containerBuilder->addDefinitions([
		'settings' => [
			// Base path
			'base_path' => '',
		
			// Is debug mode
			'debug' => (getenv('APPLICATION_ENV') != 'production'),

			// 'Temprorary directory
			'temporary_path' => $rootPath . '/var/tmp',

			// Route cache
			'route_cache' =>$rootPath . '/var/routes.cache',

			// View settings
			'view' => [
				'template_path' =>$rootPath . '/tmpl',
				'twig' => [
					'cache' =>$rootPath . '/var/cache/twig',
					'debug' => (getenv('APPLICATION_ENV') != 'production'),
					'auto_reload' => true,
				],
			],

			// pdo settings
			'pdo' => [
				'engine' => 'mysql',
				'host' => 'localhost',
				'database' => 'rms',
				'username' => 'root',
				'password' => 'root',
				'charset' => 'utf8mb4',
				'collation' => 'utf8mb4_general_ci',
	
				'options' => [
					PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
					PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
					PDO::ATTR_EMULATE_PREPARES   => true,
				],
			],

			// monolog settings
			'logger' => [
				'name' => 'app',
				'path' =>  getenv('docker') ? 'php://stdout' : $rootPath . '/var/log/app.log',
				'level' => (getenv('APPLICATION_ENV') != 'production') ? Logger::DEBUG : Logger::INFO,
			]
		],
	]);

	if (getenv('APPLICATION_ENV') == 'production') { // Should be set to true in production
		$containerBuilder->enableCompilation($rootPath . '/var/cache');
	}
};
