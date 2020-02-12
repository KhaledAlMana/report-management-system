<?php

namespace App\Controller;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

final class AuthController extends BaseController
{

	private function auth(string $email, string $password)
	{
		$userEntity = new \App\Entity\UserEntity($this->dbh);
		$userInfo = $userEntity->getByEmail($email);

		$passwordPrepared = hash_hmac("sha256", $this->passwordSalt.$password, $this->passwordPepper); 

		if ($userInfo == null) return null;
		if (!password_verify($passwordPrepared, $userInfo['password'])) return null;

		return $userInfo;
	}

	public function login(Request $request, Response $response, array $args = []): Response
	{

		if ($request->getMethod() == 'POST') {

			$data = $request->getParsedBody();

			if (empty($data["email"]) || empty($data["password"])) {
				$this->flash->addMessage('info', 'Empty value in login/password');
				return $response->withStatus(302)->withHeader('Location', '/login');
			}
			// Check the user username / pass
			$userInfo = $this->auth($data["email"], $data['password']);
			if ($userInfo == null) {
				$this->flash->addMessage('info', 'Invalid login/password');
				return $response->withStatus(302)->withHeader('Location', '/login');
			}

			$session = $request->getAttribute('session');
			$session['logged'] = true;
			$session['userInfo'] = [
				'userID' => $userInfo['userID'],
				'firstName' => $userInfo['firstName'],
				'lastName' => $userInfo['lastName'],
				'email' => $userInfo['email'],
				'isAdmin' => $userInfo['isAdmin']
			];

			$this->flash->addMessage('info', 'Logged In');
			return $response->withStatus(302)->withHeader('Location', '/');
		}
		return $this->view->render($response, 'login.twig', ['flash' => $this->flash->getMessage('info') , 'userInfo' => $request->getAttribute('userInfo')]);
	}

	public function logout(Request $request, Response $response, array $args = []): Response
	{
		$session = $request->getAttribute('session');
		$session['logged'] = false;
		unset($session['userInfo']);
		return $response->withStatus(302)->withHeader('Location', '/login');
	}
}
