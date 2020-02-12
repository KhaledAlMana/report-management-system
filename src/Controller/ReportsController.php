<?php
namespace App\Controller;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

final class ReportsController extends BaseController
{

	public function listReports(Request $request, Response $response, array $args = []): Response
	{
		try{
			$reportsEntity = new \App\Entity\ReportsEntity($this->dbh);
			
			$data = $request->getParsedBody();
			$limit = isset($args['limit']) && intval($args['limit']) && $args['limit'] > 0 ? $data['limit'] : 10;
			$page_no = isset($args['page_no']) && intval($args['page_no']) && $args['page_no'] > 0? $args['page_no'] : 1;

			$reports = $reportsEntity->getAll($page_no, $limit, $_SESSION['userInfo']['isAdmin']);

			$this->logger->info("List Reports Page Dispatched");
		
		} catch (\Exception $e) {
			throw new \Slim\Exception\HttpInternalServerErrorException($request, $e->getMessage());
		}

		return $this->render($request, $response, 'reports.twig', ['reports' => $reports]);
	}

	public function viewReport(Request $request, Response $response, array $args = []): Response
	{
		try{
			$reportsEntity = new \App\Entity\ReportsEntity($this->dbh);
			$report = $reportsEntity->getByID(intval($args['id']));
			$this->logger->info("View Report {\"reportID\":".intval($args['id'])."} Page Dispatched");
		
		} catch (\Exception $e) {
			throw new \Slim\Exception\HttpInternalServerErrorException($request, $e->getMessage());
		}

		return $this->render($request, $response, 'report.twig', ['report' => $report]);
	}

}
