<?php
namespace App\Controller;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

final class HomeController extends BaseController
{
	
	public function index(Request $request, Response $response, array $args = []): Response
	{
		$reportsEntity = new \App\Entity\ReportsEntity($this->dbh);
		$reports = $reportsEntity->getByUserID($_SESSION['userInfo']['userID']);

		$this->logger->info("Home page action dispatched");
		return $this->render($request, $response, 'reports.twig', ['reports' => $reports]);
	}

}
