<?php
namespace App\Controller;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

final class UserController extends BaseController
{
	public function viewProfile(Request $request, Response $response, array $args = []): Response
	{
		try {

			$userEntity = new \App\Entity\UserEntity($this->dbh);
			$user = $userEntity->getByID($_SESSION['userInfo']['userID']);

			$this->logger->info("Profile Dispatched");
		
		} catch (\Exception $e) {
			throw new \Slim\Exception\HttpInternalServerErrorException($request, $e->getMessage());
		}

		return $this->render($request, $response, 'profile.twig', ['user' => $user]);
	}

	public function updateProfile(Request $request, Response $response, array $args = []): Response
	{
		try {
			$data = $request->getParsedBody();
			$userEntity = new \App\Entity\UserEntity($this->dbh);
			$validated = $this->validate(['firstName','lastName'],$data);

			if($validated){

				// if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
				// 	$this->flash->addMessage('info', 'Invalid Email.');
				// 	return $response->withStatus(302)->withHeader('Location', '/profile');
				// }

				$passwordValidated = $this->validate(['password','cpassword'],$data);
				
				if($passwordValidated){
					if($data['password'] === $data['cpassword']) {
						
						$passwordPrepared	= hash_hmac("sha256", $this->passwordSalt.$data['password'], $this->passwordPepper); 
						$passwordHashed		= password_hash($passwordPrepared, PASSWORD_BCRYPT);
						$data['password']	= $passwordHashed;
					}else{
						$this->flash->addMessage('info', 'Password confirmation does not match the password.');
						return $response->withStatus(302)->withHeader('Location', '/profile');
					}
				}else{
					unset($data['password']);
					unset($data['cpassword']);
				}
				

				$user = $userEntity->update($_SESSION['userInfo']['userID'], $data);
				$this->logger->info("Profile Updated");
				$this->flash->addMessage('info', 'Profile updated.');

			}else{
				throw new \Exception('Profile Validation Failed');
			}
			
		} catch (\Exception $e) {
			$this->flash->addMessage('info', $e->getMessage());
			$this->logger->info("Profile Failed");			
		}

		return $response->withStatus(302)->withHeader('Location', '/profile');
	}



}
