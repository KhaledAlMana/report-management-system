<?php
declare(strict_types=1);

use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {

	$app->get('/', 'App\Controller\HomeController:index')->setName('home');

	$app->get('/reports', 'App\Controller\ReportsController:listReports')->setName('reports');
	$app->get('/reports/{page_no}', 'App\Controller\ReportsController:listReports')->setName('reports');

	$app->get('/report/{id}', 'App\Controller\ReportsController:viewReport')->setName('reports');

	$app->get('/profile', 'App\Controller\UserController:viewProfile')->setName('profile');
	$app->post('/profile', 'App\Controller\UserController:updateProfile')->setName('profile');


	$app->map(['GET', 'POST'],'/login', 'App\Controller\AuthController:login')->setName('login');
	$app->get('/logout', 'App\Controller\AuthController:logout')->setName('logout');

};
