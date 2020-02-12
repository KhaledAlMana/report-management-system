<?php
namespace App\Controller;

use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

abstract class BaseController
{
	protected $view;
	protected $logger;
	protected $flash;
	protected $dbh;  // Database Handler
	protected $passwordSalt;
	protected $passwordPepper;

	public function __construct(ContainerInterface $container)
	{
		$this->view = $container->get('view');
		$this->logger = $container->get('logger');
		$this->flash = $container->get('flash');
		$this->dbh = $container->get('dbh');
		$this->passwordSalt = $container->get('passwordSalt');
		$this->passwordPepper = $container->get('passwordPepper');
	}

	protected function render(Request $request, Response $response, string $template, array $params = []): Response
	{
		if (empty($_SESSION['userInfo']) && $request->getUri()->getPath() != "/login"){
			return $response->withStatus(302)->withHeader('Location', '/login');
		}
		$params['flash'] = $this->flash->getMessage('info');
		$params['userInfo'] = $request->getAttribute('userInfo');

		return $this->view->render($response, $template, $params);
	}

	protected function validate($params, $values){
		foreach($params as $param){
			if(!isset($values[$param]) && empty($values[$param])){
				return false;
			}
		}
		return true;
	}

}
