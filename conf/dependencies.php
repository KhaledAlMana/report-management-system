<?php
declare(strict_types=1);

use DI\ContainerBuilder;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Monolog\Processor\UidProcessor;
use Psr\Container\ContainerInterface;
use Psr\Log\LoggerInterface;
use Doctrine\ORM\EntityManager;
use Slim\Views\Twig;
use Doctrine\ORM\Tools\Setup;


return function (ContainerBuilder $containerBuilder) {
	$containerBuilder->addDefinitions([
		'logger' => function (ContainerInterface $container) {
			$settings = $container->get('settings');

			$loggerSettings = $settings['logger'];
			$logger = new Logger($loggerSettings['name']);

			$processor = new UidProcessor();
			$logger->pushProcessor($processor);

			$handler = new StreamHandler($loggerSettings['path'], $loggerSettings['level']);
			$logger->pushHandler($handler);

			return $logger;
		},
		'dbh' => function (ContainerInterface $container) {
			$settings = $container->get('settings');
			$dsn = "{$settings['pdo']['engine']}:host={$settings['pdo']['host']};dbname={$settings['pdo']['database']};charset={$settings['pdo']['charset']}";
			$username = $settings['pdo']['username'];
			$password = $settings['pdo']['password'];
			return new PDO($dsn, $username, $password, $settings['pdo']['options']);
		},
		'session' => function (ContainerInterface $container) {
			return new \App\Middleware\SessionMiddleware;
		},
		'flash' => function (ContainerInterface $container) {
			$session = $container->get('session');
			return new \Slim\Flash\Messages($session);
		},
		'view' => function (ContainerInterface $container) {
			$settings = $container->get('settings');
			return Twig::create($settings['view']['template_path'], $settings['view']['twig']);
		},
		'passwordSalt' => 'xDLetSdo',
		'passwordPepper'=> 'TH!$',
	]);
};

